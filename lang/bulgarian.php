<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

# Written by Condor <condor@stz-bg.com>


# How is the translation done?
# ---------------------------

# The majority of texts are in a translation array:
# $tr["english sentence"] = "translated sentence";

# Some things remain in files - the helps and similar things.
# Other files which need to be translated:
# help_edit.php help_search.php


# TRANSLATION

$months = array ("Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октомври", "Ноември", "Декември");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO копие";
	$tr["pictures"] = "картинки";
	$tr["software"] = "linux софтуер";

	# the predefined times in select.php
	$tr["today"] = "днес";
	$tr["yesterday"] = "вчера";
	$tr["2 days ago"] = "преди 2 дни";
	$tr["3 days ago"] = "преди 3 дни";
	$tr["week ago"] = "преди седмица";
	$tr["2 weeks ago"] = "преди 2 седмици";
	$tr["month ago"] = "преди месец";

	$tr["Searching is case insensitive."] = "Търсенето не прави разлика между главни и малки букви.";
	$tr["Files (wildcard (?,*))"] = "Файлове (маска (?,*))";
	$tr["Files (substring)"] = "Файлове (подниз)";
	$tr["Files (regular expression)"] = "Файлове (регулярен израз)";
	$tr["Directories (substring)"] = "Директории (подниз)";
	$tr["Directories (wildcard (?,*))"] = "Директории (маска (?,*))";
	$tr["Directories (regular expression)"] = "Директории (регулярен израз)";
	$tr["Search!"] = "Търси";
	$tr["Fill in the parameters for"] = "Попълнете параметрите за";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Запази настройките (изискват се cookies)";
	$tr["Show only online hosts"] = "Покажи само достъпните хостове";
	$tr["Search on"] = "Търсене в";
	$tr["hosts"] = "хостове";		# SMB and FTP hosts
	$tr["file size"] = "размер на файл";
	$tr["Only files added since"] = "Само файловете добавени след";
	$tr["Print sizes in human readable format"] = "Изпиши размерите в четлив формат";
	$tr["Hits per page"] = "Резултати на страница";
	$tr["Your history"] = "Ваши предишни заявки";
	$tr["Statistics"] = "Статистика";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Директории";
	$tr["Files"] = "Файлове";
	$tr["Total size"] = "Общ размер";
	$tr["Queries"] = "Заявки";
	$tr["and"] = "и";
	$tr["others"] = "други";
	$tr["uses some code from"] = "използва част от кода на";
	$tr["is distributed under the"] = "се разпространява под лиценз";


	# SEARCH.PHP:
	$tr["Results for"] = "Резултати за";
	$tr["More"] = "Още";
	$tr["New search"] = "Ново търсене";
	$tr["No hits"] = "Няма намерени файлове";
	$tr["Hit"] = "Намерен";
	$tr["Hits"] = "Намерени";


	# BROWSE.PHP
	$tr["Name"] = "Име";
	$tr["Size"] = "Размер";
	$tr["Date"] = "Дата";
}
$tr["Last change"] = "Последна промяна";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Добавяне";
$tr["Update"] = "Обновяване";
$tr["Edit"] = "Редактиране";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Изтриване";
$tr["Purge"] = "Изчистване";
$tr["Cancel"] = "Анулиране";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Добавяне на FTP сървър";
	$tr["Edit FTP server"] = "Редактиране на FTP сървър";
	$tr["Delete FTP server"] = "Изтриване на FTP сървър";
	$tr["Purge FTP server"] = "Изчистване на FTP сървър";
	$tr["Add SMB server"] = "Добавяне на SMB сървър";
	$tr["Edit SMB server"] = "Редактиране на SMB сървър";
	$tr["Delete SMB server"] = "Изтриване на SMB сървър";
	$tr["Purge SMB server"] = "Изчистване на SMB сървър";

	# results and errors
	$tr["Host name must be specified"] = "Името на хоста трябва да бъде указано";
	$tr["Workgroup must be specified"] = "Групата трябва да бъде указана";
	$tr["is not valid IP address"] = "невалиден IP адрес";
	$tr["is not valid DNS name or IP address"] = "невалидно DNS име или IP адрес";
	$tr["Login must be specified"] = "Трябва да определите потребителско име";
	$tr["Port is not valid"] = "Невалиден порт";
	$tr["is not valid file name with absolute path"] = "не е валидно файлово име с пълен път";
	$tr["was added to list"] = "е добавен в листа";
	$tr["is already in the list"] = "съществува вече в листа";
	$tr["was deleted"] = "е изтрит";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "ще бъде изтрит при следващото обхождане";
	$tr["will be purged during next crawl"] = "ще бъде изчистен при следващото обхождане";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Получи се грешка при добавянето на хост %s в листа";
	$tr["__host_updated__"] = "Информацията за хост %s е обновена";

	# data fields
	$tr["Host"] = "Хост";
	$tr["Host (DNS name or IP)"] = "Хост (DNS име или IP)";
	$tr["Login"] = "Потребител";
	$tr["Password"] = "Парола";
	$tr["Port"] = "Порт";
	$tr["Starting directory"] = "Начална директория";
	$tr["List of files"] = "Лист на файловете";
	$tr["Use passive mode"] = "Използвай пасивен режим";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Коментар";
	$tr["Editable by"] = "Редактируем от";
	$tr["IP address"] = "IP адрес";
	$tr["Workgroup"] = "Група";
	$tr["Shares"] = "Ресурси";
	$tr["Name"] = "Име";
	$tr["File size"] = "Файлова големина";
	$tr["Period"] = "Интервал";
	$tr["Counter"] = "Брояч";
	$tr["Scan order"] = "Приоритет";
	$tr["Expire count"] = "Брояч за валидност";
	$tr["Flags"] = "Флагове";
	$tr["Action"] = "Действие";
	$tr["delete"] = "изтриване";
	$tr["purge"] = "изчистване";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Тук можете да напишете вашите коментари, идеи и т.н.";
	$tr["Your name or nickname"] = "Вашето име или псевдоним";
	$tr["Your e-mail"] = "Вашият e-mail адрес";
	$tr["optional"] = "не е задължително";
	$tr["Comment text"] = "Текст на коментара";
	$tr["Submit"] = "Прати";
	$tr["Delete comment"] = "Изтрий коментара";
	$tr["Do you really want to delete this comment?"] = "Наистина ли искате да изтриете коментара?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Смяна на парола";
	$tr["Logout"] = "Изход";
	$tr["Password was changed"] = "Паролата е сменена";
	$tr["Password cannot be empty"] = "Трябва да въведете нещо за парола";
	$tr["Passwords do not match"] = "Паролите не съответстват";
	$tr["New password"] = "Нова парола";
	$tr["Reenter password"] = "Въведете отново новата парола";
	$tr["Login name"] = "Потребителско име";
	$tr["Password"] = "Парола";
	$tr["Login"] = "Потребител";
	$tr["There are no admins."] = "Няма администратори.";
	$tr["Admin name"] = "Име на администратора";
	$tr["E-mail"] = "Електронна поща";
	$tr["Rights"] = "Права";
	$tr["Edit FTP list"] = "Редактиране на FTP списък";
	$tr["Edit SMB list"] = "Редактиране на SMB списък";
	$tr["Purge FTP server from list"] = "Изчистване на FTP сървъра от списъка";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Изчистване на SMB сървъра от списъка";
	$tr["Delete comments"] = "Изтриване на коментарите";
}


# MENU.PHP:
$tr["Search"] = "Търсене";
$tr["FTP server list"] = "Списък на FTP сървъри";
$tr["SMB server list"] = "Списък на SMB сървъри";
$tr["Comments"] = "Коментари";
$tr["Admin"] = "Администратор";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Помощ";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Грешка";
$tr["Can't read configuration file"] = "Конфигурационният файл не може да бъде прочетен";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME трябва да бъде определено в конфигурационния файл";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN трябва да бъде определен в конфигурационния файл";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD трябва да бъде определена в конфигурационния файл";
$tr["Can't connect to database"] = "Не мога да се свържа с базата данни";
$tr["Can't connect to master database"] = "Не мога да се свържа с главната база";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "намерен";
	else
		echo "намерени";
	echo " за ", sprintf ("%0.2f", $s), " секунди";
}

function page_generated ($host, $time)
{
	echo "Тази страница е генерирана",
		$host, strftime (" на  %d.%m.%Y в %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Наистина ли желаете да ", ($purge ? "изчистя" : "изтрия"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Трябва да влезете като администратoр за да имате права да добавите $type хост.";
}

function permition_host_edit ($HID)
{
	return "Няма хост с HID = $HID в листа или<br />трябва да влезете като администратор за да имате права да редактирате този хост";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Няма хост с HID = $HID в листа или<br />трябва да влезете като администратор за да имате права да " . ($purge ? "изчистите" : "редактирате или изчистите") . " $type hosts";
}

function permition_comment_delete ($CID)
{
	return "Няма коментар с CID = $CID или<br />трябва да влезете като администратор за да имате права да изтриете коментарите";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Бавните заявки са изключени</h1>';
	echo "Търсете по маска и някой неспециален символ (не '*' и '?') в началото или края на маската (например *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />или укажете граница за минимален размер на файла над "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />или укажете граница за максималния размер на файла под "', $c["FAST_QUERY_MINSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Върнете се обратно към параметрите за търсене</a>';
}

?>
