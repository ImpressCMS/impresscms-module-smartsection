<?php
// $Id: blocks.php,v 1.1 2006/05/29 02:59:53 ohwada Exp $

// 2006-12-17 K.OHWADA
// v2.12 ���б�����

// 2006-02-01 K.OHWADA
// v1.05 ���б�����

//=========================================================
// SmartSection Module
// 2005-11-04
// ͭ����������
// ���ܸ쥪�ꥸ�ʥ�
// http://xoops.sourceforge.jp/wiki/xoops2/index.php?cmd=read&page=DEV%2FSmartSection%2F%B8%C0%B8%EC%A5%D5%A5%A1%A5%A4%A5%EB
//=========================================================

/**
* blocks.php,v 1.12 2006/10/02 17:35:42 malanciault
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/*global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
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

include_once(XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/blocks.php");
*/
// Blocks

define("_MB_SSECTION_ALLCAT", "���ƤΥ��ƥ���");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "�ǿ�����Ƥ�ɽ������");
define("_MB_SSECTION_CATEGORY", "���ƥ���");
define("_MB_SSECTION_CHARS", "�����ȥ�̾��Ĺ��");
define("_MB_SSECTION_COMMENTS", "������");
define("_MB_SSECTION_DATE", "�Ǻ���");
define("_MB_SSECTION_DISP", "ɽ��");
define("_MB_SSECTION_DISPLAY_CATEGORY", "���ƥ���̾��ɽ��");
define("_MB_SSECTION_DISPLAY_COMMENTS", "�����ȿ���ɽ�����ޤ�����");
define("_MB_SSECTION_DISPLAY_TYPE", "ɽ�������� :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "�ꥹ��ɽ���򢣤�ɽ��");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "�ꥹ��ɽ�������ɽ��");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "��Ƽԡ����դ�ɽ������");
define("_MB_SSECTION_FULLITEM", "���ε������ɤ�");
define("_MB_SSECTION_HITS", "�������");
define("_MB_SSECTION_ITEMS", "����");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "ɽ�����뵭���ο�");
define("_MB_SSECTION_LENGTH", "ʸ��");
define("_MB_SSECTION_ORDER", "ɽ����");
define("_MB_SSECTION_POSTEDBY", "��Ƽ�");
define("_MB_SSECTION_READMORE", "��äȾܤ���...");
define("_MB_SSECTION_READS", "�����)");
define("_MB_SSECTION_SELECT_ITEMS", "���򤷤������Τߤ�ɽ������<br>��Windows��Ctrl�����򲡤��ʤ���<br>����å������ʣ�����꤬��ǽ");
define("_MB_SSECTION_SELECTCAT", "ɽ�����뵭���Υ��ƥ���  :");
define("_MB_SSECTION_VISITITEM", "ˬ�䤹��");
define("_MB_SSECTION_WEIGHT", "�¤ӽ�");
define("_MB_SSECTION_WHO_WHEN", "��Ƽ�: %s �Ǻ���: %s");

//bd tree block hack
define("_MB_SSECTION_LEVELS", "��٥�");
define("_MB_SSECTION_CURRENTCATEGORY", "���ߤΥ��ƥ���");
define("_MB_SSECTION_ASC", "����");
define("_MB_SSECTION_DESC", "�ս�");
define("_MB_SSECTION_SHOWITEMS", "�����ƥ��ɽ������");
//--/bd

define("_MB_SSECTION_FILES", "�ե�����");
define("_MB_SSECTION_DIRECTDOWNLOAD", "�����إ�󥯤�������ˡ���������ɥե������ľ�ܥ�󥯤��ޤ�����");
define("_MB_SSECTION_FROM", "Select articles <br />from ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Articles published between %s and %s");
?>