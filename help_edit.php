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
<tr><td bgcolor="<?php echo $color_wt; ?>"><b><?php echo $tr["Help"]; ?></b></td></tr>
<tr><td bgcolor="<?php echo $color_wb; ?>">
<table border="0" cellpadding="3" cellspacing="0">
<?php
switch ($lang)
{
	default:
	case "en":
?>
<tr><td><b>List of files</b></td><td>Some FTP servers contain a file with list of files that are on the FTP server. When the name of this file is specified the crawling of FTP server is much faster because the list of files will be received from this file and not by walking through the directory tree.</td></tr>
<tr><td><b>Period</b></td><td>Host will be scanned once per <i>period</i> complete crawls. If <i>period</i> = 0 host will never be crawled.</td></tr>
<tr><td><b>Counter</b></td><td>Host will be scanned when <i>counter</i> &gt;= <i>period</i>, <i>counter</i> is incremented during each complete crawl.</td></tr>
<?php
		break;
	case "bg":
?>
<tr><td><b>������ �� ���������</b></td><td>����� FTP ������� �������� ���� ��� ������ �� ���������, ����� �� ������� �� FTP �������. ������ ����� �� ���� ���� � �������������, ����������� �� FTP ������� �� � ����� ��-�����, ������ �������� �� ��������� �� �� �������� �� ���� ���� � ���� �� �� ������� ������� �� ������������.</td></tr>
<tr><td><b>��������</b></td><td>������ �� ���� �������� ������ �� ����� <i>��������</i> ����� ���������� �� ���������. ��o <i>����������</i> = 0, ������ ������ ���� �� ���� ��������.</td></tr>
<tr><td><b>�����</b></td><td>������ �� ���� �������� ������ <i>�������</i> &gt;= <i>���������</i>, <i>�������</i> �� ��������� � ������� ��� ����� ����� ���������.</td></tr>
<?php
		break;
	case "cs":
?>
<tr><td><b>Seznam soubor�</b></td><td>Na n�kter�ch FTP serverech se nach�z� soubor se seznamem soubor� na FTP serveru. Kdy� je zad�no jm�no tohoto souboru, prohled�v�n� FTP serveru je o hodn� rychlej��, nebo� seznam soubor� se z�sk� z tohoto souboru a ne proch�zen�m adres��ov�ho stromu.</td></tr>
<tr><td><b>Perioda</b></td><td>Server bude prohled�n jednou za <i>periodu</i> kompletn�ch prohled�n� s�t�. Pokud <i>perioda</i> = 0, server nebude nikdy prohled�n.</td></tr>
<tr><td><b>Po�itadlo</b></td><td>Server bude prohled�n, jakmile <i>po�itadlo</i> &gt;= <i>perioda</i>, <i>po�itadlo</i> se zvy�uje o 1 b�hem ka�d�ho kompletn�ho prohled�n� s�t�.</td></tr>
<?php
		break;
	case "de":
?>
<tr><td><b>Dateiliste</b></td><td>Einige FTP-Server enthalten eine Datei mit der Liste von Dateien, die auf dem Server zu finden sind. Wenn der Name dieser Datei angegeben wird, beschleunigt es das Durchsuchen des Servers wesentlich, weil die Dateiliste dann eben aus dieser Datei entnommen wird, anstatt den kompletten Server zu durchsuchen.</td></tr>
<tr><td><b>Periode</b></td><td>Der Server wird jedes n-te Mal einer vollst&auml;ndigen Durchsuchung durchsucht, wobei n dem Wert von <i>Periode</i> entspricht. Der Server wird niemals durchsucht, falls die <i>Periode</i> = 0 ist.</td></tr>
<tr><td><b>Z&auml;hler</b></td><td>Der Server wird durchsucht, wenn der <i>Z&auml;hler</i> &gt;= <i>Periode</i> ist. Der <i>Z&auml;hler</i> wird w&auml;hrend jeder vollst&auml;ndigen Durchsuchung um 1 erh&ouml;ht.</td></tr>
<?php
		break;
	case "es":
?>
<tr><td><b>Listado de ficheros</b></td><td>Algunos servidores FTP contienen un fichero con un listado de los ficheros que se encuentran en elservidor. Cuando el nombre de este fichero es especificado el escaneo del servidor FTP es mucho m�s r�pido debido a que se utilizar� este listado de ficheros en lugar de recorrer la estructura de directorios.</td></tr>
<tr><td><b>Periodo</b></td><td>El servidor ser� escaneado una vez cada <i>periodo</i> completamente. Si el <i>periodo</i> = 0 el servidor no ser� escaneado.</td></tr>
<tr><td><b>Contador</b></td><td>El servidor ser� escaneado cuando <i>contador</i> &gt;= <i>periodo</i>, <i>contador</i> es incrementado durante cada escaneo completo.</td></tr>
<?php
		break;
	case "fr":
?>
<tr><td><b>Liste des fichiers</b></td><td>Certains serveurs FTP disposent d'un fichier qui contient la liste des fichiers disponibles sur le serveur. Si le nom de ce fichier est sp�cifi�, l'ajout des fichiers dans le moteur de recherche sera beaucoup plus rapide car il sera devenu inutile de parcourir tous les r�pertoires.</td></tr>
<tr><td><b>Periode</b></td><td>L'h�te sera scann� une fois par <i>p�riode</i> de scans complets. Si la <i>p�riode</i> vaut 0 l'h�te ne sera jamais scann�.</td></tr>
<tr><td><b>Compteur</b></td><td>L'h�te sera scann� quand <i>compteur</i> &gt;= <i>p�riode</i>, <i>compteur</i> est incr�ment� pandant chaque scan complet.</td></tr>
<?php
		break;
	case "hu":
?>
<tr><td><b>F�jl lista</b></td><td>N�h�ny FTP szerver saj�t f�jl- �s k�nyvt�rlist�t tartalmaz. Ennek megad�s�val a f�jlok �s k�nyvt�rak list�ja gyorsabban lek�rdezhet�, mert nincs sz�ks�g az egesz k�nyvt�rfa �ttekint�s�re.</td></tr>
<tr><td><b>Peri�dus</b></td><td>A szerver minden <i>peri�dus</i>-i teljes friss�t�s sor�n friss�l. Ha az <i>peri�dus</i> = 0, a host sosem lesz friss�tve. Ha az <i>peri�dus</i> = 3, minden 3. teljes friss�t�s alkalm�val friss�lnek az adatok.</td></tr>
<tr><td><b>Sz�ml�l�</b></td><td>A szerver csak akkor lesz friss�tve, ha a <i>sz�ml�l�</i> &gt;= <i>peri�dus</i>, <i>sz�ml�l�</i> �rt�ke eggyel n� minden teljes friss�t�s ut�n.</td></tr>
<?php
		break;
	case "lt":
?>
<tr><td><b>Fail� s�ra�as</b></td><td>Kai kurie serveriai turi fail�, kuriame yra sura�yta k� tas serveris saugoja. Kai �is failas yra nurodomas FTP paie�ka serveryje pagreit�ja, tod�l kad nuskaitoma i� to failo, o neskaitomas visos serverio direktorijos.</td></tr>
<tr><td><b>Periodas</b></td><td>Hostas bus nuskanuotas viena kart� per <i>period�</i> visi�kai l�tai. Jei <i>periodas</i> = 0 hostas daugiau niekada nebus l�tai skanuojamas.</td></tr>
<tr><td><b>Skaitliukas</b></td><td>Hostas bus skanuojamas kai<i> skaitliukas</i> &gt;= <i>periodui</i>, <i>skaitliukas</i> yra padidinamas per kiekvien� l�t� skanavim�.</td></tr>
<?php
		break;
	case "nb":
?>
<tr><td><b>Filliste</b></td><td>Noen FTP-servere inneholder en liste over filer p� serveren. Dersom navnet p� denne filen spesifiseres vil gjennoms�kingen av FTP-serveren g� mye raskere siden listen som genereres kommer fra denne filen og ikke ved gjnnoms�king av katalogstrukturen.</td></tr>
<tr><td><b>Periode</b></td><td>Det s�kes gjennom Host en gang pr. <i>periode</i>. Dersom <i>periode</i> = 0 blir maskin aldri gjennoms�kt.</td></tr>
<tr><td><b>Teller</b></td><td>Server blir gjennoms�kt hver gang <i>teller</i> &gt;= <i>periode</i>, <i>teller</i> teller inkrementeres for hver gjennomf�rt s�king.</td></tr>
<?php
		break;
	case "nl":
?>
<tr><td><b>Lijst met bestanden</b></td><td>Sommige FTP servers hebben een bestand met daarin een lijst van alle bestanden op die FTP server. Als de naam van dit bestand wordt meegeven, gaat het doorzoeken van de FTP server veel sneller, omdat alleen deze lijst opgehaald wordt en niet de hele bestandsstructuur doorlopen hoeft te worden.</td></tr>
<tr><td><b>Periode</b></td><td>Systeem wordt eens per <i>periode</i> volledige indexeringen geindexeerd. Als de <i>periode</i> = 0 dan zal het systeem nooit geindexeerd worden.</td></tr>
<tr><td><b>Teller</b></td><td>Systeem wordt geindexeerd, als geldt <i>teller</i> &gt;= <i>periode</i>, <i>teller</i> wordt opgehoogd na iedere volledige indexering.</td></tr>
<?php
		break;
	case "pl":
?>
<tr><td><b>Lista plik�w</b></td><td>Niekt�re serwery FTP zawieraj� plik z lista wszystkich plik�w na danym serwerze. Je�li zostanie podana nazwa tego pliku, wyszukiwanie zostanie dramatycznie przyspieszona, poniewa� lista plik�w b�dzie pochodzi�a z owego pliku, a nie z czasoch�onnego przeszukiwania katalog�w.</td></tr>
<tr><td><b>Okres</b></td><td>Host b�dzie skanowany co pewien <i>okres</i> pe�nego skanowania sieci. Je�li <i>okres</i> = 0, w�wczas host nigdy nie b�dzie skanowany.</td></tr>
<tr><td><b>Licznik</b></td><td>Host b�dzie skanowany je�li <i>licznik</i> &gt;= <i>okres</i>, <i>licznik</i> jest zwi�kszany przy ka�dym pe�nym skanowaniu sieci.</td></tr>
<?php
		break;
	case "ro":
?>
<tr><td><b>Lista cu fişiere</b></td><td>Unele servere FTP au un fişier care conţine o listă de fişiere care se află pe serverul FTP. Când numele acestui fişier este specificat, scanarea serverului FTP este mult mai rapidă deoarece lista cu fişiere va fi luată din acest fişier şi nu prin scanarea arborelui de directoare.</td></tr>
<tr><td><b>Perioada</b></td><td>Gazda va fi scanată o dată per <i>perioada</i> scanări complete. Dacă <i>perioada</i> = 0 gazda nu va fi scanată.</td></tr>
<tr><td><b>Contor</b></td><td>Gazda va fi scanată când <i>contor</i> &gt;= <i>perioada</i>, <i>contor</i> este incrementat în timpul fiecărei scanări complete.</td></tr>
<?php
		break;
	case "ru":
?>
<tr><td><b>������ ������</b></td><td>��������� FTP ������� ����� ���� �� ������� ����� ������. ���� ����� ���� ����� ������, ����� ������ FTP ����� ���������� ������� �������, ��� ��� ������� ����-������ ������� �������, ��� �������� ��� ������ ����������.</td></tr>
<tr><td><b>������</b></td><td>���� ����� ������������ ������ <i>������</i> ������� ������������ ������. ���� <i>������</i> = 0, ���� ������� �� ����� �������������.</td></tr>
<tr><td><b>�������</b></td><td>���� ����� ������������, ����� <i>�������</i> &gt;= <i>������</i>, <i>�������</i> ������������� �� ������� ����� ������� ������� ������������.</td></tr>
<?php
		break;
	case "sk":
?>
<tr><td><b>Zoznam s�borov</b></td><td>Na niektor�ch FTP serveroch je ulo�en� s�bor obsahuj�ci zoznam s�borov pr�stupn�ch na FTP. Pokia� uvediete n�zov tohto s�boru je preh�ad�vanie v�razne r�chlej�ie preto�e sa zoznam s�borov z�ska z tohoto s�boru a nie prech�dzan�m adres�rov.</td></tr>
<tr><td><b>Peri�da</b></td><td>Server sa bude preh�ad�va� raz za <i>peri�du</i> kompletn�ch preh�adan� siete. Pokia� <i>peri�da</i> = 0, server sa nebude preh�ad�va� nikdy.</td></tr>
<tr><td><b>Po��tadlo</b></td><td>Server sa preh�ad� ke� <i>po��tadlo</i> &gt;= <i>peri�da</i>, <i>po��tadlo</i> sa zvy�uje o 1 pri ka�dom �plnom preh�ad�van� siete.</td></tr>
<?php
		break;
	case "uk":
?>
<tr><td><b>������ ���̦�</b></td><td>���˦ FTP ������� ����� ���� - ������ �Ӧ� ��ϧ� ���̦�. ���� ����� ���� ���� ��������, ����� FTP ���� �������� �������� ������, ���� �� ������� ����-������ �������� ������, Φ� ���Φ��� ������������ �Ӧ �������Ҧ�.</td></tr>
<tr><td><b>��Ҧ��</b></td><td>���� ���� ��������� ������ ��Ҧ�� ������� ���������� ������. ���� ��Ҧ�� = 0, ���� Φ���� �� ���� �����������.</td></tr>
<tr><td><b>��������</b></td><td>���� ���� ���������, ���� ̦������� &gt;= ��Ҧ���, ̦������� �¦���դ���� �� ������� Ц��� ������� ������� ����������.</td></tr>
<?php
		break;
}
if ($is_admin)
{
	switch ($lang)
	{
		default:
		case "en":
?>
<tr><td><b>Scan order</b></td><td>The order of the hosts they will be crawled in. This value can be used to specify that some hosts shall be crawled before others and vice versa. Hosts with lowest <i>scan order</i> will be crawled first, when several hosts have the same <i>scan order</i> they will be crawled in the alphabetical order of their names.</td></tr>
<tr><td><b>Expire count</b></td><td>Host was unreacheable during the time period of <i>expire count</i> complete crawls. When this value reaches the number specified in configuration (<?php echo $help_expire; ?>) host will be deleted from database.</td></tr>
<?php
			break;
		case "bg":
?>
<tr><td><b>���������</b></td><td>���� �������� (�� -128 �� 127) �������� ����������, � ����� �� ����� ��������� ���������. ������� � ��-����� <i>���������</i> �� ����� ��������� �����; ������ ��������� ���� ������� <i>���������</i>, �� ����� ��������� �� ������� ���.</td></tr>
<tr><td><b>����� �� ���������</b></td><td>����� ���� ����� ���������, �� ����� �� ����� ������ � ����������. ������ ���� ����� �������� ��������� ����� � ���������������� ���� (<?php echo $help_expire; ?>), ������ �� ���� ������ �� ������ �����.</td></tr>
<?php
			break;
		case "cs":
?>
<tr><td><b>Po�ad� prohled�v�n�</b></td><td>Po�ad�, v n�m� budou servery prohled�v�ny. Tato hodnota se d� pou��t k ur�en�, �e n�kter� servery maj� b�t prohled�ny d��v ne� ostatn� a naopak. Servery s ni��� hodnotou <i>po�ad� prohled�v�n�</i> budou prohled�ny d��v, pokud n�kolik server� m� stejnou hodnotu <i>po�ad� prohled�v�n�</i>, budou prohled�ny v abecedn�m po�ad� jejich jmen.</td></tr>
<tr><td><b>Po�itadlo nedostupnosti</b></td><td>Hodnota <i>po�itadla nedostupnosti</i> ud�v�, b�hem kolika posledn�ch kompletn�ch prohled�n� s�t� byl server nedostupn�. Kdy� tato hodnota dos�hne hodnoty uveden� v konfiguraci (<?php echo $help_expire; ?>), server bude vymaz�n z datab�ze.</td></tr>
<?php
			break;
		case "de":
?>
<tr><td><b>Suchreihenfolge</b></td><td>Die Reihenfolge in der die Server durchsucht werden. Dieser Wert kann dazu benutzt werden, dass einige Server vor anderen durchsucht werden - und umgekehrt. Server mit niedrigstem Wert in der <i>Suchreihenfolge</i> werden als erstes durchsucht. Sollten mehrere Server die selbe <i>Suchreihenfolge</i> haben, werden diese nach der alphabetischen Reihenfolge ihres Namens durchsucht.</td></tr>
<tr><td><b>Verfallsz&auml;hler</b></td><td>Der Server war w&auml;hrend der vollst&auml;ndigen Durchsuchungen so oft nicht erreichbar, wie es der <i>Verfallsz&auml;hler</i> angibt. Wenn dieser Wert den Wert, der in der Konfiguration angegeben ist (<?php echo $help_expire; ?>) &uuml;berschreitet, wird der Server aus der Datenbank gel&ouml;scht.</td></tr>
<?php
			break;
		case "es":
?>
<tr><td><b>Orden de escaneo</b></td><td>El orden en el que los servidores ser�n escaneados. Este valor puede ser usado para especificar cuando algunos servidores deber�an ser escaneados antes que otros y viceversa. Servidores con menor <i>orden de escaneo</i> se escanear�n primero, cuando varios servidores tengan el mismo <i>orden de escaneo</i> ser�n escaneados por orden alfab�tico.</td></tr>
<tr><td><b>Tiempo de expiraci�n</b></td><td>El servidor fu� inalcanzable durante el per�odo de tiempo <i>tiempo de expiraci�n</i> en un escaneo completo. Cuando este valor alcanza el n�mero especificado en la configuraci�n (<?php echo $help_expire; ?>) el servidor ser� borrado de la base de datos.</td></tr>
<?php
			break;
		case "fr":
?>
<tr><td><b>Ordre de scan</b></td><td>L'ordre dans lequel les h�tes seront scann�s. Catte valeur peut �tre utilis�e pour que certains h�tes soient scann�s avant d'autres. Les h�tes avec le plus petit <i>ordre de scan</i> seront scann�s en premier. Quand plusieurs h�tes ont le meme <i>ordre de scan</i> ils seront scann�s dans l'ordre alphabetique.</td></tr>
<tr><td><b>Limite d'expiration</b></td><td>Si l'h�te a �t� inaccessible pendant la dur�e de la <i>limite d'expiration</i> pendant les scans complets, un compteur est incr�ment�. Quand ce compteur atteint un nombre sp�cifi� dans la configuration (<?php echo $help_expire; ?>), cet h�te sera supprim� de la base de donn�es.</td></tr>
<?php
			break;
		case "hu":
?>
<tr><td><b>Friss�t�si sorsz�m</b></td><td>A szerverek friss�t�si sorrendje. Ez az �rt�k arra haszn�lhat�, hogy az egyik szerver hamarabb friss�lj�n, mint a m�sik. A legkisebb sorsz�m� szerver friss�l leghamarabb. Az azonos sorsz�m�ak nev�k abc sorrendje alapj�n friss�lnek.</td></tr>
<tr><td><b>El�v�l�s</b></td><td>Megadja, hogy h�ny teljes friss�t�s alkalm�val volt el�rhetetlen a szerver. Ahogy ez a sz�m el�ri a konfigur�ci�s f�jlban meghat�rozottat (<?php echo $help_expire; ?>), a szerver t�rl�dik..</td></tr>
<?php
			break;
		case "lt":
?>
<tr><td><b>Skanavimo u�sakymas</b></td><td>U�sakymas l�tai skanuojamo hosto. �i funkcija gali b�ti naudojama kurie hostai turi b�ti l�tai nuskanuoti prie� sekan�ius ir atvirk��iai. Hostai su l�tu <i>skanavimo u�sakymu</i> pirmiausia bsu nuskanuoti l�tai, tada kelet� kit� host� turin�i� t� pat� <i>skanavimo u�sakym�</i> bus nuskanuoti pagal alfabeto raid�i� eili�kum�..</td></tr>
<tr><td><b>Pasibaig� skaitliukas</b></td><td>Hostas buvo nepasiekiamas. Kai �i funkcija pasiekia nustatyt� konfig�racijoje skai�i� (<?php echo $help_expire; ?>) hostas bus i�trintas i� duomen� baz�s.</td></tr>
<?php
			break;
		case "nl":
?>
<tr><td><b>Scan volgorde</b></td><td>De volgorde waarin de systemen geindexeerd worden. Deze waarde kan er voor zorgen dat bepaalde systemen voor of na andere worden geindexeerd. Systemen met de laagste <i>scan volgorde</i> zullen het eerst geindexeerd worden, verschillende systemen met dezelfde <i>scan volgorde</i> worden alfabetisch geindexeerd.<td></tr>
<tr><td><b>Indexeer pogingen</b></td><td>Tijdens <i>indexeer pogingen</i> was het niet mogelijk om een volledige indexering uit te voeren op het systeem. Als <i>indexeer pogingen</i> de maximale waarde uit het configuratiebestand (<?php echo $help_expire; ?>) bereikt, wordt het systeem verwijderd uit de database.</td></tr>
<?php
			break;
		case "pl":
?>
<tr><td><b>Kolejno�� skanowania</b></td><td>Kolejno�� wg. kt�rej zostan� przeskanowane hosty. Ta warto�� mo�e zosta� u�yta by okre�li�, kt�re hosty maj� by� skanowane przed innymi i vice versa. Hosty z ustawion� najni�sz� <i>kolejno�ci� skanowania</i> b�d� skanowane pierwsze, a gdy kilka ma t� sam� <i>kolejno�� skanowania</i> b�d� skanowane zgodnie z alfabetycznym porz�dkiem ich nazw.</td></tr>
<tr><td><b>Licznik wyga�ni�cia</b></td><td>Je�li host by� niedost�pny podczas pe�nego skanowania sieci, to jest zwi�kszany jego <i>licznikiem wyga�ni�cia</i>. Je�li osi�gnie on warto�� podan� w pliku konfiguracyjnym (<?php echo $help_expire; ?>) w�wczas host zostanie usuni�ty z bazy.</td></tr>
<?php
			break;
		case "ro":
?>
<tr><td><b>Ordinea de scanare</b></td><td>Ordinea în care gazdele vor fi scanate. Această valoare poate fi folosită pentru a specifica faptul ca unele gazde vor fi scanate înaintea altora şi vice versa. Gazdele cu cea mai mică <i>ordine de scanare</i> vor fi scanate primele, dacă mai multe gazde au aceeaşi <i>ordine de scanare</i> vor fi scanate în ordine alfabetică.</td></tr>
<tr><td><b>Contor expirări</b></td><td>Gazda a fost inaccesibilă de-a lungul a <i>contor expirări</i> scanări complete. Când această valoare atinge numărul specificat în fişierul de configurare (<?php echo $help_expire; ?>), gazda va fi ştearsă din baza de date.</td></tr>
<?php
			break;
		case "ru":
?>
<tr><td><b>���������</b></td><td>��� �������� (�� -128 �� 127) ���������� �������, � ������� ����� ������������� �����. ������� � ������� ������ <i>����������</i> ����� �������� �������, ���� ��������� ������ ����� ���������� <i>���������</i>, ��� ����� ������������� � ���������� �������.</td></tr>
<tr><td><b>������� �������������</b></td><td>����, ����������� �� ����� ������� ������������, ����������� ���� <i>������� �������������</i> �� �������. ����� ��� ����� ��������� ������� (<?php echo $help_expire; ?>), ���� ����� ������ �� ���� ������.</td></tr>
<tr><td><b>�����</b></td><td>���� <i>������������</i> ��������, ��� ���� ��� ������� ������� ���� �� ���� ���.</td></tr>
<?php
			break;
		case "sk":
?>
<tr><td><b>Poradie preh�ad�vania</b></td><td>Poradie v akom bud� servery preh�ad�van�. T�to hodnota m��e by� pou�it� na ur�enie, ktor� servery maj� by� preh�adan� sk�r ako ostatn� a naopak. Servery s ni��ou hodnotou <i>poradia preh�ad�vania</i> bud� preh�ad�vane sk�r. Pokia� m� nieko�ko serverov rovnak� hodnotu <i>poradia preh�ad�vania</i>, bud� preh�ad�van� v abecednom porad�.</td></tr>
<tr><td><b>Po��tadlo nedostupnosti</b></td><td>Hodnota <i>po��tadla nedostupnosti</i> hovor�, po�as ko�k�ch kompletn�ch preh�adan� siete bol server nedostupn�. Ke� t�to hodnota dosiahne ve�kos� uveden� v konfigur�cii (<?php echo $help_expire; ?>), server bude vymazan� z datab�zy.</td></tr>
<?php
			break;
		case "uk":
?>
<tr><td><b>����Ҧ���</b></td><td>�� �������� (צ� -128 �� 127) �������� �������, � ����� ������ �������Φ �����. ������� � ������ ������ <i>����Ҧ����</i> ������ �������Φ ��Φ��, ���� ��˦���� ���Ԧ� ����� ��������� <i>����Ҧ���</i>, ���� ������ �������Φ � ����������� �������.</td></tr>
<tr><td><b>�������� ����������Ԧ</b></td><td>����, ���������� Ц� ��� ������� ����������, �¦���դ �צ� <i>̦������� ����������Ԧ</i> �� �������. ���� �� ����� ������� (<?php echo $help_expire; ?>), ���� ���� ��������� � ���� ������.</td></tr>
<tr><td><b>�����</b></td><td>���� <i>��������</i> �������, �� ���� ��� ���� �� ��� ��Ц��� ��������.</td></tr>
<?php
			break;
	}
}
?>
</table>
</td></tr>
</table>
</td></tr></table>
