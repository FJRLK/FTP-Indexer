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

$months = array ("Január", "Február", "Marec", "Apríl", "Máj", "Jún", "Júl", "August", "September", "Október", "November", "December");

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
	$tr["2 days ago"] = "predvèerom";
	$tr["3 days ago"] = "pred 3 dòami";
	$tr["week ago"] = "pred tý¾dòom";
	$tr["2 weeks ago"] = "pred 2 tý¾dòami";
	$tr["month ago"] = "pred mesiacom";

	$tr["Searching is case insensitive."] = "Vyhµadávaè nerozli¹uje veµké a malé písmena";
	$tr["Files (wildcard (?,*))"] = "Súbory (maska (?,*))";
	$tr["Files (substring)"] = "Súbory (podre»azec)";
	$tr["Files (regular expression)"] = "Súbory (regulárny výraz)";
	$tr["Directories (substring)"] = "Adresáre (podre»azec)";
	$tr["Directories (wildcard (?,*))"] = "Adresáre (maska (?,*))";
	$tr["Directories (regular expression)"] = "Adresáre (regulárny výraz)";
	$tr["Search!"] = "Vyhµada»";
	$tr["Fill in the parameters for"] = "Nastavi» parametre pre";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Ulo¾i» nastavenie (vy¾aduje cookies)";
	$tr["Show only online hosts"] = "Zobrazi» iba dostupné servery";
	$tr["Print sizes in human readable format"] = "Vypísa» veµkosti vo formáte pre èloveka";
	$tr["Search on"] = "Prehµada»";
	$tr["hosts"] = "servery";		# SMB and FTP hosts
	$tr["file size"] = "veµkost súborov";
	$tr["Only files added since"] = "Iba súbory nájdene od";
	$tr["Hits per page"] = "Výsledkov na stránku";
	$tr["Your history"] = "História va¹ich hµadaní";
	$tr["Statistics"] = "©tatistika";
	$tr["SMBs"] = "SMB servery";
	$tr["FTPs"] = "FTP servery";
	$tr["Directories"] = "Adresáre";
	$tr["Files"] = "Súbory";
	$tr["Total size"] = "Celková veµkos»";
	$tr["Queries"] = "Otázky";
	$tr["and"] = "a";
	$tr["others"] = "ïal¹ie";
	$tr["uses some code from"] = "obsahuje èasti kódu projektu";
	$tr["is distributed under the"] = "je distribuovaný pod licenciou";


	# SEARCH.PHP:
	$tr["Results for"] = "Výsledky";
	$tr["More"] = "Viacej";
	$tr["New search"] = "Nové hµadanie";
	$tr["No hits"] = "®iadne výsledky";
	$tr["Hit"] = "Výsledok";
	$tr["Hits"] = "Výsledky";


	# BROWSE.PHP
	$tr["Name"] = "Meno";
	$tr["Size"] = "Veµkos»";
	$tr["Date"] = "Dátum";
}
$tr["Last change"] = "Posledná zmena";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Prida»";
$tr["Update"] = "Opravi»";
$tr["Edit"] = "Upravi»";
$tr["Scan"] = "Prehµada»";
$tr["Delete"] = "Zmaza»";
$tr["Purge"] = "Odstráni»";
$tr["Cancel"] = "Spä»";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Prida» FTP server";
	$tr["Edit FTP server"] = "Editova» FTP server";
	$tr["Delete FTP server"] = "Zmaza» FTP server";
	$tr["Purge FTP server"] = "Odstráni» FTP server";
	$tr["Add SMB server"] = "Prida» SMB server";
	$tr["Edit SMB server"] = "Editova» SMB server";
	$tr["Delete SMB server"] = "Zmaza» SMB server";
	$tr["Purge SMB server"] = "Odstráni» SMB server";

	# results and errors
	$tr["Host name must be specified"] = "Meno poèítaèa musí by» zadané";
	$tr["Workgroup must be specified"] = "Skupina musí by» zadaná";
	$tr["is not valid IP address"] = "nieje platná IP adresa";
	$tr["is not valid DNS name or IP address"] = "nieje platné DNS meno alebo IP adresa";
	$tr["Login must be specified"] = "Prihlasovacie meno musí by» zadané";
	$tr["Port is not valid"] = "Port nieje v poriadku";
	$tr["is not valid file name with absolute path"] = "nieje platné meno súboru vrátane   absolútnej cesty";
	$tr["was added to list"] = "bol pridaný do zoznamu";
	$tr["is already in the list"] = "u¾ je v zozname";
	$tr["was deleted"] = "bol zmazaný";
	$tr["will be scanned during the next network scan"] = "bude prehµadaný poèas nasledujúceho prehµadávania siete";
	$tr["will be deleted during next crawl"] = "bude zmazaný poèas nasledujúceho prehµadávania siete";
	$tr["will be purged during next crawl"] = "bude odstránený poèas nasledujúceho prehµadávania siete ";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Poèas pridávania servera %s nastala chyba";
	$tr["__host_updated__"] = "Informácie o serveri %s boli aktualizované";

	# data fields
	$tr["Host"] = "Server";
	$tr["Host (DNS name or IP)"] = "Server (DNS meno alebo IP)";
	$tr["Login"] = "Prihlasovacie meno";
	$tr["Password"] = "Heslo";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Poèiatoèný adresár";
	$tr["List of files"] = "Zoznam súborov";
	$tr["Use passive mode"] = "Pou¾íva» pasívny mód";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Pou¾íva» rekurzívne ls (ls -lR) na získánie zoznamu súborov";
	$tr["(server must support it)"] = "(server to musí podporova»)";
	$tr["(if server supports it)"] = "(pokiaµ to server podporuje)";
	$tr["Comment"] = "Poznámka";
	$tr["Editable by"] = "Editovateµný (kým)";
	$tr["IP address"] = "IP adresa";
	$tr["Workgroup"] = "Skupina";
	$tr["Shares"] = "Zdieµané polo¾ky";
	$tr["Name"] = "Názov";
	$tr["File size"] = "Veµkos» súborov";
	$tr["Period"] = "Perióda";
	$tr["Counter"] = "Poèítadlo";
	$tr["Scan order"] = "Poradie prehµadávania";
	$tr["Expire count"] = "Poèítadlo nedostupnosti";
	$tr["Flags"] = "Príznaky";
	$tr["Action"] = "Akcie";
	$tr["delete"] = "zmaza»";
	$tr["purge"] = "odstráni»";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Tu mo¾ete písa» svoje komntáre, poznámky, nápady, ...";
	$tr["Your name or nickname"] = "Va¹e meno alebo prezývka";
	$tr["Your e-mail"] = "Va¹a e-mail adresa";
	$tr["optional"] = "nepovinné";
	$tr["Comment text"] = "Text komentára";
	$tr["Submit"] = "Odosla»";
	$tr["Delete comment"] = "Zmaza» komentár";
	$tr["Do you really want to delete this comment?"] = "Naozaj chcete zmazat tento komentár?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Zmeni» heslo";
	$tr["Logout"] = "Odhlási» sa";
	$tr["Password was changed"] = "Heslo bolo zmenené";
	$tr["Password cannot be empty"] = "Heslo nemô¾e byt prázdne";
	$tr["Passwords do not match"] = "Heslá nie su rovnaké";
	$tr["New password"] = "Nové heslo";
	$tr["Reenter password"] = "E¹te raz";
	$tr["Login name"] = "Prihlasovacie meno";
	$tr["Password"] = "Heslo";
	$tr["Login"] = "Prihlási» sa";
	$tr["There are no admins."] = "Nie sú nadefinovaný ¾iadny administrátori.";
	$tr["Admin name"] = "Meno administrátora";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Práva";
	$tr["Edit FTP list"] = "Editova» zoznam FTP serverov";
	$tr["Edit SMB list"] = "Editova» zoznam SMB serverov";
	$tr["Purge FTP server from list"] = "Odstrani» FTP server zo zoznamu";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Odstráni» SMB server zo zoznamu";
	$tr["Delete comments"] = "Maza» komentáre";
}


# MENU.PHP:
$tr["Search"] = "Vyhµadávánie";
$tr["FTP server list"] = "Zoznam FTP serverov";
$tr["SMB server list"] = "Zoznam SMB serverov";
$tr["Comments"] = "Komentáre";
$tr["Admin"] = "Administrácia";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Nápoveda";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Chyba";
$tr["Can't read configuration file"] = "Nemô¾em naèíta» konfururaèný súbor";
$tr["DB_NAME must be defined in configuration file"] = "Premenná DB_NAME musí by» v konfiguraènom súbore nastavená";
$tr["DB_LOGIN must be defined in configuration file"] = " Premenná DB_LOGIN musí by» v konfiguraènom súbore nastavená ";
$tr["DB_PASSWORD must be defined in configuration file"] = " Premenná DB_PASSWORD musí by» v konfiguraènom súbore nastavená ";
$tr["Can't connect to database"] = "Nemô¾em sa pripoji» na databázu";
$tr["Can't connect to master database"] = "Nemô¾em sa pripoji» na hlavnú databázu";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "výsledok";
	else if ($n >= 2 && $n <= 4)
		echo "výsledky";
	else
		echo "výsledkov";
	echo " za ", sprintf ("%0.2f", $s), " sekundy";
}

function page_generated ($host, $time)
{
	echo "Táto stránka bola vygenerovaná na po¾iadavku z poèítaèa ",
		$host, strftime (" dòa %d.%m.%Y v %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Naozaj chcete ", ($purge ? "odstráni»" : "zmaza»"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Musíte sa prihlási» ako administrátor, ktorý ma právo prida» $type server";
}

function permition_host_edit ($HID)
{
	return "Poèítaè s HID = $HID nieje v zozname alebo<br />sa musíte prihlási» ako administrátor, aby ste mohli editova» tento server";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Poèítaè s HID = $HID nieje v zozname alebo<br />sa musíte prihlási» ako administrátor, ktorý má právo " . ($purge ? "odstráni»" : "editova» alebo odstráni»") . " $type serveri";
}

function permition_comment_delete ($CID)
{
	return "Komentár s CID = $CID neexistuje alebo<br />sa musíte prihlási» ako administrátor, ktorý má právo maza» komentáre";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Pomale otázky boli zakázané</h1>';
	echo "Hµadajte podµa masky a zadajte be¾né písmená (nie '*' alebo '?') zo zaèiatku alebo  konca masky (napr. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />alebo zadajte minimálnu veµkos» súboru "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />alebo zadajte maximálnu veµkos» súboru "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Návrat na nastavenie parametrov hµadania</a>';
}

?>
