<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_COMMENTS', 1);

require_once ("db.php");

$CID = intval (getvar ("CID"));
$position = intval (getvar ("position"));

$error = "";
if ($connected2master)
{
	$permit = 0;
	if ($CID && ($rights & RIGHT_COMMENTS))
	{
		$q = mysql_query ("SELECT Time,Name,Email,Comment FROM comments WHERE CID=$CID", $mdb);
		if ($q)
		{
			if ($row = mysql_fetch_assoc ($q))
			{
				$permit = 1;
				$time = $row["Time"];
				$name = $row["Name"];
				$email = $row["Email"];
				$comment = $row["Comment"];
			}
			mysql_free_result ($q);
		}
	}
	if (!$permit)
		$error = permition_comment_delete ($CID);
}
else
	$error = $tr["Can't connect to master database"];

require_once ("head.php");
require_once ("body.php");
$active_item = "comments";
$comments_text = $tr["Delete comment"];
$menu_width = 850;
$form_action = "comments.php";
require_once ("menu.php");

echo '<tr><td bgcolor="', $color_wt, '" align="center">';
if ($error)
	echo '<br /><font color="', $color_error, '" class="h1">', $error, '</font><br /><br />';
else
{
?>
<table align="center" border="0" cellpadding="4" cellspacing="0">
<tr><td align="center">
<br />
<div class="h1"><?php echo $tr["Do you really want to delete this comment?"]; ?></div><br />
<input type="hidden" name="CID" value="<?php echo $CID; ?>" />
<input type="hidden" name="position" value="<?php echo $position; ?>" />
<input type="submit" name="delete" value="<?php echo $tr["Delete"]; ?>" />&nbsp;&nbsp;&nbsp;
<input type="submit" name="cancel" value="<?php echo $tr["Cancel"]; ?>" />
<br />
<br />
</td></tr>
</table>
<?php
}
echo '</td></tr>';
if (!$error)
{
?>
<tr><td bgcolor="<?php echo $color_wb; ?>" align="center">
<table width="100%" border="0" cellpadding="4" cellspacing="0">
<tr><td align="center">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr bgcolor="<?php echo $color_tt; ?>">
<td><?php echo htmlspecialchars ($name), " ", $email ? '&lt;<a href="mailto:' . htmlspecialchars ($email) . '">' . htmlspecialchars ($email) . '</a>&gt;' : "&nbsp;"; ?></td>
<td align="right"><?php echo strftime ("%Y-%m-%d %H:%M:%S", $time); ?></td>
</tr>
<tr bgcolor="<?php echo $color_tb; ?>">
<td colspan="2"><?php echo nl2br (htmlspecialchars ($comment)); ?></td>
</tr>
</table>
</td></tr>
</table>
</td></tr>
<?php
}
require_once ("menu_end.php");
require_once ("foot.php");
?>
