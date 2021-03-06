<?php

/**
* $Id: displayitems.php 7494 2008-12-08 12:47:24Z pesian_stranger $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
global $xoopsUser, $xoopsUser, $xoopsConfig, $xoopsDB, $xoopsModuleConfig, $xoopsModule, $smartsection_item_handler;
$startitem = isset($_GET['startitem']) ? intval($_GET['startitem']) : 0;

$items_title = _AM_SSECTION_CAT_ITEMS;
$items_info = _AM_SSECTION_CAT_ITEMS_DSC;
$sel_cat = $categoryid;

smartsection_collapsableBar('bottomtable', 'bottomtableicon', $items_title, $items_info);

// Get the total number of published ITEMS
$totalitems = $smartsection_item_handler->getItemsCount($sel_cat, array(_SSECTION_STATUS_PUBLISHED));

// creating the items objects that are published
$itemsObj = $smartsection_item_handler->getAllPublished($xoopsModuleConfig['perpage'], $startitem,$sel_cat);

$totalitemsOnPage = count($itemsObj);

$allcats = $smartsection_category_handler->getObjects(null, true);
echo "<table width='100%' cellspacing=1 cellpadding=3 border=0 class = outer>";
echo "<tr>";
echo "<td width='40' class='bg3' align='center'><b>" . _AM_SSECTION_ITEMID . "</b></td>";
echo "<td width='20%' class='bg3' align='"._GLOBAL_LEFT."'><b>" . _AM_SSECTION_ITEMCOLNAME . "</b></td>";
echo "<td class='bg3' align='"._GLOBAL_LEFT."'><b>" . _AM_SSECTION_ITEMDESC . "</b></td>";
echo "<td width='90' class='bg3' align='center'><b>" . _AM_SSECTION_CREATED . "</b></td>";
echo "<td width='60' class='bg3' align='center'><b>" . _AM_SSECTION_ACTION . "</b></td>";
echo "</tr>";

if ($totalitems > 0) {
	for ( $i = 0; $i < $totalitemsOnPage; $i++ ) {
		$categoryObj =& $allcats[$itemsObj[$i]->categoryid()];
		$modify = "<a href='item.php?op=mod&amp;itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/edit.gif' title='" . _AM_SSECTION_EDITITEM . "' alt='" . _AM_SSECTION_EDITITEM . "' /></a>";
		$delete = "<a href='item.php?op=del&amp;itemid=" . $itemsObj[$i]->itemid() . "'><img src='" . XOOPS_URL . "/modules/" . $xoopsModule->dirname() . "/images/icon/delete.gif' title='" .  _AM_SSECTION_DELETEITEM . "' alt='" . _AM_SSECTION_DELETEITEM . "'/></a>";

		echo "<tr>";
		echo "<td class='head' align='center'>" . $itemsObj[$i]->itemid() . "</td>";
		echo "<td class='even' align='"._GLOBAL_LEFT."'>" . $categoryObj->name() . "</td>";
		echo "<td class='even' align='"._GLOBAL_LEFT."'>" . $itemsObj[$i]->getitemLink() . "</td>";

		echo "<td class='even' align='center'>" . $itemsObj[$i]->datesub('s') . "</td>";
		echo "<td class='even' align='center'> $modify $delete </td>";
		echo "</tr>";
	}
} else {
	$itemid = -1;
	echo "<tr>";
	echo "<td class='head' align='center' colspan= '7'>" . _AM_SSECTION_NOITEMS . "</td>";
	echo "</tr>";
}
echo "</table>\n";
echo "<br />\n";
$parentid = (isset($_POST['parentid'])) ? intval($_POST['parentid']) : 0;
$pagenav_extra_args = "op=mod&categoryid=$sel_cat&parentid=$parentid";
$pagenav = new XoopsPageNav($totalitems, $xoopsModuleConfig['perpage'], $startitem, 'startitem',$pagenav_extra_args);
echo '<div style="text-align:right;">' . $pagenav->renderNav() . '</div>';
echo "<input type='button' name='button' onclick=\"location='item.php?op=mod&categoryid=" . $sel_cat . "'\" value='" . _AM_SSECTION_CREATEITEM . "'>&nbsp;&nbsp;";
echo "</div>";

?>
