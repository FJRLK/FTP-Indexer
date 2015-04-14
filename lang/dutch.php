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

$months = array ("Jan", "Feb", "Mrt", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO images";
	$tr["pictures"] = "afbeeldingen";
	$tr["software"] = "software";

	# the predefined times in select.php
	$tr["today"] = "vandaag";
	$tr["yesterday"] = "gisteren";
	$tr["2 days ago"] = "eergisteren";
	$tr["3 days ago"] = "3 dagen geleden";
	$tr["week ago"] = "1 week geleden";
	$tr["2 weeks ago"] = "2 weken geleden";
	$tr["month ago"] = "1 maand geleden";

	$tr["Searching is case insensitive."] = "Er wordt geen onderscheid gemaakt tussen kleine letters en hoofdletters.";
	$tr["Files (wildcard (?,*))"] = "Bestanden (jokers (?,*))";
	$tr["Files (substring)"] = "Bestanden (substring)";
	$tr["Files (regular expression)"] = "Bestanden (reguliere expressie)";
	$tr["Directories (substring)"] = "Mappen (substring)";
	$tr["Directories (wildcard (?,*))"] = "Mappen (jokers (?,*))";
	$tr["Directories (regular expression)"] = "Mappen (reguliere expressie)";
	$tr["Search!"] = "Zoek";
	$tr["Fill in the parameters for"] = "Vul de zoekterm in voor";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Instellingen opslaan (cookies vereist)";
	$tr["Show only online hosts"] = "Laat alleen online systemen zien";
	$tr["Print sizes in human readable format"] = "Geef groottes in leesbaar formaat";
	$tr["Search on"] = "Zoek op";     # search (files/directories) on FTP/SMB servers
	$tr["hosts"] = "systemen";		# SMB and FTP hosts
	$tr["file size"] = "bestandsgrootte";
	$tr["Only files added since"] = "Alleen bestanden toegevoegd sinds";
	$tr["Hits per page"] = "Resultaten per pagina";
	$tr["Your history"] = "Eerdere zoekopdrachten";
	$tr["Statistics"] = "Statistieken";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Mappen";
	$tr["Files"] = "Bestanden";
	$tr["Total size"] = "Totale grootte";
	$tr["Queries"] = "Zoekopdrachten";
	$tr["and"] = "en";
	$tr["others"] = "anderen";
	$tr["uses some code from"] = "gebruikt code van";
	$tr["is distributed under the"] = "wordt gedistribueerd onder de";


	# SEARCH.PHP:
	$tr["Results for"] = "Resultaten voor";
	$tr["More"] = "Meer";
	$tr["New search"] = "Nieuwe zoekopdracht";
	$tr["No hits"] = "Geen resultaten";
	$tr["Hit"] = "Resultaat";
	$tr["Hits"] = "Resultaten";


	# BROWSE.PHP
	$tr["Name"] = "Naam";
	$tr["Size"] = "Grootte";
	$tr["Date"] = "Datum";
}
$tr["Last change"] = "Laatste wijziging";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Toevoegen";
$tr["Update"] = "Bijwerken";
$tr["Edit"] = "Wijzigen";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Verwijderen";
$tr["Purge"] = "Volledig verwijderen";     # purge == completely delete
$tr["Cancel"] = "Annuleren";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Voeg FTP server toe";
	$tr["Edit FTP server"] = "Wijzig FTP server";
	$tr["Delete FTP server"] = "Verwijder FTP server";
	$tr["Purge FTP server"] = "Verwijder FTP server volledig";
	$tr["Add SMB server"] = "Voeg SMB server toe";
	$tr["Edit SMB server"] = "Wijzig SMB server";
	$tr["Delete SMB server"] = "Verwijder SMB server";
	$tr["Purge SMB server"] = "Verwijder SMB server volledig";

	# results and errors
	$tr["Host name must be specified"] = "Er moet een systeemnaam worden opgegeven";
	$tr["Workgroup must be specified"] = "Er moet een werkgroep worden opgegeven";
	$tr["is not valid IP address"] = "is geen geldig IP adres";
	$tr["is not valid DNS name or IP address"] = "is geen geldige DNS naam of IP adres";
	$tr["Login must be specified"] = "Er moet een login worden opgegeven";
	$tr["Port is not valid"] = "Poort is niet geldig";
	$tr["is not valid file name with absolute path"] = "is geen geldige bestandsnaam of absolute map";
	$tr["was added to list"] = "is aan de lijst toegevoegd";
	$tr["is already in the list"] = "staat al in de lijst";
	$tr["was deleted"] = "is verwijderd";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "wordt verwijderd bij volgende indexering";
	$tr["will be purged during next crawl"] = "wordt volledig verwijderd bij volgende indexering";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Er is een een fout opgetreden bij het toevoegen van %s aan de lijst";
	$tr["__host_updated__"] = "Gegevens van %s zijn bijgewerkt";

	# data fields
	$tr["Host"] = "Systeem";
	$tr["Host (DNS name or IP)"] = "Systeem (DNS naam of IP)";
	$tr["Login"] = "Gebruikersnaam";
	$tr["Password"] = "Wachtwoord";
	$tr["Port"] = "Poort";
	$tr["Starting directory"] = "Start Map";
	$tr["List of files"] = "Lijst met bestanden";
	$tr["Use passive mode"] = "Gebruik passieve modus";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Bericht";
	$tr["Editable by"] = "Wijzigbaar door";
	$tr["IP address"] = "IP adres";
	$tr["Workgroup"] = "Werkgroep";
	$tr["Shares"] = "Gedeelde mappen";
	$tr["Name"] = "Naam";
	$tr["File size"] = "Bestandsgrootte";
	$tr["Period"] = "Periode";
	$tr["Counter"] = "Teller";
	$tr["Scan order"] = "Scan volgorde";
	$tr["Expire count"] = "Indexeer pogingen";
	$tr["Flags"] = "Flags";
	$tr["Action"] = "Aktie";
	$tr["delete"] = "verwijderen";
	$tr["purge"] = "volledig verwijderen";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Hier kun je berichten met commentaar, ideeën, enz. plaatsen";
	$tr["Your name or nickname"] = "Naam of nickname";
	$tr["Your e-mail"] = "E-mailadres";
	$tr["optional"] = "optioneel";
	$tr["Comment text"] = "Commentaar";
	$tr["Submit"] = "Verstuur";
	$tr["Delete comment"] = "Verwijder commentaar";
	$tr["Do you really want to delete this comment?"] = "Weet je zeker dat je dit commentaar wilt verwijderen?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Verander wachtwoord";
	$tr["Logout"] = "Afmelden";
	$tr["Password was changed"] = "Wachtwoord is veranderd";
	$tr["Password cannot be empty"] = "Wachtwoord mag niet leeg zijn";
	$tr["Passwords do not match"] = "Wachtwoorden zijn verschillend";
	$tr["New password"] = "Nieuw wachtwoord";
	$tr["Reenter password"] = "Vul wachtwoord opnieuw in";
	$tr["Login name"] = "Gebruikersnaam";
	$tr["Password"] = "Wachtwoord";
	$tr["Login"] = "Aanmelden";
	$tr["There are no admins."] = "Er zijn geen beheerders.";
	$tr["Admin name"] = "Naam beheerder";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Permissies";
	$tr["Edit FTP list"] = "Wijzig FTP lijst";
	$tr["Edit SMB list"] = "Wijzig SMB lijst";
	$tr["Purge FTP server from list"] = "Verwijder FTP server volledig uit lijst";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Verwijder SMB server volledig uit lijst";
	$tr["Delete comments"] = "Verwijder commentaar";
}


# MENU.PHP:
$tr["Search"] = "Zoeken";
$tr["FTP server list"] = "Lijst van FTP servers";
$tr["SMB server list"] = "Lijst van SMB servers";
$tr["Comments"] = "Commentaar";
$tr["Admin"] = "Beheerders";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Help";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Fout";
$tr["Can't read configuration file"] = "Kan het configuratiebestand niet lezen";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME moet worden opgegeven in het configuratiebestand";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN moet worden opgegeven in het configuratiebestand";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD moet worden opgegeven in het configuratiebestand";
$tr["Can't connect to database"] = "Kan geen verbinding maken met de database";
$tr["Can't connect to master database"] = "Kan geen verbinding maken met de master database";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "resultaat";
	else
		echo "resultaten";
	echo " in ", sprintf ("%0.2f", $s), " seconden";
}

function page_generated ($host, $time)
{
	echo "Deze pagina is gegenereerd door ",
		$host, strftime (" op %d.%m.%Y om %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Weet je zeker dat je $host ", ($purge ? "volledig " : ""), "wilt verwijderen?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Je moet inloggen als beheerder met het recht om een $type server toe te voegen";
}

function permition_host_edit ($HID)
{
	return "Er is geen systeem met HID = $HID in de lijst of<br />je moet inloggen als beheerder om dit systeem te kunnen wijzigen";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Er is geen systeem met HID = $HID in de lijst of<br />je moet inloggen als als beheerder die de permissie heeft om $type servers volledig te ".($purge ? "verwijderen" : "verwijderen of te wijzigen");
}

function permition_comment_delete ($CID)
{
	return "Er is geen bericht met CID = $CID of<br />je moet inloggen als beheerder met de permissie om berichten te verwijderen";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Langzame zoekopdrachten zijn uitgeschakeld</h1>';
	echo "Zoek mbv jokertekens en plaats aan het begin of aan het einde van de zoektermen een serie normale karakters (niet '*' of '?'), bijvoorbeeld '*.iso'";
	if ($fast_query_minsize >= 0)
		echo '<br />of geef een minimale bestandsgrootte op van "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />of geef een maximale bestandsgrootte op van "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Ga terug naar Zoeken</a>';
}

?>
