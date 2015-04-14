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

$months = array ("С╕ч", "Лют", "Бер", "Кв╕", "Тра", "Чер", "Лип", "Сер", "Вер", "Жов", "Лис", "Гру");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO";
	$tr["pictures"] = "зображення";
	$tr["software"] = "софт";

	# the predefined times in select.php
	$tr["today"] = "сьогодн╕";
	$tr["yesterday"] = "вчора";
	$tr["2 days ago"] = "позавчора";
	$tr["3 days ago"] = "Три дн╕ тому";
	$tr["week ago"] = "Тиждень тому";
	$tr["2 weeks ago"] = "Два тижн╕ тому";
	$tr["month ago"] = "М╕сяць тому";

	$tr["Searching is case insensitive."] = "Рег╕стро-незалежний пошук";
	$tr["Files (wildcard (?,*))"] = "Пошук файл╕в (за маскою (?,*))";
	$tr["Files (substring)"] = "Пошук файл╕в (за строками)";
	$tr["Files (regular expression)"] = "Пошук файл╕в (за регулярними виразами)";
	$tr["Directories (substring)"] = "Пошук директор╕й (за строками)";
	$tr["Directories (wildcard (?,*))"] = "Пошук директор╕й (за маскою (?,*))";
	$tr["Directories (regular expression)"] = "Пошук директор╕й (за регулярними виразами)";
	$tr["Search!"] = "Пошук";
	$tr["Fill in the parameters for"] = "Встановити параметри пошуку для";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Запам'ятати настройки (необх╕дн╕ cookies)";
	$tr["Show only online hosts"] = "Показати лише працююч╕ хости";
	$tr["Print sizes in human readable format"] = "Друкувати розм╕ри у формат╕, при╓мному для читання";
	$tr["Search on"] = "Шукати у";
	$tr["hosts"] = "хости";		# SMB and FTP hosts
	$tr["file size"] = "розм╕р файла";
	$tr["Only files added since"] = "Лише файли, додан╕ з";
	$tr["Hits per page"] = "Результат╕в на стор╕нку";
	$tr["Your history"] = "╤стор╕я запит╕в";
	$tr["Statistics"] = "Статистика";
	$tr["SMBs"] = "SMB сервера";
	$tr["FTPs"] = "FTP сервера";
	$tr["Directories"] = "Директор╕╖";
	$tr["Files"] = "Файли";
	$tr["Total size"] = "Загальний розм╕р";
	$tr["Queries"] = "Запити";
	$tr["and"] = "та";
	$tr["others"] = "╕нший";
	$tr["uses some code from"] = "використову╓ код";
	$tr["is distributed under the"] = "розповсюджу╓ться за л╕ценз╕ею";


	# SEARCH.PHP:
	$tr["Results for"] = "Результати для";
	$tr["More"] = "Ще";
	$tr["New search"] = "Новий пошук";
	$tr["No hits"] = "Н╕чого не знайдено :(";
	$tr["Hit"] = "Знайдено";
	$tr["Hits"] = "Знайдено";


	# BROWSE.PHP
	$tr["Name"] = "╤м'я";
	$tr["Size"] = "Розм╕р";
	$tr["Date"] = "Дата";
}
$tr["Last change"] = "Остання зм╕на";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Додати";
$tr["Update"] = "Поновити";
$tr["Edit"] = "Редагувати";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Видалити";
$tr["Purge"] = "Знищити";
$tr["Cancel"] = "В╕дм╕на";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Додати FTP сервер";
	$tr["Edit FTP server"] = "Редагувати FTP сервер";
	$tr["Delete FTP server"] = "Видалити FTP сервер";
	$tr["Purge FTP server"] = "Знищити FTP сервер";
	$tr["Add SMB server"] = "Додати SMB сервер";
	$tr["Edit SMB server"] = "Редагувати SMB сервер";
	$tr["Delete SMB server"] = "Видалити SMB сервер";
	$tr["Purge SMB server"] = "Знищити SMB сервер";

	# results and errors
	$tr["Host name must be specified"] = "╤м'я хоста потр╕бно вказати";
	$tr["Workgroup must be specified"] = "Робочу групу потр╕бно вказати";
	$tr["is not valid IP address"] = "нев╕рний IP адрес";
	$tr["is not valid DNS name or IP address"] = "нев╕рне DNS ╕м'я або IP адрес";
	$tr["Login must be specified"] = "Лог╕н потр╕бно вказати";
	$tr["Port is not valid"] = "Порт не в╕рний";
	$tr["is not valid file name with absolute path"] = "Нев╕рне им'я файлу з абсолютним шляхом";
	$tr["was added to list"] = "був доданий до списку";
	$tr["is already in the list"] = "вже у списку";
	$tr["was deleted"] = "був видалений";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "буде видалений при наступному скануванн╕";
	$tr["will be purged during next crawl"] = "буде видалений при наступному скануванн╕";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Виникла помилка при доданн╕ %s до списку";
	$tr["__host_updated__"] = "╤нформац╕я про %s була поновлена";

	# data fields
	$tr["Host"] = "Хост";
	$tr["Host (DNS name or IP)"] = "Хост (DNS ╕м'я чи IP)";
	$tr["Login"] = "Лог╕н";
	$tr["Password"] = "Пароль";
	$tr["Port"] = "Порт";
	$tr["Starting directory"] = "Початкова директор╕я";
	$tr["List of files"] = "Список файл╕в";
	$tr["Use passive mode"] = "Використовувати пасивний режим";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Коментар╕й";
	$tr["Editable by"] = "Був доданий";
	$tr["IP address"] = "IP адрес";
	$tr["Workgroup"] = "Робоча група";
	$tr["Shares"] = "Список ресурс╕в";
	$tr["Name"] = "╤м'я";
	$tr["File size"] = "Розм╕р файл╕в";
	$tr["Period"] = "Пер╕од";
	$tr["Counter"] = "Л╕чильник";
	$tr["Scan order"] = "Порядок сканування";
	$tr["Expire count"] = "Л╕чильник недосяжност╕";
	$tr["Flags"] = "Флаги";
	$tr["Action"] = "Д╕я";
	$tr["delete"] = "видалити";
	$tr["purge"] = "знищити";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "В╕таються будь-як╕ коментар╕, ╕де╖, ...";
	$tr["Your name or nickname"] = "Ваше ╕м'я або н╕кнейм";
	$tr["Your e-mail"] = "Ваш e-mail адрес";
	$tr["optional"] = "опционально";
	$tr["Comment text"] = "Текст коментар╕я";
	$tr["Submit"] = "В╕д╕слати";
	$tr["Delete comment"] = "Видалити коментар╕й";
	$tr["Do you really want to delete this comment?"] = "Ви д╕йсно бажа╓те видалити цей коментар╕й?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Зм╕нити пароль";
	$tr["Logout"] = "Завершити сеанс";
	$tr["Password was changed"] = "Пароль зм╕нений";
	$tr["Password cannot be empty"] = "Пароль не може бути порожн╕м";
	$tr["Passwords do not match"] = "Парол╕ не совпадають";
	$tr["New password"] = "Новий пароль";
	$tr["Reenter password"] = "Повтор╕ть пароль";
	$tr["Login name"] = "Лог╕н";
	$tr["Password"] = "Пароль";
	$tr["Login"] = "Лог╕н";
	$tr["There are no admins."] = "Адм╕н╕в нема╓";
	$tr["Admin name"] = "╤м'я адм╕на";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Права";
	$tr["Edit FTP list"] = "Редагування списка FTP";
	$tr["Edit SMB list"] = "Редагування списка SMB";
	$tr["Purge FTP server from list"] = "Повне видалення FTP из списка";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Повне видалення SMB серверов из списка";
	$tr["Delete comments"] = "Видалення коментар╕в";
}


# MENU.PHP:
$tr["Search"] = "Пошук";
$tr["FTP server list"] = "Список FTP сервер╕в";
$tr["SMB server list"] = "Список SMB сервер╕в";
$tr["Comments"] = "Коментар╕";
$tr["Admin"] = "Адм╕н";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Допомога";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Помилка";
$tr["Can't read configuration file"] = "Неможливо прочитати файл конф╕гурац╕и";
$tr["DB_NAME must be defined in configuration file"] = "зм╕нна DB_NAME повинна бути визначена у конф╕гурац╕йному файл╕";
$tr["DB_LOGIN must be defined in configuration file"] = "зм╕нна DB_LOGIN повинна бути визначена у конф╕гурац╕йному файл╕";
$tr["DB_PASSWORD must be defined in configuration file"] = "зм╕нна DB_PASSWORD повинна бути визначена у конф╕гурац╕йному файл╕";
$tr["Can't connect to database"] = "Неможливо з'╓днатися з БД";
$tr["Can't connect to master database"] = "Неможливо з'╓днатися з головною БД";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "об'╓кт╕в знайдено: $n (за ", sprintf ("%0.2f", $s), " сек.)";
}

function page_generated ($host, $time)
{
	echo "Ця стор╕нка була сгенерована ",
		$host, strftime (" %d.%m.%Y в %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Ви д╕йсно бажа╓те? ", ($purge ? "знищити" : "видалити"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Ви повинн╕ зайти з правами адм╕на щоб додати $type хост";
}

function permition_host_edit ($HID)
{
	return "Хоста з HID = $HID не ╕сну╓ у списку або<br />зайд╕ть адм╕ном для отримання права редагувати даний хост";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Хоста з HID = $HID не ╕сну╓ у списку або<br />ви повинн╕ зайти адм╕ном для отримання права на це " . ($purge ? "знищити" : "редагувати або знищити") . " $type сервера";
}

function permition_comment_delete ($CID)
{
	return "Коментар╕й с CID = $CID не ╕сну╓ у списку або<br />ви повинн╕ зайти адм╕ном для отримання права на видалення";
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
