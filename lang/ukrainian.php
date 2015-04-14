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

$months = array ("��", "���", "���", "�צ", "���", "���", "���", "���", "���", "���", "���", "���");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO";
	$tr["pictures"] = "����������";
	$tr["software"] = "����";

	# the predefined times in select.php
	$tr["today"] = "������Φ";
	$tr["yesterday"] = "�����";
	$tr["2 days ago"] = "���������";
	$tr["3 days ago"] = "��� �Φ ����";
	$tr["week ago"] = "������� ����";
	$tr["2 weeks ago"] = "��� ���Φ ����";
	$tr["month ago"] = "����� ����";

	$tr["Searching is case insensitive."] = "��Ǧ����-���������� �����";
	$tr["Files (wildcard (?,*))"] = "����� ���̦� (�� ������ (?,*))";
	$tr["Files (substring)"] = "����� ���̦� (�� ��������)";
	$tr["Files (regular expression)"] = "����� ���̦� (�� ����������� ��������)";
	$tr["Directories (substring)"] = "����� �������Ҧ� (�� ��������)";
	$tr["Directories (wildcard (?,*))"] = "����� �������Ҧ� (�� ������ (?,*))";
	$tr["Directories (regular expression)"] = "����� �������Ҧ� (�� ����������� ��������)";
	$tr["Search!"] = "�����";
	$tr["Fill in the parameters for"] = "���������� ��������� ������ ���";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "�����'����� ��������� (����Ȧ�Φ cookies)";
	$tr["Show only online hosts"] = "�������� ���� ������ަ �����";
	$tr["Print sizes in human readable format"] = "��������� ���ͦ�� � �����Ԧ, ��ɤ����� ��� �������";
	$tr["Search on"] = "������ �";
	$tr["hosts"] = "�����";		# SMB and FTP hosts
	$tr["file size"] = "���ͦ� �����";
	$tr["Only files added since"] = "���� �����, ����Φ �";
	$tr["Hits per page"] = "��������Ԧ� �� ���Ҧ���";
	$tr["Your history"] = "����Ҧ� ����Ԧ�";
	$tr["Statistics"] = "����������";
	$tr["SMBs"] = "SMB �������";
	$tr["FTPs"] = "FTP �������";
	$tr["Directories"] = "�������Ҧ�";
	$tr["Files"] = "�����";
	$tr["Total size"] = "��������� ���ͦ�";
	$tr["Queries"] = "������";
	$tr["and"] = "��";
	$tr["others"] = "�����";
	$tr["uses some code from"] = "����������դ ���";
	$tr["is distributed under the"] = "����������դ���� �� ̦���ڦ��";


	# SEARCH.PHP:
	$tr["Results for"] = "���������� ���";
	$tr["More"] = "��";
	$tr["New search"] = "����� �����";
	$tr["No hits"] = "����� �� �������� :(";
	$tr["Hit"] = "��������";
	$tr["Hits"] = "��������";


	# BROWSE.PHP
	$tr["Name"] = "��'�";
	$tr["Size"] = "���ͦ�";
	$tr["Date"] = "����";
}
$tr["Last change"] = "������� �ͦ��";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "������";
$tr["Update"] = "��������";
$tr["Edit"] = "����������";
$tr["Scan"] = "Scan";
$tr["Delete"] = "��������";
$tr["Purge"] = "�������";
$tr["Cancel"] = "���ͦ��";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "������ FTP ������";
	$tr["Edit FTP server"] = "���������� FTP ������";
	$tr["Delete FTP server"] = "�������� FTP ������";
	$tr["Purge FTP server"] = "������� FTP ������";
	$tr["Add SMB server"] = "������ SMB ������";
	$tr["Edit SMB server"] = "���������� SMB ������";
	$tr["Delete SMB server"] = "�������� SMB ������";
	$tr["Purge SMB server"] = "������� SMB ������";

	# results and errors
	$tr["Host name must be specified"] = "��'� ����� ���Ҧ��� �������";
	$tr["Workgroup must be specified"] = "������ ����� ���Ҧ��� �������";
	$tr["is not valid IP address"] = "��צ���� IP �����";
	$tr["is not valid DNS name or IP address"] = "��צ��� DNS ��'� ��� IP �����";
	$tr["Login must be specified"] = "��Ǧ� ���Ҧ��� �������";
	$tr["Port is not valid"] = "���� �� צ����";
	$tr["is not valid file name with absolute path"] = "��צ��� ��'� ����� � ���������� ������";
	$tr["was added to list"] = "��� ������� �� ������";
	$tr["is already in the list"] = "��� � ������";
	$tr["was deleted"] = "��� ���������";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "���� ��������� ��� ���������� ��������Φ";
	$tr["will be purged during next crawl"] = "���� ��������� ��� ���������� ��������Φ";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "������� ������� ��� �����Φ %s �� ������";
	$tr["__host_updated__"] = "�������æ� ��� %s ���� ���������";

	# data fields
	$tr["Host"] = "����";
	$tr["Host (DNS name or IP)"] = "���� (DNS ��'� �� IP)";
	$tr["Login"] = "��Ǧ�";
	$tr["Password"] = "������";
	$tr["Port"] = "����";
	$tr["Starting directory"] = "��������� �������Ҧ�";
	$tr["List of files"] = "������ ���̦�";
	$tr["Use passive mode"] = "��������������� �������� �����";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "�������Ҧ�";
	$tr["Editable by"] = "��� �������";
	$tr["IP address"] = "IP �����";
	$tr["Workgroup"] = "������ �����";
	$tr["Shares"] = "������ �����Ӧ�";
	$tr["Name"] = "��'�";
	$tr["File size"] = "���ͦ� ���̦�";
	$tr["Period"] = "��Ҧ��";
	$tr["Counter"] = "��������";
	$tr["Scan order"] = "������� ����������";
	$tr["Expire count"] = "�������� ����������Ԧ";
	$tr["Flags"] = "�����";
	$tr["Action"] = "��";
	$tr["delete"] = "��������";
	$tr["purge"] = "�������";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "��������� ����-�˦ �������Ҧ, ��ŧ, ...";
	$tr["Your name or nickname"] = "���� ��'� ��� Φ�����";
	$tr["Your e-mail"] = "��� e-mail �����";
	$tr["optional"] = "�����������";
	$tr["Comment text"] = "����� �������Ҧ�";
	$tr["Submit"] = "��Ħ�����";
	$tr["Delete comment"] = "�������� �������Ҧ�";
	$tr["Do you really want to delete this comment?"] = "�� Ħ���� ������� �������� ��� �������Ҧ�?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "�ͦ���� ������";
	$tr["Logout"] = "��������� �����";
	$tr["Password was changed"] = "������ �ͦ�����";
	$tr["Password cannot be empty"] = "������ �� ���� ���� �����Φ�";
	$tr["Passwords do not match"] = "����̦ �� ����������";
	$tr["New password"] = "����� ������";
	$tr["Reenter password"] = "�����Ҧ�� ������";
	$tr["Login name"] = "��Ǧ�";
	$tr["Password"] = "������";
	$tr["Login"] = "��Ǧ�";
	$tr["There are no admins."] = "��ͦΦ� �����";
	$tr["Admin name"] = "��'� ��ͦ��";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "�����";
	$tr["Edit FTP list"] = "����������� ������ FTP";
	$tr["Edit SMB list"] = "����������� ������ SMB";
	$tr["Purge FTP server from list"] = "����� ��������� FTP �� ������";	# purge == completely delete
	$tr["Purge SMB server from list"] = "����� ��������� SMB �������� �� ������";
	$tr["Delete comments"] = "��������� �������Ҧ�";
}


# MENU.PHP:
$tr["Search"] = "�����";
$tr["FTP server list"] = "������ FTP �����Ҧ�";
$tr["SMB server list"] = "������ SMB �����Ҧ�";
$tr["Comments"] = "�������Ҧ";
$tr["Admin"] = "��ͦ�";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "��������";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "�������";
$tr["Can't read configuration file"] = "��������� ��������� ���� ���Ʀ����æ�";
$tr["DB_NAME must be defined in configuration file"] = "�ͦ��� DB_NAME ������� ���� ��������� � ���Ʀ����æ����� ���̦";
$tr["DB_LOGIN must be defined in configuration file"] = "�ͦ��� DB_LOGIN ������� ���� ��������� � ���Ʀ����æ����� ���̦";
$tr["DB_PASSWORD must be defined in configuration file"] = "�ͦ��� DB_PASSWORD ������� ���� ��������� � ���Ʀ����æ����� ���̦";
$tr["Can't connect to database"] = "��������� �'�������� � ��";
$tr["Can't connect to master database"] = "��������� �'�������� � �������� ��";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "��'��Ԧ� ��������: $n (�� ", sprintf ("%0.2f", $s), " ���.)";
}

function page_generated ($host, $time)
{
	echo "�� ���Ҧ��� ���� ����������� ",
		$host, strftime (" %d.%m.%Y � %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "�� Ħ���� �������? ", ($purge ? "�������" : "��������"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "�� �����Φ ����� � ������� ��ͦ�� ��� ������ $type ����";
}

function permition_host_edit ($HID)
{
	return "����� � HID = $HID �� ���դ � ������ ���<br />���Ħ�� ��ͦ��� ��� ��������� ����� ���������� ����� ����";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "����� � HID = $HID �� ���դ � ������ ���<br />�� �����Φ ����� ��ͦ��� ��� ��������� ����� �� �� " . ($purge ? "�������" : "���������� ��� �������") . " $type �������";
}

function permition_comment_delete ($CID)
{
	return "�������Ҧ� � CID = $CID �� ���դ � ������ ���<br />�� �����Φ ����� ��ͦ��� ��� ��������� ����� �� ���������";
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
