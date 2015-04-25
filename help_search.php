<?php
if (!defined ('FAST_FILE_SEARCH'))
{
    header ("Location: index.php");
    die ("");
}

?>

<br />
<div class="jumbotron">
    <div class="container">
        <h4><b>Help</b></h4>
        <div>
            <b>How to search?</b><br />
            Enter one or more search terms (see below Searching of files and Searching of directories). Default mode is OR, add '+' in front of a search term to force AND. Search terms are separated by a space or '+'. If there is only one OR term it is changed to be an AND term because one OR term has no meaning.<br />Searching is case insensitive, i.e. abc = aBc = ABC
            <br />
<span style="color:#207020">
&nbsp;&nbsp;&nbsp;abc&nbsp;+def&nbsp;ghi<i>&nbsp;&nbsp;=&nbsp;&nbsp;def&nbsp;AND&nbsp;(abc&nbsp;OR&nbsp;ghi)</i><br />
&nbsp;&nbsp;&nbsp;+abc&nbsp;def&nbsp;+ghi<i>&nbsp;&nbsp;=&nbsp;&nbsp;abc&nbsp;AND&nbsp;def&nbsp;AND&nbsp;ghi</i><br />
&nbsp;&nbsp;&nbsp;abc&nbsp;def<i>&nbsp;&nbsp;=&nbsp;&nbsp;abc&nbsp;OR&nbsp;def</i><br />
&nbsp;&nbsp;&nbsp;+*name*&nbsp;*.ext1&nbsp;*.ext2&nbsp;*.ext3<i>&nbsp;&nbsp;=&nbsp;&nbsp;*name*&nbsp;AND&nbsp;(*.ext1&nbsp;OR&nbsp;*.ext2&nbsp;OR&nbsp;*.ext3)</i><br />
</span>
            <br />
            <b>Quoting</b><br />
            You can surround your search term with double quotes ("") if it contains any characters ('+', spaces) that would otherwise modify your query.
<span style="color:#207020">
&nbsp;&nbsp;&nbsp;+"This&nbsp;must&nbsp;be&nbsp;found"&nbsp;abc&nbsp;def<i>&nbsp;&nbsp;=&nbsp;&nbsp;"This&nbsp;must&nbsp;be&nbsp;found"&nbsp;AND&nbsp;(abc&nbsp;OR&nbsp;def)</i><br />
&nbsp;&nbsp;&nbsp;"It's&nbsp;OK"<i>&nbsp;&nbsp;=&nbsp;&nbsp;"It's&nbsp;OK"</i><br />
</span>
            <br />
            <b>Searching files</b><br />
            <i>Fast File Search is optimized for searching files by a wildcard when there are some normal characters (not '*' or '?') specified in the beginning or in the end of the mask (for example '*.iso')
                <?php
                if ($fast_query_minsize >= 0)
                    echo ", or minimum file size &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
                if ($fast_query_maxsize >= 0)
                    echo ", or maximum file size &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
                echo ".";
                ?>
                Other (i.e. slow) queries can be disabled in configuration.</i><br />
            <u>Wildcard</u><br />
            Files are searched by a file name mask that can contain some of these wildcard characters:<br />
            '*' stands for an arbitrary amount of arbitrary characters<br />
            '?' stands for a single arbitrary character<br />
            For example '*.iso' means: all files whose file name ends with '.iso'<br />
            <u>Substring</u><br />
            Files are searched by a part (substring) of their name.<br />
            <u>Regular expression</u><br />
            Files are searched by a regular expression. Extended version of regular expressions is used.<br />
            <?php
            if ($advanced) {
                ?>
                <br />
                <b>Online Check</b><br />
                <?php
                switch ($c["ONLINE_CHECK"])
                {
                    case 'ping':
                        echo 'Verifies whether the host is online with a simple ping. This is not 100% reliable because firewalls can be configured not to allow replies to ping.';
                        break;
                    case 'connect':
                        echo 'Verifies whether the host is online by connecting to the host.';
                        break;
                }?>
                <i>It will NOT check whether the file can still be found on the host.</i>
                <br />
                <br />
                <b>Bounds of file size</b><br />
                If you want to find only files larger than some size or smaller than some size (or both) specify the appropriate bound(s). The bounds of file size are in bytes, you can add suffix 'K' for kilobytes, 'M' for megabytes, 'G' for gigabytes, 'k' for thousands of bytes, 'm' for millions of bytes, 'g' for billions of bytes.<br />
                For example '50M' means 50 megabytes
                <br />
            <?php
            }?>
        </div>
    </div>
</div>
