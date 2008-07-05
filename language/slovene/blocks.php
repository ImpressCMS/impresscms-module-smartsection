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

define("_MB_SSECTION_ALLCAT", "Vse kategorije");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Avtomatièno prika¾i zadnji èlanek(èlanke)?");
define("_MB_SSECTION_CATEGORY", "Kategorija");
define("_MB_SSECTION_CHARS", "Dol¾ina naslova");
define("_MB_SSECTION_COMMENTS", "Komentar(ji)");
define("_MB_SSECTION_DATE", "Datum objave");
define("_MB_SSECTION_DISP", "Prika¾i");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Prika¾i ime kategorije?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Prika¾i ¹t. komentarjev?");
define("_MB_SSECTION_DISPLAY_TYPE", "Naèin prikaza :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Vsak èlanek je blok");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Vsak èlanek je toèka");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Prika¾i avtorja in datum?");
define("_MB_SSECTION_FULLITEM", "Preberi celoten èlanek");
define("_MB_SSECTION_HITS", "©tevilo klikov");
define("_MB_SSECTION_ITEMS", "èlankov");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "Èe da, koliko èlankov prika¾em?");
define("_MB_SSECTION_LENGTH", " znakov");
define("_MB_SSECTION_ORDER", "Vrsti red prikaza");
define("_MB_SSECTION_POSTEDBY", "Avtor");
define("_MB_SSECTION_READMORE", "Veè...");
define("_MB_SSECTION_READS", "reads");
define("_MB_SSECTION_SELECT_ITEMS", "Èe ne, izberi èlanek, ki bo prikazan :");
define("_MB_SSECTION_SELECTCAT", "Prika¾i èlanke od :");
define("_MB_SSECTION_VISITITEM", "bi¹èi");
define("_MB_SSECTION_WEIGHT", "Glede na te¾o");
define("_MB_SSECTION_WHO_WHEN", "Objavil %s, dne %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "Stopnje");
define("_MB_SSECTION_CURRENTCATEGORY", "Trenutna kategorija");
define("_MB_SSECTION_ASC", "Nara¹èajuèe");
define("_MB_SSECTION_DESC", "Padajoèe");
define("_MB_SSECTION_SHOWITEMS", "Prika¾i èlanke");
//--/bd

define("_MB_SSECTION_FILES", "datoteke");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Direktna povezava za prenos datoteke namesto povezave do èlanka?");
define("_MB_SSECTION_FROM", "Select articles <br />from ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Articles published between %s and %s");
?>