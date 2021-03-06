<?php

/**
* $Id: xoops_version.php 8931 2009-11-19 23:30:52Z davidimpress $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

$modversion['name'] = _MI_SSECTION_MD_NAME;
$modversion['version'] = 2.14;
$modversion['description'] = _MI_SSECTION_MD_DESC;
$modversion['author'] = "The SmartFactory [www.smartfactory.ca]";
$modversion['credits'] = "w4z004, hsalazar, Mithrandir, fx2024, Ackbarr, Mariuss, Marco, Michiel, phppp, outch, Xvitry, Catzwolf, Shine, McDonald";
$modversion['help'] = "";
$modversion['license'] = "GNU General Public License (GPL)";
$modversion['official'] = 0;
$modversion['dirname'] = "smartsection";
$modversion['iconsmall'] = "images/icon_small.gif";
$modversion['iconbig'] = "images/icon_big.gif";


// Settting InBox module image if it is present
$inbox_logo_filename = $modversion['dirname'] . "_inbox_logo.gif";

if (file_exists(XOOPS_ROOT_PATH . "/modules/" . $modversion['dirname'] . "/images/" . $inbox_logo_filename)) {
	$modversion['image'] = "images/$inbox_logo_filename";
} else {
	$modversion['image'] = "images/module_logo.gif";
}

// Added by marcan for the About page in admin section
$modversion['adminMenu'] = "smartsection_adminMenu";
$modversion['modFooter'] = "smartsection_modFooter";
$modversion['developer_lead'] = "marcan [Marc-André Lanciault]";
$modversion['developer_contributor'] = "w4z004, hsalazar, Mithrandir, fx2024, Ackbarr, Mariuss, Marco, Michiel, phppp, outch, Xvitry & Catzwolf";
$modversion['developer_website_url'] = "http://smartfactory.ca";
$modversion['developer_website_name'] = "The SmartFactory";
$modversion['developer_email'] = "marcan@smartfactory.ca";
$modversion['status_version'] = "Final";
$modversion['status'] = "Final";
$modversion['date'] = "2008-07-05";

$modversion['warning'] = _MI_SSECTION_WARNING_FINAL;

$modversion['demo_site_url'] = "http://smartfactory.ca/modules/smartsection";
$modversion['demo_site_name'] = "SmartFactory's Library";
$modversion['support_site_url'] = "http://community.impresscms.org/modules/newbb/viewforum.php?forum=71";
$modversion['support_site_name'] = "The ImpressCMS Community";
$modversion['submit_bug'] = "http://community.impresscms.org/modules/newbb/viewforum.php?forum=71";
$modversion['submit_feature'] = "http://community.impresscms.org/modules/newbb/viewforum.php?forum=71";

$modversion['people']['developers'][] = "marcan (Marc-André Lanciault)";
$modversion['people']['developers'][] = "Mithrandir (Jan Keller Pedersen)";
$modversion['people']['developers'][] = "Sudhaker (Sudhaker Raj)";
$modversion['people']['developers'][] = "stranger (Sina Asghari)";

$modversion['people']['testers'][] = "Andy Cleff";
$modversion['people']['testers'][] = "Félix Tousignant";
$modversion['people']['testers'][] = "Frédéric Tousignant";
$modversion['people']['testers'][] = "Pier-André Roy";

$modversion['author_word'] = "";

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";
// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
// Tables created by sql file (without prefix!)
$modversion['tables'][0] = "smartsection_categories";
$modversion['tables'][1] = "smartsection_items";
$modversion['tables'][2] = "smartsection_files";
$modversion['tables'][3] = "smartsection_meta";
$modversion['tables'][4] = "smartsection_mimetypes";

$modversion['onInstall'] = "include/update.php";
$modversion['onUpdate'] = "include/update.php";

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = "include/search.inc.php";
$modversion['search']['func'] = "smartsection_search";
// Menu
$modversion['hasMain'] = 1;

global $xoopsModule;
if (is_object($xoopsModule) && $xoopsModule->getVar('dirname') == $modversion['dirname']) {
    global $xoopsModuleConfig, $xoopsUser;
    $isAdmin = false;
    if (!empty($xoopsUser)) {
        $isAdmin = ($xoopsUser->isAdmin($xoopsModule->getVar('mid')));
    }
    // Add the Submit new item button
    if ($isAdmin || (isset($xoopsModuleConfig['allowsubmit']) &&
    	$xoopsModuleConfig['allowsubmit'] == 1 &&
    		(is_object($xoopsUser) ||
    		(isset($xoopsModuleConfig['anonpost']) && $xoopsModuleConfig['anonpost'] == 1)))) {
        $modversion['sub'][1]['name'] = _MI_SSECTION_SUB_SMNAME1;
        $modversion['sub'][1]['url'] = "submit.php?op=add";
    }
}

$i = 0;

$i++;
$modversion['blocks'][$i]['file'] = "items_new.php";
$modversion['blocks'][$i]['name'] = _MI_SSECTION_ITEMSNEW;
$modversion['blocks'][$i]['description'] = "Shows new items";
$modversion['blocks'][$i]['show_func'] = "smartsection_items_new_show";
$modversion['blocks'][$i]['edit_func'] = "smartsection_items_new_edit";
$modversion['blocks'][$i]['options'] = "0|datesub|5|65";
$modversion['blocks'][$i]['template'] = "smartsection_items_new.html";

$i++;
$modversion['blocks'][$i]['file'] = "items_recent.php";
$modversion['blocks'][$i]['name'] = _MI_SSECTION_RECENTITEMS;
$modversion['blocks'][$i]['description'] = "Shows recent items";
$modversion['blocks'][$i]['show_func'] = "smartsection_items_recent_show";
$modversion['blocks'][$i]['edit_func'] = "smartsection_items_recent_edit";
$modversion['blocks'][$i]['options'] = "0|datesub|5|65";
$modversion['blocks'][$i]['template'] = "smartsection_items_recent.html";

$i++;
$modversion['blocks'][$i]['file'] = "items_spot.php";
$modversion['blocks'][$i]['name'] = _MI_SSECTION_ITEMSPOT;
$modversion['blocks'][$i]['description'] = "Shows last item";
$modversion['blocks'][$i]['show_func'] = "smartsection_items_spot_show";
$modversion['blocks'][$i]['edit_func'] = "smartsection_items_spot_edit";
$modversion['blocks'][$i]['options'] = "1|5|0|0|1|1|bullet";
$modversion['blocks'][$i]['template'] = "smartsection_items_spot.html";

$i++;
$modversion['blocks'][$i]['file'] = "items_random_item.php";
$modversion['blocks'][$i]['name'] = _MI_SSECTION_ITEMSRANDOM_ITEM;
$modversion['blocks'][$i]['description'] = "Shows a random 'item' item";
$modversion['blocks'][$i]['show_func'] = "smartsection_items_random_item_show";
$modversion['blocks'][$i]['template'] = "smartsection_items_random_item.html";

$i++;
$modversion['blocks'][$i]['file'] = "items_menu.php";
$modversion['blocks'][$i]['name'] = _MI_SSECTION_ITEMSMENU;
$modversion['blocks'][$i]['description'] = "Menu displaying categoies";
$modversion['blocks'][$i]['show_func'] = "smartsection_items_menu_show";
$modversion['blocks'][$i]['edit_func'] = "smartsection_items_menu_edit";
$modversion['blocks'][$i]['template'] = "smartsection_items_menu.html";

$i++;
$modversion['blocks'][$i]['file'] = "latest_files.php";
$modversion['blocks'][$i]['name'] = _MI_SSECTION_LATESTFILES;
$modversion['blocks'][$i]['description'] = "List of latest uploaded files";
$modversion['blocks'][$i]['show_func'] = "smartsection_latest_files_show";
$modversion['blocks'][$i]['edit_func'] = "smartsection_latest_files_edit";
$modversion['blocks'][$i]['options'] = "datesub|5|0";
$modversion['blocks'][$i]['template'] = "smartsection_latest_files.html";

$i++;
$modversion['blocks'][$i]['file'] = "date_to_date.php";
$modversion['blocks'][$i]['name'] = _MI_SSECTION_DATE_TO_DATE;
$modversion['blocks'][$i]['description'] = "List article from a selected date to another";
$modversion['blocks'][$i]['show_func'] = "smartsection_date_to_date_show";
$modversion['blocks'][$i]['edit_func'] = "smartsection_date_to_date_edit";
$modversion['blocks'][$i]['options'] = formatTimeStamp(time(), 'm/j/Y')."|".formatTimeStamp(time(), 'm/j/Y');
$modversion['blocks'][$i]['template'] = "smartsection_date_to_date.html";
/* We need to comment this out has it require a smarty plugin not present in the core...
 * We will find a solution later...

$i++;
$modversion['blocks'][6]['file'] = "items_tree.php";
$modversion['blocks'][6]['name'] = _MI_SSECTION_ITEMSTREE;
$modversion['blocks'][6]['description'] = "Display the category and items tree";
$modversion['blocks'][6]['show_func'] = "smartsection_items_tree_show";
$modversion['blocks'][6]['edit_func'] = "smartsection_items_tree_edit";
$modversion['blocks'][6]['template'] = "smartsection_items_tree.html";
$modversion['blocks'][6]['options'] = "0|weight|ASC|-1|1";
*/

// Templates
$i = 0;

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_header.html';
$modversion['templates'][$i]['description'] = 'Display header';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_footer.html';
$modversion['templates'][$i]['description'] = 'Display footer';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_singleitem.html';
$modversion['templates'][$i]['description'] = 'Display a single item';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_categories_table.html';
$modversion['templates'][$i]['description'] = 'Display the category list table used in other templates';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_display_list.html';
$modversion['templates'][$i]['description'] = 'Display index and category with bullet display type';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_display_summary.html';
$modversion['templates'][$i]['description'] = 'Display index and category with summary display type';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_display_full.html';
$modversion['templates'][$i]['description'] = 'Display index and category with full display type';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_display_wfsection.html';
$modversion['templates'][$i]['description'] = 'Display index and category in a WF-Section like style';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_item.html';
$modversion['templates'][$i]['description'] = 'Display item';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_submit.html';
$modversion['templates'][$i]['description'] = 'Form to submit an item';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_singleitem_block.html';
$modversion['templates'][$i]['description'] = 'Display a single item in a block';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_print.html';
$modversion['templates'][$i]['description'] = 'Print page template';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_rss.html';
$modversion['templates'][$i]['description'] = 'Display smartsection rss feed';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_addfile.html';
$modversion['templates'][$i]['description'] = 'Form to add a file to an article';

$i++;
$modversion['templates'][$i]['file'] = 'smartsection_admin_menu.html';
$modversion['templates'][$i]['description'] = '(Admin) Tabs bar for administration pages';


// Config Settings (only for modules that need config settings generated automatically)
$i = 0;

$i++;
$modversion['config'][$i]['name'] = 'show_subcats';
$modversion['config'][$i]['title'] = '_MI_SSECTION_SHOW_SUBCATS';
$modversion['config'][$i]['description'] = '_MI_SSECTION_SHOW_SUBCATS_DSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'all';
$modversion['config'][$i]['options'] = array(_MI_SSECTION_SHOW_SUBCATS_NO  => 'no',
                                   		_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY   => 'nonempty',
                                  		 _MI_SSECTION_SHOW_SUBCATS_ALL => 'all');

$i++;
$modversion['config'][$i]['name'] = 'display_breadcrumb';
$modversion['config'][$i]['title'] = '_MI_SSECTION_DISPBREAD';
$modversion['config'][$i]['description'] = '_MI_SSECTION_DISPBREADDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'displayarticlescount';
$modversion['config'][$i]['title'] = '_MI_SSECTION_ARTCOUNT';
$modversion['config'][$i]['description'] = '_MI_SSECTION_ARTCOUNTDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'displaylastitems';
$modversion['config'][$i]['title'] = '_MI_SSECTION_LASTITEMS';
$modversion['config'][$i]['description'] = '_MI_SSECTION_LASTITEMSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'displaylastitem';
$modversion['config'][$i]['title'] = '_MI_SSECTION_LASTITEM';
$modversion['config'][$i]['description'] = '_MI_SSECTION_LASTITEMDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i] ['name'] = 'displaysubcatdsc';
$modversion['config'][$i]['title'] = '_MI_SSECTION_DISSBCATDSC';
$modversion['config'][$i]['description'] = '_MI_SSECTION_DISSBCATDSCDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'display_date_col';
$modversion['config'][$i]['title'] = '_MI_SSECTION_DISDATECOL';
$modversion['config'][$i]['description'] = '_MI_SSECTION_DISDATECOLDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'display_hits_col';
$modversion['config'][$i]['title'] = '_MI_SSECTION_HITSCOL';
$modversion['config'][$i]['description'] = '_MI_SSECTION_HITSCOLDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

// display_categeory_summary enabled by Freeform Solutions March 21 2006
$i++;
$modversion['config'][$i]['name'] = 'display_category_summary';
$modversion['config'][$i]['title'] = '_MI_SSECTION_DCS';
$modversion['config'][$i]['description'] = '_MI_SSECTION_DCS_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'display_comment_link';
$modversion['config'][$i]['title'] = '_MI_SSECTION_DISCOM';
$modversion['config'][$i]['description'] = '_MI_SSECTION_DISCOMDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'display_whowhen_link';
$modversion['config'][$i]['title'] = '_MI_SSECTION_WHOWHEN';
$modversion['config'][$i]['description'] = '_MI_SSECTION_WHOWHENDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'adminhits';
$modversion['config'][$i]['title'] = '_MI_SSECTION_ADMINHITS';
$modversion['config'][$i]['description'] = '_MI_SSECTION_ADMINHITSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'show_rss_link';
$modversion['config'][$i]['title'] = '_MI_SSECTION_SHOW_RSS';
$modversion['config'][$i]['description'] = '_MI_SSECTION_SHOW_RSSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'rating_enabled';
$modversion['config'][$i]['title'] = '_MI_SSECTION_RATING_ENABLED';
$modversion['config'][$i]['description'] = '_MI_SSECTION_RATING_ENABLEDDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'indexwelcomemsg';
$modversion['config'][$i]['title'] = '_MI_SSECTION_INDEXMSG';
$modversion['config'][$i]['description'] = '_MI_SSECTION_INDEXMSGDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = _MI_SSECTION_INDEXMSGDEF;

$i++;
$modversion['config'][$i]['name'] = 'title_and_welcome';
$modversion['config'][$i]['title'] = '_MI_SSECTION_WELCOME';
$modversion['config'][$i]['description'] = '_MI_SSECTION_WELCOMEDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'submitintromsg';
$modversion['config'][$i]['title'] = '_MI_SSECTION_SUBMITMSG';
$modversion['config'][$i]['description'] = '_MI_SSECTION_SUBMITMSGDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = _MI_SSECTION_SUBMITMSGDEF;

$i++;
$modversion['config'][$i]['name'] = 'indexfooter';
$modversion['config'][$i]['title'] = '_MI_SSECTION_INDEXFOOTER';
$modversion['config'][$i]['description'] = '_MI_SSECTION_INDEXFOOTERDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'itemfooter';
$modversion['config'][$i]['title'] = '_MI_SSECTION_ITEMFOOTER';
$modversion['config'][$i]['description'] = '_MI_SSECTION_ITEMFOOTERDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'partial_view_text';
$modversion['config'][$i]['title'] = '_MI_SSECTION_PV_TEXT';
$modversion['config'][$i]['description'] = '_MI_SSECTION_PV_TEXTDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = _MI_SSECTION_PV_TEXT_DEF;

$i++;
$modversion['config'][$i]['name'] = 'headerprint';
$modversion['config'][$i]['title'] = '_MI_SSECTION_HEADERPRINT';
$modversion['config'][$i]['description'] = '_MI_SSECTION_HEADERPRINTDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

$i++;
$modversion['config'][$i]['name'] = 'printlogourl';
$modversion['config'][$i]['title'] = '_MI_SSECTION_PRINTLOGOURL';
$modversion['config'][$i]['description'] = '_MI_SSECTION_PRINTLOGOURLDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = XOOPS_URL . '/images/logo.gif';

$i++;
$modversion['config'][$i]['name'] = 'footerprint';
$modversion['config'][$i]['title'] = '_MI_SSECTION_FOOTERPRINT';
$modversion['config'][$i]['description'] = '_MI_SSECTION_FOOTERPRINTDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'item footer';
$modversion['config'][$i]['options'] = array(_MI_SSECTION_ITEMFOOTER_SEL  => 'item footer',
                                   		_MI_SSECTION_INDEXFOOTER_SEL   => 'index footer',
                                  		 _MI_SSECTION_BOTH_FOOTERS => 'both',
                                  		 _MI_SSECTION_NO_FOOTERS => 'none');


$i++;
$modversion['config'][$i]['name'] = 'dateformat';
$modversion['config'][$i]['title'] = '_MI_SSECTION_DATEFORMAT';
$modversion['config'][$i]['description'] = '_MI_SSECTION_DATEFORMATDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'd-M-Y H:i';

$i++;
$modversion['config'][$i]['name'] = 'displaytype';
$modversion['config'][$i]['title'] = '_MI_SSECTION_DISTYPE';
$modversion['config'][$i]['description'] = '_MI_SSECTION_DISTYPEDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array(_MI_SSECTION_DISPLAYTYPE_SUMMARY => 'summary', _MI_SSECTION_DISPLAYTYPE_FULL => 'full',_MI_SSECTION_DISPLAYTYPE_LIST => 'list', _MI_SSECTION_DISPLAYTYPE_WFSECTION => 'wfsection');
$modversion['config'][$i]['default'] = 'summary';

$i++;
$modversion['config'][$i]['name'] = 'use_wysiwyg';
$modversion['config'][$i]['title'] = '_MI_SSECTION_WYSIWYG';
$modversion['config'][$i]['description'] = '_MI_SSECTION_WYSIWYGDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array('DHTML-Editor'  => 'default',
                                   		'Koivi Editor'   => 'koivi',
                                  		 'TinyEditor' => 'tiny',
                                  		 'FCKEditor' => 'fckeditor',
                                  		 'InBetween' => 'inbetween',
                                  		 'HTMLArea' => 'htmlarea',
                                  		 'Spaw Editor' => 'spaw');
$modversion['config'][$i]['default'] ='default';

$i++;
$modversion['config'][$i]['name'] = 'lastitemsize';
$modversion['config'][$i]['title'] = '_MI_SSECTION_LASTITSIZE';
$modversion['config'][$i]['description'] = '_MI_SSECTION_LASTITSIZEDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '50';

$i++;
$modversion['config'][$i]['name'] = 'titlesize';
$modversion['config'][$i]['title'] = '_MI_SSECTION_TITLE_SIZE';
$modversion['config'][$i]['description'] = '_MI_SSECTION_TITLE_SIZEDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '60';

$i++;
$modversion['config'][$i]['name'] = 'category_list_image_width';
$modversion['config'][$i]['title'] = '_MI_SSECTION_CATLIST_IMG_W';
$modversion['config'][$i]['description'] = '_MI_SSECTION_CATLIST_IMG_WDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '90';

$i++;
$modversion['config'][$i]['name'] = 'category_main_image_width';
$modversion['config'][$i]['title'] = '_MI_SSECTION_CATMAINIMG_W';
$modversion['config'][$i]['description'] = '_MI_SSECTION_CATMAINIMG_WDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '150';

$i++;
$modversion['config'][$i]['name'] = 'collapsable_heading';
$modversion['config'][$i]['title'] = '_MI_SSECTION_COLLHEAD';
$modversion['config'][$i]['description'] = '_MI_SSECTION_COLLHEADDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'orderby';
$modversion['config'][$i]['title'] = '_MI_SSECTION_ORDERBY';
$modversion['config'][$i]['description'] = '_MI_SSECTION_ORDERBYDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array(_MI_SSECTION_ORDERBY_TITLE => 'title', _MI_SSECTION_ORDERBY_DATE => 'date',_MI_SSECTION_ORDERBY_WEIGHT => 'weight');
$modversion['config'][$i]['default'] = 'date';

$i++;
$modversion['config'][$i]['name'] = 'useimagenavpage';
$modversion['config'][$i]['title'] = '_MI_SSECTION_IMAGENAV';
$modversion['config'][$i]['description'] = '_MI_SSECTION_IMAGENAVDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'catperpage';
$modversion['config'][$i]['title'] = '_MI_SSECTION_CATPERPAGE';
$modversion['config'][$i]['description'] = '_MI_SSECTION_CATPERPAGEDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 15;
$modversion['config'][$i]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$i++;
$modversion['config'][$i]['name'] = 'perpage';
$modversion['config'][$i]['title'] = '_MI_SSECTION_PERPAGE';
$modversion['config'][$i]['description'] = '_MI_SSECTION_PERPAGEDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 15;
$modversion['config'][$i]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$i++;
$modversion['config'][$i]['name'] = 'indexperpage';
$modversion['config'][$i]['title'] = '_MI_SSECTION_PERPAGEINDEX';
$modversion['config'][$i]['description'] = '_MI_SSECTION_PERPAGEINDEXDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 15;
$modversion['config'][$i]['options'] = array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50);

$i++;
$modversion['config'][$i]['name'] = 'userealname';
$modversion['config'][$i]['title'] = '_MI_SSECTION_USEREALNAME';
$modversion['config'][$i]['description'] = '_MI_SSECTION_USEREALNAMEDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'other_items_type';
$modversion['config'][$i]['title'] = '_MI_SSECTION_OTHERITEMS';
$modversion['config'][$i]['description'] = '_MI_SSECTION_OTHERITEMSDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['options'] = array(_MI_SSECTION_OTHER_ITEMS_TYPE_NONE => 'none', _MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT => 'previous_next', _MI_SSECTION_OTHER_ITEMS_TYPE_ALL => 'all');
$modversion['config'][$i]['default'] = 'previous_next';

$i++;
$modversion['config'][$i]['name'] = 'highlight_color';
$modversion['config'][$i]['title'] = '_MI_SSECTION_HLCOLOR';
$modversion['config'][$i]['description'] = '_MI_SSECTION_HLCOLORDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '#FFFF80';

$i++;
$modversion['config'][$i]['name'] = 'linkedPath';
$modversion['config'][$i]['title'] = '_MI_SSECTION_LINKPATH';
$modversion['config'][$i]['description'] = '_MI_SSECTION_LINKPATHDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'show_mod_name_breadcrumb';
$modversion['config'][$i]['title'] = '_MI_SSECTION_BCRUMB';
$modversion['config'][$i]['description'] = '_MI_SSECTION_BCRUMBDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'catpath_search';
$modversion['config'][$i]['title'] = '_MI_SSECTION_PATHSEARCH';
$modversion['config'][$i]['description'] = '_MI_SSECTION_PATHSEARCHDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'module_seo_modulename';
$modversion['config'][$i]['title'] = '_MI_SSECTION_SEOMODNAME';
$modversion['config'][$i]['description'] = '_MI_SSECTION_SEOMODNAMEDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'smartsection';

$i++;
$modversion['config'][$i]['name'] = 'allowsubmit';
$modversion['config'][$i]['title'] = '_MI_SSECTION_ALLOWSUBMIT';
$modversion['config'][$i]['description'] = '_MI_SSECTION_ALLOWSUBMITDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'anonpost';
$modversion['config'][$i]['title'] = '_MI_SSECTION_ANONPOST';
$modversion['config'][$i]['description'] = '_MI_SSECTION_ANONPOSTDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

$i++;
$modversion['config'][$i]['name'] = 'allowupload';
$modversion['config'][$i]['title'] = '_MI_SSECTION_UPLOAD';
$modversion['config'][$i]['description'] = '_MI_SSECTION_UPLOADDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'allowclone';
$modversion['config'][$i]['title'] = '_MI_SSECTION_CLONE';
$modversion['config'][$i]['description'] = '_MI_SSECTION_CLONEDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'maximum_filesize';
$modversion['config'][$i]['title'] = '_MI_SSECTION_MAX_SIZE';
$modversion['config'][$i]['description'] = '_MI_SSECTION_MAX_SIZEDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '1000000';

$i++;
$modversion['config'][$i]['name'] = 'maximum_image_width';
$modversion['config'][$i]['title'] = '_MI_SSECTION_MAX_WIDTH';
$modversion['config'][$i]['description'] = '_MI_SSECTION_MAX_WIDTHDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '800';

$i++;
$modversion['config'][$i]['name'] = 'maximum_image_height';
$modversion['config'][$i]['title'] = '_MI_SSECTION_MAX_HEIGHT';
$modversion['config'][$i]['description'] = '_MI_SSECTION_MAX_HEIGHTDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '800';

$member_handler = &xoops_gethandler('member');
$groups = $member_handler->getGroupList();

$i++;
$modversion['config'][$i]['name'] = 'commentatarticlelevel';
$modversion['config'][$i]['title'] = '_MI_SSECTION_COMMENTS';
$modversion['config'][$i]['description'] = '_MI_SSECTION_COMMENTSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;

$i++;
$modversion['config'][$i]['name'] = 'autoapprove_submitted';
$modversion['config'][$i]['title'] = '_MI_SSECTION_AUTOAPP';
$modversion['config'][$i]['description'] = '_MI_SSECTION_AUTOAPPDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'itemid';
$modversion['comments']['pageName'] = 'item.php';

// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'smartsection_com_approve';
$modversion['comments']['callback']['update'] = 'smartsection_com_update';

// Notification
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'smartsection_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'global_item';
$modversion['notification']['category'][1]['title'] = _MI_SSECTION_GLOBAL_ITEM_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC;
$modversion['notification']['category'][1]['subscribe_from'] = array('index.php', 'category.php', 'item.php');

$modversion['notification']['category'][2]['name'] = 'category_item';
$modversion['notification']['category'][2]['title'] = _MI_SSECTION_CATEGORY_ITEM_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('index.php', 'category.php', 'item.php');
$modversion['notification']['category'][2]['item_name'] = 'categoryid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'item';
$modversion['notification']['category'][3]['title'] = _MI_SSECTION_ITEM_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_SSECTION_ITEM_NOTIFY_DSC;
$modversion['notification']['category'][3]['subscribe_from'] = array('item.php');
$modversion['notification']['category'][3]['item_name'] = 'itemid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name'] = 'category_created';
$modversion['notification']['event'][1]['category'] = 'global_item';
$modversion['notification']['event'][1]['title'] = _MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP;
$modversion['notification']['event'][1]['description'] = _MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_item_category_created';
$modversion['notification']['event'][1]['mail_subject'] = _MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ;

$modversion['notification']['event'][2]['name'] = 'submitted';
$modversion['notification']['event'][2]['category'] = 'global_item';
$modversion['notification']['event'][2]['admin_only'] = 1;
$modversion['notification']['event'][2]['title'] = _MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP;
$modversion['notification']['event'][2]['description'] = _MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_item_submitted';
$modversion['notification']['event'][2]['mail_subject'] = _MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ;

$modversion['notification']['event'][3]['name'] = 'published';
$modversion['notification']['event'][3]['category'] = 'global_item';
$modversion['notification']['event'][3]['title'] = _MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][3]['description'] = _MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_item_published';
$modversion['notification']['event'][3]['mail_subject'] = _MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][4]['name'] = 'submitted';
$modversion['notification']['event'][4]['category'] = 'category_item';
$modversion['notification']['event'][4]['admin_only'] = 1;
$modversion['notification']['event'][4]['title'] = _MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP;
$modversion['notification']['event'][4]['description'] = _MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC;
$modversion['notification']['event'][4]['mail_template'] = 'category_item_submitted';
$modversion['notification']['event'][4]['mail_subject'] = _MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ;

$modversion['notification']['event'][5]['name'] = 'published';
$modversion['notification']['event'][5]['category'] = 'category_item';
$modversion['notification']['event'][5]['title'] = _MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP;
$modversion['notification']['event'][5]['description'] = _MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC;
$modversion['notification']['event'][5]['mail_template'] = 'category_item_published';
$modversion['notification']['event'][5]['mail_subject'] = _MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ;

$modversion['notification']['event'][6]['name'] = 'rejected';
$modversion['notification']['event'][6]['category'] = 'item';
$modversion['notification']['event'][6]['invisible'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_SSECTION_ITEM_REJECTED_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP;
$modversion['notification']['event'][6]['description'] = _MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC;
$modversion['notification']['event'][6]['mail_template'] = 'item_rejected';
$modversion['notification']['event'][6]['mail_subject'] = _MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ;

$modversion['notification']['event'][7]['name'] = 'approved';
$modversion['notification']['event'][7]['category'] = 'item';
$modversion['notification']['event'][7]['invisible'] = 1;
$modversion['notification']['event'][7]['title'] = _MI_SSECTION_ITEM_APPROVED_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP;
$modversion['notification']['event'][7]['description'] = _MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC;
$modversion['notification']['event'][7]['mail_template'] = 'item_approved';
$modversion['notification']['event'][7]['mail_subject'] = _MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ;

// On Update
if( ! empty( $_POST['fct'] ) && ! empty( $_POST['op'] ) && $_POST['fct'] == 'modulesadmin' && $_POST['op'] == 'update_ok' && $_POST['dirname'] == $modversion['dirname'] ) {
	include dirname( __FILE__ ) . "/include/onupdate.inc.php" ;
}

?>