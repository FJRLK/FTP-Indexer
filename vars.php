<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

if (defined ('VARS_PHP_INCLUDED'))
	return;
define ('VARS_PHP_INCLUDED', 1);

# Disable some PHP's messages
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);

# Disable magic_quotes_runtime
set_magic_quotes_runtime (0);

if (get_magic_quotes_gpc () != 0)
{
	# GET, POST and COOKIE variables are quoted.
	# Strip the backslashes because
	# I need to do some operations with the variables and prefer manual quoting
	if (is_array ($_GET))
	{
		foreach ($_GET as $key => $val)
			$_GET[$key] = stripslashes ($val);
	}
	if (is_array ($_POST))
	{
		foreach ($_POST as $key => $val)
			$_POST[$key] = stripslashes ($val);
	}
	if (is_array ($_COOKIE))
	{
		foreach ($_COOKIE as $key => $val)
			$_COOKIE[$key] = stripslashes ($val);
	}
}

function getint ($var, $min, $max, $default = '')
{
	$x = intval ($var);
	if ($x < $min)
	{
		if ($default === '')
			$x = $min;
		else
			$x = $default;
	}
	if ($x > $max)
	{
		if ($default === '')
			$x = $max;
		else
			$x = $default;
	}
	return $x;
}

function getsize ($var, $default = 0)
{
	$x = $default;
	if (ereg ('^[ \t]*([0-9]+)[ \t]*([kKmMgG]?)', $var, $regs))
	{
		$x = $regs[1];
		switch ($regs[2])
		{
			case 'G':
				$x *= 1024;
			case 'M':
				$x *= 1024;
			case 'K':
				$x *= 1024;
				break;
			case 'g':
				$x *= 1000;
			case 'm':
				$x *= 1000;
			case 'k':
				$x *= 1000;
				break;
		}
	}
	return $x;
}

function getbool ($var, $default)
{
	$var = strtolower ($var);
	if ($var == 'yes')
		return 1;
	if ($var == 'no')
		return 0;
	return $default;
}

function var_isset ($var_name)
{
	if (isset ($_GET[$var_name]))
		return true;

	if (isset ($_POST[$var_name]))
		return true;

	return false;
}

function getvar ($var_name)
{
	if (isset ($_GET[$var_name]))
		return $_GET[$var_name];

	if (isset ($_POST[$var_name]))
		return $_POST[$var_name];

	return $GLOBALS[$var_name];
}

function getvar_server ($var_name)
{
	if (isset ($_SERVER[$var_name]))
		return $_SERVER[$var_name];

	if (isset ($_ENV[$var_name]))
		return $_ENV[$var_name];

	return $GLOBALS[$var_name];
}

function getvar_cookie ($var_name)
{
	if (isset ($_COOKIE[$var_name]))
		return $_COOKIE[$var_name];

	return $GLOBALS[$var_name];
}

function is_invalid_IP ($ip)
{
	if (!ereg ("^([1-9][0-9]{0,2})\\.([0-9]{1,3})\\.([0-9]{1,3})\\.([0-9]{1,3})$", $ip, $parts))
		return 1;
	for ($i = 1; $i <= 4; $i++)
		if ($parts[$i] > 255)
			return 1;
	return 0;
}

function get_position ($query, $per_page)
{
	global $n, $position, $max_position;

	$position = intval ($position / $per_page) * $per_page;
	$r = mysql_fetch_row ($query);
	mysql_free_result ($query);
	$n = intval ($r[0]);
	$max_position = intval (($n - 1) / $per_page) * $per_page;
	if ($position > $max_position)
		$position = $max_position;
	if ($position < 0)
		$position = 0;
}

function echo_links ($script, $additional_parameters)
{
	global $n, $position, $max_position, $per_page;
	global $color_wb, $per_page, $lang, $aid;

    echo '<nav><ul class="pagination">';

	if ($n)
	{
		for ($i = 0; $i <= $max_position; $i += $per_page)
		{
            if ($i != $position)
                echo '<li>';
            else
                echo '<li class="active">';

			if ($i != $position)
				echo '<a href="', $script, '?lang=', $lang, $aid, '&amp;position=', $i, $additional_parameters, '">';
            else
                echo '<a>';
			echo $i + 1, "-", $i == $max_position ? $n : $i + $per_page;

				echo '</a>';

			echo "</li>";
		}
	}
	else
		echo "&nbsp;";

    echo ' </ul></nav>';
}

function to_human_readable ($size)
{
	if ($size >= 1 * 1048576 * 1048576)
		return number_format(($size / 1048576 / 1048576), 2, '.', '') . "&nbsp;TB";

	if ($size >= 8 * 1048576 * 1024)
		return intval ($size / 1048576 / 1024) . "&nbsp;GB";

	if ($size >= 8 * 1048576)
		return intval ($size / 1048576) . "&nbsp;MB";

	if ($size >= 8 * 1024)
		return intval ($size / 1024) . "&nbsp;KB";

	if ($size >= 0)
		return $size . "&nbsp;B";

	return "?";
}

function mangle_email($email)
{
	return ereg_replace ("\\.", " DOT ", ereg_replace ("@", " AT ", $email));
}

?>
