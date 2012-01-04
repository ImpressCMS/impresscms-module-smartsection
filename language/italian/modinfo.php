<?php

/**
* $Id: modinfo.php 3457 2008-07-05 14:29:24Z gibaphp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1", "Indice");
define("_MI_SSECTION_ADMENU2", "Categorie");
define("_MI_SSECTION_ADMENU3", "Articoli");
define("_MI_SSECTION_ADMENU4", "Permessi");
define("_MI_SSECTION_ADMENU5", "Blocchi e Gruppi");
define("_MI_SSECTION_ADMENU6", "Vai al modulo");
define("_MI_SSECTION_ADMENU7", "Go to module");

define("_MI_SSECTION_ADMINHITS", "[CONTENT OPTIONS] Admin counter reads?");
define("_MI_SSECTION_ADMINHITSDSC", "Allow admin hits for counter stats?");
define("_MI_SSECTION_ALLOWSUBMIT", "Invio da parte di utenti registrati:");
define("_MI_SSECTION_ALLOWSUBMITDSC", "Consenti agli utenti registrati di inviare articoli?");
define("_MI_SSECTION_ANONPOST", "Invio da parte di utenti anonimi:");
define("_MI_SSECTION_ANONPOSTDSC", "Consenti agli utenti anonimi di inviare articoli?");
define('_MI_SSECTION_AUTHOR_INFO', "Sviluppatori");
define('_MI_SSECTION_AUTHOR_WORD', "Parole d'Autore");
define("_MI_SSECTION_AUTOAPP", "[PERMISSIONS] Auto approve submitted articles?");
define("_MI_SSECTION_AUTOAPPDSC", "Auto approves submitted articles without admin intervention?");
define("_MI_SSECTION_BCRUMB","[PRINT OPTIONS] Show the module name in the breadcrumb?");
define("_MI_SSECTION_BCRUMBDSC","if you select yes, the breadcrumb will show \"Smartsection > category name > article name\". <br>Otherwise, only \"category name > article name\" will be shown.");
define('_MI_SSECTION_BOTH_FOOTERS','Entrambi');
define('_MI_SSECTION_BY', "by");
define('_MI_SSECTION_CATEGORY_ITEM_NOTIFY', 'Categoria');
define('_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC', 'Opzioni di notifica per la categoria corrente.');
define('_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY', 'Nuovo articolo pubblicato');
define('_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP', "Desidero ricevere un messaggio di notifica quando un nuovo articolo è pubblicato in questa categoria.");   
define('_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC', "Ricevi un messaggio di notifica quando un nuovo articolo è pubblicato in questa categoria.");      
define('_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo articolo pubblicato nella categoria"); 
define('_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY', "Articolo inviato");
define('_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP', "Desidero ricevere un messaggio di notifica quando un nuovo articolo è inviato in questa categoria.");   
define('_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC', "Ricevi un messaggio di notifica quando un nuovo articolo è inviato in questa categoria.");      
define('_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo articolo inviato nella categoria"); 
define("_MI_SSECTION_CATLIST_IMG_W", "[FORMAT OPTIONS] Category list image width");
define("_MI_SSECTION_CATLIST_IMG_WDSC", "Specify the width of category images when listing the categories.");
define("_MI_SSECTION_CATMAINIMG_W", "[FORMAT OPTIONS] Category main image width");
define("_MI_SSECTION_CATMAINIMG_WDSC", "Specify the width of the category main image.");
define("_MI_SSECTION_CATPERPAGE", "[FORMAT OPTIONS] Maximum Categories per page (User side)?");
define("_MI_SSECTION_CATPERPAGEDSC", "Maximum number of top categories per page to be displayed at once in the user side?");
define("_MI_SSECTION_CLONE", "[PERMISSIONS] Allow article duplication ?");
define("_MI_SSECTION_CLONEDSC", "Select 'Yes' to allo users with appropriate permissions to duplicate an article.");
define("_MI_SSECTION_COLLHEAD", "[FORMAT OPTIONS] Display the collapsable bar?");
define("_MI_SSECTION_COLLHEADDSC", "if you set this option to 'Yes', the Categories summary will be displayed in a collapsable bar, as well as The articles. if you set this option to 'No', the collapsable will not be displayed.");
define("_MI_SSECTION_COMMENTS", "[PERMISSIONS] Control comments at the article level?");
define("_MI_SSECTION_COMMENTSDSC", "if you set this option to 'Yes', you'll see comments only on those items that have their comment checkbox marked. <br /><br />Select 'No' to have comments managed at the global level (look below under the tag 'Comment rules'.");
define("_MI_SSECTION_DATEFORMAT", "[FORMAT OPTIONS] Date format:");
define("_MI_SSECTION_DATEFORMATDSC", "Use the final part of language/english/global.php to select a display style. Example: \"d-M-Y H:i\" translates to \"30-Mar-2004 22:35\"");
define('_MI_SSECTION_DEMO_SITE', "Sito demo di SmartFactory");
define('_MI_SSECTION_DEVELOPER_CONTRIBUTOR', "Collaboratore(i)");
define('_MI_SSECTION_DEVELOPER_CREDITS', "Crediti");
define('_MI_SSECTION_DEVELOPER_EMAIL', "Email");
define('_MI_SSECTION_DEVELOPER_LEAD', "Ultimo(i) sviluppatore(i)");
define('_MI_SSECTION_DEVELOPER_WEBSITE', "Website");
define("_MI_SSECTION_DISCOM", "[CONTENT OPTIONS] Display comment count?");
define("_MI_SSECTION_DISCOMDSC", "Set to 'Yes' to display the comments count in the individual article");
define("_MI_SSECTION_DISDATECOL", "[CONTENT OPTIONS] Display the 'Published on' column?");
define("_MI_SSECTION_DISDATECOLDSC", "When the 'Summary' display type is selected, select 'Yes' to display a 'Published on' date in the items table on the index and category page.");
define("_MI_SSECTION_DCS", "[CONTENT OPTIONS] Display the category summary?");
define("_MI_SSECTION_DCS_DSC", "Select 'No' to not display the Categoy summary on a category page that has no subcats.");
define("_MI_SSECTION_DISPLAY_CATEGORY", "Mostra il nome della categoria?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "Selezionando 'Si' sarà mostrato il link della categoria in ogni articolo");
define('_MI_SSECTION_DISPLAYTYPE_FULL', "Vista Completa");
define('_MI_SSECTION_DISPLAYTYPE_LIST', "Elenco Puntato");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "WFSection style");
define('_MI_SSECTION_DISPLAYTYPE_SUMMARY', "Vista Sommario");
define("_MI_SSECTION_DISSBCATDSC", "[CONTENT OPTIONS] Display sub-categories description?");
define("_MI_SSECTION_DISSBCATDSCDSC", "Select 'Yes' to display the description of sub-categories in the index and category page.");
define("_MI_SSECTION_DISTYPE", "[FORMAT OPTIONS] Articles display type:");
define("_MI_SSECTION_DISTYPEDSC", "if 'Summary View' is selected, only the Title, Date and Hits of each item will be displayed in a selected category. if 'Full View' is selected, each article will be fully displayed in a selected category.");
define('_MI_SSECTION_FILEUPLOADDIR', "Directory per l'upload dei file allegati:");
define('_MI_SSECTION_FILEUPLOADDIRDSC', "Directory dove saranno importati i files allegati agli articoli. Non includere alcun leading e nemmeno trailing slashes.");
define('_MI_SSECTION_FOOTERPRINT',"Stampa piè di pagina");
define('_MI_SSECTION_FOOTERPRINTDSC',"Seleziona il piè di pagina che vuoi stampare insieme ad ogni articolo scegliendo tra quelli impostati in Preferenze - Impostazioni Generali.");
define('_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY', 'Nuova categoria');
define('_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP', 'Desidero ricevere un messaggio di notifica, per ogni nuova categoria creata.');
define('_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC', 'Ricevi un messaggio di notifica quando è creata una nuova categoria.');
define('_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Creata una nuova categoria');
define('_MI_SSECTION_GLOBAL_ITEM_NOTIFY', "Globale");
define('_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC', "Opzioni di notifica da applicare a tutti gli articoli.");
define('_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY', "Articolo pubblicato");
define('_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP', "Desidero ricevere un messaggio di notifica, per ogni nuovo articolo pubblicato.");
define('_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC', "Ricevi un messaggio di notifica, per ogni nuovo articolo inviato.");
define('_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} notifica automatica : Pubblicato un nuovo articolo");
define('_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY', "Articolo inviato");
define('_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP', "Desidero ricevere un messaggio di notifica, per ogni nuovo articolo inviato (in attesa di approvazione).");
define('_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC', "Ricevi un messaggio di notifica quando un qualsiasi articolo è inviato ed è in attesa di approvazione.");
define('_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} notifica automatica : Inviato un nuovo articolo");
define('_MI_SSECTION_HEADERPRINT',"Intestazione della pagina di stampa");
define('_MI_SSECTION_HEADERPRINTDSC',"Intestazione che vuoi stampare insieme ad ogni articolo");
define('_MI_SSECTION_HELP_CUSTOM', "Percorso personale");
define('_MI_SSECTION_HELP_INSIDE', "Nel modulo");
define('_MI_SSECTION_HELP_PATH_CUSTOM', "Percorso personale dei files di help di SmartSection");
define('_MI_SSECTION_HELP_PATH_CUSTOM_DSC', "Se hai selezionato 'Percorso personale' nella precedente opzione 'Percorso dei files di help di SmartSection', devi specificare il percorso nel formato: http://www.yoursite.com/doc");
define('_MI_SSECTION_HELP_PATH_SELECT', "Percorso dei files di help di SmartSection");
define('_MI_SSECTION_HELP_PATH_SELECT_DSC', "Scegliere dove sono i files di Help di SmartSection. Se hai scaricato lo 'SmartSection's Help Package' ed è stato caricato in' modules/smartsection/doc/', potete scegliere 'Nel modulo'. In alternativa, potete accedere ai files di Help del modulo direttamente da docs.xoops.org mediante il selettore. Puoi anche scegliere 'Percorso personale' e indicare il percorso dei files di Help nel successivo 'Percorso personale dei files di help di SmartSection'");
define("_MI_SSECTION_HITSCOL", "[CONTENT OPTIONS] Display the 'Hits' column?");
define("_MI_SSECTION_HITSCOLDSC", "When the 'Summary' display type is selected, select 'Yes' to display the 'Hits' column in the items table on the index and category page.");
define("_MI_SSECTION_HLCOLOR", "[FORMAT OPTIONS] Highlight color for keywords");
define("_MI_SSECTION_HLCOLORDSC", "Color of the keywords highligting for the search function");
define("_MI_SSECTION_IMAGENAV", "[FORMAT OPTIONS] Use the image Page Navigation:");
define("_MI_SSECTION_IMAGENAVDSC", "if you set this option to \"Yes\", the Page Navigation will be displayed with images, otherwise, the original Page Naviagation will be used.");
define('_MI_SSECTION_INDEXFOOTER',"Piè di pagina della pagina principale");
define('_MI_SSECTION_INDEXFOOTER_SEL',"Piè di pagina della pagina principale");
define('_MI_SSECTION_INDEXFOOTERDSC',"Piè di pagina da mostrare nella pagina principale del modulo");
define("_MI_SSECTION_INDEXMSG", "[CONTENT OPTIONS] Index page welcome message:");
define("_MI_SSECTION_INDEXMSGDEF", "");
define("_MI_SSECTION_INDEXMSGDSC", "Welcome message to be displayed in the index page of the module.");
define('_MI_SSECTION_ITEM_APPROVED_NOTIFY', "Articolo approvato");
define('_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP', "Desidero ricevere un messaggio di notifica, quando l'articolo è approvato.");   
define('_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC', "Ricevi un messaggio di notifica quando questo articolo è approvato.");      
define('_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} notifica automatica : L'articolo è stato approvato"); 
define('_MI_SSECTION_ITEM_NOTIFY', "Articolo");
define('_MI_SSECTION_ITEM_NOTIFY_DSC', "Opzioni di notifica da applicare all'articolo corrente.");
define('_MI_SSECTION_ITEM_REJECTED_NOTIFY', "Articolo rifiutato");
define('_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP', "Desidero ricevere un messaggio di notifica, se l'articolo è rifiutato.");   
define('_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC', "Ricevi un messaggio di notifica quando se questo articolo è rifiutato.");      
define('_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ', "[{X_SITENAME}] {X_MODULE} notifica automatica : L'articolo è stato rifiutato"); 
define("_MI_SSECTION_ITEM_TYPE", "Tipologia di elementi:");
define("_MI_SSECTION_ITEM_TYPEDSC", "Seleziona il tipo di elementi che il modulo gestisce.");
define('_MI_SSECTION_ITEMFOOTER', "Piè di pagina elemento");
define('_MI_SSECTION_ITEMFOOTER_SEL', "Piè di pagina elemento");
define('_MI_SSECTION_ITEMFOOTERDSC',"Piè di pagina da mostrare in ogni articolo");
define("_MI_SSECTION_ITEMSMENU", "Menu");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "Tree block");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "Elementi recenti - Elenco");
define("_MI_SSECTION_ITEMSPOT", "Nello Spotlight!");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "Un elemento a caso!");
define("_MI_SSECTION_LASTITEM", "[CONTENT OPTIONS] Display last item column ?");
define("_MI_SSECTION_LASTITEMDSC", "Select 'Yes' to display the last item in each category in the index and category page.");
define("_MI_SSECTION_LASTITEMS", "[CONTENT OPTIONS] Display the list of newly published articles?");
define("_MI_SSECTION_LASTITEMSDSC", "Select 'Yes' to have the list at the bottom of the first page of the module");
define("_MI_SSECTION_LASTITSIZE", "[FORMAT OPTIONS] Last item size :");
define("_MI_SSECTION_LASTITSIZEDSC", "Set the maximum size of the title in the Last item column.");
define("_MI_SSECTION_LINKPATH", "[FORMAT OPTIONS] Enable links on the current path:");
define("_MI_SSECTION_LINKPATHDSC", "This option allows the user back-track by clicking on a element of the current path displayed on the top of the page");
define("_MI_SSECTION_MAX_HEIGHT", "[PERMISSIONS] Maximum uploaded image height");
define("_MI_SSECTION_MAX_HEIGHTDSC", "Maximum height of an image file that can be uploaded.");
define("_MI_SSECTION_MAX_SIZE", "[PERMISSIONS] Maximum file size");
define("_MI_SSECTION_MAX_SIZEDSC", "Maximum size (in bytes) of a file that can be uploaded.");
define("_MI_SSECTION_MAX_WIDTH", "[PERMISSIONS] Maximum uploaded image width");
define("_MI_SSECTION_MAX_WIDTHDSC", "Maximum width of an image file that can be uploaded.");
define("_MI_SSECTION_MD_DESC", "Section Management System for your XOOPS Site");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define('_MI_SSECTION_MODULE_BUG', "Segnala un bug per questo modulo");
define('_MI_SSECTION_MODULE_DEMO', "Sito dimostrativo");
define('_MI_SSECTION_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_SSECTION_MODULE_FEATURE', "Suggerisci una nuova caratteristica da implementare a questo modulo");
define('_MI_SSECTION_MODULE_INFO', "Informazioni sullo sviluppo del modulo");
define('_MI_SSECTION_MODULE_RELEASE_DATE', "Data di rilascio");
define('_MI_SSECTION_MODULE_STATUS', "Status");
define('_MI_SSECTION_MODULE_SUBMIT_BUG', "Segnala un bug");
define('_MI_SSECTION_MODULE_SUBMIT_FEATURE', "Segnala una caratteristica che desideri");
define('_MI_SSECTION_MODULE_SUPPORT', "Sito ufficiale di supporto");
define('_MI_SSECTION_NO_FOOTERS','Nessuno');
define("_MI_SSECTION_ORDERBY", "[FORMAT OPTIONS] Sort order");
define('_MI_SSECTION_ORDERBY_DATE', 'Data DECR');
define('_MI_SSECTION_ORDERBY_TITLE', 'Titolo A-Z');
define('_MI_SSECTION_ORDERBY_WEIGHT', 'Peso 0-1');
define("_MI_SSECTION_ORDERBYDSC", "Select the sort order of the items throughout the module.");
define('_MI_SSECTION_OTHER_ITEMS_TYPE_ALL', "Tutti gli articoli");
define('_MI_SSECTION_OTHER_ITEMS_TYPE_NONE', "Nessuno");
define('_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT', "Precedente e successivo");
define("_MI_SSECTION_OTHERITEMS", "[FORMAT OPTIONS] Other articles display type");
define("_MI_SSECTION_OTHERITEMSDSC", "Select how you would like to display the other articles of the category in the article page.");
define('_MI_SSECTION_PERPAGE', "Numero di articoli per pagina (Lato Amministratore):");
define('_MI_SSECTION_PERPAGEDSC', "Numero massimo di articoli per pagina da mostrare dal lato Amministratore.");
define('_MI_SSECTION_PERPAGEINDEX', "Numero di articoli per pagina (Lato utente):");
define('_MI_SSECTION_PERPAGEINDEXDSC', "Numero massimo di articoli per pagina da mostrare dal lato utente.");
define('_MI_SSECTION_PRINTLOGOURL', 'Url del Logo per la stampa');
define('_MI_SSECTION_PRINTLOGOURLDSC', 'Indica il percorso del logo da stampare in cima alla pagina insieme ad ogni articolo');
define("_MI_SSECTION_RECENTITEMS", "Elementi recenti - Dettagli");
define("_MI_SSECTION_SHOW_RSS","[CONTENT OPTIONS] Show link for RSS feed");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "[CONTENT OPTIONS] Display sub categories");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "Display all subcategories");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "Select if you want to display the sub categories in the categories list of the index and category page of the module");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "Do not display sub-categories");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "Display non empty sub-categories");
define("_MI_SSECTION_SUB_SMNAME1", "Invia un articolo");
define("_MI_SSECTION_SUB_SMNAME2", "Articoli più visti");
define("_MI_SSECTION_SUBMITMSG", "[CONTENT OPTIONS] Submit page intro message:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "Intro message to be displayed in the submit page of the module.");
define('_MI_SSECTION_TITLE_SIZE', "Lunghezza del titolo:");
define('_MI_SSECTION_TITLE_SIZEDSC', "Imposta la massima lunghezza del titolo da mostrare per ogni singolo elemento.");
define("_MI_SSECTION_UPLOAD", "[PERMISSIONS] User file upload?");
define("_MI_SSECTION_UPLOADDSC", "Allow users to upload files linked to articles on your website?");
define('_MI_SSECTION_USEREALNAME', 'Usa il Nome Utente Reale degli utenti');
define('_MI_SSECTION_USEREALNAMEDSC', 'Se si deve mostrare il nome utente, usa il Nome Utente Reale, se questo è stato inserito dall\'utente.');
define('_MI_SSECTION_VERSION_HISTORY', "Storia delle versioni");
define('_MI_SSECTION_WARNING_BETA', "This module comes as is, without any guarantees whatsoever. This module is BETA, meaning it is still under active development. This release is meant for <b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live website or in a production environment.");
define('_MI_SSECTION_WARNING_FINAL', "This module comes as is, without any guarantees whatsoever. Although this module is not beta, it is still under active development. This release can be used in a live website or a production environment, but its use is under your own responsibility, which means the author is not responsible.");
define('_MI_SSECTION_WARNING_RC', "This module comes as is, without any guarantees whatsoever. This module is a Release Candidate and should not be used on a production web site. The module is still under active development and its use is under your own responsibility, which means the author is not responsible.");
define("_MI_SSECTION_WELCOME", "[CONTENT OPTIONS] Display the welcome title and message:");
define("_MI_SSECTION_WELCOMEDSC", "if this option is set to 'Yes', the module index page will display the title 'Welcome in the SmartSection of...', followed by the welcome message defined below. if this option is set to 'No', none of these lines will be displayed.");
define("_MI_SSECTION_WHOWHEN", "[CONTENT OPTIONS] Display the poster and date?");
define("_MI_SSECTION_WHOWHENDSC", "Set to 'Yes' to display the poster and date information in the individual article");
define("_MI_SSECTION_WYSIWYG", "[FORMAT OPTIONS] Editor type");
define("_MI_SSECTION_WYSIWYGDSC", "What kind of editor would you like  to use. Please note that of you choose any other editor than the DHTML-Editor, it must be installed on your site.");

define("_MI_SSECTION_PV_TEXT", "Partial view message");
define("_MI_SSECTION_PV_TEXTDSC", "Message for articles that allows only partial view.");
define("_MI_SSECTION_PV_TEXT_DEF", "To view the complete article, you must register.");

define("_MI_SSECTION_SEOMODNAME", "URL Rewriting module name");
define("_MI_SSECTION_SEOMODNAMEDSC", "if URL Rewriting is enabled for the module, this is the name of the module that will be used. For example : http://yoursite.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT", "Display articles count");
define("_MI_SSECTION_ARTCOUNTDSC", "Select 'Yes' to display the article count within each category in the Category summary table. Please note that the module currently only count articles within each category and does not count within subcategoies.");

define("_MI_SSECTION_LATESTFILES", "Latest uploaded files");

define("_MI_SSECTION_PATHSEARCH", "[FORMAT OPTIONS] Display category path in search results");
define("_MI_SSECTION_PATHSEARCHDSC", "");
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN", "Display sub-categories on index page only");
define("_MI_SSECTION_RATING_ENABLED", "Enable rating system");
define("_MI_SSECTION_RATING_ENABLEDDSC", "This features requires the SmartObject Framework");

define("_MI_SSECTION_DISPBREAD", "Display the breadcrumb");
define("_MI_SSECTION_DISPBREADDSC", "Breadcrumb navigation displays the current page's context within the site structure.");

define('_MI_SSECTION_DATE_TO_DATE', 'Articles from date to date')
?>