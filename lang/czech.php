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

$months = array ("Leden", "Únor", "Bøezen", "Duben", "Kvìten", "Èerven", "Èervenec", "Srpen", "Záøí", "Øíjen", "Listopad", "Prosinec");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO obraz CDèka";
	$tr["pictures"] = "obrázky";
	$tr["software"] = "software";

	# the predefined times in select.php
	$tr["today"] = "dnes";
	$tr["yesterday"] = "vèera";
	$tr["2 days ago"] = "pøedevèírem";
	$tr["3 days ago"] = "pøed 3 dny";
	$tr["week ago"] = "pøed týdnem";
	$tr["2 weeks ago"] = "pøed 2 týdny";
	$tr["month ago"] = "pøed mìsícem";

	$tr["Searching is case insensitive."] = "Vyhledávaè nerozli¹uje malá a velká písmena.";
	$tr["Files (wildcard (?,*))"] = "Soubory (maska (?,*))";
	$tr["Files (substring)"] = "Soubory (podøetìzec)";
	$tr["Files (regular expression)"] = "Soubory (regulární výraz)";
	$tr["Directories (substring)"] = "Adresáøe (podøetìzec)";
	$tr["Directories (wildcard (?,*))"] = "Adresáøe (maska (?,*))";
	$tr["Directories (regular expression)"] = "Adresáøe (regulární výraz)";
	$tr["Search!"] = "Vyhledat";
	$tr["Fill in the parameters for"] = "Nastavit parametry pro";
	$tr["Hide parameters of advanced search"] = "Skrýt parametry pro pokroèilé vyhledávání";
	$tr["Show parameters of advanced search"] = "Zobrazit parametry pro pokroèilé vyhledávání";
	$tr["Save settings (cookies required)"] = "Ulo¾it nastavení (vy¾aduje cookies)";
	$tr["Show only online hosts"] = "Zobrazit pouze dostupné servery";
	$tr["Print sizes in human readable format"] = "Vypsat velikosti ve formátu pro èlovìka";
	$tr["Search on"] = "Prohledat";
	$tr["hosts"] = "servery";		# SMB and FTP hosts
	$tr["file size"] = "velikost souboru";
	$tr["Only files added since"] = "Pouze soubory nalezené od";
	$tr["Hits per page"] = "Výsledkù na stránku";
	$tr["Your history"] = "Historie Va¹ich hledání";
	$tr["Statistics"] = "Statistika";
	$tr["SMBs"] = "SMB servery";
	$tr["FTPs"] = "FTP servery";
	$tr["Directories"] = "Adresáøe";
	$tr["Files"] = "Soubory";
	$tr["Total size"] = "Celková velikost";
	$tr["Queries"] = "Dotazy";
	$tr["and"] = "a";
	$tr["others"] = "dal¹í";
	$tr["uses some code from"] = "obsahuje èásti kódu projektu";
	$tr["is distributed under the"] = "je distribuován pod licencí";


	# SEARCH.PHP:
	$tr["Results for"] = "Výsledky";
	$tr["More"] = "Více";
	$tr["New search"] = "Nové hledání";
	$tr["No hits"] = "®ádné výsledky";
	$tr["Hit"] = "Výsledek";
	$tr["Hits"] = "Výsledky";


	# BROWSE.PHP
	$tr["Name"] = "Jméno";
	$tr["Size"] = "Velikost";
	$tr["Date"] = "Datum";
}
$tr["Last change"] = "Poslední zmìna";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Pøidat";
$tr["Update"] = "Upravit";
$tr["Edit"] = "Upravit";
$tr["Scan"] = "Prohledat";
$tr["Delete"] = "Smazat";
$tr["Purge"] = "Odstranit";
$tr["Cancel"] = "Zpìt";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Pøidat FTP server";
	$tr["Edit FTP server"] = "Editovat FTP server";
	$tr["Delete FTP server"] = "Smazat FTP server";
	$tr["Purge FTP server"] = "Odstranit FTP server";
	$tr["Add SMB server"] = "Pøidat SMB server";
	$tr["Edit SMB server"] = "Editovat SMB server";
	$tr["Delete SMB server"] = "Smazat SMB server";
	$tr["Purge SMB server"] = "Odstranit SMB server";

	# results and errors
	$tr["Host name must be specified"] = "Jméno poèítaèe musí být zadáno";
	$tr["Workgroup must be specified"] = "Skupina musí být zadána";
	$tr["is not valid IP address"] = "není platná IP adresa";
	$tr["is not valid DNS name or IP address"] = "není platné DNS jméno nebo IP adresa";
	$tr["Login must be specified"] = "Pøihla¹ovací jméno musí být zadáno";
	$tr["Port is not valid"] = "Port není korektní";
	$tr["is not valid file name with absolute path"] = "není platné jméno souboru vèetnì absolutní cesty";
	$tr["was added to list"] = "byl pøidán do seznamu";
	$tr["is already in the list"] = "u¾ je v seznamu";
	$tr["was deleted"] = "byl smazán";
	$tr["will be scanned during the next network scan"] = "bude prohledán bìhem následujícího prohledávání sítì";
	$tr["will be deleted during next crawl"] = "bude smazán bìhem následujícího prohledávání sítì";
	$tr["will be purged during next crawl"] = "bude ostranìn bìhem následujícího prohledávání sítì";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Bìhem pøidávání serveru %s do¹lo k chybì";
	$tr["__host_updated__"] = "Informace o serveru %s byly zaktualizovány";

	# data fields
	$tr["Host"] = "Server";
	$tr["Host (DNS name or IP)"] = "Server (DNS jméno nebo IP)";
	$tr["Login"] = "Login";
	$tr["Password"] = "Heslo";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Poèáteèní adresáø";
	$tr["List of files"] = "Seznam souborù";
	$tr["Use passive mode"] = "Pou¾ívat pasivní mód";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Pou¾ívat rekurzivní ls (ls -lR) k získání seznamu souborù";
	$tr["(server must support it)"] = "(server to musí podporovat)";
	$tr["(if server supports it)"] = "(pokud to server podporuje)";
	$tr["Comment"] = "Poznámka";
	$tr["Editable by"] = "Editovatelný (kým)";
	$tr["IP address"] = "IP adresa";
	$tr["Workgroup"] = "Skupina";
	$tr["Shares"] = "Sdílené polo¾ky";
	$tr["Name"] = "Název";
	$tr["File size"] = "Velikost souborù";
	$tr["Period"] = "Perioda";
	$tr["Counter"] = "Poèitadlo";
	$tr["Scan order"] = "Poøadí prohledávání";
	$tr["Expire count"] = "Poèitadlo nedostupnosti";
	$tr["Flags"] = "Pøíznaky";
	$tr["Action"] = "Akce";
	$tr["delete"] = "smazat";
	$tr["purge"] = "odstranit";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Zde mù¾ete psát své komentáøe, poznámky, nápady, ...";
	$tr["Your name or nickname"] = "Va¹e jméno nebo pøezdívka";
	$tr["Your e-mail"] = "Va¹e e-mailová adresa";
	$tr["optional"] = "nepovinné";
	$tr["Comment text"] = "Text komentáøe";
	$tr["Submit"] = "Odeslat";
	$tr["Delete comment"] = "Smazat komentáø";
	$tr["Do you really want to delete this comment?"] = "Opravdu chcete smazat tento komentáø?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Zmìnit heslo";
	$tr["Logout"] = "Odhlásit se";
	$tr["Password was changed"] = "Heslo bylo zmìnìno";
	$tr["Password cannot be empty"] = "Heslo nesmí být prázdné";
	$tr["Passwords do not match"] = "Hesla se li¹í";
	$tr["New password"] = "Nové heslo";
	$tr["Reenter password"] = "Je¹tì jednou";
	$tr["Login name"] = "Pøihla¹ovací jméno";
	$tr["Password"] = "Heslo";
	$tr["Login"] = "Pøihlásit se";
	$tr["There are no admins."] = "Nejsou nadefinováni ¾ádní administrátoøi.";
	$tr["Admin name"] = "Jméno administrátora";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Práva";
	$tr["Edit FTP list"] = "Editovat seznam FTP serverù";
	$tr["Edit SMB list"] = "Editovat seznam SMB serverù";
	$tr["Purge FTP server from list"] = "Odstranit FTP server ze seznamu";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Odstranit SMB server ze seznamu";
	$tr["Delete comments"] = "Mazat komentáøe";
}


# MENU.PHP:
$tr["Search"] = "Vyhledávání";
$tr["FTP server list"] = "Seznam FTP serverù";
$tr["SMB server list"] = "Seznam SMB serverù";
$tr["Comments"] = "Komentáøe";
$tr["Admin"] = "Administrace";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Nápovìda";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Chyba";
$tr["Can't read configuration file"] = "Nemù¾u naèíst konfiguraèní soubor";
$tr["DB_NAME must be defined in configuration file"] = "Promìnná DB_NAME musí být v konfiguraèním souboru nastavena";
$tr["DB_LOGIN must be defined in configuration file"] = "Promìnná DB_LOGIN musí být v konfiguraèním souboru nastavena";
$tr["DB_PASSWORD must be defined in configuration file"] = "Promìnná DB_PASSWORD musí být v konfiguraèním souboru nastavena";
$tr["Can't connect to database"] = "Nemù¾u se pøipojit na databázi";
$tr["Can't connect to master database"] = "Nemù¾u se pøipojit na hlavní databázi";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "výsledek";
	else if ($n >= 2 && $n <= 4)
		echo "výsledky";
	else
		echo "výsledkù";
	echo " za ", sprintf ("%0.2f", $s), " sekundy";
}

function page_generated ($host, $time)
{
	echo "Tato stránka byla vygenerována na dotaz z poèítaèe ",
		$host, strftime (" dne %d.%m.%Y v %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Opravdu chcete ", ($purge ? "odstranit" : "smazat"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Musíte se pøihlásit jako administrátor, který má právo pøidat $type server";
}

function permition_host_edit ($HID)
{
	return "Poèítaè s HID = $HID není v seznamu nebo<br />se musíte pøihlásit jako administrátor, abyste mohl editovat tento server";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Poèítaè s HID = $HID není v seznamu nebo<br />se musíte pøihlásit jako administrátor, který má právo " . ($purge ? "odstranit" : "editovat nebo odstranit") . " $type servery";
}

function permition_comment_delete ($CID)
{
	return "Komentáø s CID = $CID neexistuje nebo<br />se musíte pøihlásit jako administrátor, který má právo mazat komentáøe";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Pomalé dotazy byly zakázány</h1>';
	echo "Hledejte podle masky a zadejte nìjaké normální znaky (ne '*' nebo '?') ze zaèátku nebo konce masky (napø. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />nebo zadejte minimální velikost souboru "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />nebo zadejte maximální velikost souboru "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Návrat na nastavení parametrù hledání</a>';
}

?>
