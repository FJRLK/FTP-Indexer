<?php
if (!defined ('FAST_FILE_SEARCH'))
{
	header ("Location: index.php");
	die ("");
}

# How is the translation done?
# ---------------------------

# The majority of texts are in a translation array:
# $tr["english sentence"] = "translated sentence";

# Some things remain in files - the helps and similar things.
# Other files which need to be translated:
# help_edit.php help_search.php


# TRANSLATION

$months = array ("Jan", "Fev", "Mar", "Avr", "Mai", "Jun", "Jul", "Aou", "Sep", "Oct", "Nov", "Dec");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "images ISO";
	$tr["pictures"] = "images";
	$tr["software"] = "programmes";

	# the predefined times in select.php
	$tr["today"] = "aujourd'hui";
	$tr["yesterday"] = "hier";
	$tr["2 days ago"] = "avant-hier";
	$tr["3 days ago"] = "il y a 3 jours";
	$tr["week ago"] = "il y a une semaine";
	$tr["2 weeks ago"] = "il y a 2 semaines";
	$tr["month ago"] = "il y a un mois";

	$tr["Searching is case insensitive."] = "La recherche ne prend pas en compte la casse.";
	$tr["Files (wildcard (?,*))"] = "Fichiers (jokers (?,*))";
	$tr["Files (substring)"] = "Fichiers (sous-cha�ne)";
	$tr["Files (regular expression)"] = "Fichiers (expression r�guli�re)";
	$tr["Directories (substring)"] = "R�pertoires (sous-cha�ne)";
	$tr["Directories (wildcard (?,*))"] = "R�pertoires (jokers (?,*))";
	$tr["Directories (regular expression)"] = "R�pertoires (expression r�guli�re)";
	$tr["Search!"] = "Chercher";
	$tr["Fill in the parameters for"] = "Entrez les param�tres pour";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Sauvegarder les r�glages (cookies n�cessaires)";
	$tr["Show only online hosts"] = "Ne montrer que les machines connect�es";
	$tr["Print sizes in human readable format"] = "Afficher les tailles dans un format lisible par un humain";
	$tr["Search on"] = "Rechercher sur";
	$tr["hosts"] = "h�tes";		# SMB and FTP hosts
	$tr["file size"] = "taille";
	$tr["Only files added since"] = "Seulement les fichiers ajout�s depuis";
	$tr["Hits per page"] = "R�ponses par page";
	$tr["Your history"] = "Votre historique";
	$tr["Statistics"] = "Statistiques";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "R�pertoires";
	$tr["Files"] = "Fichiers";
	$tr["Total size"] = "Taille totale";
	$tr["Queries"] = "Recherches";
	$tr["and"] = "et";
	$tr["others"] = "autres";
	$tr["uses some code from"] = "utilse des parties de code de";
	$tr["is distributed under the"] = "est distribu� sous";


	# SEARCH.PHP:
	$tr["Results for"] = "R�sultats pour";
	$tr["More"] = "Plus";
	$tr["New search"] = "Nouvelle recherche";
	$tr["No hits"] = "Pas de r�ponses";
	$tr["Hit"] = "R�ponse";
	$tr["Hits"] = "R�ponses";


	# BROWSE.PHP
	$tr["Name"] = "Nom";
	$tr["Size"] = "Taille";
	$tr["Date"] = "Date";
}
$tr["Last change"] = "Dernier changement";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Ajouter";
$tr["Update"] = "Mettre � jour";
$tr["Edit"] = "Editer";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Supprimer";
$tr["Purge"] = "Vider";
$tr["Cancel"] = "Annuler";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Ajouter un serveur FTP";
	$tr["Edit FTP server"] = "Editer le serveur FTP";
	$tr["Delete FTP server"] = "Supprimer le serveur FTP";
	$tr["Purge FTP server"] = "Vider le serveur FTP";
	$tr["Add SMB server"] = "Ajouter le serveur SMB";
	$tr["Edit SMB server"] = "Editer le serveur SMB";
	$tr["Delete SMB server"] = "Supprimer le serveur SMB";
	$tr["Purge SMB server"] = "Vider le serveur SMB";

	# results and errors
	$tr["Host name must be specified"] = "Le nom de l'hote doit �tre sp�cifi�";
	$tr["Workgroup must be specified"] = "Le groupe de traveil doit �tre sp�cifi�";
	$tr["is not valid IP address"] = "n'est pas une adresse IP valide";
	$tr["is not valid DNS name or IP address"] = "n'est pas un nom DNS ou une adresse IP valide";
	$tr["Login must be specified"] = "Le login doit �tre sp�cifi�";
	$tr["Port is not valid"] = "Le port n'est pas valide";
	$tr["is not valid file name with absolute path"] = "n'est pas un nom de fichier valide avec un chemin d'acc�s absolu";
	$tr["was added to list"] = "a �t� ajout� � la liste";
	$tr["is already in the list"] = "est d�j� dans la liste";
	$tr["was deleted"] = "a �t� supprim�";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "sera supprim� au prochain scan du r�seau";
	$tr["will be purged during next crawl"] = "sera vid� lors du prochain scan du r�seau";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Il y a eur une erreur pendant l\'ajout de %s � la liste";
	$tr["__host_updated__"] = "Les informations sur %s ont �t� mises � jour";

	# data fields
	$tr["Host"] = "H�te";
	$tr["Host (DNS name or IP)"] = "H�te (adresse IP ou nom DNS)";
	$tr["Login"] = "Login";
	$tr["Password"] = "Mot de passe";
	$tr["Port"] = "Port";
	$tr["Starting directory"] = "R�pertoire de d�part";
	$tr["List of files"] = "Liste des fichiers";
	$tr["Use passive mode"] = "Utiliser le mode passif";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Commentaire";
	$tr["Editable by"] = "Editable par";
	$tr["IP address"] = "adresse IP";
	$tr["Workgroup"] = "Groupe de travail";
	$tr["Shares"] = "Partages";
	$tr["Name"] = "Nom";
	$tr["File size"] = "Taille des fichiers";
	$tr["Period"] = "Periode";
	$tr["Counter"] = "Compteur";
	$tr["Scan order"] = "Ordre de scan";
	$tr["Expire count"] = "Limite d'expiration";
	$tr["Flags"] = "Arguments";
	$tr["Action"] = "Action";
	$tr["delete"] = "supprimer";
	$tr["purge"] = "vider";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Vous pouvez �crire ici vos commentaires, vos id�es, ...";
	$tr["Your name or nickname"] = "Votre nom ou surnom";
	$tr["Your e-mail"] = "Votre e-mail";
	$tr["optional"] = "optionel";
	$tr["Comment text"] = "Commentaire";
	$tr["Submit"] = "Envoyer";
	$tr["Delete comment"] = "Supprimer le commentaire";
	$tr["Do you really want to delete this comment?"] = "Voulez-vous vraiment supprimer ce commentaire ?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Changer le mot de passe";
	$tr["Logout"] = "D�connexion";
	$tr["Password was changed"] = "Le mot de passe a �t� chang�";
	$tr["Password cannot be empty"] = "Le mot de passe ne peut pas �tre vide";
	$tr["Passwords do not match"] = "Les mots de passe ne correspondent pas";
	$tr["New password"] = "Nouveau mot de passe";
	$tr["Reenter password"] = "R�-entrez le mot de passe";
	$tr["Login name"] = "Nom d'utilisateur";
	$tr["Password"] = "Mot de passe";
	$tr["Login"] = "Login";
	$tr["There are no admins."] = "Il n'y a pas d'administrateurs.";
	$tr["Admin name"] = "Nom de l'administrateur";
	$tr["E-mail"] = "E-mail";
	$tr["Rights"] = "Droits";
	$tr["Edit FTP list"] = "Editer la liste FTP";
	$tr["Purge FTP server from list"] = "Vider le serveur FTP de la liste";	# purge == completely delete
	$tr["Edit SMB list"] = "Editer la liste des serveurs SMB";
	$tr["Purge SMB server from list"] = "Vider le serveur SMB de la liste";
	$tr["Delete comments"] = "Supprimer les commentaires";
}


# MENU.PHP:
$tr["Search"] = "Recherche";
$tr["FTP server list"] = "Liste FTP";
$tr["SMB server list"] = "Liste SMB";
$tr["Comments"] = "Commentaires";
$tr["Admin"] = "Admin";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Aide";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Erreur";
$tr["Can't read configuration file"] = "Fichier de configuration illisible !";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME doit �tre d�finit dans le fichier de configuration";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN doit �tre d�finit dans le fichier de configuration";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD doit �tre d�finit dans le fichier de configuration";
$tr["Can't connect to database"] = "Impossible de se connecter � la base de donn�es";
$tr["Can't connect to master database"] = "Impossible de se connecter � la base de donn�es principale";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "r�sultat";
	else
		"r�sultats";
	echo " en ", sprintf ("%0.2f", $s), " secondes";
}

function page_generated ($host, $time)
{
	echo "Cette page a �t� g�n�r�e par une recherche de ",
		$host, strftime (" le %d/%m/%Y � %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "Voulez-vous vraiment ", ($purge ? "vider" : "supprimer"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Vous devez utiliser un compte d'admin qui a les droits d'ajouter un serveur $type";
}

function permition_host_edit ($HID)
{
	return "Il n'y a pas d'h�te avec un HID �gal � $HID dans la liste ou<br />vous devez vous sugner en tant qu'un administrateur capable d'�diter cet h�te";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "Il n'y a pas de machine avec un HID = $HID dans la liste ou alors<br />vous devez vous signer avec le login d'un administrateur qui a les droits n�cessaires pour " . ($purge ? "vider" : "modifier ou vider") . " des serveurs $type";
}

function permition_comment_delete ($CID)
{
	return "Il n'y a pas de commentaire avec un CID de $CID ou alors<br />vous devez vous signer avec le login d'un administrateur qui a le droit de supprimer les commentaires";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Les recherches lentes ont �t� d�sactiv�es</h1>';
	echo "Recherchez avec les jokers et sp�cifiez des caract�res normaux (pas '*' ni '?') � partir du d�but ou de la fin du masque de nom de fichier (par ex. *.mp3)";
	if ($fast_query_minsize >= 0)
		echo '<br />ou sp�cifiez une taille minimum de fichier de "', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />ou sp�cifiez une taille maximum de fichier de "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Retour aux param�tres de recherche</a>';
}

?>
