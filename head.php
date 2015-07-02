<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

header("Cache-control: no-cache");
header("Pragma: no-cache");
header("Content-Type: text/html; charset=" . $encoding);

ob_start();

echo '<?xml version="1.0" encoding="', $encoding, '" ?>', "\n";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $encoding; ?>" />
    <meta http-equiv="Content-Language" content="<?php echo $lang; ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="MSSmartTagsPreventParsing" content="TRUE" />


    <title>Fast File Search</title>
    <link rel="StyleSheet" type="text/css" href="styles.css"/>
    <link rel="StyleSheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.css" />
    <link rel="StyleSheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap-theme.min.css" />

    <!--[if lt IE 9]>
    <script src="bootstrap-3.3.4-dist/js/html5shiv.js"></script>
    <script src="bootstrap-3.3.4-dist/js/respond.js"></script>
    <![endif]-->


    <script type="text/javascript" src="bootstrap-3.3.4-dist/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.js"></script>