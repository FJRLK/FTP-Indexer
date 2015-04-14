<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

?>

<br />
<table width="<?php echo $menu_width; ?>" border="0" cellpadding="1" cellspacing="0"><tr><td bgcolor="<?php echo $color_border; ?>">
<table width="100%" border="0" cellpadding="3" cellspacing="0">
<tr><td bgcolor="<?php echo $color_wt; ?>"><b><?php echo  $tr["Help"]; ?></b></td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<?php
switch ($lang)
{
	default:
	case "en":
?>
		<b>How to search?</b><br />
		Enter one or more search terms (see below Searching of files and Searching of directories). Default mode is OR, add '+' in front of a search term to force AND. Search terms are separated by a space or '+'. If there is only one OR term it is changed to be an AND term because one OR term has no meaning.<br />Searching is case insensitive, i.e. abc = aBc = ABC
<?php
		break;
	case "bg":
?>
		<b>Êàê äà òúğñÿ?</b><br />
		Âúâåäåòå åäíà èëè ïîâå÷å äóìè çà òúğñåíå (âèæòå ïî-äîëó Òúğñåíå íà ôàéëîâå è Òúğñåíå íà äèğåêòîğèè). Ğåæèìúò íà òúğñåíå å "ÈËÈ", äîáàâåòå '+' â íà÷àëîòî íà äóìàòà çà ğåæèì íà òúğñåíå "È". Ğàçäåëèòåë íà äóìèòå ñà èíòåğâàë (' ') è ïëşñ ('+'). <br /> Ïğè òúğñåíåòî íå ñå ïğàâè ğàçëèêà ìåæäó ãîëåìè è ìàëêè áóêâè, òîåñò abc = aBc = ABC.
<?php
		break;
	case "cs":
?>
		<b>Jak hledat?</b><br />
		Zadejte jeden nebo více vırazù (viz ní¾e Vyhledávání souborù a Vyhledávání adresáøù). Implicitní mód je NEBO, pokud chcete mód A, pøidejte '+' pøed vyhledávanı vıraz. Vırazy jsou oddìleny mezerou nebo '+'. Pokud uvedete pouze jeden NEBO vıraz, vıraz je zmìnìn na A vıraz, proto¾e jeden NEBO vıraz nemá smysl.<br />Vyhledávaè nerozli¹uje malá a velká písmena, tj. abc = aBc = ABC
<?php
		break;
	case "de":
?>
		<b>Wie sucht man?</b><br />
		Bitte einen oder mehrere Suchbegriffe angeben (siehe Dateien suchen und Verzeichnisse suchen). Die Standardeinstellung ist OR, das Hinzuf&uuml;gen von '+' vor einem Suchbegriff erzwingt AND. Suchbegriffe werden durch Leerzeichen oder '+' getrennt. Ein einzelner OR-Begriff wird in einen AND-Begriff umgewandelt, da ein einzelner OR-Begriff keinen Sinn ergibt.<br />Die Suche beachtet keine Gro&szlig;-/Kleinschreibung, d.h. abc = aBc = ABC
<?php
		break;
	case "es":
?>
		<b>¿Cómo buscar?</b><br />
		Introduzca uno o más términos de búsqueda (ver más abajo Busqueda de ficheros y Búsqueda de directorios). El modo por defecto es O, añadiendo '+' delante de un término de búsqueda para forzar Y. Los términos a buscar están separados por espacio o '+'. Si sólo hay un término O se cambia por Y pues un sólo término O no tiene sentido.<br /> Lás búsquedas no son sesibles a mayúsculas, es decir: abc = aBc = ABC.
<?php
		break;
	case "fr":
?>
		<b>Comment faire une recherche ?</b><br />
		Entrez un ou plusieurs termes de recherche (voyez ci-dessous Chercher des fichier et Chercher des répertoires). Le mode par défaut est OU, ajoutez un '+' devant un terme de recherche pour forcer le mode ET. Les termes de la recherche peuvent être séparés par un espace ou un '+'. S'il n'y a qu'un terme OU, il est changé en ET parce qu'un terme OU seul ne veut rien dire.<br />La recherche ne prend pas en compte la casse, c.a.d. abc = aBc = ABC
<?php
		break;
	case "hu":
?>
		<b>Hogyan keressen?</b><br />
		Írjon be egy vagy több keresési feltételt (lásd lentebb a fájlok és könyvtárak keresésénél). Alapértelmezésben a szavak között VAGY kapcsolat van, írjon '+' jelet a keresendõ szó elé, így ÉS kapcsolat hozható létre. A szavakat szóközzel, vagy + jellel válassza el. Egy szó beírása esetén automatikusan a VAGY kapcsoló ÉS-re változik .<br />A keresés nem különbözteti meg a kis- és nagybetûket. Pl. abc = aBc = ABC
<?php
		break;
	case "lt":
?>
		<b>Kaip ieğkoti?</b><br />
		Parağyk vienà ar keletà ieğkomø terminø. Standartiğkai yra dedama '+' ieğkoma şodá. Ieğkomi şodşiai yra skiriami tarpu arba '+'. Jeigu yra tik vienas ieğkomas şodis tai jeigu paieğka nieko neranda, dadëk dar vienà şodá..<br />Paieğkos pavyzdys: abc = aBc = ABC
<?php
		break;
	case "nb":
?>
		<b>Hvordan søke?</b><br />
		Skriv inn ett eller flere søkeord (se under søking etter filer og søking etter kataloger). Standard modus er OR, legg til '+' foran en søketerm for å benytte AND. Søketermer er separert med mellomrom eller '+'. Dersom det kun er én OR-term endres den til en AND-term siden en OR-term alene ikke har noen mening.<br />Alle søk kan utføres med små/store bokstaver omhverandre, f.eks. abc = aBc = ABC
<?php
		break;
	case "nl":
?>
		<b>Hoe te zoeken?</b><br />
		Vul &eacute;&eacute;n of meer zoektermen in (hieronder staan Bestanden zoeken en Mappen zoeken verder uitgelegd). De standaard zoekmethode is OF, zet '+' voor een zoekterm om er EN van te maken. Zoekentermen worden gescheiden door een spatie of een '+'. Als er maar &eacute;&eacute;n OF term is, wordt dit vanzelf een EN, want &eacute;&eacute;n OF term heeft geen betekenis.<br />Bij het zoeken wordt er geen onderscheid gemaakt tussen kleine letters en hoofdletters, dus abc = aBc = ABC
<?php
		break;
	case "pl":
?>
		<b>Jak szukaæ?</b><br />
		Wpisz jeden lub kilka wyrazów (zobacz ni¿ej jak szukaæ plików lub katalogów). Domy¶lny tryb traktowania wyrazów to OR (LUB - znajduje wyraz1 LUB wyraz2 LUB ...), dodaj '+' przed wyrazami, ¿eby wymusiæ AND (czyli wyraz1 I wyraz2 I ...). Poszukiwane wyrazy nale¿y oddzielaæ spacj± lub plusem - '+'. Je¶li jest tylko jedno wyra¿enie OR, zamieniane jest na AND (bo jedno OR nie ma sensu).<br />Wyszukiwanie jest nieczu³e na rozmiar literek, tzn. abc = aBc = ABC
<?php
		break;
	case "ro":
?>
		<b>Cum sÄƒ cÄƒutÄƒm?</b><br />
		IntroduceÅ£i unul sau mai mulÅ£i termeni de cÄƒutare (vezi mai jos CÄƒutarea fiÅŸierelor ÅŸi CÄƒutarea directoarelor). Modul implicit este SAU, adÄƒugaÅ£i '+' Ã®n faÅ£a unui termen cÄƒutat pentru a forÅ£a ÅI. Termenii cÄƒutaÅ£i sunt separaÅ£i printr-un blanc (spaÅ£iu) sau '+'. DacÄƒ existÄƒ un singur termen SAU, el va fi schimbat Ã®n termen ÅI deoarece un singur termen SAU nu are sens. <br />CÄƒutarea se face folosind faptul cÄƒ majusculele sunt nesemnificative, exemplu abc = aBc = ABC
<?php
		break;
	case "ru":
?>
		<b>Êàê èñêàòü?</b><br />
		Ââåäèòå îäíî èëè íåñêîëüêî ïîèñêîâûõ òåğìîâ (ñìîòğè íèæå î ïîèñêå ôàéëîâ èëè äèğåêòîğèé). Ğåæèì ïî óìîë÷àíèş - "ÈËÈ", äîáàâüòå '+' â íà÷àëå òåğìà äëÿ ğåæèìà "È" ïîèñêà. Ïîèñêîâûå òåğìû ğàçäåëÿşòñÿ ïğîáåëàìè èëè '+'.<br />Ïîèñê ğåãèñòğî-íåçàâèñèì, òî åñòü abc = aBc = ABC
<?php
		break;
	case "sk":
?>
		<b>Ako vyhµadáva» ?</b><br />
		Zadajte jeden alebo viac vırazov (viï ni¾sie Vyhµadávanie súborov a Vyhµadávanie adresárov). Predvolenı mód je ALEBO, ak chcete mód A, pridajte '+' pred vyhµadávanı vıraz. Vırazy sú oddelené medzerou alebo '+'. Ak uvediete iba jeden ALEBO vıraz, bude zmenenı na A, preto¾e jeden ALEBO nemá zmysel.<br />Vyhµadávaè nerozli¹uje malé a veµké písmená tj. abc = aBc = ABC
<?php
		break;
	case "uk":
?>
		<b>ñË ÛÕËÁÔÉ?</b><br />
		÷×ÅÄ¦ÔØ ÏÄÎÅ ÁÂÏ ÄÅË¦ÌØËÁ ĞÏÛÕËÏ×ÉÈ ÕÍÏ× (ÄÉ×¦ÔØÓÑ ÎÉÖŞÅ ĞÒÏ ĞÏÛÕË ÆÁÊÌ¦× ŞÉ ÄÉÒÅËÔÏÒ¦Ê). òÅÖÉÍ ĞÏ ÚÁÍÏ×ŞÅÎÎÀ - "áâï", ÄÏÄÁÊÔÅ '+' ÎÁ ĞÏŞÁÔËÕ ÕÍÏ×É ÄÌÑ ÒÅÖÉÍÕ "ôá" ĞÏÛÕËÁ. ğÏÛÕËÏ×¦ ÕÍÏ×É ÒÏÚÄ¦ÌÑÀÔØÓÑ ĞÒÏÂ¦ÌÏÍ ÁÂÏ '+'.
ğÏÛÕË ÒÅÇ¦ÓÔÒÏ-ÎÅÚÁÌÅÖÎÉÊ, ÔÏÂÔÏ abc = aBc = ABC
<?php
		break;
}
?>
</td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<font color="<?php echo $color_example; ?>">
&nbsp;&nbsp;&nbsp;abc&nbsp;+def&nbsp;ghi<i>&nbsp;&nbsp;=&nbsp;&nbsp;def&nbsp;AND&nbsp;(abc&nbsp;OR&nbsp;ghi)</i><br />
&nbsp;&nbsp;&nbsp;+abc&nbsp;def&nbsp;+ghi<i>&nbsp;&nbsp;=&nbsp;&nbsp;abc&nbsp;AND&nbsp;def&nbsp;AND&nbsp;ghi</i><br />
&nbsp;&nbsp;&nbsp;abc&nbsp;def<i>&nbsp;&nbsp;=&nbsp;&nbsp;abc&nbsp;OR&nbsp;def</i><br />
&nbsp;&nbsp;&nbsp;+*name*&nbsp;*.ext1&nbsp;*.ext2&nbsp;*.ext3<i>&nbsp;&nbsp;=&nbsp;&nbsp;*name*&nbsp;AND&nbsp;(*.ext1&nbsp;OR&nbsp;*.ext2&nbsp;OR&nbsp;*.ext3)</i><br />
</font>
</td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<?php
switch ($lang)
{
	default:
	case "en":
?>
		<b>Quoting</b><br />
		You can surround your search term with double quotes ("") if it contains any characters ('+', spaces) that would otherwise modify your query.
<?php
		break;
	case "bg":
?>
		<b>Êàâè÷êè</b><br />
		Âèå ìîæåòå äà ïîñòàâèòå òúğñåíàòà òåìà â äâîéíè êàâè÷êè (""), àêî òÿ ñúäúğæà äğóãè ñëóæåáíè ñèìâîëè ('+', èíòåğâàë), êîèòî áèõà ìîäèôèöèğàëè òúğñåíåòî; â òîçè ñëó÷àé òå ùå áúäàò öèòèğàíè.
<?php
	    break;
	case "cs":
?>
		<b>Uzavírání do uvozovek</b><br />
		Vıraz mù¾ete uzavøít do uvozovek (""), pokud obsahuje nìjakı znak ('+', mezery), kterı by jinak zmìnil vıznam dotazu.
<?php
		break;
	case "de":
?>
		<b>Anf&uuml;hrungszeichen</b><br />
		Um einen Suchbegriff k&ouml;nnen Anf&uuml;hrungszeichen ("") gesetzt werden, wenn dieser Zeichen enth&auml;lt ('+', Leerzeichen), welche die Suche ver&auml;ndern w&uuml;rden.
<?php
		break;
	case "es":
?>
		<b>Comillas</b><br />
		Puede poner en su búsqueda comillas ("") si el término de búsqueda tiene carácteres ('+', espacios) que podrían cambiar el resultado de la búsqueda.
<?php
		break;
	case "fr":
?>
		<b>Les guillemets</b><br />
		Vous pouvez entourer les termes de votre recherche par des guillemets ("") s'ils contiennent des charactères ('+', espaces) qui, sinon, modifieraient la recherche.
<?php
		break;
	case "hu":
?>
		<b>Idézõjel</b><br />
		Ha a keresendõ kifejezés szóközt, vagy + jelet tartalmaz, tegye idézõjelbe. ("") Különben az megváltoztathatja a keresést.
<?php
		break;
	case "lt":
?>
		<b>Kabutës</b><br />
		Galima paieğkos şodşius uşdaryti á kabutes ("").
<?php
		break;
	case "nb":
?>
		<b>Anførselsstegn</b><br />
		Søkeordene kan settes i "" dersom de inneholder mellomrom/space, '+' eller andre spesielle tegn. Dersom dette ikke gjøres kan det hende du ikke finner det du søker etter. Under vises noen eksempler:
<?php
		break;
	case "nl":
?>
		<b>Quoten</b><br />
		Door dubbele quotes ("") om je zoekterm te zetten, wordt het effect van eventuele speciale karakters ('+', spaties) in de zoekterm ongedaan gemaakt.
<?php
		break;
	case "pl":
?>
		<b>Cudzys³owie</b><br />
		Mo¿esz poszykiwane wyra¿enie otoczyæ znakami cudzys³owia ("") je¶li zawiera znaki plus lub spacje ('+', ' ') poniewa¿ normalnie maj± one specjalne znaczenie.
<?php
		break;
	case "ro":
?>
		<b>Folosirea ghilimelelor</b><br />
		PuteÅ£i sÄƒ restrÃ¢ngeÅ£i termenii de cÄƒutare prin folosirea ghilimelelor (""), dacÄƒ ei conÅ£in caractere ('+', blancuri) care altfel ar schimba cÄƒutarea.
<?php
		break;
	case "ru":
?>
		<b>Êàâû÷êè</b><br />
		Âû ìîæåòå çàêëş÷èòü ïîèñêîâûå òåğìû â äâîéíûå êàâû÷êè (""), åñëè îíè ñîäåğæàò ëşáûå ñëóæåáíûå ñèìâîëû ('+', ïğîáåëû), â ıòîì ñëó÷àå îíè íå áóäóò èíòåğïğåòèğîâàíû.
<?php
		break;
	case "sk":
?>
		<b>Uzatváranie do úvodzoviek</b><br />
		Vıraz mô¾ete uzatvori» do úvodzoviek (""), ak obsahuje niektorı znak ('+', medzery), ktorı by inak zmenil vıznam vırazu.
<?php
		break;
	case "uk":
?>
		<b>ìÁĞËÉ</b><br />
		÷É ÍÏÖÅÔÅ ÚÁËÌÀŞÁÔÉ ĞÏÛÕËÏ×¦ ÕÍÏ×É Õ ĞÏÄ×¦ÊÎ¦ ÌÁĞËÉ (""), ÑËİÏ ×ÏÎÉ Í¦ÓÔÑÔØ ÂÕÄØ-ÑË¦ ÓÌÕÖÂÏ×¦ ÓÉÍ×ÏÌÉ ('+', ĞÒÏÂ¦ÌÉ), Õ ÃØÏÍÕ ×ÉĞÁÄËÕ ×ÏÎÉ ÎÅ ÂÕÄÕÔØ ¦ÎÔÅÒĞÒÅÔÏ×ÁÎ¦.
<?php
		break;
}
?>
</td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<font color="<?php echo $color_example; ?>">
&nbsp;&nbsp;&nbsp;+"This&nbsp;must&nbsp;be&nbsp;found"&nbsp;abc&nbsp;def<i>&nbsp;&nbsp;=&nbsp;&nbsp;"This&nbsp;must&nbsp;be&nbsp;found"&nbsp;AND&nbsp;(abc&nbsp;OR&nbsp;def)</i><br />
&nbsp;&nbsp;&nbsp;"It's&nbsp;OK"<i>&nbsp;&nbsp;=&nbsp;&nbsp;"It's&nbsp;OK"</i><br />
</font>
</td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<?php
switch ($lang)
{
	default:
	case "en":
?>
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
		break;
	case "bg":
?>
		<b>Òúğñåíå íà ôàéëîâå</b><br />
		<i>Òúğñà÷êàòà å îïòèìèçèğàíà çà òúğñåíå íà ôàéëîâå ïî ìàñêà, êîÿòî ñúäúğæà íîğìàëíè çíàöè (íå '*' è '?'), íàìèğàùè ñå â íà÷àëîòî èëè êğàÿ íà ìàñêàòà (íàïğèìåğ '*.iso').
<?php
		if ($fast_query_minsize >= 0)
			echo ", èëè ìèíèìàëåí ğàçìåğ íà ôàéëà &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", èëè ìàêñèìàëåí ğàçìåğ íà ôàéëà &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Äğóãè, ïî-áàâíè çàÿâêè ìîãàò äà áúäàò èçêëş÷åíè â êîíôèãóğàöèÿòà.</i><br />
		<u>Ìàñêè</u><br />
		Ïğè òúğñåíå ïî ôàéëîâî èìå ìàñêàòà ìîæå äà ñúäúğæà íÿêîé îò ñëåäíèòå ñèìâîëè:<br />
		'*' ïğîèçâîëíî êîëè÷åñòâî îò ïğîèçâîëíè ñèìâîëè (*.iso)<br />
		'?' åäèí ïğîèçâîëåí ñèìâîë (filena?e.r??)<br />
		Íàïğèìåğ '*.iso' äàâà ğåçóëòàò: âñè÷êè ôàéëîâå, ÷èåòî ôàéëîâî ğàçøèğåíèå å '.iso'<br />
		<u>Ïîäíèç</u><br />
		Òúğñåíå íà ôàéëîâå ïî ÷àñò (ïîäíèç) îò òÿõíîòî èìå.<br />
		<u>Ğåãóëÿğåí èçğàç</u><br />
		Ôàéëîâåòå ñå òúğñÿò ïî ğåãóëÿğåí èçğàç. Èçïîëçâà ñå ğàçøèğåíàòà âåğñèÿ íà ğåãóëÿğåí èçğàç.<br />
<?php
		break;
	case "cs":
?>
		<b>Hledání souborù</b><br />
		<i>Fast File Search je optimalizován na hledání souborù podle masky, kdy¾ jsou zadány nìjaké normální znaky (ne '*' nebo '?') na zaèátku nebo na konci masky (napø. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", nebo velikost souboru &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", nebo velikost souboru &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Ostatní (tj. pomalé) dotazy mohou bıt zakázány v konfiguraci.</i><br />
		<u>Maska</u><br />
		Soubory se hledají podle masky jména souboru, která mù¾e obsahovat nìkteré z tìchto zástupnıch znakù:<br />
		'*' zastupuje libovolnı poèet libovolnıch znakù<br />
		'?' zastupuje jeden libovolnı znak<br />
		Napø. '*.iso' znamená: v¹echny soubory, jejich¾ jméno konèí '.iso'<br />
		<u>Podøetìzec</u><br />
		Soubory se hledají podle èásti (podøetìzce) jejich jména.<br />
		<u>Regulární vıraz</u><br />
		Soubory se hledají podle regulárního vırazu. Pou¾ívá se roz¹íøená verze regulárních vırazù.<br />
<?php
		break;
	case "de":
?>
		<b>Dateien suchen</b><br />
		<i>Fast File Search wurde f&uuml;r die Dateisuche mit Wildcards optimiert, die normale Zeichen (nicht '*' oder '?') am Anfang oder am Ende der Suchmaske enthalten (z.B. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", oder wenn die minimale Dateigr&ouml;&szlig;e &gt;= '", $c["FAST_QUERY_MINSIZE"], "' ist";
		if ($fast_query_maxsize >= 0)
			echo ", oder wenn die maximale Dateigr&ouml;&szlig;e &lt;= '", $c["FAST_QUERY_MAXSIZE"], "' ist";
		echo ".";
?>
		Andere (langsamere) Suchanfragen k&ouml;nnen in der Konfiguration abgeschaltet werden.</i><br />
		<u>Wildcards</u><br />
		Dateien werden mit einer Dateinamensmaske gesucht, die folgende Wildcard-Zeichen enthalten k&ouml;nnen:<br />
		'*' steht f&uuml;r eine beliebige Anzahl beliebiger Zeichen<br />
		'?' steht f&uuml;r ein einzelnes beliebiges Zeichen<br />
		z.B. '*.iso' heisst: Alle Dateien, die mit '.iso' enden<br />
		<u>Substring</u><br />
		Alle Dateien mit dem Suchbegriff als Teil ihres Namens (substring) werden gesucht.<br />
		<u>Regular expression</u><br />
		Dateien werden mit Hilfe eines regul&auml;ren Ausdrucks gesucht. Die erweiterte Version von regul&auml;ren Ausdr&uuml;cken wird verwendet.<br />
<?php
		break;
	case "es":
?>
		<b>Búsqueda de ficheros</b><br />
		<i>Fast File Search está optimizado para la búsqueda de ficheros con comodines cuando hay carácteres normales (distintos a '*' o '?') especificados en el comienzo o el final de la máscara (por ejemplo '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", o tamaño mínimo de dichero &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", o tamaño máximo de fichero &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Otras búsquedas ( es decir, las lentas) se pueden deshabilitar en la configuración.</i><br />
		<u>Comodín</u><br />
		Los ficheros son buscados con una máscara sobre el nombre del fichero que puede contener algunos de los siguientes carácteres comodín:<br />
		'*' significa una cantidad arbitraria de caracteres.<br />
		'?' significa un sólo caracter.<br />
		Por ejemplo '*.iso' significa: todos los ficheros cuyo nombre finaliza con '.iso'<br />
		<u>Subcadena</u><br />
		Los ficheros se buscan por una parte (subcadena) de su nombre.<br />
		<u>Expresion regular</u><br />
		Los ficheros se buscan mediante una expresión regular. Se usa el formato de expresiones regulares extentido.<br />
<?php
		break;
	case "fr":
?>
		<b>Chercher des fichiers</b><br />
		<i>Fast File Search est optimisé pour la recherche de fichier par jokers quand il y a des caractères spéciaux (pas '*' ni '?') spécifiés au début ou a la fin du masque (par exemple '*.mp3')
<?php
		if ($fast_query_minsize >= 0)
			echo ", ou taille de fichier minimum &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", ou taille de fichier maximum &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Les autres (c.a.d. lentes) recherches peuvent être désactivées dans la configuration.</i><br />
		<u>Jokers</u><br />
		Les fichiers sont recherchés avec un masque de nom de fichier qui peut contenir certains de ces caractères jokers :<br />
		'*' correspond à un nombre quelconque de caractères inconnu<br />
		'?' correspond à un unique caractère inconnu<br />
		Par exemple '*.mp3' signifie : tous les fichiers finissant par '.mp3'<br />
		<u>Sous-chaîne</u><br />
		Les fichiers sont recherchés grâce à une partie de leur nom.<br />
		<u>Expression régulière</u><br />
		Les fichiers sont recherchés grâce à une expression régulière, version étendue.<br />
<?php
		break;
	case "hu":
?>
		<b>Fájlok keresése</b><br />
		<i>A Fast File Search joker karakterekkel kiegészített szavak keresésére van optimalizálva. (pl.: '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", vagy minimum fájlméret &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", vagy maximum fájlméret &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Az egyéb (pl. lassú, erõforrásigényes) kereséseket a konfigurációs fájlban lehet kikapcsolni.</i><br />
		<u>Joker karakterek</u><br />
		A fájlnévbõl hiányzó karaktereket a következõ karakterekkel helyettesítheti:<br />
		'*' tetszõleges számú, tetszõleges karakter<br />
		'?' egy tetszõleges karakter<br />
		Például '*.iso': minden fájl, ami '.iso'-ra végzõdik<br />
		<u>Töredékszó</u><br />
		Fájlnév egy részlete alapján keres.<br />
		<u>Szabványos kifejezés</u><br />
		Szabványos kifejezések alapján keres. Kibõvített szabványos kifejezések is használhatóak.<br />
<?php
		break;
	case "lt":
?>
		<b>Failø paieğka</b><br />
		<i>Greita Failø Paieğka yra optimizuota ieğkoti failø, kurie turi normalius pavadinimus (tik ne '*' ar '?') kurie yra pradşioje arba gale (pavyzdşiui '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", or minimum file size &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", or maximum file size &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Kiti (tarkim lëti) uşklausimai gali bûti anuliuoti konfiguracijoje.</i><br />
<?php
		break;
	case "nb":
?>
		<b>Søking etter filer</b><br />
		<i>Fast File Search er optimalisert til å bruke metategn/wildcard for å søke etter vanlige filer, dvs filer som (ikke har '*' eller '?') lagt til i starten eller slutten av søkemasken (f.eks. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", eller minimum filestørrelse &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", eller maksimum file size &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Forskjellige andre søk (såkalte slow-search) kan deaktiveres med konfigurasjonsfilene.</i><br />
		<u>Metategn/wildcard</u><br />
		Det søkes etter filer med en maske som kan inneholde noen av disse metategnene:<br />
		'*' betyr et vilkårlig antall vilkårlige tegn<br />
		'?' betyr et vilkårlig tegn<br />
		Et eksempel: '*.iso' betyr: alle filer med filnavn som ender på '.iso'<br />
		<u>Delstreng</u><br />
		Søker etter filer ved å lete etter kun en del av teksten (delstreng).<br />
		<u>Regulære uttrykk</u><br />
		Det søkes etter filer ved hjelp av regulære uttrykk (regexp). Det brukes Extended version.<br />
<?php
		break;
	case "nl":
?>
		<b>Bestanden zoeken</b><br />
		<i>Fast File Search is geoptimaliseerd voor twee manieren van bestanden zoeken. De eerste is voor het zoeken naar bestanden met behulp van een joker en een serie van normale karakters (niet '*' of '?') aan het begin of aan het einde van de zoekterm (bijvoorbeeld '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ". De tweede is als de minimale bestandsgrootte &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ". De tweede is als de maximale bestandsgrootte &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Andere (langzame) zoekopdrachten kunnen worden uitgeschakeld in het configuratiebestand.</i><br />
		<u>Jokers</u><br />
		Bestanden worden gezocht mbv een bestandsnaamfilter dat de volgende jokertekens kan bevatten:<br />
		'*' staat voor een willekeurig aantal willekeurige karakters<br />
		'?' staat voor &eacute;&eacute;n willekeurig karakter<br />
		'*.iso' betekend bijvoorbeeld: alle bestanden waarvan de naam eindigt op '.iso'<br />
		<u>Substring</u><br />
		Bestanden worden gezocht aan de hand van een deel (substring) van hun naam.<br />
		<u>Reguliere Expressie</u><br />
		Bestanden worden gezocht mbv reguliere expressies. De uitgebreide versie van de reguliere expressies wordt gebruikt.<br />
<?php
		break;
	case "pl":
?>
		<b>Poszukiwanie plików</b><br />
		<i>Szybkie Wyszukiwanie Plików jest zoptymalizowane na szukanie plików przy pomocy masek (wildcards) je¶li s± podane jakie¶ normalne symbole (nie '*' lun '?') na pocz±tku lub koñcu maski (np. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", lub minimalny rozmiar pliku &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", lub maksymalny rozmiar pliku &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Inne (np. powolne) zapytania mog± zostaæ wy³±czone w konfiguracji.</i><br />
		<u>Maski (wildcards)</u><br />
		Pliki poszukiwane przez maskê mog± zawieraæ nastêpuj±ce znaki specjalne:<br />
		'*' oznacza dowoln± ilo¶æ dowolnych znaków<br />
		'?' oznacza jeden dowolny znak<br />
		Dla przyk³adu '*.iso' oznacza: wszystkie pliki zakoñczone '.iso'<br />
		<u>Fragment nazwy</u><br />
		Pliki poszukiwane przez podanie fragmentu nazwy (substring).<br />
		<u>Wyra¿enia regularne</u><br />
		Pliki poszukiwane poprzez okre¶lenie wyra¿enia regularnego. U¿ywana jest rozsze¿ona wersja wyra¿eñ regularnych.<br />
<?php
		break;
	case "ro":
?>
		<b>CÄƒutarea fiÅŸierelor</b><br />
		<i>Fast File Search este optimizat pentru cÄƒutarea fiÅŸierelor folosind metacaracterele cÃ¢nd avem caractere normale (fÄƒrÄƒ '*' ÅŸi '?') specificate la Ã®nceputul sau la sfÃ¢rÅŸitul mÄƒÅŸtii (de exemplu '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", sau minimul mÄƒrimii fiÅŸierului &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", sau maximul mÄƒrimii fiÅŸierului &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Alte cÄƒutari (cele lente) pot fi dezactivate la configurare.</i><br />
		<u>Metacaracterele</u><br />
		FiÅŸierele sunt cÄƒutate folosind o mascÄƒ a fiÅŸierului care poate conÅ£ine unul din aceste metacaractere:<br />
		'*' ÃnlocuieÅŸte un caracter sau un ÅŸir de caractere Ã®n numele unui fiÅŸier<br />
		'?' ÃnlocuieÅŸte un singur caracter Ã®n numele unui fiÅŸier<br />
		De exemplu '*.iso' Ã®nseamnÄƒ: toate fiÅŸierele a cÄƒror nume se terminÄƒ cu extensia '.iso'<br />
		<u>SubÅŸir</u><br />
		FiÅŸierele sunt cÄƒutate dupÄƒ o parte (subÅŸir) a numelui fiÅŸierului.<br />
		<u>Expresie obiÅŸnuitÄƒ</u><br />
		FiÅŸierele sunt cÄƒutate dupÄƒ o expresie obiÅŸnuitÄƒ. Este folositÄƒ varianta extinsÄƒ a expresiilor obiÅŸnuite.
		<br />
<?php
		break;
	case "ru":
?>
		<b>Ïîèñê ôàéëîâ</b><br />
		<i>Fast File Search îïòèìèçèğîâàí äëÿ ïîèñêà ôàéëîâ ïî ìàñêå. Íî çàïğîñ äîëæåí ñîäåğæàòü íåñêîëüêî íîğìàëüíûõ ñèìâîëîâ (íå '*' èëè '?'), êîòîğûå äîëæíû íàõîäèòüñÿ â íà÷àëå èëè êîíöå ìàñêè (ê ïğèìåğó '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", èëè ìèíèìàëüíûé ğàçìåğ ôàéëà &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", èëè ìàêñèìàëüíûé ğàçìåğ ôàéëà &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Äğóãèå (ìåäëåííûå) çàïğîñû ìîãóò áûòü îòêëş÷åíû â êîíôèãóğàöèè.</i><br />
		<u>Ìàñêè</u><br />
		Ïîèñê ïî øàáëîíó, ñîäåğæàùåìó íåêîòîğûå ñïåöèàëüíûå (ãğóïïîâûå) ñèìâîëû:<br />
		'*' îçíà÷àåò ëşáîå êîëè÷åñòâî ëşáûõ ñèìâîëîâ<br />
		'?' îçíà÷àåò îäèí ëşáîé ñèìâîë<br />
		Ê ïğèìåğó '*.iso' îçíà÷àåò: âñå ôàéëû, ÷üè íàçâàíèÿ çàêàí÷èâàşòñÿ íà '.iso'<br />
		<u>Ñòğîêè</u><br />
		Ïîèñê ïî ÷àñòÿì (ïîäñòğîêàì) íàçâàíèé ôàéëîâ.<br />
		<u>Ğåãóëÿğíûå âûğàæåíèÿ</u><br />
		Íàèáîëåå ìîùíûé ìåòîä ïîèñêà. Ôàéëû èùóòñÿ ñ èñïîëüçîâàíèåì ğåãóëÿğíûõ âûğàæåíèé (ğåãåêñïîâ). Èñïîëüçóåòñÿ ğàñøèğåííàÿ âåğñèÿ ğåãóëÿğíûõ âûğàæåíèé.<br />
<?php
		break;
	case "sk":
?>
		<b>Hµadanie súborov</b><br />
		<i>Fast File Search je optimalizovanı na hµadanie súborov podµa masky, keï sú zadané be¾né znaky (nie '*' alebo '?') na zaèiatku alebo na konci masky (napr. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", alebo veµkos» súboru &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", alebo veµkos» súboru &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Ostatné (tj. pomalé) vyhµadávania mô¾u bı» zakázané v konfiguracii.</i><br />
		<u>Maska</u><br />
		Súbory sa vyhµadávajú podµa masky mena súboru, ktorá mô¾e obsahova» niektoré z tıchto zastupujúcich znakov:<br />
		'*' nahrádza µubovoµnı poèet µubovoµnıch znakov<br />
		'?' nahrádza jeden µubovoµnı znak<br />
		Napr. '*.iso' znamená: v¹etky súbory , ktorıch meno konèí na '.iso'<br />
		<u>Podre»azec</u><br />
		Súbory sa hµadajú podµa èasti (podre»azca) ich mena.<br />
		<u>Regulárny vıraz</u><br />
		Súbory sa hµadajú podµa regulárneho vırazu, pou¾íva sa roz¹írena verzia regulárnych vırazov.<br />
<?php
		break;
	case "uk":
?>
		<b>ğÏÛÕË ÆÁÌ¦×</b><br />
		<i>Fast File Search ÏĞÔÉÍ¦ÚÏ×ÁÎÉÊ ÄÌÑ ĞÏÛÕËÕ ÆÁÊÌ¦× ÚÁ ÍÁÓËÏÀ. áÌÅ ÚÁĞÉÔ ĞÏ×ÉÎÅÎ Í¦ÓÔÉÔÉ ÄÅË¦ÌØËÁ ÎÏÒÍÁÌØÎÉÈ ÓÉÍ×ÏÌ¦× (ÎÅ '*' ŞÉ '?'), ÑË¦ ĞÏ×ÉÎÎ¦ ÚÎÁÈÏÄÉÔÉÓÑ Õ ĞÏŞÁÔËÕ ŞÉ Ë¦ÎÃ¦ ÍÁÓËÉ (ÎÁĞÒÉËÌÁÄ '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", ÁÂÏ Í¦Î¦ÍÁÌØÎÉÊ ÒÏÚÍ¦Ò ÆÁÊÌÁ &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", ÁÂÏ ÍÁËÓÉÍÁÌØÎÉÊ ÒÏÚÍ¦Ò ÆÁÊÌÁ &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		¶ÎÛ¦ (ĞÏ×¦ÌØÎ¦) ÚÁĞÉÔÉ ÍÏÖÕÔØ ÂÕÔÉ ×¦ÄËÌÀŞÅÎ¦ Õ ËÏÎÆ¦ÇÕÒÁÃ¦§.</i><br />
		<u>íÁÓËÉ</u><br />
		ğÏÛÕË ÚÁ ÛÁÂÌÏÎÏÍ, ÑËÉÊ Í¦ÓÔÉÔØ ÄÅÑË¦ ÓĞÅÃ¦ÁÌØÎ¦ (ÇÒÕĞÏ×¦) ÓÉÍ×ÏÌÉ:<br />
		'*' ÏÚÎÁŞÁ¤ ÂÕÄØ-ÑËÕ Ë¦ÌØË¦ÓÔØ ÂÕÄØ-ÑËÉÈ ÓÉÍ×ÏÌ¦×<br />
		'?' ÏÚÎÁŞÁ¤ ÏÄÉÎ ÂÕÄØ-ÑËÉÊ ÓÉÍ×ÏÌ<br />
		îÁĞÒÉËÌÁÄ '*.iso' ÏÚÎÁŞÁ¤: ÕÓ¦ ÆÁÊÌÉ, ÎÁÚ×É ÑËÉÈ ÚÁË¦ÎŞÕÀÔØÓÑ ÎÁ '.iso'<br />
		<u>óÔÒÏËÉ</u><br />
		ğÏÛÕË ÚÁ ŞÁÓÔÉÎÁÍÉ (Ğ¦ÄÓÔÒÏËÁÍÉ) ÎÁÚ× ÆÁÊÌ¦×.<br />
		<u>òÅÇÕÌÑÒÎ¦ ×ÉÒÁÚÉ</u><br />
		îÁÊÂ¦ÌØÛ ĞÏÔÕÖÎÉÊ ÍÅÔÏÄ ĞÏÛÕËÕ. æÁÊÌÉ ÛÕËÁÀÔØÓÑ Ú ×ÉËÏÒÉÓÔÁÎÎÑÍ ÒÅÇÕÌÑÒÎÉÈ ×ÉÒÁÚ¦× (ÒÅÇÅËÓĞ¦×). ÷ÉËÏÒÉÓÔÏ×Õ¤ÔØÓÑ ÒÏÚÛÉÒÅÎÎÁ ×ÅÒÓ¦Ñ ÒÅÇÕÌÑÒÎÉÈ ×ÉÒÁÚ¦×.<br />
<?php
		break;
}
?>
</td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<?php
switch ($lang)
{
	default:
	case "en":
?>
		<b>Searching directories</b><br />
		Directories are searched by the same methods like files are. There is no preferred search method for searching directories.
<?php
		break;
	case "bg":
?>
		<b>Òúğñåíå íà äèğåêòîğèè</b><br />
		Òúğñåíåòî ïî äèğåêòîğèè ñòàâà ïî ñúùèÿ íà÷èí, ïî êîéòî ñå òúğñÿò è ôàéëîâå. Íÿìà ïğåäïî÷èòàí íà÷èí çà òúğñåíå íà äèğåêòîğèè.
<?php
		break;
	case "cs":
?>
		<b>Hledání adresáøù</b><br />
		Adresáøe se hledají stejnımi metodami jako soubory. Pro hledání adresáøù není preferována ¾ádná z metod.
<?php
		break;
	case "de":
?>
		<b>Verzeichnisse suchen</b><br />
		Verzeichnisse werden mit der selben Methode wie Dateien gesucht. Bei der Verzeichnissuche gibt es keine bevorzugte Suchmethode.
<?php
		break;
	case "es":
?>
		<b>Búsqueda de directorios</b><br />
		Los directorios se buscan de la misma forma que los ficheros. No existe ningún método preferido para la búsqueda de directorios.
<?php
		break;
	case "fr":
?>
		<b>Rechercher des répertoires</b><br />
		Les répertoires sont recherchés comme les fichiers. Il n'y a pas de méthode préférée pour les répertoires.
<?php
		break;
	case "hu":
?>
		<b>Könyvtárak keresése</b><br />
		A könyvtárak a fájlokhoz hasonló módon kereshetõek. Könyvtárak esetében nincs megkülönböztetett keresési mód.
<?php
		break;
	case "lt":
?>
		<b>Direktorijø paieğka</b><br />
		Direktorijos bus ieğkomos tokiu paèiu metodu kaip ir failai.
<?php
		break;
	case "nb":
?>
		<b>Søking etter kataloger</b><br />
		Søk etter kataloger bruker samme metodeer som søk etter filer. Det er ingen spesiell metode for søk etter kataloger.
<?php
		break;
	case "nl":
?>
		<b>Mappen zoeken</b><br />
		Mappen worden op dezelfde manier gezocht als bestanden. Er is geen voorkeursmethode om mappen te zoeken.
<?php
		break;
	case "pl":
?>
		<b>Wyszukiwanie katalogów</b><br />
		Katalogów mo¿na poszukiwaæ dok³adnie takimi samymi metodami jak pliki. Nie ma jakiego¶ specjalnego sposobu wyszukiwania katalogów.
<?php
		break;
	case "ro":
?>
		<b>CÄƒutarea directoarelor</b><br />
		CÄƒutarea directoarelor se face dupÄƒ aceeaÅŸi metodÄƒ ca la cÄƒutarea fiÅŸierelor. Nu existÄƒ o metodÄƒ preferatÄƒ pentru cÄƒutarea directoarelor.
<?php
		break;
	case "ru":
?>
		<b>Ïîèñê äèğåêòîğèé</b><br />
		Äëÿ ïîèñêà äèğåêòîğèé ìîæíî èñïîëüçîâàòü òå æå ìåòîäû, ÷òî è â ôàéëîâîì ïîèñêå.
<?php
		break;
	case "sk":
?>
		<b>Vyhµadávanie adresárov</b><br />
		Adresáre sa hµadajú rovnakımi spôsobmi ako súbory. Pre vyhµadávanie adresárov nieje uprednostòovanı ¾iadny spôsob.
<?php
		break;
	case "uk":
?>
		<b>ğÏÛÕË ÄÉÒÅËÔÏÒ¦Ê</b><br />
		äÌÑ ĞÏÛÕËÕ ÄÉÒÅËÔÏÒ¦Ê ×ÉËÏÒÉÓÔÏ×ÕÀÔØÓÑ Ô¦ ÓÁÍ¦ ÍÅÔÏÄÉ, İÏ Ê Õ ÆÁÊÌÏ×ÏÍÕ ĞÏÛÕÃ¦.
<?php
		break;
}
?>
</td></tr>
<?php
if ($advanced) {
?>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<?php
switch ($lang)
{
	default:
	case "en":
		echo '<b>Online Check</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Verifies whether the host is online with a simple ping. This is not 100% reliable because firewalls can be configured not to allow replies to ping.';
				break;
			case 'connect':
				echo 'Verifies whether the host is online by connecting to the host.';
				break;
		}
		echo ' <i>It will NOT check whether the file can still be found on the host.</i>';
		break;
	case "bg":
		echo '<b>Ïğîâåğêà çà äîñòúïíîñò</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Ïğîâåğêà äàëè õîñòúò å äîñòúïåí ñ ping. Òîâà íå å 100% íàäåæäíî, ïîíåæå ìîæå äà èìà firewall, êîéòî äà íå ïîçâîëÿâà îòãîâîğ.';
				break;
			case 'connect':
				echo 'Ïğîâåğêà äàëè õîñòúò å äîñòúïåí ñ äèğåêòíà âğúçêà äî íåãî.';
				break;
		}
		echo ' <i>Òîâà íå å ïğîâåğêà äàëè ôàéëîâåòå âñå îùå ñúùåñòâóâàò íà ñàìèÿ õîñò.</i>';
		break;
	case "cs":
		echo '<b>Kontrola dostupnosti serveru</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Otestuje, jestli je server dostupnı, posláním jednoho pingu. Není to 100% spolehlivé, proto¾e firewally mohou bıt nakonfigurovány tak, aby nepropou¹tìly odpovìdi na ping.';
				break;
			case 'connect':
				echo 'Otestuje, jestli je server dostupnı, tím, ¾e se pokusí pøipojit na server.';
				break;
		}
		echo ' <i>Netestuje se, jestli se soubor je¹tì nachází na serveru.</i>';
		break;
	case "de":
		echo '<b>Online-&Uuml;berpr&uuml;fung</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo '&Uuml;berpr&uuml;ft die Verf&uuml;gbarkeit eines Servers anhand eines simplen Pings. Dies ist nicht 100%ig zuverl&auml;ssig, da Firewalls teilweise Pings nicht erlauben.';
				break;
			case 'connect':
				echo '&Uuml;berpr&uuml;ft die Verf&uuml;gbarkeit eines Servers durch einen Verbindungsaufbau.';
				break;
		}
		echo ' <i>Es wird NICHT &uuml;berpr&uuml;ft, ob die Datei &uuml;berhaupt noch auf dem Server existiert.</i>';
		break;
	case "es":
		echo '<b>Comprobar disponibilidad</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Verifica si el servidor está disponible con un simple \'ping\'. Esto no es 100% fiable pues los cortafuegos pueden estar configurados para no responder a \'pings\'.';
				break;
			case 'connect':
				echo 'Verifica si el servidor está disponible tratando de conectarse.';
				break;
		}
		echo ' <i>Esta comprobación NO chequeará si el fichero se encuentra aún en el servidor.</i>';
		break;
	case "fr":
		echo '<b>En ligne ?</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Vérifie si la machine est allumée en envoyant une simple requête "ping". Cela n\'est pas sûr à 100% car on peut configurer un firewall pour bloquer les "ping".';
				break;
			case 'connect':
				echo  'Vérifie si la machine est allumée en s\'y connectant.';
				break;
		}
		echo ' <i>Cela ne vérifiera PAS si le fichier est toujours présent sur la machine.</i>';
		break;
	case "hu":
		echo '<b>Elérhetõség vizsgálata</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Pinggel ellenõrzi, hogy a host elérhetõ -e. Ez nem teljesen megbízható, mivel a tûzfalak kiszûrhetik a pingre adott válaszokat.';
				break;
			case 'connect':
				echo 'Kapcsolódással ellenõrzi, hogy a host elérhetõ -e.';
				break;
		}
		echo ' <i>Nem ellenõrzi, hogy a fájl létezik -e a szerveren.</i>';
		break;
	case "lt":
		echo '<b>Online Tikrinimas</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Paprasèiausiai patikrina  ping komanda ar online adresas. Tai negarantuoja 100% , kartais ugniasienës neatsako á uşklausas.';
				break;
			case 'connect':
				echo 'Patikrina paprasèiausiai prisijungdamas.';
				break;
		}
		echo ' <i>Online Tikrinimas yra labai lëtas (iki ', $c["ONLINE_CHECK_TIMEOUT"];
		echo ' second';
		if ($c["ONLINE_CHECK_TIMEOUT"] != 1)
			echo 's';
		echo ' vienam adresui). Netikrina ar failai yra nurodytame adrese.</i>';
		break;
	case "nb":
		echo '<b>Sjekke om server er online</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Finner ut om en server er tilgjengelig ved å bruke ping. Denne metden er ikke 100% pålitelig siden FW kan settes opp til å ikke tillate svar på ping.';
				break;
			case 'connect':
				echo 'Sjekker om server er online ved å koble til.';
				break;
		}
		echo '<i>Online sjekk kan ikke si om en fil er funnet eller ikke, den sier kun noe om status på server.</i>';
		break;
	case "nl":
		echo '<b>On line Test</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Test of het systeem aanstaat door het ping commando uit te voeren. Deze manier is niet 100% betrouwbaar, omdat sommige firewalls niet toestaan dat het ping commando wordt beantwoord.';
				break;
			case 'connect':
				echo 'Test of het systeem aanstaat door verbinding te maken met het systeem.';
				break;
		}
		echo ' <i>Het test niet of het bestand of de map nog aanwezig is op het systeem.</i>';
		break;
	case "pl":
		echo '<b>Test Online</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Sprawdza czy host (komputer) jest dostêpny metod± ping. Na tej metodzie nie mo¿na polegaæ w 100%, poniewa¿ niektóre firewalle nie odpowiadaj± na pinga.';
				break;
			case 'connect':
				echo 'Sprawsza czy host (komputer) jest dostêpny poprzez testowe po³±czenie siê z nim.';
				break;
		}
		echo ' <i>To nie spowoduje sprawdzenia czy plik nadal znajduje siê na komputerze.</i>';
		break;
	case "ro":
		echo '<b>VerificÄƒ dacÄƒ gazda este online</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'VerificÄƒ dacÄƒ este posibilÄƒ conectarea la gazdÄƒ folosind un simplu ping. AceastÄƒ metodÄƒ nu este de Ã®ncredere deoarece firewallurile pot fi configurate sÄƒ nu permitÄƒ raspuns la ping.';
				break;
			case 'connect':
				echo 'VerificÄƒ dacÄƒ gazda este online prin conectarea la gazdÄƒ.';
				break;
		}
		echo ' <i>Nu va verifica dacÄƒ fiÅŸierul se mai gaseÅŸte pe calculatorul gazdÄƒ.</i>';
		break;
	case "ru":
		echo '<b>Ïğîâåğêà íà äîñòóïíîñòü</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Ïğîâåğÿåò äîñòóïíîñòü õîñòà â ìîìåíò ïîèñêà, ïèíãóÿ åãî. İòîò ìåòîä íå ÿâëÿåòñÿ 100% ïğàâèëüíûì,  òàê êàê íåêîòîğûå ôàéğâîëû ìîãóò áûòü çàïğåùàòü îòâåòû íà ïèíãè..';
				break;
			case 'connect':
				echo 'Ïğîâåğÿåò äîñòóïíîñòü õîñòà â ìîìåíò ïîèñêà ìåòîäîì êîííåêòà ñ íèì.';
				break;
		}
		break;
	case "sk":
		echo '<b>Kontrola dostupnosti serverov</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Otestuje èi je server dostupnı poslaním jedného ping paketu. Nie je to úplne spoµahlivé preto¾e niektoré firewally mo¾u by» nakonfigurované tak , aby neprepú¹taly odpovede na ping pakety.';
				break;
			case 'connect':
				echo 'Otestuje, èi je server dostupnı tak , ¾e sa naò pokúsi pripoji».';
				break;
		}
		echo ' <i>Netestuje èi sa súbor e¹te nachádza na serveri</i>';
		break;
	case "uk":
		echo '<b>ğÅÒÅ×¦ÒËÁ ÎÁ ÄÏÓÔÕĞÎ¦ÓÔØ</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'ğÅÒÅ×¦ÒÑ¤ ÄÏÓÔÕĞÎ¦ÓÔØ ÈÏÓÔÁ Õ ÍÏÍÅÎÔ ĞÏÛÕËÕ, Ğ¦ÎÇÕÀŞÉ ÊÏÇÏ . ãÅÊ ÍÅÔÏÄ ÎÅ ¤ ÎÁ 100% ×¦ÒÎÉÍ, ÏÓË¦ÌØËÉ ÄÅÑË¦ ÈÏÓÔÉ ÎÅ ×¦ĞÏ×¦ÄÁÀÔØ ÎÁ Ğ¦ÎÇ (ÚÁÂÏÒÏÎÅÎÏ Õ ĞÒÁ×ÉÌÁÈ ÆÁÊÒ×ÏÌÌÕ)...';
				break;
				case 'connect':
				echo 'ğÅÒÅ×¦ÒÑ¤ ÄÏÓÔÕĞÎ¦ÓÔØ ÈÏÓÔÁ Õ ÍÏÍÅÎÔ ĞÏÛÕËÕ ÍÅÔÏÄÏÍ ËÏÎÅËÔÕ Ú ÎÉÍ.';
				break;
		}
		break;
}
?>
</td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<?php
switch ($lang)
{
	default:
	case "en":
?>
		<b>Bounds of file size</b><br />
		If you want to find only files larger than some size or smaller than some size (or both) specify the appropriate bound(s). The bounds of file size are in bytes, you can add suffix 'K' for kilobytes, 'M' for megabytes, 'G' for gigabytes, 'k' for thousands of bytes, 'm' for millions of bytes, 'g' for billions of bytes.<br />
		For example '50M' means 50 megabytes.
<?php
		break;
	case "bg":
?>
		<b>Îãğàíè÷åíî òúğñåíå ïî ğàçìåğ íà ôàéë</b><br />
		Àêî Âèå èñêàòå äà íàìåğèòå ñàìî ôàéëîâå íàä èëè ïîä îïğåäåëåíà ãîëåìèíà (èëè è äâåòå), óêàæåòå îãğàíè÷åíèÿ çà ğàçìåğà. Îãğàíè÷åíèåòî íà ôàéëîâàòà ãîëåìèà å â áàéòîâe, Âèå ìîæåòå äà äîáàâèòå íàñòàâêà 'K' çà êèëîáàéòîâå, 'M' çà ìåãàáàéòîâå, 'G' çà ãèãàáàéòîâå, 'k' çà õèëÿäè áàéòîâå, 'm' çà ìèëèîíè áàéòîâå, 'g' çà ìèëèàğäè áàéòîâå.<br />
		Íàïğèìåğ, íàïèøåòå '50M' çà 50 ìåãàáàéòà.
<?php
		break;
	case "cs":
?>
		<b>Omezení velikosti souborù</b><br />
		Pokud chcete vyhledat pouze soubory vìt¹í ne¾ nìjaká velikost nebo men¹í ne¾ nìjaká velikost (nebo obojí), zadejte pøíslu¹né omezení velikosti souborù. Meze velikosti souboru jsou v bajtech, mù¾ete pøidat pøíponu 'K' pro kilobajty, 'M' pro megabajty, 'G' pro gigabajty, 'k' pro tisíce bajtù, 'm' pro miliony bajtù, 'g' pro miliardy bajtù.<br />
		Napøíklad '50M' znamená 50 megabajtù.
<?php
		break;
	case "de":
?>
		<b>Dateigr&ouml;&szlig;en</b><br />
		Wenn nur Dateien einer bestimmten Gr&ouml;&szlig;e gefunden werden sollen, muss eine Schranke angegeben werden. Dabei werden die Dateigr&ouml;&szlig;en als Bytes interpretiert. Es kann hinter jede Zahl ein 'K' f&uuml;r Kilobytes, ein 'M' f&uuml;r Megabytes, ein 'G' f&uuml;r Gigabytes, ein 'k' f&uuml;r tausende Bytes, ein 'm' f&uuml;r millionen von Bytes, oder ein 'g' f&uuml;r milliarden von Bytes als Suffix angegeben werden.<br />
		z.B. '50M' bedeutet 50 Megabytes.
<?php
		break;
	case "es":
?>
		<b>Límites del tamaño de fichero</b><br />
		Si quiere encontrar sólo ficheros más grandes que un tamaño, o más pequeños que un tamaño (o ambos) espedifique los límites apropiados. Los límites del tamaño de fichero son por defecto en bytes,  puede añadir el sufijo 'K' para kilobytes 'M' para megabytes, 'G' para gigabytes, 'k' para miles de bytes, 'm' para millones de bytes, 'g' para miles de millones de bytes.<br />
		Por ejemplo, '50M' significa 50 megabytes.
<?php
		break;
	case "fr":
?>
		<b>Limites de taille de fichiers</b><br />
		Si vous ne chechez que les fichiers de taille supérieure ou inférieure à une certaine taille (ou les deux à la fois), spécifier les limites adéquates. Les tailles sont en octets, mais vous pouvez ajouter les suffixe 'K' pour kilooctets, 'M' pour mégaoctets, 'G' pour gigaoctets, 'k' pour milliers d'octets, 'm' pour millions d'octets, 'g' for milliards d'octets.<br />
		Par exemple '50M' signifie 50 megaoctets.
<?php
		break;
	case "hu":
?>
		<b>Fájlméret korlátozás</b><br />
		Ha csak meghatározott méretû fájlokra kíván keresni, állítsa be a kívánt intervallumot. A fájlméret határa bájtban értendõ, használhat szuffixumokat 'K' kilobájt, 'M' megabájt, 'G' gigabájt, 'k' ezer bájt, 'm' millió bájt, 'g' milliárd bájt.<br />
		Például '50M' = 50 megabájt.
<?php
		break;
	case "lt":
?>
		<b>Failø riba</b><br />
		Jei nori surasti failus didesnius nei kaşkoks dydis ar maşesnis nei kaşkoks dydis reikia nustatyti atitinkamus dydzşius. Failø dydşiai yra skaièiuojami baitais, tu gali pridëti raidæ 'K' - kilobaitams, 'M' - megabaitams, 'G' - gigabaitams, 'k' - tûkstanèiui baitø, 'm' - milijonui baitø, 'g' - bilijonui baitø.<br />
		Pavyzdşiui '50M' reiğkia 50 megabaitø.
<?php
		break;
	case "nb":
?>
		<b>Søk med filstørrelse</b><br />
		Dersom det kun søkes etter filer som er større eller mindre enn en viss størrelse (eller både og) kan de ønskede grensene spesifises. Grensene for filstørrelse angis i bytes, og du kan legge til endelsene 'K' for kilobytes, 'M' for megabytes, 'G' for gigabytes. Én kilobyte er 2^10 bytes = 1024 bytes = 1KB. En annen regnemetode er 1000 byte er en kilo, dette angis med små bokstaver. Da kan denne anvisningen benyttes: 'k' for n*1000 bytes, 'm' for millioner bytes, 'g' for milliarder av bytes.<br />
		Et eksempel: '50M' betyr 50 megabytes. Eller 50m som betyr 50 millioner bytes. Når filer er i denne størrelsen er det en relativt stor forskjell mellom 50M og 50m. Den ene er 50*(1024*1024) bytes den andre rett og slett 50 000 000 bytes.
<?php
		break;
	case "nl":
?>
		<b>Limieten voor bestandsgrootte</b><br />
		Limieten kun je gebruiken als je alleen bestanden wilt vinden die groter of kleiner (of allebei) zijn dan de opgegeven bestandsgrootte. De limieten zijn in bytes, je kan 'K' toevoegen voor kilobytes, 'M' voor megabytes, 'G' voor gigabytes. 'k' voor duizend bytes, 'm' voor een miljoen bytes en 'g' voor een miljard bytes.<br />
		'50M' betekent bijvoorbeeld 50 megabytes.
<?php
		break;
	case "pl":
?>
		<b>Rozmiar pliku</b><br />
		Je¶li chcesz, mo¿esz poszukaæ plików wiêkszych lub mniejszych od pewnego rozmiaru (lub obu na raz) ustaj±c zakres. Rozmiar pliku podawany jest w bajtach, jesli chcesz, dodaj przyrostek 'K' dla kilobajtów, 'M' dla megabajtów, 'G' dla gigabajtów, 'k' dla tysiecy bajtów, 'm' dla milionów bajtów, 'g' dla miliardów bajtów.<br />
		Dla przyk³adu '50M' znaczy 50 megabajtów.
<?php
		break;
	case "ro":
?>
		<b>Limitele mÄƒrimii fiÅŸierelor</b><br />
		DacÄƒ doriÅ£i sÄƒ gasiÅ£i doar fiÅŸierele mai mari decÃ¢t o anumitÄƒ valoare sau fiÅŸierele mai mici decÃ¢t o anumitÄƒ valoare (sau amÃ¢ndouÄƒ) trebuie sÄƒ specificaÅ£i limitele corespunzatoare.
		Limitele mÄƒrimii fiÅŸierelor sunt Ã®n octeti, puteÅ£i adÄƒuga sufixul 'K' pentru kiloocteÅ£i, 'M' pentru megaocteÅ£i, 'G' pentru gigaocteÅ£i, 'k' pentru mii de octeÅ£i, 'm' pentru milioane de octeÅ£i, 'g' pentru miliarde de octeÅ£i.<br />
		De exemplu '50M' Ã®nseamnÄƒ 50 megaocteÅ£i.
<?php
		break;
	case "ru":
?>
		<b>Îãğàíè÷åíèå ğàçìåğà ôàéëîâ</b><br />
		Åñëè Âû õîòèòå íàéòè ôàéëû áîëüøå è/èëè ìåíüøå îïğåäåëåííîãî ğàçìåğà, óêàæèòå ãğàíèöû ıòèõ ğàçìåğîâ. Ïî óìîë÷àíèş ğàçìåğ ôàéëà óêàçûâàåòñÿ â áàéòàõ, ìîæåòå äîáàâèòü ñóôôèêñ 'K' äëÿ êèëîáàéò, 'M' äëÿ ìåãàáàéò, 'G' äëÿ ãèãàáàéò, 'k' äëÿ òûñÿ÷è áàéò, 'm' äëÿ ìèëëèîíà áàéò, 'g' äëÿ ìèëëèàğäà áàéò.<br />
		Ê ïğèìåğó, '50M' îçíà÷àåò 50 ìåãîáàéò.
<?php
		break;
	case "sk":
?>
		<b>Obmedzenie veµkosti súboru</b><br />
		Ak chcete vyhµada» iba súbory väè¹ie ako nejaká veµkos» alebo men¹ie ako nejaká veµkos» (alebo obidve) , zadajte príslu¹né obmedzenie veµkosti súborov. Hranice veµkosti súborov sú v bajtoch, mô¾ete prida» príponu 'K' pre kilobajty, 'M' pre megabajty, 'G' pre gigabajty, 'k' pre tisícky bajtov, 'm' pre milióny bajtov, 'g' pre miliardy bajtov.<br />
		Napríklad '50M' znamená 50 megabajtov.
<?php
		break;
	case "uk":
?>
		<b>ïÂÍÅÖÅÎÎÑ ÒÏÚÍ¦ÒÕ ÆÁÊÌ¦×</b><br />
		ñËİÏ ×É ÂÁÖÁ¤ÔÅ ÚÎÁÊÔÉ ÆÁÊÌÉ Â¦ÌØÛÅ ÔÁ/ÁÂÏ ÍÅÎÛÅ ×ÉÚÎÁŞÅÎÏÇÏ ÒÏÚÍ¦ÒÕ, ×ËÁÖ¦ÔØ ÇÒÁÎÉÃ¦ ÃÉÈ ÒÏÚÍ¦Ò¦×. ğÏ ÚÁÍÏ×ŞÅÎÎÀ ÒÏÚÍ¦Ò ÆÁÊÌÕ ×ËÁÚÕ¤ÔØÓÑ Õ ÂÁÊÔÁÈ, ÁÌÅ ÍÏÖÌÉ×Ï ÄÏÄÁÔÉ ÓÕÆ¦ËÓ 'K' ÄÌÑ Ë¦ÌÏÂÁÊÔ, 'M' ÄÌÑ ÍÅÇÁÂÁÊÔ, 'G' ÄÌÑ Ç¦ÇÁÂÁÊÔ, 'k' ÄÌÑ ÔÉÓÑŞ¦ ÂÁÊÔ, 'm' ÄÌÑ Í¦ÌØÊÏÎÕ ÂÁÊÔ, 'g' ÄÌÑ Í¦ÌØÑÒÄÕ ÂÁÊÔ.
		îÁĞÒÉËÌÁÄ, '50M' ÏÚÎÁŞÁ¤ 50 ÍÅÇÁÂÁÊÔ.
<?php
		break;
}
?>
</td></tr>
<?php
}
?>
</table>
</td></tr></table>
