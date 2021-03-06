<?php

/**
* $Id: blocks.php 3464 2008-07-05 15:48:00Z gibaphp $
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

define("_MB_SSECTION_ALLCAT", "B�t�n Kategoriler");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Son eklenenleri otomatik g�ster)?");
define("_MB_SSECTION_CATEGORY", "Kategori");
define("_MB_SSECTION_CHARS", "Ba�l�k Uzunlu�u");
define("_MB_SSECTION_COMMENTS", "Komutlar");
define("_MB_SSECTION_DATE", "Yay�nlama Tarihi");
define("_MB_SSECTION_DISP", "Display");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Kategori �smini G�ster?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Display comment count?");
define("_MB_SSECTION_DISPLAY_TYPE", "G�r�n�m Tipi :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Herbiri bir kategoridir");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Each item is a bullet");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Afi� ve Tarihi g�ster?");
define("_MB_SSECTION_FULLITEM", "Devam�...");
define("_MB_SSECTION_HITS", "Okunma Say�s�");
define("_MB_SSECTION_ITEMS", "Makaleler");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "'Evet' se�ilirse, how many items to display?");
define("_MB_SSECTION_LENGTH", " karakterler");
define("_MB_SSECTION_ORDER", "Display order");
define("_MB_SSECTION_POSTEDBY", "Yay�nlayan");
define("_MB_SSECTION_READMORE", "Devam�...");
define("_MB_SSECTION_READS", "okumalar");
define("_MB_SSECTION_SELECT_ITEMS", "'Hay�r' se�ilirse, select the articles to be displayed :");
define("_MB_SSECTION_SELECTCAT", "Display the articles of :");
define("_MB_SSECTION_VISITITEM", "Ziyaret et");
define("_MB_SSECTION_WEIGHT", "Liste geni�li�i");
define("_MB_SSECTION_WHO_WHEN", "Yay�nlayan %s %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "seviyeler");
define("_MB_SSECTION_CURRENTCATEGORY", "Mevcut Kategori");
define("_MB_SSECTION_ASC", "ASC");
define("_MB_SSECTION_DESC", "DESC");
define("_MB_SSECTION_SHOWITEMS", "��eleri G�ster");
//--/bd

define("_MB_SSECTION_FILES", "files");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Direct link to dowload the file instead of a link to the article?");
define("_MB_SSECTION_FROM", "Select articles <br />from ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Articles published between %s and %s");
?>