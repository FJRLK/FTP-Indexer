<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_HOST_LIST', 1);

require_once ("db.php");

$HID = intval (getvar ("HID"));
$purge = getvar ("purge");
$position = intval (getvar ("position"));
$sort_by = strtolower (trim (getvar ("sort_by")));

if ($sort_by != 'size' && $sort_by != 'date')
	$sort_by = 'name';

$error = "";
if ($connected2master)
{
	$client = ($c["HOST_EDITABLE_SELF"] || $c["HOST_EDITABLE_OTHER"]) ? strtoupper (gethostbyaddr ($REMOTE_ADDR)) : $REMOTE_ADDR;
	$permit = 0;
	if ($HID)
	{
		$q = mysql_query ("SELECT HostName,EditableBy,IP,Flags FROM ftp LEFT JOIN host USING (HID) WHERE ftp.HID=$HID", $mdb);
		if ($q)
		{
			if ($row = mysql_fetch_assoc ($q))
			{
				$hostname = $row["HostName"];
				if ($purge)
				{
					if ($rights & RIGHT_FTP_PURGE)
						$permit = 1;
				}
				else
				{
					if ($rights & (RIGHT_FTP_EDIT | RIGHT_FTP_PURGE))
						$permit = 1;
					elseif (($row["Flags"] & (HOST_DELETE | HOST_PURGE)) == 0)
					{
						if ($c["HOST_EDITABLE_SELF"] && ($row["HostName"] == $client || $row["HostName"] == $REMOTE_ADDR || $row["IP"] == $REMOTE_ADDR))
							$permit = 1;
						elseif ($c["HOST_EDITABLE_OTHER"] && ($row["EditableBy"] == $client || $row["EditableBy"] == $REMOTE_ADDR))
							$permit = 1;
					}
				}
			}
			mysql_free_result ($q);
		}
	}
	if (!$permit)
		$error = permition_host_delete ($HID, "FTP", $purge);
}
else
	$error = $tr["Can't connect to master database"];

require_once ("head.php");
require_once ("body.php");
$active_item = "ftp_list";
if ($purge)
	$ftp_list_text = $tr["Purge FTP server"];
else
	$ftp_list_text = $tr["Delete FTP server"];
$menu_width = 850;
$form_action = "ftp_list.php";
require_once ("menu.php");

echo '<tr><td bgcolor="', $color_wt, '" align="center">';
if ($error)
	echo '<br /><font color="', $color_error, '" class="h1">', $error, '</font><br /><br />';
else
	echo '<br />';
?>
</td></tr>
<?php
if (!$error)
{
?>
<tr><td bgcolor="<?php echo $color_wb; ?>" align="center">
<table align="center" border="0" cellpadding="4" cellspacing="0">
<tr><td align="center">
<br />
<div class="h1"><?php confirm_delete (htmlspecialchars ($hostname), $purge); ?></div><br />
<input type="hidden" name="HID" value="<?php echo $HID; ?>" />
<input type="hidden" name="position" value="<?php echo $position; ?>" />
<input type="hidden" name="sort_by" value="<?php echo $sort_by; ?>" />
<input type="submit" name="<?php echo $purge ? 'purge' : 'delete'; ?>" value="<?php echo $purge ? $tr["Purge"] : $tr["Delete"]; ?>" />&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel" value="<?php echo $tr["Cancel"]; ?>" />
<br />
<br />
</td></tr>
</table>
</td></tr>
<?php
}

require_once ("foot.php");
?>
