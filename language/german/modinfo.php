<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;

define("_MI_SSECTION_MD_NAME", "SmartSection");

// A brief description of this module
define("_MI_SSECTION_MD_DESC", "Sparten Management System f&uuml;r Ihre XOOPS Seiten");

// Language plugin captions
define("_MI_SSECTION_LANG_PLUGIN_ARTICLE", "Artikel");
define("_MI_SSECTION_LANG_PLUGIN_ITEM", "Dateien");
define("_MI_SSECTION_LANG_PLUGIN_TUTORIAL", "Anleitungen");
define("_MI_SSECTION_LANG_PLUGIN_PROPERTY", "Einstellungen");
define("_MI_SSECTION_LANG_PLUGIN_CLASS_ACTION", "Klassen Aktions Verbund");

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

$file = XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/modinfo.php";
include_once($file);


// About.php constants
define('_MI_SSECTION_AUTHOR_INFO', "Entwickler");
define('_MI_SSECTION_AUTHOR_WORD', "Einf&uuml;hrende Worte der Entwickler Gruppe");
define('_MI_SSECTION_BY', "von");
define('_MI_SSECTION_DEMO_SITE', "SmartFactory Demo Site");
define('_MI_SSECTION_DEVELOPER_CONTRIBUTOR', "Beitr&auml;ge kamen von&nbsp;");
define('_MI_SSECTION_DEVELOPER_CREDITS', "Wertsch&auml;tzungen");
define('_MI_SSECTION_DEVELOPER_EMAIL', "Email");
define('_MI_SSECTION_DEVELOPER_LEAD', "Entwicklungs Leitende");
define('_MI_SSECTION_DEVELOPER_WEBSITE', "Webseiten");
define('_MI_SSECTION_MODULE_BUG', "Melden Sie ein Problem an");
define('_MI_SSECTION_MODULE_DEMO', "Demo Site");
define('_MI_SSECTION_MODULE_DISCLAIMER', "Haftungsausschuss");
define('_MI_SSECTION_MODULE_FEATURE', "Ein neues Feature f&uuml;r dieses Modul vorschlagen");
define('_MI_SSECTION_VERSION_HISTORY', "Versions Geschichte");
define('_MI_SSECTION_MODULE_INFO', "Modul Entwicklungs Informationen");
define('_MI_SSECTION_MODULE_RELEASE_DATE', "Ver&ouml;ffentlichungsdatum");
define('_MI_SSECTION_MODULE_STATUS', "Status");
define('_MI_SSECTION_MODULE_SUBMIT_BUG', "Ein Problem Anmelden");
define('_MI_SSECTION_MODULE_SUBMIT_FEATURE', "Feature Beantragen");
define('_MI_SSECTION_MODULE_SUPPORT', "Offizielle Sch&uuml;tzenhilfe");

// Beta
define('_MI_SSECTION_WARNING_BETA', "Dieses Modul enth&auml;lt keinerlei Garantie. Beachten Sie bitte
auch, dass es sich hierbei um eine Beta Version handelt, was bedeuted, dass sich diese Modul noch
in der angehenden Entwicklungsarbeit befindet. Diese Version ist <strong>alleinig zum testen 
gedacht</strong>, und wir empfehlen Ihnene, das Sie dies Modul <strong>nicht</strong> auf aktiven
Seiten <strong>benutzen</strong>.");

// RC
define('_MI_SSECTION_WARNING_RC', "Dieses Modul enth&auml;lt keinerlei Garantie. Beachten Sie bitte
auch, dass es sich hierbei um eine Beta Version handelt, was bedeuted, dass sich diese Modul noch
in der angehenden Entwicklungsarbeit befindet. Jeglicher Einsatz dieses Modules, steht unter
der jeweiligen Verantwortung des Benutzers..");

// Final
define('_MI_SSECTION_WARNING_FINAL', "Dieses Modul enth&auml;lt keinerlei Garantie. Beachten Sie bitte, dass 
obwohl es sich hierbei um keine Beta Version handelt, dass sich trotzallem dieses Modul noch
weiterhin in der Entwicklungsarbeit befindet. Trotzallem liegt die Veranwortung der Benutzung, 
mit dem Benutzer.");

?>