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
<tr><td><b>Ñïèñúê íà ôàéëîâåòå</b></td><td>Íÿêîè FTP ñúğâúğè ñúäúğæàò ôàéë ñúñ ñïèñúê íà ôàéëîâåòå, êîèòî ñå íàìèğàò íà FTP ñúğâúğà. Êîãàòî èìåòî íà òîçè ôàéë å ñïåöèôèöèğàíî, îáõîæäàíåòî íà FTP ñúğâúğà ùå å ìíîãî ïî-áúğçî, ïîíåæå ñïèñúêúò íà ôàéëîâåòå ùå ñå ïîëó÷àâà îò òîçè ôàéë è íÿìà äà ñå îáõîæäà äúğâîòî íà äèğåêòîğèèòå.</td></tr>
<tr><td><b>Èíòåğâàë</b></td><td>Õîñòúò ùå áúäå ñêàíèğàí âåäíúæ íà âñåêè <i>èíòåğâàë</i> ïúëíè ñêàíèğàíèÿ íà ñïèñúöèòå. Àêo <i>èíòåğâàëúò</i> = 0, õîñòúò íèêîãà íÿìà äà áúäå ñêàíèğàí.</td></tr>
<tr><td><b>Áğîÿ÷</b></td><td>Õîñòúò ùå áúäå ñêàíèğàí êîãàòî <i>áğîÿ÷úò</i> &gt;= <i>èíòåğâàëà</i>, <i>áğîÿ÷úò</i> ñå óâåëè÷àâà ñ åäèíèöà ïğè âñÿêî ïúëíî ñêàíèğàíå.</td></tr>
<?php
		break;
	case "cs":
?>
<tr><td><b>Seznam souborù</b></td><td>Na nìkterıch FTP serverech se nachází soubor se seznamem souborù na FTP serveru. Kdy¾ je zadáno jméno tohoto souboru, prohledávání FTP serveru je o hodnì rychlej¹í, nebo» seznam souborù se získá z tohoto souboru a ne procházením adresáøového stromu.</td></tr>
<tr><td><b>Perioda</b></td><td>Server bude prohledán jednou za <i>periodu</i> kompletních prohledání sítì. Pokud <i>perioda</i> = 0, server nebude nikdy prohledán.</td></tr>
<tr><td><b>Poèitadlo</b></td><td>Server bude prohledán, jakmile <i>poèitadlo</i> &gt;= <i>perioda</i>, <i>poèitadlo</i> se zvy¹uje o 1 bìhem ka¾dého kompletního prohledání sítì.</td></tr>
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
<tr><td><b>Listado de ficheros</b></td><td>Algunos servidores FTP contienen un fichero con un listado de los ficheros que se encuentran en elservidor. Cuando el nombre de este fichero es especificado el escaneo del servidor FTP es mucho más rápido debido a que se utilizará este listado de ficheros en lugar de recorrer la estructura de directorios.</td></tr>
<tr><td><b>Periodo</b></td><td>El servidor será escaneado una vez cada <i>periodo</i> completamente. Si el <i>periodo</i> = 0 el servidor no será escaneado.</td></tr>
<tr><td><b>Contador</b></td><td>El servidor será escaneado cuando <i>contador</i> &gt;= <i>periodo</i>, <i>contador</i> es incrementado durante cada escaneo completo.</td></tr>
<?php
		break;
	case "fr":
?>
<tr><td><b>Liste des fichiers</b></td><td>Certains serveurs FTP disposent d'un fichier qui contient la liste des fichiers disponibles sur le serveur. Si le nom de ce fichier est spécifié, l'ajout des fichiers dans le moteur de recherche sera beaucoup plus rapide car il sera devenu inutile de parcourir tous les répertoires.</td></tr>
<tr><td><b>Periode</b></td><td>L'hôte sera scanné une fois par <i>période</i> de scans complets. Si la <i>période</i> vaut 0 l'hôte ne sera jamais scanné.</td></tr>
<tr><td><b>Compteur</b></td><td>L'hôte sera scanné quand <i>compteur</i> &gt;= <i>période</i>, <i>compteur</i> est incrémenté pandant chaque scan complet.</td></tr>
<?php
		break;
	case "hu":
?>
<tr><td><b>Fájl lista</b></td><td>Néhány FTP szerver saját fájl- és könyvtárlistát tartalmaz. Ennek megadásával a fájlok és könyvtárak listája gyorsabban lekérdezhetõ, mert nincs szükség az egesz könyvtárfa áttekintésére.</td></tr>
<tr><td><b>Periódus</b></td><td>A szerver minden <i>periódus</i>-i teljes frissítés során frissül. Ha az <i>periódus</i> = 0, a host sosem lesz frissítve. Ha az <i>periódus</i> = 3, minden 3. teljes frissítés alkalmával frissülnek az adatok.</td></tr>
<tr><td><b>Számláló</b></td><td>A szerver csak akkor lesz frissítve, ha a <i>számláló</i> &gt;= <i>periódus</i>, <i>számláló</i> értéke eggyel nõ minden teljes frissítés után.</td></tr>
<?php
		break;
	case "lt":
?>
<tr><td><b>Failø sàrağas</b></td><td>Kai kurie serveriai turi failà, kuriame yra surağyta kà tas serveris saugoja. Kai ğis failas yra nurodomas FTP paieğka serveryje pagreitëja, todël kad nuskaitoma iğ to failo, o neskaitomas visos serverio direktorijos.</td></tr>
<tr><td><b>Periodas</b></td><td>Hostas bus nuskanuotas viena kartà per <i>periodà</i> visiğkai lëtai. Jei <i>periodas</i> = 0 hostas daugiau niekada nebus lëtai skanuojamas.</td></tr>
<tr><td><b>Skaitliukas</b></td><td>Hostas bus skanuojamas kai<i> skaitliukas</i> &gt;= <i>periodui</i>, <i>skaitliukas</i> yra padidinamas per kiekvienà lëtà skanavimà.</td></tr>
<?php
		break;
	case "nb":
?>
<tr><td><b>Filliste</b></td><td>Noen FTP-servere inneholder en liste over filer på serveren. Dersom navnet på denne filen spesifiseres vil gjennomsøkingen av FTP-serveren gå mye raskere siden listen som genereres kommer fra denne filen og ikke ved gjnnomsøking av katalogstrukturen.</td></tr>
<tr><td><b>Periode</b></td><td>Det søkes gjennom Host en gang pr. <i>periode</i>. Dersom <i>periode</i> = 0 blir maskin aldri gjennomsøkt.</td></tr>
<tr><td><b>Teller</b></td><td>Server blir gjennomsøkt hver gang <i>teller</i> &gt;= <i>periode</i>, <i>teller</i> teller inkrementeres for hver gjennomført søking.</td></tr>
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
<tr><td><b>Lista plików</b></td><td>Niektóre serwery FTP zawieraj± plik z lista wszystkich plików na danym serwerze. Je¶li zostanie podana nazwa tego pliku, wyszukiwanie zostanie dramatycznie przyspieszona, poniewa¿ lista plików bêdzie pochodzi³a z owego pliku, a nie z czasoch³onnego przeszukiwania katalogów.</td></tr>
<tr><td><b>Okres</b></td><td>Host bêdzie skanowany co pewien <i>okres</i> pe³nego skanowania sieci. Je¶li <i>okres</i> = 0, wówczas host nigdy nie bêdzie skanowany.</td></tr>
<tr><td><b>Licznik</b></td><td>Host bêdzie skanowany je¶li <i>licznik</i> &gt;= <i>okres</i>, <i>licznik</i> jest zwiêkszany przy ka¿dym pe³nym skanowaniu sieci.</td></tr>
<?php
		break;
	case "ro":
?>
<tr><td><b>Lista cu fiÅŸiere</b></td><td>Unele servere FTP au un fiÅŸier care conÅ£ine o listÄƒ de fiÅŸiere care se aflÄƒ pe serverul FTP. CÃ¢nd numele acestui fiÅŸier este specificat, scanarea serverului FTP este mult mai rapidÄƒ deoarece lista cu fiÅŸiere va fi luatÄƒ din acest fiÅŸier ÅŸi nu prin scanarea arborelui de directoare.</td></tr>
<tr><td><b>Perioada</b></td><td>Gazda va fi scanatÄƒ o datÄƒ per <i>perioada</i> scanÄƒri complete. DacÄƒ <i>perioada</i> = 0 gazda nu va fi scanatÄƒ.</td></tr>
<tr><td><b>Contor</b></td><td>Gazda va fi scanatÄƒ cÃ¢nd <i>contor</i> &gt;= <i>perioada</i>, <i>contor</i> este incrementat Ã®n timpul fiecÄƒrei scanÄƒri complete.</td></tr>
<?php
		break;
	case "ru":
?>
<tr><td><b>Ñïèñîê ôàéëîâ</b></td><td>Íåêîòîğûå FTP ñåğâåğà èìåşò ôàéë ñî ñïèñêîì ñâîèõ ôàéëîâ. Åñëè òàêîé ôàéë áóäåò óêàçàí, îïğîñ òàêîãî FTP áóäåò ïğîèçâåäåí íàìíîãî áûñòğåå, òàê êàê ñêà÷àòü ôàéë-ñïèñîê íàìíîãî áûñòğåå, ÷åì îáõîäèòü âñå äåğåâî äèğåêòîğèé.</td></tr>
<tr><td><b>Ïåğèîä</b></td><td>Õîñò áóäåò îòñêàíèğîâàí êàæäûé <i>ïåğèîä</i> ïîëíîãî ñêàíèğîâàíèÿ ñïèñêà. Åñëè <i>ïåğèîä</i> = 0, õîñò íèêîãäà íå áóäåò ñêàíèğîâàòüñÿ.</td></tr>
<tr><td><b>Ñ÷åò÷èê</b></td><td>Õîñò áóäåò îòñêàíèğîâàí, êîãäà <i>ñ÷åò÷èê</i> &gt;= <i>ïåğèîä</i>, <i>ñ÷åò÷èê</i> óâåëè÷èâàåòñÿ íà åäåíèöó ïîñëå êàæäîãî ïîëíîãî ñêàíèğîâàíèÿ.</td></tr>
<?php
		break;
	case "sk":
?>
<tr><td><b>Zoznam súborov</b></td><td>Na niektorıch FTP serveroch je ulo¾enı súbor obsahujúci zoznam súborov prístupnıch na FTP. Pokiaµ uvediete názov tohto súboru je prehµadávanie vırazne rıchlej¹ie preto¾e sa zoznam súborov získa z tohoto súboru a nie prechádzaním adresárov.</td></tr>
<tr><td><b>Perióda</b></td><td>Server sa bude prehµadáva» raz za <i>periódu</i> kompletnıch prehµadaní siete. Pokiaµ <i>perióda</i> = 0, server sa nebude prehµadáva» nikdy.</td></tr>
<tr><td><b>Poèítadlo</b></td><td>Server sa prehµadá keï <i>poèítadlo</i> &gt;= <i>perióda</i>, <i>poèítadlo</i> sa zvy¹uje o 1 pri ka¾dom úplnom prehµadávaní siete.</td></tr>
<?php
		break;
	case "uk":
?>
<tr><td><b>óĞÉÓÏË ÆÁÊÌ¦×</b></td><td>äÅÑË¦ FTP ÓÅÒ×ÅÒÉ ÍÁÀÔØ ÆÁÊÌ - ÓĞÉÓÏË ÕÓ¦È Ó×Ï§È ÆÁÊÌ¦×. ñËİÏ ÔÁËÉÊ ÆÁÊÌ ÂÕÄÅ ×ËÁÚÁÎÉÊ, ÏĞÒÏÓ FTP ÂÕÄÅ ×ÉËÏÎÁÎÏ ÎÁÂÁÇÁÔÏ Û×ÉÄÛÅ, ÔÏÍÕ İÏ ÓËÁŞÁÔÉ ÆÁÊÌ-ÓĞÉÓÏË ÎÁÂÁÇÁÔÏ Û×ÉÄÛÅ, Î¦Ö ĞÏ×Î¦ÓÔÀ ĞÒÏÓËÁÎÕ×ÁÔÉ ÕÓ¦ ÄÉÒÅËÔÏÒ¦§.</td></tr>
<tr><td><b>ğÅÒ¦ÏÄ</b></td><td>èÏÓÔ ÂÕÄÅ ÓËÁÎÏ×ÁÎÏ ËÏÖÎÉÊ ĞÅÒ¦ÏÄ ĞÏ×ÎÏÇÏ ÓËÁÎÕ×ÁÎÉÑ ÓĞÉÓËÕ. ñËİÏ ĞÅÒ¦ÏÄ = 0, ÈÏÓÔ Î¦ËÏÌÉ ÎÅ ÂÕÄÅ ÓËÁÎÕ×ÁÔÉÓÑ.</td></tr>
<tr><td><b>ì¦ŞÉÌØÎÉË</b></td><td>èÏÓÔ ÂÕÄÅ ÓËÁÎÏ×ÁÎÏ, ËÏÌÉ Ì¦ŞÉÌØÎÉË &gt;= ĞÅÒ¦ÏÄÕ, Ì¦ŞÉÌØÎÉË ÚÂ¦ÌØÛÕ¤ÔØÓÑ ÎÁ ÏÄÉÎÉÃÀ Ğ¦ÓÌÑ ËÏÖÎÏÇÏ ĞÏ×ÎÏÇÏ ÓËÁÎÕ×ÁÎÎÑ.</td></tr>
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
<tr><td><b>Ïğèîğèòåò</b></td><td>Òàçè ñòîéíîñò (îò -128 äî 127) îïğåäåëÿ ïğèîğèòåòà, â êîéòî ùå áúäàò ñêàíèğàíè õîñòîâåòå. Ñúğâúğè ñ ïî-ìàëúê <i>ïğèîğèòåò</i> ùå áúäàò ñêàíèğàíè ïúğâè; êîãàòî ñúğâúğèòå èìàò åäíàêúâ <i>ïğèîğèòåò</i>, ùå áúäàò ñêàíèğàíè ïî àçáó÷åí ğåä.</td></tr>
<tr><td><b>Áğîÿ÷ íà âàëèäíîñò</b></td><td>Áğîÿò ïúòè ïúëíî ñêàíèğàíå, ïî âğåìå íà êîèòî õîñòúò å íåäîñòúïåí. Êîãàòî òîâà ÷èñëî äîñòèãíå ïğåäåëíèÿ íîìåğ â êîíôèãóğàöèîííèÿ ôàéë (<?php echo $help_expire; ?>), õîñòúò ùå áúäå èçòğèò îò áàçàòà äàííè.</td></tr>
<?php
			break;
		case "cs":
?>
<tr><td><b>Poøadí prohledávání</b></td><td>Poøadí, v nìm¾ budou servery prohledávány. Tato hodnota se dá pou¾ít k urèení, ¾e nìkteré servery mají bıt prohledány døív ne¾ ostatní a naopak. Servery s ni¾¹í hodnotou <i>poøadí prohledávání</i> budou prohledány døív, pokud nìkolik serverù má stejnou hodnotu <i>poøadí prohledávání</i>, budou prohledány v abecedním poøadí jejich jmen.</td></tr>
<tr><td><b>Poèitadlo nedostupnosti</b></td><td>Hodnota <i>poèitadla nedostupnosti</i> udává, bìhem kolika posledních kompletních prohledání sítì byl server nedostupnı. Kdy¾ tato hodnota dosáhne hodnoty uvedené v konfiguraci (<?php echo $help_expire; ?>), server bude vymazán z databáze.</td></tr>
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
<tr><td><b>Orden de escaneo</b></td><td>El orden en el que los servidores serán escaneados. Este valor puede ser usado para especificar cuando algunos servidores deberían ser escaneados antes que otros y viceversa. Servidores con menor <i>orden de escaneo</i> se escanearán primero, cuando varios servidores tengan el mismo <i>orden de escaneo</i> serán escaneados por orden alfabético.</td></tr>
<tr><td><b>Tiempo de expiración</b></td><td>El servidor fué inalcanzable durante el período de tiempo <i>tiempo de expiración</i> en un escaneo completo. Cuando este valor alcanza el número especificado en la configuración (<?php echo $help_expire; ?>) el servidor será borrado de la base de datos.</td></tr>
<?php
			break;
		case "fr":
?>
<tr><td><b>Ordre de scan</b></td><td>L'ordre dans lequel les hôtes seront scannés. Catte valeur peut être utilisée pour que certains hôtes soient scannés avant d'autres. Les hôtes avec le plus petit <i>ordre de scan</i> seront scannés en premier. Quand plusieurs hôtes ont le meme <i>ordre de scan</i> ils seront scannés dans l'ordre alphabetique.</td></tr>
<tr><td><b>Limite d'expiration</b></td><td>Si l'hôte a été inaccessible pendant la durée de la <i>limite d'expiration</i> pendant les scans complets, un compteur est incrémenté. Quand ce compteur atteint un nombre spécifié dans la configuration (<?php echo $help_expire; ?>), cet hôte sera supprimé de la base de données.</td></tr>
<?php
			break;
		case "hu":
?>
<tr><td><b>Frissítési sorszám</b></td><td>A szerverek frissítési sorrendje. Ez az érték arra használható, hogy az egyik szerver hamarabb frissüljön, mint a másik. A legkisebb sorszámú szerver frissül leghamarabb. Az azonos sorszámúak nevük abc sorrendje alapján frissülnek.</td></tr>
<tr><td><b>Elévülés</b></td><td>Megadja, hogy hány teljes frissítés alkalmával volt elérhetetlen a szerver. Ahogy ez a szám eléri a konfigurációs fájlban meghatározottat (<?php echo $help_expire; ?>), a szerver törlõdik..</td></tr>
<?php
			break;
		case "lt":
?>
<tr><td><b>Skanavimo uşsakymas</b></td><td>Uşsakymas lëtai skanuojamo hosto. Ği funkcija gali bûti naudojama kurie hostai turi bûti lëtai nuskanuoti prieğ sekanèius ir atvirkğèiai. Hostai su lëtu <i>skanavimo uşsakymu</i> pirmiausia bsu nuskanuoti lëtai, tada keletà kitø hostø turinèiø tà patá <i>skanavimo uşsakymà</i> bus nuskanuoti pagal alfabeto raidşiø eiliğkumà..</td></tr>
<tr><td><b>Pasibaigë skaitliukas</b></td><td>Hostas buvo nepasiekiamas. Kai ği funkcija pasiekia nustatytà konfigûracijoje skaièiø (<?php echo $help_expire; ?>) hostas bus iğtrintas iğ duomenø bazës.</td></tr>
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
<tr><td><b>Kolejno¶æ skanowania</b></td><td>Kolejno¶æ wg. której zostan± przeskanowane hosty. Ta warto¶æ mo¿e zostaæ u¿yta by okre¶liæ, które hosty maj± byæ skanowane przed innymi i vice versa. Hosty z ustawion± najni¿sz± <i>kolejno¶ci± skanowania</i> bêd± skanowane pierwsze, a gdy kilka ma t± sam± <i>kolejno¶æ skanowania</i> bêd± skanowane zgodnie z alfabetycznym porz±dkiem ich nazw.</td></tr>
<tr><td><b>Licznik wyga¶niêcia</b></td><td>Je¶li host by³ niedostêpny podczas pe³nego skanowania sieci, to jest zwiêkszany jego <i>licznikiem wyga¶niêcia</i>. Je¶li osi±gnie on warto¶æ podan± w pliku konfiguracyjnym (<?php echo $help_expire; ?>) wówczas host zostanie usuniêty z bazy.</td></tr>
<?php
			break;
		case "ro":
?>
<tr><td><b>Ordinea de scanare</b></td><td>Ordinea Ã®n care gazdele vor fi scanate. AceastÄƒ valoare poate fi folositÄƒ pentru a specifica faptul ca unele gazde vor fi scanate Ã®naintea altora ÅŸi vice versa. Gazdele cu cea mai micÄƒ <i>ordine de scanare</i> vor fi scanate primele, dacÄƒ mai multe gazde au aceeaÅŸi <i>ordine de scanare</i> vor fi scanate Ã®n ordine alfabeticÄƒ.</td></tr>
<tr><td><b>Contor expirÄƒri</b></td><td>Gazda a fost inaccesibilÄƒ de-a lungul a <i>contor expirÄƒri</i> scanÄƒri complete. CÃ¢nd aceastÄƒ valoare atinge numÄƒrul specificat Ã®n fiÅŸierul de configurare (<?php echo $help_expire; ?>), gazda va fi ÅŸtearsÄƒ din baza de date.</td></tr>
<?php
			break;
		case "ru":
?>
<tr><td><b>Ïğèîğåòåò</b></td><td>İòî çíà÷åíèå (îò -128 äî 127) îïğåäåëÿåò ïîğÿäîê, â êîòîğîì áóäóò îòñêàíèğîâàíû õîñòû. Ñåğâåğû ñ ìåíüøèì ÷èñëîì <i>ïğèîğåòåòà</i> áóäóò îïğîøåíû ïåğâûìè, åñëè íåñêîëüêî õîñòîâ èìåşò îäèíàêîâûé <i>ïğèîğåòåò</i>, îíè áóäóò îòñêàíèğîâàíû â àëôàâèòíîì ïîğÿäêå.</td></tr>
<tr><td><b>Ñ÷åò÷èê íåäîñòóïíîñòè</b></td><td>Õîñò, íåäîñòóïíûé âî âğåìÿ ïîëíîãî ñêàíèğîâàíèÿ, óâåëè÷èâàåò ñâîé <i>ñ÷åò÷èê íåäîñòóïíîñòè</i> íà åäåíèöó. Êîãäà ıòî ÷èñëî äîñòèãíåò ïğåäåëà (<?php echo $help_expire; ?>), õîñò áóäåò óäàëåí èç áàçû äàííûõ.</td></tr>
<tr><td><b>Ôëàãè</b></td><td>Ôëàã <i>îòñêàíèğîâàí</i> îçíà÷àåò, ÷òî õîñò áûë óñïåøíî îïğîøåí õîòÿ áû îäèí ğàç.</td></tr>
<?php
			break;
		case "sk":
?>
<tr><td><b>Poradie prehµadávania</b></td><td>Poradie v akom budú servery prehµadávané. Táto hodnota mô¾e by» pou¾itá na urèenie, ktoré servery majú by» prehµadané skôr ako ostatné a naopak. Servery s ni¾¹ou hodnotou <i>poradia prehµadávania</i> budú prehµadávane skôr. Pokiaµ má niekoµko serverov rovnakú hodnotu <i>poradia prehµadávania</i>, budú prehµadávané v abecednom poradí.</td></tr>
<tr><td><b>Poèítadlo nedostupnosti</b></td><td>Hodnota <i>poèítadla nedostupnosti</i> hovorí, poèas koµkıch kompletnıch prehµadaní siete bol server nedostupnı. Keï táto hodnota dosiahne veµkos» uvedenú v konfigurácii (<?php echo $help_expire; ?>), server bude vymazanı z databázy.</td></tr>
<?php
			break;
		case "uk":
?>
<tr><td><b>ğÒÉÏÒ¦ÔÅÔ</b></td><td>ãÅ ÚÎÁŞÅÎÎÑ (×¦Ä -128 ÄÏ 127) ×ÉÚÎÁŞÁ¤ ĞÏÒÑÄÏË, Õ ÑËÏÍÕ ÂÕÄÕÔØ ÓËÁÎÏ×ÁÎ¦ ÈÏÓÔÉ. óÅÒ×ÅÒÉ Ó ÍÅÎÛÉÍ ŞÉÓÌÏÍ <i>ĞÒÉÏÒ¦ÔÅÔÕ</i> ÂÕÄÕÔØ ÓËÁÎÏ×ÁÎ¦ ÒÁÎ¦ÛÅ, ÑËİÏ ÄÅË¦ÌØËÁ ÈÏÓÔ¦× ÍÁÀÔØ ÏÄÎÁËÏ×ÉÊ <i>ĞÒÉÏÒ¦ÔÅÔ</i>, ×ÏÎÉ ÂÕÄÕÔØ ÓËÁÎÏ×ÁÎ¦ × ÁÌÆÁ×ÉÔÎÏÍÕ ĞÏÒÑÄËÕ.</td></tr>
<tr><td><b>ì¦ŞÉÌØÎÉË ÎÅÄÏÓÑÖÎÏÓÔ¦</b></td><td>èÏÓÔ, ÎÅÄÏÓÑÖÎÉÊ Ğ¦Ä ŞÁÓ ĞÏ×ÎÏÇÏ ÓËÁÎÕ×ÁÎÎÑ, ÚÂ¦ÌØÛÕ¤ Ó×¦Ê <i>Ì¦ŞÉÌØÎÉË ÎÅÄÏÓÑÖÎÏÓÔ¦</i> ÎÁ ÏÄÉÎÉÃÀ. ëÏÌÉ ÃÅ ŞÉÓÌÏ ÄÏÓÑÇÎÅ (<?php echo $help_expire; ?>), ÈÏÓÔ ÂÕÄÅ ×ÉÄÁÌÅÎÉÊ Ú ÂÁÚÉ ÄÁÎÎÉÈ.</td></tr>
<tr><td><b>æÌÁÇÉ</b></td><td>æÌÁÇ <i>ÓËÁÎÏ×ÁÎ</i> ÏÚÎÁŞÁ¤, İÏ ÈÏÓÔ ÂÕ× ÈÏŞÁ ÂÉ ÒÁÚ ÕÓĞ¦ÛÎÏ ÓËÁÎÏ×ÁÎ.</td></tr>
<?php
			break;
	}
}
?>
</table>
</td></tr>
</table>
</td></tr></table>
