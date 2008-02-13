<?php // Traducción de www.riosoft.es | www.rioxoops.es

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/*global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
if (isset($xoopsModuleConfig) && isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartsection') {
	$itemType = $xoopsModuleConfig['itemtype'];
} else {
	$hModule = &xoops_gethandler('module');
	$hModConfig = &xoops_gethandler('config');
	if ($smartsection_Module = &$hModule->getByDirname('smartsection')) {
		$module_id = $smartsection_Module->getVar('mid');
		$smartsection_Config = &$hModConfig->getConfigsByCat(0, $smartsection_Module->getVar('mid'));
		$itemType = $smartsection_Config['itemtype'];
	} else {
		$itemType = 'article';
	}	
}

include_once(XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/blocks.php");
*/
// Blocks

define("_MB_SSECTION_ALLCAT", "Todas las categorías");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "¿Mostrar automáticamente las últimas publicaciones?");
define("_MB_SSECTION_CATEGORY", "Categoría");
define("_MB_SSECTION_CHARS", "Longitud el título");
define("_MB_SSECTION_COMMENTS", "Comentario(s)");
define("_MB_SSECTION_DATE", "Fecha de Publicación");
define("_MB_SSECTION_DISP", "Visualizar");
define("_MB_SSECTION_DISPLAY_CATEGORY", "¿Mostrar el nombre de la categoría?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "¿Mostrar el número de comentarios?");
define("_MB_SSECTION_DISPLAY_TYPE", "Mostrar tipo :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Cada elemento es un bloque");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Cada elemento es un punto");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "¿Mostrar autor y fecha?");
define("_MB_SSECTION_FULLITEM", "Leer el artículo completo");
define("_MB_SSECTION_HITS", "Lecturas");
define("_MB_SSECTION_ITEMS", "Artículos");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "si dijo sí, ¿cuántos elementos han de mostrarse?");
define("_MB_SSECTION_LENGTH", " caracteres");
define("_MB_SSECTION_ORDER", "Orden");
define("_MB_SSECTION_POSTEDBY", "Publicado por");
define("_MB_SSECTION_READMORE", "Leer más...");
define("_MB_SSECTION_READS", "lecturas");
define("_MB_SSECTION_SELECT_ITEMS", "si dijo no, determine qué artículos han de ser mostrados :");
define("_MB_SSECTION_SELECTCAT", "Mostrar artículos de :");
define("_MB_SSECTION_VISITITEM", "Visitar");
define("_MB_SSECTION_WEIGHT", "Lista por 'peso'");
define("_MB_SSECTION_WHO_WHEN", "Publicado por %s el %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "niveles");
define("_MB_SSECTION_CURRENTCATEGORY", "Categoría actual");
define("_MB_SSECTION_ASC", "ASC");
define("_MB_SSECTION_DESC", "DESC");
define("_MB_SSECTION_SHOWITEMS", "Mostrar Elementos");
//--/bd

define("_MB_SSECTION_FILES", "archivos");
define("_MB_SSECTION_DIRECTDOWNLOAD", "¿Enlace directo al archivo en lugar de al artículo?");

?>