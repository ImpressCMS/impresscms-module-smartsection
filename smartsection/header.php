<?php

/**
* $Id: header.php,v 1.7 2006/05/26 17:35:21 malanciault Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once "../../mainfile.php";

if( !defined("SMARTSECTION_DIRNAME") ){
	define("SMARTSECTION_DIRNAME", 'smartsection');
}

include_once XOOPS_ROOT_PATH.'/modules/' . SMARTSECTION_DIRNAME . '/include/common.php';

include_once XOOPS_ROOT_PATH."/class/pagenav.php";
$myts = MyTextSanitizer::getInstance();

?>