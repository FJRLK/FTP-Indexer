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

$months = array ("Jan", "Feb", "Márc", "Ápr", "Máj", "Jún", "Júl", "Aug", "Szept", "Okt", "Nov", "Dec");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO-k";
	$tr["pictures"] = "képek";
	$tr["software"] = "szoftverek";

	# the predefined times in select.php
	$tr["today"] = "ma";
	$tr["yesterday"] = "tegnap";
	$tr["2 days ago"] = "2 napja";
	$tr["3 days ago"] = "3 napja";
	$tr["week ago"] = "1 hete";
	$tr["2 weeks ago"] = "2 hete";
	$tr["month ago"] = "1 hónapja";

	$tr["Searching is case insensitive."] = "A keresõ nem különbözteti meg a kis- és nagybetûket.";
	$tr["Files (wildcard (?,*))"] = "Fájlok (joker karakterekkel (?,*))";
	$tr["Files (substring)"] = "Fájlok (töredékszó)";
	$tr["Files (regular expression)"] = "Fájlok (szabványos kifejezés)";
	$tr["Directories (substring)"] = "Könyvtárak (töredékszó)";
	$tr["Directories (wildcard (?,*))"] = "Könyvtárak (joker karakterekkel (?,*))";
	$tr["Directories (regular expression)"] = "Könyvtárak (szabványos kifejezés)";
	$tr["Search!"] = "Keress";
	$tr["Fill in the parameters for"] = "A következõkre keres";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Beállítások mentése (cookie engedélyezése szükséges)";
	$tr["Show only online hosts"] = "Csak elérhetõ gépek listázása";
	$tr["Print sizes in human readable format"] = "Prefixek használata listázásnál";
	$tr["Search on"] = "Keresés";
	$tr["hosts"] = "szervereken";		# SMB and FTP hosts
	$tr["file size"] = "fájl méret";
	$tr["Only files added since"] = "Frissebbek mint";
	$tr["Hits per page"] = "Találatok oldalanként";
	$tr["Your history"] = "Korábbi keresései";
	$tr["Statistics"] = "Statisztika";
	$tr["SMBs"] = "SMB";
	$tr["FTPs"] = "FTP";
	$tr["Directories"] = "Könyvtárak";
	$tr["Files"] = "Fájlok";
	$tr["Total size"] = "Teljes méret";
	$tr["Queries"] = "Keresések";
	$tr["and"] = "és";
	$tr["others"] = "a többiek";
	$tr["uses some code from"] = "felhasználta a FemFind kódrészleteit. ";
	$tr["is distributed under the"] = "a GPL licensz alatt terjeszthetõ. ";


	# SEARCH.PHP:
	$tr["Results for"] = "Eredmények:";
	$tr["More"] = "Több";
	$tr["New search"] = "Új keresés";
	$tr["No hits"] = "Nincs találat";
	$tr["Hit"] = "Találat";
	$tr["Hits"] = "Találat";


	# BROWSE.PHP
	$tr["Name"] = "Név";
	$tr["Size"] = "Méret";
	$tr["Date"] = "Dátum";
}
$tr["Last change"] = "Utolsó frissítés";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Hozzáadás";
$tr["Update"] = "Frissítés";
$tr["Edit"] = "Szerkesztés";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Törlés";
$tr["Purge"] = "Eltávolítás";
$tr["Cancel"] = "Mégsem";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "FTP szerver hozzáadása";
	$tr["Edit FTP server"] = "FTP szerver szerkesztése";
	$tr["Delete FTP server"] = "FTP szerver törlése";
	$tr["Purge FTP server"] = "Purge FTP server";
	$tr["Add SMB server"] = "SMB szerver hozzáadása";
	$tr["Edit SMB server"] = "SMB szerver szerkesztése";
	$tr["Delete SMB server"] = "SMB szerver törlése";
	$tr["Purge SMB server"] = "Purge SMB server";

	# results and errors
	$tr["Host name must be specified"] = "A hostnév megadása kötelezõ";
	$tr["Workgroup must be specified"] = "A Munkacsoport megadása kötelezõ";
	$tr["is not valid IP address"] = "érvénytelen IP cím";
	$tr["is not valid DNS name or IP address"] = "érvénytelen hostnév vagy IP cím";
	$tr["Login must be specified"] = "Felhasználónév megadása kötelezõ";
	$tr["Port is not valid"] = "Érvénytelen port";
	$tr["is not valid file name with absolute path"] = "Nem létezõ elérési út, fájlnév";
	$tr["was added to list"] = "hozzáadva";
	$tr["is already in the list"] = "már megtalálható a listában";
	$tr["was deleted"] = "törölve";
	$tr["will be scanned during the next network scan"] = "frissül a következõ frissítéskor";
	$tr["will be deleted during next crawl"] = "törlõdik a következõ frissítéskor";
	$tr["will be purged during next crawl"] = "el lesz távolítva a következõ frissítéskor";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Hiba történt a %s host hozzáadása közben";
	$tr["__host_updated__"] = "A %s frissült";

	# data fields
	$tr["Host"] = "Hostnév";
	$tr["Host (DNS name or IP)"] = "Host (hostnév vagy IP cím)";
	$tr["Login"] = "Felhasználónév";
	$tr["Password"] = "Jelszó";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Kiindulási könyvtár";
	$tr["List of files"] = "Fájl lista";
	$tr["Use passive mode"] = "Passzív mód";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Használja a rekurzív ls-t (ls -lR) a fájlista letöltéséhez";
	$tr["(server must support it)"] = "(a szervernek támogatnia kell)";
	$tr["(if server supports it)"] = "(ha a szerver támogatja)";
	$tr["Comment"] = "Megjegyzés";
	$tr["Editable by"] = "Szerkesztheti (hostnév)";
	$tr["IP address"] = "IP cím";
	$tr["Workgroup"] = "Munkacsoport";
	$tr["Shares"] = "Megosztások";
	$tr["Name"] = "Név";
	$tr["File size"] = "Fájl méret";
	$tr["Period"] = "Periódus";
	$tr["Counter"] = "Számláló";
	$tr["Scan order"] = "Frissítési sorszám";
	$tr["Expire count"] = "Elévülés";
	$tr["Flags"] = "Státusz";
	$tr["Action"] = "Mûvelet";
	$tr["delete"] = "törlés";
	$tr["purge"] = "eltávolítás";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Várjuk észrevételeit, ötleteit, megjegyzéseit";
	$tr["Your name or nickname"] = "Név";
	$tr["Your e-mail"] = "E-mail cím";
	$tr["optional"] = "tetszõleges";
	$tr["Comment text"] = "Szöveg";
	$tr["Submit"] = "Elküld";
	$tr["Delete comment"] = "Megjegyzés törlése";
	$tr["Do you really want to delete this comment?"] = "Biztosan törölni kívánja a megjegyzést?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Jelszó megváltoztatása";
	$tr["Logout"] = "Kijelentkezés";
	$tr["Password was changed"] = "A jelszóváltoztatás siekrült";
	$tr["Password cannot be empty"] = "Kérem adjon meg jelszót";
	$tr["Passwords do not match"] = "A megadott jelszavak nem egyeznek";
	$tr["New password"] = "Új jelszó";
	$tr["Reenter password"] = "Új jelszó mégegyszer";
	$tr["Login name"] = "Felhasználónév";
	$tr["Password"] = "Jelszó";
	$tr["Login"] = "Bejelentkezés";
	$tr["There are no admins."] = "Nincsenek adminisztrátorok megadva.";
	$tr["Admin name"] = "Adminisztrátor neve";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Jogosultságok";
	$tr["Edit FTP list"] = "FTP lista szerkesztése";
	$tr["Edit SMB list"] = "SMB lista szerkesztése";
	$tr["Purge FTP server from list"] = "FTP szerver eltávolítása";	# purge == completely delete
	$tr["Purge SMB server from list"] = "SMB szerver eltávolítása";
	$tr["Delete comments"] = "Megjegyzések törlése";
}


# MENU.PHP:
$tr["Search"] = "Keresés";
$tr["FTP server list"] = "FTP szerverek";
$tr["SMB server list"] = "SMB szerverek";
$tr["Comments"] = "Megjegyzések";
$tr["Admin"] = "Adminisztrátor";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Súgó";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Hiba";
$tr["Can't read configuration file"] = "A konfigurációs fájl nem olvasható.";
$tr["DB_NAME must be defined in configuration file"] = "A DB_NAME megadása szükséges a konfigurációs fájlban";
$tr["DB_LOGIN must be defined in configuration file"] = "A DB_LOGIN megadása szükséges a konfigurációs fájlban";
$tr["DB_PASSWORD must be defined in configuration file"] = "A DB_PASSWORD megadása szükséges a konfigurációs fájlban";
$tr["Can't connect to database"] = "Az adatbázis nem elérhetõ";
$tr["Can't connect to master database"] = "A master adatbázis nem elérhetõ";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "találat";
	else
		echo "találat";
	echo "  ", sprintf ("%0.2f", $s), " másodperc alatt";
}

function page_generated ($host, $time)
{
	echo "Ez az oldal ",
		$host, " kérésére készült. ",strftime ("%Y.%m.%d %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Biztosan ", ($purge ? "eltávolítja" : "törli"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "$type host hozzáadásához adminisztrátorként jelentkezzen be";
}

function permition_host_edit ($HID)
{
	return "Nincs host HID = $HID a listában vagy<br />a host módosításához jelentkezzen be adminisztrátorként";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Nincs host HID = $HID a listában<br />adminisztrátorként kell bejelentkeznie, hogy joga legyen" . ($purge ? "eltávolítás" : "szerkesztés vagy eltávolítás") . " $type hostok";
}

function permition_comment_delete ($CID)
{
	return "Nincs megjegyzás CID = $CID vagy<br />törléséhez adminisztrátorként jelentkezzen be";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>A lassú query-k kikapcsolva</h1>';
	echo "Adjon meg normál karaktereket is a fájl elején vagy végén a joker ('*' vagy '?') karakterek mellett  (pl. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />vagy adjon meg minimum fájlméretet "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />vayg adjon meg maximum fájlméretet "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Vissza a keresési paraméterekhez</a>';
}

?>
