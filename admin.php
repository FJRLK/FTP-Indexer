<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_ADMIN', 1);

require_once ("db.php");

$message = "";
if ($connected2master)
{
	if (getvar ('change'))
	{
			if ($AID)
			{
				$password1 = getvar ("password1");
				$password2 = getvar ("password2");
				if ($password1 == $password2)
				{
					if ($password1)
					{
						mysql_query ("UPDATE admin SET PassWord='" . md5 ($admin_login . '-' . $password1) . "' WHERE AID=$AID", $mdb);
						$message = '<font color="' . $color_success . '">' . $tr["Password was changed"] . '</font><br />';
					}
					else
						$message = '<font color="' . $color_error . '">' . $tr["Password cannot be empty"] . '</font><br />';
				}
				else
					$message = '<font color="' . $color_error . '">' . $tr["Passwords do not match"] . '</font><br />';
			}
	}
	else if (getvar ('logout'))
	{
			mysql_query ("UPDATE admin SET LoginTime=0 WHERE AID=$AID", $mdb);
			$AID = 0;
			$aid = '';
			$aid_url = '';
			$rights = 0;
			setcookie ("AID", $AID, 0x7fffffff, ereg_replace ('[^/]*$', '', getvar_server ("SCRIPT_NAME")));
	}
}

require_once ("head.php");
require_once ("body.php");
$active_item = "admin";
$menu_width = 850;
$form_action = "admin.php";
require_once ("menu.php");

if ($connected2master)
{
	$q = mysql_query ("SELECT Name,WWW,Email,Rights FROM admin ORDER BY BIT_COUNT(Rights) DESC,Name", $mdb);
	$n = mysql_num_rows ($q);
}
else
	$n = 0;

echo '<tr><td bgcolor="', $color_wt, '">';
if ($AID && $connected2master)
{
?>
<table width="100%" border="0" cellpadding="4" cellspacing="0">
<tr><td width="50%"><?php echo $message; ?>
<table border="0" cellpadding="3" cellspacing="0">
<tr>
<td align="right"><?php echo $tr["New password"]; ?></td>
<td><input type="password" name="password1" /></td>
</tr>
<tr>
<td align="right"><?php echo $tr["Reenter password"]; ?></td>
<td><input type="password" name="password2" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" name="change" value="<?php echo $tr["Change password"]; ?>" /></td>
</tr>
</table>
</td><td width="50%" align="right" valign="bottom">
<table border="0" cellpadding="3" cellspacing="0">
<tr><td align="right">
<input type="submit" name="logout" value="<?php echo $tr["Logout"]; ?>" />
</td></tr>
</table>
</td></tr>
</table>
<?php
}
elseif ($n)
{
?>
<table width="100%" border="0" cellpadding="4" cellspacing="0">
<tr><td align="center">
<table border="0" cellpadding="3" cellspacing="0">
<tr>
<td align="right"><?php echo $tr["Login name"]; ?></td>
<td><input type="text" name="admin_login" /></td>
</tr>
<tr>
<td align="right"><?php echo $tr["Password"]; ?></td>
<td><input type="password" name="admin_password" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" name="login" value="<?php echo $tr["Login"]; ?>" /></td>
</tr>
</table>
</td></tr>
</table>
<?php
}
else
{
?>
<table width="100%" border="0" cellpadding="4" cellspacing="0">
<tr><td align="center" class="h1">
<?php
if ($connected2master)
	echo $tr["There are no admins."];
else
	echo '<br /><font color="', $color_error, '" class="h1">', $tr["Can't connect to master database"], '</font><br /><br />';
?>
</td></tr>
</table>
<?php
}
?>
</td></tr>
<?php
if ($n)
{
?>
<tr><td bgcolor="<?php echo $color_wb; ?>" align="center">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr><td>
	<table width="100%" border="0" cellpadding="2" class="l1">
	<tr bgcolor="<?php echo $color_tt; ?>">
	<td><b><?php echo $tr["Admin name"]; ?></b></td>
	<td><b><?php echo $tr["E-mail"]; ?></b></td>
	<td><b><?php echo $tr["Rights"].'<br>'.md5 ('Gatkramp-Frik0820'); ?></b></td>
	</tr>
<?php
	while ($row = mysql_fetch_assoc ($q))
	{
		echo '<tr bgcolor="', $color_tb, '">', "\n";
		echo '<td>';
		if ($row["WWW"])
			echo '<a href="', htmlspecialchars ($row["WWW"]), '" target="_blank">';
		echo htmlspecialchars ($row["Name"]);
		if ($row["WWW"])
			echo '</a>';
		echo '</td>', "\n";
		echo '<td>', htmlspecialchars (mangle_email($row["Email"])), '</td>', "\n";

		echo '<td>';
		$right_mask = RIGHT_COMMENTS;
		if (!$c["FTP_DISABLE"])
		{
			$right_mask |= RIGHT_FTP_EDIT | RIGHT_FTP_PURGE;
			if ($row["Rights"] & RIGHT_FTP_EDIT)
				echo $tr["Edit FTP list"] , "<br />";
			if ($row["Rights"] & RIGHT_FTP_PURGE)
				echo $tr["Purge FTP server from list"] , "<br />";
		}
		if (!$c["SMB_DISABLE"])
		{
			$right_mask |= RIGHT_SMB_EDIT | RIGHT_SMB_PURGE;
			if ($row["Rights"] & RIGHT_SMB_EDIT)
				echo $tr["Edit SMB list"] , "<br />";
			if ($row["Rights"] & RIGHT_SMB_PURGE)
				echo $tr["Purge SMB server from list"] , "<br />";
		}
		if ($row["Rights"] & RIGHT_COMMENTS)
			echo $tr["Delete comments"], "<br />";
		if (($row["Rights"] & $right_mask) == 0)	# no rights were printed
			echo "&nbsp;";
		echo "</td>\n";
		echo "</tr>\n";
	}
	mysql_free_result ($q);
?>
	</table>
</td></tr>
</table>
</td></tr>
<?php
}
require_once ("menu_end.php");
require_once ("foot.php");
?>
