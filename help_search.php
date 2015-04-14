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
		<b>��� �� �����?</b><br />
		�������� ���� ��� ������ ���� �� ������� (����� ��-���� ������� �� ������� � ������� �� ����������). ������� �� ������� � "���", �������� '+' � �������� �� ������ �� ����� �� ������� "�". ���������� �� ������ �� �������� (' ') � ���� ('+'). <br /> ��� ��������� �� �� ����� ������� ����� ������ � ����� �����, ����� abc = aBc = ABC.
<?php
		break;
	case "cs":
?>
		<b>Jak hledat?</b><br />
		Zadejte jeden nebo v�ce v�raz� (viz n�e Vyhled�v�n� soubor� a Vyhled�v�n� adres���). Implicitn� m�d je NEBO, pokud chcete m�d A, p�idejte '+' p�ed vyhled�van� v�raz. V�razy jsou odd�leny mezerou nebo '+'. Pokud uvedete pouze jeden NEBO v�raz, v�raz je zm�n�n na A v�raz, proto�e jeden NEBO v�raz nem� smysl.<br />Vyhled�va� nerozli�uje mal� a velk� p�smena, tj. abc = aBc = ABC
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
		<b>�C�mo buscar?</b><br />
		Introduzca uno o m�s t�rminos de b�squeda (ver m�s abajo Busqueda de ficheros y B�squeda de directorios). El modo por defecto es O, a�adiendo '+' delante de un t�rmino de b�squeda para forzar Y. Los t�rminos a buscar est�n separados por espacio o '+'. Si s�lo hay un t�rmino O se cambia por Y pues un s�lo t�rmino O no tiene sentido.<br /> L�s b�squedas no son sesibles a may�sculas, es decir: abc = aBc = ABC.
<?php
		break;
	case "fr":
?>
		<b>Comment faire une recherche ?</b><br />
		Entrez un ou plusieurs termes de recherche (voyez ci-dessous Chercher des fichier et Chercher des r�pertoires). Le mode par d�faut est OU, ajoutez un '+' devant un terme de recherche pour forcer le mode ET. Les termes de la recherche peuvent �tre s�par�s par un espace ou un '+'. S'il n'y a qu'un terme OU, il est chang� en ET parce qu'un terme OU seul ne veut rien dire.<br />La recherche ne prend pas en compte la casse, c.a.d. abc = aBc = ABC
<?php
		break;
	case "hu":
?>
		<b>Hogyan keressen?</b><br />
		�rjon be egy vagy t�bb keres�si felt�telt (l�sd lentebb a f�jlok �s k�nyvt�rak keres�s�n�l). Alap�rtelmez�sben a szavak k�z�tt VAGY kapcsolat van, �rjon '+' jelet a keresend� sz� el�, �gy �S kapcsolat hozhat� l�tre. A szavakat sz�k�zzel, vagy + jellel v�lassza el. Egy sz� be�r�sa eset�n automatikusan a VAGY kapcsol� �S-re v�ltozik .<br />A keres�s nem k�l�nb�zteti meg a kis- �s nagybet�ket. Pl. abc = aBc = ABC
<?php
		break;
	case "lt":
?>
		<b>Kaip ie�koti?</b><br />
		Para�yk vien� ar kelet� ie�kom� termin�. Standarti�kai yra dedama '+' ie�koma �od�. Ie�komi �od�iai yra skiriami tarpu arba '+'. Jeigu yra tik vienas ie�komas �odis tai jeigu paie�ka nieko neranda, dad�k dar vien� �od�..<br />Paie�kos pavyzdys: abc = aBc = ABC
<?php
		break;
	case "nb":
?>
		<b>Hvordan s�ke?</b><br />
		Skriv inn ett eller flere s�keord (se under s�king etter filer og s�king etter kataloger). Standard modus er OR, legg til '+' foran en s�keterm for � benytte AND. S�ketermer er separert med mellomrom eller '+'. Dersom det kun er �n OR-term endres den til en AND-term siden en OR-term alene ikke har noen mening.<br />Alle s�k kan utf�res med sm�/store bokstaver omhverandre, f.eks. abc = aBc = ABC
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
		<b>Jak szuka�?</b><br />
		Wpisz jeden lub kilka wyraz�w (zobacz ni�ej jak szuka� plik�w lub katalog�w). Domy�lny tryb traktowania wyraz�w to OR (LUB - znajduje wyraz1 LUB wyraz2 LUB ...), dodaj '+' przed wyrazami, �eby wymusi� AND (czyli wyraz1 I wyraz2 I ...). Poszukiwane wyrazy nale�y oddziela� spacj� lub plusem - '+'. Je�li jest tylko jedno wyra�enie OR, zamieniane jest na AND (bo jedno OR nie ma sensu).<br />Wyszukiwanie jest nieczu�e na rozmiar literek, tzn. abc = aBc = ABC
<?php
		break;
	case "ro":
?>
		<b>Cum să căutăm?</b><br />
		Introduceţi unul sau mai mulţi termeni de căutare (vezi mai jos Căutarea fişierelor şi Căutarea directoarelor). Modul implicit este SAU, adăugaţi '+' în faţa unui termen căutat pentru a forţa ŞI. Termenii căutaţi sunt separaţi printr-un blanc (spaţiu) sau '+'. Dacă există un singur termen SAU, el va fi schimbat în termen ŞI deoarece un singur termen SAU nu are sens. <br />Căutarea se face folosind faptul că majusculele sunt nesemnificative, exemplu abc = aBc = ABC
<?php
		break;
	case "ru":
?>
		<b>��� ������?</b><br />
		������� ���� ��� ��������� ��������� ������ (������ ���� � ������ ������ ��� ����������). ����� �� ��������� - "���", �������� '+' � ������ ����� ��� ������ "�" ������. ��������� ����� ����������� ��������� ��� '+'.<br />����� ��������-���������, �� ���� abc = aBc = ABC
<?php
		break;
	case "sk":
?>
		<b>Ako vyh�ad�va� ?</b><br />
		Zadajte jeden alebo viac v�razov (vi� ni�sie Vyh�ad�vanie s�borov a Vyh�ad�vanie adres�rov). Predvolen� m�d je ALEBO, ak chcete m�d A, pridajte '+' pred vyh�ad�van� v�raz. V�razy s� oddelen� medzerou alebo '+'. Ak uvediete iba jeden ALEBO v�raz, bude zmenen� na A, preto�e jeden ALEBO nem� zmysel.<br />Vyh�ad�va� nerozli�uje mal� a ve�k� p�smen� tj. abc = aBc = ABC
<?php
		break;
	case "uk":
?>
		<b>�� ������?</b><br />
		���Ħ�� ���� ��� ��˦���� ��������� ���� (��צ���� ����� ��� ����� ���̦� �� �������Ҧ�). ����� �� ���������� - "���", ������� '+' �� ������� ����� ��� ������ "��" ������. ������צ ����� ���Ħ������� ���¦��� ��� '+'.
����� ��Ǧ����-����������, ����� abc = aBc = ABC
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
		<b>�������</b><br />
		��� ������ �� ��������� ��������� ���� � ������ ������� (""), ��� �� ������� ����� �������� ������� ('+', ��������), ����� ���� ������������ ���������; � ���� ������ �� �� ����� ��������.
<?php
	    break;
	case "cs":
?>
		<b>Uzav�r�n� do uvozovek</b><br />
		V�raz m��ete uzav��t do uvozovek (""), pokud obsahuje n�jak� znak ('+', mezery), kter� by jinak zm�nil v�znam dotazu.
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
		Puede poner en su b�squeda comillas ("") si el t�rmino de b�squeda tiene car�cteres ('+', espacios) que podr�an cambiar el resultado de la b�squeda.
<?php
		break;
	case "fr":
?>
		<b>Les guillemets</b><br />
		Vous pouvez entourer les termes de votre recherche par des guillemets ("") s'ils contiennent des charact�res ('+', espaces) qui, sinon, modifieraient la recherche.
<?php
		break;
	case "hu":
?>
		<b>Id�z�jel</b><br />
		Ha a keresend� kifejez�s sz�k�zt, vagy + jelet tartalmaz, tegye id�z�jelbe. ("") K�l�nben az megv�ltoztathatja a keres�st.
<?php
		break;
	case "lt":
?>
		<b>Kabut�s</b><br />
		Galima paie�kos �od�ius u�daryti � kabutes ("").
<?php
		break;
	case "nb":
?>
		<b>Anf�rselsstegn</b><br />
		S�keordene kan settes i "" dersom de inneholder mellomrom/space, '+' eller andre spesielle tegn. Dersom dette ikke gj�res kan det hende du ikke finner det du s�ker etter. Under vises noen eksempler:
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
		<b>Cudzys�owie</b><br />
		Mo�esz poszykiwane wyra�enie otoczy� znakami cudzys�owia ("") je�li zawiera znaki plus lub spacje ('+', ' ') poniewa� normalnie maj� one specjalne znaczenie.
<?php
		break;
	case "ro":
?>
		<b>Folosirea ghilimelelor</b><br />
		Puteţi să restrângeţi termenii de căutare prin folosirea ghilimelelor (""), dacă ei conţin caractere ('+', blancuri) care altfel ar schimba căutarea.
<?php
		break;
	case "ru":
?>
		<b>�������</b><br />
		�� ������ ��������� ��������� ����� � ������� ������� (""), ���� ��� �������� ����� ��������� ������� ('+', �������), � ���� ������ ��� �� ����� ����������������.
<?php
		break;
	case "sk":
?>
		<b>Uzatv�ranie do �vodzoviek</b><br />
		V�raz m��ete uzatvori� do �vodzoviek (""), ak obsahuje niektor� znak ('+', medzery), ktor� by inak zmenil v�znam v�razu.
<?php
		break;
	case "uk":
?>
		<b>�����</b><br />
		�� ������ ��������� ������צ ����� � ���צ�Φ ����� (""), ���� ���� ͦ����� ����-�˦ ������צ ������� ('+', ���¦��), � ����� ������� ���� �� ������ ������������Φ.
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
		<b>������� �� �������</b><br />
		<i>���������� � ������������ �� ������� �� ������� �� �����, ����� ������� �������� ����� (�� '*' � '?'), �������� �� � �������� ��� ���� �� ������� (�������� '*.iso').
<?php
		if ($fast_query_minsize >= 0)
			echo ", ��� ��������� ������ �� ����� &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", ��� ���������� ������ �� ����� &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		�����, ��-����� ������ ����� �� ����� ��������� � ��������������.</i><br />
		<u>�����</u><br />
		��� ������� �� ������� ��� ������� ���� �� ������� ����� �� �������� �������:<br />
		'*' ���������� ���������� �� ���������� ������� (*.iso)<br />
		'?' ���� ���������� ������ (filena?e.r??)<br />
		�������� '*.iso' ���� ��������: ������ �������, ����� ������� ���������� � '.iso'<br />
		<u>������</u><br />
		������� �� ������� �� ���� (������) �� ������� ���.<br />
		<u>��������� �����</u><br />
		��������� �� ������ �� ��������� �����. �������� �� ����������� ������ �� ��������� �����.<br />
<?php
		break;
	case "cs":
?>
		<b>Hled�n� soubor�</b><br />
		<i>Fast File Search je optimalizov�n na hled�n� soubor� podle masky, kdy� jsou zad�ny n�jak� norm�ln� znaky (ne '*' nebo '?') na za��tku nebo na konci masky (nap�. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", nebo velikost souboru &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", nebo velikost souboru &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Ostatn� (tj. pomal�) dotazy mohou b�t zak�z�ny v konfiguraci.</i><br />
		<u>Maska</u><br />
		Soubory se hledaj� podle masky jm�na souboru, kter� m��e obsahovat n�kter� z t�chto z�stupn�ch znak�:<br />
		'*' zastupuje libovoln� po�et libovoln�ch znak�<br />
		'?' zastupuje jeden libovoln� znak<br />
		Nap�. '*.iso' znamen�: v�echny soubory, jejich� jm�no kon�� '.iso'<br />
		<u>Pod�et�zec</u><br />
		Soubory se hledaj� podle ��sti (pod�et�zce) jejich jm�na.<br />
		<u>Regul�rn� v�raz</u><br />
		Soubory se hledaj� podle regul�rn�ho v�razu. Pou��v� se roz���en� verze regul�rn�ch v�raz�.<br />
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
		<b>B�squeda de ficheros</b><br />
		<i>Fast File Search est� optimizado para la b�squeda de ficheros con comodines cuando hay car�cteres normales (distintos a '*' o '?') especificados en el comienzo o el final de la m�scara (por ejemplo '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", o tama�o m�nimo de dichero &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", o tama�o m�ximo de fichero &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Otras b�squedas ( es decir, las lentas) se pueden deshabilitar en la configuraci�n.</i><br />
		<u>Comod�n</u><br />
		Los ficheros son buscados con una m�scara sobre el nombre del fichero que puede contener algunos de los siguientes car�cteres comod�n:<br />
		'*' significa una cantidad arbitraria de caracteres.<br />
		'?' significa un s�lo caracter.<br />
		Por ejemplo '*.iso' significa: todos los ficheros cuyo nombre finaliza con '.iso'<br />
		<u>Subcadena</u><br />
		Los ficheros se buscan por una parte (subcadena) de su nombre.<br />
		<u>Expresion regular</u><br />
		Los ficheros se buscan mediante una expresi�n regular. Se usa el formato de expresiones regulares extentido.<br />
<?php
		break;
	case "fr":
?>
		<b>Chercher des fichiers</b><br />
		<i>Fast File Search est optimis� pour la recherche de fichier par jokers quand il y a des caract�res sp�ciaux (pas '*' ni '?') sp�cifi�s au d�but ou a la fin du masque (par exemple '*.mp3')
<?php
		if ($fast_query_minsize >= 0)
			echo ", ou taille de fichier minimum &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", ou taille de fichier maximum &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Les autres (c.a.d. lentes) recherches peuvent �tre d�sactiv�es dans la configuration.</i><br />
		<u>Jokers</u><br />
		Les fichiers sont recherch�s avec un masque de nom de fichier qui peut contenir certains de ces caract�res jokers :<br />
		'*' correspond � un nombre quelconque de caract�res inconnu<br />
		'?' correspond � un unique caract�re inconnu<br />
		Par exemple '*.mp3' signifie : tous les fichiers finissant par '.mp3'<br />
		<u>Sous-cha�ne</u><br />
		Les fichiers sont recherch�s gr�ce � une partie de leur nom.<br />
		<u>Expression r�guli�re</u><br />
		Les fichiers sont recherch�s gr�ce � une expression r�guli�re, version �tendue.<br />
<?php
		break;
	case "hu":
?>
		<b>F�jlok keres�se</b><br />
		<i>A Fast File Search joker karakterekkel kieg�sz�tett szavak keres�s�re van optimaliz�lva. (pl.: '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", vagy minimum f�jlm�ret &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", vagy maximum f�jlm�ret &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Az egy�b (pl. lass�, er�forr�sig�nyes) keres�seket a konfigur�ci�s f�jlban lehet kikapcsolni.</i><br />
		<u>Joker karakterek</u><br />
		A f�jln�vb�l hi�nyz� karaktereket a k�vetkez� karakterekkel helyettes�theti:<br />
		'*' tetsz�leges sz�m�, tetsz�leges karakter<br />
		'?' egy tetsz�leges karakter<br />
		P�ld�ul '*.iso': minden f�jl, ami '.iso'-ra v�gz�dik<br />
		<u>T�red�ksz�</u><br />
		F�jln�v egy r�szlete alapj�n keres.<br />
		<u>Szabv�nyos kifejez�s</u><br />
		Szabv�nyos kifejez�sek alapj�n keres. Kib�v�tett szabv�nyos kifejez�sek is haszn�lhat�ak.<br />
<?php
		break;
	case "lt":
?>
		<b>Fail� paie�ka</b><br />
		<i>Greita Fail� Paie�ka yra optimizuota ie�koti fail�, kurie turi normalius pavadinimus (tik ne '*' ar '?') kurie yra prad�ioje arba gale (pavyzd�iui '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", or minimum file size &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", or maximum file size &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Kiti (tarkim l�ti) u�klausimai gali b�ti anuliuoti konfiguracijoje.</i><br />
<?php
		break;
	case "nb":
?>
		<b>S�king etter filer</b><br />
		<i>Fast File Search er optimalisert til � bruke metategn/wildcard for � s�ke etter vanlige filer, dvs filer som (ikke har '*' eller '?') lagt til i starten eller slutten av s�kemasken (f.eks. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", eller minimum filest�rrelse &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", eller maksimum file size &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Forskjellige andre s�k (s�kalte slow-search) kan deaktiveres med konfigurasjonsfilene.</i><br />
		<u>Metategn/wildcard</u><br />
		Det s�kes etter filer med en maske som kan inneholde noen av disse metategnene:<br />
		'*' betyr et vilk�rlig antall vilk�rlige tegn<br />
		'?' betyr et vilk�rlig tegn<br />
		Et eksempel: '*.iso' betyr: alle filer med filnavn som ender p� '.iso'<br />
		<u>Delstreng</u><br />
		S�ker etter filer ved � lete etter kun en del av teksten (delstreng).<br />
		<u>Regul�re uttrykk</u><br />
		Det s�kes etter filer ved hjelp av regul�re uttrykk (regexp). Det brukes Extended version.<br />
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
		<b>Poszukiwanie plik�w</b><br />
		<i>Szybkie Wyszukiwanie Plik�w jest zoptymalizowane na szukanie plik�w przy pomocy masek (wildcards) je�li s� podane jakie� normalne symbole (nie '*' lun '?') na pocz�tku lub ko�cu maski (np. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", lub minimalny rozmiar pliku &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", lub maksymalny rozmiar pliku &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Inne (np. powolne) zapytania mog� zosta� wy��czone w konfiguracji.</i><br />
		<u>Maski (wildcards)</u><br />
		Pliki poszukiwane przez mask� mog� zawiera� nast�puj�ce znaki specjalne:<br />
		'*' oznacza dowoln� ilo�� dowolnych znak�w<br />
		'?' oznacza jeden dowolny znak<br />
		Dla przyk�adu '*.iso' oznacza: wszystkie pliki zako�czone '.iso'<br />
		<u>Fragment nazwy</u><br />
		Pliki poszukiwane przez podanie fragmentu nazwy (substring).<br />
		<u>Wyra�enia regularne</u><br />
		Pliki poszukiwane poprzez okre�lenie wyra�enia regularnego. U�ywana jest rozsze�ona wersja wyra�e� regularnych.<br />
<?php
		break;
	case "ro":
?>
		<b>Căutarea fişierelor</b><br />
		<i>Fast File Search este optimizat pentru căutarea fişierelor folosind metacaracterele când avem caractere normale (fără '*' şi '?') specificate la începutul sau la sfârşitul măştii (de exemplu '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", sau minimul mărimii fişierului &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", sau maximul mărimii fişierului &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Alte căutari (cele lente) pot fi dezactivate la configurare.</i><br />
		<u>Metacaracterele</u><br />
		Fişierele sunt căutate folosind o mască a fişierului care poate conţine unul din aceste metacaractere:<br />
		'*' Înlocuieşte un caracter sau un şir de caractere în numele unui fişier<br />
		'?' Înlocuieşte un singur caracter în numele unui fişier<br />
		De exemplu '*.iso' înseamnă: toate fişierele a căror nume se termină cu extensia '.iso'<br />
		<u>Subşir</u><br />
		Fişierele sunt căutate după o parte (subşir) a numelui fişierului.<br />
		<u>Expresie obişnuită</u><br />
		Fişierele sunt căutate după o expresie obişnuită. Este folosită varianta extinsă a expresiilor obişnuite.
		<br />
<?php
		break;
	case "ru":
?>
		<b>����� ������</b><br />
		<i>Fast File Search ������������� ��� ������ ������ �� �����. �� ������ ������ ��������� ��������� ���������� �������� (�� '*' ��� '?'), ������� ������ ���������� � ������ ��� ����� ����� (� ������� '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", ��� ����������� ������ ����� &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", ��� ������������ ������ ����� &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		������ (���������) ������� ����� ���� ��������� � ������������.</i><br />
		<u>�����</u><br />
		����� �� �������, ����������� ��������� ����������� (���������) �������:<br />
		'*' �������� ����� ���������� ����� ��������<br />
		'?' �������� ���� ����� ������<br />
		� ������� '*.iso' ��������: ��� �����, ��� �������� ������������� �� '.iso'<br />
		<u>������</u><br />
		����� �� ������ (����������) �������� ������.<br />
		<u>���������� ���������</u><br />
		�������� ������ ����� ������. ����� ������ � �������������� ���������� ��������� (���������). ������������ ����������� ������ ���������� ���������.<br />
<?php
		break;
	case "sk":
?>
		<b>H�adanie s�borov</b><br />
		<i>Fast File Search je optimalizovan� na h�adanie s�borov pod�a masky, ke� s� zadan� be�n� znaky (nie '*' alebo '?') na za�iatku alebo na konci masky (napr. '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", alebo ve�kos� s�boru &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", alebo ve�kos� s�boru &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		Ostatn� (tj. pomal�) vyh�ad�vania m��u b�� zak�zan� v konfiguracii.</i><br />
		<u>Maska</u><br />
		S�bory sa vyh�ad�vaj� pod�a masky mena s�boru, ktor� m��e obsahova� niektor� z t�chto zastupuj�cich znakov:<br />
		'*' nahr�dza �ubovo�n� po�et �ubovo�n�ch znakov<br />
		'?' nahr�dza jeden �ubovo�n� znak<br />
		Napr. '*.iso' znamen�: v�etky s�bory , ktor�ch meno kon�� na '.iso'<br />
		<u>Podre�azec</u><br />
		S�bory sa h�adaj� pod�a �asti (podre�azca) ich mena.<br />
		<u>Regul�rny v�raz</u><br />
		S�bory sa h�adaj� pod�a regul�rneho v�razu, pou��va sa roz��rena verzia regul�rnych v�razov.<br />
<?php
		break;
	case "uk":
?>
		<b>����� ��̦�</b><br />
		<i>Fast File Search ����ͦ������� ��� ������ ���̦� �� ������. ��� ����� ������� ͦ����� ��˦���� ���������� �����̦� (�� '*' �� '?'), �˦ �����Φ ����������� � ������� �� ˦�æ ����� (��������� '*.iso')
<?php
		if ($fast_query_minsize >= 0)
			echo ", ��� ͦΦ������� ���ͦ� ����� &gt;= '", $c["FAST_QUERY_MINSIZE"], "'";
		if ($fast_query_maxsize >= 0)
			echo ", ��� ������������ ���ͦ� ����� &lt;= '", $c["FAST_QUERY_MAXSIZE"], "'";
		echo ".";
?>
		��ۦ (��צ��Φ) ������ ������ ���� צ������Φ � ���Ʀ����æ�.</i><br />
		<u>�����</u><br />
		����� �� ��������, ���� ͦ����� ���˦ ���æ���Φ (�����צ) �������:<br />
		'*' ������� ����-��� ˦��˦��� ����-���� �����̦�<br />
		'?' ������� ���� ����-���� ������<br />
		��������� '*.iso' �������: �Ӧ �����, ����� ���� ��˦�������� �� '.iso'<br />
		<u>������</u><br />
		����� �� ��������� (Ц���������) ���� ���̦�.<br />
		<u>�������Φ ������</u><br />
		���¦��� �������� ����� ������. ����� ��������� � ������������� ���������� ����ڦ� (������Ц�). ����������դ���� ���������� ���Ӧ� ���������� ����ڦ�.<br />
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
		<b>������� �� ����������</b><br />
		��������� �� ���������� ����� �� ����� �����, �� ����� �� ������ � �������. ���� ����������� ����� �� ������� �� ����������.
<?php
		break;
	case "cs":
?>
		<b>Hled�n� adres���</b><br />
		Adres��e se hledaj� stejn�mi metodami jako soubory. Pro hled�n� adres��� nen� preferov�na ��dn� z metod.
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
		<b>B�squeda de directorios</b><br />
		Los directorios se buscan de la misma forma que los ficheros. No existe ning�n m�todo preferido para la b�squeda de directorios.
<?php
		break;
	case "fr":
?>
		<b>Rechercher des r�pertoires</b><br />
		Les r�pertoires sont recherch�s comme les fichiers. Il n'y a pas de m�thode pr�f�r�e pour les r�pertoires.
<?php
		break;
	case "hu":
?>
		<b>K�nyvt�rak keres�se</b><br />
		A k�nyvt�rak a f�jlokhoz hasonl� m�don kereshet�ek. K�nyvt�rak eset�ben nincs megk�l�nb�ztetett keres�si m�d.
<?php
		break;
	case "lt":
?>
		<b>Direktorij� paie�ka</b><br />
		Direktorijos bus ie�komos tokiu pa�iu metodu kaip ir failai.
<?php
		break;
	case "nb":
?>
		<b>S�king etter kataloger</b><br />
		S�k etter kataloger bruker samme metodeer som s�k etter filer. Det er ingen spesiell metode for s�k etter kataloger.
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
		<b>Wyszukiwanie katalog�w</b><br />
		Katalog�w mo�na poszukiwa� dok�adnie takimi samymi metodami jak pliki. Nie ma jakiego� specjalnego sposobu wyszukiwania katalog�w.
<?php
		break;
	case "ro":
?>
		<b>Căutarea directoarelor</b><br />
		Căutarea directoarelor se face după aceeaşi metodă ca la căutarea fişierelor. Nu există o metodă preferată pentru căutarea directoarelor.
<?php
		break;
	case "ru":
?>
		<b>����� ����������</b><br />
		��� ������ ���������� ����� ������������ �� �� ������, ��� � � �������� ������.
<?php
		break;
	case "sk":
?>
		<b>Vyh�ad�vanie adres�rov</b><br />
		Adres�re sa h�adaj� rovnak�mi sp�sobmi ako s�bory. Pre vyh�ad�vanie adres�rov nieje uprednost�ovan� �iadny sp�sob.
<?php
		break;
	case "uk":
?>
		<b>����� �������Ҧ�</b><br />
		��� ������ �������Ҧ� ���������������� Ԧ ��ͦ ������, �� � � ��������� ����æ.
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
		echo '<b>�������� �� ����������</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo '�������� ���� ������ � �������� � ping. ���� �� � 100% ��������, ������ ���� �� ��� firewall, ����� �� �� ��������� �������.';
				break;
			case 'connect':
				echo '�������� ���� ������ � �������� � �������� ������ �� ����.';
				break;
		}
		echo ' <i>���� �� � �������� ���� ��������� ��� ��� ����������� �� ����� ����.</i>';
		break;
	case "cs":
		echo '<b>Kontrola dostupnosti serveru</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Otestuje, jestli je server dostupn�, posl�n�m jednoho pingu. Nen� to 100% spolehliv�, proto�e firewally mohou b�t nakonfigurov�ny tak, aby nepropou�t�ly odpov�di na ping.';
				break;
			case 'connect':
				echo 'Otestuje, jestli je server dostupn�, t�m, �e se pokus� p�ipojit na server.';
				break;
		}
		echo ' <i>Netestuje se, jestli se soubor je�t� nach�z� na serveru.</i>';
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
				echo 'Verifica si el servidor est� disponible con un simple \'ping\'. Esto no es 100% fiable pues los cortafuegos pueden estar configurados para no responder a \'pings\'.';
				break;
			case 'connect':
				echo 'Verifica si el servidor est� disponible tratando de conectarse.';
				break;
		}
		echo ' <i>Esta comprobaci�n NO chequear� si el fichero se encuentra a�n en el servidor.</i>';
		break;
	case "fr":
		echo '<b>En ligne ?</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'V�rifie si la machine est allum�e en envoyant une simple requ�te "ping". Cela n\'est pas s�r � 100% car on peut configurer un firewall pour bloquer les "ping".';
				break;
			case 'connect':
				echo  'V�rifie si la machine est allum�e en s\'y connectant.';
				break;
		}
		echo ' <i>Cela ne v�rifiera PAS si le fichier est toujours pr�sent sur la machine.</i>';
		break;
	case "hu":
		echo '<b>El�rhet�s�g vizsg�lata</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Pinggel ellen�rzi, hogy a host el�rhet� -e. Ez nem teljesen megb�zhat�, mivel a t�zfalak kisz�rhetik a pingre adott v�laszokat.';
				break;
			case 'connect':
				echo 'Kapcsol�d�ssal ellen�rzi, hogy a host el�rhet� -e.';
				break;
		}
		echo ' <i>Nem ellen�rzi, hogy a f�jl l�tezik -e a szerveren.</i>';
		break;
	case "lt":
		echo '<b>Online Tikrinimas</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Papras�iausiai patikrina  ping komanda ar online adresas. Tai negarantuoja 100% , kartais ugniasien�s neatsako � u�klausas.';
				break;
			case 'connect':
				echo 'Patikrina papras�iausiai prisijungdamas.';
				break;
		}
		echo ' <i>Online Tikrinimas yra labai l�tas (iki ', $c["ONLINE_CHECK_TIMEOUT"];
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
				echo 'Finner ut om en server er tilgjengelig ved � bruke ping. Denne metden er ikke 100% p�litelig siden FW kan settes opp til � ikke tillate svar p� ping.';
				break;
			case 'connect':
				echo 'Sjekker om server er online ved � koble til.';
				break;
		}
		echo '<i>Online sjekk kan ikke si om en fil er funnet eller ikke, den sier kun noe om status p� server.</i>';
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
				echo 'Sprawdza czy host (komputer) jest dost�pny metod� ping. Na tej metodzie nie mo�na polega� w 100%, poniewa� niekt�re firewalle nie odpowiadaj� na pinga.';
				break;
			case 'connect':
				echo 'Sprawsza czy host (komputer) jest dost�pny poprzez testowe po��czenie si� z nim.';
				break;
		}
		echo ' <i>To nie spowoduje sprawdzenia czy plik nadal znajduje si� na komputerze.</i>';
		break;
	case "ro":
		echo '<b>Verifică dacă gazda este online</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Verifică dacă este posibilă conectarea la gazdă folosind un simplu ping. Această metodă nu este de încredere deoarece firewallurile pot fi configurate să nu permită raspuns la ping.';
				break;
			case 'connect':
				echo 'Verifică dacă gazda este online prin conectarea la gazdă.';
				break;
		}
		echo ' <i>Nu va verifica dacă fişierul se mai gaseşte pe calculatorul gazdă.</i>';
		break;
	case "ru":
		echo '<b>�������� �� �����������</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo '��������� ����������� ����� � ������ ������, ������ ���. ���� ����� �� �������� 100% ����������,  ��� ��� ��������� �������� ����� ���� ��������� ������ �� �����..';
				break;
			case 'connect':
				echo '��������� ����������� ����� � ������ ������ ������� �������� � ���.';
				break;
		}
		break;
	case "sk":
		echo '<b>Kontrola dostupnosti serverov</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo 'Otestuje �i je server dostupn� poslan�m jedn�ho ping paketu. Nie je to �plne spo�ahliv� preto�e niektor� firewally mo�u by� nakonfigurovan� tak , aby neprep��taly odpovede na ping pakety.';
				break;
			case 'connect':
				echo 'Otestuje, �i je server dostupn� tak , �e sa na� pok�si pripoji�.';
				break;
		}
		echo ' <i>Netestuje �i sa s�bor e�te nach�dza na serveri</i>';
		break;
	case "uk":
		echo '<b>����צ��� �� ������Φ���</b><br />';
		switch ($c["ONLINE_CHECK"])
		{
			case 'ping':
				echo '����צ�Ѥ ������Φ��� ����� � ������ ������, Ц������ ���� . ��� ����� �� � �� 100% צ����, ��˦���� ���˦ ����� �� צ��צ����� �� Ц�� (���������� � �������� ���������)...';
				break;
				case 'connect':
				echo '����צ�Ѥ ������Φ��� ����� � ������ ������ ������� ������� � ���.';
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
		<b>���������� ������� �� ������ �� ����</b><br />
		��� ��� ������ �� �������� ���� ������� ��� ��� ��� ���������� �������� (��� � �����), ������� ����������� �� �������. ������������� �� ��������� ������� � � ������e, ��� ������ �� �������� �������� 'K' �� �����������, 'M' �� �����������, 'G' �� �����������, 'k' �� ������ �������, 'm' �� ������� �������, 'g' �� �������� �������.<br />
		��������, �������� '50M' �� 50 ���������.
<?php
		break;
	case "cs":
?>
		<b>Omezen� velikosti soubor�</b><br />
		Pokud chcete vyhledat pouze soubory v�t�� ne� n�jak� velikost nebo men�� ne� n�jak� velikost (nebo oboj�), zadejte p��slu�n� omezen� velikosti soubor�. Meze velikosti souboru jsou v bajtech, m��ete p�idat p��ponu 'K' pro kilobajty, 'M' pro megabajty, 'G' pro gigabajty, 'k' pro tis�ce bajt�, 'm' pro miliony bajt�, 'g' pro miliardy bajt�.<br />
		Nap��klad '50M' znamen� 50 megabajt�.
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
		<b>L�mites del tama�o de fichero</b><br />
		Si quiere encontrar s�lo ficheros m�s grandes que un tama�o, o m�s peque�os que un tama�o (o ambos) espedifique los l�mites apropiados. Los l�mites del tama�o de fichero son por defecto en bytes,  puede a�adir el sufijo 'K' para kilobytes 'M' para megabytes, 'G' para gigabytes, 'k' para miles de bytes, 'm' para millones de bytes, 'g' para miles de millones de bytes.<br />
		Por ejemplo, '50M' significa 50 megabytes.
<?php
		break;
	case "fr":
?>
		<b>Limites de taille de fichiers</b><br />
		Si vous ne chechez que les fichiers de taille sup�rieure ou inf�rieure � une certaine taille (ou les deux � la fois), sp�cifier les limites ad�quates. Les tailles sont en octets, mais vous pouvez ajouter les suffixe 'K' pour kilooctets, 'M' pour m�gaoctets, 'G' pour gigaoctets, 'k' pour milliers d'octets, 'm' pour millions d'octets, 'g' for milliards d'octets.<br />
		Par exemple '50M' signifie 50 megaoctets.
<?php
		break;
	case "hu":
?>
		<b>F�jlm�ret korl�toz�s</b><br />
		Ha csak meghat�rozott m�ret� f�jlokra k�v�n keresni, �ll�tsa be a k�v�nt intervallumot. A f�jlm�ret hat�ra b�jtban �rtend�, haszn�lhat szuffixumokat 'K' kilob�jt, 'M' megab�jt, 'G' gigab�jt, 'k' ezer b�jt, 'm' milli� b�jt, 'g' milli�rd b�jt.<br />
		P�ld�ul '50M' = 50 megab�jt.
<?php
		break;
	case "lt":
?>
		<b>Fail� riba</b><br />
		Jei nori surasti failus didesnius nei ka�koks dydis ar ma�esnis nei ka�koks dydis reikia nustatyti atitinkamus dydz�ius. Fail� dyd�iai yra skai�iuojami baitais, tu gali prid�ti raid� 'K' - kilobaitams, 'M' - megabaitams, 'G' - gigabaitams, 'k' - t�kstan�iui bait�, 'm' - milijonui bait�, 'g' - bilijonui bait�.<br />
		Pavyzd�iui '50M' rei�kia 50 megabait�.
<?php
		break;
	case "nb":
?>
		<b>S�k med filst�rrelse</b><br />
		Dersom det kun s�kes etter filer som er st�rre eller mindre enn en viss st�rrelse (eller b�de og) kan de �nskede grensene spesifises. Grensene for filst�rrelse angis i bytes, og du kan legge til endelsene 'K' for kilobytes, 'M' for megabytes, 'G' for gigabytes. �n kilobyte er 2^10 bytes = 1024 bytes = 1KB. En annen regnemetode er 1000 byte er en kilo, dette angis med sm� bokstaver. Da kan denne anvisningen benyttes: 'k' for n*1000 bytes, 'm' for millioner bytes, 'g' for milliarder av bytes.<br />
		Et eksempel: '50M' betyr 50 megabytes. Eller 50m som betyr 50 millioner bytes. N�r filer er i denne st�rrelsen er det en relativt stor forskjell mellom 50M og 50m. Den ene er 50*(1024*1024) bytes den andre rett og slett 50 000 000 bytes.
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
		Je�li chcesz, mo�esz poszuka� plik�w wi�kszych lub mniejszych od pewnego rozmiaru (lub obu na raz) ustaj�c zakres. Rozmiar pliku podawany jest w bajtach, jesli chcesz, dodaj przyrostek 'K' dla kilobajt�w, 'M' dla megabajt�w, 'G' dla gigabajt�w, 'k' dla tysiecy bajt�w, 'm' dla milion�w bajt�w, 'g' dla miliard�w bajt�w.<br />
		Dla przyk�adu '50M' znaczy 50 megabajt�w.
<?php
		break;
	case "ro":
?>
		<b>Limitele mărimii fişierelor</b><br />
		Dacă doriţi să gasiţi doar fişierele mai mari decât o anumită valoare sau fişierele mai mici decât o anumită valoare (sau amândouă) trebuie să specificaţi limitele corespunzatoare.
		Limitele mărimii fişierelor sunt în octeti, puteţi adăuga sufixul 'K' pentru kiloocteţi, 'M' pentru megaocteţi, 'G' pentru gigaocteţi, 'k' pentru mii de octeţi, 'm' pentru milioane de octeţi, 'g' pentru miliarde de octeţi.<br />
		De exemplu '50M' înseamnă 50 megaocteţi.
<?php
		break;
	case "ru":
?>
		<b>����������� ������� ������</b><br />
		���� �� ������ ����� ����� ������ �/��� ������ ������������� �������, ������� ������� ���� ��������. �� ��������� ������ ����� ����������� � ������, ������ �������� ������� 'K' ��� ��������, 'M' ��� ��������, 'G' ��� ��������, 'k' ��� ������ ����, 'm' ��� �������� ����, 'g' ��� ��������� ����.<br />
		� �������, '50M' �������� 50 ��������.
<?php
		break;
	case "sk":
?>
		<b>Obmedzenie ve�kosti s�boru</b><br />
		Ak chcete vyh�ada� iba s�bory v��ie ako nejak� ve�kos� alebo men�ie ako nejak� ve�kos� (alebo obidve) , zadajte pr�slu�n� obmedzenie ve�kosti s�borov. Hranice ve�kosti s�borov s� v bajtoch, m��ete prida� pr�ponu 'K' pre kilobajty, 'M' pre megabajty, 'G' pre gigabajty, 'k' pre tis�cky bajtov, 'm' pre mili�ny bajtov, 'g' pre miliardy bajtov.<br />
		Napr�klad '50M' znamen� 50 megabajtov.
<?php
		break;
	case "uk":
?>
		<b>��������� ���ͦ�� ���̦�</b><br />
		���� �� ������� ������ ����� ¦���� ��/��� ����� ����������� ���ͦ��, ���֦�� �����æ ��� ���ͦҦ�. �� ���������� ���ͦ� ����� ����դ���� � ������, ��� ������� ������ ��Ʀ�� 'K' ��� ˦������, 'M' ��� ��������, 'G' ��� Ǧ������, 'k' ��� ����ަ ����, 'm' ��� ͦ������ ����, 'g' ��� ͦ������ ����.
		���������, '50M' ������� 50 ��������.
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
