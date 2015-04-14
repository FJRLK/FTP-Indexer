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

$months = array ("Leden", "�nor", "B�ezen", "Duben", "Kv�ten", "�erven", "�ervenec", "Srpen", "Z���", "��jen", "Listopad", "Prosinec");

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
	$tr["2 days ago"] = "p�edev��rem";
	$tr["3 days ago"] = "p�ed 3 dny";
	$tr["week ago"] = "p�ed t�dnem";
	$tr["2 weeks ago"] = "p�ed 2 t�dny";
	$tr["month ago"] = "p�ed m�s�cem";

	$tr["Searching is case insensitive."] = "Vyhled�va� nerozli�uje mal� a velk� p�smena.";
	$tr["Files (wildcard (?,*))"] = "Soubory (maska (?,*))";
	$tr["Files (substring)"] = "Soubory (pod�et�zec)";
	$tr["Files (regular expression)"] = "Soubory (regul�rn� v�raz)";
	$tr["Directories (substring)"] = "Adres��e (pod�et�zec)";
	$tr["Directories (wildcard (?,*))"] = "Adres��e (maska (?,*))";
	$tr["Directories (regular expression)"] = "Adres��e (regul�rn� v�raz)";
	$tr["Search!"] = "Vyhledat";
	$tr["Fill in the parameters for"] = "Nastavit parametry pro";
	$tr["Hide parameters of advanced search"] = "Skr�t parametry pro pokro�il� vyhled�v�n�";
	$tr["Show parameters of advanced search"] = "Zobrazit parametry pro pokro�il� vyhled�v�n�";
	$tr["Save settings (cookies required)"] = "Ulo�it nastaven� (vy�aduje cookies)";
	$tr["Show only online hosts"] = "Zobrazit pouze dostupn� servery";
	$tr["Print sizes in human readable format"] = "Vypsat velikosti ve form�tu pro �lov�ka";
	$tr["Search on"] = "Prohledat";
	$tr["hosts"] = "servery";		# SMB and FTP hosts
	$tr["file size"] = "velikost souboru";
	$tr["Only files added since"] = "Pouze soubory nalezen� od";
	$tr["Hits per page"] = "V�sledk� na str�nku";
	$tr["Your history"] = "Historie Va�ich hled�n�";
	$tr["Statistics"] = "Statistika";
	$tr["SMBs"] = "SMB servery";
	$tr["FTPs"] = "FTP servery";
	$tr["Directories"] = "Adres��e";
	$tr["Files"] = "Soubory";
	$tr["Total size"] = "Celkov� velikost";
	$tr["Queries"] = "Dotazy";
	$tr["and"] = "a";
	$tr["others"] = "dal��";
	$tr["uses some code from"] = "obsahuje ��sti k�du projektu";
	$tr["is distributed under the"] = "je distribuov�n pod licenc�";


	# SEARCH.PHP:
	$tr["Results for"] = "V�sledky";
	$tr["More"] = "V�ce";
	$tr["New search"] = "Nov� hled�n�";
	$tr["No hits"] = "��dn� v�sledky";
	$tr["Hit"] = "V�sledek";
	$tr["Hits"] = "V�sledky";


	# BROWSE.PHP
	$tr["Name"] = "Jm�no";
	$tr["Size"] = "Velikost";
	$tr["Date"] = "Datum";
}
$tr["Last change"] = "Posledn� zm�na";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "P�idat";
$tr["Update"] = "Upravit";
$tr["Edit"] = "Upravit";
$tr["Scan"] = "Prohledat";
$tr["Delete"] = "Smazat";
$tr["Purge"] = "Odstranit";
$tr["Cancel"] = "Zp�t";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "P�idat FTP server";
	$tr["Edit FTP server"] = "Editovat FTP server";
	$tr["Delete FTP server"] = "Smazat FTP server";
	$tr["Purge FTP server"] = "Odstranit FTP server";
	$tr["Add SMB server"] = "P�idat SMB server";
	$tr["Edit SMB server"] = "Editovat SMB server";
	$tr["Delete SMB server"] = "Smazat SMB server";
	$tr["Purge SMB server"] = "Odstranit SMB server";

	# results and errors
	$tr["Host name must be specified"] = "Jm�no po��ta�e mus� b�t zad�no";
	$tr["Workgroup must be specified"] = "Skupina mus� b�t zad�na";
	$tr["is not valid IP address"] = "nen� platn� IP adresa";
	$tr["is not valid DNS name or IP address"] = "nen� platn� DNS jm�no nebo IP adresa";
	$tr["Login must be specified"] = "P�ihla�ovac� jm�no mus� b�t zad�no";
	$tr["Port is not valid"] = "Port nen� korektn�";
	$tr["is not valid file name with absolute path"] = "nen� platn� jm�no souboru v�etn� absolutn� cesty";
	$tr["was added to list"] = "byl p�id�n do seznamu";
	$tr["is already in the list"] = "u� je v seznamu";
	$tr["was deleted"] = "byl smaz�n";
	$tr["will be scanned during the next network scan"] = "bude prohled�n b�hem n�sleduj�c�ho prohled�v�n� s�t�";
	$tr["will be deleted during next crawl"] = "bude smaz�n b�hem n�sleduj�c�ho prohled�v�n� s�t�";
	$tr["will be purged during next crawl"] = "bude ostran�n b�hem n�sleduj�c�ho prohled�v�n� s�t�";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "B�hem p�id�v�n� serveru %s do�lo k chyb�";
	$tr["__host_updated__"] = "Informace o serveru %s byly zaktualizov�ny";

	# data fields
	$tr["Host"] = "Server";
	$tr["Host (DNS name or IP)"] = "Server (DNS jm�no nebo IP)";
	$tr["Login"] = "Login";
	$tr["Password"] = "Heslo";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Po��te�n� adres��";
	$tr["List of files"] = "Seznam soubor�";
	$tr["Use passive mode"] = "Pou��vat pasivn� m�d";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Pou��vat rekurzivn� ls (ls -lR) k z�sk�n� seznamu soubor�";
	$tr["(server must support it)"] = "(server to mus� podporovat)";
	$tr["(if server supports it)"] = "(pokud to server podporuje)";
	$tr["Comment"] = "Pozn�mka";
	$tr["Editable by"] = "Editovateln� (k�m)";
	$tr["IP address"] = "IP adresa";
	$tr["Workgroup"] = "Skupina";
	$tr["Shares"] = "Sd�len� polo�ky";
	$tr["Name"] = "N�zev";
	$tr["File size"] = "Velikost soubor�";
	$tr["Period"] = "Perioda";
	$tr["Counter"] = "Po�itadlo";
	$tr["Scan order"] = "Po�ad� prohled�v�n�";
	$tr["Expire count"] = "Po�itadlo nedostupnosti";
	$tr["Flags"] = "P��znaky";
	$tr["Action"] = "Akce";
	$tr["delete"] = "smazat";
	$tr["purge"] = "odstranit";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Zde m��ete ps�t sv� koment��e, pozn�mky, n�pady, ...";
	$tr["Your name or nickname"] = "Va�e jm�no nebo p�ezd�vka";
	$tr["Your e-mail"] = "Va�e e-mailov� adresa";
	$tr["optional"] = "nepovinn�";
	$tr["Comment text"] = "Text koment��e";
	$tr["Submit"] = "Odeslat";
	$tr["Delete comment"] = "Smazat koment��";
	$tr["Do you really want to delete this comment?"] = "Opravdu chcete smazat tento koment��?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Zm�nit heslo";
	$tr["Logout"] = "Odhl�sit se";
	$tr["Password was changed"] = "Heslo bylo zm�n�no";
	$tr["Password cannot be empty"] = "Heslo nesm� b�t pr�zdn�";
	$tr["Passwords do not match"] = "Hesla se li��";
	$tr["New password"] = "Nov� heslo";
	$tr["Reenter password"] = "Je�t� jednou";
	$tr["Login name"] = "P�ihla�ovac� jm�no";
	$tr["Password"] = "Heslo";
	$tr["Login"] = "P�ihl�sit se";
	$tr["There are no admins."] = "Nejsou nadefinov�ni ��dn� administr�to�i.";
	$tr["Admin name"] = "Jm�no administr�tora";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Pr�va";
	$tr["Edit FTP list"] = "Editovat seznam FTP server�";
	$tr["Edit SMB list"] = "Editovat seznam SMB server�";
	$tr["Purge FTP server from list"] = "Odstranit FTP server ze seznamu";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Odstranit SMB server ze seznamu";
	$tr["Delete comments"] = "Mazat koment��e";
}


# MENU.PHP:
$tr["Search"] = "Vyhled�v�n�";
$tr["FTP server list"] = "Seznam FTP server�";
$tr["SMB server list"] = "Seznam SMB server�";
$tr["Comments"] = "Koment��e";
$tr["Admin"] = "Administrace";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "N�pov�da";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Chyba";
$tr["Can't read configuration file"] = "Nem��u na��st konfigura�n� soubor";
$tr["DB_NAME must be defined in configuration file"] = "Prom�nn� DB_NAME mus� b�t v konfigura�n�m souboru nastavena";
$tr["DB_LOGIN must be defined in configuration file"] = "Prom�nn� DB_LOGIN mus� b�t v konfigura�n�m souboru nastavena";
$tr["DB_PASSWORD must be defined in configuration file"] = "Prom�nn� DB_PASSWORD mus� b�t v konfigura�n�m souboru nastavena";
$tr["Can't connect to database"] = "Nem��u se p�ipojit na datab�zi";
$tr["Can't connect to master database"] = "Nem��u se p�ipojit na hlavn� datab�zi";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "v�sledek";
	else if ($n >= 2 && $n <= 4)
		echo "v�sledky";
	else
		echo "v�sledk�";
	echo " za ", sprintf ("%0.2f", $s), " sekundy";
}

function page_generated ($host, $time)
{
	echo "Tato str�nka byla vygenerov�na na dotaz z po��ta�e ",
		$host, strftime (" dne %d.%m.%Y v %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Opravdu chcete ", ($purge ? "odstranit" : "smazat"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Mus�te se p�ihl�sit jako administr�tor, kter� m� pr�vo p�idat $type server";
}

function permition_host_edit ($HID)
{
	return "Po��ta� s HID = $HID nen� v seznamu nebo<br />se mus�te p�ihl�sit jako administr�tor, abyste mohl editovat tento server";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Po��ta� s HID = $HID nen� v seznamu nebo<br />se mus�te p�ihl�sit jako administr�tor, kter� m� pr�vo " . ($purge ? "odstranit" : "editovat nebo odstranit") . " $type servery";
}

function permition_comment_delete ($CID)
{
	return "Koment�� s CID = $CID neexistuje nebo<br />se mus�te p�ihl�sit jako administr�tor, kter� m� pr�vo mazat koment��e";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Pomal� dotazy byly zak�z�ny</h1>';
	echo "Hledejte podle masky a zadejte n�jak� norm�ln� znaky (ne '*' nebo '?') ze za��tku nebo konce masky (nap�. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />nebo zadejte minim�ln� velikost souboru "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />nebo zadejte maxim�ln� velikost souboru "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">N�vrat na nastaven� parametr� hled�n�</a>';
}

?>
