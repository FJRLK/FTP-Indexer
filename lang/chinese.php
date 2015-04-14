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

$months = array ("一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO 映象";
	$tr["pictures"] = "图片";
	$tr["software"] = "软件";

	# the predefined times in select.php
	$tr["today"] = "今日";
	$tr["yesterday"] = "昨日";
	$tr["2 days ago"] = "两天前";
	$tr["3 days ago"] = "三天前";
	$tr["week ago"] = "一周前";
	$tr["2 weeks ago"] = "两周前";
	$tr["month ago"] = "一个月前";

	$tr["Searching is case insensitive."] = "搜索忽略大小写。";
	$tr["Files (wildcard (?,*))"] = "文件 (通配符 (?,*))";
	$tr["Files (substring)"] = "文件 (子串)";
	$tr["Files (regular expression)"] = "文件 (正则表达式)";
	$tr["Directories (substring)"] = "目录 (子串)";
	$tr["Directories (wildcard (?,*))"] = "目录 (通配符 (?,*))";
	$tr["Directories (regular expression)"] = "目录 (正则表达式)";
	$tr["Search!"] = "搜索";
	$tr["Fill in the parameters for"] = "填写参数：";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "保存配置 (需要cookies)";
	$tr["Show only online hosts"] = "只显示在线主机";
	$tr["Print sizes in human readable format"] = "适合阅读的格式";
	$tr["Search on"] = "搜索于";
	$tr["hosts"] = "主机";		# SMB and FTP hosts
	$tr["file size"] = "文件大小";
	$tr["Only files added since"] = "仅限文件添加日期晚于";
	$tr["Hits per page"] = "每页面命中";
	$tr["Your history"] = "你的搜索历史";
	$tr["Statistics"] = "统计";
	$tr["SMBs"] = "SMB 服务器";
	$tr["FTPs"] = "FTP 服务器";
	$tr["Directories"] = "目录";
	$tr["Files"] = "文件";
	$tr["Total size"] = "总共大小";
	$tr["Queries"] = "查询";
	$tr["and"] = "与";
	$tr["others"] = "其他";
	$tr["uses some code from"] = "使用部分代码来自";
	$tr["is distributed under the"] = "发布基于";


	# SEARCH.PHP:
	$tr["Results for"] = "搜索结果 ";
	$tr["More"] = "更多";
	$tr["New search"] = "新搜索";
	$tr["No hits"] = "无命中";
	$tr["Hit"] = "命中";
	$tr["Hits"] = "命中";


	# BROWSE.PHP
	$tr["Name"] = "名称";
	$tr["Size"] = "大小";
	$tr["Date"] = "舞曲 失败";
}
$tr["Last change"] = "最后更新";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "添加";
$tr["Update"] = "更新";
$tr["Edit"] = "编辑";
$tr["Scan"] = "Scan";
$tr["Delete"] = "删除";
$tr["Purge"] = "清除";
$tr["Cancel"] = "取消";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "添加 FTP 服务器";
	$tr["Edit FTP server"] = "编辑 FTP 服务器";
	$tr["Delete FTP server"] = "删除 FTP 服务器";
	$tr["Purge FTP server"] = "清除 FTP 服务器";
	$tr["Add SMB server"] = "添加 SMB 服务器";
	$tr["Edit SMB server"] = "编辑 SMB 服务器";
	$tr["Delete SMB server"] = "删除 SMB 服务器";
	$tr["Purge SMB server"] = "清除 SMB 服务器";

	# results and errors
	$tr["Host name must be specified"] = "主机名须指定";
	$tr["Workgroup must be specified"] = "工作组须指定";
	$tr["is not valid IP address"] = "不是合法IP地址";
	$tr["is not valid DNS name or IP address"] = "不是合法主机名或IP地址";
	$tr["Login must be specified"] = "登录名须指定";
	$tr["Port is not valid"] = "端口不合法";
	$tr["is not valid file name with absolute path"] = "不是合法带绝对路径的文件名";
	$tr["was added to list"] = "已经添加";
	$tr["is already in the list"] = "已经存在于列表中";
	$tr["was deleted"] = "已经删除";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "将于下次采集后被删除";
	$tr["will be purged during next crawl"] = "将于下次采集后被清除";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "添加 %s 时发生错误";
	$tr["__host_updated__"] = " %s  相关信息已更新";

	# data fields
	$tr["Host"] = "主机";
	$tr["Host (DNS name or IP)"] = "主机名或IP地址";
	$tr["Login"] = "登录名";
	$tr["Password"] = "密码";
	$tr["Port"] = "端口";
	$tr["Starting directory"] = "起始目录";
	$tr["List of files"] = "文件列表";
	$tr["Use passive mode"] = "使用PASV";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "备注";
	$tr["Editable by"] = "可编辑 被";
	$tr["IP address"] = "IP地址";
	$tr["Workgroup"] = "工作组";
	$tr["Shares"] = "共享";
	$tr["Name"] = "名字";
	$tr["File size"] = "文件大小";
	$tr["Period"] = "周期";
	$tr["Counter"] = "记数";
	$tr["Scan order"] = "扫描顺序";
	$tr["Expire count"] = "过期计数";
	$tr["Flags"] = "标志";
	$tr["Action"] = "动作";
	$tr["delete"] = "删除";
	$tr["purge"] = "清除";
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
	$tr["Change password"] = "修改密码";
	$tr["Logout"] = "注销";
	$tr["Password was changed"] = "密码已修改";
	$tr["Password cannot be empty"] = "密码不能为空";
	$tr["Passwords do not match"] = "密码不匹配";
	$tr["New password"] = "新密码";
	$tr["Reenter password"] = "确认密码";
	$tr["Login name"] = "编辑登录名";
	$tr["Password"] = "密码";
	$tr["Login"] = "登录";
	$tr["There are no admins."] = "无管理员";
	$tr["Admin name"] = "管理员名字";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "权限";
	$tr["Edit FTP list"] = "编辑 FTP 列表";
	$tr["Edit SMB list"] = "编辑 SMB 列表";
	$tr["Purge FTP server from list"] = "清除 FTP 服务器列表";	# purge == completely delete
	$tr["Purge SMB server from list"] = "清除 SMB 服务器列表";
	$tr["Delete comments"] = "删除 评论";
}


# MENU.PHP:
$tr["Search"] = "搜索";
$tr["FTP server list"] = "FTP 服务器列表";
$tr["SMB server list"] = "SMB 服务器列表";
$tr["Comments"] = "评论";
$tr["Admin"] = "管理";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "帮助";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "错误";
$tr["Can't read configuration file"] = "读取配置失败";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME 必须指定";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN 必须指定";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD 必须指定";
$tr["Can't connect to database"] = "不能连接数据库";
$tr["Can't connect to master database"] = "不能连接主控数据库";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "命中";
	else
		echo "命中";
	echo " 耗时 ", sprintf ("%0.2f", $s), " 秒";
}

function page_generated ($host, $time)
{
	echo "查询页面生成 ",
		$host, strftime (" 于 %Y年%d月%m日 %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "你真的要 ", ($purge ? "清除" : "删除"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "你必须作为管理员登陆才能添加 $type 主机";
}

function permition_host_edit ($HID)
{
	return "没有主机符合 HID = $HID 或者<br />你必须作为管理员登陆才能修改主机";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "没有主机符合 HID = $HID 或者<br />你必须作为管理员登陆才能 " . ($purge ? "清除" : "编辑或清除") . " $type 主机";
}

function permition_comment_delete ($CID)
{
	return "没有评论 CID = $CID 或者<br />你必须作为管理员登陆才能删除评论";
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
