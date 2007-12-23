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

include_once(XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/main.php");

define("_MD_SSECTION_ACTION", "Aktion");
define("_MD_SSECTION_ADD_FILE", "Datei Hinzuf&uuml;gen");
define("_MD_SSECTION_ADMIN_PAGE", ":: Administrations Abteilung ::");
define("_MD_SSECTION_ALL", "Alle");
define("_MD_SSECTION_ALLOWCOMMENTS", "Kommentare erlauben?");
define("_MD_SSECTION_APPROVE", "Bewilligen");
define("_MD_SSECTION_CANCEL", "Abbrechen");
define("_MD_SSECTION_CLEAR", "Zur&uuml;cksetzen");
define("_MD_SSECTION_COMMENTS", "Kommentare");
define("_MD_SSECTION_DATE", "Datum");
define("_MD_SSECTION_DATESUB", "Ver&ouml;ffentlicht am");
define("_MD_SSECTION_DESCRIPTION", "Beschreibung");
define("_MD_SSECTION_DOHTML", "HTML Tags Zulassen&nbsp;");
define("_MD_SSECTION_DOIMAGE", "Bilder Zulassen");
define("_MD_SSECTION_DOLINEBREAK", "Zeilenumbruch Zulassen");
define("_MD_SSECTION_DOSMILEY", "Smilies Zulassen");
define("_MD_SSECTION_DOWNLOAD_FILE", "Diese Datei Herungterladen");
define("_MD_SSECTION_DOXCODE", "XOOPS Codes Zulassen");
define("_MD_SSECTION_FILE", "Dateien");
define("_MD_SSECTION_FILE_ADD", "Datei Hinzuf&uuml;gen");
define("_MD_SSECTION_FILE_ADDING", "Datei hinzugef&uuml;gt");
define("_MD_SSECTION_FILE_DESCRIPTION", "Beschreibung");
define("_MD_SSECTION_FILE_DESCRIPTION_DSC", "Beschreibung der hochgeladenen Datei.");
define("_MD_SSECTION_FILE_EDITING", "Ver&auml;ndern der Datei");
define("_MD_SSECTION_FILE_EDITING_DSC", "Sie k&ouml;nnen diese Datei ver&auml;ndern. Ver&auml;nderungen werden dem Benutzer umgehend zug&auml;nglich.");
define("_MD_SSECTION_FILE_EDITING_ERROR", "Ein Fehler trat w&auml;hrend der Ver&auml;nderung auf.");
define("_MD_SSECTION_FILE_EDITING_SUCCESS", "Die Datei wurde erfolgreich ver&auml;ndert.");
define("_MD_SSECTION_FILE_INFORMATIONS", "Dateiinformation");
define("_MD_SSECTION_FILE_NAME", "Name");
define("_MD_SSECTION_FILE_NAME_DSC", "Name zur einwandfreien Bestimmung der Datei.");
define("_MD_SSECTION_FILE_TO_UPLOAD", "Folgende Datei Hochladen :");
define("_MD_SSECTION_FILE_TYPE", "Dateienart");
define("_MD_SSECTION_FILENAME", "Dateienname");
define("_MD_SSECTION_FILEUPLOAD_ERROR", "Ein Fehler tratt w&auml;hrend des Hochladens der Datei auf.");
define("_MD_SSECTION_FILEUPLOAD_SUCCESS", "Die Datei wurde erfolgreich hochgeladen.");
define("_MD_SSECTION_GOODDAY", "Sch&ouml;n Guten Tag, ");
define("_MD_SSECTION_HITS", "Treffer");
define("_MD_SSECTION_HOME", "Home");
define("_MD_SSECTION_MAINHEAD", "Wilkommen ");
define("_MD_SSECTION_NO", "Nein");
define("_MD_SSECTION_NO_CAT_PERMISSIONS", "Entschuldigen Sie bitte, aber es erscheint uns, dass Sie &uuml;ber unzureichende Zugangsberechtigung verf&uuml;gen. Bitte wenden Sie Sich an den Administrator dieser Seiten.");
define("_MD_SSECTION_NONE", "Keine");
define("_MD_SSECTION_NOTIFY", "Bei Ver&ouml;ffentlichung benachrichtigen?");
define("_MD_SSECTION_OF", "Aus");
define("_MD_SSECTION_ON", "An");
define("_MD_SSECTION_OPTIONS", "Optionen");
define("_MD_SSECTION_PAGE", "Seiten");
define("_MD_SSECTION_POSTEDBY", "Ver&ouml;ffentlicht von %s am %s");
define("_MD_SSECTION_READMORE", "Mehr lesen...");
define("_MD_SSECTION_READS", "gelesen");
define("_MD_SSECTION_THE", "der");
define("_MD_SSECTION_TIMES", "mal");
define("_MD_SSECTION_TITLE", "Titel");
define("_MD_SSECTION_UNKNOWNERROR", "FEHLER.  Wir bringen Sie wieder zur&uuml;ck, von wo Sie gekomment sind!");
define("_MD_SSECTION_PREVIEW", "Vorschau");
define("_MD_SSECTION_UPLOAD", "Hochladen");
define("_MD_SSECTION_UPLOAD_FILE", "Datei hochladen");
define("_MD_SSECTION_WEIGHT", "Gewichtung");
define("_MD_SSECTION_WHO_WHEN", "Ver&ouml;ffent von %s am %s");
define("_MD_SSECTION_YES", "Ja");

?>