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

$months = array ("Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO образы";
	$tr["pictures"] = "изображения";
	$tr["software"] = "софт";

	# the predefined times in select.php
	$tr["today"] = "сегодня";
	$tr["yesterday"] = "вчера";
	$tr["2 days ago"] = "позавчера";
	$tr["3 days ago"] = "Три дня назад";
	$tr["week ago"] = "Неделю назад";
	$tr["2 weeks ago"] = "Две недели назад";
	$tr["month ago"] = "Месяц назад";

	$tr["Searching is case insensitive."] = "Регистро-независимый поиск";
	$tr["Files (wildcard (?,*))"] = "Поиск файлов (по маске (?,*))";
	$tr["Files (substring)"] = "Поиск файлов (по строкам)";
	$tr["Files (regular expression)"] = "Поиск файлов (по регулярным выражениям)";
	$tr["Directories (substring)"] = "Поиск директорий (по строкам)";
	$tr["Directories (wildcard (?,*))"] = "Поиск директорий (по маске (?,*))";
	$tr["Directories (regular expression)"] = "Поиск директорий (по регулярным выражениям)";
	$tr["Search!"] = "Поиск";
	$tr["Fill in the parameters for"] = "Установить параметры поиска для";
	$tr["Hide parameters of advanced search"] = "Убрать параметры расширенного поиска";
	$tr["Show parameters of advanced search"] = "Показать параметры расширенного поиска";
	$tr["Save settings (cookies required)"] = "Запомнить установки (необходимы cookies)";
	$tr["Show only online hosts"] = "Показать только работающие хосты";
	$tr["Print sizes in human readable format"] = "Печатать размеры в удобном для человека виде";
	$tr["Search on"] = "Искать в";
	$tr["hosts"] = "хосты";		# SMB and FTP hosts
	$tr["file size"] = "размер файла";
	$tr["Only files added since"] = "Только файлы, добавленные с";
	$tr["Hits per page"] = "Результатов на странице";
	$tr["Your history"] = "Предыдущие запросы";
	$tr["Statistics"] = "Статистика";
	$tr["SMBs"] = "SMB сервера";
	$tr["FTPs"] = "FTP сервера";
	$tr["Directories"] = "Директории";
	$tr["Files"] = "Файлы";
	$tr["Total size"] = "Общий размер";
	$tr["Queries"] = "Запросы";
	$tr["and"] = "и";
	$tr["others"] = "другой";
	$tr["uses some code from"] = "использует код";
	$tr["is distributed under the"] = "распространяется под лицензией";


	# SEARCH.PHP:
	$tr["Results for"] = "Результаты для";
	$tr["More"] = "Еще";
	$tr["New search"] = "Новый поиск";
	$tr["No hits"] = "Ничего не нашли :(";
	$tr["Hit"] = "Найдено";
	$tr["Hits"] = "Найдено";


	# BROWSE.PHP
	$tr["Name"] = "Имя";
	$tr["Size"] = "Размер";
	$tr["Date"] = "Дата";
}
$tr["Last change"] = "Последнее изменение";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Добавить";
$tr["Update"] = "Обновить";
$tr["Edit"] = "Редактировать";
$tr["Scan"] = "Сканировать";
$tr["Delete"] = "Удалить";
$tr["Purge"] = "Уничтожить";
$tr["Cancel"] = "Отмена";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Добавить FTP сервер";
	$tr["Edit FTP server"] = "Редактировать FTP сервер";
	$tr["Delete FTP server"] = "Удалить FTP сервер";
	$tr["Purge FTP server"] = "Уничтожить FTP сервер";
	$tr["Add SMB server"] = "Добавить SMB сервер";
	$tr["Edit SMB server"] = "Редактировать SMB сервер";
	$tr["Delete SMB server"] = "Удалить SMB сервер";
	$tr["Purge SMB server"] = "Уничтожить SMB сервер";

	# results and errors
	$tr["Host name must be specified"] = "Имя хоста должно быть указано";
	$tr["Workgroup must be specified"] = "Рабочая группа должна быть указана";
	$tr["is not valid IP address"] = "неправильное IP адрес";
	$tr["is not valid DNS name or IP address"] = "неправильное DNS имя или IP адрес";
	$tr["Login must be specified"] = "Логин должын быть указан";
	$tr["Port is not valid"] = "Порт не верен";
	$tr["is not valid file name with absolute path"] = "Неправильное имя файла с обсолютным путем";
	$tr["was added to list"] = "был добавлен к списку";
	$tr["is already in the list"] = "уже в списке";
	$tr["was deleted"] = "был удален";
	$tr["will be scanned during the next network scan"] = "будет отсканирован  при следующем сканировании";
	$tr["will be deleted during next crawl"] = "будет удален при следующем сканировании";
	$tr["will be purged during next crawl"] = "будет уничтожен при следующем сканировании";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Возникла ошибка при добавлении %s к списку";
	$tr["__host_updated__"] = "Информация о %s была обновлена";

	# data fields
	$tr["Host"] = "Хост";
	$tr["Host (DNS name or IP)"] = "Хост (DNS имя или IP)";
	$tr["Login"] = "Логин";
	$tr["Password"] = "Пароль";
	$tr["Port"] = "Порт";
	$tr["Starting directory"] = "Начальная директория";
	$tr["List of files"] = "Список файлов";
	$tr["Use passive mode"] = "Использовать пассивный режим";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Использовать рекурсивный  ls (ls -lR) для получения списка файлов";
	$tr["(server must support it)"] = "(сервер должен поддерживать)";
	$tr["(if server supports it)"] = "(если сервер поддерживает)";
	$tr["Comment"] = "Комментарий";
	$tr["Editable by"] = "Был введен";
	$tr["IP address"] = "IP адрес";
	$tr["Workgroup"] = "Рабочая группа";
	$tr["Shares"] = "Список ресурсов";
	$tr["Name"] = "Имя";
	$tr["File size"] = "Размер файлов";
	$tr["Period"] = "Период";
	$tr["Counter"] = "Счетчик";
	$tr["Scan order"] = "Порядок сканирования";
	$tr["Expire count"] = "Счетчик недоступности";
	$tr["Flags"] = "Флаги";
	$tr["Action"] = "Действие";
	$tr["delete"] = "удалить";
	$tr["purge"] = "уничтожить";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Приветствуются любые комментарии, идеи, ...";
	$tr["Your name or nickname"] = "Ваше имя или псевдоним";
	$tr["Your e-mail"] = "Ваш e-mail адрес";
	$tr["optional"] = "опционально";
	$tr["Comment text"] = "Текст сообщения";
	$tr["Submit"] = "Отправить";
	$tr["Delete comment"] = "Удалить комментарий";
	$tr["Do you really want to delete this comment?"] = "Вы действительно хотите удалить этот комментарий?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Изменить пароль";
	$tr["Logout"] = "Завершить сеанс";
	$tr["Password was changed"] = "Пароль изменен";
	$tr["Password cannot be empty"] = "Пароль не может быть пустым";
	$tr["Passwords do not match"] = "Пароли не совпадают";
	$tr["New password"] = "Новый пароль";
	$tr["Reenter password"] = "Повторите пароль";
	$tr["Login name"] = "Логин";
	$tr["Password"] = "Пароль";
	$tr["Login"] = "Логин";
	$tr["There are no admins."] = "Администраторов нет";
	$tr["Admin name"] = "Имя админа";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Права";
	$tr["Edit FTP list"] = "Редактирование списка FTP";
	$tr["Edit SMB list"] = "Редактирование списка SMB серверов";
	$tr["Purge FTP server from list"] = "Полное удаление FTP из списка";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Полное удаление SMB серверов из списка";
	$tr["Delete comments"] = "Удаление комментариев";
}


# MENU.PHP:
$tr["Search"] = "Поиск";
$tr["FTP server list"] = "Список FTP серверов";
$tr["SMB server list"] = "Список SMB серверов";
$tr["Comments"] = "Комментарии";
$tr["Admin"] = "Админ";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Помощь";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Ошибка";
$tr["Can't read configuration file"] = "Невозможно прочитать файл конфигурации";
$tr["DB_NAME must be defined in configuration file"] = "переменная DB_NAME должна быть определена в конфигурационном файле";
$tr["DB_LOGIN must be defined in configuration file"] = "переменная DB_LOGIN должна быть определена в конфигурационном файле";
$tr["DB_PASSWORD must be defined in configuration file"] = "переменная DB_PASSWORD должна быть определена в конфигурационном файле";
$tr["Can't connect to database"] = "Невозможно соединиться с БД";
$tr["Can't connect to master database"] = "Невозможно соединиться с главной БД";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "объектов найдено: $n (за ", sprintf ("%0.2f", $s), " сек.)";
}

function page_generated ($host, $time)
{
	echo "Эта страница была сгенерирована ",
		$host, strftime (" %d.%m.%Y в %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Вы действительно хотите ", ($purge ? "уничтожить" : "удалить"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Вы должны войти под администратором для права на добавление $type хост";
}

function permition_host_edit ($HID)
{
	return "Хоста с HID = $HID не существует в списке или<br />залогиниться администратором для получания права редактировать данный хост";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Хоста с HID = $HID не существует в списке или<br />вы должны залогиниться администратором для получения права на это " . ($purge ? "уничтожить" : "редактировать или уничтожить") . " $type сервера";
}

function permition_comment_delete ($CID)
{
	return "Комментарий с CID = $CID не существует в списке или<br />вы должны залогиниться администратором для получения права на удаление";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Медленные запросы отключены</h1>';
	echo "Используйте поиск по маскам и указывайте несколько нормальных символов (не '*' или '?') в начале или конце маски (например *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />или укажите границу минимума размера файла в "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />или укажите границу максимума размера файла в "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">вернуться к параметрам поиска</a>';
}

?>
