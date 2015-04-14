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

$months = array ("Sausis", "Vasaris", "Kovas", "Balandis", "Gegu��", "Bir�elis", "Liepa", "Rugpj�tis", "Rugs�jis", "Spalis", "Lapkritis", "Gruodis");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO";
	$tr["pictures"] = "paveiksliukai";
	$tr["software"] = "programos";

	# the predefined times in select.php
	$tr["today"] = "�iandiena";
	$tr["yesterday"] = "Vakar";
	$tr["2 days ago"] = "Prie� 2 dienas";
	$tr["3 days ago"] = "Prie� 3 dienas";
	$tr["week ago"] = "Prie� savait�";
	$tr["2 weeks ago"] = "Prie� 2 savaites";
	$tr["month ago"] = "Prie� m�nes�";

	$tr["Searching is case insensitive."] = "Paie�ka.";
	$tr["Files (wildcard (?,*))"] = "Failai (wildcard (?,*))";
	$tr["Files (substring)"] = "Failai (substring)";
	$tr["Files (regular expression)"] = "Failai (normalios i�rai�kos)";
	$tr["Directories (substring)"] = "Direktorijos (substring)";
	$tr["Directories (wildcard (?,*))"] = "Direktorijos (wildcard (?,*))";
	$tr["Directories (regular expression)"] = "Direktorijos (normalios i�rai�kos)";
	$tr["Search!"] = "Ie�koti";
	$tr["Fill in the parameters for"] = "U�pildyti parametruose d�l";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "I�saugoti nustatymus (reikalingi \"cookies\" )";
	$tr["Show only online hosts"] = "Rodyti tik �jungtus hostus";
	$tr["Print sizes in human readable format"] = "Rodyti failo dyd�ius gra�iu formatu";
	$tr["Search on"] = "Paie�ka �jungta";
	$tr["hosts"] = "hostai";		# SMB and FTP hosts
	$tr["file size"] = "failo dydis";
	$tr["Only files added since"] = "Failai prid�ti nuo";
	$tr["Hits per page"] = "Rasta puslapyje";
	$tr["Your history"] = "Istorija";
	$tr["Statistics"] = "Statistika";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Direktorijos";
	$tr["Files"] = "Failai";
	$tr["Total size"] = "Visas dydis";
	$tr["Queries"] = "U�klausimai";
	$tr["and"] = "ir";
	$tr["others"] = "kiti";
	$tr["uses some code from"] = "naudojamas kodas i�";
	$tr["is distributed under the"] = "yra platinamas";


	# SEARCH.PHP:
	$tr["Results for"] = "Rezultatai";
	$tr["More"] = "Daugiau";
	$tr["New search"] = "Nauja paie�ka";
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
$tr["Add"] = "Prid�ti";
$tr["Update"] = "Atnaujinti";
$tr["Edit"] = "Redaguoti";
$tr["Scan"] = "Scan";
$tr["Delete"] = "I�trinti";
$tr["Purge"] = "I�valyti";
$tr["Cancel"] = "At�aukti";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Prid�ti FTP server�";
	$tr["Edit FTP server"] = "Redaguoti FTP server�";
	$tr["Delete FTP server"] = "I�trinti FTP server�";
	$tr["Purge FTP server"] = "I�valyti FTP server�";
	$tr["Add SMB server"] = "Prid�ti SMB server�";
	$tr["Edit SMB server"] = "Redaguoti SMB server�";
	$tr["Delete SMB server"] = "I�trinti SMB server�";
	$tr["Purge SMB server"] = "I�valyti SMB server";

	# results and errors
	$tr["Host name must be specified"] = "Hosto vardas turi b�ti nurodytas";
	$tr["Workgroup must be specified"] = "Workgroup turi b�ti nurodyta";
	$tr["is not valid IP address"] = "tokio IP adreso n�ra";
	$tr["is not valid DNS name or IP address"] = "tokio DNS ar IP adreso n�ra";
	$tr["Login must be specified"] = "Turi b�ti nurodytas vardas";
	$tr["Port is not valid"] = "Neegzistuojantis portas";
	$tr["is not valid file name with absolute path"] = "Neegzistuojantis vardas su pilnu keliu";
	$tr["was added to list"] = "�kelta � sara��";
	$tr["is already in the list"] = "Jau yra sara�e";
	$tr["was deleted"] = "I�trinta";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "bus i�trinta per sekant� crawl";
	$tr["will be purged during next crawl"] = "bus sunaikinta per sekant� crawl";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Yra klaida kol prisegin�jai %s prie s�ra�o";
	$tr["__host_updated__"] = "Informacija apie %s buvo atnaujinta";

	# data fields
	$tr["Host"] = "Hostas";
	$tr["Host (DNS name or IP)"] = "Hostas (DNS vardas arba IP)";
	$tr["Login"] = "Vardas";
	$tr["Password"] = "Slapta�odis";
	$tr["Port"] = "Portas";
	$tr["Starting directory"] = "Pradin� direktorija";
	$tr["List of files"] = "Fail� s�ra�as";
	$tr["Use passive mode"] = "Naudoti passive mode";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Komentaras";
	$tr["Editable by"] = "Redaguojama";
	$tr["IP address"] = "IP adresas";
	$tr["Workgroup"] = "Workgroup'�";
	$tr["Name"] = "Vardas";
	$tr["Shares"] = "Shares'ai";
	$tr["File size"] = "Failo dydis";
	$tr["Period"] = "Period'as";
	$tr["Counter"] = "Skai�iuoklis";
	$tr["Scan order"] = "Skanavimo u�sakymas";
	$tr["Expire count"] = "Skai�iavimas baigtas";
	$tr["Flags"] = "V�liav�l�s";
	$tr["Action"] = "Veiksmas";
	$tr["delete"] = "i�trinti";
	$tr["purge"] = "sunaikinti";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Gali para�yti savo id�jas ir nuomones";
	$tr["Your name or nickname"] = "Tavo vardas arba nikas";
	$tr["Your e-mail"] = "Tavo e-mail";
	$tr["optional"] = "bet koks";
	$tr["Comment text"] = "Tekstas";
	$tr["Submit"] = "Prid�ti";
	$tr["Delete comment"] = "I�trinti komentar�";
	$tr["Do you really want to delete this comment?"] = "Ar tikrai norite i�trinti �� komentar�?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Kesisti slapta�od�";
	$tr["Logout"] = "I�siloginti";
	$tr["Password was changed"] = "Slapta�odis pakeistas";
	$tr["Password cannot be empty"] = "Slapta�odis negali buti tu��ias";
	$tr["Passwords do not match"] = "Slapta�odis neatitinka";
	$tr["New password"] = "Naujas slapta�odis";
	$tr["Reenter password"] = "Dar kart� slapta�odis";
	$tr["Login name"] = "Login vardas";
	$tr["Password"] = "Slapta�odis";
	$tr["Login"] = "Loginas";
	$tr["There are no admins."] = "N�ra administratori�";
	$tr["Admin name"] = "Administratoriaus vardas";
	$tr["E-mail"] = "E-mailas";
	$tr["Rights"] = "Teis�s";
	$tr["Edit FTP list"] = "Redaguoti FTP s�ra��";
	$tr["Edit SMB list"] = "Redaguoti SMB s�ra��";
	$tr["Purge FTP server from list"] = "Visi�kai i�trinti FTP server� i� s�ra�o";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Visi�kai i�trinti SMB server� i� s�ra�o";
	$tr["Delete comments"] = "I�trinti komentarus";
}


# MENU.PHP:
$tr["Search"] = "Paie�ka";
$tr["FTP server list"] = "FTP serverio s�ra�as";
$tr["SMB server list"] = "SMB serverio s�ra�as";
$tr["Comments"] = "Komentarai";
$tr["Admin"] = "Adminstratorius";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Pagalba";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Klaida";
$tr["Can't read configuration file"] = "Negaliu perskaityti konfig�racijos failo";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME turi b�ti apibr��tas konfig�racijos faile";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN turi b�ti apibr��tas konfig�racijos faile";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD must be defined in configuration file";
$tr["Can't connect to database"] = "Negaliu prissijungti prie duomen� baz�s";
$tr["Can't connect to master database"] = "Negaliu prisijungti prie savininko(master) baz�s";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "rezultatas";
	else
		echo "rezultat�";
	echo " per ", sprintf ("%0.2f", $s), " sek.";
}

function page_generated ($host, $time)
{
	echo "Puslapio u�klausa i�  ",
		$host, strftime (" : %d.%m.%Y - %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Ar tikrai norite ", ($purge ? "i�valyti" : "i�trinti"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Turite prisijungit kaip admin norint �kelti $type hosta";
}

function permition_host_edit ($HID)
{
	return "N�ra hosto su HID = $HID  sara�e arba<br />prisijungite kaip admin nor�dami redaguoti �� host�";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "N�ra hosto su HID = $HID sara�e arba<br />prisijungite kaip admin nor�dami " . ($purge ? "i�valyti" : "redauoti arba i�valyti") . " $type hostus";
}

function permition_comment_delete ($CID)
{
	return "N�ra komentar�  CID = $CID arba<br />prisijungite kaip admin nor�dami i�trinti komentarus";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>L�tos u�klausos i�jungtos</h1>';
	echo "Search by wildcard and specify some normal characters (not '*' or '?') from the beginning or the end of the file name mask (e.g. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />or specify the minimum file size of "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />or specify the maximum file size of "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Return back to search parameters</a>';
}

?>
