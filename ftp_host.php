<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_HOST_LIST', 1);

require_once ("db.php");

$HID = intval (getvar ("HID"));
$hostname = strtoupper (trim (getvar ("hostname")));
$editableby = strtoupper (trim (getvar ("editableby")));
$login = trim (getvar ("login"));
$password = trim (getvar ("password"));
$comment = trim (getvar ("comment"));
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
$invalid = getvar ("invalid");
$position = intval (getvar ("position"));
$sort_by = strtolower (trim (getvar ("sort_by")));

if ($sort_by != 'size' && $sort_by != 'date')
	$sort_by = 'name';

$message = "";
$error = "";
if ($connected2master)
{
	if ($invalid)
	{
		if ($hostname == '')
			$message = $tr["Host name must be specified"];
		elseif (is_invalid_IP (gethostbyname ($hostname)))
			$message = "'" . htmlspecialchars ($hostname) . "' " . $tr["is not valid DNS name or IP address"];
		elseif ($login == '')
			$message = $tr["Login must be specified"];
		elseif ($port == 0)
			$message = $tr["Port is not valid"];
		elseif ($file_list && (!ereg ("^/", $file_list) || ereg ("/$", $file_list)))
			$message = "'" . htmlspecialchars ($file_list) . "' " . $tr["is not valid file name with absolute path"];
	}
	if ($HID)
	{
		$client = ($c["HOST_EDITABLE_SELF"] || $c["HOST_EDITABLE_OTHER"]) ? strtoupper (gethostbyaddr ($REMOTE_ADDR)) : $REMOTE_ADDR;
		$permit = 0;
		$q = mysql_query ("SELECT HostName,Login,Password,Port,StartingDir,FileList,Comment,EditableBy,IP,ExpireCount,Period,Counter,ScanOrder,Flags FROM ftp LEFT JOIN host USING (HID) WHERE ftp.HID=$HID", $mdb);
		if ($q)
		{
			if ($row = mysql_fetch_assoc ($q))
			{
				if ($rights & RIGHT_FTP_EDIT)
					$permit = 1;
				elseif (($row["Flags"] & (HOST_DELETE | HOST_PURGE)) == 0)
				{
					if ($c["HOST_EDITABLE_SELF"] && ($row["HostName"] == $client || $row["HostName"] == $REMOTE_ADDR || $row["IP"] == $REMOTE_ADDR))
						$permit = 1;
					elseif ($c["HOST_EDITABLE_OTHER"] && ($row["EditableBy"] == $client || $row["EditableBy"] == $REMOTE_ADDR))
						$permit = 1;
				}
			}
			mysql_free_result ($q);
		}
		$q = mysql_query ("SELECT ExpireCount,Counter FROM host WHERE HID=$HID", $db);
		if ($q)
		{
			if ($lrow = mysql_fetch_assoc ($q))
			{
				$row["Counter"] = $lrow["Counter"];
				$row["ExpireCount"] = $lrow["ExpireCount"];
			}
			mysql_free_result ($q);
		}

		if ($permit)
		{
			if (!$invalid)
			{
				$hostname = $row["HostName"];
				$login = $row["Login"];
				$password = $row["Password"];
				$port = $row["Port"];
				$starting_dir = $row["StartingDir"];
				$file_list = $row["FileList"];
				$comment = $row["Comment"];
				$period = $row["Period"];
				$counter = $row["Counter"];
				$passive_mode = $row["Flags"] & HOST_PASSIVE_MODE;
				$recursive_ls = $row["Flags"] & HOST_LS_RECURSIVE;
				if ($rights & RIGHT_FTP_EDIT)
				{
					$editableby = $row["EditableBy"];
					$scanorder = $row["ScanOrder"];
					$expirecount = $row["ExpireCount"];
					$host_delete = $row["Flags"] & HOST_DELETE;
					$host_purge = $row["Flags"] & HOST_PURGE;
				}
			}
		}
		else
			$error = permition_host_edit ($HID);
	}
	elseif ($rights & RIGHT_FTP_ADD)
	{
		if (!$invalid)
		{
			$hostname = "";
			$login = "anonymous";
			$password = "user@host.com";
			$port = 21;
			$starting_dir = "/";
			$file_list = "";
			$comment = "";
			$period = 1;
			$counter = 1;
			$passive_mode = 1;
			$recursive_ls = 1;
			if ($rights & RIGHT_FTP_EDIT)
			{
				$editableby = $client;
				$scanorder = 0;
				$expirecount = 1;
			}
		}
	}
	else
		$error = permition_host_add ("FTP");

	if (!$starting_dir)
		$starting_dir = '/';
}
else
	$error = $tr["Can't connect to master database"];

require_once ("head.php");
require_once ("body.php");
$active_item = "ftp_list";
if ($HID)
	$ftp_list_text = $tr["Edit FTP server"];
else
	$ftp_list_text = $tr["Add FTP server"];
$menu_width = 850;
$form_action = "ftp_list.php";
require_once ("menu.php");

echo '<tr><td bgcolor="', $color_wt, '" align="center">';
if ($error)
	echo '<br /><font color="', $color_error, '" class="h1">', $error, '</font><br /><br />';
elseif ($message)
	echo '<br /><font color="', $color_error, '">', $message, '</font><br /><br />';
else
	echo '<br />';
?>
</td></tr>
<?php
if (!$error)
{
?>
<tr><td bgcolor="<?php echo $color_wb; ?>" align="center">
<table width="100%" align="center" border="0" cellpadding="4" cellspacing="0">
<tr><td align="center">
	<input type="hidden" name="HID" value="<?php echo $HID; ?>" />
	<input type="hidden" name="position" value="<?php echo $position; ?>" />
	<input type="hidden" name="sort_by" value="<?php echo $sort_by; ?>" />
	<table border="0" cellpadding="3" cellspacing="0">
	<tr><td align="right"><?php echo $tr["Host (DNS name or IP)"]; ?></td><td><input type="text" name="hostname" value="<?php echo htmlspecialchars ($hostname); ?>" size="30" <?php if ($HID && !($rights & RIGHT_FTP_EDIT)) echo 'readonly="readonly" '; ?>/></td></tr>
	<tr><td align="right"><?php echo $tr["Port"]; ?></td><td><input type="text" name="port" value="<?php echo $port; ?>" size="30" /></td></tr>
	<tr><td align="right"><?php echo $tr["Login"]; ?></td><td><input type="text" name="login" value="<?php echo htmlspecialchars ($login); ?>" size="30" /></td></tr>
	<tr><td align="right"><?php echo $tr["Password"]; ?></td><td><input type="text" name="password" value="<?php echo htmlspecialchars ($password); ?>" size="30" /></td></tr>
	<tr><td align="right"><?php echo $tr["Starting directory"]; ?></td><td><input type="text" name="starting_dir" value="<?php echo htmlspecialchars ($starting_dir); ?>" size="30" /></td></tr>
	<tr><td align="right"><?php echo $tr["List of files"]; ?></td><td><input type="text" name="file_list" value="<?php echo htmlspecialchars ($file_list); ?>" size="30" /></td></tr>
	<tr><td>&nbsp;</td><td><input type="checkbox" name="passive_mode" value="1"<?php if ($passive_mode) echo ' checked="checked"'; ?> /> <?php echo $tr["Use passive mode"], " ", $tr["(server must support it)"]; ?></td></tr>
	<tr><td>&nbsp;</td><td><input type="checkbox" name="recursive_ls" value="1"<?php if ($recursive_ls) echo ' checked="checked"'; ?> /> <?php echo $tr["Use recursive ls (ls -lR) for getting file list"], " ", $tr["(if server supports it)"]; ?></td></tr>
	<tr><td align="right"><?php echo $tr["Comment"]; ?></td><td><textarea name="comment" rows="3" cols="30"><?php echo htmlspecialchars ($comment); ?></textarea></td></tr>
<?php
	if ($rights & RIGHT_FTP_EDIT)
	{
?>
	<tr><td align="right"><?php echo $tr["Editable by"]; ?></td><td><input type="text" name="editableby" value="<?php echo htmlspecialchars ($editableby); ?>" size="30" /></td></tr>
<?php
	}
?>
	<tr><td align="right"><?php echo $tr["Period"]; ?></td><td><input type="text" name="period" value="<?php echo $period; ?>" size="5" />
		&nbsp;&nbsp;(0 &lt;= <?php echo $tr["Period"]; ?> &lt;= 255)</td></tr>
	<tr><td align="right"><?php echo $tr["Counter"]; ?></td><td><input type="text" name="counter" value="<?php echo $counter; ?>" size="5" />
		&nbsp;&nbsp;(0 &lt;= <?php echo $tr["Counter"]; ?> &lt;= 255)</td></tr>
<?php
	if ($rights & RIGHT_FTP_EDIT)
	{
?>
	<tr><td align="right"><?php echo $tr["Scan order"]; ?></td><td><input type="text" name="scanorder" value="<?php echo $scanorder; ?>" size="5" />
		&nbsp;&nbsp;(-128 &lt;= <?php echo $tr["Scan order"]; ?> &lt;= 127)</td></tr>
	<tr><td align="right"><?php echo $tr["Expire count"]; ?></td><td><input type="text" name="expirecount" value="<?php echo $expirecount; ?>" size="5" />
		&nbsp;&nbsp;(0 &lt;= <?php echo $tr["Expire count"]; ?> &lt;= 255)</td></tr>
<?php
		if ($HID)
		{
?>
		<tr><td align="right"><?php echo $tr["Flags"]; ?></td><td>
		<input type="checkbox" name="host_delete" value="1"<?php if ($host_delete) echo ' checked="checked"'; ?> /> <?php echo $tr["delete"]; ?><br />
<?php
			if ($rights & RIGHT_FTP_PURGE)
			{
?>
		<input type="checkbox" name="host_purge" value="1"<?php if ($host_purge) echo ' checked="checked"'; ?> /> <?php echo $tr["purge"]; ?><br />
<?php
			}
?>
		</td></tr>
<?php
		}
	}
?>
	<tr><td>&nbsp;</td><td><input type="submit" name="<?php echo $HID ? 'update' : 'add'; ?>" value="<?php echo $HID ? $tr["Update"] : $tr["Add"]; ?>" />&nbsp;&nbsp;&nbsp;
		<input type="submit" name="cancel" value="<?php echo $tr["Cancel"]; ?>" />
	</td></tr>
	</table>
<?php
?>
</td></tr>
</table>
</td></tr>
<?php
}

if (!$error)
{
	$is_admin = $rights & RIGHT_FTP_EDIT;
	$help_expire = $c["FTP_EXPIRE"];
	require_once ("help_edit.php");
}
require_once ("foot.php");
?>
