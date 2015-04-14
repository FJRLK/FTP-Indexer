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

$months = array ("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "ISO images";
	$tr["pictures"] = "pictures";
	$tr["software"] = "software";

	# the predefined times in select.php
	$tr["today"] = "today";
	$tr["yesterday"] = "yesterday";
	$tr["2 days ago"] = "2 days ago";
	$tr["3 days ago"] = "3 days ago";
	$tr["week ago"] = "week ago";
	$tr["2 weeks ago"] = "2 weeks ago";
	$tr["month ago"] = "month ago";

	$tr["Searching is case insensitive."] = "Searching is case insensitive.";
	$tr["Files (wildcard (?,*))"] = "Files (wildcard (?,*))";
	$tr["Files (substring)"] = "Files (substring)";
	$tr["Files (regular expression)"] = "Files (regular expression)";
	$tr["Directories (substring)"] = "Directories (substring)";
	$tr["Directories (wildcard (?,*))"] = "Directories (wildcard (?,*))";
	$tr["Directories (regular expression)"] = "Directories (regular expression)";
	$tr["Search!"] = "Search";
	$tr["Fill in the parameters for"] = "Fill in the parameters for";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Save settings (cookies required)";
	$tr["Show only online hosts"] = "Show only online hosts";
	$tr["Print sizes in human readable format"] = "Print sizes in human readable format";
	$tr["Search on"] = "Search on";
	$tr["hosts"] = "hosts";		# SMB and FTP hosts
	$tr["file size"] = "file size";
	$tr["Only files added since"] = "Only files added since";
	$tr["Hits per page"] = "Hits per page";
	$tr["Your history"] = "Your history";
	$tr["Statistics"] = "Statistics";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Directories";
	$tr["Files"] = "Files";
	$tr["Total size"] = "Total size";
	$tr["Queries"] = "Queries";
	$tr["and"] = "and";
	$tr["others"] = "others";
	$tr["uses some code from"] = "uses some code from";
	$tr["is distributed under the"] = "is distributed under the";


	# SEARCH.PHP:
	$tr["Results for"] = "Results for";
	$tr["More"] = "More";
	$tr["New search"] = "New search";
	$tr["No hits"] = "No hits";
	$tr["Hit"] = "Hit";
	$tr["Hits"] = "Hits";


	# BROWSE.PHP
	$tr["Name"] = "Name";
	$tr["Size"] = "Size";
	$tr["Date"] = "Date";
}
$tr["Last change"] = "Last change";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Add";
$tr["Update"] = "Update";
$tr["Edit"] = "Edit";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Delete";
$tr["Purge"] = "Purge";
$tr["Cancel"] = "Cancel";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Add FTP server";
	$tr["Edit FTP server"] = "Edit FTP server";
	$tr["Delete FTP server"] = "Delete FTP server";
	$tr["Purge FTP server"] = "Purge FTP server";
	$tr["Add SMB server"] = "Add SMB server";
	$tr["Edit SMB server"] = "Edit SMB server";
	$tr["Delete SMB server"] = "Delete SMB server";
	$tr["Purge SMB server"] = "Purge SMB server";

	# results and errors
	$tr["Host name must be specified"] = "Host name must be specified";
	$tr["Workgroup must be specified"] = "Workgroup must be specified";
	$tr["is not valid IP address"] = "is not valid IP address";
	$tr["is not valid DNS name or IP address"] = "is not valid DNS name or IP address";
	$tr["Login must be specified"] = "Login must be specified";
	$tr["Port is not valid"] = "Port is not valid";
	$tr["is not valid file name with absolute path"] = "is not valid file name with absolute path";
	$tr["was added to list"] = "was added to list";
	$tr["is already in the list"] = "is already in the list";
	$tr["was deleted"] = "was deleted";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "will be deleted during next crawl";
	$tr["will be purged during next crawl"] = "will be purged during next crawl";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "There was an error while adding %s to list";
	$tr["__host_updated__"] = "Information about %s was updated";

	# data fields
	$tr["Host"] = "Host";
	$tr["Host (DNS name or IP)"] = "Host (DNS name or IP)";
	$tr["Login"] = "Login";
	$tr["Password"] = "Password";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "Starting directory";
	$tr["List of files"] = "List of files";
	$tr["Use passive mode"] = "Use passive mode";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Comment";
	$tr["Editable by"] = "Editable by";
	$tr["IP address"] = "IP address";
	$tr["Workgroup"] = "Workgroup";
	$tr["Shares"] = "Shares";
	$tr["Name"] = "Name";
	$tr["File size"] = "File size";
	$tr["Period"] = "Period";
	$tr["Counter"] = "Counter";
	$tr["Scan order"] = "Scan order";
	$tr["Expire count"] = "Expire count";
	$tr["Flags"] = "Flags";
	$tr["Action"] = "Action";
	$tr["delete"] = "delete";
	$tr["purge"] = "purge";
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
	$tr["Change password"] = "Change password";
	$tr["Logout"] = "Logout";
	$tr["Password was changed"] = "Password was changed";
	$tr["Password cannot be empty"] = "Password cannot be empty";
	$tr["Passwords do not match"] = "Passwords do not match";
	$tr["New password"] = "New password";
	$tr["Reenter password"] = "Reenter password";
	$tr["Login name"] = "Login name";
	$tr["Password"] = "Password";
	$tr["Login"] = "Login";
	$tr["There are no admins."] = "There are no admins.";
	$tr["Admin name"] = "Admin name";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Rights";
	$tr["Edit FTP list"] = "Edit FTP list";
	$tr["Edit SMB list"] = "Edit SMB list";
	$tr["Purge FTP server from list"] = "Purge FTP server from list";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Purge SMB server from list";
	$tr["Delete comments"] = "Delete comments";
}


# MENU.PHP:
$tr["Search"] = "Search";
$tr["FTP server list"] = "FTP server list";
$tr["SMB server list"] = "SMB server list";
$tr["Comments"] = "Comments";
$tr["Admin"] = "Admin";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Help";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Error";
$tr["Can't read configuration file"] = "Can't read configuration file";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME must be defined in configuration file";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN must be defined in configuration file";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD must be defined in configuration file";
$tr["Can't connect to database"] = "Can't connect to database";
$tr["Can't connect to master database"] = "Can't connect to master database";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "hit";
	else
		echo "hits";
	echo " in ", sprintf ("%0.2f", $s), " seconds";
}

function page_generated ($host, $time)
{
	echo "This page was generated for query by ",
		$host, strftime (" on %d.%m.%Y at %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Do you really want to ", ($purge ? "purge" : "delete"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "You have to login as admin that has right to add $type host";
}

function permition_host_edit ($HID)
{
	return "There is no host with HID = $HID in the list or<br />you have to login as admin to be able to edit this host";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "There is no host with HID = $HID in the list or<br />you have to login as admin that has right to " . ($purge ? "purge" : "edit or purge") . " $type hosts";
}

function permition_comment_delete ($CID)
{
	return "There is no comment with CID = $CID or<br />you have to login as admin that has right to delete comments";
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
