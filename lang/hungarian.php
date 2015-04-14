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

$months = array ("Jan", "Feb", "M�rc", "�pr", "M�j", "J�n", "J�l", "Aug", "Szept", "Okt", "Nov", "Dec");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO-k";
	$tr["pictures"] = "k�pek";
	$tr["software"] = "szoftverek";

	# the predefined times in select.php
	$tr["today"] = "ma";
	$tr["yesterday"] = "tegnap";
	$tr["2 days ago"] = "2 napja";
	$tr["3 days ago"] = "3 napja";
	$tr["week ago"] = "1 hete";
	$tr["2 weeks ago"] = "2 hete";
	$tr["month ago"] = "1 h�napja";

	$tr["Searching is case insensitive."] = "A keres� nem k�l�nb�zteti meg a kis- �s nagybet�ket.";
	$tr["Files (wildcard (?,*))"] = "F�jlok (joker karakterekkel (?,*))";
	$tr["Files (substring)"] = "F�jlok (t�red�ksz�)";
	$tr["Files (regular expression)"] = "F�jlok (szabv�nyos kifejez�s)";
	$tr["Directories (substring)"] = "K�nyvt�rak (t�red�ksz�)";
	$tr["Directories (wildcard (?,*))"] = "K�nyvt�rak (joker karakterekkel (?,*))";
	$tr["Directories (regular expression)"] = "K�nyvt�rak (szabv�nyos kifejez�s)";
	$tr["Search!"] = "Keress";
	$tr["Fill in the parameters for"] = "A k�vetkez�kre keres";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Be�ll�t�sok ment�se (cookie enged�lyez�se sz�ks�ges)";
	$tr["Show only online hosts"] = "Csak el�rhet� g�pek list�z�sa";
	$tr["Print sizes in human readable format"] = "Prefixek haszn�lata list�z�sn�l";
	$tr["Search on"] = "Keres�s";
	$tr["hosts"] = "szervereken";		# SMB and FTP hosts
	$tr["file size"] = "f�jl m�ret";
	$tr["Only files added since"] = "Frissebbek mint";
	$tr["Hits per page"] = "Tal�latok oldalank�nt";
	$tr["Your history"] = "Kor�bbi keres�sei";
	$tr["Statistics"] = "Statisztika";
	$tr["SMBs"] = "SMB";
	$tr["FTPs"] = "FTP";
	$tr["Directories"] = "K�nyvt�rak";
	$tr["Files"] = "F�jlok";
	$tr["Total size"] = "Teljes m�ret";
	$tr["Queries"] = "Keres�sek";
	$tr["and"] = "�s";
	$tr["others"] = "a t�bbiek";
	$tr["uses some code from"] = "felhaszn�lta a FemFind k�dr�szleteit. ";
	$tr["is distributed under the"] = "a GPL licensz alatt terjeszthet�. ";


	# SEARCH.PHP:
	$tr["Results for"] = "Eredm�nyek:";
	$tr["More"] = "T�bb";
	$tr["New search"] = "�j keres�s";
	$tr["No hits"] = "Nincs tal�lat";
	$tr["Hit"] = "Tal�lat";
	$tr["Hits"] = "Tal�lat";


	# BROWSE.PHP
	$tr["Name"] = "N�v";
	$tr["Size"] = "M�ret";
	$tr["Date"] = "D�tum";
}
$tr["Last change"] = "Utols� friss�t�s";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Hozz�ad�s";
$tr["Update"] = "Friss�t�s";
$tr["Edit"] = "Szerkeszt�s";
$tr["Scan"] = "Scan";
$tr["Delete"] = "T�rl�s";
$tr["Purge"] = "Elt�vol�t�s";
$tr["Cancel"] = "M�gsem";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "FTP szerver hozz�ad�sa";
	$tr["Edit FTP server"] = "FTP szerver szerkeszt�se";
	$tr["Delete FTP server"] = "FTP szerver t�rl�se";
	$tr["Purge FTP server"] = "Purge FTP server";
	$tr["Add SMB server"] = "SMB szerver hozz�ad�sa";
	$tr["Edit SMB server"] = "SMB szerver szerkeszt�se";
	$tr["Delete SMB server"] = "SMB szerver t�rl�se";
	$tr["Purge SMB server"] = "Purge SMB server";

	# results and errors
	$tr["Host name must be specified"] = "A hostn�v megad�sa k�telez�";
	$tr["Workgroup must be specified"] = "A Munkacsoport megad�sa k�telez�";
	$tr["is not valid IP address"] = "�rv�nytelen IP c�m";
	$tr["is not valid DNS name or IP address"] = "�rv�nytelen hostn�v vagy IP c�m";
	$tr["Login must be specified"] = "Felhaszn�l�n�v megad�sa k�telez�";
	$tr["Port is not valid"] = "�rv�nytelen port";
	$tr["is not valid file name with absolute path"] = "Nem l�tez� el�r�si �t, f�jln�v";
	$tr["was added to list"] = "hozz�adva";
	$tr["is already in the list"] = "m�r megtal�lhat� a list�ban";
	$tr["was deleted"] = "t�r�lve";
	$tr["will be scanned during the next network scan"] = "friss�l a k�vetkez� friss�t�skor";
	$tr["will be deleted during next crawl"] = "t�rl�dik a k�vetkez� friss�t�skor";
	$tr["will be purged during next crawl"] = "el lesz t�vol�tva a k�vetkez� friss�t�skor";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Hiba t�rt�nt a %s host hozz�ad�sa k�zben";
	$tr["__host_updated__"] = "A %s friss�lt";

	# data fields
	$tr["Host"] = "Hostn�v";
	$tr["Host (DNS name or IP)"] = "Host (hostn�v vagy IP c�m)";
	$tr["Login"] = "Felhaszn�l�n�v";
	$tr["Password"] = "Jelsz�";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Kiindul�si k�nyvt�r";
	$tr["List of files"] = "F�jl lista";
	$tr["Use passive mode"] = "Passz�v m�d";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Haszn�lja a rekurz�v ls-t (ls -lR) a f�jlista let�lt�s�hez";
	$tr["(server must support it)"] = "(a szervernek t�mogatnia kell)";
	$tr["(if server supports it)"] = "(ha a szerver t�mogatja)";
	$tr["Comment"] = "Megjegyz�s";
	$tr["Editable by"] = "Szerkesztheti (hostn�v)";
	$tr["IP address"] = "IP c�m";
	$tr["Workgroup"] = "Munkacsoport";
	$tr["Shares"] = "Megoszt�sok";
	$tr["Name"] = "N�v";
	$tr["File size"] = "F�jl m�ret";
	$tr["Period"] = "Peri�dus";
	$tr["Counter"] = "Sz�ml�l�";
	$tr["Scan order"] = "Friss�t�si sorsz�m";
	$tr["Expire count"] = "El�v�l�s";
	$tr["Flags"] = "St�tusz";
	$tr["Action"] = "M�velet";
	$tr["delete"] = "t�rl�s";
	$tr["purge"] = "elt�vol�t�s";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "V�rjuk �szrev�teleit, �tleteit, megjegyz�seit";
	$tr["Your name or nickname"] = "N�v";
	$tr["Your e-mail"] = "E-mail c�m";
	$tr["optional"] = "tetsz�leges";
	$tr["Comment text"] = "Sz�veg";
	$tr["Submit"] = "Elk�ld";
	$tr["Delete comment"] = "Megjegyz�s t�rl�se";
	$tr["Do you really want to delete this comment?"] = "Biztosan t�r�lni k�v�nja a megjegyz�st?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Jelsz� megv�ltoztat�sa";
	$tr["Logout"] = "Kijelentkez�s";
	$tr["Password was changed"] = "A jelsz�v�ltoztat�s siekr�lt";
	$tr["Password cannot be empty"] = "K�rem adjon meg jelsz�t";
	$tr["Passwords do not match"] = "A megadott jelszavak nem egyeznek";
	$tr["New password"] = "�j jelsz�";
	$tr["Reenter password"] = "�j jelsz� m�gegyszer";
	$tr["Login name"] = "Felhaszn�l�n�v";
	$tr["Password"] = "Jelsz�";
	$tr["Login"] = "Bejelentkez�s";
	$tr["There are no admins."] = "Nincsenek adminisztr�torok megadva.";
	$tr["Admin name"] = "Adminisztr�tor neve";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Jogosults�gok";
	$tr["Edit FTP list"] = "FTP lista szerkeszt�se";
	$tr["Edit SMB list"] = "SMB lista szerkeszt�se";
	$tr["Purge FTP server from list"] = "FTP szerver elt�vol�t�sa";	# purge == completely delete
	$tr["Purge SMB server from list"] = "SMB szerver elt�vol�t�sa";
	$tr["Delete comments"] = "Megjegyz�sek t�rl�se";
}


# MENU.PHP:
$tr["Search"] = "Keres�s";
$tr["FTP server list"] = "FTP szerverek";
$tr["SMB server list"] = "SMB szerverek";
$tr["Comments"] = "Megjegyz�sek";
$tr["Admin"] = "Adminisztr�tor";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "S�g�";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Hiba";
$tr["Can't read configuration file"] = "A konfigur�ci�s f�jl nem olvashat�.";
$tr["DB_NAME must be defined in configuration file"] = "A DB_NAME megad�sa sz�ks�ges a konfigur�ci�s f�jlban";
$tr["DB_LOGIN must be defined in configuration file"] = "A DB_LOGIN megad�sa sz�ks�ges a konfigur�ci�s f�jlban";
$tr["DB_PASSWORD must be defined in configuration file"] = "A DB_PASSWORD megad�sa sz�ks�ges a konfigur�ci�s f�jlban";
$tr["Can't connect to database"] = "Az adatb�zis nem el�rhet�";
$tr["Can't connect to master database"] = "A master adatb�zis nem el�rhet�";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "tal�lat";
	else
		echo "tal�lat";
	echo "  ", sprintf ("%0.2f", $s), " m�sodperc alatt";
}

function page_generated ($host, $time)
{
	echo "Ez az oldal ",
		$host, " k�r�s�re k�sz�lt. ",strftime ("%Y.%m.%d %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Biztosan ", ($purge ? "elt�vol�tja" : "t�rli"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "$type host hozz�ad�s�hoz adminisztr�tork�nt jelentkezzen be";
}

function permition_host_edit ($HID)
{
	return "Nincs host HID = $HID a list�ban vagy<br />a host m�dos�t�s�hoz jelentkezzen be adminisztr�tork�nt";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Nincs host HID = $HID a list�ban<br />adminisztr�tork�nt kell bejelentkeznie, hogy joga legyen" . ($purge ? "elt�vol�t�s" : "szerkeszt�s vagy elt�vol�t�s") . " $type hostok";
}

function permition_comment_delete ($CID)
{
	return "Nincs megjegyz�s CID = $CID vagy<br />t�rl�s�hez adminisztr�tork�nt jelentkezzen be";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>A lass� query-k kikapcsolva</h1>';
	echo "Adjon meg norm�l karaktereket is a f�jl elej�n vagy v�g�n a joker ('*' vagy '?') karakterek mellett  (pl. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />vagy adjon meg minimum f�jlm�retet "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />vayg adjon meg maximum f�jlm�retet "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Vissza a keres�si param�terekhez</a>';
}

?>
