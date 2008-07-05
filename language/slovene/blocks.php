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
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Avtomati�no prika�i zadnji �lanek(�lanke)?");
define("_MB_SSECTION_CATEGORY", "Kategorija");
define("_MB_SSECTION_CHARS", "Dol�ina naslova");
define("_MB_SSECTION_COMMENTS", "Komentar(ji)");
define("_MB_SSECTION_DATE", "Datum objave");
define("_MB_SSECTION_DISP", "Prika�i");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Prika�i ime kategorije?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Prika�i �t. komentarjev?");
define("_MB_SSECTION_DISPLAY_TYPE", "Na�in prikaza :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Vsak �lanek je blok");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Vsak �lanek je to�ka");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Prika�i avtorja in datum?");
define("_MB_SSECTION_FULLITEM", "Preberi celoten �lanek");
define("_MB_SSECTION_HITS", "�tevilo klikov");
define("_MB_SSECTION_ITEMS", "�lankov");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "�e da, koliko �lankov prika�em?");
define("_MB_SSECTION_LENGTH", " znakov");
define("_MB_SSECTION_ORDER", "Vrsti red prikaza");
define("_MB_SSECTION_POSTEDBY", "Avtor");
define("_MB_SSECTION_READMORE", "Ve�...");
define("_MB_SSECTION_READS", "reads");
define("_MB_SSECTION_SELECT_ITEMS", "�e ne, izberi �lanek, ki bo prikazan :");
define("_MB_SSECTION_SELECTCAT", "Prika�i �lanke od :");
define("_MB_SSECTION_VISITITEM", "bi��i");
define("_MB_SSECTION_WEIGHT", "Glede na te�o");
define("_MB_SSECTION_WHO_WHEN", "Objavil %s, dne %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "Stopnje");
define("_MB_SSECTION_CURRENTCATEGORY", "Trenutna kategorija");
define("_MB_SSECTION_ASC", "Nara��aju�e");
define("_MB_SSECTION_DESC", "Padajo�e");
define("_MB_SSECTION_SHOWITEMS", "Prika�i �lanke");
//--/bd

define("_MB_SSECTION_FILES", "datoteke");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Direktna povezava za prenos datoteke namesto povezave do �lanka?");
define("_MB_SSECTION_FROM", "Select articles <br />from ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Articles published between %s and %s");
?>