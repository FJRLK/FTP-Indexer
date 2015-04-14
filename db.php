<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

require_once ("config.php");

$error = 0;
$connected2master = 1;
$db = $mdb = mysql_pconnect ($c["DB"], $c["DB_LOGIN"], $c["DB_PASSWORD"]);
if (!$db)
	$error = 1;
elseif (!mysql_select_db ($c["DB_NAME"], $db))
	$error = 1;
if ($c["MDB"] != $c["DB"] || $c["MDB_NAME"] != $c["DB_NAME"] || $c["MDB_LOGIN"] != $c["DB_LOGIN"])
{
	$mdb = mysql_pconnect ($c["MDB"], $c["MDB_LOGIN"], $c["MDB_PASSWORD"]);
	if (!$mdb)
		$connected2master = 0;
	elseif (!mysql_select_db ($c["MDB_NAME"], $mdb))
		$connected2master = 0;
	if (!$connected2master)
		$mdb = $db;
}

if ($error)
{
	if ($c["BACKUP_URL"])
	{
		header ("Location: " . $c["BACKUP_URL"]);
		die ("");
	}
	else
	{
		echo '<?xml version="1.0" encoding="', $encoding, '" ?>', "\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" lang="<?php echo $lang; ?>">
<head>
<title><?php echo $tr["Error"]; ?></title>
</head>
<?php
echo '<body bgcolor="', $color_bg, '" text="', $color_text, '" link="', $color_link, '" vlink="', $color_vlink, '" alink="', $color_alink, '">';
?>
<div align="center">
<h1><?php echo $tr["Can't connect to database"]; ?></h1>
</div>
</body>
</html>
<?php
		die ("");
	}
}

require_once ("access.php");
?>
