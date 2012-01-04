<?php
/**
* PDF class
*
* System tool that allows you to generate PDF files from your articles
*
* @copyright	The ImpressCMS Project http://www.impresscms.org/
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @package		Modules (smartsection)
* @since		2.14
* @author		Sina Asghari (AKA stranger) <stranger@impresscms.ir>
* @version		$Id$
*/

error_reporting(0);
include_once 'header.php';
global $smartsection_item_handler, $smartsection_category_handler, $xoopsUser, $xoopsConfig, $xoopsModuleConfig, $xoopsModule;

$itemid = isset($_GET['itemid']) ? intval($_GET['itemid']) : 0;
$item_page_id = isset($_GET['page']) ? intval($_GET['page']) : -1;

if ($itemid == 0) {
	redirect_header("javascript:history.go(-1)", 1, _MD_SSECTION_NOITEMSELECTED);
	exit();
}

// Creating the item object for the selected item
$itemObj = $smartsection_item_handler->get($itemid);

// if the selected item was not found, exit
if (!$itemObj) {
	redirect_header("javascript:history.go(-1)", 1, _MD_SSECTION_NOITEMSELECTED);
	exit();
}

// Creating the category object that holds the selected item
$categoryObj =& $smartsection_category_handler->get($itemObj->categoryid());

// Check user permissions to access that category of the selected item
if (!(smartsection_itemAccessGranted($itemObj))) {
	redirect_header("javascript:history.go(-1)", 1, _NOPERM);
	exit;
}

// Moved the code to create a PDF file to a central location
// So other modules can benefit too ;-)

require_once XOOPS_ROOT_PATH.'/include/pdf.php';
$filename = XOOPS_ROOT_PATH.'/modules/smartsection/'.$xoopsConfig['language'].'/main.php';
if (file_exists( $filename)) {
	include_once $filename;
} else {
	include_once XOOPS_ROOT_PATH.'/modules/smartsection/language/english/main.php';
}

$dateformat = $itemObj->datesub();
$sender_inform = sprintf(_MD_SSECTION_WHO_WHEN, $itemObj->posterName(), $itemObj->datesub());
$content = '<b><i><u><a href="'.XOOPS_URL.'/modules/smartsection/item.php?itemid='.$itemid.'" title="'.$myts->undoHtmlSpecialChars($itemObj->title()).'">'.$myts->undoHtmlSpecialChars($itemObj->title()).'</a></u></i></b><br /><b>'._MD_SSECTION_CATEGORY.' : <a href="'.XOOPS_URL.'/modules/smartsection/category.php?categoryid='.$itemObj->categoryid().'" title="'.$myts->undoHtmlSpecialChars($categoryObj->name()).'">'.$myts->undoHtmlSpecialChars($categoryObj->name()).'</a></b><br /><b>'.$sender_inform.'</b><br />'.$myts->undoHtmlSpecialChars($itemObj->plain_maintext()).'';
$doc_title = $myts->undoHtmlSpecialChars($itemObj->title());
$doc_keywords = 'ICMS';

$content = Generate_PDF ($content, $doc_title, $doc_keywords);
?>