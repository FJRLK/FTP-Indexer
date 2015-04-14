<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

# How is the translation done?
# ---------------------------

# The majority of texts are in a translation array:
# $tr["english sentence"] = "translated sentence";

# Some things remain in files - the helps and similar things.
# Other files which need to be translated:
# help_edit.php help_search.php


# TRANSLATION

$months = array ("Sausis", "Vasaris", "Kovas", "Balandis", "Geguþë", "Birþelis", "Liepa", "Rugpjûtis", "Rugsëjis", "Spalis", "Lapkritis", "Gruodis");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO";
	$tr["pictures"] = "paveiksliukai";
	$tr["software"] = "programos";

	# the predefined times in select.php
	$tr["today"] = "Ðiandiena";
	$tr["yesterday"] = "Vakar";
	$tr["2 days ago"] = "Prieð 2 dienas";
	$tr["3 days ago"] = "Prieð 3 dienas";
	$tr["week ago"] = "Prieð savaitæ";
	$tr["2 weeks ago"] = "Prieð 2 savaites";
	$tr["month ago"] = "Prieð mënesá";

	$tr["Searching is case insensitive."] = "Paieðka.";
	$tr["Files (wildcard (?,*))"] = "Failai (wildcard (?,*))";
	$tr["Files (substring)"] = "Failai (substring)";
	$tr["Files (regular expression)"] = "Failai (normalios iðraiðkos)";
	$tr["Directories (substring)"] = "Direktorijos (substring)";
	$tr["Directories (wildcard (?,*))"] = "Direktorijos (wildcard (?,*))";
	$tr["Directories (regular expression)"] = "Direktorijos (normalios iðraiðkos)";
	$tr["Search!"] = "Ieðkoti";
	$tr["Fill in the parameters for"] = "Uþpildyti parametruose dël";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Iðsaugoti nustatymus (reikalingi \"cookies\" )";
	$tr["Show only online hosts"] = "Rodyti tik ájungtus hostus";
	$tr["Print sizes in human readable format"] = "Rodyti failo dydþius graþiu formatu";
	$tr["Search on"] = "Paieðka ájungta";
	$tr["hosts"] = "hostai";		# SMB and FTP hosts
	$tr["file size"] = "failo dydis";
	$tr["Only files added since"] = "Failai pridëti nuo";
	$tr["Hits per page"] = "Rasta puslapyje";
	$tr["Your history"] = "Istorija";
	$tr["Statistics"] = "Statistika";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Direktorijos";
	$tr["Files"] = "Failai";
	$tr["Total size"] = "Visas dydis";
	$tr["Queries"] = "Uþklausimai";
	$tr["and"] = "ir";
	$tr["others"] = "kiti";
	$tr["uses some code from"] = "naudojamas kodas ið";
	$tr["is distributed under the"] = "yra platinamas";


	# SEARCH.PHP:
	$tr["Results for"] = "Rezultatai";
	$tr["More"] = "Daugiau";
	$tr["New search"] = "Nauja paieðka";
	$tr["No hits"] = "Nerasta";
	$tr["Hit"] = "Rasta";
	$tr["Hits"] = "Radybos";


	# BROWSE.PHP
	$tr["Name"] = "Vardas";
	$tr["Size"] = "Dydis";
	$tr["Date"] = "Data";
}
$tr["Last change"] = "Paskutiniai pakeitimai";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Pridëti";
$tr["Update"] = "Atnaujinti";
$tr["Edit"] = "Redaguoti";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Iðtrinti";
$tr["Purge"] = "Iðvalyti";
$tr["Cancel"] = "Atðaukti";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Pridëti FTP serverá";
	$tr["Edit FTP server"] = "Redaguoti FTP serverá";
	$tr["Delete FTP server"] = "Iðtrinti FTP serverá";
	$tr["Purge FTP server"] = "Iðvalyti FTP serverá";
	$tr["Add SMB server"] = "Pridëti SMB serverá";
	$tr["Edit SMB server"] = "Redaguoti SMB serverá";
	$tr["Delete SMB server"] = "Iðtrinti SMB serverá";
	$tr["Purge SMB server"] = "Iðvalyti SMB server";

	# results and errors
	$tr["Host name must be specified"] = "Hosto vardas turi bûti nurodytas";
	$tr["Workgroup must be specified"] = "Workgroup turi bûti nurodyta";
	$tr["is not valid IP address"] = "tokio IP adreso nëra";
	$tr["is not valid DNS name or IP address"] = "tokio DNS ar IP adreso nëra";
	$tr["Login must be specified"] = "Turi bûti nurodytas vardas";
	$tr["Port is not valid"] = "Neegzistuojantis portas";
	$tr["is not valid file name with absolute path"] = "Neegzistuojantis vardas su pilnu keliu";
	$tr["was added to list"] = "Ákelta á saraðà";
	$tr["is already in the list"] = "Jau yra saraðe";
	$tr["was deleted"] = "Iðtrinta";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "bus iðtrinta per sekantá crawl";
	$tr["will be purged during next crawl"] = "bus sunaikinta per sekantá crawl";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Yra klaida kol priseginëjai %s prie sàraðo";
	$tr["__host_updated__"] = "Informacija apie %s buvo atnaujinta";

	# data fields
	$tr["Host"] = "Hostas";
	$tr["Host (DNS name or IP)"] = "Hostas (DNS vardas arba IP)";
	$tr["Login"] = "Vardas";
	$tr["Password"] = "Slaptaþodis";
	$tr["Port"] = "Portas";
	$tr["Starting directory"] = "Pradinë direktorija";
	$tr["List of files"] = "Failø sàraðas";
	$tr["Use passive mode"] = "Naudoti passive mode";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Komentaras";
	$tr["Editable by"] = "Redaguojama";
	$tr["IP address"] = "IP adresas";
	$tr["Workgroup"] = "Workgroup'ë";
	$tr["Name"] = "Vardas";
	$tr["Shares"] = "Shares'ai";
	$tr["File size"] = "Failo dydis";
	$tr["Period"] = "Period'as";
	$tr["Counter"] = "Skaièiuoklis";
	$tr["Scan order"] = "Skanavimo uþsakymas";
	$tr["Expire count"] = "Skaièiavimas baigtas";
	$tr["Flags"] = "Vëliavëlës";
	$tr["Action"] = "Veiksmas";
	$tr["delete"] = "iðtrinti";
	$tr["purge"] = "sunaikinti";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Gali paraðyti savo idëjas ir nuomones";
	$tr["Your name or nickname"] = "Tavo vardas arba nikas";
	$tr["Your e-mail"] = "Tavo e-mail";
	$tr["optional"] = "bet koks";
	$tr["Comment text"] = "Tekstas";
	$tr["Submit"] = "Pridëti";
	$tr["Delete comment"] = "Iðtrinti komentarà";
	$tr["Do you really want to delete this comment?"] = "Ar tikrai norite iðtrinti ðá komentarà?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Kesisti slaptaþodá";
	$tr["Logout"] = "Iðsiloginti";
	$tr["Password was changed"] = "Slaptaþodis pakeistas";
	$tr["Password cannot be empty"] = "Slaptaþodis negali buti tuðèias";
	$tr["Passwords do not match"] = "Slaptaþodis neatitinka";
	$tr["New password"] = "Naujas slaptaþodis";
	$tr["Reenter password"] = "Dar kartà slaptaþodis";
	$tr["Login name"] = "Login vardas";
	$tr["Password"] = "Slaptaþodis";
	$tr["Login"] = "Loginas";
	$tr["There are no admins."] = "Nëra administratoriø";
	$tr["Admin name"] = "Administratoriaus vardas";
	$tr["E-mail"] = "E-mailas";
	$tr["Rights"] = "Teisës";
	$tr["Edit FTP list"] = "Redaguoti FTP sàraðà";
	$tr["Edit SMB list"] = "Redaguoti SMB sàraðà";
	$tr["Purge FTP server from list"] = "Visiðkai iðtrinti FTP serverá ið sàraðo";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Visiðkai iðtrinti SMB serverá ið sàraðo";
	$tr["Delete comments"] = "Iðtrinti komentarus";
}


# MENU.PHP:
$tr["Search"] = "Paieðka";
$tr["FTP server list"] = "FTP serverio sàraðas";
$tr["SMB server list"] = "SMB serverio sàraðas";
$tr["Comments"] = "Komentarai";
$tr["Admin"] = "Adminstratorius";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Pagalba";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Klaida";
$tr["Can't read configuration file"] = "Negaliu perskaityti konfigûracijos failo";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME turi bûti apibrëþtas konfigûracijos faile";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN turi bûti apibrëþtas konfigûracijos faile";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD must be defined in configuration file";
$tr["Can't connect to database"] = "Negaliu prissijungti prie duomenø bazës";
$tr["Can't connect to master database"] = "Negaliu prisijungti prie savininko(master) bazës";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "rezultatas";
	else
		echo "rezultatø";
	echo " per ", sprintf ("%0.2f", $s), " sek.";
}

function page_generated ($host, $time)
{
	echo "Puslapio uþklausa ið  ",
		$host, strftime (" : %d.%m.%Y - %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Ar tikrai norite ", ($purge ? "iðvalyti" : "iðtrinti"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Turite prisijungit kaip admin norint ákelti $type hosta";
}

function permition_host_edit ($HID)
{
	return "Nëra hosto su HID = $HID  saraðe arba<br />prisijungite kaip admin norëdami redaguoti ðá hostà";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Nëra hosto su HID = $HID saraðe arba<br />prisijungite kaip admin norëdami " . ($purge ? "iðvalyti" : "redauoti arba iðvalyti") . " $type hostus";
}

function permition_comment_delete ($CID)
{
	return "Nëra komentarø  CID = $CID arba<br />prisijungite kaip admin norëdami iðtrinti komentarus";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Lëtos uþklausos iðjungtos</h1>';
	echo "Search by wildcard and specify some normal characters (not '*' or '?') from the beginning or the end of the file name mask (e.g. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />or specify the minimum file size of "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />or specify the maximum file size of "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Return back to search parameters</a>';
}

?>
