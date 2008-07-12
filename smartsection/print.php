<?php

/**
* $Id: print.php,v 1.16 2007/02/10 01:41:26 malanciault Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once 'header.php';
require_once XOOPS_ROOT_PATH.'/class/template.php';

Global $smartsection_item_handler;

$itemid = isset($_GET['itemid']) ? intval($_GET['itemid']) : 0;

if ($itemid == 0) {
	redirect_header("javascript:history.go(-1)", 1, _MD_SSECTION_NOITEMSELECTED);
	exit();
}

// Creating the ITEM object for the selected ITEM
$itemObj = new SmartsectionItem($itemid);

// if the selected ITEM was not found, exit
if ($itemObj->notLoaded()) {
	redirect_header("javascript:history.go(-1)", 1, _MD_SSECTION_NOITEMSELECTED);
	exit();
}

// Creating the category object that holds the selected ITEM
$categoryObj =& $itemObj->category();

// Check user permissions to access that category of the selected ITEM
if (!(smartsection_itemAccessGranted($itemObj->getVar('itemid'), $itemObj->getVar('categoryid')))) {
	redirect_header("javascript:history.go(-1)", 1, _NOPERM);
	exit;
}
$xoopsTpl = new XoopsTpl();
global $xoopsConfig;
$myts = MyTextSanitizer::getInstance();
$item=  $itemObj->toArray();
$printtitle = $xoopsConfig['sitename']." - ".smartsection_metagen_html2text($categoryObj->getCategoryPath())." > ".$myts->displayTarea($item['title']);
$printheader = $myts->displayTarea(smartsection_getConfig('headerprint'));
$who_where = sprintf(_MD_SSECTION_WHO_WHEN, $itemObj->posterName(), $itemObj->datesub());
$item['categoryname'] = $myts->displayTarea($categoryObj->name());

$xoopsTpl->assign('printtitle', $printtitle);
$xoopsTpl->assign('printlogourl', smartsection_getConfig('printlogourl'));
$xoopsTpl->assign('printheader', $printheader);
$xoopsTpl->assign('lang_category', _MD_SSECTION_CATEGORY);
$xoopsTpl->assign('lang_author_date', $who_where);
$xoopsTpl->assign('item', $item);
if(smartsection_getConfig('footerprint')== 'item footer' || smartsection_getConfig('footerprint')== 'both'){
	$xoopsTpl->assign('itemfooter', $myts->displayTarea( smartsection_getConfig('itemfooter')));
}
if(smartsection_getConfig('footerprint')== 'index footer' || smartsection_getConfig('footerprint')== 'both'){
	$xoopsTpl->assign('indexfooter', $myts->displayTarea( smartsection_getConfig('indexfooter')));
}

$xoopsTpl->assign('display_whowhen_link', $xoopsModuleConfig['display_whowhen_link']);

$xoopsTpl->display('db:smartsection_print.html');

?>