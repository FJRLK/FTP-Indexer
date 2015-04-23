<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_SEARCH', 1);

require_once ("db.php");

$client = ($c["LOGGING_ENABLE"] && $c["LOGGING_DNS_LOOKUP"]) ? strtoupper (gethostbyaddr ($REMOTE_ADDR)) : $REMOTE_ADDR;
list ($microtime, $time) = explode (" ", microtime ());

$searchstring = getvar ("searchstring");
$modestring = getvar ("mode");
switch ($modestring)
{
	default:
	case "file_wildcard":
		$mode = 0;
		break;
	case "file_substring":
		$mode = 1;
		break;
	case "file_regexp":
		$mode = 2;
		break;
	case "dir_substring":
		$mode = 3;
		break;
	case "dir_wildcard":
		$mode = 4;
		break;
	case "dir_regexp":
		$mode = 5;
		break;
}
$save = getint (getvar ("save"), 0, 1);
$advanced = getint (getvar ("advanced"), 0, 1);
$save_flags = FLAG_SAVE * $save | FLAG_ADVANCED * $advanced;
if ($advanced) {
	$online_only = getint (getvar ("online_only"), 0, 1);
	$human_readable = getint (getvar ("human_readable"), 0, 1);
	$flags = SEARCH_ONLINE_ONLY * $online_only | SEARCH_HUMAN_READABLE * $human_readable;
	$scan_smb = getint (getvar ("scan_smb"), 0, 1);
	$scan_ftp = getint (getvar ("scan_ftp"), 0, 1);
	$hosttype = HOSTTYPE_SMB * $scan_smb | HOSTTYPE_FTP * $scan_ftp;
	if ($hosttype == 0)
	{
		if (!$c["SMB_DISABLE"])
			$hosttype |= HOSTTYPE_SMB;
		if (!$c["FTP_DISABLE"])
			$hosttype |= HOSTTYPE_FTP;
	}
	$date = getint (getvar ("date"), 0, 1);
	$timestr = trim (getvar ("timestr"));
	$timehour = 0;
	$timemin = 0;
	$timesec = 0;
	if (ereg ("^([0-9]{1,2}):([0-9]{1,2})$", $timestr, $regs)
			&& $regs[1] >= 0 && $regs[1] <= 23
			&& $regs[2] >= 0 && $regs[2] <= 59)
	{
		$timehour = $regs[1];
		$timemin = $regs[2];
	}
	elseif (ereg ("^([0-9]{1,2})$", $timestr, $regs)
			&& $regs[1] >= 0 && $regs[1] <= 23)
	{
		$timehour = $regs[1];
	}
	elseif (ereg ("^([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})$", $timestr, $regs)
			&& $regs[1] >= 0 && $regs[1] <= 23
			&& $regs[2] >= 0 && $regs[2] <= 59
			&& $regs[3] >= 0 && $regs[3] <= 59)
	{
		$timehour = $regs[1];
		$timemin = $regs[2];
		$timesec = $regs[3];
	}
	$hits = getint (getvar ("hits"), 1, 1000000);
	$minfilesize = getsize (getvar ("minfilesize"), 0);
	$maxfilesize = getsize (getvar ("maxfilesize"), 0xffffffff);
} else {
	$online_only = 0;
	$human_readable = 0;
	$flags = 0;
	$scan_smb = 1;
	$scan_ftp = 1;
	$hosttype = HOSTTYPE_SMB * $scan_smb | HOSTTYPE_FTP * $scan_ftp;
	$date = 0;
	$timehour = 0;
	$timemin = 0;
	$timesec = 0;
	$hits = 100;
	$minfilesize = 0;
	$maxfilesize = 0xffffffff;
}
$today = localtime (time (), 1);
$dateday = getint (getvar ("dateday"), 1, 31, $today["tm_mday"]);
$datemonth = getint (getvar ("datemonth"), 1, 12, $today["tm_mon"] + 1);
$dateyear = getint (getvar ("dateyear"), $min_year, $max_year, $today["tm_year"] + 1900);
$datevalue = mktime ($timehour, $timemin, $timesec, $datemonth, $dateday, $dateyear);
$position = intval (getvar ("position"));
$UID = getvar_cookie ("UID");

if ($searchstring && $c["HISTORY_COUNT"] > 0 && $position == 0)
{
	if (is_numeric ($UID)
		&& ($q = mysql_query ("SELECT Current FROM user WHERE UID=$UID", $db))
		&& ($row = mysql_fetch_row ($q)))
	{
		mysql_free_result ($q);
		$last = $row[0];
		if (($q = mysql_query ("SELECT * FROM history WHERE UID=$UID AND Position=$last AND SearchString='" . addslashes ($searchstring) . "' AND Mode=$mode AND HostType=$hosttype AND Flags=$flags AND Date=$date AND DateValue=$datevalue AND MinSize=$minfilesize AND MaxSize=$maxfilesize AND Hits=$hits", $db))
			&& ($row = mysql_fetch_row ($q)))
		{
			$current = $last;
		}
		else
		{
			$current = ($last + 255) & 255;
			mysql_query ("UPDATE user SET Current=$current,Save=$save_flags,LastSearched=$time WHERE UID=$UID", $db);
		}
	}
	elseif ($save_flags)
	{
		#generate unique UID
		mysql_query ("LOCK TABLES user WRITE", $db);
		for ($done = 0; !$done; )
		{
			$UID = crc32 (uniqid ($REMOTE_ADDR . $UID, 1));
			$q = mysql_query ("SELECT * FROM user WHERE UID=$UID", $db);
			$done = mysql_num_rows ($q) == 0;
			mysql_free_result ($q);
		}
		$last = 256;
		$current = 256 - $c["HISTORY_COUNT"];
		mysql_query ("INSERT INTO user (UID,LastSearched,Current,Save) VALUES ($UID,$time,$current,$save_flags)", $db);
		mysql_query ("UNLOCK TABLES", $db);
		setcookie ("UID", $UID, 0x7fffffff, ereg_replace ('[^/]*$', '', getvar_server ("SCRIPT_NAME")));
	}

	if ($save)
	{
		if ($current + $c["HISTORY_COUNT"] < 256)
			mysql_query ("DELETE FROM history WHERE UID=$UID AND (Position<$last OR Position>=" . ($current + $c["HISTORY_COUNT"]) . ")", $db);
		else
			mysql_query ("DELETE FROM history WHERE UID=$UID AND Position<$last AND Position>=" . (($current + $c["HISTORY_COUNT"]) & 255), $db);
		if ($last != $current)
			mysql_query ("INSERT INTO history (UID,Position,SearchString,Mode,HostType,Flags,Date,DateValue,MinSize,MaxSize,Hits) VALUES ($UID,$current,'" . addslashes ($searchstring) . "',$mode,$hosttype,$flags,$date,$datevalue,$minfilesize,$maxfilesize,$hits)", $db);
	}
	else
	{
		mysql_query ("DELETE FROM history WHERE UID=$UID", $db);
	}
}

$LID = 0;
if ($searchstring)
{
	if ($c["LOGGING_ENABLE"])
	{
		$log_date = $date * $datevalue;
		mysql_query ("LOCK TABLES log WRITE", $db);
		mysql_query ("INSERT INTO log (Time,Hits,Position,Client,SearchString,Mode,HostType,Flags,Date,MinSize,MaxSize) VALUES ($time,$hits,$position,'" . addslashes ($client) . "','" . addslashes ($searchstring) . "',$mode,$hosttype,$flags,$log_date,$minfilesize,$maxfilesize)", $db);
		$q = mysql_query ("SELECT LAST_INSERT_ID()", $db);
		$row = mysql_fetch_row ($q);
		$LID = intval ($row[0]);
		mysql_free_result ($q);
		mysql_query ("UNLOCK TABLES", $db);
	}
	mysql_query ("UPDATE status SET Queries=Queries+1", $db);
}

require_once ("head.php");
require_once ("body.php");

# finite automata for parsing search string
function parse_search_string ($search_string)
{
	$out = array ();
	$state = 0;
	$len = strlen ($search_string);
	$str = '';
	$plus = 0;

	for ($i = 0; $i < $len; )
	{
		switch ($state)
		{
			case 0: # eating whitespace and + outside of quotes
				switch ($search_string{$i})
				{
					case ' ':
					case '\t':
						$i++;
						break;

					case '"':
						$i++;
						$state = 2;
						break;

					case '+':
						$i++;
						$plus = 1;
						break;

					default:
						$state = 1;
						break;
				}
				break;

			case 1: # processing non-whitespace outside of quotes
				switch ($search_string{$i})
				{
					case ' ':
					case '\t':
						if ($str != '')
						{
							$out[] = array ($str, $plus);
							$str = '';
						}
						$i++;
						$plus = 0;
						$state = 0;
						break;

					case '"':
						$i++;
						$state = 2;
						break;

					case '+':
						if ($str != '')
						{
							$out[] = array ($str, $plus);
							$str = '';
						}
						$plus = 1;
						$state = 0;
						break;

					default:
						$str .= $search_string{$i};
						$i++;
						break;
				}
				break;

			case 2: #processing input inside double quotes "
				switch ($search_string{$i})
				{
					case '"':
						$i++;
						$state = 1;
						break;

					default:
						$str .= $search_string{$i};
						$i++;
						break;
				}
				break;
		}
	}
	if ($str)
		$out[] = array ($str, $plus);

	return $out;
}

function build_query_substring ($column)
{
	global $where_str, $searchstring, $n;

	$n_and = $n_or = 0;
	$out = parse_search_string ($searchstring);
	$n = count ($out);
	for ($i = 0; $i < $n; $i++)
	{
		$str = addslashes ($out[$i][0]);
		$str = "%" . ereg_replace ("([%_])", "\\\\1", $str) . "%";
		if ($out[$i][1])
			$and[$n_and++] = $str;
		else
			$or[$n_or++] = $str;
	}
	if ($n_or == 1)
	{
		$n_or = 0;
		$and[$n_and++] = $or[0];
	}
	$and_str = $or_str = "";
	for ($i = 0; $i < $n_and; $i++)
		$and_str .= " AND $column LIKE '" . $and[$i] . "'";
	for ($i = 0; $i < $n_or; $i++)
		$or_str .= " OR $column LIKE '" . $or[$i] . "'";
	$or_str = ereg_replace ("^ OR (.*)", " AND (\\1)", $or_str);
	$where_str = ereg_replace ("^ AND", "", $and_str . $or_str);
}

function append_query_date_size ()
{
	global $where_str, $use_index, $date, $datevalue, $minfilesize, $maxfilesize;

	$use_index = "";
	if ($date)
		$where_str .= " AND DateAdded>=$datevalue";
	if ($minfilesize > 0)
	{
		$where_str .= " AND FileSize>=$minfilesize";
		$use_index = " USE INDEX (FileSize)";
	}
	if ($maxfilesize < 0xffffffff)
	{
		$where_str .= " AND FileSize<=$maxfilesize";
		$use_index = " USE INDEX (FileSize)";
	}
}

$slow_query = 0;
# create WHERE clause
switch ($modestring)
{
	case "dir_substring":
		$select_str = "SELECT host.HID,HostType,path.PID,FullName FROM path LEFT JOIN host USING (HID) WHERE";
		build_query_substring ("ShortName");
		break;

	case "dir_regexp":
		$select_str = "SELECT host.HID,HostType,path.PID,FullName FROM path LEFT JOIN host USING (HID) WHERE";
		$n = 1;
		$where_str = " ShortName REGEXP '" . addslashes ($searchstring) . "'";
		break;

	case "file_substring":
		$slow_query = 1;
		build_query_substring ("FileName");
		append_query_date_size ();
		$select_str = "SELECT host.HID,HostType,path.PID,FullName,FileName,FileSize,FileDate FROM (file $use_index LEFT JOIN path USING (PID)) LEFT JOIN host USING (HID) WHERE";
		break;

	case "file_regexp":
		$slow_query = 1;
		$n = 1;
		$where_str = " FileName REGEXP '" . addslashes ($searchstring) . "'";
		append_query_date_size ();
		$select_str = "SELECT host.HID,HostType,path.PID,FullName,FileName,FileSize,FileDate FROM (file $use_index LEFT JOIN path USING (PID)) LEFT JOIN host USING (HID) WHERE";
		break;

	case "dir_wildcard":
		$select_str = "SELECT host.HID,HostType,path.PID,FullName FROM path LEFT JOIN host USING (HID) WHERE";
		$n_and = $n_or = 0;
		$out = parse_search_string ($searchstring);
		$n = count ($out);
		for ($i = 0; $i < $n; $i++)
		{
			$str = addslashes ($out[$i][0]);
			$str = ereg_replace ("([%_])", "\\\\1", $str);
			$str = strtr ($str, "*?", "%_");
			if ($out[$i][1])
				$and[$n_and++] = $str;
			else
				$or[$n_or++] = $str;
		}
		if ($n_or == 1)
		{
			$n_or = 0;
			$and[$n_and++] = $or[0];
		}
		$and_str = $or_str = "";
		for ($i = 0; $i < $n_and; $i++)
			$and_str .= " AND ShortName LIKE '" . $and[$i] . "'";
		for ($i = 0; $i < $n_or; $i++)
			$or_str .= " OR ShortName LIKE '" . $or[$i] . "'";
		$or_str = ereg_replace ("^ OR (.*)", " AND (\\1)", $or_str);
		$where_str = ereg_replace ("^ AND", "", $and_str . $or_str);
		break;

	case "file_wildcard":
	default:
		$n_and = $n_or = 0;
		$out = parse_search_string ($searchstring);
		$n = count ($out);
		for ($i = 0; $i < $n; $i++)
		{
			$str = $out[$i][0];
			$end = ereg_replace ("\\*.*", "*", strrev (substr ($str, -4)));
			$str = addslashes ($str);
			$end = addslashes ($end);
			$str = ereg_replace ("([%_])", "\\\\1", $str);
			$end = ereg_replace ("([%_])", "\\\\1", $end);
			$str = strtr ($str, "*?", "%_");
			$end = strtr ($end, "*?", "%_");
			if ($out[$i][1])
			{
				$and[$n_and][0] = $str;
				$and[$n_and][1] = $end;
				$n_and++;
			}
			else
			{
				$or[$n_or][0] = $str;
				$or[$n_or][1] = $end;
				$n_or++;
			}
		}
		if ($n_or == 1)
		{
			$n_or = 0;
			$and[$n_and][0] = $or[0][0];
			$and[$n_and][1] = $or[0][1];
			$n_and++;
		}
		$and_str = $or_str = "";
		$slow_and = 1;
		$slow_or = ($n_or == 0) ? 1 : 0;
		for ($i = 0; $i < $n_and; $i++)
		{
			if (!(ereg ("^[_%]", $and[$i][0]) && ereg ("^[_%]", $and[$i][1])))
				$slow_and = 0;
			$and_str .= " AND FileName LIKE '" . $and[$i][0] . "' AND FileNameEnd LIKE '" . $and[$i][1] . "'";
		}
		for ($i = 0; $i < $n_or; $i++)
		{
			if (ereg ("^[_%]", $or[$i][0]) && ereg ("^[_%]", $or[$i][1]))
				$slow_or = 1;
			$or_str .= " OR FileName LIKE '" . $or[$i][0] . "' AND FileNameEnd LIKE '" . $or[$i][1] . "'";
		}
		$slow_query = $slow_and && $slow_or;
		$or_str = ereg_replace ("^ OR (.*)", " AND (\\1)", $or_str);
		$where_str = ereg_replace ("^ AND", "", $and_str . $or_str);
		append_query_date_size ();
		$select_str = "SELECT host.HID,HostType,path.PID,FullName,FileName,FileSize,FileDate FROM (file $use_index LEFT JOIN path USING (PID)) LEFT JOIN host USING (HID) WHERE";
		break;
}

if ($AID == 0 && $c["DENY_SLOW_QUERIES"] && $slow_query
	&& ($fast_query_minsize < 0 || $minfilesize < $fast_query_minsize)
	&& ($fast_query_maxsize < 0 || $maxfilesize > $fast_query_maxsize))
{
	slow_queries_disabled ();
	require_once ("foot.php");
	die ("");
}

if ($n)		# n tokens in searchstring
{
	$test_flags = HOST_DELETE | HOST_PURGE;
	$flags_set = 0;
	if ($online_only)
	{
		$test_flags |= HOST_ONLINE;
		$flags_set |= HOST_ONLINE;
	}
	$q = mysql_query ($select_str . $where_str . " AND (HostType&$hosttype) AND (Flags&$test_flags)=$flags_set LIMIT $position,$hits", $db);
	$n = mysql_num_rows ($q);
}

?>
<div class="container">
<table width="100%" class="table table-bordered" border="0" cellpadding="1" cellspacing="0"><tr><td bgcolor="<?php echo $color_border; ?>">
<table width="100%" class="table table-bordered" border="0" cellpadding="3" cellspacing="0">
<tr><td >
<b><?php echo $tr["Results for"], " [", htmlspecialchars ($searchstring), "]"; ?></b>
</td></tr>
<tr><td >
<?php
	if ($n == $hits)
	{
		$newpos = $position + $hits;
		echo $more = "<a href=\"search.php?lang=$lang$aid&amp;searchstring=" . urlencode ($searchstring) . "&amp;mode=" . urlencode ($modestring) . "&amp;save=$save&amp;advanced=$advanced&amp;online_only=$online_only&amp;human_readable=$human_readable&amp;scan_smb=$scan_smb&amp;scan_ftp=$scan_ftp&amp;date=$date&amp;dateday=$dateday&amp;datemonth=$datemonth&amp;dateyear=$dateyear&amp;minfilesize=$minfilesize&amp;maxfilesize=$maxfilesize&amp;hits=$hits&amp;position=$newpos\">" . $tr["More"] . "...</a> | ";
	}
?>
<a href="select.php?lang=<?php echo $lang, $aid; ?>"><?php echo $tr["New search"]; ?></a>
</td></tr>
<tr><td >
<i><font color="<?php echo $color_hit_range; ?>" class="h1">
<?php
	if ($n == 0)
		echo $tr["No hits"];
	elseif ($n == 1)
		echo $tr["Hit"], " ", $position + 1;
	else
		echo $tr["Hits"], " ", $position + 1, " - ", $position + $n;
?>
</font></i>
</td></tr>
<?php
if ($n > 0)
{
	# prepare the host names and possibly do online check
	while ($row = mysql_fetch_assoc ($q))
	{
		if (!isset ($host[$row["HID"]]))
		{
			if ($row["HostType"] == HOSTTYPE_SMB)
			{
				$qq = mysql_query ("SELECT HostName,IP,Flags FROM smb LEFT JOIN host USING (HID) WHERE smb.HID=" . $row["HID"], $db);
				$rr = mysql_fetch_assoc ($qq);
				mysql_free_result ($qq);
				$server = ($c["USE_IP_ADDRESS_IN_LINK"]) ? $rr["IP"] : $rr["HostName"];
				$host[$row["HID"]]["link"] = $host[$row["HID"]]["text"] = $smb_protocol;
				$host[$row["HID"]]["link"] .= $server;
				$host[$row["HID"]]["text"] .= $rr["HostName"];
				$host[$row["HID"]]["online"] = $rr["Flags"] & HOST_ONLINE;
			}
			elseif ($row["HostType"] == HOSTTYPE_FTP)
			{
				$qq = mysql_query ("SELECT HostName,IP,Flags,Login,PassWord,Port FROM ftp LEFT JOIN host USING (HID) WHERE ftp.HID=" . $row["HID"], $db);
				$rr = mysql_fetch_assoc ($qq);
				mysql_free_result ($qq);
				$server = ($c["USE_IP_ADDRESS_IN_LINK"]) ? $rr["IP"] : $rr["HostName"];
				if (!$c["SHOW_LOGIN_PASS"]
						|| ($rr["Login"] == 'anonymous' && $rr["PassWord"] == 'user@host.com'))
					$host[$row["HID"]]["link"] = "ftp://$server";
				else
				{
					if (ereg ('^"(.*)"$', $rr["PassWord"], $regs))
						$rr["PassWord"] = $regs[1];
					$host[$row["HID"]]["link"] = "ftp://" . $rr["Login"] . ":" . $rr["PassWord"] . "@$server";
				}
				if ($rr["Port"] != 21)
					$host[$row["HID"]]["link"] .= ":" . $rr["Port"];
				$host[$row["HID"]]["text"] = "ftp://" . $rr["HostName"];
				$host[$row["HID"]]["online"] = $rr["Flags"] & HOST_ONLINE;
			}
		}
	}
	mysql_data_seek ($q, 0);
?>
<tr><td >
<table width="100%" class="table table-bordered" border="0" cellpadding="1" cellspacing="0" class="l1">
<?php
	# print the results
	$justflag = 0;
	while ($row = mysql_fetch_assoc ($q))
	{
		echo '<tr ><td>';
		if ($host[$row["HID"]]["online"])
			echo '<img src="online.gif" alt="on" class="o" />';
		else
			echo '<img src="offline.gif" alt="off" class="o" />';
		echo ' <a href="browse.php?lang=', $lang, $aid, "&amp;PID=", $row["PID"], "&amp;sort=FileName&order=ASC", '" target="_blank"><img src="dir.gif" alt="Browse" class="o" /></a> ';
		echo '<a href="', htmlspecialchars ($host[$row["HID"]]["link"] . $row["FullName"]), '" target="_blank">', htmlspecialchars ($host[$row["HID"]]["text"] . $row["FullName"]), '</a></td>';
		if ($mode < 3) # files
		{
			echo '<td><a href="', htmlspecialchars ($host[$row["HID"]]["link"] . $row["FullName"] . "/" . $row["FileName"]), '">', htmlspecialchars ($row["FileName"]), '</a></td>';
			echo '<td align="right">';
			if ($human_readable)
				echo to_human_readable ($row["FileSize"]);
			else
				echo $row["FileSize"];
			echo '</td>';
			#echo "<td>", $row["FileDate"], "</td>";
		}
		echo "</tr>\n";
		$justflag ^= 1;
	}
	mysql_free_result ($q);
?>
</table>
</td></tr>
<?php
}
?>
<tr><td >
<font color="<?php echo $color_hits_time; ?>" class="h1">
<?php
list ($end_microtime, $end_time) = explode (" ", microtime ());
$duration = (float) $end_time - (float) $time + (float) $end_microtime - (float) $microtime;
print_n_hits_in_s_seconds ($n, $duration);

if ($c["LOGGING_ENABLE"] && $LID)
	mysql_query ("UPDATE log SET Duration=$duration,`Found`=$n WHERE LID=$LID", $db);
?>
</font>
</td></tr>
<tr><td >
<?php
echo $more;
?>
<a href="select.php?lang=<?php echo $lang, $aid; ?>"><?php echo $tr["New search"]; ?></a>
</td></tr>
<tr><td >
<?php
if ($c["LOGGING_ENABLE"] && $LID)
{
	page_generated ($client, $time);
	echo "<!--$LID:$time--><br />";
}
?>
<a href="http://ffsearch.sourceforge.net/" target="_blank">Fast File Search</a> <?php echo $c["VERSION"]; ?> Copyright &copy; 2002-2005 <a href="http://zlomek.jikos.cz/" target="_blank">Josef Zlomek</a> <?php echo $tr["and"]; ?> <a href="http://ffsearch.sourceforge.net/contrib.php#contributors" target="_blank"><?php echo $tr["others"]; ?></a>
</td></tr>
</table>
</td></tr></table>
</div>
<?php
require_once ("foot.php");
?>
