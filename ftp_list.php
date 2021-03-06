<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_HOST_LIST', 1);

require_once ("db.php");

$per_page = 100;
$position = intval (getvar ("position"));
$client = ($c["HOST_EDITABLE_SELF"] || $c["HOST_EDITABLE_OTHER"]) ? strtoupper (gethostbyaddr ($REMOTE_ADDR)) : $REMOTE_ADDR;
$HID = intval (getvar ("HID"));
$hostname = strtoupper (trim (getvar ("hostname")));
$ip = gethostbyname ($hostname);
$editableby = strtoupper (trim (getvar ("editableby")));
$login = trim (getvar ("login"));
$password = trim (getvar ("password"));
$comment = ereg_replace ("\r", "", trim (getvar ("comment")));
$port = getint (getvar ("port"), 0, 65535, 0);
$starting_dir = '/' . trim (getvar ("starting_dir"));
$starting_dir = ereg_replace ("\\\\", "/", $starting_dir);
$starting_dir = ereg_replace ("//+", "/", $starting_dir);
$starting_dir = ereg_replace ("/+$", "", $starting_dir);
$file_list = ereg_replace ("//+", "/", trim (getvar ("file_list")));
$period = getint (getvar ("period"), 0, 255);
$counter = getint (getvar ("counter"), 0, 255);
$scanorder = getint (getvar ("scanorder"), -128, 127);
$expirecount = getint (getvar ("expirecount"), 0, 255);
$passive_mode = intval (getvar ("passive_mode"));
$recursive_ls = intval (getvar ("recursive_ls"));
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
		if (!($rights & RIGHT_FTP_ADD))
			break;
		if ($hostname == '' || $login == '' || $port == 0 || is_invalid_IP ($ip) || ($file_list && (!ereg ("^/", $file_list) || ereg ("/$", $file_list))))
		{
			if ($rights & RIGHT_FTP_EDIT)
				header ("Location: ftp_host.php?lang=$lang" . $aid_url  . "&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&login=" . urlencode ($login) . "&password=" . urlencode ($password) . "&port=$port&starting_dir=" . urlencode ($starting_dir) . "&file_list=" . urlencode ($file_list) . "&passive_mode=$passive_mode&recursive_ls=$recursive_ls&comment=" . urlencode ($comment) . "&editableby=" . urlencode ($editableby) . "&period=$period&counter=$counter&scanorder=$scanorder&expirecount=$expirecount");
			else
				header ("Location: ftp_host.php?lang=$lang" . $aid_url . "&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&login=" . urlencode ($login) . "&password=" . urlencode ($password) . "&port=$port&starting_dir=" . urlencode ($starting_dir) . "&file_list=" . urlencode ($file_list) . "&passive_mode=$passive_mode&recursive_ls=$recursive_ls&comment=" . urlencode ($comment) . "&period=$period&counter=$counter");
			die ("");
		}
		mysql_query ("LOCK TABLES host WRITE, ftp WRITE", $mdb);
		$q = mysql_query ("SELECT host.HID,Flags FROM ftp LEFT JOIN host USING (HID) WHERE HostName='" . addslashes ($hostname) . "' AND Login='" . addslashes ($login) . "' AND PassWord='" . addslashes ($password) . "' AND Port=$port", $mdb);
		if ($q)
		{
			if (mysql_num_rows ($q) == 0)
			{
				$flags = 0;
				if ($passive_mode)
					$flags |= HOST_PASSIVE_MODE;
				if ($recursive_ls)
					$flags |= HOST_LS_RECURSIVE;

				if ($rights & RIGHT_FTP_EDIT)
				{
					mysql_query ("INSERT INTO host (IP,HostType,ExpireCount,Period,Counter,ScanOrder,Flags) VALUES ('$ip'," . HOSTTYPE_FTP . ",$expirecount,$period,$counter,$scanorder,$flags)", $mdb);
					mysql_query ("INSERT INTO ftp (HID,HostName,Login,PassWord,Port,StartingDir,FileList,Comment,EditableBy) VALUES (LAST_INSERT_ID(),'" . addslashes ($hostname) . "','" . addslashes ($login) . "','" . addslashes ($password) . "',$port,'" . addslashes ($starting_dir) . "','" . addslashes ($file_list) . "','" . addslashes ($comment) . "','" . addslashes ($editableby) . "')", $mdb);
				}
				else
				{
					mysql_query ("INSERT INTO host (IP,HostType,ExpireCount,Period,Counter,Flags) VALUES ('$ip'," . HOSTTYPE_FTP . ",1,$period,$counter,$flags)", $mdb);
					mysql_query ("INSERT INTO ftp (HID,HostName,Login,PassWord,Port,StartingDir,FileList,Comment,EditableBy) VALUES (LAST_INSERT_ID(),'" . addslashes ($hostname) . "','" . addslashes ($login) . "','" . addslashes ($password) . "',$port,'" . addslashes ($starting_dir) . "','" . addslashes ($file_list) . "','" . addslashes ($comment) . "','" . addslashes ($client) . "')", $mdb);
				}
				$message = '<font color="' . $color_success . '">' . htmlspecialchars ($hostname) . ' ' . $tr["was added to list"] . '</font><br />';
			}
			else
			{
				$row = mysql_fetch_assoc ($q);
				if ($row["Flags"] & (HOST_DELETE | HOST_PURGE))
				{
					$clear_flags = HOST_DELETE | HOST_PURGE | HOST_PASSIVE_MODE | HOST_LS_RECURSIVE;
					$set_flags = 0;
					if ($passive_mode)
						$set_flags |= HOST_PASSIVE_MODE;
					if ($recursive_ls)
						$set_flags |= HOST_LS_RECURSIVE;

					if ($rights & RIGHT_FTP_EDIT)
					{
						mysql_query ("UPDATE host SET IP='$ip',ExpireCount=$expirecount,Period=$period,Counter=$counter,ScanOrder=$scanorder,Flags=(Flags&~$clear_flags)|$set_flags WHERE HID=" . $row["HID"], $mdb);
						mysql_query ("UPDATE ftp SET Login='" . addslashes ($login) . "',PassWord='" . addslashes ($password) . "',Port=$port,StartingDir='" . addslashes ($starting_dir) . "',FileList='" . addslashes ($file_list) . "',Comment='" . addslashes ($comment) . "',EditableBy='" . addslashes ($editableby) . "' WHERE HID=" . $row["HID"], $mdb);
					}
					else
					{
						mysql_query ("UPDATE host SET IP='$ip',ExpireCount=1,Period=$period,Counter=$counter,Flags=(Flags&~$clear_flags)|$set_flags WHERE HID=" . $row["HID"], $mdb);
						mysql_query ("UPDATE ftp SET Login='" . addslashes ($login) . "',PassWord='" . addslashes ($password) . "',Port=$port,StartingDir='" . addslashes ($starting_dir) . "',FileList='" . addslashes ($file_list) . "',Comment='" . addslashes ($comment) . "',EditableBy='" . addslashes ($client) . "' WHERE HID=" . $row["HID"], $mdb);
					}
					$message = '<font color="' . $color_success . '">' . htmlspecialchars ($hostname) . ' ' . $tr["was added to list"] . '</font><br />';
				}
				else
					$message = '<font color="' . $color_error . '">' . htmlspecialchars ($hostname) . ' ' . $tr["is already in the list"] . '</font><br />';
			}
			mysql_free_result ($q);
		}
		else
			$message = '<font color="' . $color_error . '">' . sprintf ($tr["__host_add_error__"], htmlspecialchars ($hostname)) . '</font><br />';
		mysql_query ("UNLOCK TABLES", $mdb);
}
else if (getvar ('update'))
{
		if ($HID > 0)
		{
			if ($hostname == '' || $login == '' || $port == 0 || is_invalid_IP ($ip) || ($file_list && (!ereg ("^/", $file_list) || ereg ("/$", $file_list))))
			{
				if ($rights & RIGHT_FTP_EDIT)
					header ("Location: ftp_host.php?lang=$lang" . $aid_url . "&HID=$HID&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&login=" . urlencode ($login) . "&password=" . urlencode ($password) . "&port=$port&starting_dir=" . urlencode ($starting_dir) . "&file_list=" . urlencode ($file_list) . "&passive_mode=$passive_mode&recursive_ls=$recursive_ls&comment=" . urlencode ($comment) . "&editableby=" . urlencode ($editableby) . "&period=$period&counter=$counter&scanorder=$scanorder&expirecount=$expirecount&host_delete=$host_delete&host_purge=$host_purge");
				else
					header ("Location: ftp_host.php?lang=$lang" . $aid_url . "&HID=$HID&invalid=1&position=$position&sort_by=$sort_by&hostname=" . urlencode ($hostname) . "&login=" . urlencode ($login) . "&password=" . urlencode ($password) . "&port=$port&starting_dir=" . urlencode ($starting_dir) . "&file_list=" . urlencode ($file_list) . "&passive_mode=$passive_mode&recursive_ls=$recursive_ls&comment=" . urlencode ($comment) . "&period=$period&counter=$counter");
				die ("");
			}
			$q = mysql_query ("SELECT HostName,EditableBy,IP,Flags FROM ftp LEFT JOIN host USING (HID) WHERE ftp.HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					$permit = 0;
					if ($rights & RIGHT_FTP_EDIT)
						$permit = 1;
					elseif (($row["Flags"] & (HOST_DELETE | HOST_PURGE)) == 0)
					{
						if ($c["HOST_EDITABLE_SELF"] && ($row["HostName"] == $client || $row["HostName"] == $REMOTE_ADDR || $row["IP"] == $REMOTE_ADDR))
							$permit = 1;
						elseif ($c["HOST_EDITABLE_OTHER"] && ($row["EditableBy"] == $client || $row["EditableBy"] == $REMOTE_ADDR))
							$permit = 1;
					}
					if ($permit)
					{
						$update_ftp = "Login='" . addslashes ($login) . "',PassWord='" . addslashes ($password) . "',Port=$port,StartingDir='" . addslashes ($starting_dir) . "',FileList='" . addslashes ($file_list) . "',Comment='" . addslashes ($comment) . "'";
						$update_host = "IP='$ip',Period=$period";
						$update_host_local = "IP='$ip',Counter=$counter";
						$clear_flags = HOST_PASSIVE_MODE | HOST_LS_RECURSIVE;
						$set_flags = 0;
						if ($passive_mode)
							$set_flags |= HOST_PASSIVE_MODE;
						if ($recursive_ls)
							$set_flags |= HOST_LS_RECURSIVE;

						if ($rights & RIGHT_FTP_EDIT)
						{
							$update_ftp .= ",HostName='" . addslashes ($hostname) . "',EditableBy='" . addslashes ($editableby) . "'";
							$update_host .= ",ScanOrder=$scanorder";
							$update_host_local .= ",ExpireCount=$expirecount";
							$clear_flags |= HOST_DELETE;
							if ($host_delete)
								$set_flags |= HOST_DELETE;
						}
						else
							$hostname = $row["HostName"];
						if ($rights & RIGHT_FTP_PURGE)
						{
							$clear_flags |= HOST_PURGE;
							if ($host_purge)
								$set_flags |= HOST_PURGE;
						}
						if ($clear_flags)
							$update_host .= ",Flags=(Flags&~$clear_flags)|$set_flags";

						mysql_query ("UPDATE ftp SET $update_ftp WHERE HID=$HID", $mdb);
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
			$q = mysql_query ("SELECT HostName,EditableBy,IP FROM ftp LEFT JOIN host USING (HID) WHERE ftp.HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					$permit = 0;
					if ($rights & RIGHT_FTP_EDIT)
						$permit = 1;
					else
					{
						if ($c["HOST_EDITABLE_SELF"] && ($row["HostName"] == $client || $row["HostName"] == $REMOTE_ADDR || $row["IP"] == $REMOTE_ADDR))
							$permit = 1;
						elseif ($c["HOST_EDITABLE_OTHER"] && ($row["EditableBy"] == $client || $row["EditableBy"] == $REMOTE_ADDR))
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
			$q = mysql_query ("SELECT HostName,EditableBy,IP FROM ftp LEFT JOIN host USING (HID) WHERE ftp.HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					$permit = 0;
					if ($rights & (RIGHT_FTP_EDIT | RIGHT_FTP_PURGE))
						$permit = 1;
					else
					{
						if ($c["HOST_EDITABLE_SELF"] && ($row["HostName"] == $client || $row["HostName"] == $REMOTE_ADDR || $row["IP"] == $REMOTE_ADDR))
							$permit = 1;
						elseif ($c["HOST_EDITABLE_OTHER"] && ($row["EditableBy"] == $client || $row["EditableBy"] == $REMOTE_ADDR))
							$permit = 1;
					}
					if ($permit)
					{
						mysql_query ("UPDATE host SET Flags=Flags|" . HOST_DELETE . " WHERE HID=$HID", $mdb);
						$message = '<font color="' . $color_success . '">' . htmlspecialchars ($row["HostName"]) . ' ';
						if ($rights & (RIGHT_FTP_EDIT | RIGHT_FTP_PURGE))
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
		if ($HID > 0 && ($rights & RIGHT_FTP_PURGE))
		{
			$q = mysql_query ("SELECT HostName FROM ftp WHERE HID=$HID", $mdb);
			if ($q)
			{
				if ($row = mysql_fetch_assoc ($q))
				{
					mysql_query ("UPDATE host SET Flags=Flags|" . HOST_PURGE . " WHERE HID=$HID", $mdb);
					$message = '<font color="' . $color_success . '">' . htmlspecialchars ($row["HostName"]). ' ' . $tr["will be purged during next crawl"] . '</font><br />';
				}
				mysql_free_result ($q);
			}
		}
}

require_once ("head.php");
require_once ("body.php");
$active_item = "ftp_list";
$ftp_list_text = "";
$menu_width = ($rights & RIGHT_FTP_EDIT) ? 988 : 850;
require_once ("menu.php");

$local_params = array ();
if ($mdb != $db)
{
	$q = mysql_query ("SELECT host.HID,ExpireCount,Counter,Flags,TotalFileSize,LastScan FROM ftp LEFT JOIN host USING (HID)", $db);
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

if ($rights & RIGHT_FTP_EDIT)
{
	$q = mysql_query ("SELECT COUNT(*) FROM ftp", $mdb);
	get_position ($q, $per_page);
	$q = mysql_query ("SELECT host.HID,HostName,Login,PassWord,Port,StartingDir,Comment,EditableBy,ExpireCount,Period,Counter,ScanOrder,Flags,TotalFileSize,LastScan,IP FROM ftp LEFT JOIN host USING (HID) ORDER BY $sort LIMIT $position,$per_page", $mdb);
}
else
{
	$clear_flags = HOST_DELETE | HOST_PURGE;
	$q = mysql_query ("SELECT COUNT(*) FROM ftp LEFT JOIN host USING (HID) WHERE (Flags&$clear_flags)=0", $mdb);
	get_position ($q, $per_page);
	$q = mysql_query ("SELECT host.HID,HostName,Login,PassWord,Port,StartingDir,Comment,EditableBy,Flags,TotalFileSize,LastScan,IP FROM ftp LEFT JOIN host USING (HID) WHERE (Flags&$clear_flags)=0 ORDER BY $sort LIMIT $position,$per_page", $mdb);
}
?>
<div style="clear:both;height:50px"></div>
<div class="container">
    <table width="100%" border="0" cellpadding="3" cellspacing="0">
        <tr valign="bottom"><td align="left">
                <?php
                echo $message;
                echo_links ("ftp_list.php", "&amp;sort_by=$sort_by");
                ?>
            </td>
            <td align="right">
                <?php
                if ($connected2master && ($rights & RIGHT_FTP_ADD))
                {
                    echo '<a href="ftp_host.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by", '">', $tr["Add FTP server"], '</a>';
                }
                ?>
            </td></tr>
    </table>
</div>
<?php
if ($n)
{
?>
    <div class="container">
        <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr><td>
                    <table width="100%" border="0" cellpadding="2" class="table table-responsive table-bordered">
                        <tr bgcolor="<?php echo $color_tt; ?>">
                            <?php
                            echo "<td style='min-width:20px'>&nbsp;</td>";
                            echo "<td style='min-width:100px'><b>";
                            if ($sort_by != 'name')
                                echo '<a href="ftp_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=name", '">';
                            echo $tr["Host"];
                            if ($sort_by != 'name')
                                echo '</a>';
                            /*echo "<br />", $tr["Starting directory"];*/

                            if ($rights & RIGHT_FTP_EDIT)
                                echo "<br />", $tr["Editable by"];
                            echo "</b></td>";
                            echo '<td align="right" style="width:35px"><b>', $tr["Port"], '</b></td>';
                            if ($c["SHOW_LOGIN_PASS"])
                                echo "<td style='min-width:100px'><b>", $tr["Login"], "<br />", $tr["Password"], "</b></td>";
                            if ($c["HOST_FILE_SIZE"])
                            {
                                echo '<td style="min-width:55px" align="right"><b>';
                                if ($sort_by != 'size')
                                    echo '<a href="ftp_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=size", '">';
                                echo $tr["File size"];
                                if ($sort_by != 'size')
                                    echo '</a>';
                                echo '</b></td>';
                            }
                            if ($c["SHOW_LAST_CHANGE"])
                            {
                                echo '<td style="width:110px"><b>';
                                if ($sort_by != 'date')
                                    echo '<a href="ftp_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=date", '">';
                                echo $tr["Last change"];
                                if ($sort_by != 'date')
                                    echo '</a>';
                                echo '</b></td>';
                            }
                            echo "<td><b>", $tr["Comment"], "</b></td>";
                            if ($rights & RIGHT_FTP_EDIT)
                            {
                                echo "<td><b>", $tr["Period"], "</b></td>";
                                echo "<td><b>", $tr["Counter"], "</b></td>";
                                echo "<td><b>", $tr["Scan order"], "</b></td>";
                                echo "<td><b>", $tr["Expire count"], "</b></td>";
                                echo "<td><b>", $tr["Flags"], "</b></td>";
                            }
                            if ($connected2master)
                                echo "<td style='width:45px'><b>", $tr["Action"], "</b></td>";
                            echo "</tr>";

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
                                if (!$row["StartingDir"])
                                    $row["StartingDir"] = '/';
                                echo '<td><a href="browse.php?lang=', $lang, $aid, '&amp;HID=', $row["HID"], '&amp;sort=FileName&amp;order=ASC" target="_blank">', htmlspecialchars ($row["HostName"]), '</a>'/*'<br />'*/,'' /*htmlspecialchars ($row["StartingDir"])*/;
                                if ($rights & RIGHT_FTP_EDIT)
                                    echo '<br />', htmlspecialchars ($row["EditableBy"]);
                                echo '</td><td align="right">', $row["Port"], '</td>';
                                if ($c["SHOW_LOGIN_PASS"])
                                    echo '<td>', htmlspecialchars ($row["Login"]), '<br />', htmlspecialchars ($row["PassWord"]), '<br /></td>';
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
                                echo '<td>', ereg_replace ("\n", "<br />", htmlspecialchars ($row["Comment"])), '</td>';
                                if ($rights & RIGHT_FTP_EDIT)
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
                                        echo '&nbsp</td>';
                                }
                                if ($connected2master)
                                {
                                    echo '<td>';
                                    if (($rights & RIGHT_FTP_EDIT)
                                        || ($c["HOST_EDITABLE_SELF"] && ($row["HostName"] == $client || $row["HostName"] == $REMOTE_ADDR || $row["IP"] == $REMOTE_ADDR))
                                        || ($c["HOST_EDITABLE_OTHER"] && ($row["EditableBy"] == $client || $row["EditableBy"] == $REMOTE_ADDR)))
                                    {
                                        echo '<a href="ftp_list.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '&amp;scan=1">', $tr["Scan"], '</a><br />';
                                        echo '<a href="ftp_host.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '">', $tr["Edit"], '</a><br />';
                                        echo '<a href="ftp_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '">', $tr["Delete"], '</a><br />';
                                        if ($rights & RIGHT_FTP_PURGE)
                                            echo '<a href="ftp_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '&amp;purge=1', '">', $tr["Purge"], '</a><br />';
                                    }
                                    elseif ($rights & RIGHT_FTP_PURGE)
                                    {
                                        echo '<a href="ftp_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '">', $tr["Delete"], '</a><br />';
                                        echo '<a href="ftp_del.php?lang=', $lang, $aid, "&amp;position=$position&amp;sort_by=$sort_by&amp;HID=", $row["HID"], '&amp;purge=1', '">', $tr["Purge"], '</a><br />';
                                    }
                                    else
                                        echo '&nbsp;';
                                    echo "</td>";
                                }
                                echo "</tr>\n";
                            }
                            mysql_free_result ($q);
                            ?>
                    </table>
                </td></tr>
        </table>
    </div>
    <div class="container">
        <table width="100%" border="0" cellpadding="3" cellspacing="0">
            <tr><td>
                    <?php
                    echo_links ("ftp_list.php", "&amp;sort_by=$sort_by");
                    ?>
                </td></tr>
        </table>
    </div>
<?php
}


if ($n > 0 && ($rights & RIGHT_FTP_EDIT))
{
	$is_admin = $rights & RIGHT_FTP_EDIT;
	$help_expire = $c["FTP_EXPIRE"];
	require_once ("help_edit.php");
}

require_once ("foot.php");
?>
