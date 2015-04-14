<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_COMMENTS', 1);

require_once ("db.php");

$per_page = 10;
$position = intval (getvar ("position"));
$CID = intval (getvar ("CID"));
$name = addslashes (trim (getvar ("name")));
$email = addslashes (trim (getvar ("email")));
$comment = addslashes (ereg_replace ("\r", "", trim (getvar ("comment"))));

if ($connected2master)
{
    if (getvar ('submit'))
    {
        if ($comment)
        {
            mysql_query ("LOCK TABLES comments WRITE", $mdb);
            $now = time ();
            $since = $now - 24 * 3600;
            $q = mysql_query ("SELECT CID FROM comments WHERE Time>=$since AND Name='$name' AND Email='$email' AND Comment='$comment'", $mdb);
            if ($q)
            {
                if ($row = mysql_fetch_row ($q))	# trying to submit the same comment since $since
                    mysql_query ("UPDATE comments SET Time=$now WHERE CID=" . $row[0], $mdb);
                else
                    mysql_query ("INSERT INTO comments (Time,Name,Email,Comment) VALUES ($now,'$name','$email','$comment')", $mdb);
                mysql_free_result ($q);
            }
            mysql_query ("UNLOCK TABLES", $mdb);
        }
    }
    else if (getvar ('delete'))
    {
        if ($CID && ($rights & RIGHT_COMMENTS))
        {
            mysql_query ("DELETE FROM comments WHERE CID=$CID", $mdb);
        }
    }

    $q = mysql_query ("SELECT COUNT(*) FROM comments", $mdb);
    get_position ($q, $per_page);
}

require_once ("head.php");
require_once ("body.php");
$active_item = "comments";
$menu_width = 850;
$form_action = "comments.php";
require_once ("menu.php");
?>

<table width="100%" border="0" cellpadding="4" cellspacing="0">
    <tr><td align="center" class="h1">
            <?php
            if ($connected2master)
                echo $tr["You are welcome to write here any comments, ideas, ..."];
            else
                echo '<br /><font color="', $color_error, '" class="h1">', $tr["Can't connect to master database"], '</font><br /><br />';
            ?>
        </td></tr>
</table>

<?php
if ($connected2master)
{
    ?>
    <div style="clear:both;height:20px"></div>
    <div class="jumbotron">
        <div class="container">
            <input type="hidden" name="position" value="0" />
            <div class="form-group">
                <div class="col-lg-8">
                    Comment text
                    <textarea name="comment" rows="7" cols="50" class="form-control"></textarea>
                </div>
                <div class="col-lg-4">
                    Your name or nickname (optional):<br />
                    <input type="text" name="name" size="50" class="form-control"/><br />
                    Your e-mail (optional):<br />
                    <input type="text" name="email" size="50" class="form-control"/><br />
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
                </div>
            </div>
        </div>
    </div>

<?php
}

if ($connected2master && $n)
{
    ?>

    <table class="table-bordered table table-responsive">
        <thead>
        <tr>
            <th>
                <h4>Comments</h4>
            </th>
        </tr>
        <tr>
            <td>
                <?php
                echo_links ("comments.php", "");
                ?>
            </td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="3">
                    <?php
                    $q = mysql_query ("SELECT * FROM comments ORDER BY Time DESC LIMIT $position,$per_page", $mdb);
                    for ($i = 0; $row = mysql_fetch_assoc ($q); $i++)
                    {
                        ?>
                        <tr><td>
                                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                                    <tr bgcolor="<?php echo $color_tt; ?>">
                                        <td>
                                            <?php
                                            echo htmlspecialchars ($row["Name"]);
                                            if ($row["Email"])
                                                echo " - ", htmlspecialchars (mangle_email($row['Email']));
                                            else
                                                echo '&nbsp;';
                                            ?>
                                        </td>
                                        <td align="right">
                                            <?php
                                            echo strftime ("%Y-%m-%d %H:%M:%S", $row["Time"]);
                                            if ($rights & RIGHT_COMMENTS)
                                                echo '&nbsp;&nbsp;&nbsp;<a href="comment_del.php?lang=', $lang, $aid, '&amp;CID=', $row["CID"], '&amp;position=', $position, '">', $tr["Delete"], '</a>';
                                            ?>
                                        </td>
                                    </tr>
                                    <tr bgcolor="<?php echo $color_tb; ?>">
                                        <td colspan="2"><?php echo ereg_replace ("\n", "<br />", htmlspecialchars ($row["Comment"])); ?></td>
                                    </tr>
                                </table>
                            </td></tr>
                    <?php
                    }
                    mysql_free_result ($q);
                    ?>
                </table>
            </td></tr>
        <tr><td bgcolor="<?php echo $color_wb; ?>">
                <?php
                echo_links ("comments.php", "");
                ?>
            </td></tr>
        </tbody>
    </table>

<?php
}
require_once ("foot.php");
?>
