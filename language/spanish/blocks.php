<?php

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

define("_MB_SSECTION_ALLCAT", "Todas las categor&iacute;as");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "&iquest;Desplegar autom&aacute;ticamente el &uacute;ltimo elemento(s)?");
define("_MB_SSECTION_CATEGORY", "Categor&iacute;a");
define("_MB_SSECTION_CHARS", "Longitud del titulo");
define("_MB_SSECTION_COMMENTS", "Comentario(s)");
define("_MB_SSECTION_DATE", "Fecha de publicaci&oacute;n");
define("_MB_SSECTION_DISP", "Desplegar");
define("_MB_SSECTION_DISPLAY_CATEGORY", "&iquest;Desplegar el nombre de la categor&iacute;a?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "&iquest;Desplegar la cuenta de comentarios?");
define("_MB_SSECTION_DISPLAY_TYPE", "Tipo de despliege:");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Cada elemento es un bloque");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Cada elemento es un punto");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "&iquest;Desplegar quien env&iacute;a y la fecha?");
define("_MB_SSECTION_FULLITEM", "Leer el art&iacute;culo completo");
define("_MB_SSECTION_HITS", "N&uacute;mero de hits");
define("_MB_SSECTION_ITEMS", "Art&iacute;culos");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "S&iacute; si, &iquest;cu&aacute;ntos art&iacute;culos a desplegar?");
define("_MB_SSECTION_LENGTH", " caracteres");
define("_MB_SSECTION_ORDER", "Orden de desplegado");
define("_MB_SSECTION_POSTEDBY", "Publicado por");
define("_MB_SSECTION_READMORE", "Leer m&aacute;s...");
define("_MB_SSECTION_READS", "lecturas");
define("_MB_SSECTION_SELECT_ITEMS", "S&iacute; no, seleccione los art&iacute;culos a desplegar:");
define("_MB_SSECTION_SELECTCAT", "Desplegar los art&iacute;culos de:");
define("_MB_SSECTION_VISITITEM", "Visitar el");
define("_MB_SSECTION_WEIGHT", "Lista por peso");
define("_MB_SSECTION_WHO_WHEN", "Publicado por %s el %s");
?>