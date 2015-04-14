<?php
define ('FAST_FILE_SEARCH', 1);

require_once("config.php");
$frame_height = (count($langs) > 1) ? 100 : 76;

echo '<?xml version="1.0" encoding="', $encoding, '" ?>', "\n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PTAWUG | Fast File Search</title>
    <link rel="StyleSheet" type="text/css" href="styles.css"/>
    <link rel="StyleSheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.css" />
    <link rel="StyleSheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap-theme.min.css" />

    <!--[if lt IE 9]>
    <script src="bootstrap-3.3.4-dist/js/html5shiv.js"></script>
    <script src="bootstrap-3.3.4-dist/js/respond.js"></script>
    <![endif]-->


    <script type="text/javascript" src="bootstrap-3.3.4-dist/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.js"></script>
</head>
<body>
<div class="navbar-fixed-top" style="width:100%;top:0;left:0;right:0;position:absolute;height:135px">
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
    <div style="clear: both;height: 60px"></div>
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
<iframe name="body" src="select.php" frameborder="0" marginwidth="4" marginheight="4" scrolling="auto" style="width: 100%;top: 0;position: absolute; left: 0;right: 0; bottom: 0; height: 100%;padding-top:135px"></iframe>
</body>
</html>
