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

$months = array ("Jan", "Feb", "M&auml;r", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO-Dateien";
	$tr["pictures"] = "Bilder";
	$tr["software"] = "Software";

	# the predefined times in select.php
	$tr["today"] = "heute";
	$tr["yesterday"] = "gestern";
	$tr["2 days ago"] = "vor 2 Tagen";
	$tr["3 days ago"] = "vor 3 Tagen";
	$tr["week ago"] = "vor einer Woche";
	$tr["2 weeks ago"] = "vor 2 Wochen";
	$tr["month ago"] = "vor einem Monat";

	$tr["Searching is case insensitive."] = "Gro&szlig;-/Kleinschreibung wird nicht beachtet.";
	$tr["Files (wildcard (?,*))"] = "Dateien (wildcard (?,*))";
	$tr["Files (substring)"] = "Dateien (substring)";
	$tr["Files (regular expression)"] = "Dateien (regular expression)";
	$tr["Directories (substring)"] = "Verzeichnisse (substring)";
	$tr["Directories (wildcard (?,*))"] = "Verzeichnisse (wildcard (?,*))";
	$tr["Directories (regular expression)"] = "Verzeichnisse (regular expression)";
	$tr["Search!"] = "Suchen";
	$tr["Fill in the parameters for"] = "Parameter ausf&uuml;llen f&uuml;r";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Einstellungen speichern (ben&ouml;tigt Cookies)";
	$tr["Show only online hosts"] = "Nur verf&uuml;gbare Server anzeigen";
	$tr["Print sizes in human readable format"] = "Gr&ouml;&szlig;en in menschenlesbarem Format";
	$tr["Search on"] = "Durchsuche";
	$tr["hosts"] = "Server";		# SMB and FTP hosts
	$tr["file size"] = "Dateigr&ouml;&szlig;e";
	$tr["Only files added since"] = "Nur neu hinzugef&uuml;gte Dateien seit";
	$tr["Hits per page"] = "Treffer pro Seite";
	$tr["Your history"] = "Letzte Suchbegriffe";
	$tr["Statistics"] = "Statistik";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Verzeichnisse";
	$tr["Files"] = "Dateien";
	$tr["Total size"] = "Gesamtgr&ouml;&szlig;e";
	$tr["Queries"] = "Anfragen";
	$tr["and"] = "und";
	$tr["others"] = "Andere";
	$tr["uses some code from"] = "enth&auml;lt teilweise Programm-Code von";
	$tr["is distributed under the"] = "wird Vertrieben unter der";


	# SEARCH.PHP:
	$tr["Results for"] = "Ergebnisse f&uuml;r";
	$tr["More"] = "Mehr";
	$tr["New search"] = "Neue Suche";
	$tr["No hits"] = "Keine Treffer";
	$tr["Hit"] = "Treffer";
	$tr["Hits"] = "Treffer";


	# BROWSE.PHP
	$tr["Name"] = "Name";
	$tr["Size"] = "Gr&ouml;&szlig;e";
	$tr["Date"] = "Datum";
}
$tr["Last change"] = "Letzte &Auml;nderung";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Hinzuf&uuml;gen";
$tr["Update"] = "Aktualisieren";
$tr["Edit"] = "Bearbeiten";
$tr["Scan"] = "Scan";
$tr["Delete"] = "L&ouml;schen";
$tr["Purge"] = "Vollst&auml;ndig L&ouml;schen";
$tr["Cancel"] = "Abbrechen";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "FTP-Server hinzuf&uuml;gen";
	$tr["Edit FTP server"] = "FTP-Server bearbeiten";
	$tr["Delete FTP server"] = "FTP-Server l&ouml;schen";
	$tr["Purge FTP server"] = "FTP-Server vollst&auml;ndig l&ouml;schen";
	$tr["Add SMB server"] = "SMB-Server hinzuf&uuml;gen";
	$tr["Edit SMB server"] = "SMB-Server bearbeiten";
	$tr["Delete SMB server"] = "SMB-Server l&ouml;schen";
	$tr["Purge SMB server"] = "SMB-Server vollst&auml;ndig l&ouml;schen";

	# results and errors
	$tr["Host name must be specified"] = "Server Name muss angegeben werden";
	$tr["Workgroup must be specified"] = "Arbeitsgruppe muss angegeben werden";
	$tr["is not valid IP address"] = "ist keine g&uuml;ltige IP-Adresse";
	$tr["is not valid DNS name or IP address"] = "ist weder ein g&uuml;ltiger DNS-Name noch IP-Adresse";
	$tr["Login must be specified"] = "Login muss angegeben werden";
	$tr["Port is not valid"] = "Port ist nicht g&uuml;ltig";
	$tr["is not valid file name with absolute path"] = "ist kein g&uuml;ltiger Dateiname mit absolutem Pfad";
	$tr["was added to list"] = "wurde zur Liste hinzugef&uuml;gt";
	$tr["is already in the list"] = "ist schon in der Liste vorhanden";
	$tr["was deleted"] = "wurde gel&ouml;scht";
	$tr["will be scanned during the next network scan"] = "wird das n&auml;chsten mal gescannt.";
	$tr["will be deleted during next crawl"] = "wird bei der n&auml;chsten Durchsuchung gel&ouml;scht";
	$tr["will be purged during next crawl"] = "wird bei der n&auml;chsten Durchsuchung vollst&auml;ndig gel&ouml;scht";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Beim Hinzuf&uuml;gen von %s in die Liste ist ein Fehler aufgetreten";
	$tr["__host_updated__"] = "Angaben &uuml;ber %s wurden aktualisiert";

	# data fields
	$tr["Host"] = "Server";
	$tr["Host (DNS name or IP)"] = "Server (DNS-Name oder IP-Adresse)";
	$tr["Login"] = "Benutzername";
	$tr["Password"] = "Passwort";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Startverzeichnis";
	$tr["List of files"] = "Dateiliste";
	$tr["Use passive mode"] = "Benutze passiven Modus";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Benutze recursive ls (ls -lR) um Dateiliste zu bekommen.";
	$tr["(server must support it)"] = "(server muss es unterst&uuml;tzen)";
	$tr["(if server supports it)"] = "(falls server es unterst&uuml;zt)";
	$tr["Comment"] = "Kommentar";
	$tr["Editable by"] = "Bearbeitbar von";
	$tr["IP address"] = "IP-Adresse";
	$tr["Workgroup"] = "Arbeitsgruppe";
	$tr["Shares"] = "Freigaben";
	$tr["Name"] = "Name";
	$tr["File size"] = "Freigabegr&ouml;&szlig;e";
	$tr["Period"] = "Periode";
	$tr["Counter"] = "Z&auml;hler";
	$tr["Scan order"] = "Suchreihenfolge";
	$tr["Expire count"] = "Verfallsz&auml;hler";
	$tr["Flags"] = "Flags";
	$tr["Action"] = "Befehle";
	$tr["delete"] = "l&ouml;schen";
	$tr["purge"] = "vollst&auml;ndig l&ouml;schen";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Hier ist Platz f&uuml;r Kommentare, Ideen, ...";
	$tr["Your name or nickname"] = "Name oder Pseudonym";
	$tr["Your e-mail"] = "E-Mail Adresse";
	$tr["optional"] = "optional";
	$tr["Comment text"] = "Kommentar";
	$tr["Submit"] = "Senden";
	$tr["Delete comment"] = "Kommentar l&ouml;schen";
	$tr["Do you really want to delete this comment?"] = "Soll der Kommentar wirklich gel&ouml;scht werden?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Passwort &auml;ndern";
	$tr["Logout"] = "Abmelden";
	$tr["Password was changed"] = "Passwort wurde ge&auml;ndert";
	$tr["Password cannot be empty"] = "Passwort darf nicht leer sein";
	$tr["Passwords do not match"] = "Passw&ouml;rter sind nicht identisch";
	$tr["New password"] = "Neues Passwort";
	$tr["Reenter password"] = "Passwort wiederholen";
	$tr["Login name"] = "Benutzername";
	$tr["Password"] = "Passwort";
	$tr["Login"] = "Anmelden";
	$tr["There are no admins."] = "Keine Administratoren gefunden.";
	$tr["Admin name"] = "Name des Administrators";
	$tr["E-mail"] = "E-Mail";
	$tr["Rights"] = "Rechte";
	$tr["Edit FTP list"] = "FTP-Liste bearbeiten";
	$tr["Edit SMB list"] = "SMB-Liste bearbeiten";
	$tr["Purge FTP server from list"] = "FTP-Server vollst&auml;ndig von der Liste l&ouml;schen";	# purge == completely delete
	$tr["Purge SMB server from list"] = "SMB-Server vollst&auml;ndig von der Liste l&ouml;schen";
	$tr["Delete comments"] = "Kommentare l&ouml;schen";
}


# MENU.PHP:
$tr["Search"] = "Suchen";
$tr["FTP server list"] = "FTP-Serverliste";
$tr["SMB server list"] = "SMB-Serverliste";
$tr["Comments"] = "Kommentare";
$tr["Admin"] = "Administration";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Hilfe";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Fehler";
$tr["Can't read configuration file"] = "Konfigurationsdatei kann nicht gelesen werden";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME muss in der Konfigurationsdatei definiert sein";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN muss in der Konfigurationsdatei definiert sein";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD muss in der Konfigurationsdatei definiert sein";
$tr["Can't connect to database"] = "Verbindung zur Datenbank fehlgeschlagen";
$tr["Can't connect to master database"] = "Verbindung zur Master-Datenbank fehlgeschlagen";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "Treffer";
	else
		echo "Treffer";
	echo " in ", sprintf ("%0.2f", $s), " Sekunden";
}

function page_generated ($host, $time)
{
	echo "Diese Seite wurde f&uuml;r ",
		$host, strftime (" am %d.%m.%Y um %H:%M:%S erstellt.", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Soll $host wirklich ", ($purge ? "vollst&auml;ndig " : ""), "gel&ouml;scht werden?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Es muss ein Administrator mit Rechten zum Hinzufügen von $type Servern eingeloggt sein";
}

function permition_host_edit ($HID)
{
	return "Es gibt keinen Server mit HID = $HID in der Liste oder<br />es muss ein Administrator mit Rechten zum Bearbeiten des Servers eingeloggt sein";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Es gibt keinen Server mit HID = $HID in der Liste oder<br />es muss ein Administrator mit Rechten zum " . ($purge ? "vollst&auml;ndigen L&ouml;schen" : "Bearbeiten oder vollst&auml;ndigen L&ouml;schen") . " von $type Servern eingeloggt sein";
}

function permition_comment_delete ($CID)
{
	return "Es gibt keinen Kommentar mit CID = $CID oder<br />es muss ein Administrator mit Rechten zum l&ouml;schen von Kommentaren eingeloggt sein";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Langsame Anfragen wurden gesperrt</h1>';
	echo "Die Suche mit Jokerzeichen und einigen normalen Zeichen (nicht '*' oder '?') am Anfang oder am Ende der Dateinamensmaske ist zu verwenden (z.B. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />oder es ist die Angabe einer minimalen Dateigr&ouml;&szlig;e von "', $c["FAST_QUERY_MINSIZE"], '" zu verwenden';
	if ($fast_query_maxsize >= 0)
		echo '<br />oder es ist die Angabe einer maximalen Dateigr&ouml;&szligMe von "', $c["FAST_QUERY_MAXSIZE"], '" zu verwenden';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid,'">Zur&uuml;ck zu den Suchparametern</a>';
}

?>
