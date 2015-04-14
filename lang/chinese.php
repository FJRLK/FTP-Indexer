<?php
//
// Chinese (Simplified) Language File for FFSearch 1.02
//
// Translated by FreeWizard@SMTH, HAPPY, BT
// Mail: freewizard@163.net
// Date: 5/17/2003
//

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

$months = array ("һ��", "����", "����", "����", "����", "����", "����", "����", "����", "ʮ��", "ʮһ��", "ʮ����");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO ӳ��";
	$tr["pictures"] = "ͼƬ";
	$tr["software"] = "���";

	# the predefined times in select.php
	$tr["today"] = "����";
	$tr["yesterday"] = "����";
	$tr["2 days ago"] = "����ǰ";
	$tr["3 days ago"] = "����ǰ";
	$tr["week ago"] = "һ��ǰ";
	$tr["2 weeks ago"] = "����ǰ";
	$tr["month ago"] = "һ����ǰ";

	$tr["Searching is case insensitive."] = "�������Դ�Сд��";
	$tr["Files (wildcard (?,*))"] = "�ļ� (ͨ��� (?,*))";
	$tr["Files (substring)"] = "�ļ� (�Ӵ�)";
	$tr["Files (regular expression)"] = "�ļ� (������ʽ)";
	$tr["Directories (substring)"] = "Ŀ¼ (�Ӵ�)";
	$tr["Directories (wildcard (?,*))"] = "Ŀ¼ (ͨ��� (?,*))";
	$tr["Directories (regular expression)"] = "Ŀ¼ (������ʽ)";
	$tr["Search!"] = "����";
	$tr["Fill in the parameters for"] = "��д������";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "�������� (��Ҫcookies)";
	$tr["Show only online hosts"] = "ֻ��ʾ��������";
	$tr["Print sizes in human readable format"] = "�ʺ��Ķ��ĸ�ʽ";
	$tr["Search on"] = "������";
	$tr["hosts"] = "����";		# SMB and FTP hosts
	$tr["file size"] = "�ļ���С";
	$tr["Only files added since"] = "�����ļ������������";
	$tr["Hits per page"] = "ÿҳ������";
	$tr["Your history"] = "���������ʷ";
	$tr["Statistics"] = "ͳ��";
	$tr["SMBs"] = "SMB ������";
	$tr["FTPs"] = "FTP ������";
	$tr["Directories"] = "Ŀ¼";
	$tr["Files"] = "�ļ�";
	$tr["Total size"] = "�ܹ���С";
	$tr["Queries"] = "��ѯ";
	$tr["and"] = "��";
	$tr["others"] = "����";
	$tr["uses some code from"] = "ʹ�ò��ִ�������";
	$tr["is distributed under the"] = "��������";


	# SEARCH.PHP:
	$tr["Results for"] = "������� ";
	$tr["More"] = "����";
	$tr["New search"] = "������";
	$tr["No hits"] = "������";
	$tr["Hit"] = "����";
	$tr["Hits"] = "����";


	# BROWSE.PHP
	$tr["Name"] = "����";
	$tr["Size"] = "��С";
	$tr["Date"] = "���� ʧ��";
}
$tr["Last change"] = "������";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "���";
$tr["Update"] = "����";
$tr["Edit"] = "�༭";
$tr["Scan"] = "Scan";
$tr["Delete"] = "ɾ��";
$tr["Purge"] = "���";
$tr["Cancel"] = "ȡ��";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "��� FTP ������";
	$tr["Edit FTP server"] = "�༭ FTP ������";
	$tr["Delete FTP server"] = "ɾ�� FTP ������";
	$tr["Purge FTP server"] = "��� FTP ������";
	$tr["Add SMB server"] = "��� SMB ������";
	$tr["Edit SMB server"] = "�༭ SMB ������";
	$tr["Delete SMB server"] = "ɾ�� SMB ������";
	$tr["Purge SMB server"] = "��� SMB ������";

	# results and errors
	$tr["Host name must be specified"] = "��������ָ��";
	$tr["Workgroup must be specified"] = "��������ָ��";
	$tr["is not valid IP address"] = "���ǺϷ�IP��ַ";
	$tr["is not valid DNS name or IP address"] = "���ǺϷ���������IP��ַ";
	$tr["Login must be specified"] = "��¼����ָ��";
	$tr["Port is not valid"] = "�˿ڲ��Ϸ�";
	$tr["is not valid file name with absolute path"] = "���ǺϷ�������·�����ļ���";
	$tr["was added to list"] = "�Ѿ����";
	$tr["is already in the list"] = "�Ѿ��������б���";
	$tr["was deleted"] = "�Ѿ�ɾ��";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "�����´βɼ���ɾ��";
	$tr["will be purged during next crawl"] = "�����´βɼ������";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "��� %s ʱ��������";
	$tr["__host_updated__"] = " %s  �����Ϣ�Ѹ���";

	# data fields
	$tr["Host"] = "����";
	$tr["Host (DNS name or IP)"] = "��������IP��ַ";
	$tr["Login"] = "��¼��";
	$tr["Password"] = "����";
	$tr["Port"] = "�˿�";
	$tr["Starting directory"] = "��ʼĿ¼";
	$tr["List of files"] = "�ļ��б�";
	$tr["Use passive mode"] = "ʹ��PASV";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "��ע";
	$tr["Editable by"] = "�ɱ༭ ��";
	$tr["IP address"] = "IP��ַ";
	$tr["Workgroup"] = "������";
	$tr["Shares"] = "����";
	$tr["Name"] = "����";
	$tr["File size"] = "�ļ���С";
	$tr["Period"] = "����";
	$tr["Counter"] = "����";
	$tr["Scan order"] = "ɨ��˳��";
	$tr["Expire count"] = "���ڼ���";
	$tr["Flags"] = "��־";
	$tr["Action"] = "����";
	$tr["delete"] = "ɾ��";
	$tr["purge"] = "���";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "You are welcome to write here any comments, ideas, ...";
	$tr["Your name or nickname"] = "Your name or nickname";
	$tr["Your e-mail"] = "Your e-mail";
	$tr["optional"] = "optional";
	$tr["Comment text"] = "Comment text";
	$tr["Submit"] = "Submit";
	$tr["Delete comment"] = "Delete comment";
	$tr["Do you really want to delete this comment?"] = "Do you really want to delete this comment?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "�޸�����";
	$tr["Logout"] = "ע��";
	$tr["Password was changed"] = "�������޸�";
	$tr["Password cannot be empty"] = "���벻��Ϊ��";
	$tr["Passwords do not match"] = "���벻ƥ��";
	$tr["New password"] = "������";
	$tr["Reenter password"] = "ȷ������";
	$tr["Login name"] = "�༭��¼��";
	$tr["Password"] = "����";
	$tr["Login"] = "��¼";
	$tr["There are no admins."] = "�޹���Ա";
	$tr["Admin name"] = "����Ա����";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Ȩ��";
	$tr["Edit FTP list"] = "�༭ FTP �б�";
	$tr["Edit SMB list"] = "�༭ SMB �б�";
	$tr["Purge FTP server from list"] = "��� FTP �������б�";	# purge == completely delete
	$tr["Purge SMB server from list"] = "��� SMB �������б�";
	$tr["Delete comments"] = "ɾ�� ����";
}


# MENU.PHP:
$tr["Search"] = "����";
$tr["FTP server list"] = "FTP �������б�";
$tr["SMB server list"] = "SMB �������б�";
$tr["Comments"] = "����";
$tr["Admin"] = "����";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "����";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "����";
$tr["Can't read configuration file"] = "��ȡ����ʧ��";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME ����ָ��";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN ����ָ��";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD ����ָ��";
$tr["Can't connect to database"] = "�����������ݿ�";
$tr["Can't connect to master database"] = "���������������ݿ�";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "����";
	else
		echo "����";
	echo " ��ʱ ", sprintf ("%0.2f", $s), " ��";
}

function page_generated ($host, $time)
{
	echo "��ѯҳ������ ",
		$host, strftime (" �� %Y��%d��%m�� %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "�����Ҫ ", ($purge ? "���" : "ɾ��"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "�������Ϊ����Ա��½������� $type ����";
}

function permition_host_edit ($HID)
{
	return "û���������� HID = $HID ����<br />�������Ϊ����Ա��½�����޸�����";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "û���������� HID = $HID ����<br />�������Ϊ����Ա��½���� " . ($purge ? "���" : "�༭�����") . " $type ����";
}

function permition_comment_delete ($CID)
{
	return "û������ CID = $CID ����<br />�������Ϊ����Ա��½����ɾ������";
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
