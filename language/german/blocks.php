<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
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

// Blocks

define("_MB_SSECTION_AUTO_LAST_ITEMS", "Automatisch die letzten Dateien anzeigen?");
define("_MB_SSECTION_CHARS", "Titell&auml;nge");
define("_MB_SSECTION_COMMENTS", "Kommentare");
define("_MB_SSECTION_DATE", "Ver&ouml;ffentlichungsdatum");
define("_MB_SSECTION_DISP", "Anzeigen");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Summe der Kommentar anzeigen?");
define("_MB_SSECTION_DISPLAY_TYPE", "Anzeigenart :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Jede Datei ist ein Block");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Jede Datei ist ein Merkpunkt");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Zeige die Ver&ouml;ntlicher und das Datum an?");
define("_MB_SSECTION_HITS", "Anzahlt der Treffer");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "Falls ja, weiviele Dateien anzeigen?");
define("_MB_SSECTION_LENGTH", " Ziffern");
define("_MB_SSECTION_ORDER", "Anzeigenreihenfolge");
define("_MB_SSECTION_POSTEDBY", "Ver&ouml;ffentlicht bei");
define("_MB_SSECTION_READMORE", "Mehr lesen...");
define("_MB_SSECTION_READS", "gelesen");
define("_MB_SSECTION_VISITITEM", "Besuchen Sie den");
define("_MB_SSECTION_WEIGHT", "Der Gewichtung nach Auflisten");
define("_MB_SSECTION_WHO_WHEN", "Ver&ouml;ffentlich von %s am %s");

?>