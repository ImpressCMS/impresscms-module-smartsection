<?php

/**
* $Id: blocks.php,v 1.11 2005/10/31 13:18:45 malanciault Exp $
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

define("_MB_SSECTION_ALLCAT", "Alla kategorier");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Visa senaste objekt automatiskt?");
define("_MB_SSECTION_CATEGORY", "Kategori");
define("_MB_SSECTION_CHARS", "L�ngd p� titeln");
define("_MB_SSECTION_COMMENTS", "Kommentar(er)");
define("_MB_SSECTION_DATE", "Publiceringsdatum");
define("_MB_SSECTION_DISP", "Visa");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Visa namnet p� kategorin?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Visa antalet kommentarer?");
define("_MB_SSECTION_DISPLAY_TYPE", "Visningstyp:");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Varje objekt �r ett block");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Varje objekt �r en punkt");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Visa f�rfattaren och datum?");
define("_MB_SSECTION_FULLITEM", "L�s hela artikeln");
define("_MB_SSECTION_HITS", "Antal tr�ffar");
define("_MB_SSECTION_ITEMS", "Artiklar");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "Om ja, hur m�nga objekt ska visas?");
define("_MB_SSECTION_LENGTH", "tecken");
define("_MB_SSECTION_ORDER", "Visningsordning");
define("_MB_SSECTION_POSTEDBY", "Publicerad av");
define("_MB_SSECTION_READMORE", "L�s mer...");
define("_MB_SSECTION_READS", "l�sningar");
define("_MB_SSECTION_SELECT_ITEMS", "Om nej, v�lj artikeln som ska visas:");
//define("_MB_SSECTION_SELECTCAT", "Display the articles of :");
define("_MB_SSECTION_VISITITEM", "Bes�k");
define("_MB_SSECTION_WEIGHT", "Lista viktning");
define("_MB_SSECTION_WHO_WHEN", "Publicerad av %s p� %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "niv�er");
define("_MB_SSECTION_CURRENTCATEGORY", "Nuvarande kategori");
define("_MB_SSECTION_ASC", "STIGANDE");
define("_MB_SSECTION_DESC", "FALLANDE");
define("_MB_SSECTION_SHOWITEMS", "Visa objekt");
//--/bd

define("_MB_SSECTION_FILES", "filer");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Direktl�nk f�r att ladda ner en fil ist�llet f�r en l�nk till artikeln?");
define("_MB_SSECTION_FROM", "Select articles <br />from ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Articles published between %s and %s");
?>