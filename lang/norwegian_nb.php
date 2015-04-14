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

$months = array ("jan", "feb", "mar", "apr", "mai", "jun", "jul", "aug", "sep", "okt", "nov", "des");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO-filer";
	$tr["pictures"] = "bilder";
	$tr["software"] = "programmer";

	# the predefined times in select.php
	$tr["today"] = "i dag";
	$tr["yesterday"] = "i går";
	$tr["2 days ago"] = "for to dager siden";
	$tr["3 days ago"] = "for tre dager siden";
	$tr["week ago"] = "for en uke siden";
	$tr["2 weeks ago"] = "for to uker siden";
	$tr["month ago"] = "for en måned siden";

	$tr["Searching is case insensitive."] = "Kan bruke store / små bokstaver i søket";
	$tr["Files (wildcard (?,*))"] = "Filer (wildcard (?,*))";
	$tr["Files (substring)"] = "Filer (delstreng)";
	$tr["Files (regular expression)"] = "Filer (regulære uttrykk)";
	$tr["Directories (substring)"] = "Kataloger (delstreng)";
	$tr["Directories (wildcard (?,*))"] = "Kataloger (wildcard (?,*))";
	$tr["Directories (regular expression)"] = "Kataloger (regulære uttrykk)";
	$tr["Search!"] = "Søk";
	$tr["Fill in the parameters for"] = "Skriv inn parameter for";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Lagre innstillinger (Trenger Cookies)";
	$tr["Show only online hosts"] = "Vis kun aktive servere";
	$tr["Print sizes in human readable format"] = "Vis størrelser i enkelt lesbart format";
	$tr["Search on"] = "Søke på";
	$tr["hosts"] = "Server";		# SMB and FTP hosts
	$tr["file size"] = "Filstørrelse";
	$tr["Only files added since"] = "Kun på filer nyere enn";
	$tr["Hits per page"] = "Treff per side";
	$tr["Your history"] = "Dine siste søk";
	$tr["Statistics"] = "Statistikk";
	$tr["SMBs"] = "SMB-er";
	$tr["FTPs"] = "FTP-er";
	$tr["Directories"] = "Kataloger";
	$tr["Files"] = "Filer";
	$tr["Total size"] = "Total størrelse";
	$tr["Queries"] = "Antall søk";
	$tr["and"] = "og";
	$tr["others"] = "andre";
	$tr["uses some code from"] = "Inneholder programkode fra ";
	$tr["is distributed under the"] = "Distribueres under";


	# SEARCH.PHP:
	$tr["Results for"] = "Søkeresultater for";
	$tr["More"] = "Flere";
	$tr["New search"] = "Nytt søk";
	$tr["No hits"] = "Ingen treff";
	$tr["Hit"] = "Treff";
	$tr["Hits"] = "Treff";


	# BROWSE.PHP
	$tr["Name"] = "Navn";
	$tr["Size"] = "Størrelse";
	$tr["Date"] = "Dato";
}
$tr["Last change"] = "Sist endret";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Legge til";
$tr["Update"] = "Oppdater";
$tr["Edit"] = "Endre";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Slette";
$tr["Purge"] = "Slette permanent";
$tr["Cancel"] = "Avbryt";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Legg til FTP-Server";
	$tr["Edit FTP server"] = "Endre FTP-Server";
	$tr["Delete FTP server"] = "Slette FTP-Server";
	$tr["Purge FTP server"] = "Slette FTP-Server permanent";
	$tr["Add SMB server"] = "Legg til SMB-Server";
	$tr["Edit SMB server"] = "Endre SMB-Server";
	$tr["Delete SMB server"] = "Slette SMB-Server";
	$tr["Purge SMB server"] = "Slette SMB-Server permanent";

	# results and errors
	$tr["Host name must be specified"] = "Du må angi servernavn";
	$tr["Workgroup must be specified"] = "Du må angi arbeidsgruppe";
	$tr["is not valid IP address"] = "er ikke en gyldig IP-Adresse";
	$tr["is not valid DNS name or IP address"] = "er ikke gyldig DNS-Navn eller IP-Adresse";
	$tr["Login must be specified"] = "du må angi loginnavn";
	$tr["Port is not valid"] = "Er ikke en gyldig port";
	$tr["is not valid file name with absolute path"] = "er ikke et gyldig navn med absolutt angivelse (/)";
	$tr["was added to list"] = "ble lagt til listen";
	$tr["is already in the list"] = "ligger allerede i listen";
	$tr["was deleted"] = "ble slettet";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "blir slettet ved neste gjennomsøking";
	$tr["will be purged during next crawl"] = "blir slettet for alltid ved neste gjennomsøking";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Det oppstod en feil ved innlegging av server %s i listen";
	$tr["__host_updated__"] = "Informasjon om %s ble oppdatert";

	# data fields
	$tr["Host"] = "Server";
	$tr["Host (DNS name or IP)"] = "Server (DNS-Navn  IP-Adresse)";
	$tr["Login"] = "Brukernavn";
	$tr["Password"] = "Passord";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Startkatalog";
	$tr["List of files"] = "Filliste";
	$tr["Use passive mode"] = "Bruke passiv modus";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Bruk rekursiv ls (ls -lR) for å lage filliste";
	$tr["(server must support it)"] = "(server må støtte det)";
	$tr["(if server supports it)"] = "(dersom server støtter det)";
	$tr["Comment"] = "Kommentar";
	$tr["Editable by"] = "Redigerbar dersom";
	$tr["IP address"] = "IP-Adresse";
	$tr["Workgroup"] = "Arbeidsgruppe";
	$tr["Shares"] = "Delte kataloger/Shares";
	$tr["Name"] = "Navn";
	$tr["File size"] = "Filstørrelse";
	$tr["Period"] = "Periode";
	$tr["Counter"] = "Teller";
	$tr["Scan order"] = "Søkerekkefølge";
	$tr["Expire count"] = "Teller utgår";
	$tr["Flags"] = "Flagg";
	$tr["Action"] = "Kommando";
	$tr["delete"] = "slette";
	$tr["purge"] = "slette permanent";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Her kan du gjerne skrive kommentarer, idéer ol. ...";
	$tr["Your name or nickname"] = "Navn eller nick";
	$tr["Your e-mail"] = "Epostadresse";
	$tr["optional"] = "valgfritt";
	$tr["Comment text"] = "Kommentar";
	$tr["Submit"] = "Sende";
	$tr["Delete comment"] = "Slette kommentar";
	$tr["Do you really want to delete this comment?"] = "Er du virkelig sikker at du vil slette denne kommentaren?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Endre passord";
	$tr["Logout"] = "Logg av";
	$tr["Password was changed"] = "Passordet er endret";
	$tr["Password cannot be empty"] = "Passordet kan ikke være blankt";
	$tr["Passwords do not match"] = "Det bekreftede passordet er ikke likt";
	$tr["New password"] = "Nytt passord";
	$tr["Reenter password"] = "Bekrefte passordet";
	$tr["Login name"] = "Brukernavn";
	$tr["Password"] = "Passord";
	$tr["Login"] = "Logg på";
	$tr["There are no admins."] = "Kunne ikke finne Administratorkonto.";
	$tr["Admin name"] = "Administrators navn";
	$tr["E-mail"] = "Epostadresse";
	$tr["Rights"] = "Rettigheter";
	$tr["Edit FTP list"] = "Gjøre endringer i FTP-listen";
	$tr["Edit SMB list"] = "Gjøre endringer i SMB-listen";
	$tr["Purge FTP server from list"] = "Fjerne FTP-server fra listen";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Fjerne SMB-Server fra listen";
	$tr["Delete comments"] = "Slette kommentarer";
}


# MENU.PHP:
$tr["Search"] = "Søke";
$tr["FTP server list"] = "FTP-serverliste";
$tr["SMB server list"] = "SMB-serverliste";
$tr["Comments"] = "Kommentarer";
$tr["Admin"] = "For administrator";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Hjelp";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "En feil";
$tr["Can't read configuration file"] = "Kan ikke lese konfigurasjonsfil";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME må være definert i konfigurasjonsfil";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN må være definert i konfigurasjonsfil";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD må være definert i konfigurasjonsfil";
$tr["Can't connect to database"] = "Kan ikke koble til databasen";
$tr["Can't connect to master database"] = "Kan ikke koble til master database";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "treff";
	else
		echo "treff";
	echo " i løpet av ", sprintf ("%0.2f", $s), " sekunder";
}

function page_generated ($host, $time)
{
	echo "Denne siden ble generert av en query av",
		$host, strftime (" den %d.%m.%Y kl %H:%M:%S.", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Vil du virkelig", ($purge ? "slette_permanent" : "slette"), "$host";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Du må logge på som administrator for å kunne legge til $type server";
}

function permition_host_edit ($HID)
{
	return "Det finnes ingen server med HID = $HID i listen, eller<br /> du må logge på som en administrator med rettigheter til å " . ($purge ? "slette permanent" : "endre eller slette permanent") . " $type server";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Det finnes ingen server med HID = $HID i listen eller <br /> du må logge på som en administrator med rettigheter til å " . ($purge ? "slette permanent" : "endre eller slette permanent") . " $type server";
}

function permition_comment_delete ($CID)
{
  return "Det finnes ingen kommentar med CID = $CID eller <br /> du må logge på som en administrator med rettigheter til å slette kommentarer";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Langsomme queries/søk har blitt sperret</h1>';
	echo "Die Suc?') am Anfang eller am Ende der Filnamensmaske ist zu verwenden (z.B. *.iso)";
	echo "Søk med metatagn/wildcard og spesifiser vanlige tegn (ikke '*' eller '?') i begynnelsen eller slutten av filmasken (f.eks. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />eller spesifiser minnste filst&oslash;rrelse p&aring; "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />"eller spesifiser st&oslsh;rste filst&oslash;rrelse p&aring; "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Tilbake til s&oslash;keparameter</a>';
}

?>
