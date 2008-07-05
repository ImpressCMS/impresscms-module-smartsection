<?php

/**
* $Id: smartdbupdater.php,v 1.1 2006/09/12 19:00:43 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
        die("S�kv�ngen till root �r inte definierad");
}

define("_SDU_IMPORT", "Importera");
define("_SDU_CURRENTVER", "Nuvarande version: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Databasversion %s");
define("_SDU_MSG_ADD_DATA", "Lagt till data i tabell %s");
define("_SDU_MSG_ADD_DATA_ERR", "Ett fel uppstod n�r data skulle l�ggas till i tabell %s");
define("_SDU_MSG_CHGFIELD", "Byter f�lt %s i tabell %s");
define("_SDU_MSG_CHGFIELD_ERR", "Ett fel uppstod n�r f�lt skulle bytas %s i tabell %s");
define("_SDU_MSG_CREATE_TABLE", "Tabell %s skapad");
define("_SDU_MSG_CREATE_TABLE_ERR", "Ett fel uppstod n�r tabell %s skulle skapas");
define("_SDU_MSG_NEWFIELD", "Lagt till f�lt %s utan problem");
define("_SDU_MSG_NEWFIELD_ERR", "Ett fel uppstod n�r f�lt %s skulle l�ggas till");
define("_SDU_NEEDUPDATE", "Din databas �r gammal. Uppdatera din databas!<br><b>Note : SmartFactory rekommenderar att du g�r en backup p� din databas f�rst.</b><br>");
define("_SDU_NOUPDATE", "Databasen �r fr�sch. Ingen uppdatering �r n�dv�ndig.");
define("_SDU_UPDATE_DB", "Uppdaterar databas");
define("_SDU_UPDATE_ERR", "Ett fel uppstod under uppdatering till version %s");
define("_SDU_UPDATE_NOW", "Uppdatera NU!");
define("_SDU_UPDATE_OK", "Uppdaterade till version %s utan problem");
define("_SDU_UPDATE_TO", "Uppdaterar till version %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Uppdaterar databas...");


?>