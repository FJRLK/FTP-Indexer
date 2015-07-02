<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

$item = array (
	# item ID, item script, hide this item?
	array (
		"name" => "search",
		"text" => $tr["Search"],
		"script" => "select.php",
		"hidden" => 0),
	array (
		"name" => "ftp_list",
		"text" => $tr["FTP server list"],
		"script" => "ftp_list.php",
		"hidden" => $c["FTP_DISABLE"]),
	array (
		"name" => "comments",
		"text" => $tr["Comments"],
		"script" => "comments.php",
		"hidden" => 0),
	array (
		"name" => "admin",
		"text" => $tr["Admin"],
		"script" => "admin.php",
		"hidden" => 0),
	);
$nitem = count ($item);

if ($ftp_list_text)
	$item[1]["text"] = $ftp_list_text;
if ($smb_list_text)
	$item[2]["text"] = $smb_list_text;
if ($comments_text)
	$item[3]["text"] = $comments_text;

#for ($i = 0; $i < $nitem; $i++)
#{
#	$color[$i] = ($active_item == $item[$i][0]) ? $color_wt : $color_wb;
#}
if ($form_action)
{
	echo '<form action="', $form_action, '" method="post">', "\n";
	echo '<input type="hidden" name="lang" value="', $lang, '" />', "\n";
	echo '<input type="hidden" name="AID" value="', $AID, '" />', "\n";
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div align="center" class="container">
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
                <?php
                for ($i = 0; $i < $nitem; $i++)
                {

                    if ($item[$i]["hidden"])
                        continue;
                    if ($active_item == $item[$i]["name"])
                        echo '<li class="active"><a href="',$item[$i]["script"],'?lang=en$aid&position=0&sort_by=size"><b>', $item[$i]["text"], '</b></a></li>';
                    else
                        echo '<li><a href="',$item[$i]["script"],'?lang=en$aid&position=0&sort_by=size"><b>', $item[$i]["text"], '</b></a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
