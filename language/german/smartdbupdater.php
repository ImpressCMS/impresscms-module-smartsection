<?php

/**
* $Id: smartdbupdater.php,v 1.1 2006/09/12 19:00:43 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("ImpressCMS-Rootpfad nicht definiert");
}

define("_SDU_IMPORT", "Import");
define("_SDU_CURRENTVER", "aktuelle Version: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Datenbankversion %s");
define("_SDU_MSG_ADD_DATA", "Daten hinzugefügt in Tabelle %s");
define("_SDU_MSG_ADD_DATA_ERR", "Fehler beim Hinzufügen von Daten in Tabelle %s");
define("_SDU_MSG_CHGFIELD", "Ändern des Felds %s in Tabelle %s");
define("_SDU_MSG_CHGFIELD_ERR", "Fehler beim Ändern des Felds %s in der Tabelle %s");
define("_SDU_MSG_CREATE_TABLE", "Tabelle %s wurde erstellt");
define("_SDU_MSG_CREATE_TABLE_ERR", "Fehler beim Erstellen der Tabelle %s");
define("_SDU_MSG_NEWFIELD", "Erfolgreich das Feld %s hinzugefügt");
define("_SDU_MSG_NEWFIELD_ERR", "Fehler beim Hinzufügen des Felds %s");
define("_SDU_NEEDUPDATE", "Ihre Datenbank ist nicht mehr aktuell. Bitte machen Sie ein Upgrade Ihrer Datenbanktabellen!<br><b>Bitte beachten : SmartFactory empfielt eindringlichst, alle SmartSection-Tabellen vorher zu sichern, bevor das Upgradescript gestartet wird.</b><br>");
define("_SDU_NOUPDATE", "Ihre Datenbank ist auf dem neusten Stand. Keine Updates nötig.");
define("_SDU_UPDATE_DB", "Updating Datenbank");
define("_SDU_UPDATE_ERR", "Fehler beim Updaten auf Version %s");
define("_SDU_UPDATE_NOW", "Updaten Sie jetzt!");
define("_SDU_UPDATE_OK", "erfolgreich auf Version %s upgedated");
define("_SDU_UPDATE_TO", "Updaten auf Version %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Updaten der Datenbank...");
?>