<?php

/**
* $Id: blocks.php 3447 2008-07-05 12:22:54Z gibaphp $
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

define("_MB_SSECTION_ALLCAT", "���� �� ����������");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "�� ������������ �������� �� ��������� �����������?");
define("_MB_SSECTION_CATEGORY", "���������");
define("_MB_SSECTION_CHARS", "����� ��� ������");
define("_MB_SSECTION_COMMENTS", "������");
define("_MB_SSECTION_DATE", "���������� �����������");
define("_MB_SSECTION_DISP", "��������");
define("_MB_SSECTION_DISPLAY_CATEGORY", "�������� ��� ������ ��� ����������;");
define("_MB_SSECTION_DISPLAY_COMMENTS", "�������� ��� ������� ��� �������;");
define("_MB_SSECTION_DISPLAY_TYPE", "����� ��������� : ");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "���� ����������� �� ����� block");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "���� ����������� �� ����� ��������");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "�������� ��� ��������� ��� ��� �����������;");
define("_MB_SSECTION_FULLITEM", "�������� ��� �� �����");
define("_MB_SSECTION_HITS", "������� ����������");
define("_MB_SSECTION_ITEMS", "�����");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "�� ���, ���� ����������� �� ������������;");
define("_MB_SSECTION_LENGTH", " ����������");
define("_MB_SSECTION_ORDER", "����� ���������");
define("_MB_SSECTION_POSTEDBY", "������������ ��� ���");
define("_MB_SSECTION_READMORE", "�������� �����������...");
define("_MB_SSECTION_READS", "����������");
define("_MB_SSECTION_SELECT_ITEMS", "�� ���, �������� ���� ����� �� ������������ :");
define("_MB_SSECTION_SELECTCAT", "�������� ��� ������ ��� ���������� :");
define("_MB_SSECTION_VISITITEM", "������������ ���");
define("_MB_SSECTION_WEIGHT", "�������� ���� �����");
define("_MB_SSECTION_WHO_WHEN", "������������ ��� ��� %s ���� %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "levels");
define("_MB_SSECTION_CURRENTCATEGORY", "Current Category");
define("_MB_SSECTION_ASC", "ASC");
define("_MB_SSECTION_DESC", "DESC");
define("_MB_SSECTION_SHOWITEMS", "Show Items");
//--/bd

define("_MB_SSECTION_FILES", "files");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Direct link to dowload the file instead of a link to the article?");
define("_MB_SSECTION_FROM", "Select articles <br />from ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Articles published between %s and %s");
?>