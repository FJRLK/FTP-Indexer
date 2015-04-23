<?php
define ('FAST_FILE_SEARCH', 1);
define ('FFS_SEARCH', 1);

require_once("db.php");

# Feel free to edit these two arrays:

# types - name (from the translation array), search string [,min size [,max size]]
# examples:
#	array ($tr["example 1"], "*.ext1", "50M", "1G"),
#	array ($tr["example 2"], "*.ext2", "30m"),
$file_types = array(
    array($tr["ISO images"], "*.iso"),
    array($tr["pictures"], "*.jpg *.jpeg *.gif *.png"),
    array($tr["software"], "*.rpm *.deb *.gz *.bz2"),
);

# times ago - name (from the translation array), time in days before the start of today
$times_ago = array(
    array($tr["today"], 0),
    array($tr["yesterday"], 1),
    array($tr["2 days ago"], 2),
    array($tr["3 days ago"], 3),
    array($tr["week ago"], 7),
    array($tr["2 weeks ago"], 14),
    array($tr["month ago"], 31),
);

function file_types_compare($a, $b)
{
    return strcasecmp($a[0], $b[0]);
}

usort($file_types, "file_types_compare");

$save = FLAG_SAVE;
$advanced = getint(getvar('advanced'), 0, 1);
$today = localtime(time(), 1);
$n_history = 0;
$history[0]["searchstring"] = '';
$history[0]["mode"] = 0;
$history[0]["flags"] = 0;
$history[0]["online_only"] = 0;
$history[0]["human_readable"] = 0;
$history[0]["hosttype"] = HOSTTYPE_SMB | HOSTTYPE_FTP;
$history[0]["scan_smb"] = 1;
$history[0]["scan_ftp"] = 1;
$history[0]["hits"] = 100;
$history[0]["minfilesize"] = "";
$history[0]["maxfilesize"] = "";
$history[0]["date"] = 0;
$history[0]["dateday"] = $today["tm_mday"];
$history[0]["datemonth"] = $today["tm_mon"] + 1;
$history[0]["dateyear"] = $today["tm_year"] + 1900;
$history[0]["timestr"] = "00:00";

$UID = getvar_cookie("UID");
if (is_numeric($UID)) {
    $q = mysql_query("SELECT Current,Save FROM user WHERE UID=$UID", $db);
    if ($q) {
        $row = mysql_fetch_assoc($q);
        mysql_free_result($q);
        if ($row) {
            $current = $row["Current"];
            $save = $row["Save"] & FLAG_SAVE;
            if (var_isset('advanced')) {
                $save_flags = $save | FLAG_ADVANCED * $advanced;
                mysql_query("UPDATE user SET Save=$save_flags WHERE UID=$UID");
            } else {
                $advanced = $row['Save'] & FLAG_ADVANCED;
            }
            if ($save) {
                $q = mysql_query("SELECT Position,SearchString,Mode,HostType,Flags,Date,DateValue,MinSize,MaxSize,Hits FROM history WHERE UID=$UID", $db);
                if ($q) {
                    while ($row = mysql_fetch_assoc($q)) {
                        $i = (256 + $row["Position"] - $current) & 255;
                        if ($i >= $c["HISTORY_COUNT"])
                            continue;
                        $n_history++;
                        $history[$i]["searchstring"] = $row["SearchString"];
                        $history[$i]["mode"] = $row["Mode"];
                        $history[$i]["hosttype"] = $row["HostType"];
                        $history[$i]["scan_smb"] = ($row["HostType"] & HOSTTYPE_SMB) > 0;
                        $history[$i]["scan_ftp"] = ($row["HostType"] & HOSTTYPE_FTP) > 0;
                        if ($history[$i]["scan_smb"] + $history[$i]["scan_ftp"] == 0) {
                            $history[$i]["hosttype"] = HOSTTYPE_SMB | HOSTTYPE_FTP;
                            $history[$i]["scan_smb"] = 1;
                            $history[$i]["scan_ftp"] = 1;
                        }
                        $history[$i]["flags"] = $row["Flags"];
                        $history[$i]["online_only"] = ($row["Flags"] & SEARCH_ONLINE_ONLY) > 0;
                        $history[$i]["human_readable"] = ($row["Flags"] & SEARCH_HUMAN_READABLE) > 0;
                        $history[$i]["date"] = $row["Date"];
                        $date = localtime($row["DateValue"], 1);
                        $history[$i]["timestr"] = sprintf("%02d:%02d", $date["tm_hour"], $date["tm_min"]);
                        if ($date["tm_sec"])
                            $history[$i]["timestr"] .= sprintf(":%02d", $date["tm_sec"]);
                        $history[$i]["dateday"] = $date["tm_mday"];
                        $history[$i]["datemonth"] = $date["tm_mon"] + 1;
                        $history[$i]["dateyear"] = $date["tm_year"] + 1900;
                        if ($row["MinSize"] > 0) {
                            if ($row["MinSize"] % 0x40000000 == 0)
                                $history[$i]["minfilesize"] = ($row["MinSize"] / 0x40000000) . "G";
                            elseif ($row["MinSize"] % 1000000000 == 0)
                                $history[$i]["minfilesize"] = ($row["MinSize"] / 1000000000) . "g";
                            elseif ($row["MinSize"] % 0x100000 == 0)
                                $history[$i]["minfilesize"] = ($row["MinSize"] / 0x100000) . "M";
                            elseif ($row["MinSize"] % 1000000 == 0)
                                $history[$i]["minfilesize"] = ($row["MinSize"] / 1000000) . "m";
                            elseif ($row["MinSize"] % 0x400 == 0)
                                $history[$i]["minfilesize"] = ($row["MinSize"] / 0x400) . "K";
                            elseif ($row["MinSize"] % 1000 == 0)
                                $history[$i]["minfilesize"] = ($row["MinSize"] / 1000) . "k";
                            else
                                $history[$i]["minfilesize"] = $row["MinSize"];
                        } else
                            $history[$i]["minfilesize"] = '';
                        if ($row["MaxSize"] < 0xffffffff) {
                            if ($row["MaxSize"] % 0x40000000 == 0)
                                $history[$i]["maxfilesize"] = ($row["MaxSize"] / 0x40000000) . "G";
                            elseif ($row["MaxSize"] % 1000000000 == 0)
                                $history[$i]["maxfilesize"] = ($row["MaxSize"] / 1000000000) . "g";
                            elseif ($row["MaxSize"] % 0x100000 == 0)
                                $history[$i]["maxfilesize"] = ($row["MaxSize"] / 0x100000) . "M";
                            elseif ($row["MaxSize"] % 1000000 == 0)
                                $history[$i]["maxfilesize"] = ($row["MaxSize"] / 1000000) . "m";
                            elseif ($row["MaxSize"] % 0x400 == 0)
                                $history[$i]["maxfilesize"] = ($row["MaxSize"] / 0x400) . "K";
                            elseif ($row["MaxSize"] % 1000 == 0)
                                $history[$i]["maxfilesize"] = ($row["MaxSize"] / 1000) . "k";
                            else
                                $history[$i]["maxfilesize"] = $row["MaxSize"];
                        } else
                            $history[$i]["maxfilesize"] = '';
                        $history[$i]["hits"] = $row["Hits"];
                    }
                    mysql_free_result($q);
                }
            }
        }
    }
}

require_once("head.php");
?>
<script language="JavaScript" type="text/javascript"><!--
    <?php
    if ($advanced) {
    ?>
    function setTime(timestr, iday, imonth, iyear) {
        var form = document.forms[0];
        form.timestr.value = timestr;
        form.dateday.selectedIndex = iday;
        form.datemonth.selectedIndex = imonth;
        form.dateyear.selectedIndex = iyear;
    }
    <?php
    }
    ?>
    function setSearch(extensions, minsize, maxsize) {
        var form = document.forms[0];
        var searchstring = form.searchstring.value;

        // remove any search extensions present
        searchstring = searchstring.replace(/[*][.][^*.\s]+/g, '');

        // remove any plus signs from the beginning of search term
        searchstring = searchstring.replace(/^[+]/g, '');
        searchstring = searchstring.replace(/\s[+]/g, ' ');

        // replace dashes, periods, plus signs, and underscores with a quote mark
        searchstring = searchstring.replace(/[-._+]/g, '?');

        // extract search phrases in quotes
        var regexp = /["'][^'"]+["']/g;
        // " fix syntax highlighting

        var searchphrases = searchstring.match(regexp);
        searchstring = searchstring.replace(regexp, '');

        if (searchphrases)
            for (var index = 0; index < searchphrases.length; index++) {
                // remove quotes from search phrases
                searchphrases[index] = searchphrases[index].replace(/["']/g, '');
                // "); fix syntax highlighting

                // add asterixes to phrases, remove superfluous asterixes
                searchphrases[index] = searchphrases[index].replace(/^[*]*/, '*');
                searchphrases[index] = searchphrases[index].replace(/[*]*$/, '*');
                searchphrases[index] = searchphrases[index].replace(/[*]+/, '*');

                // add quotes to search phrases
                searchphrases[index] = '"' + searchphrases[index] + '"';
            }

        // remove superfluous spaces
        searchstring = searchstring.replace(/\s+/g, ' ');
        searchstring = searchstring.replace(/^\s+/g, '');
        searchstring = searchstring.replace(/\s+$/g, '');

        // split search string into words
        if (searchstring != '')
            var searchwords = searchstring.split(' ');

        if (searchwords) {
            for (var index = 0; index < searchwords.length; index++) {
                // add asterixes to words
                searchwords[index] = searchwords[index].replace(/^[*]*/, '*');
                searchwords[index] = searchwords[index].replace(/[*]*$/, '*');
                searchwords[index] = searchwords[index].replace(/[*]+/, '*');
            }
            if (searchphrases)
                var searchterms = searchwords.concat(searchphrases);
            else
                var searchterms = searchwords;
        }
        else if (searchphrases)
            var searchterms = searchphrases;

        // add AND operators
        if (searchterms)
            searchstring = '+' + searchterms.join(' +');
        else
            searchstring = '';

        form.searchstring.value = searchstring + ' ' + extensions;
        form.mode.selectedIndex = 0;
        <?php
        if ($advanced) {
        ?>
        form.minfilesize.value = minsize;
        form.maxfilesize.value = maxsize;
        <?php
        }
        ?>
    }
    function setAll(searchstring, mode, flags, hosttype, date, timestr, day, month, year, hits, minsize, maxsize) {
        var form = document.forms[0];
        form.searchstring.value = searchstring;
        form.mode.selectedIndex = mode;
        <?php
        if ($advanced) {
        ?>
        form.online_only.checked = ((flags / <?php echo SEARCH_ONLINE_ONLY; ?>) % 2) > 0;
        form.human_readable.checked = ((flags / <?php echo SEARCH_HUMAN_READABLE; ?>) % 2) > 0;
        <?php
            if ($c["FTP_DISABLE"] + $c["SMB_DISABLE"] < 1)
            {
        ?>
        form.scan_smb.checked = ((hosttype / <?php echo HOSTTYPE_SMB; ?>) % 2) > 0;
        form.scan_ftp.checked = ((hosttype / <?php echo HOSTTYPE_FTP; ?>) % 2) > 0;
        <?php
            }
        ?>
        form.date.checked = date;
        form.timestr.value = timestr;
        form.dateday.selectedIndex = day - 1;
        form.datemonth.selectedIndex = month - 1;
        form.dateyear.selectedIndex = year - <?php echo $min_year; ?>;
        form.hits.value = hits;
        form.minfilesize.value = minsize;
        form.maxfilesize.value = maxsize;
        <?php
        }
        ?>
    }
    --></script>
<?php
require_once("body.php");
$active_item = "search";
$menu_width = 850;
$form_action = "search.php";
require_once("menu.php");
?>
<div style="clear:both;height:20px"></div>

<div class="jumbotron">
    <div class="container">
        <span>Searching is case insensitive.</span>

        <div class="form-group row">
            <div class="col-xs-6">
                <input type="text" name="searchstring" value="<?php echo htmlspecialchars($history[0]["searchstring"]); ?>" class="form-control" size="50" />
            </div>

            <div class="col-xs-3">
                <select name="mode" class="form-control col-xs-2">
                    <option value="file_wildcard" <?php if ($history[0]["mode"] == 0) echo " selected=\"selected\""; ?>>Files (wildcard (?,*))</option>
                    <option value="file_substring" <?php if ($c["DENY_SLOW_QUERIES"]) echo " disabled=\"disabled\""; elseif ($history[0]["mode"] == 1) echo " selected=\"selected\""; ?>>Files (substring)</option>
                    <option value="file_regexp" <?php if ($c["DENY_SLOW_QUERIES"]) echo " disabled=\"disabled\""; elseif ($history[0]["mode"] == 2) echo " selected=\"selected\""; ?>>Files (regular expression)</option>
                    <option value="dir_substring" <?php if ($history[0]["mode"] == 3) echo " selected=\"selected\""; ?>>Directories (substring)</option>
                    <option value="dir_wildcard" <?php if ($history[0]["mode"] == 4) echo " selected=\"selected\""; ?>>Directories (wildcard (?,*))</option>
                    <option value="dir_regexp" <?php if ($history[0]["mode"] == 5) echo " selected=\"selected\""; ?>>Directories (regular expression)</option>
                </select>
            </div>
            <div class="col-xs-3">
                <input type="submit" value="Search" class="btn btn-lg btn-success" />
            </div>
        </div>
        <div class="form-group row">
            <?php
            $n = count($file_types);
            for ($i = 0; $i < $n; $i++) {
                if ($i == 0)
                    echo $tr["Fill in the parameters for"], ": ";
                else
                    echo " | ";
                $str = htmlspecialchars(addslashes($file_types[$i][1]));
                $min = htmlspecialchars(addslashes($file_types[$i][2]));
                $max = htmlspecialchars(addslashes($file_types[$i][3]));
                echo '<a href="javascript:setSearch(', "'$str','$min','$max'", ')">', htmlspecialchars($file_types[$i][0]), '</a>';
            }
            ?>
        </div>
        <div class="form-group row">
            <?php
            if ($advanced) {
                echo '<a href="select.php?lang=', $lang, '&amp;advanced=0">', $tr["Hide parameters of advanced search"], '</a>';
            } else {
                echo '<a href="select.php?lang=', $lang, '&amp;advanced=1">', $tr["Show parameters of advanced search"], '</a>';
            }
            ?>
        </div>

        <?php
        if (!$advanced) {
            ?>
            <input type="hidden" name="advanced" value="<?php echo $advanced; ?>"/>
            <input type="hidden" name="save" value="<?php echo $save; ?>"/>
            <input type="hidden" name="dateday" value="<?php echo $history[0]["dateday"]; ?>"/>
            <input type="hidden" name="datemonth" value="<?php echo $history[0]["datemonth"]; ?>"/>
            <input type="hidden" name="dateyear" value="<?php echo $history[0]["dateyear"]; ?>"/>
        <?php
        } else {
            ?>
            <div class="form-group">
                <div class="col-lg-6">
                    <input type="hidden" name="advanced" value="<?php echo $advanced; ?>"/>
                    <div class="checkbox">
                        <input type="checkbox" name="save" value="1" <?php if ($save) echo 'checked="checked" '; ?>/></div><label for="save" class="control-label">Save settings (cookies required)</label>
                    <div class="checkbox">
                        <input type="checkbox" name="online_only" value="1" <?php if ($history[0]["online_only"]) echo 'checked="checked" '; ?>/></div><label for="online_only" class="control-label">Show only online hosts</label>

                    <div class="checkbox">
                        <input type="checkbox" name="human_readable" value="1" <?php if ($history[0]["human_readable"]) echo 'checked="checked" '; ?>/></div><label for="human_readable"  class="control-label">Print sizes in human readable format</label>

                    <input type="hidden" name="scan_ftp"
                           value="<?php echo 1 - $c["FTP_DISABLE"]; ?>"/>
                    <input type="hidden" name="scan_smb"
                           value="<?php echo 1 - $c["SMB_DISABLE"]; ?>"/>
                    <div>
                        <label for="hits"  class="control-label">Hits per page:</label>
                        <input type="text" name="hits" value="<?php echo htmlspecialchars($history[0]["hits"]); ?>" size="5"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <input type="text" name="minfilesize"
                           value="<?php echo htmlspecialchars($history[0]["minfilesize"]); ?>"
                           size="10"/>
                    &lt;= file size &lt;=
                    <input type="text" name="maxfilesize"
                           value="<?php echo htmlspecialchars($history[0]["maxfilesize"]); ?>"
                           size="10"/>

                    <div class="checkbox">
                        <input type="checkbox" name="date"
                               value="1" <?php if ($history[0]["date"]) echo 'checked="checked" '; ?>/></div><label for="date"  class="control-label">Only files added since</label>
                    :<br/>
                    <div class="col-lg-1"></div><div class="col-lg-11"><select name="dateday">
                            <?php
                            $dateday = $history[0]["dateday"];
                            for ($i = 1; $i <= 31; $i++)
                                echo "<option", ($dateday == $i) ? ' selected="selected"' : '', ">$i</option>\n";
                            ?>
                        </select>
                        <select name="datemonth">
                            <?php
                            $datemonth = $history[0]["datemonth"];
                            for ($i = 0; $i < 12; $i++)
                                echo '<option value="', $i + 1, '"', ($datemonth == $i + 1) ? ' selected="selected"' : '', ">$months[$i]</option>\n";
                            ?>
                        </select>
                        <select name="dateyear">
                            <?php
                            $dateyear = $history[0]["dateyear"];
                            for ($i = $min_year; $i <= $max_year; $i++)
                                echo "<option", ($dateyear == $i) ? ' selected="selected"' : '', ">$i</option>\n";
                            ?>
                        </select>
                        <input type="text" name="timestr" value="<?php echo htmlspecialchars($history[0]["timestr"]); ?>" size="8"/>
                    </div>
                    <div  class="col-lg-12">

                        <?php
                        $local = localtime(time(), 1);
                        $today = mktime(0, 0, 0, $local["tm_mon"] + 1, $local["tm_mday"], $local["tm_year"] + 1900);
                        $n = count($times_ago);
                        for ($i = 0; $i < $n; $i++) {
                            if ($i > 0) {
                                if ($i & 3)
                                    echo ' | ';
                                else
                                    echo '<br />';
                            }
                            $date = localtime($today - $times_ago[$i][1] * 24 * 3600, 1);
                            echo '<a href="javascript:setTime(\'00:00\',', $date["tm_mday"] - 1, ',', $date["tm_mon"], ',', $date["tm_year"] - 102, ')">', $times_ago[$i][0], '</a>';
                        }
                        ?>
                    </div>

                    <?php
                    if ($c["FTP_DISABLE"] + $c["SMB_DISABLE"] < 1) {
                        ?>

                        <?php echo $tr["Hits per page"]; ?>:
                        <input type="text" name="hits"
                               value="<?php echo htmlspecialchars($history[0]["hits"]); ?>" size="5"/>

                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="container">
    <?php

    if ($n_history > 0) {
        ?>
        <br/>
        <div class="well">
            <div class="container">
                <h4><b>Your history</b></h4>
                <div>
                    <?php
                    $printed = 0;
                    for ($i = 0; $i < $c["HISTORY_COUNT"]; $i++) {
                        if ($history[$i]["searchstring"] == '')
                            continue;
                        if ($printed > 0)
                            echo ' | ';
                        echo "<a href=\"javascript:setAll('", htmlspecialchars(addslashes($history[$i]["searchstring"])), "',", $history[$i]["mode"], ",", $history[$i]["flags"], ",", $history[$i]["hosttype"], ",", $history[$i]["date"], ",'", $history[$i]["timestr"], "',", $history[$i]["dateday"], ",", $history[$i]["datemonth"], ",", $history[$i]["dateyear"], ",", $history[$i]["hits"], ",'", $history[$i]["minfilesize"], "','", $history[$i]["maxfilesize"], "')\">", htmlspecialchars($history[$i]["searchstring"]), '</a>';
                        $printed++;
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <br/>


    <table cellpadding="0" cellspacing="0" class="table">
        <tr>
            <td><b>Statistics</b></td>
        </tr>
        <tr>
            <td>
                <table cellpadding="0" cellspacing="0" class="table table-bordered">
                    <thead>
                    <tr>
                        <?php
                        echo '<td align="right">Last change</td>';
                        if (!$c["FTP_DISABLE"])
                            echo '<td align="right">FTPs</td>';
                        echo '<td align="right">Directories</td>';
                        echo '<td align="right">Files</td>';
                        echo '<td align="right">Total size</td>';
                        echo '<td align="right">Queries</td>';
                        ?>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        $q = mysql_query("SELECT LastChange,SMBHosts,FTPHosts,Directories,Files,FileSize,Queries FROM status", $db);
                        $value = mysql_fetch_assoc($q);
                        echo '<td align="right">', $value["LastChange"], '</td>';
                        if (!$c["FTP_DISABLE"]) {
                            $flags_needed = HOST_ONLINE;
                            $qq = mysql_query("SELECT COUNT(*) FROM host WHERE HostType=" . HOSTTYPE_FTP . " AND Flags&$flags_needed=$flags_needed AND TotalFileSize>=0", $db);
                            $rr = mysql_fetch_row($qq);
                            echo '<td align="right">', $value["FTPHosts"], ' (<img src="online.gif" alt="on" class="o" />&nbsp;', $rr[0], ')</td>';
                        }
                        echo '<td align="right">', $value["Directories"], '</td>';
                        echo '<td align="right">', $value["Files"], '</td>';
                        echo '<td align="right" nowrap="nowrap">', to_human_readable($value["FileSize"]), '</td>';
                        echo '<td align="right">', $value["Queries"], "</td>\n";
                        mysql_free_result($q);
                        ?>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>


    <?php
    require_once("help_search.php");
    ?>
    <br/>
    <table  border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="<?php echo $color_border; ?>">
                <table width="100%" border="0" cellpadding="3" cellspacing="0">
                    <tr>
                        <td bgcolor="<?php echo $color_wt; ?>"><b>Copyright</b></td>
                    </tr>
                    <tr>
                        <td bgcolor="<?php echo $color_wb; ?>">
                            Copyright &copy; 2002-2005 <a href="http://zlomek.jikos.cz/" target="_blank">Josef
                                Zlomek</a> <?php echo $tr["and"]; ?> <a
                                href="http://ffsearch.sourceforge.net/contrib.php#contributors"
                                target="_blank"><?php echo $tr["others"]; ?></a><br/>
                            <a href="http://ffsearch.sourceforge.net/" target="_blank">Fast File
                                Search</a> <?php echo $tr["uses some code from"]; ?> <a
                                href="http://femfind.sourceforge.net/" target="_blank">FemFind</a>.<br/>
                            Fast File Search <?php echo $tr["is distributed under the"]; ?> <a href="http://www.gnu.org/"
                                                                                               target="_blank">GNU</a> <a
                                href="http://www.gnu.org/licenses/gpl.html" target="_blank">General Public License</a>.<br/>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<?php
require_once("foot.php");
?>
