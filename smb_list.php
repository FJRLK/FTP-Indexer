<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_HOST_LIST', 1);

require_once ("db.php");

$per_page = 100;
$position = intval (getvar ("position"));
$HID = intval (getvar ("HID"));
$hostname = strtoupper (trim (getvar ("hostname")));
$ip = trim (getvar ("ip"));
$workgroup = strtoupper (trim (getvar ("workgroup")));
$period = getint (getvar ("period"), 0, 255);
$counter = getint (getvar ("counter"), 0, 255);
$scanorder = getint (getvar ("scanorder"), -128, 127);
$expirecount = getint (getvar ("expirecount"), 0, 255);
$host_delete = intval (getvar ("host_delete"));
$host_purge = intval (getvar ("host_purge"));
$sort_by = strtolower (trim (getvar ("sort_by")));

switch ($sort_by)
{
	case 'size':
		$sort = 'TotalFileSize DESC';
		break;
	case 'date':
		$sort = 'LastScan DESC';
		break;
	case 'group':
		$sort = 'WorkGroup, HostName';
		break;
	default:
		$sort_by = 'name';
		$sort = 'HostName';
		break;
}

$message = "";
if (!$connected2master)
{
	$message = '<font color="' . $color_error . '">' . $tr["Can't connect to master database"] . '</font><br />';
}
else if (getvar ('add'))
{
		if (!($rights & RIGHT_SMB_ADD))
			break;
		if ($hostname == '' || is_invalid_IP ($ip))
		{
			if ($rights & RIGHT_SMB_EDIT)
				header ("Location: smb_host.php?lang=$lang" . $aid_url . "&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&ip=" . urlencode ($ip) . "&workgroup=" . urlencode ($workgroup) . "&period=$period&counter=$counter&scanorder=$scanorder&expirecount=$expirecount");
			else
				header ("Location: smb_host.php?lang=$lang" . $aid_url . "&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&ip=" . urlencode ($ip) . "&workgroup=" . urlencode ($workgroup) . "&period=$period&counter=$counter");
			die ("");
		}
		mysql_query ("LOCK TABLES host WRITE, smb WRITE", $mdb);
		$q = mysql_query ("SELECT host.HID,Flags FROM smb LEFT JOIN host USING (HID) WHERE HostName='" . addslashes ($hostname) . "'", $mdb);
		if ($q)
		{
			if (mysql_num_rows ($q) == 0)
			{
				$flags = HOST_MANUAL_CHANGES;
				if ($rights & RIGHT_SMB_EDIT)
					mysql_query ("INSERT INTO host (IP,HostType,ExpireCount,Period,Counter,ScanOrder,Flags) VALUES ('$ip'," . HOSTTYPE_SMB . ",$expirecount,$period,$counter,$scanorder,$flags)", $mdb);
				else
					mysql_query ("INSERT INTO host (IP,HostType,ExpireCount,Period,Counter,Flags) VALUES ('$ip'," . HOSTTYPE_SMB . ",1,$period,$counter,$flags)", $mdb);
				mysql_query ("INSERT INTO smb (HID,HostName,WorkGroup) VALUES (LAST_INSERT_ID(),'" . addslashes ($hostname) . "','" . addslashes ($workgroup) . "')", $mdb);
				$message = '<font color="' . $color_success . '">' . htmlspecialchars ($hostname) . ' ' . $tr["was added to list"] . '</font><br />';
			}
			else
			{
				$row = mysql_fetch_assoc ($q);
				if ($row["Flags"] & (HOST_DELETE | HOST_PURGE))
				{
					$unset_flags = HOST_DELETE | HOST_PURGE;
					$set_flags = HOST_MANUAL_CHANGES;
					if ($rights & RIGHT_SMB_EDIT)
						mysql_query ("UPDATE host SET IP='$ip',ExpireCount=$expirecount,Period=$period,Counter=$counter,ScanOrder=$scanorder,Flags=(Flags&~$unset_flags)|$set_flags WHERE HID=" . $row["HID"], $mdb);
					else
						mysql_query ("UPDATE host SET IP='$ip',ExpireCount=1,Period=$period,Counter=$counter,Flags=(Flags&~$unset_flags)|$set_flags WHERE HID=" . $row["HID"], $mdb);
					mysql_query ("UPDATE smb SET Workgroup='" . addslashes ($workgroup) . "' WHERE HID=" . $row["HID"], $mdb);
					$message = '<font color="' . $color_success . '">' . htmlspecialchars ($hostname) . ' ' . $tr["was added to list"] . '</font><br />';
				}
				else
					$message = '<font color="' . $color_error . '">' . htmlspecialchars ($hostname) . ' ' . $tr["is already in the list"] . '</font><br />';
			}
			mysql_free_result ($q);
		}
		else
			$message = '<font color="' . $color_error . '">' . sprintf ($tr["__host_add_error__"], htmlspecialchars ($hostname)) .  '</font><br />';
		mysql_query ("UNLOCK TABLES", $mdb);
}
else if (getvar ('update'))
{
		if ($HID > 0)
		{
			if ($hostname == '')
			{
				if ($rights & RIGHT_SMB_EDIT)
					header ("Location: smb_host.php?lang=$lang" . $aid_url . "&HID=$HID&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&ip=" . urlencode ($ip) . "&workgroup=" . urlencode ($workgroup) . "&period=$period&counter=$counter&scanorder=$scanorder&expirecount=$expirecount&host_delete=$host_delete&host_purge=$host_purge");
				else
					header ("Location: smb_host.php?lang=$lang" . $aid_url . "&HID=$HID&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&ip=" . urlencode ($ip) . "&workgroup=" . urlencode ($workgroup) . "&period=$period&counter=$counter");

				die ("");
			}
			$q = mysql_query ("SELECT IP,Flags FROM smb LEFT JOIN host USING (HID) WHERE smb.HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					$permit = 0;
					if ($rights & RIGHT_SMB_EDIT)
						$permit = 1;
					elseif (($row["Flags"] & (HOST_DELETE | HOST_PURGE)) == 0)
					{
						if ($c["HOST_EDITABLE_SELF"] && $row["IP"] == $REMOTE_ADDR)
							$permit = 1;
					}
					if ($permit)
					{
						$update_smb = "HostName='" . addslashes ($hostname) . "',WorkGroup='" . addslashes ($workgroup) . "'";
						$update_host = "Period=$period";
						$update_host_local = "Counter=$counter";
						$clear = 0;
						$set = 0;
						if ($rights & RIGHT_SMB_EDIT)
						{
							$update_host .= ",ScanOrder=$scanorder";
							$update_host_local .= ",ExpireCount=$expirecount";
							$clear |= HOST_DELETE;
							if ($host_delete)
								$set |= HOST_DELETE;
						}
						if ($rights & RIGHT_SMB_PURGE)
						{
							$clear |= HOST_PURGE;
							if ($host_purge)
								$set |= HOST_PURGE;
						}
						if ($clear)
							$update_host .= ",Flags=(Flags&~$clear)|$set";

						if ($row["Flags"] & HOST_MANUAL_CHANGES)
						{
							if (is_invalid_IP ($ip))
							{
								if ($rights & RIGHT_SMB_EDIT)
									header ("Location: smb_host.php?lang=$lang" . $aid_url . "&HID=$HID&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&ip=" . urlencode ($ip) . "&workgroup=" . urlencode ($workgroup) . "&period=$period&counter=$counter&scanorder=$scanorder&expirecount=$expirecount&host_delete=$host_delete&host_purge=$host_purge");
								else
									header ("Location: smb_host.php?lang=$lang" . $aid_url . "&HID=$HID&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&ip=" . urlencode ($ip) . "&workgroup=" . urlencode ($workgroup) . "&period=$period&counter=$counter");
								die ("");
							}
							else
							{
								$update_host .= ",IP='$ip'";
								$update_host_local .= ",IP='$ip'";
							}
						}

						mysql_query ("UPDATE smb SET $update_smb WHERE HID=$HID", $mdb);
						mysql_query ("UPDATE host SET $update_host WHERE HID=$HID", $mdb);
						mysql_query ("UPDATE host SET $update_host_local WHERE HID=$HID", $db);
						$message = '<font color="' . $color_success . '">' . sprintf ($tr["__host_updated__"], htmlspecialchars ($hostname)) . '</font><br />';
					}
				}
				mysql_free_result ($q);
			}
		}
}
else if (getvar ('scan'))
{
		if ($HID > 0)
		{
			$q = mysql_query ("SELECT HostName,IP FROM smb LEFT JOIN host USING (HID) WHERE smb.HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					$permit = 0;
					if ($rights & RIGHT_SMB_EDIT)
						$permit = 1;
					else
					{
						if ($c["HOST_EDITABLE_SELF"] && $row["IP"] == $REMOTE_ADDR)
							$permit = 1;
					}
					if ($permit)
					{
						mysql_query ("UPDATE host SET Counter=IF(Period=0,1,Period),ExpireCount=IF(ExpireCount=0,1,ExpireCount) WHERE HID=$HID", $db);
						$message = '<font color="' . $color_success . '">' . htmlspecialchars ($row["HostName"]) . ' ';
						$message .= $tr["will be scanned during the next network scan"];
						$message .= '</font><br />';
					}
				}
				mysql_free_result ($q);
			}
		}
}
else if (getvar ('delete'))
{
		if ($HID > 0)
		{
			$q = mysql_query ("SELECT HostName,IP FROM smb LEFT JOIN host USING (HID) WHERE smb.HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					$permit = 0;
					if ($rights & (RIGHT_SMB_EDIT | RIGHT_SMB_PURGE))
						$permit = 1;
					else
					{
						if ($c["HOST_EDITABLE_SELF"] && $row["IP"] == $REMOTE_ADDR)
							$permit = 1;
					}
					if ($permit)
					{
						mysql_query ("UPDATE host SET Flags=Flags|" . (HOST_DELETE | HOST_MANUAL_CHANGES) . " WHERE HID=$HID", $mdb);
						$message = '<font color="' . $color_success . '">' . htmlspecialchars ($row["HostName"]) . ' ';
						if ($rights & (RIGHT_SMB_EDIT | RIGHT_SMB_PURGE))
							$message .= $tr["will be deleted during next crawl"];
						else
							$message .= $tr["was deleted"];
						$message .= '</font><br />';
					}
				}
				mysql_free_result ($q);
			}
		}
}
else if (getvar ('purge'))
{
		if ($HID > 0 && ($rights & RIGHT_SMB_PURGE))
		{
			$q = mysql_query ("SELECT HostName FROM smb WHERE HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					mysql_query ("UPDATE host SET Flags=Flags|" . (HOST_PURGE | HOST_MANUAL_CHANGES) . " WHERE HID=$HID", $mdb);
					$message = '<font color="' . $color_success . '">' . htmlspecialchars ($row["HostName"]) . ' ' . $tr["will be purged during next crawl"] . '</font><br />';
				}
				mysql_free_result ($q);
			}
		}
}

require_once ("head.php");
require_once ("body.php");
$active_item = "smb_list";
$smb_list_text = "";
$menu_width = 850;
require_once ("menu.php");

$local_params = array ();
if ($mdb != $db)
{
	$q = mysql_query ("SELECT host.HID,ExpireCount,Counter,Flags,TotalFileSize,LastScan FROM smb LEFT JOIN host USING (HID)", $db);
	if ($q)
	{
		while ($row = mysql_fetch_assoc ($q))
		{
			$local_params[$row["HID"]]["ExpireCount"] = $row["ExpireCount"];
			$local_params[$row["HID"]]["Counter"] = $row["Counter"];
			$local_params[$row["HID"]]["Flags"] = $row["Flags"] & FLAGS_LOCAL;
			$local_params[$row["HID"]]["TotalFileSize"] = $row["TotalFileSize"];
			$local_params[$row["HID"]]["LastScan"] = $row["LastScan"];
		}
		mysql_free_result ($q);
	}
}

if ($rights & RIGHT_SMB_EDIT)
{
	$q = mysql_query ("SELECT COUNT(*) FROM smb", $mdb);
	get_position ($q, $per_page);
	$q = mysql_query ("SELECT host.HID,HostName,WorkGroup,IP,ExpireCount,Period,Counter,ScanOrder,Flags,TotalFileSize,LastScan FROM smb LEFT JOIN host USING (HID) ORDER BY $sort LIMIT $position,$per_page", $mdb);
}
else
{
	$unset_flags = HOST_DELETE | HOST_PURGE;
	$q = mysql_query ("SELECT COUNT(*) FROM smb LEFT JOIN host USING (HID) WHERE (Flags&$unset_flags)=0", $mdb);
	get_position ($q, $per_page);
	$q = mysql_query ("SELECT host.HID,HostName,WorkGroup,IP,Flags,TotalFileSize,LastScan FROM smb LEFT JOIN host USING (HID) WHERE (Flags&$unset_flags)=0 ORDER BY $sort LIMIT $position,$per_page", $mdb);
}
?>
<tr><td bgcolor="<?php echo $color_wt; ?>">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr valign="bottom"><td align="left">
<?php
echo $message;
echo_links ("smb_list.php", "&amp;sort_by=$sort_by");
?>
</td>
<td align="right">
<?php
if ($connected2master && ($rights & RIGHT_SMB_ADD))
{
	echo '<a href="smb_host.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by", '">', $tr["Add SMB server"], '</a>';
}
?>
</td></tr>
</table>
</td></tr>
<?php
if ($n)
{
?>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr><td>
	<table width="100%" border="0" cellpadding="2" class="l1">
	<tr bgcolor="<?php echo $color_tt; ?>">
<?php
	$cols = 1;
	if ($c["SHARE_FILE_SIZE"])
		$cols++;
	$multiline = ($cols > 1) ? ' rowspan="2"' : '';

	echo "<td$multiline>&nbsp;</td>";
	echo "<td$multiline><b>";
	if ($sort_by != 'name')
		echo '<a href="smb_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=name", '">';
	echo $tr["Host"];
	if ($sort_by != 'name')
		echo '</a>';
	echo "</b></td>";
	echo "<td$multiline><b>";
	if ($sort_by != 'group')
		echo '<a href="smb_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=group", '">';
	echo $tr["Workgroup"];
	if ($sort_by != 'group')
		echo '</a>';
	echo "</b></td>";
	if ($c["HOST_FILE_SIZE"])
	{
		echo '<td', $multiline, ' align="right"><b>';
		if ($sort_by != 'size')
			echo '<a href="smb_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=size", '">';
		echo $tr["File size"];
		if ($sort_by != 'size')
			echo '</a>';
		echo '</b></td>';
	}
	if ($c["SHOW_LAST_CHANGE"])
	{
		echo '<td', $multiline, '><b>';
		if ($sort_by != 'date')
			echo '<a href="smb_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=date", '">';
		echo $tr["Last change"];
		if ($sort_by != 'date')
			echo '</a>';
		echo '</b></td>';
	}
	if ($rights & RIGHT_SMB_EDIT)
	{
		echo "<td$multiline><b>", $tr["Period"], "</b></td>";
		echo "<td$multiline><b>", $tr["Counter"], "</b></td>";
		echo "<td$multiline><b>", $tr["Scan order"], "</b></td>";
		echo "<td$multiline><b>", $tr["Expire count"], "</b></td>";
		echo "<td$multiline><b>", $tr["Flags"], "</b></td>";
	}
	if ($connected2master)
		echo "<td$multiline><b>", $tr["Action"], "</b></td>";
	echo (($cols > 1) ? "<td colspan=\"$cols\" align=\"center\"><b>" : "<td><b>"), $tr["Shares"], "</b></td>";
	echo "</tr>";
	if ($multiline)
	{
		echo "<tr bgcolor=\"$color_tt\">";
		echo "<td><b>", $tr["Name"], "</b></td>";
		if ($c["SHARE_FILE_SIZE"])
			echo '<td align="right"><b>', $tr["File size"], "</b></td>";
		echo "</tr>";
	}

	while ($row = mysql_fetch_assoc ($q))
	{
		if ($local_params[$row["HID"]])
		{
			$row["Counter"] = $local_params[$row["HID"]]["Counter"];
			$row["ExpireCount"] = $local_params[$row["HID"]]["ExpireCount"];
			$row["Flags"] = $row["Flags"] & ~FLAGS_LOCAL | $local_params[$row["HID"]]["Flags"];
		}
		echo '<tr bgcolor="', $color_tb, '">', "\n";
		if ($row["Flags"] & HOST_ONLINE)
			echo '<td><img src="online.gif" alt="on" class="o" /></td>';
		else
			echo '<td><img src="offline.gif" alt="off" class="o" /></td>';
		echo '<td><a href="browse.php?lang=', $lang, $aid, '&amp;HID=', $row["HID"], '&amp;sort=FileName&amp;order=ASC" target="_blank">', htmlspecialchars ($row["HostName"]), '</a><br />';
		if ($row["Flags"] & HOST_MANUAL_CHANGES)
			echo $row["IP"];
		echo '</td>';
		echo '<td>', htmlspecialchars ($row["WorkGroup"]), '</td>';
		if ($c["HOST_FILE_SIZE"])
		{
			if ($local_params[$row["HID"]])
				$row["TotalFileSize"] = $local_params[$row["HID"]]["TotalFileSize"];
			echo '<td align="right" nowrap="nowrap">', to_human_readable ($row["TotalFileSize"]), '</td>';
		}
		if ($c["SHOW_LAST_CHANGE"])
		{
			if ($local_params[$row["HID"]])
				$row["LastScan"] = $local_params[$row["HID"]]["LastScan"];
			echo '<td>', htmlspecialchars ($row["LastScan"]), '</td>';
		}
		if ($rights & RIGHT_SMB_EDIT)
		{
			echo '<td align="right">', $row["Period"], '</td>';
			echo '<td align="right">', $row["Counter"], '</td>';
			echo '<td align="right">', $row["ScanOrder"], '</td>';
			echo '<td align="right">', $row["ExpireCount"], '</td><td>';
			if ($row["Flags"] & FLAGS_SHOW)
			{
				if ($row["Flags"] & HOST_DELETE)
					echo $tr["delete"], "<br />";
				if ($row["Flags"] & HOST_PURGE)
					echo $tr["purge"], "<br />";
			}
			else
				echo '&nbsp;';
			echo '</td>';
		}
		if ($connected2master)
		{
			echo '<td>';
			if ($rights & RIGHT_SMB_EDIT
					|| ($c["HOST_EDITABLE_SELF"] && $row["IP"] == $REMOTE_ADDR))
			{
				echo '<a href="smb_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '&amp;scan=1">', $tr["Scan"], '</a><br />';
				echo '<a href="smb_host.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '">', $tr["Edit"], '</a><br />';
				echo '<a href="smb_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '">', $tr["Delete"], '</a><br />';
				if ($rights & RIGHT_SMB_PURGE)
					echo '<a href="smb_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '&amp;purge=1', '">', $tr["Purge"], '</a><br />';
			}
			elseif ($rights & RIGHT_SMB_PURGE)
			{
				echo '<a href="smb_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '">', $tr["Delete"], '</a><br />';
				echo '<a href="smb_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '&amp;purge=1', '">', $tr["Purge"], '</a><br />';
			}
			else
				echo '&nbsp;';
			echo "</td>";
		}

		$qq = mysql_query ("SELECT SID,ShareName,TotalFileSize FROM share WHERE HID=" . $row["HID"] . " ORDER BY ShareName", $db);
		if ($qq && mysql_num_rows ($qq) > 0)
		{
			echo '<td>';
			$server = $smb_protocol;
			$server .= ($c["USE_IP_ADDRESS_IN_LINK"]) ? $row["IP"] : $row["HostName"];
			$server .= '/';
			while ($r = mysql_fetch_assoc ($qq))
			{
				echo '<a href="browse.php?lang=', $lang, $aid, '&amp;SID=', $r["SID"], '&amp;sort=FileName&amp;order=ASC" target="_blank">', htmlspecialchars ($r["ShareName"]), '</a><br />';
			}
			echo '</td>';
			if ($c["SHARE_FILE_SIZE"])
			{
				mysql_data_seek ($qq, 0);
				echo '<td align="right">';
				while ($r = mysql_fetch_assoc ($qq))
				{
					echo to_human_readable ($r["TotalFileSize"]), '<br />';
				}
				echo '</td>';
			}
		}
		else
		{
			if ($c["SHARE_FILE_SIZE"])
				echo '<td>&nbsp;</td>';
			echo '<td>&nbsp;</td>';
		}
		if ($qq)
			mysql_free_result ($qq);
		echo "</tr>\n";
	}
	mysql_free_result ($q);
?>
	</table>
</td></tr>
</table>
</td></tr>
<tr><td bgcolor="<?php echo $color_wt; ?>">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr><td>
<?php
    echo_links ("smb_list.php", "&amp;sort_by=$sort_by");
?>
</td></tr>
</table>
</td></tr>
<?php
}
require_once ("menu_end.php");

if ($n > 0 && ($rights & RIGHT_SMB_EDIT))
{
	$is_admin = $rights & RIGHT_SMB_EDIT;
	$help_expire = $c["SMB_EXPIRE"];
	require_once ("help_edit.php");
}

require_once ("foot.php");
?>
