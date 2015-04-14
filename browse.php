<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_SEARCH', 1);

require_once ("db.php");

$client = ($c["LOGGING_ENABLE"] && $c["LOGGING_DNS_LOOKUP"]) ? strtoupper (gethostbyaddr ($REMOTE_ADDR)) : $REMOTE_ADDR;
list ($microtime, $time) = explode (" ", microtime ());

$HID = intval (getvar ("HID"));
$SID = intval (getvar ("SID"));
$PID = intval (getvar ("PID"));
$sort = strtolower (trim (getvar ("sort")));
$order = strtoupper (trim (getvar ("order")));

switch ($sort)
{
	case 'filesize':
		$sort = 'FileSize';
		break;
	case 'filedate':
		$sort = 'FileDate';
		break;
	default:
		$sort = 'FileName';
		break;
}

if ($order != 'DESC')
	$order = 'ASC';

$LID = 0;
if ($c["LOGGING_ENABLE"])
{
	$log_date = $date * $datevalue;
	mysql_query ("LOCK TABLES log WRITE", $db);
	$searchstring = "browse HID=$HID,SID=$SID,PID=$PID";
	mysql_query ("INSERT INTO log (Time,Client,SearchString) VALUES ($time,'" . addslashes ($client) . "','" . addslashes ($searchstring) . "')", $db);
	$q = mysql_query ("SELECT LAST_INSERT_ID()", $db);
	$row = mysql_fetch_row ($q);
	$LID = intval ($row[0]);
	mysql_free_result ($q);
	mysql_query ("UNLOCK TABLES", $db);
}
mysql_query ("UPDATE status SET Queries=Queries+1", $db);

if ($HID)
{
	$PID = 0;
	$q = mysql_query ("SELECT PID FROM path WHERE HID=$HID AND PPID=0 ORDER BY PID DESC LIMIT 1", $db);
	if ($q)
	{
		$row = mysql_fetch_row ($q);
		if ($row)
		{
			$PID = $row[0];
			$PPID = $row[0];
		}
		mysql_free_result ($q);
	}
}
elseif ($SID)
{
	$PID = 0;
	$q = mysql_query ("SELECT HID,ShareName FROM share WHERE SID=$SID", $db);
	if ($q)
	{
		$row = mysql_fetch_assoc ($q);
		if ($row)
		{
			$path = "/" . $row["ShareName"];
			$HID = $row["HID"];
			$hash = sprintf ("%u", crc32 (pack ("II", $HID, $SID) . $path));
			$qq = mysql_query ("SELECT PID FROM path WHERE HID=$HID AND SID=$SID AND `Hash`=$hash AND FullName='" . addslashes ($path) . "'", $db);
			if ($qq)
			{
				$rr = mysql_fetch_row ($qq);
				if ($rr)
				{
					$PID = $rr[0];
					$PPID = $rr[0];
				}
				mysql_free_result ($qq);
			}
		}
		mysql_free_result ($q);
	}
}

require_once ("head.php");
require_once ("body.php");

?>
<table width="100%" border="0" cellpadding="1" cellspacing="0"><tr><td bgcolor="<?php echo $color_border; ?>">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr><td bgcolor="<?php echo $color_wt; ?>">
<b>
<?php

$valid = 0;
if ($PID)
{
	$q = mysql_query ("SELECT HID,PPID,FullName FROM path WHERE PID=$PID", $db);
	if ($q)
	{
		$row = mysql_fetch_assoc ($q);
		if ($row)
		{
			$HID = $row["HID"];
			$PPID = $row["PPID"];
			$path = htmlspecialchars ($row["FullName"]);
			$valid = 1;
		}
		mysql_free_result ($q);
	}

}
elseif ($HID)
{
	$valid = 1;
}

$hosttype = 0;
if ($valid)
{
	$valid = 0;
	$q = mysql_query ("SELECT HostType FROM host WHERE HID=$HID", $db);
	if ($q)
	{
		$row = mysql_fetch_assoc ($q);
		mysql_free_result ($q);
		if ($row)
		{
			$hosttype = $row["HostType"];
			$valid = 1;
		}
	}
}

$valid = 0;
switch ($hosttype)
{
case HOSTTYPE_SMB:
	$q = mysql_query ("SELECT HostName,IP,Flags FROM smb LEFT JOIN host USING (HID) WHERE smb.HID=$HID", $db);
	if (!$q)
		break;
	$row = mysql_fetch_assoc ($q);
	mysql_free_result ($q);
	if ($row)
	{
		$server = $smb_protocol;
		$server .= ($c["USE_IP_ADDRESS_IN_LINK"]) ? $row["IP"] : $row["HostName"];
		$valid = 1;
		$online = $row["Flags"] & HOST_ONLINE;
	}
	break;

case HOSTTYPE_FTP:
	$q = mysql_query ("SELECT HostName,IP,Login,PassWord,Port,Flags FROM ftp LEFT JOIN host USING (HID) WHERE ftp.HID=$HID", $db);
	if (!$q)
		break;
	$row = mysql_fetch_assoc ($q);
	mysql_free_result ($q);
	if ($row)
	{
		$server = $c["USE_IP_ADDRESS_IN_LINK"] ? $row["IP"] : $row["HostName"];
		if (!$c["SHOW_LOGIN_PASS"]
			|| ($row["Login"] == 'anonymous' && $row["PassWord"] == 'user@host.com'))
			$server = "ftp://$server";
		else
		{
			if (ereg ('^"(.*)"$', $row["PassWord"], $regs))
				$row["PassWord"] = $regs[1];
			$server = "ftp://" . $row["Login"] . ":" . $row["PassWord"] . "@$server";
		}
		if ($row["Port"] != 21)
			$server .= ":" . $row["Port"];
		$valid = 1;
		$online = $row["Flags"] & HOST_ONLINE;
	}
	break;
}
if ($valid)
{
	$server = htmlspecialchars ($server);
	if (0)
	{
	echo '<a href="browse.php?lang=', $lang, $aid,
		"&amp;HID=$HID&amp;sort=$sort&amp;order=$order", '">',
		$server, '</a>', $link;
	}
	else
	{
	if ($online)
		echo '<img src="online.gif" alt="on" class="o" /> ';
	else
		echo '<img src="offline.gif" alt="off" class="o" /> ';
	echo '<a href="', $server, $path, '">', $server, $path, '</a>';
	$path .= "/";
	}
}
else
{
	echo "???";
}
?>
</b>
</td></tr>
<tr><td bgcolor="<?php echo $color_fl; ?>">
<?php

function print_header ()
{
	global $tr, $sort, $order, $lang, $aid, $HID, $PID;

	echo '<tr>';
	echo '<td width="60%"><b>', $tr["Name"], '&nbsp;';
	if ($sort != "FileName" || $order != "ASC")
		echo '<a href="browse.php?lang=', $lang, $aid,
			$PID == 0 ? "&amp;HID=$HID" : "&amp;PID=$PID",
			"&amp;sort=FileName&amp;order=ASC", '">';
	echo '<img src="asc.gif" alt="ASC" class="s" />';
	if ($sort != "FileName" || $order != "ASC")
		echo '</a>';
	echo '&nbsp;';
	if ($sort != "FileName" || $order != "DESC")
		echo '<a href="browse.php?lang=', $lang, $aid,
			$PID == 0 ? "&amp;HID=$HID" : "&amp;PID=$PID",
			"&amp;sort=FileName&amp;order=DESC", '">';
	echo '<img src="desc.gif" alt="DESC" class="s" />';
	if ($sort != "FileName" || $order != "DESC")
		echo '</a>';
	echo '</b></td>';

	echo '<td width="20%" align="right"><b>', $tr["Size"], '&nbsp;';
	if ($sort != "FileSize" || $order != "ASC")
		echo '<a href="browse.php?lang=', $lang, $aid,
			$PID == 0 ? "&amp;HID=$HID" : "&amp;PID=$PID",
			"&amp;sort=FileSize&amp;order=ASC", '">';
	echo '<img src="asc.gif" alt="ASC" class="s" />';
	if ($sort != "FileSize" || $order != "ASC")
		echo '</a>';
	echo '&nbsp;';
	if ($sort != "FileSize" || $order != "DESC")
		echo '<a href="browse.php?lang=', $lang, $aid,
			$PID == 0 ? "&amp;HID=$HID" : "&amp;PID=$PID",
			"&amp;sort=FileSize&amp;order=DESC", '">';
	echo '<img src="desc.gif" alt="DESC" class="s" />';
	if ($sort != "FileSize" || $order != "DESC")
		echo '</a>';
	echo '</b></td>';

	echo '<td width="20%" align="right"><b>', $tr["Date"], '&nbsp;';
	if ($sort != "FileDate" || $order != "ASC")
		echo '<a href="browse.php?lang=', $lang, $aid,
			$PID == 0 ? "&amp;HID=$HID" : "&amp;PID=$PID",
			"&amp;sort=FileDate&amp;order=ASC", '">';
	echo '<img src="asc.gif" alt="ASC" class="s" />';
	if ($sort != "FileDate" || $order != "ASC")
		echo '</a>';
	echo '&nbsp;';
	if ($sort != "FileDate" || $order != "DESC")
		echo '<a href="browse.php?lang=', $lang, $aid,
			$PID == 0 ? "&amp;HID=$HID" : "&amp;PID=$PID",
			"&amp;sort=FileDate&amp;order=DESC", '">';
	echo '<img src="desc.gif" alt="DESC" class="s" />';
	if ($sort != "FileDate" || $order != "DESC")
		echo '</a>';
	echo '</b></td>';
	echo "</tr>\n";
}

if ($valid)
{
	echo '<table width="100%" border="0" cellpadding="1" cellspacing="0" class="l1">';

	if (!($PPID == 0 || $PPID == $PID))
	{
		# print ".."
		echo '<tr><td>';
		echo '<a href="browse.php?lang=', $lang, $aid,
			$PPID == 0 ? "&amp;HID=$HID" : "&amp;PID=$PPID",
			"&amp;sort=$sort&amp;order=$order", '"><img src="back.gif" width="20" height="22" border="0" alt=".." /></a>';
		echo "</td><td>&nbsp;</td><td>&nbsp;</td></tr>\n";
	}

	print_header ();
	$q = mysql_query ("SELECT PID,ShortName FROM path WHERE PPID=$PID AND $PID>0 ORDER BY ShortName $order", $db);
	if ($q)
	{
		$justflag = 0;
		while ($row = mysql_fetch_assoc ($q))
		{
			echo '<tr bgcolor="', $justflag ? $color_bg_dark : $color_bg_light, '"><td>';
			echo '<a href="', $server, $path, htmlspecialchars ($row["ShortName"]), '" target="_blank"><img src="comp2.gif" alt="Open" class="o" /></a> ';
			echo '<a href="browse.php?lang=', $lang, $aid,
				"&amp;PID=", $row["PID"],
				"&amp;sort=$sort&amp;order=$order", '">',
				htmlspecialchars ($row["ShortName"]), '</a>';
			echo "</td><td>&nbsp;</td><td>&nbsp;</td></tr>\n";
			$justflag ^= 1;
		}
		if (mysql_num_rows ($q) > 0)
			print_header ();
		mysql_free_result ($q);
	}

	$q = mysql_query ("SELECT FileName,FileSize,FileDate FROM file WHERE PID=$PID AND $PID>0 ORDER BY $sort $order", $db);
	if ($q)
	{
		$justflag = 0;
		while ($row = mysql_fetch_assoc ($q))
		{
			echo '<tr bgcolor="', $justflag ? $color_bg_dark : $color_bg_light, '"><td>';
			echo '<a href="', $server, $path;
			echo htmlspecialchars ($row["FileName"]), '">';
			echo htmlspecialchars ($row["FileName"]), '</a>';
			echo '</td><td align="right">';
			echo $row["FileSize"];
			echo '</td><td align="right">';
			echo $row["FileDate"];
			echo "</td></tr>\n";
			$justflag ^= 1;
		}
		if (mysql_num_rows ($q) > 0)
			print_header ();
		mysql_free_result ($q);
	}

	echo '</table>';
}
?>
</td></tr>
<tr><td bgcolor="<?php echo $color_wt; ?>">
<?php
if ($c["LOGGING_ENABLE"] && $LID)
{
	list ($end_microtime, $end_time) = explode (" ", microtime ());
	$duration = (float) $end_time - (float) $time + (float) $end_microtime - (float) $microtime;
	mysql_query ("UPDATE log SET Duration=$duration WHERE LID=$LID", $db);
	page_generated ($client, $time);
	echo "<!--$LID:$time--><br />";
}
?>
<a href="http://ffsearch.sourceforge.net/" target="_blank">Fast File Search</a> <?php echo $c["VERSION"]; ?> Copyright &copy; 2002-2005 <a href="http://zlomek.jikos.cz/" target="_blank">Josef Zlomek</a> <?php echo $tr["and"]; ?> <a href="http://ffsearch.sourceforge.net/contrib.php#contributors" target="_blank"><?php echo $tr["others"]; ?></a>
</td></tr>
</table>
</td></tr></table>
<?php
require_once ("foot.php");
?>
