<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/*global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
If (isset($xoopsModuleConfig) && isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartsection') {
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

define("_MB_SSECTION_ALLCAT", "Alle Kategorien");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Automatisch Anzeige des letzten Beitrags?");
define("_MB_SSECTION_CATEGORY", "Kategorie");
define("_MB_SSECTION_CHARS", "Länge des Titels");
define("_MB_SSECTION_COMMENTS", "Kommentar(e)");
define("_MB_SSECTION_DATE", "Veröffentlicht am");
define("_MB_SSECTION_DISP", "Anzeige");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Kategoriename anzeigen?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Anzahl der Kommentare anzeigen?");
define("_MB_SSECTION_DISPLAY_TYPE", "Anzeige Typ:");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Jeder Beitrag als Block");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Jeder Beitrag ein Punkt (Icon)");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Autor und Datum anzeigen?");
define("_MB_SSECTION_FULLITEM", "Beitrag komplett lesen");
define("_MB_SSECTION_HITS", "Anzahl der Aufrufe");
define("_MB_SSECTION_ITEMS", "Beitrag");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "Wenn ja, wie viele Beiträge sollen angezeigt werden?");
define("_MB_SSECTION_LENGTH", "Eigenschaften");
define("_MB_SSECTION_ORDER", "Auftrag anzeigen");
define("_MB_SSECTION_POSTEDBY", "Veröffentlicht von");
define("_MB_SSECTION_READMORE", "Lesen Sie mehr...");
define("_MB_SSECTION_READS", "Lesen");
define("_MB_SSECTION_SELECT_ITEMS", "Wenn nein, wähle den Beitrag zum Anzeigen:");
define("_MB_SSECTION_SELECTCAT", "Zeige Beitrag von:");
define("_MB_SSECTION_VISITITEM", "Besuchen");
define("_MB_SSECTION_WEIGHT", "Sortierung nach Gewichtung");
define("_MB_SSECTION_WHO_WHEN", "Veröffentlicht von %s am %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "Levels");
define("_MB_SSECTION_CURRENTCATEGORY", "Aktuelle Kategorie");
define("_MB_SSECTION_ASC", "Nach Datum");
define("_MB_SSECTION_DESC", "Nach Titel");
define("_MB_SSECTION_SHOWITEMS", "Zeige Beiträge");
//--/bd

define("_MB_SSECTION_FILES", "Dateien");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Direkter Link zum herunterladen der Datei an Stelle eines Links zu den Beiträgen?");
define("_MB_SSECTION_FROM", "Gewählte Beiträge von <br />von ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Datumsformat muss mm/dd/yyy sein");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Beiträge veröffentlicht zwischen %s und %s");
?>