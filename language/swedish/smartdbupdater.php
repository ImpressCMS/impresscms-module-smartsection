<?php

/**
* $Id: smartdbupdater.php,v 1.1 2006/09/12 19:00:43 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {
        die("Sökvängen till root är inte definierad");
}

define("_SDU_IMPORT", "Importera");
define("_SDU_CURRENTVER", "Nuvarande version: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Databasversion %s");
define("_SDU_MSG_ADD_DATA", "Lagt till data i tabell %s");
define("_SDU_MSG_ADD_DATA_ERR", "Ett fel uppstod när data skulle läggas till i tabell %s");
define("_SDU_MSG_CHGFIELD", "Byter fält %s i tabell %s");
define("_SDU_MSG_CHGFIELD_ERR", "Ett fel uppstod när fält skulle bytas %s i tabell %s");
define("_SDU_MSG_CREATE_TABLE", "Tabell %s skapad");
define("_SDU_MSG_CREATE_TABLE_ERR", "Ett fel uppstod när tabell %s skulle skapas");
define("_SDU_MSG_NEWFIELD", "Lagt till fält %s utan problem");
define("_SDU_MSG_NEWFIELD_ERR", "Ett fel uppstod när fält %s skulle läggas till");
define("_SDU_NEEDUPDATE", "Din databas är gammal. Uppdatera din databas!<br><b>Note : SmartFactory rekommenderar att du gör en backup på din databas först.</b><br>");
define("_SDU_NOUPDATE", "Databasen är fräsch. Ingen uppdatering är nödvändig.");
define("_SDU_UPDATE_DB", "Uppdaterar databas");
define("_SDU_UPDATE_ERR", "Ett fel uppstod under uppdatering till version %s");
define("_SDU_UPDATE_NOW", "Uppdatera NU!");
define("_SDU_UPDATE_OK", "Uppdaterade till version %s utan problem");
define("_SDU_UPDATE_TO", "Uppdaterar till version %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Uppdaterar databas...");


?>