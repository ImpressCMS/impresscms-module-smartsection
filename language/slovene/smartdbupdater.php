<?php

/**
* $Id: smartdbupdater.php,v 1.1 2006/09/12 19:00:43 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("Root path not defined");
}

define("_SDU_IMPORT", "Uvozi");
define("_SDU_CURRENTVER", "Trenutna verzija: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Verzija baze %s");
define("_SDU_MSG_ADD_DATA", "Podatki, dodani v tabelo %s");
define("_SDU_MSG_ADD_DATA_ERR", "Napaka pri dodajanju podatkov v tabelo %s");
define("_SDU_MSG_CHGFIELD", "Spreminjam polje %s v tabeli %s");
define("_SDU_MSG_CHGFIELD_ERR", "Napaka pri spreminjanju polja %s v tabeli %s");
define("_SDU_MSG_CREATE_TABLE", "Tabela %s narejena");
define("_SDU_MSG_CREATE_TABLE_ERR", "Napaka pri ustvarjanju tabele %s");
define("_SDU_MSG_NEWFIELD", "Uspe¹no dodano polje %s");
define("_SDU_MSG_NEWFIELD_ERR", "Napaka pri dodajanju polja %s");
define("_SDU_NEEDUPDATE", "Va¹a baza je stara. Prosim, nadgradite va¹e tabele!<br><b>Note : The SmartFactory moèno priporoèa, da naredite varnostno kopijo vseh tabel, preden za¾ene nadgradnjo.</b><br>");
define("_SDU_NOUPDATE", "Va¹a baza je sve¾a, nadgradnja ni potrebna.");
define("_SDU_UPDATE_DB", "Nadgrajevanje baze");
define("_SDU_UPDATE_ERR", "Napaka pri nadgradnji na verzijo %s");
define("_SDU_UPDATE_NOW", "Nadgradi sedaj!");
define("_SDU_UPDATE_OK", "Uspe¹no nadgrajeno na verzijo %s");
define("_SDU_UPDATE_TO", "Nadgrajijem na verzijo %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Nadgrajujem bazo...");


?>