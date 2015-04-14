<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_HOST_LIST', 1);

require_once ("db.php");

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
$invalid = getvar ("invalid");
$position = intval (getvar ("position"));
$sort_by = strtolower (trim (getvar ("sort_by")));

if ($sort_by != 'size' && $sort_by != 'date' && $sort_by != 'group')
	$sort_by = 'name';

$message = "";
$error = "";
if ($connected2master)
{
	$host_manual_changes = 1;
	if ($invalid)
	{
		if ($hostname == '')
			$message = $tr["Host name must be specified"];
		elseif (is_invalid_IP ($ip))	# this condition check must be the last one !
			$message = "'" . htmlspecialchars ($ip) . "' " . $tr["is not valid IP address"];
	}
	if ($HID)
	{
		$permit = 0;
		$q = mysql_query ("SELECT host.HID,HostName,WorkGroup,IP,ExpireCount,Period,Counter,ScanOrder,Flags FROM smb LEFT JOIN host USING (HID) WHERE smb.HID=$HID", $mdb);
		if ($q)
		{
			if ($row = mysql_fetch_assoc ($q))
			{
				if ($rights & RIGHT_SMB_EDIT)
					$permit = 1;
				elseif (($row["Flags"] & (HOST_DELETE | HOST_PURGE)) == 0)
				{
					if ($c["HOST_EDITABLE_SELF"] && $row["IP"] == $REMOTE_ADDR)
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
				$workgroup = $row["WorkGroup"];
				$ip = $row["IP"];
				$period = $row["Period"];
				$counter = $row["Counter"];
				if ($rights & RIGHT_SMB_EDIT)
				{
					$scanorder = $row["ScanOrder"];
					$expirecount = $row["ExpireCount"];
					$host_delete = $row["Flags"] & HOST_DELETE;
					$host_purge = $row["Flags"] & HOST_PURGE;
				}
			}
			$host_manual_changes = $row["Flags"] & HOST_MANUAL_CHANGES;
		}
		else
			$error = permition_host_edit ($HID);
	}
	elseif ($rights & RIGHT_SMB_ADD)
	{
		if (!$invalid)
		{
			$hostname = "";
			$workgroup = "";
			$ip = "";
			$period = 1;
			$counter = 1;
			if ($rights & RIGHT_SMB_EDIT)
			{
				$scanorder = 0;
				$expirecount = 1;
			}
		}
	}
	else
		$error = permition_host_add ("SMB");
}
else
	$error = $tr["Can't connect to master database"];

require_once ("head.php");
require_once ("body.php");
$active_item = "smb_list";
if ($HID)
	$smb_list_text = $tr["Edit SMB server"];
else
	$smb_list_text = $tr["Add SMB server"];
$menu_width = 850;
$form_action = "smb_list.php";
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
	<tr><td align="right"><?php echo $tr["Host"]; ?></td><td><input type="text" name="hostname" value="<?php echo htmlspecialchars ($hostname); ?>" size="20" /></td></tr>
<?php
	if ($host_manual_changes)
	{
?>
	<tr><td align="right"><?php echo $tr["IP address"]; ?></td><td><input type="text" name="ip" value="<?php echo htmlspecialchars ($ip); ?>" size="20" /></td></tr>
<?php
	}
?>
	<tr><td align="right"><?php echo $tr["Workgroup"]; ?></td><td><input type="text" name="workgroup" value="<?php echo htmlspecialchars ($workgroup); ?>" size="20" /></td></tr>
	<tr><td align="right"><?php echo $tr["Period"]; ?></td><td><input type="text" name="period" value="<?php echo $period; ?>" size="5" />
		&nbsp;&nbsp;(0 &lt;= <?php echo $tr["Period"]; ?> &lt;= 255)</td></tr>
	<tr><td align="right"><?php echo $tr["Counter"]; ?></td><td><input type="text" name="counter" value="<?php echo $counter; ?>" size="5" />
		&nbsp;&nbsp;(0 &lt;= <?php echo $tr["Counter"]; ?> &lt;= 255)</td></tr>
<?php
	if ($rights & RIGHT_SMB_EDIT)
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
			if ($rights & RIGHT_SMB_PURGE)
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
require_once ("menu_end.php");
if (!$error)
{
	$is_admin = $rights & RIGHT_SMB_EDIT;
	$help_expire = $c["SMB_EXPIRE"];
	require_once ("help_edit.php");
}
require_once ("foot.php");
?>
