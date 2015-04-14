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

$months = array ("Ian", "Feb", "Mar", "Apr", "Mai", "Iun", "Iul", "Aug", "Sep", "Oct", "Nov", "Dec");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "imagini ISO";
	$tr["pictures"] = "imagini";
	$tr["software"] = "programe";

	# the predefined times in select.php
	$tr["today"] = "azi";
	$tr["yesterday"] = "ieri";
	$tr["2 days ago"] = "acum 2 zile";
	$tr["3 days ago"] = "acum 3 zile";
	$tr["week ago"] = "acum o saptămână";
	$tr["2 weeks ago"] = "acum 2 saptămâni";
	$tr["month ago"] = "acum o lună";
	$tr["Searching is case insensitive."] = "Majusculele sunt nesemnificative.";
	$tr["Files (wildcard (?,*))"] = "Fişiere (metacaractere (?,*))";
	$tr["Files (substring)"] = "Fişiere (subşir)";
	$tr["Files (regular expression)"] = "Fişiere (expresie regulată)";
	$tr["Directories (substring)"] = "Directoare (subşir)";
	$tr["Directories (wildcard (?,*))"] = "Directoare (metacaracterere (?,*))";
	$tr["Directories (regular expression)"] = "Directoare (expresie regulată)";
	$tr["Search!"] = "Caută";
	$tr["Fill in the parameters for"] = "Completează parametrii pentru";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Salvează setările (necesită cookies)";
	$tr["Show only online hosts"] = "Arată numai gazdele care sunt online";
	$tr["Print sizes in human readable format"] = "Afişează mărimile fisierelor într-un format uşor de înţeles";
	$tr["Search on"] = "Caută în";
	$tr["hosts"] = "";		# SMB and FTP hosts
	$tr["file size"] = "mărimea fişierului";
	$tr["Only files added since"] = "Numai fişiere adăugate de la";
	$tr["Hits per page"] = "Rezultate per pagină";
	$tr["Your history"] = "Istoric";
	$tr["Statistics"] = "Statistici";
	$tr["SMBs"] = "gazde SMB";
	$tr["FTPs"] = "gazde FTP";
	$tr["Directories"] = "Directoare";
	$tr["Files"] = "Fişiere";
	$tr["Total size"] = "Mărimea totală";
	$tr["Queries"] = "Număr căutări";
	$tr["and"] = "şi";
	$tr["others"] = "alţii";
	$tr["uses some code from"] = "foloseşte cod sursă de la";
	$tr["is distributed under the"] = "este distribuit sub";


	# SEARCH.PHP:
	$tr["Results for"] = "Rezultatele pentru";
	$tr["More"] = "Mai mult";
	$tr["New search"] = "Căutare nouă";
	$tr["No hits"] = "Fără rezultate";
	$tr["Hit"] = "Rezultat";
	$tr["Hits"] = "Rezultate";


	# BROWSE.PHP
	$tr["Name"] = "Nume";
	$tr["Size"] = "Mărime";
	$tr["Date"] = "Dată";
}
$tr["Last change"] = "Ultima modificare";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Adaugă";
$tr["Update"] = "Actualizează";
$tr["Edit"] = "Editează";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Şterge";
$tr["Purge"] = "Elimină";
$tr["Cancel"] = "Renunţă";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Adaugă server FTP";
	$tr["Edit FTP server"] = "Editează server FTP";
	$tr["Delete FTP server"] = "Şterge server FTP";
	$tr["Purge FTP server"] = "Elimină FTP server";
	$tr["Add SMB server"] = "Adaugă server SMB";
	$tr["Edit SMB server"] = "Editează server SMB";
	$tr["Delete SMB server"] = "Sterge server SMB";
	$tr["Purge SMB server"] = "Elimină server SMB";

	# results and errors
	$tr["Host name must be specified"] = "Numele gazdei trebuie specificat";
	$tr["Workgroup must be specified"] = "Grupul de lucru trebuie specificat";
	$tr["is not valid IP address"] = "nu este o adresă IP validă";
	$tr["is not valid DNS name or IP address"] = "nu este un nume DNS sau adresă IP validă";
	$tr["Login must be specified"] = "Loginul trebuie specificat";
	$tr["Port is not valid"] = "Portul este invalid";
	$tr["was added to list"] = "a fost adăugat în listă";
	$tr["is already in the list"] = "este deja în listă";
	$tr["was deleted"] = "a fost şters";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "va fi şters la următoarea scanare";
	$tr["will be purged during next crawl"] = "va fi eliminat la următoarea scanare";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "A apărut o eroare la adăugarea lui %s în listă";
	$tr["__host_updated__"] = "Informaţia despre %s a fost actualizată";

	# data fields
	$tr["Host"] = "Gazda";
	$tr["Host (DNS name or IP)"] = "Gazda (nume DNS sau IP)";
	$tr["Login"] = "Login";
	$tr["Password"] = "Parola";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Director de start";
	$tr["Use passive mode"] = "Foloseşte modul pasiv";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Comentariu";
	$tr["Editable by"] = "Poate fi editat de";
	$tr["IP address"] = "Adresa IP";
	$tr["Workgroup"] = "Grup de lucru";
	$tr["Shares"] = "Partajări";
	$tr["Name"] = "Nume";
	$tr["File size"] = "Mărime";
	$tr["Period"] = "Perioada";
	$tr["Counter"] = "Contor";
	$tr["Scan order"] = "Ordine scanare";
	$tr["Expire count"] = "Contor expirări";
	$tr["Flags"] = "Steaguri";
	$tr["Action"] = "Acţiune";
	$tr["delete"] = "şterge";
	$tr["purge"] = "elimină";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Aici puteţi scrie orice fel de comentarii, idei, ...";
	$tr["Your name or nickname"] = "Numele sau porecla";
	$tr["Your e-mail"] = "Adresa e-mail";
	$tr["optional"] = "opţional";
	$tr["Comment text"] = "Comentariu";
	$tr["Submit"] = "Trimite";
	$tr["Delete comment"] = "Şterge cometariu";
	$tr["Do you really want to delete this comment?"] = "Sunteţi sigur că vreţi să ştergeţi acest comentariu?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Schimbă parola";
	$tr["Logout"] = "Ieşire";
	$tr["Password was changed"] = "Parola a fost schimbată";
	$tr["Password cannot be empty"] = "Parola nu poate fi nulă";
	$tr["Passwords do not match"] = "Parolele nu sunt la fel";
	$tr["New password"] = "Parola nouă";
	$tr["Reenter password"] = "Reintroduceţi parola";
	$tr["Login name"] = "Nume utilizator";
	$tr["Password"] = "Parola";
	$tr["Login"] = "Login";
	$tr["There are no admins."] = "Nu există administratori.";
	$tr["Admin name"] = "Numele administratorului";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Drepturi";
	$tr["Edit FTP list"] = "Editează lista FTP";
	$tr["Edit SMB list"] = "Editează listă SMB";
	$tr["Purge FTP server from list"] = "Elimină serverul FTP din listă";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Elimină serverul SMB din listă";
	$tr["Delete comments"] = "Şterge comentarii";
}


# MENU.PHP:
$tr["Search"] = "Căutare";
$tr["FTP server list"] = "lista de servere FTP";
$tr["SMB server list"] = "lista de servere SMB";
$tr["Comments"] = "Comentarii";
$tr["Admin"] = "Administrator";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Ajutor";


# TOP.PHP:
$tr["Select language"] = "Selectaţi limba";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Eroare";
$tr["Can't read configuration file"] = "Nu pot citi fişierul de configurare";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME trebuie definit în fişierul de configurare";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN trebuie definit în fişierul de configurare";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD trebuie definit în fişierul de configurare";
$tr["Can't connect to database"] = "Nu mă pot conecta la baza de date";
$tr["Can't connect to master database"] = "Nu mă pot conecta la baza de date principală";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "rezultat";
	else
		echo "rezultate";
	echo " în ", sprintf ("%0.2f", $s), " secunde";
}

function page_generated ($host, $time)
{
	echo "Această pagină a fost generată pentru căutare de ",
		$host, strftime (" in %d.%m.%Y la %H:%M:%S", $time);
}

function print_n_servers ($n)
{
	echo "$n ";
	if ($n == 1)
		echo "server";
	else
		echo "servere";
}

function confirm_delete ($host, $purge = 0)
{
	echo "Sunteţi sigur că vreţi să ", ($purge ? "eliminaţi" : "ştergeţi"), " $host?";
}

function permition_host_edit ($HID)
{
	return "Nu există gazdă cu HID = $HID în listă sau<br />trebuie să fii logat ca administrator pentru a putea edita această gazdă";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Nu există nici o gazdă cu HID = $HID în listă sau<br />trebuie să fii logat ca administrator care are dreptul să" . ($purge ? " elimine" : " editeze sau să elimine") . " gazde $type";
}

function permition_comment_delete ($CID)
{
	return "Nu există nici un comentariu cu CID = $CID sau<br />trebuie să fii logat ca şi administrator care are dreptul să şteargă comentarii";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Slow queries have been disabled</h1>';
	echo "Search by wildcard and specify some normal characters (not '*' or '?') from the beginning or the end of the file name mask (e.g. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />or specify the minimum file size of "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />or specify the maximum file size of "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Return back to search parameters</a>';
}

?>
