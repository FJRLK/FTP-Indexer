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

$months = array ("Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic");

# SELECT.PHP:
if (defined ("FFS_SEARCH"))
{
	# the predefined file types in select.php (the main search page)
	$tr["ISO images"] = "imagenes ISO";
	$tr["pictures"] = "gráficos";
	$tr["software"] = "software";

	# the predefined times in select.php
	$tr["today"] = "hoy";
	$tr["yesterday"] = "ayer";
	$tr["2 days ago"] = "hace 2 días";
	$tr["3 days ago"] = "hace 3 días";
	$tr["week ago"] = "hace 1 semana";
	$tr["2 weeks ago"] = "hace 2 semanas";
	$tr["month ago"] = "hace 1 mes";

	$tr["Searching is case insensitive."] = "La búsqueda no tiene en cuenta mayúsculas.";
	$tr["Files (wildcard (?,*))"] = "Archivos (comodín (?,*))";
	$tr["Files (substring)"] = "Archivos (subcadena)";
	$tr["Files (regular expression)"] = "Archivos (expresion regular)";
	$tr["Directories (substring)"] = "Directorios (subcadena)";
	$tr["Directories (wildcard (?,*))"] = "Directorios (comodín (?,*))";
	$tr["Directories (regular expression)"] = "Directorios (expresion regular)";
	$tr["Search!"] = "Buscar";
	$tr["Fill in the parameters for"] = "Rellene los párametros para";
	$tr["Hide parameters of advanced search"] = "Hide parameters of advanced search";
	$tr["Show parameters of advanced search"] = "Show parameters of advanced search";
	$tr["Save settings (cookies required)"] = "Guardar preferencias (activar cookies)";
	$tr["Show only online hosts"] = "Mostrar sólo servidores disponibles";
	$tr["Print sizes in human readable format"] = "Imprime los tamaños en formato legible";
	$tr["Search on"] = "Buscar en";
	$tr["hosts"] = "servidores";		# SMB and FTP hosts
	$tr["file size"] = "tamaño de archivo";
	$tr["Only files added since"] = "Sólo ficheros añadidos desde";
	$tr["Hits per page"] = "Accesoss por página";
	$tr["Your history"] = "Su histórico";
	$tr["Statistics"] = "Estadísticas";
	$tr["SMBs"] = "SMBs";
	$tr["FTPs"] = "FTPs";
	$tr["Directories"] = "Directorios";
	$tr["Files"] = "Archivos";
	$tr["Total size"] = "Tamaño total";
	$tr["Queries"] = "Consultas";
	$tr["and"] = "y";
	$tr["others"] = "otros";
	$tr["uses some code from"] = "usa código de";
	$tr["is distributed under the"] = "se distribuye bajo la";


	# SEARCH.PHP:
	$tr["Results for"] = "Resultados para";
	$tr["More"] = "Más";
	$tr["New search"] = "Nueva búsqueda";
	$tr["No hits"] = "Ninguna coincidencia.";
	$tr["Hit"] = "Coincidencia";
	$tr["Hits"] = "Coincidencias";


	# BROWSE.PHP
	$tr["Name"] = "Nombre";
	$tr["Size"] = "Tamaño";
	$tr["Date"] = "Fecha";
}
$tr["Last change"] = "Último cambio";


# FTP_LIST.PHP, FTP_HOST.PHP, FTP_DEL.PHP,
# SMB_LIST.PHP, SMB_HOST.PHP, SMB_DEL.PHP:

# actions
$tr["Add"] = "Añadir";
$tr["Update"] = "Actualizar";
$tr["Edit"] = "Editar";
$tr["Scan"] = "Scan";
$tr["Delete"] = "Borrar";
$tr["Purge"] = "Purgar";
$tr["Cancel"] = "Cancelar";

if (defined ("FFS_HOST_LIST"))
{
	# menu items
	$tr["Add FTP server"] = "Añadir servidor FTP";
	$tr["Edit FTP server"] = "Editar servidor FTP";
	$tr["Delete FTP server"] = "Borrar sevidor FTP";
	$tr["Purge FTP server"] = "Purgar servidor FTP";
	$tr["Add SMB server"] = "Añadir servidor SMB";
	$tr["Edit SMB server"] = "Editar servidor SMB";
	$tr["Delete SMB server"] = "Delete servidor SMB";
	$tr["Purge SMB server"] = "Purgar servidor SMB";

	# results and errors
	$tr["Host name must be specified"] = "El nombre de servidor debe especificarse";
	$tr["Workgroup must be specified"] = "El Grupo de Trabajo debe especificarse";
	$tr["is not valid IP address"] = "No es una dirección IP válida";
	$tr["is not valid DNS name or IP address"] = "No es un nombre válido de DNS o dirección IP";
	$tr["Login must be specified"] = "Login debe ser especificado";
	$tr["Port is not valid"] = " El puerto no es válido";
	$tr["is not valid file name with absolute path"] = "No es un nombre de fichero válido con una ruta absoluta";
	$tr["was added to list"] = "fué añadido a la lista";
	$tr["is already in the list"] = "ya está en la lista";
	$tr["was deleted"] = "fué eliminado";
	$tr["will be scanned during the next network scan"] = "will be scanned during the next network scan";
	$tr["will be deleted during next crawl"] = "se borrará en la próxima indexación";
	$tr["will be purged during next crawl"] = "será purgado durante la próxima indexación";
	# %s will be substituted by the hostname:
	$tr["__host_add_error__"] = "Ha ocurrido un error al añadir %s a la lista";
	$tr["__host_updated__"] = "Información para %s ha sido actualizada";

	# data fields
	$tr["Host"] = "Servidor";
	$tr["Host (DNS name or IP)"] = "Servidor (Nombre DNS o IP)";
	$tr["Login"] = "Usuario";
	$tr["Password"] = "Contraseña";
	$tr["Port"] = "Puerto";
	$tr["Starting directory"] = "Directorio de inicio";
	$tr["List of files"] = "Listado de ficheros";
	$tr["Use passive mode"] = "Usar modo pasivo";
	$tr["Use recursive ls (ls -lR) for getting file list"] = "Use recursive ls (ls -lR) for getting file list";
	$tr["(server must support it)"] = "(server must support it)";
	$tr["(if server supports it)"] = "(if server supports it)";
	$tr["Comment"] = "Comentario";
	$tr["Editable by"] = "Editable por";
	$tr["IP address"] = "Dirección IP";
	$tr["Workgroup"] = "Grupo de Trabajo";
	$tr["Shares"] = "Comparte";
	$tr["Name"] = "Nombre";
	$tr["File size"] = "Tamaño de fichero";
	$tr["Period"] = "Periodo";
	$tr["Counter"] = "Contador";
	$tr["Scan order"] = "Orden de escaneo";
	$tr["Expire count"] = "Tiempo de expiración";
	$tr["Flags"] = "Argumentos";
	$tr["Action"] = "Acción";
	$tr["delete"] = "borrar";
	$tr["purge"] = "purgar";
}


# COMMENTS.PHP, COMMENT_DEL.PHP:
if (defined ("FFS_COMMENTS"))
{
	$tr["You are welcome to write here any comments, ideas, ..."] = "Se le agradece que escriba aquí cualquier comentario, ideas, ...";
	$tr["Your name or nickname"] = "Su nombre o apodo";
	$tr["Your e-mail"] = "Su dirección de correo";
	$tr["optional"] = "opcional";
	$tr["Comment text"] = "Comentario";
	$tr["Submit"] = "Enviar";
	$tr["Delete comment"] = "Borrar comentario";
	$tr["Do you really want to delete this comment?"] = "De verdad que quiere borrar este comentario?";
}


# ADMIN.PHP:
if (defined ('FFS_ADMIN'))
{
	$tr["Change password"] = "Cambiar contraseña";
	$tr["Logout"] = "Salir";
	$tr["Password was changed"] = "Contraseña cambiada";
	$tr["Password cannot be empty"] = "Contraseña no puede estar vacía";
	$tr["Passwords do not match"] = "Las contraseñas no coinciden";
	$tr["New password"] = "Nueva contraseña";
	$tr["Reenter password"] = "Repetir contraseña";
	$tr["Login name"] = "Nombre de usuario";
	$tr["Password"] = "Contraseña";
	$tr["Login"] = "Usuario";
	$tr["There are no admins."] = "No existe ningún administradors.";
	$tr["Admin name"] = "Nombre del administrador";
	$tr["E-mail"] = "Contraseña";
	$tr["Rights"] = "Derechos";
	$tr["Edit FTP list"] = "Editar lista FTP";
	$tr["Edit SMB list"] = "Editar lista SMB";
	$tr["Purge FTP server from list"] = "Purgar servidor FTP de la lista";	# purge == completely delete
	$tr["Purge SMB server from list"] = "Purgar servidor SMB de la lista";
	$tr["Delete comments"] = "Borrar comentarios";
}


# MENU.PHP:
$tr["Search"] = "Búsquedas";
$tr["FTP server list"] = "Lista de servidores FTP";
$tr["SMB server list"] = "Lista de servidores SMB";
$tr["Comments"] = "Comentarios";
$tr["Admin"] = "Administración";


# HELP_EDIT.PHP, HELP_SEARCH.PHP
$tr["Help"] = "Ayuda";


# CONFIG.PHP, DB.PHP:
$tr["Error"] = "Error";
$tr["Can't read configuration file"] = "No se pudo leer fichero de configuración.";
$tr["DB_NAME must be defined in configuration file"] = "DB_NAME debe ser definido en la configuración";
$tr["DB_LOGIN must be defined in configuration file"] = "DB_LOGIN debe ser definido en la configuración";
$tr["DB_PASSWORD must be defined in configuration file"] = "DB_PASSWORD debe ser definido en la configuración";
$tr["Can't connect to database"] = "No fué posible conectarse a la base de datos";
$tr["Can't connect to master database"] = "No fué posible conectarse a la base de datos principal";


# Some things are inpossible to translate by the translation array
# (for example there are different suffixes for different count of servers
# in some languages), these things are translated by a function.

function print_n_hits_in_s_seconds ($n, $s)
{
	echo "$n ";
	if ($n == 1)
		echo "coincidencia";
	else
		echo "coincidencias";
	echo " en ", sprintf ("%0.2f", $s), " segundos";
}

function page_generated ($host, $time)
{
	echo "Esta página se generó por una consulta de ",
		$host, strftime (" el %d.%m.%Y a las %H:%M:%S", $time);
}

function confirm_delete ($host, $purge = 0)
{
	echo "De verdad que desea ", ($purge ? "purgar" : "borrar"), " $host?";
}

function permition_host_add ($type)		# $type = FTP or $type = SMB
{
	return "Debe autenticarse como administrador con permisos para añadir el host $type";
}

function permition_host_edit ($HID)
{
	return "No existe ningún servidor con HID = $HID en la lista o<br />deberá entrar como administrador para editar este servidor";
}

function permition_host_delete ($HID, $type, $purge = 0)	# $type = FTP or $type = SMB
{
	return "No existe ningún servidor con HID = $HID en la lista o<br /> deberá entrar como administrador para ". ($purge ? "purgar" : "editar o purgar") . " servidores $type";
}

function permition_comment_delete ($CID)
{
	return "No existe ningún comentario con CID = $CID o<br />deberá entrar como administrador que tenga derecho a borrar comentarios";
}

function slow_queries_disabled ()
{
	global $c, $lang, $aid, $fast_query_minsize, $fast_query_maxsize;

	echo '<h1>Las búsquedas lentas han sido deshabilitadas</h1>';
	echo "Busque con comodines y usando caracteres normales (no '*' o '?') desde el comienzo o el final de la mascara para el nombre de fichero (p.e. *.iso)";
	if ($fast_query_minsize >= 0)
		echo '<br />o especifique el tamaño mínimo de fichero de"', $c["FAST_QUERY_MINSIZE"], '"';
	if ($fast_query_maxsize >= 0)
		echo '<br />o especifique el tamaño máximo de fichero de "', $c["FAST_QUERY_MAXSIZE"], '"';
	echo '.<br /><br /><a href="select.php?lang=', $lang, $aid, '">Volver atrás a parámetros de búsqueda</a>';
}

?>
