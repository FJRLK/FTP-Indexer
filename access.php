<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

$AID = intval (getvar ("AID"));
$admin_login = trim (getvar ("admin_login"));
$admin_password = getvar ("admin_password");
$REMOTE_ADDR = getvar_server ("REMOTE_ADDR");

$now = time ();
$rights = 0;
define ("RIGHT_FTP_EDIT",  1 << 0);
define ("RIGHT_FTP_PURGE", 1 << 1);
define ("RIGHT_SMB_EDIT",  1 << 2);
define ("RIGHT_SMB_PURGE", 1 << 3);
define ("RIGHT_COMMENTS",  1 << 4);
define ("RIGHT_FTP_ADD",   1 << 5);
define ("RIGHT_SMB_ADD",   1 << 6);

if ($connected2master)
{
	if ($AID)
	{
		$q = mysql_query ("SELECT Login,Rights,LoginTime,LoginIP FROM admin WHERE AID=$AID", $mdb);
		if ($q)
		{
			if ($row = mysql_fetch_assoc ($q))
			{
				if ($row["LoginTime"] + 900 >= $now && $REMOTE_ADDR == $row["LoginIP"])
				{
					$rights = $row["Rights"];
					$admin_login = $row["Login"];
					mysql_query ("UPDATE admin SET LoginTime=$now WHERE AID=$AID", $mdb);
				}
				else
					$AID = 0;
			}
			else
				$AID = 0;
			mysql_free_result ($q);
		}
		else
			$AID = 0;
		if (!$AID)
			setcookie ("AID", $AID, 0x7fffffff, ereg_replace ('[^/]*$', '', getvar_server ("SCRIPT_NAME")));
	}
	elseif ($admin_login != '')
	{
		$admin_password = md5 ($admin_login . '-' . $admin_password);
		echo $admin_login.'<br>'.$admin_password;	
		$q = mysql_query ("SELECT AID,Rights FROM admin WHERE Login='" . addslashes ($admin_login) . "' AND PassWord='$admin_password'", $mdb);
		if ($q)
		{
			if ($row = mysql_fetch_assoc ($q))
			{
				$AID = $row["AID"];
				$rights = $row["Rights"];
				$ip_address = addslashes ($REMOTE_ADDR);
				mysql_query ("UPDATE admin SET LoginTime=$now,LoginIP='$ip_address' WHERE AID=$AID", $mdb);
				setcookie ("AID", $AID, 0x7fffffff, ereg_replace ('[^/]*$', '', getvar_server ("SCRIPT_NAME")));
			}
			mysql_free_result ($q);
		}
	}
}

if ($c["ADD_FTP_HOST_ENABLED"])
	$rights |= RIGHT_FTP_ADD;
if ($c["ADD_SMB_HOST_ENABLED"])
	$rights |= RIGHT_SMB_ADD;

if ($AID)
{
	$aid = "&amp;AID=$AID";
	$aid_url = "&AID=$AID";
}
else
{
	$aid = "";
	$aid_url = "";
}

?>
