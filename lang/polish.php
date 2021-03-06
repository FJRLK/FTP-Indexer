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

$months = array ("Sty", "Lut", "Mar", "Kwi", "Maj", "Cze", "Lip", "Sie", "Wrz", "Pa�", "Lis", "Gru");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "obrazy ISO";
	$tr["pictures"] = "zdj�cia";
	$tr["software"] = "oprogramowanie";

	# the predefined times in select.php
	$tr["today"] = "dzisiaj";
	$tr["yesterday"] = "wczoraj";
	$tr["2 days ago"] = "2 dni temu";
	$tr["3 days ago"] = "3 dni temu";
	$tr["week ago"] = "tydzie� temu";
	$tr["2 weeks ago"] = "2 tygodnie temu";
	$tr["month ago"] = "miesi�c temu";

	$tr["Searching is case insensitive."] = "Wyszukiwanie uwzgl�dnia wielko�� liter.";
	$tr["Files (wildcard (?,*))"] = "Pliki (maski (?,*))";
	$tr["Files (substring)"] = "Pliki (podci�gi)";
	$tr["Files (regular expression)"] = "Pliki (Wyra�enia regularne)";
	$tr["Directories (substring)"] = "Katalogi (podci�gi)";
	$tr["Directories (wildcard (?,*))"] = "Katalogi (maski (?,*))";
	$tr["Directories (regular expression)"] = "Katalogi (wyra�enia regularne)";
	$tr["Search!"] = "Szukaj";
	$tr["Fill in the parameters for"] = "Wype�nij parametry dla";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Zachowaj ustawienia (potrzebne ciasteczka)";
	$tr["Show only online hosts"] = "Poka� tylko komputery dost�pne w sieci";
	$tr["Print sizes in human readable format"] = "Drukuj rozmiary w ludzkim formacie";
	$tr["Search on"] = "Szukaj na";
	$tr["hosts"] = "serwerach";		# SMB and FTP hosts
	$tr["file size"] = "rozmiar pliku";
	$tr["Only files added since"] = "Tylko pliki dodane w ci�gu";
	$tr["Hits per page"] = "Trafie� na stron�";
	$tr["Your history"] = "Twoja historia";
	$tr["Statistics"] = "Statystyki";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Katalogi";
	$tr["Files"] = "Pliki";
	$tr["Total size"] = "��czny rozmiar";
	$tr["Queries"] = "Zapytania";
	$tr["and"] = "i";
	$tr["others"] = "inne";
	$tr["uses some code from"] = "wykorzystuje troszk� kodu z";
	$tr["is distributed under the"] = "jest rozpowszechniany na licencji";


	# SEARCH.PHP:
	$tr["Results for"] = "Rezultaty dla";
	$tr["More"] = "Wi�cej";
	$tr["New search"] = "Nowe wyszukiwanie";
	$tr["No hits"] = "Brak trafie�";
	$tr["Hit"] = "Trafienie";
	$tr["Hits"] = "Trafienia";


	# BROWSE.PHP
	$tr["Name"] = "Nazwa";
	$tr["Size"] = "Rozmiar";
	$tr["Date"] = "Data";
}
$tr["Last change"] = "Ostatnia zmiana";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Dodaj";
$tr["Update"] = "Uaktualnij";
$tr["Edit"] = "Edytuj";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Usu�";
$tr["Purge"] = "Czy��";
$tr["Cancel"] = "Anuluj";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Dodaj serwer FTP";
	$tr["Edit FTP server"] = "Edytuj serwer FTP";
	$tr["Delete FTP server"] = "Usu� serwer FTP";
	$tr["Purge FTP server"] = "Czy�� serwer FTP";
	$tr["Add SMB server"] = "Dodaj serwer SMB";
	$tr["Edit SMB server"] = "Edytuj serwer SMB";
	$tr["Delete SMB server"] = "Usu� serwer SMB";
	$tr["Purge SMB server"] = "Czy�� serwer SMB";

	# results and errors
	$tr["Host name must be specified"] = "Musi by� podana nazwa serwera";
	$tr["Workgroup must be specified"] = "Musi by� podana nazwa grupy";
	$tr["is not valid IP address"] = "nie jest poprawnym adresem IP";
	$tr["is not valid DNS name or IP address"] = "nie jest poprawn� nazw� DNS ani adresem IP";
	$tr["Login must be specified"] = "Musi by� podany login";
	$tr["Port is not valid"] = "Port nie jest poprawny";
	$tr["is not valid file name with absolute path"] = "nie jest poprawn� nazw� pliku z bezwzgl�dn� �cie�k� dost�pu";
	$tr["was added to list"] = "zosta� dodany do listy";
	$tr["is already in the list"] = "jest ju� na li�cie";
	$tr["was deleted"] = "zosta� usuni�ty";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "b�dzie usuni�ty podczas nast�pnego przeszukiwania";
	$tr["will be purged during next crawl"] = "b�dzie wyczyszczony podczas nast�pnego przeszukiwania";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Wyst�pi� b��d podczas dodawania %s do listy";
	$tr["__host_updated__"] = "Informacje o %s zosta�y uaktualnione";

	# data fields
	$tr["Host"] = "Komputer";
	$tr["Host (DNS name or IP)"] = "Komputer (nazwa DNS lub IP)";
	$tr["Login"] = "Login";
	$tr["Password"] = "Has�o";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Katalog pocz�tkowy";
	$tr["List of files"] = "Lista plik�w";
	$tr["Use passive mode"] = "U�yj trybu passive";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "U�yj trybu rekursywnego ls (ls -lR) do uzyskania listy plik�w";
	$tr["(server must support it)"] = "(serwer musi to obs�ugiwa�)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Komentarze";
	$tr["Editable by"] = "Edytowalny przez";
	$tr["IP address"] = "Adres IP";
	$tr["Workgroup"] = "Grupa robocza";
	$tr["Shares"] = "Zasoby";
	$tr["Name"] = "Nazwa";
	$tr["File size"] = "Rozmiar pliku";
	$tr["Period"] = "Cz�stotliwo��";
	$tr["Counter"] = "Licznik";
	$tr["Scan order"] = "Kolejno�� skanowania";
	$tr["Expire count"] = "Expire count";
	$tr["Flags"] = "Flagi";
	$tr["Action"] = "Akcja";
	$tr["delete"] = "usu�";
	$tr["purge"] = "kasuj";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Zapraszamy do pisania tutaj Twoich komentarzy, pomys��w, ...";
	$tr["Your name or nickname"] = "Twoje imi� lub pseudonim";
	$tr["Your e-mail"] = "Tw�j e-mail";
	$tr["optional"] = "nieobowi�zkowy";
	$tr["Comment text"] = "Tekst komentarza";
	$tr["Submit"] = "Wy�lij";
	$tr["Delete comment"] = "Usu� komentarz";
	$tr["Do you really want to delete this comment?"] = "Na pewno chcesz usun�� ten komentarz?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Zmie� has�o";
	$tr["Logout"] = "Wyloguj";
	$tr["Password was changed"] = "Has�o zosta�o zmienione";
	$tr["Password cannot be empty"] = "Has�o nie mo�e by� puste";
	$tr["Passwords do not match"] = "Has�a si� nie zgadzaj�";
	$tr["New password"] = "Nowe has�o";
	$tr["Reenter password"] = "Powt�rz nowe has�o";
	$tr["Login name"] = "Tw�j login";
	$tr["Password"] = "Has�o";
	$tr["Login"] = "Login";
	$tr["There are no admins."] = "Nie ma admin�w.";
	$tr["Admin name"] = "Nazwa admina";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Prawa";
	$tr["Edit FTP list"] = "Edytyj list� FTP";
	$tr["Edit SMB list"] = "Edytuj list� SMB";
	$tr["Purge FTP server from list"] = "Kasuj serwery FTP z listy";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Czy�� serwery SMB z listy";
	$tr["Delete comments"] = "Kasuj komentarze";
}


# MENU.PHP:
$tr["Search"] = "Szukaj";
$tr["FTP server list"] = "Lista serwer�w FTP";
$tr["SMB server list"] = "Lista serwer�w SMB";
$tr["Comments"] = "Komentarze";
$tr["Admin"] = "Admin";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Pomoc";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "B��d";
$tr["Can't read configuration file"] = "Nie mog� czyta� pliku z konfiguracj�";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME musi by� zdefiniowana w pliku konfiguracyjnym";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN musi by� zdefiniowany w pliku konfiguracyjnym";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD musi by� zdefiniowane w pliku konfiguracyjnym";
$tr["Can't connect to database"] = "Nie mog� si� pod��czy� do bazy";
$tr["Can't connect to master database"] = "Nie mog� si� pod��czy� do nadrz�dnej bazy";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "trafienie";
	else
		echo "trafienia";
	echo " w ", sprintf ("%0.2f", $s), " sekund";
}

function page_generated ($host, $time)
{
	echo "Ta strona zosta�a wygenerowana przez zapytanie z ",
		$host, strftime (" dnia %d.%m.%Y o %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Na pewno chcesz ", ($purge ? "wyczy�ci�" : "usun��"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Zalogowa�e� si� jako admin z prawami by doda� serwer $type";
}

function permition_host_edit ($HID)
{
	return "Nie ma serwera z HID = $HID na li�cie lub<br />musisz si� zalogowa� jako admin by m�c edytowa� ten serwer";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Nie ma serwera z HID = $HID na li�cie lub<br />musisz si� zalogowa� jako admin by mie� prawa do " . ($purge ? "wyczyszenia" : "edycji lub wyczyszczenia") . " serwera $type";
}

function permition_comment_delete ($CID)
{
	return "Nie ma komentarza z CID = $CID lub<br />musisz si� zalogowa� jako admin by mie� prawa do usuni�cia tego komentarza";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Wolne zapytania zosta�y wy��czone</h1>';
	echo "Szukaj przez maski lub podaj jakie� normalne znaki(nie '*' ani '?') na pocz�tku lub ko�cu maski pliku(np *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />lub podaj minimaln� wielko�� pliku jako"', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />lub podaj maksymaln� wielko�� pliku jako "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Powr�� z powrotem do parametr�w wyszukiwa�</a>';
}

?>
