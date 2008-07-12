<?php

/**
* $Id: about.php,v 1.6 2005/09/06 18:51:55 malanciault Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
//
include_once("admin_header.php");

include_once(SMARTSECTION_ROOT_PATH . "class/about.php");
$aboutObj = new SmartsectionAbout(_AM_SSECTION_ABOUT);
$aboutObj->render();

?>