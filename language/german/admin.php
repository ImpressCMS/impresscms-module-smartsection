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

include_once(XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/admin.php");

define("_AM_SSECTION_ABOUT", "U&uml;ber");
define("_AM_SSECTION_ACTION", "Aktion");
define("_AM_SSECTION_ALL", "Alle");
define("_AM_SSECTION_APPROVE", "Freigeben");
define("_AM_SSECTION_APPROVED", "Freigegeben");
define("_AM_SSECTION_APPROVED_MODERATE", "Moderiere diese Einsendung");
define("_AM_SSECTION_APPROVESUB", "Einsendung Freigeben");
define("_AM_SSECTION_APPROVING", "Am freigeben");
define("_AM_SSECTION_ASC", "Aufsteigend");
define("_AM_SSECTION_AVAILABLE", "<span style='font-weight: bold; color: green;'>Verf&uuml;gbar</span>");
define("_AM_SSECTION_BACK2IDX", "Abgebrochen. Wir gehen zur&uuml;ck zum Index");
define("_AM_SSECTION_BLOCKS", "Bl&ouml;cke Management");
define("_AM_SSECTION_BLOCKSTXT", "Dieses Module verf&uuml;gt &uuml;ber die Folgenden Bl*ouml;cke, welche Sie hier im System Modul konfigurieren k&ouml;nnen.");
define("_AM_SSECTION_BLOCKSANDGROUPS", "Bl&ouml;cke und Gruppen");
define("_AM_SSECTION_BLOCKSGROUPSADMIN", "Bl&ouml;cke und Gruppen Management");
define("_AM_SSECTION_BY", "von");
define("_AM_SSECTION_CANCEL", "Abbrechen");
define("_AM_SSECTION_CLEAR", "Zur&uml;cksetzen");
define("_AM_SSECTION_CREATE", "Erstellen");
define("_AM_SSECTION_CREATED", "Erstellt");
define("_AM_SSECTION_CREATETHEDIR", "Mappe Erstellen");
define("_AM_SSECTION_CREATINGNEW", "Erstelle neue");
define("_AM_SSECTION_DATESUB", "Ver&ouml;ffentlichungsdatum");
define("_AM_SSECTION_DATESUB_DSC", "Das Datum der Ver&ouml;ffentlichung ausw&auml;hlen");
define("_AM_SSECTION_DELETE", "L&ouml;schen");
define("_AM_SSECTION_DESC", "Absteigend");
define("_AM_SSECTION_DESCRIPTION", "Beschreibung");
define("_AM_SSECTION_DIRCREATED", "Mappe erfolgreich erstellt&nbsp;");
define("_AM_SSECTION_DIRNOTCREATED", "Die Mappe konnte nicht erstellt werden&nbsp;");
define("_AM_SSECTION_DISPLAY_SUMMARY", "Display summary on the item page?");
define("_AM_SSECTION_DOHTML", "&nbsp;HTML Tags zulassen");
define("_AM_SSECTION_DOIMAGE", "&nbsp;Bilder zulassen");
define("_AM_SSECTION_DOLINEBREAK", "&nbsp;Zeilenumbruch zulassen");
define("_AM_SSECTION_DOSMILEY", "&nbsp;Smilies zulassen");
define("_AM_SSECTION_DOXCODE", "&nbsp;XOOPS Codes zulassen");
define("_AM_SSECTION_EDITING", "Ver&auml;nderungen");
define("_AM_SSECTION_ERROR", "&nbspEin Fehler ist aufgretreten.");
define("_AM_SSECTION_FILE", "Dateien");
define("_AM_SSECTION_FILE_ADD", "Datei hinzuf&uuml;gen");
define("_AM_SSECTION_FILE_ADDING", "F&uum;ge neue Dati hinzu");
define("_AM_SSECTION_FILE_DESCRIPTION", "Beschreibung");
define("_AM_SSECTION_FILE_DESCRIPTION_DSC", "Beschreibung der zu hochladenden Datei.");
define("_AM_SSECTION_FILE_EDITING", "Datei ver&auml;ndern");
define("_AM_SSECTION_FILE_EDITING_DSC", "Sie k&ouml;nnen diese Datei ver&auml;ndern. Ver&auml;nderungen werden dem Benutzer umgehend zug&auml;gnglich sein.");
define("_AM_SSECTION_FILE_EDITING_ERROR", "Ein Fehler trat w&auml;hrend der Ver&auml;nderung auf.");
define("_AM_SSECTION_FILE_EDITING_SUCCESS", "Die Datei wurde erfolgreich ver&auml;ndert.");
define("_AM_SSECTION_FILE_INFORMATIONS", "Dateieninformation");
define("_AM_SSECTION_FILE_NAME", "Name");
define("_AM_SSECTION_FILE_NAME_DSC", "Name zur einwandfreien Bestimmung der Datei.");
define("_AM_SSECTION_FILE_TO_UPLOAD", "Folgende Datei Hochladen :");
define("_AM_SSECTION_FILENAME", "Dateiname");
define("_AM_SSECTION_FILEUPLOAD_ERROR", "Ein Fehler tratt w&auml;hrend des Hochladens der Datei auf.");
define("_AM_SSECTION_FILEUPLOAD_SUCCESS", "Die Datei wurde erfolgreich hochgeladen.");
define("_AM_SSECTION_IMAGE_UPLOAD", "Bild hochladen");
define("_AM_SSECTION_GOMOD", "Zum Modul");
define("_AM_SSECTION_GROUPS", "Gruppen Management");
define("_AM_SSECTION_GROUPSINFO", "Konfigurieren Sie die jeweiligen Block und Modulzugangsberechtigungen f&uuml;r die jeweiligen Gruppen&nbsp;");
define("_AM_SSECTION_HELP", "Hilfe");
define("_AM_SSECTION_HITS", "Treffer");
define("_AM_SSECTION_ID", "Id");
define("_AM_SSECTION_INDEX", "Index");
define("_AM_SSECTION_INVENTORY", "Modul Zusammenfassung");
define("_AM_SSECTION_ITEMID", "Id");
define("_AM_SSECTION_MODADMIN", "Modul Admin :");
define("_AM_SSECTION_MODIFY", "Ver&auml;ndern");
define("_AM_SSECTION_NO", "Nein");
define("_AM_SSECTION_NOFILESELECTED", "Keine Datei ausgew&auml;lt.");
define("_AM_SSECTION_NOFOUND", "Keine Benutzer stimmen mit der Eingabe &uuml;berein.");
define("_AM_SSECTION_NONE", "Keine");
define("_AM_SSECTION_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Steht nicht zur Verf&uuml;gung</span>");
define("_AM_SSECTION_NOTUPDATED", "Es trat ein Fehler w&auml;hrend der Aktualisierung der Datenbank auf!");
define("_AM_SSECTION_OFFLINE", "Offline");
define("_AM_SSECTION_OPTIONS", "Optionen");
define("_AM_SSECTION_OPTS", "Einstellungen");
define("_AM_SSECTION_PATH", "Pfad");
define("_AM_SSECTION_PATH_ITEM", "Hochgeladene Dateien");
define("_AM_SSECTION_PATH_FILES", "Angef&uuml;gte Dateien");
define("_AM_SSECTION_PATH_IMAGES", "Gener&auml;le Bilder");
define("_AM_SSECTION_PATHCONFIGURATION", "Modul Pfad Konfiguration");
define("_AM_SSECTION_PERMISSIONS", "Zugangsberechtigungen");
define("_AM_SSECTION_PERMISSIONS_ITEM", "Berechtigungen");
define("_AM_SSECTION_PERMISSIONS_ITEM_DSC", "Gruppen mit Zugang zu dieser Datei.");
define("_AM_SSECTION_PERMISSIONSADMIN", "Zugangsberechtigungsmanagement");
define("_AM_SSECTION_PUBLISH", "Ver&ouml;ffentlichen");
define("_AM_SSECTION_PUBLISHED", "Ver&ouml;ffentlicht");
define("_AM_SSECTION_REJECTED", "Abgelehnt");
define("_AM_SSECTION_SELECT_SORT", "Sortierreihenfolge");
define("_AM_SSECTION_SELECT_STATUS", "Status");
define('_AM_SSECTION_SETMPERM','Zugangsberechtigungen Einstellen');
define("_AM_SSECTION_SHOWING", "Werden Angezeigt");
define("_AM_SSECTION_SUBMITTED", "Eingereicht");
define("_AM_SSECTION_TITLE", "Titel");
define("_AM_SSECTION_UPLOAD", "Hochladen");
define("_AM_SSECTION_UPLOAD_FILE", "Datei Hochladen");
define("_AM_SSECTION_UPLOAD_FILE_NEW", "Neue Datei Hochladen");
define("_AM_SSECTION_UPLOADED_DATE", "Hochgeladen");
define("_AM_SSECTION_UID", "Name der Einreichenden");
define("_AM_SSECTION_UID_DSC", "W&auml;hlen Sie den Namen des Einreichenden aus");
define("_AM_SSECTION_WEIGHT", "Gewichtung");
define("_AM_SSECTION_YES", "Ja");

// Search users
define("_AM_SSECTION_ACTIVEUSERS", "Aktive Benutzerinnen: %s");
define("_AM_SSECTION_FINDUSERS", "Benutzerin finden");
define("_AM_SSECTION_INACTIVEUSERS", "Inaktive Benutzerinnen: %s");
define("_AM_SSECTION_LIMIT", "Benutzer per Seite");
define("_AM_SSECTION_REALNAME", "Reeler Name");
define("_AM_SSECTION_RESULTS", "Suchergebnisse");
define("_AM_SSECTION_SUBMIT", "Einreichen");
define("_AM_SSECTION_UNAME", "Name der Benutzerin");
// New table

define("_AM_SSECTION_STATUS", "Status");

?>