<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

if ($form_action)
	echo "</form>\n";
?>
</div>
</body>
</html>
<?php
ob_end_flush();
?>
