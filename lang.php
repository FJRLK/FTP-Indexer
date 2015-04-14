<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

# language substitution table
	# "client wants" => "(similar) language we give to client"
$subst_lang = array (
	"en" => "en",	# English
	"bg" => "bg",	# Bulgarian
	"de" => "de",	# German
	"es" => "es",	# Spanish
	"fr" => "fr",	# French
	"hu" => "hu",	# Hungarian
	"nl" => "nl",	# Dutch
	"ro" => "ro",	# Romanian
	"ru" => "ru",	# Russian
	"zh" => "zh",	# Chinese
	"cn" => "zh",	# Chinese
	"uk" => "uk",	# Ukrainian
	"ua" => "uk",	# Ukrainian
	"pl" => "pl",	# Polish
	"cs" => "cs",	# Czech
	"cz" => "cs",	# Czech
	"sk" => "sk",	# Slovak
	"lt" => "lt",	# Lithuanian
	"nb" => "nb",	# Norwegian
	"nn" => "nb",	# Norwegian
	"no" => "nb",	# Norwegian
	# the following translations have not been written yet
	"it" => "it",	# Italian
	);

$langs = array (
	"en" => 1,
	"fr" => 1,
	"ru" => 1,
	"es" => 1,
	"de" => 1,
	"nl" => 1,
	"bg" => 1,
	"ro" => 1,
	"hu" => 1,
	"zh" => 1,
	"uk" => 1,
	"pl" => 1,
	"cs" => 1,
	"sk" => 1,
	"lt" => 1,
	"nb" => 1,
	);

$lang_file = array (
	"bg" => "lang/bulgarian.php",
	"cs" => "lang/czech.php",
	"de" => "lang/german.php",
	"en" => "lang/english.php",
	"es" => "lang/spanish.php",
	"fr" => "lang/french.php",
	"hu" => "lang/hungarian.php",
	"lt" => "lang/lithuanian.php",
	"nb" => "lang/norwegian_nb.php",
	"nl" => "lang/dutch.php",
	"pl" => "lang/polish.php",
	"ro" => "lang/romanian.php",
	"ru" => "lang/russian.php",
	"sk" => "lang/slovak.php",
	"uk" => "lang/ukrainian.php",
	"zh" => "lang/chinese.php",
	);

$encodings = array (
	"bg" => "windows-1251",
	"cs" => "iso-8859-2",
	"de" => "iso-8869-1",
	"en" => "iso-8859-1",
	"es" => "iso-8859-15",
	"fr" => "iso-8859-1",
	"hu" => "iso-8859-2",
	"lt" => "windows-1257",
	"nb" => "iso-8859-1",
	"nl" => "iso-8859-1",
	"pl" => "iso-8859-2",
	"ro" => "utf-8",
	"ru" => "windows-1251",
	"sk" => "iso-8859-2",
	"uk" => "koi8-u",
	"zh" => "gbk",
	);

$language = '';

# is there a correct language specified in configuration file?
if ($langs[$subst_lang[$c["LANGUAGE"]]])
	$language = $subst_lang[$c["LANGUAGE"]];

# now disable hidden languages
$hide = preg_split ("/\s*,\s*/", $c["HIDE_LANGUAGES"]);
$n = count ($hide);
for ($i = 0; $i < $n; $i++)
{
	if ($hide[$i] == '')
		continue;
	if ($hide[$i] == 'all')
	{
		$langs = array ();
		break;
	}
	unset ($langs[$hide[$i]]);
}

# if other languages were not disabled, has web browser sent a correct language?
$lang = getvar ("lang");
if ($langs[$subst_lang[$lang]])
	$language = $subst_lang[$lang];

if ($language == '')	# incorrect language
{
	# detect language
	$client_langs = explode (",", getvar_server ("HTTP_ACCEPT_LANGUAGE"));
	$n = count ($client_langs);
	$lang = "";
	for ($i = 0; $i < $n; $i++)
	{
		$client_langs[$i] = strtolower (ereg_replace (";.*", "", $client_langs[$i]));
		# Try the language client sent
		if ($langs[$subst_lang[$client_langs[$i]]])
		{
			$lang = $subst_lang[$client_langs[$i]];
			break;
		}
		else
		{
			# Try the short name of the language, e.g. "zh" instead of "zh-CN"
			$client_langs[$i] = ereg_replace ("[_\\-].*", "", $client_langs[$i]);
			if ($langs[$subst_lang[$client_langs[$i]]])
			{
				$lang = $subst_lang[$client_langs[$i]];
				break;
			}
		}
	}
	if (!$lang)
	{
		# get the first non-hidden language
		reset ($langs);
		$lang = each ($langs);
		$lang = $lang[0];
	}
	if (!$lang)
		$lang = "en";
}
else
	$lang = $language;
$encoding = $encodings[$lang];

require_once ($lang_file[$lang]);
?>
