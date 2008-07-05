<?php

/**
* $Id: modinfo.php,v 1.41 2006/03/22 14:04:51 malanciault Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1", "Glavna stran");
define("_MI_SSECTION_ADMENU2", "Kategorije");
define("_MI_SSECTION_ADMENU3", "Èlanki");
define("_MI_SSECTION_ADMENU4", "Dovoljenja");
define("_MI_SSECTION_ADMENU5", "Bloki and skupine");
define("_MI_SSECTION_ADMENU6", "Mimetypes");
define("_MI_SSECTION_ADMENU7", "Pojdi na modul");

define("_MI_SSECTION_ADMINHITS", "[NASTAVITVE VSEBINE] Admin counter reads?");
define("_MI_SSECTION_ADMINHITSDSC", "Allow admin hits for counter stats?");
define("_MI_SSECTION_ALLOWSUBMIT", "[DOVOLJENJA] User submissions?");
define("_MI_SSECTION_ALLOWSUBMITDSC", "Allow users to submit articles on your website?");
define("_MI_SSECTION_ANONPOST", "[DOVOLJENJA] Allow anonymous posting?");
define("_MI_SSECTION_ANONPOSTDSC", "Allow anonymous users to submit articles?");
define("_MI_SSECTION_AUTHOR_INFO", "Developers");
define("_MI_SSECTION_AUTHOR_WORD", "The Author's Word");
define("_MI_SSECTION_AUTOAPP", "[DOVOLJENJA] Auto approve submitted articles?");
define("_MI_SSECTION_AUTOAPPDSC", "Auto approves submitted articles without admin intervention?");
define("_MI_SSECTION_BCRUMB","[NASTAVITVE TISKA] Show the module name in the breadcrumb?");
define("_MI_SSECTION_BCRUMBDSC","If you select yes, the breadcrumb will show \"Smartsection > category name > article name\". <br>Otherwise, only \"category name > article name\" will be shown.");
define("_MI_SSECTION_BOTH_FOOTERS","Both footers");
define("_MI_SSECTION_BY", "by");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY", "Category Items");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC", "Notification options that apply to the current category.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY", "New article published");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP", "Notify me when a new article is published in the current category.");   
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC", "Receive notification when a new article is published in the current category.");      
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New article published in category"); 
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY", "'Article submitted");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP", "Notify me when a new article is submitted in the current category.");   
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC", "Receive notification when a new article is submitted in the current category.");      
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New article submitted in category"); 
define("_MI_SSECTION_CATLIST_IMG_W", "[NASTAVITVE OBLIKE] Category list image width"); 
define("_MI_SSECTION_CATLIST_IMG_WDSC", "Specify the witdh of category images when listing the categories."); 
define("_MI_SSECTION_CATMAINIMG_W", "[NASTAVITVE OBLIKE] Category main image width"); 
define("_MI_SSECTION_CATMAINIMG_WDSC", "Specify the width of the category main image."); 
define("_MI_SSECTION_CATPERPAGE", "[NASTAVITVE OBLIKE] Maximum Categories per page (User side)?");
define("_MI_SSECTION_CATPERPAGEDSC", "Maximum number of top categories per page to be displayed at once in the user side?");
define("_MI_SSECTION_CLONE", "[DOVOLJENJA] Allow article duplication ?");
define("_MI_SSECTION_CLONEDSC", "Select 'Yes' to allo users with appropriate permissions to duplicate an article.");
define("_MI_SSECTION_COLLHEAD", "[NASTAVITVE OBLIKE] Display the collapsable bar?");
define("_MI_SSECTION_COLLHEADDSC", "If you set this option to 'Yes', the Categories summary will be displayed in a collapsable bar, as well as The articles. If you set this option to 'No', the collapsable will not be displayed.");
define("_MI_SSECTION_COMMENTS", "[DOVOLJENJA] Control comments at the article level?");
define("_MI_SSECTION_COMMENTSDSC", "If you set this option to 'Yes', you'll see comments only on those items that have their comment checkbox marked. <br /><br />Select 'No' to have comments managed at the global level (look below under the tag 'Comment rules'.");
define("_MI_SSECTION_DATEFORMAT", "[NASTAVITVE OBLIKE] Date format:");
define("_MI_SSECTION_DATEFORMATDSC", "Use the final part of language/english/global.php to select a display style. Example: \"d-M-Y H:i\" translates to \"30-Mar-2004 22:35\"");
define("_MI_SSECTION_DEMO_SITE", "SmartFactory Demo Site");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR", "Contributor(s)");
define("_MI_SSECTION_DEVELOPER_CREDITS", "Credits");
define("_MI_SSECTION_DEVELOPER_EMAIL", "Email");
define("_MI_SSECTION_DEVELOPER_LEAD", "Lead developer(s)");
define("_MI_SSECTION_DEVELOPER_WEBSITE", "Website");
define("_MI_SSECTION_DISCOM", "[NASTAVITVE VSEBINE] Display comment count?");
define("_MI_SSECTION_DISCOMDSC", "Set to 'Yes' to display the comments count in the individual article");
define("_MI_SSECTION_DISDATECOL", "[NASTAVITVE VSEBINE] Display the 'Published on' column?");
define("_MI_SSECTION_DISDATECOLDSC", "When the 'Summary' display type is selected, select 'Yes' to display a 'Published on' date in the items table on the index and category page.");
define("_MI_SSECTION_DCS", "[NASTAVITVE VSEBINE] Display the category summary?");
define("_MI_SSECTION_DCS_DSC", "Select 'No' to not display the Categoy summary on a category page that has no subcats.");
define("_MI_SSECTION_DISPLAY_CATEGORY", "Display the category name?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "Set to 'Yes' to display the category link in the individual article");
define("_MI_SSECTION_DISPLAYTYPE_FULL", "Full View");
define("_MI_SSECTION_DISPLAYTYPE_LIST", "Bullet list");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "WFSection style");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY", "Summary View");
define("_MI_SSECTION_DISSBCATDSC", "[NASTAVITVE VSEBINE] Display sub-categories description?");
define("_MI_SSECTION_DISSBCATDSCDSC", "Select 'Yes' to display the description of sub-categories in the index and category page.");
define("_MI_SSECTION_DISTYPE", "[NASTAVITVE OBLIKE] Articles display type:");
define("_MI_SSECTION_DISTYPEDSC", "If 'Summary View' is selected, only the Title, Date and Hits of each item will be displayed in a selected category. If 'Full View' is selected, each article will be fully displayed in a selected category.");
define("_MI_SSECTION_FILEUPLOADDIR", "Attached files upload directory:");
define("_MI_SSECTION_FILEUPLOADDIRDSC", "Directory into which will be imported the files attached to the articles. Do not include any leading nor trailing slashes.");
define("_MI_SSECTION_FOOTERPRINT","[NASTAVITVE TISKA] Print page footer");
define("_MI_SSECTION_FOOTERPRINTDSC","Footer that will be printed for each article");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY", "New category");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP", "Notify me when a new category is created.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC", "Receive notification when a new category is created.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New category");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY", "Global Articles");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC", "Notification options that apply to all articles.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY", "New article published");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "Notify me when any new article is published.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "Receive notification when any new article is published.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New article published");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY", "Article submitted");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP", "Notify me when any article is submitted and is awaiting approval.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC", "Receive notification when any article is submitted and is waiting approval.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : New article submitted");
define("_MI_SSECTION_HEADERPRINT","[NASTAVITVE TISKA] Print page header");
define("_MI_SSECTION_HEADERPRINTDSC","Header that will be printed for each article");
define("_MI_SSECTION_HELP_CUSTOM", "Custom Path");
define("_MI_SSECTION_HELP_INSIDE", "Inside the module");
define("_MI_SSECTION_HELP_PATH_CUSTOM", "Custom path of SmartSection's help files");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC", "If you selected 'Custom path' in the previous option 'Path of SmartSection's help files', please specify the URL of SmartSection's help files, in that format : http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT", "Path of SmartSection's help files");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC", "Select from where you would like to access SmartSection's help files. If you downloaded the 'SmartSection's Help Package' and uploaded it in 'modules/smartsection/doc/', you can select 'Inside the module'. Alternatively, you can access the module's help file directly from docs.xoops.org by chosing this in the selector. You can also select 'Custom Path' and specify yourself the path of the help files in the next config option 'Custom path of SmartSection's help files'");
define("_MI_SSECTION_HITSCOL", "[NASTAVITVE VSEBINE] Display the 'Hits' column?");
define("_MI_SSECTION_HITSCOLDSC", "When the 'Summary' display type is selected, select 'Yes' to display the 'Hits' column in the items table on the index and category page.");
define("_MI_SSECTION_HLCOLOR", "[NASTAVITVE OBLIKE] Highlight color for keywords");
define("_MI_SSECTION_HLCOLORDSC", "Color of the keywords highligting for the search function");
define("_MI_SSECTION_IMAGENAV", "[NASTAVITVE OBLIKE] Use the image Page Navigation:");
define("_MI_SSECTION_IMAGENAVDSC", "If you set this option to \"Yes\", the Page Navigation will be displayed with images, otherwise, the original Page Naviagation will be used.");
define("_MI_SSECTION_INDEXFOOTER","[NASTAVITVE VSEBINE] Index Footer");
define("_MI_SSECTION_INDEXFOOTER_SEL","Index Footer");
define("_MI_SSECTION_INDEXFOOTERDSC","Footer that will be displayed at the index page of the module");
define("_MI_SSECTION_INDEXMSG", "[NASTAVITVE VSEBINE] Index page welcome message:");
define("_MI_SSECTION_INDEXMSGDEF", ""); 
define("_MI_SSECTION_INDEXMSGDSC", "Welcome message to be displayed in the index page of the module.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY", "Article approved");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP", "Notify me when this article is approved.");   
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC", "Receive notification when this article is approved.");      
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : article approved"); 
define("_MI_SSECTION_ITEM_NOTIFY", "Article");
define("_MI_SSECTION_ITEM_NOTIFY_DSC", "Notification options that apply to the current article.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY", "Article rejected");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP", "Notify me if this article is rejected.");   
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC", "Receive notification if this article is rejected.");      
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notify : article rejected"); 
define("_MI_SSECTION_ITEM_TYPE", "Item type:");
define("_MI_SSECTION_ITEM_TYPEDSC", "Select the kind of items this module is going to manage.");
define("_MI_SSECTION_ITEMFOOTER", "[NASTAVITVE VSEBINE] Item footer");
define("_MI_SSECTION_ITEMFOOTER_SEL", "Item footer");
define("_MI_SSECTION_ITEMFOOTERDSC","Footer that will be displayed for each article");
define("_MI_SSECTION_ITEMSMENU", "Categories Menu block");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "Tree block");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "Recent items List");
define("_MI_SSECTION_ITEMSPOT", "In the Spotlight !");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "Random item !");
define("_MI_SSECTION_LASTITEM", "[NASTAVITVE VSEBINE] Display last item column ?");
define("_MI_SSECTION_LASTITEMDSC", "Select 'Yes' to display the last item in each category in the index and category page.");
define("_MI_SSECTION_LASTITEMS", "[NASTAVITVE VSEBINE] Display the list of newly published articles?");
define("_MI_SSECTION_LASTITEMSDSC", "Select 'Yes' to have the list at the bottom of the first page of the module");
define("_MI_SSECTION_LASTITSIZE", "[NASTAVITVE OBLIKE] Last item size :");
define("_MI_SSECTION_LASTITSIZEDSC", "Set the maximum size of the title in the Last item column.");
define("_MI_SSECTION_LINKPATH", "[NASTAVITVE OBLIKE] Enable links on the current path:");
define("_MI_SSECTION_LINKPATHDSC", "This option allows the user back-track by clicking on a element of the current path displayed on the top of the page");
define("_MI_SSECTION_MAX_HEIGHT", "[DOVOLJENJA] Najveèja mo¾na vi¹ina slike");
define("_MI_SSECTION_MAX_HEIGHTDSC", "Najveèja mo¾na vi¹ina slike, ki jo lahko prilepite.");
define("_MI_SSECTION_MAX_SIZE", "[DOVOLJENJA] Najveèja mo¾na velikost datoteke");
define("_MI_SSECTION_MAX_SIZEDSC", "Najveèja mo¾na velikost(v byt-ih) datoteke, ki jo lahko prilepite.");
define("_MI_SSECTION_MAX_WIDTH", "[DOVOLJENJA] Najveèja mo¾na ¹irina slik");
define("_MI_SSECTION_MAX_WIDTHDSC", "Najveèja mo¾na ¹irina slik, ki jih lahko prilepite.");
define("_MI_SSECTION_MD_DESC", "Sistem za urejanje èlankov za va¹ XOOPS portal");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define("_MI_SSECTION_MODULE_BUG", "Poroèaj o napakah tega modula");
define("_MI_SSECTION_MODULE_DEMO", "Demo Stran");
define("_MI_SSECTION_MODULE_DISCLAIMER", "Licenèna pogodba");
define("_MI_SSECTION_MODULE_FEATURE", "Predlagaj novo funkcijo za ta modul");
define("_MI_SSECTION_MODULE_INFO", "Podrobnosti o razvoju modula");
define("_MI_SSECTION_MODULE_RELEASE_DATE", "Datum izdaje");
define("_MI_SSECTION_MODULE_STATUS", "Status");
define("_MI_SSECTION_MODULE_SUBMIT_BUG", "Prijavi napako");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE", "Vnesi zahtevo za novo funkcijo");
define("_MI_SSECTION_MODULE_SUPPORT", "Uradna stran za podporo");
define("_MI_SSECTION_NO_FOOTERS","Niè");
define("_MI_SSECTION_ORDERBY", "[NASTAVITVE OBLIKE] Vrstni red razvr¹èanja");
define("_MI_SSECTION_ORDERBY_DATE", "Datum DESC");
define("_MI_SSECTION_ORDERBY_TITLE", "Naslov ASC");
define("_MI_SSECTION_ORDERBY_WEIGHT", "Weight ASC");
define("_MI_SSECTION_ORDERBYDSC", "Izberite vrstni red razvr¹èanja v modulu.");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL", "Vsi èlanki");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE", "Niè");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT", "Predhodni in naslednji èlanek");
define("_MI_SSECTION_OTHERITEMS", "[NASTAVITVE OBLIKE] Naèin prikaza ostalih èlankov");
define("_MI_SSECTION_OTHERITEMSDSC", "Izberite kako bi radi prikazali ostale èlanke iste kategorije na strani s èlanki.");
define("_MI_SSECTION_PERPAGE", "[NASTAVITVE OBLIKE] Najveèje mo¾no ¹tevilo èlankov, ki bodo prikazani na skupni strani(èe ste administrator):");
define("_MI_SSECTION_PERPAGEDSC", "Najveèje mo¾no ¹tevilo èlankov, ki bodo prikazani na skupni strani, èe ste administrator.");
define("_MI_SSECTION_PERPAGEINDEX", "[NASTAVITVE OBLIKE] Najveèje mo¾no ¹tevilo èlankov, ki bodo prikazani na skupni strani(èe ste uporabnik):");
define("_MI_SSECTION_PERPAGEINDEXDSC", "[NASTAVITVE TISKA] Najveèje mo¾no ¹tevilo èlankov, ki bodo prikazani na skupni strani, èe ste ¾ uporabnik.");
define("_MI_SSECTION_PRINTLOGOURL","[NASTAVITVE TISKA] Pot do logotipa, ki se doda ob tiskanju èlanka");
define("_MI_SSECTION_PRINTLOGOURLDSC","URL naslov logotipa prikazanega na vrhu strani");
define("_MI_SSECTION_RECENTITEMS", "Nedavno uporabljene datoteke(podrobnosti)");
define("_MI_SSECTION_SHOW_RSS","[NASTAVITVE VSEBINE] Prika¾i povezavo za RSS feed");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "[NASTAVITVE VSEBINE] Prika¾i pokategorije");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "Prika¾i vse podkategorije");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "Izberite to opcijo, èe ¾elite prikaz podkategorij v seznamu kategorij v kazalu in stran kategorij modula");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "Ne prika¾i podkategorij");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "Prika¾i podkategorije, ki imajo vsaj en vnos");
define("_MI_SSECTION_SUB_SMNAME1", "Po¹lji èlanek");
define("_MI_SSECTION_SUB_SMNAME2", "Najbolj brani èlanki");
define("_MI_SSECTION_SUBMITMSG", "[NASTAVITVE VSEBINE] Uvodno sporoèilo na strani za vnos:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "Uvodno sproèilo prikazano na strani za vnos:");
define("_MI_SSECTION_TITLE_SIZE", "[NASTAVITVE OBLIKE] Velikost naslova :");
define("_MI_SSECTION_TITLE_SIZEDSC", "Nastavi najveèjo mo¾no dol¾ino naslova na prikazni strani z enim predmetom .");
define("_MI_SSECTION_UPLOAD", "[DOVOLJENJA] Dovoljen prenos datotek uporabnikom?");
define("_MI_SSECTION_UPLOADDSC", "Dovoli uporabnikom da prilepijo datoteke povezane s èlanki na va¹i spletni strani?");
define("_MI_SSECTION_USEREALNAME", "[NASTAVITVE OBLIKE] Uporabi prava imena uporabnikov");
define("_MI_SSECTION_USEREALNAMEDSC", "Ob prikazu uporabni¹kega imena uporabnika prika¾i njegovo pravo ime, èe ga je le ta vnesel.");
define("_MI_SSECTION_VERSION_HISTORY", "Zgodovina verzije");
define("_MI_SSECTION_WARNING_BETA", "Ta modul je tak¹en kot je, brez kakr¹negakoli jamstva.  Ta modul je beta verzija, kar pomeni da se ¹e vedno razvija. Izdaja je namenjena samo <b>testiranju</b>, zato <b>moèno</b> priporoèamo da ga ne uporabljate na aktivnih spletnih straneh ali v drugih delovnih okoljih.");
define("_MI_SSECTION_WARNING_FINAL", "Ta modul je tak¹en kot je, brez kakr¹negakoli jamstva.  Èeprav modul ni beta verzija, je ¹e vedno v razvoju. To verzijo lahko uporabljate na aktivnih spletnih straneh ali v drugih delovnih okoljih, vendar ga uporabljate na lastno odgovornost, kar pomeni da avtor ni odgovoren za posledice.");
define("_MI_SSECTION_WARNING_RC", "Ta modul je tak¹en kot je, brez kakr¹negakoli jamstva. Ta modul je ¹e v pripravi in se ne sme uporabljati na aktivnih spletnih straneh. Modul je ¹ele kandidat za izdajo, zato ga uporabljate na lastno odgovornost, kar pomeni da avtor ni odgovoren za posledice.");
define("_MI_SSECTION_WELCOME", "[NASTAVITVE VSEBINE] Prika¾i naslov in dobrodo¹lico:");
define("_MI_SSECTION_WELCOMEDSC", "Èe je mo¾nost nastavljena na 'Da', bo na glavni strani modula prikazal naslov 'Welcome in the SmartSection of...', sledila pa bo dobrodo¹lica, ki je nastavljena spodaj. Èe je mo¾nost nastavljena na 'No', ne bo prikazana nobena od teh informacij");
define("_MI_SSECTION_WHOWHEN", "[NASTAVITVE VSEBINE] Prika¾i avtorja in datum?");
define("_MI_SSECTION_WHOWHENDSC", "Nastavite na 'Da' za prikaz avtirja in datuma v posameznem èlanku");
define("_MI_SSECTION_WYSIWYG", "[NASTAVITVE OBLIKE] Tip urejevalnika");
define("_MI_SSECTION_WYSIWYGDSC", "Kak¹en urejevalnik bi radi uporabili. Èe izberete drug urejevalnik kot XoopsEditor, mora biti le ta name¹èen na va¹i strani");

define("_MI_SSECTION_PV_TEXT", "Delno videno sporoèilo");
define("_MI_SSECTION_PV_TEXTDSC", "Sporoèilo v èlankih, katerega lahko vidijo le tisti z pravicami za delni ogled.");
define("_MI_SSECTION_PV_TEXT_DEF", "Èe ¾elite videti celoten èlanek, se morate registrirati.");

define("_MI_SSECTION_SEOMODNAME", "Ime URL Rewriting modula");
define("_MI_SSECTION_SEOMODNAMEDSC", "Èe je URL Rewriting omogoèen za ta modul, je to naslov do modula, ki bo uporabljen. Primer: http://yoursite.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT", "[NASTAVITVE VSEBINE] Prika¾i ¹tevilo ogledov èlankov");
define("_MI_SSECTION_ARTCOUNTDSC", "Oznaèite 'Da'. èe ¾elite prikaz ogleda èlankov v vsaki kategoriji. Trenutno modul ¹teje samo oglede èlankov znotraj kategorije, ne pa tudi znotraj podkategorije.");

define("_MI_SSECTION_LATESTFILES", "Zadnje prene¹ene datoteke");

define("_MI_SSECTION_PATHSEARCH", "[FORMAT OPTIONS] Display category path in search results");
define("_MI_SSECTION_PATHSEARCHDSC", "");
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN", "Display sub-categories on index page only");
define("_MI_SSECTION_RATING_ENABLED", "Enable rating system");
define("_MI_SSECTION_RATING_ENABLEDDSC", "This features requires the SmartObject Framework");

define("_MI_SSECTION_DISPBREAD", "Display the breadcrumb");
define("_MI_SSECTION_DISPBREADDSC", "Breadcrumb navigation displays the current page's context within the site structure.");

define('_MI_SSECTION_DATE_TO_DATE', 'Articles from date to date');
?>