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

$months = array ("Janu�r", "Febru�r", "Marec", "Apr�l", "M�j", "J�n", "J�l", "August", "September", "Okt�ber", "November", "December");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO obraz CD�ka";
	$tr["pictures"] = "obr�zky";
	$tr["software"] = "software";

	# the predefined times in select.php
	$tr["today"] = "dnes";
	$tr["yesterday"] = "v�era";
	$tr["2 days ago"] = "predv�erom";
	$tr["3 days ago"] = "pred 3 d�ami";
	$tr["week ago"] = "pred t��d�om";
	$tr["2 weeks ago"] = "pred 2 t��d�ami";
	$tr["month ago"] = "pred mesiacom";

	$tr["Searching is case insensitive."] = "Vyh�ad�va� nerozli�uje ve�k� a mal� p�smena";
	$tr["Files (wildcard (?,*))"] = "S�bory (maska (?,*))";
	$tr["Files (substring)"] = "S�bory (podre�azec)";
	$tr["Files (regular expression)"] = "S�bory (regul�rny v�raz)";
	$tr["Directories (substring)"] = "Adres�re (podre�azec)";
	$tr["Directories (wildcard (?,*))"] = "Adres�re (maska (?,*))";
	$tr["Directories (regular expression)"] = "Adres�re (regul�rny v�raz)";
	$tr["Search!"] = "Vyh�ada�";
	$tr["Fill in the parameters for"] = "Nastavi� parametre pre";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Ulo�i� nastavenie (vy�aduje cookies)";
	$tr["Show only online hosts"] = "Zobrazi� iba dostupn� servery";
	$tr["Print sizes in human readable format"] = "Vyp�sa� ve�kosti vo form�te pre �loveka";
	$tr["Search on"] = "Preh�ada�";
	$tr["hosts"] = "servery";		# SMB and FTP hosts
	$tr["file size"] = "ve�kost s�borov";
	$tr["Only files added since"] = "Iba s�bory n�jdene od";
	$tr["Hits per page"] = "V�sledkov na str�nku";
	$tr["Your history"] = "Hist�ria va�ich h�adan�";
	$tr["Statistics"] = "�tatistika";
	$tr["SMBs"] = "SMB servery";
	$tr["FTPs"] = "FTP servery";
	$tr["Directories"] = "Adres�re";
	$tr["Files"] = "S�bory";
	$tr["Total size"] = "Celkov� ve�kos�";
	$tr["Queries"] = "Ot�zky";
	$tr["and"] = "a";
	$tr["others"] = "�al�ie";
	$tr["uses some code from"] = "obsahuje �asti k�du projektu";
	$tr["is distributed under the"] = "je distribuovan� pod licenciou";


	# SEARCH.PHP:
	$tr["Results for"] = "V�sledky";
	$tr["More"] = "Viacej";
	$tr["New search"] = "Nov� h�adanie";
	$tr["No hits"] = "�iadne v�sledky";
	$tr["Hit"] = "V�sledok";
	$tr["Hits"] = "V�sledky";


	# BROWSE.PHP
	$tr["Name"] = "Meno";
	$tr["Size"] = "Ve�kos�";
	$tr["Date"] = "D�tum";
}
$tr["Last change"] = "Posledn� zmena";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Prida�";
$tr["Update"] = "Opravi�";
$tr["Edit"] = "Upravi�";
$tr["Scan"] = "Preh�ada�";
$tr["Delete"] = "Zmaza�";
$tr["Purge"] = "Odstr�ni�";
$tr["Cancel"] = "Sp�";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Prida� FTP server";
	$tr["Edit FTP server"] = "Editova� FTP server";
	$tr["Delete FTP server"] = "Zmaza� FTP server";
	$tr["Purge FTP server"] = "Odstr�ni� FTP server";
	$tr["Add SMB server"] = "Prida� SMB server";
	$tr["Edit SMB server"] = "Editova� SMB server";
	$tr["Delete SMB server"] = "Zmaza� SMB server";
	$tr["Purge SMB server"] = "Odstr�ni� SMB server";

	# results and errors
	$tr["Host name must be specified"] = "Meno po��ta�a mus� by� zadan�";
	$tr["Workgroup must be specified"] = "Skupina mus� by� zadan�";
	$tr["is not valid IP address"] = "nieje platn� IP adresa";
	$tr["is not valid DNS name or IP address"] = "nieje platn� DNS meno alebo IP adresa";
	$tr["Login must be specified"] = "Prihlasovacie meno mus� by� zadan�";
	$tr["Port is not valid"] = "Port nieje v poriadku";
	$tr["is not valid file name with absolute path"] = "nieje platn� meno s�boru vr�tane   absol�tnej cesty";
	$tr["was added to list"] = "bol pridan� do zoznamu";
	$tr["is already in the list"] = "u� je v zozname";
	$tr["was deleted"] = "bol zmazan�";
	$tr["will be scanned during the next network scan"] = "bude preh�adan� po�as nasleduj�ceho preh�ad�vania siete";
	$tr["will be deleted during next crawl"] = "bude zmazan� po�as nasleduj�ceho preh�ad�vania siete";
	$tr["will be purged during next crawl"] = "bude odstr�nen� po�as nasleduj�ceho preh�ad�vania siete ";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Po�as prid�vania servera %s nastala chyba";
	$tr["__host_updated__"] = "Inform�cie o serveri %s boli aktualizovan�";

	# data fields
	$tr["Host"] = "Server";
	$tr["Host (DNS name or IP)"] = "Server (DNS meno alebo IP)";
	$tr["Login"] = "Prihlasovacie meno";
	$tr["Password"] = "Heslo";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Po�iato�n� adres�r";
	$tr["List of files"] = "Zoznam s�borov";
	$tr["Use passive mode"] = "Pou��va� pas�vny m�d";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Pou��va� rekurz�vne ls (ls -lR) na z�sk�nie zoznamu s�borov";
	$tr["(server must support it)"] = "(server to mus� podporova�)";
	$tr["(if server supports it)"] = "(pokia� to server podporuje)";
	$tr["Comment"] = "Pozn�mka";
	$tr["Editable by"] = "Editovate�n� (k�m)";
	$tr["IP address"] = "IP adresa";
	$tr["Workgroup"] = "Skupina";
	$tr["Shares"] = "Zdie�an� polo�ky";
	$tr["Name"] = "N�zov";
	$tr["File size"] = "Ve�kos� s�borov";
	$tr["Period"] = "Peri�da";
	$tr["Counter"] = "Po��tadlo";
	$tr["Scan order"] = "Poradie preh�ad�vania";
	$tr["Expire count"] = "Po��tadlo nedostupnosti";
	$tr["Flags"] = "Pr�znaky";
	$tr["Action"] = "Akcie";
	$tr["delete"] = "zmaza�";
	$tr["purge"] = "odstr�ni�";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Tu mo�ete p�sa� svoje komnt�re, pozn�mky, n�pady, ...";
	$tr["Your name or nickname"] = "Va�e meno alebo prez�vka";
	$tr["Your e-mail"] = "Va�a e-mail adresa";
	$tr["optional"] = "nepovinn�";
	$tr["Comment text"] = "Text koment�ra";
	$tr["Submit"] = "Odosla�";
	$tr["Delete comment"] = "Zmaza� koment�r";
	$tr["Do you really want to delete this comment?"] = "Naozaj chcete zmazat tento koment�r?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Zmeni� heslo";
	$tr["Logout"] = "Odhl�si� sa";
	$tr["Password was changed"] = "Heslo bolo zmenen�";
	$tr["Password cannot be empty"] = "Heslo nem��e byt pr�zdne";
	$tr["Passwords do not match"] = "Hesl� nie su rovnak�";
	$tr["New password"] = "Nov� heslo";
	$tr["Reenter password"] = "E�te raz";
	$tr["Login name"] = "Prihlasovacie meno";
	$tr["Password"] = "Heslo";
	$tr["Login"] = "Prihl�si� sa";
	$tr["There are no admins."] = "Nie s� nadefinovan� �iadny administr�tori.";
	$tr["Admin name"] = "Meno administr�tora";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Pr�va";
	$tr["Edit FTP list"] = "Editova� zoznam FTP serverov";
	$tr["Edit SMB list"] = "Editova� zoznam SMB serverov";
	$tr["Purge FTP server from list"] = "Odstrani� FTP server zo zoznamu";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Odstr�ni� SMB server zo zoznamu";
	$tr["Delete comments"] = "Maza� koment�re";
}


# MENU.PHP:
$tr["Search"] = "Vyh�ad�v�nie";
$tr["FTP server list"] = "Zoznam FTP serverov";
$tr["SMB server list"] = "Zoznam SMB serverov";
$tr["Comments"] = "Koment�re";
$tr["Admin"] = "Administr�cia";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "N�poveda";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Chyba";
$tr["Can't read configuration file"] = "Nem��em na��ta� konfurura�n� s�bor";
$tr["DB_NAME must be defined in configuration file"] = "Premenn� DB_NAME mus� by� v konfigura�nom s�bore nastaven�";
$tr["DB_LOGIN must be defined in configuration file"] = " Premenn� DB_LOGIN mus� by� v konfigura�nom s�bore nastaven� ";
$tr["DB_PASSWORD must be defined in configuration file"] = " Premenn� DB_PASSWORD mus� by� v konfigura�nom s�bore nastaven� ";
$tr["Can't connect to database"] = "Nem��em sa pripoji� na datab�zu";
$tr["Can't connect to master database"] = "Nem��em sa pripoji� na hlavn� datab�zu";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "v�sledok";
	else if ($n >= 2 && $n <= 4)
		echo "v�sledky";
	else
		echo "v�sledkov";
	echo " za ", sprintf ("%0.2f", $s), " sekundy";
}

function page_generated ($host, $time)
{
	echo "T�to str�nka bola vygenerovan� na po�iadavku z po��ta�a ",
		$host, strftime (" d�a %d.%m.%Y v %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Naozaj chcete ", ($purge ? "odstr�ni�" : "zmaza�"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Mus�te sa prihl�si� ako administr�tor, ktor� ma pr�vo prida� $type server";
}

function permition_host_edit ($HID)
{
	return "Po��ta� s HID = $HID nieje v zozname alebo<br />sa mus�te prihl�si� ako administr�tor, aby ste mohli editova� tento server";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Po��ta� s HID = $HID nieje v zozname alebo<br />sa mus�te prihl�si� ako administr�tor, ktor� m� pr�vo " . ($purge ? "odstr�ni�" : "editova� alebo odstr�ni�") . " $type serveri";
}

function permition_comment_delete ($CID)
{
	return "Koment�r s CID = $CID neexistuje alebo<br />sa mus�te prihl�si� ako administr�tor, ktor� m� pr�vo maza� koment�re";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Pomale ot�zky boli zak�zan�</h1>';
	echo "H�adajte pod�a masky a zadajte be�n� p�smen� (nie '*' alebo '?') zo za�iatku alebo  konca masky (napr. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />alebo zadajte minim�lnu ve�kos� s�boru "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />alebo zadajte maxim�lnu ve�kos� s�boru "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">N�vrat na nastavenie parametrov h�adania</a>';
}

?>
