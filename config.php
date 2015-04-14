<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

require_once ("vars.php");
require_once ("colors.php");

define ("HOSTTYPE_SMB", 1 << 0);
define ("HOSTTYPE_FTP", 1 << 1);

define ("HOST_DELETE",  1 << 0);
define ("HOST_PURGE",   1 << 1);
#define ("HOST_SCANNED", 1 << 2);		# no longer used
define ("HOST_ONLINE",  1 << 4);
# protocol specific flags
# SMB:
define ("HOST_MANUAL_CHANGES", 1 << 3);
# FTP:
define ("HOST_PASSIVE_MODE", 1 << 3);
define ("HOST_LS_RECURSIVE", 1 << 5);

# host state flags
define ("FLAGS_GLOBAL", HOST_DELETE | HOST_PURGE | HOST_MANUAL_CHANGES | HOST_PASSIVE_MODE | HOST_LS_RECURSIVE);
define ("FLAGS_LOCAL", HOST_ONLINE);
define ("FLAGS_SHOW", HOST_DELETE | HOST_PURGE);

# search flags
#define ("SEARCH_ONLINE",      1 << 0);		# no longer used
define ("SEARCH_ONLINE_ONLY", 1 << 1);
define ("SEARCH_HUMAN_READABLE", 1 << 2);

# search type flags
define ("FLAG_SAVE",     1 << 0);	# save settings
define ("FLAG_ADVANCED", 1 << 1);	# advanced search

# the protocol part of URL used for SMB protocol
if (ereg ("[^A-Za-z0-9]Windows[^A-Za-z0-9]", getvar_server ("HTTP_USER_AGENT")))	# Windows
{
	if (ereg ("[^A-Za-z0-9]Gecko[^A-Za-z0-9]", getvar_server ("HTTP_USER_AGENT")))	# Mozilla
		$smb_protocol = "file://///";
	else
		$smb_protocol = "file://";
}
elseif (ereg ("[^A-Za-z0-9]MSIE[^A-Za-z0-9]", getvar_server ("HTTP_USER_AGENT")))	# MSIE
{
	$smb_protocol = "file://";
}
else
{
	$smb_protocol = "smb://";
}

$min_year = 2002;
$max_year = 2015;
$form_action = "";
$error = "";

# read config file
$c = array ();
$c["VERSION"] = "1.1.12";
$c["CONFIG_FILE"] = "/etc/ffsearch.conf";
$fd = fopen ($c["CONFIG_FILE"], "rt");
if ($fd)
{
	while (!feof ($fd))
	{
		$str = chop (fgets ($fd, 4096));
		if ($str == "" || $str[0] == '#')
			continue;
		if (ereg ("^[ \t]*([^ \t]+)[ \t]*(.*)$", $str, $regs))
		{
			$name = strtoupper ($regs[1]);
			$c[$name] = trim ($regs[2]);
			$c["__$name"] = 1;
		}
	}
	fclose ($fd);
}

if (!$c["DB_HOST"])
	$c["DB_HOST"] = 'localhost';
$c["DB_PORT"] = getint ($c["DB_PORT"], 1, 65535, 3306);
$c["DB"] = $c["DB_HOST"] . ":" . $c["DB_PORT"];
if ($c["__MDB_NAME"] + $c["__MDB_LOGIN"] + $c["__MDB_PASSWORD"] == 3)
{
	if (!$c["MDB_HOST"])
		$c["MDB_HOST"] = 'localhost';
	$c["MDB_PORT"] = getint ($c["MDB_PORT"], 1, 65535, 3306);
	$c["MDB"] = $c["MDB_HOST"] . ":" . $c["MDB_PORT"];
}
else
{
	$c["MDB"] = $c["DB"];
	$c["MDB_NAME"] = $c["DB_NAME"];
	$c["MDB_LOGIN"] = $c["DB_LOGIN"];
	$c["MDB_PASSWORD"] = $c["DB_PASSWORD"];
}

$c["FTP_DISABLE"] = getbool ($c["FTP_DISABLE"], 0);
$c["SMB_DISABLE"] = getbool ($c["SMB_DISABLE"], 0);
$c["LANGUAGE"] = strtolower ($c["LANGUAGE"]);
$c["HIDE_LANGUAGES"] = strtolower ($c["HIDE_LANGUAGES"]);
$c["HISTORY_COUNT"] = getint ($c["HISTORY_COUNT"], 0, 256);
$c["LOGGING_ENABLE"] = getbool ($c["LOGGING_ENABLE"], 1);
$c["LOGGING_DNS_LOOKUP"] = getbool ($c["LOGGING_DNS_LOOKUP"], 0);
$c["USE_IP_ADDRESS_IN_LINK"] = getbool ($c["USE_IP_ADDRESS_IN_LINK"], 0);
$c["DENY_SLOW_QUERIES"] = getbool ($c["DENY_SLOW_QUERIES"], 0);
$fast_query_minsize = getsize ($c["FAST_QUERY_MINSIZE"], -1);
$fast_query_maxsize = getsize ($c["FAST_QUERY_MAXSIZE"], -1);

$c["SHOW_LOGIN_PASS"] = getbool ($c["SHOW_LOGIN_PASS"], 1);
$c["HOST_FILE_SIZE"] = getbool ($c["HOST_FILE_SIZE"], 1);
$c["SHARE_FILE_SIZE"] = getbool ($c["SHARE_FILE_SIZE"], 1);
$c["SHOW_LAST_CHANGE"] = getbool ($c["SHOW_LAST_CHANGE"], 1);
$c["ADD_FTP_HOST_ENABLED"] = getbool ($c["ADD_FTP_HOST_ENABLED"], 1);
$c["ADD_SMB_HOST_ENABLED"] = getbool ($c["ADD_SMB_HOST_ENABLED"], 1);
$c["HOST_EDITABLE_SELF"] = getbool ($c["HOST_EDITABLE_SELF"], 1);
$c["HOST_EDITABLE_OTHER"] = getbool ($c["HOST_EDITABLE_OTHER"], 0);

if (ereg ("^(connect|ping)", strtolower ($c["ONLINE_CHECK_FTP"]), $regs))
{
	$c["ONLINE_CHECK"] = $regs[1];
}
elseif (ereg ("^(connect|ping)", strtolower ($c["ONLINE_CHECK_SMB"]), $regs))
{
	$c["ONLINE_CHECK"] = $regs[1];
}

require_once ("lang.php");

if ($fd)
{
	if (!isset ($c["DB_NAME"]))
		$error = $tr["DB_NAME must be defined in configuration file"];
	elseif (!isset ($c["DB_LOGIN"]))
		$error = $tr["DB_LOGIN must be defined in configuration file"];
	elseif (!isset ($c["DB_PASSWORD"]))
		$error = $tr["DB_PASSWORD must be defined in configuration file"];
}
else
	$error = $tr["Can't read configuration file"];

if ($error)
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
<h1><?php echo $error; ?></h1>
</div>
</body>
</html>
<?php
	die ("");
}
?>
