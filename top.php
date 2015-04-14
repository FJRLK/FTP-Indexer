<?php
define ('FAST_FILE_SEARCH', 1);

require_once("config.php");

$flags = array(
    # "lang" => image description
    "en" => array("src" => "flag/us.gif", "width" => 38, "height" => 20, "alt" => "English"),
    "bg" => array("src" => "flag/bg.gif", "width" => 30, "height" => 20, "alt" => "Bulgarian"),
    "cs" => array("src" => "flag/cz.gif", "width" => 30, "height" => 20, "alt" => "Czech"),
    "de" => array("src" => "flag/de.gif", "width" => 30, "height" => 20, "alt" => "German"),
    "es" => array("src" => "flag/es.gif", "width" => 30, "height" => 20, "alt" => "Spanish"),
    "fr" => array("src" => "flag/fr.gif", "width" => 30, "height" => 20, "alt" => "French"),
    "hu" => array("src" => "flag/hu.gif", "width" => 30, "height" => 20, "alt" => "Hungarian"),
    "lt" => array("src" => "flag/lt.gif", "width" => 30, "height" => 20, "alt" => "Lithuanian"),
    "nl" => array("src" => "flag/nl.gif", "width" => 30, "height" => 20, "alt" => "Dutch"),
    "nb" => array("src" => "flag/no.gif", "width" => 30, "height" => 20, "alt" => "Norwegian"),
    "pl" => array("src" => "flag/pl.gif", "width" => 30, "height" => 20, "alt" => "Polish"),
    "ro" => array("src" => "flag/ro.gif", "width" => 30, "height" => 20, "alt" => "Romanian"),
    "ru" => array("src" => "flag/ru.gif", "width" => 30, "height" => 20, "alt" => "Russian"),
    "sk" => array("src" => "flag/sk.gif", "width" => 30, "height" => 20, "alt" => "Slovak"),
    "uk" => array("src" => "flag/uk.gif", "width" => 30, "height" => 20, "alt" => "Ukrainian"),
    "zh" => array("src" => "flag/zh.gif", "width" => 30, "height" => 20, "alt" => "Chinese"),
    # the following translations have not been written yet
    "it" => array("src" => "flag/it.gif", "width" => 30, "height" => 20, "alt" => "Italian"),
);


echo '<?xml version="1.0" encoding="', $encoding, '" ?>', "\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fast File Search</title>
    <link rel="StyleSheet" type="text/css" href="styles.css"/>
    <link rel="StyleSheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.css" />

    <!--[if lt IE 9]>
    <script src="bootstrap-3.3.4-dist/js/html5shiv.js"></script>
    <script src="bootstrap-3.3.4-dist/js/respond.js"></script>
    <![endif]-->


    <script type="text/javascript" src="bootstrap-3.3.4-dist/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a target="_blank" href="http://172.24.1.1/">PTAWUG Wiki</a></li>
                <li><a target="_blank" href="http://172.24.110.203/">Tracker @ PC</a></li>
                <li><a target="_blank" href="http://172.24.110.199:9090/">Web IRC</a></li>
                <li><a target="_blank" href="http://172.24.13.7/">Gallery</a></li>
                <li><a target="_blank" href="http://172.24.97.13/">iZariam</a></li>
                <li><a target="_blank" href="http://172.25.41.5/">WUG TV</a></li>
            </ul>
        </div>
    </div>
</nav>
<div style="gin-top:60px">

    <table border="0" cellpadding="1" cellspacing="0" style="width: 100%">
        <tr>
            <td align="center">
                    <table border="0" cellpadding="1" cellspacing="0">
                        <tr>
                            <td background="logo.png" width="302" height="62" align="right" valign="bottom">
                                <div class="l1"><b>Version <?php echo $c["VERSION"]; ?>&nbsp;&nbsp;</b></div>
                            </td>
                        </tr>
                    </table>
            </td>
        </tr>
        <tr>
            <td style="height: 9px"></td>
        </tr>
            <tr>
                <td align="center">

                </td>
            </tr>
    </table>
</div>
</body>
</html>
