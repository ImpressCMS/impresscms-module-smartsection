<?php

/**
* $Id: modinfo.php,v 1.45 2006/09/22 16:22:19 malanciault Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1", "Index");
define("_MI_SSECTION_ADMENU2", "Kategorier");
define("_MI_SSECTION_ADMENU3", "Artiklar");
define("_MI_SSECTION_ADMENU4", "R�ttigheter");
define("_MI_SSECTION_ADMENU5", "Block och Grupper");
define("_MI_SSECTION_ADMENU6", "Filtyper");
define("_MI_SSECTION_ADMENU7", "G� till modul");

define("_MI_SSECTION_ADMINHITS", "[Inneh�llsinst�llningar] R�kna tr�ffar f�r Admin?");
define("_MI_SSECTION_ADMINHITSDSC", "Till�t att r�knaren innefattar Admins tr�ffar?");
define("_MI_SSECTION_ALLOWSUBMIT", "[R�ttigheter] F�r anv�ndare skicka in artiklar?");
define("_MI_SSECTION_ALLOWSUBMITDSC", "Till�t anv�ndare att skicka in artiklar?");
define("_MI_SSECTION_ANONPOST", "[R�ttigheter] F�r anonyma anv�ndare skicka in artiklar?");
define("_MI_SSECTION_ANONPOSTDSC", "Till�t anonyma anv�ndare att skicka in artiklar?");
define("_MI_SSECTION_AUTHOR_INFO", "Utvecklare");
define("_MI_SSECTION_AUTHOR_WORD", "F�rfattaren har ordet");
define("_MI_SSECTION_AUTOAPP", "[R�ttigheter] Godk�nn inskickade artiklar automatiskt?");
define("_MI_SSECTION_AUTOAPPDSC", "Godk�nn inskickade artiklar automatiskt utan att n�gon moderator beh�ver granska dem?");
define("_MI_SSECTION_BCRUMB","[SKRIVARINST�LLNIGAR] Visa modulnamnet i utskriften?");
define("_MI_SSECTION_BCRUMBDSC","Om du v�ljer 'Ja' kommer artikelhuvudet visa: \"namn_p�_modul > kategorinamn > artikelnamn\". <br>Annars endast: \"kategorinamn > artikelnamn\".");
define("_MI_SSECTION_BOTH_FOOTERS","B�da sidf�tterna");
define("_MI_SSECTION_BY", "av");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY", "Kategoriobjekt");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC", "Meddelandeinst�llningar som g�ller denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY", "Ny artikel publicerad");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP", "Meddela mig n�r en ny artikel �r publicerad i denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC", "Ta emot meddelande n�r en ny artikel publiceras i denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande : Ny artikel publicerad i");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY", "'Artikel inskickad'");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP", "Meddela mig n�r en ny artikel �r inskickad i denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC", "Ta emot meddelande n�r en ny artikel skickats in till denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande : Ny artikel inskickad till");
define("_MI_SSECTION_CATLIST_IMG_W", "[FORMATINST�LLNINGAR] Bredd p� bild i kategorilista");
define("_MI_SSECTION_CATLIST_IMG_WDSC", "Specificera bredd p� kategoribild n�r kategorier listas.");
define("_MI_SSECTION_CATMAINIMG_W", "[FORMATINST�LLNINGAR] Bredd p� kategoribild");
define("_MI_SSECTION_CATMAINIMG_WDSC", "Specificera bredd p� kategoribild.");
define("_MI_SSECTION_CATPERPAGE", "[FORMATINST�LLNINGAR] Maximalt antal kategorier per sida (anv�ndare)?");
define("_MI_SSECTION_CATPERPAGEDSC", "Maximalt antal huvudkategorier per sida som kommer visas f�r anv�ndarna?");
define("_MI_SSECTION_CLONE", "[R�TTIGHETER] Till�t kloning av artiklar?");
define("_MI_SSECTION_CLONEDSC", "V�lj 'Ja' f�r att till�ta vissa anv�ndare med r�ttigheter att klona en artikel.");
define("_MI_SSECTION_COLLHEAD", "[FORMATINST�LLNINGAR] Visa +/- knapp?");
define("_MI_SSECTION_COLLHEADDSC", "V�lj 'Ja' f�r att f�rutom artiklarna �ven visa kategorisummeringen i +/- knappen. V�ljer du 'Nej' kommer ingen +/- knapp att visas");
define("_MI_SSECTION_COMMENTS", "[R�TTIGHETER] Kontrollera kommentarer p� artikelniv�?");
define("_MI_SSECTION_COMMENTSDSC", "V�lj 'Ja' f�r att endast tillg�ngligg�ra kommentarer f�r de objekt d�r kommentarer specifikt till�tits. V�lj 'Nej' f�r att hantera kommentarer p� global niv� (se nedan: 'Regler f�r kommentarer').");
define("_MI_SSECTION_DATEFORMAT", "[FORMATINST�LLNINGAR] Datumformat:");
define("_MI_SSECTION_DATEFORMATDSC", " Ex: \"d-M-Y H:i\" blir \"30-Mars-2004 22:35\"");
define("_MI_SSECTION_DEMO_SITE", "SmartFactory Demosida");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR", "Projektdeltagare");
define("_MI_SSECTION_DEVELOPER_CREDITS", "Credits");
define("_MI_SSECTION_DEVELOPER_EMAIL", "Email");
define("_MI_SSECTION_DEVELOPER_LEAD", "Huvudansvarig utvecklare");
define("_MI_SSECTION_DEVELOPER_WEBSITE", "Webbsida");
define("_MI_SSECTION_DISCOM", "[INNEH�LLSINST�LLNINGAR] Visa r�knare f�r kommentarer?");
define("_MI_SSECTION_DISCOMDSC", "V�lj 'Ja' f�r att visa r�knare f�r kommentarer i varje artikel");
define("_MI_SSECTION_DISDATECOL", "[INNEH�LLSINST�LLNINGAR] Visa kolumnen 'Publicerad den'?");
define("_MI_SSECTION_DISDATECOLDSC", "V�lj 'Ja' f�r att visa 'Publicerad den' n�r visningstyp 'Summering' �r vald p� index- och kategorisidan.");
define("_MI_SSECTION_DCS", "[INNEH�LLSINST�LLNINGAR] Visa kategorisummering?");
define("_MI_SSECTION_DCS_DSC", "V�lj 'Nej' f�r att inte visa summering p� kategorisidorna av de kategorier som inte har underkategorier.");
define("_MI_SSECTION_DISPLAY_CATEGORY", "Visa kategorinamnet?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "V�lj 'Ja' f�r att visa kategoril�nken i varje artikel");
define("_MI_SSECTION_DISPLAYTYPE_FULL", "Full vy");
define("_MI_SSECTION_DISPLAYTYPE_LIST", "Punktlista");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "WFSection stil");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY", "Summeringsvy");
define("_MI_SSECTION_DISSBCATDSC", "[INNEH�LLSINST�LLNINGAR] Visa beskrivning av underkategorier?");
define("_MI_SSECTION_DISSBCATDSCDSC", "V�lj 'Ja' f�r att visa en beskrivning av underkategorierna i index- och kategorisidan.");
define("_MI_SSECTION_DISTYPE", "[FORMATINST�LLNINGAR] Articles display type:");
define("_MI_SSECTION_DISTYPEDSC", "Om 'Summeringsvy' �r vald kommer endast titeln, datumet och antal tr�ffar p� varje artikel att visas i vald kategori. I 'Full vy' kommer artikeln visas i sin helhet.");
define("_MI_SSECTION_FILEUPLOADDIR", "Katalog f�r uppladdning av bifogade filer:");
define("_MI_SSECTION_FILEUPLOADDIRDSC", "Katalog d�r bifogade filer till artiklarna sparas. Inkludera inte '/' f�re och efter.");
define("_MI_SSECTION_FOOTERPRINT","[UTSKRIFTSINST�LLNINGAR] Skriv ut sidfot");
define("_MI_SSECTION_FOOTERPRINTDSC","Sidfot som kommer inkluderas i varje sida");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY", "Ny kategori");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP", "Meddela mig n�r en ny kategori skapats.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC", "Ta emot meddelande n�r en ny kategori skapats.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande : Ny kategori");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY", "Globala artiklar");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC", "Meddelandeinst�llningar som g�ller f�r samtliga artiklar.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY", "Nya artiklar publicerade");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "Meddela mig n�r nya artiklar �r publicerade.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "Ta emot meddelande n�r en ny artikel har publicerats.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Ny artikel har publicerats");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY", "Artikel inskickad");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP", "Meddela mig n�r en ny artikel �r inskickad och v�ntar p� att godk�nnas.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC", "Ta emot meddelande n�r en ny artikel �r inskickad och v�ntar p� att godk�nnas.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Ny artikel inskickad");
define("_MI_SSECTION_HEADERPRINT","[UTSKRIFTSINST�LLNINGAR] Skriv ut sidhuvud");
define("_MI_SSECTION_HEADERPRINTDSC","Sidhuvud som kommer inkluderas i varje sida");
define("_MI_SSECTION_HELP_CUSTOM", "Annan s�kv�g");
define("_MI_SSECTION_HELP_INSIDE", "I modulen");
define("_MI_SSECTION_HELP_PATH_CUSTOM", "S�kv�g till modulens hj�lpfiler");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC", "Om du valde 'Annan s�kv�g' i valet av s�kv�g till hj�lpfilerna s� specificera URL:en i formaet: http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT", "S�kv�g till modulens hj�lpfiler");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC", "V�lj vilka hj�lpfiler du vill anv�nda. Om du har laddat ner 'SmartSection's Help Package' och kopierat dem till 'modules/smartsection/doc/' s� kan du v�lja  'I modulen'. Det g�r ocks� att komma �t hj�lpfilerna direkt fr�n docs.xoops.org genom att v�lja det. Alternativt kan du v�lja 'Annan s�kv�g' och sj�lv specificera s�kv�gen i 'S�kv�g till modulens hj�lpfiler'");
define("_MI_SSECTION_HITSCOL", "[INNEH�LLSINST�LLNINGAR] Visa kolumnen 'Tr�ffar'?");
define("_MI_SSECTION_HITSCOLDSC", "Om du valt 'Summeringvy' s� v�lj 'Ja' f�r att visa kolumnen 'Tr�ffar' p� index- och kategorisidan.");
define("_MI_SSECTION_HLCOLOR", "[FORMATINST�LLNINGAR] Markeringsf�rg f�r nyckelord");
define("_MI_SSECTION_HLCOLORDSC", "F�rg p� nyckelordsmarkeringen i s�kfunktionen");
define("_MI_SSECTION_IMAGENAV", "[FORMATINST�LLNINGAR] Anv�nd bildnavigering:");
define("_MI_SSECTION_IMAGENAVDSC", "Om du v�ljer 'Ja' komer sidnavigeringen att visas med bilder. Annars kommer den generella sidnavigeringen att anv�ndas.");
define("_MI_SSECTION_INDEXFOOTER","[INNEH�LLSINST�LLNINGAR] Indexsidfot");
define("_MI_SSECTION_INDEXFOOTER_SEL","Indexsidfot");
define("_MI_SSECTION_INDEXFOOTERDSC","Sidfot som kommer visas p� modulens indexsida");
define("_MI_SSECTION_INDEXMSG", "[INNEH�LLSINST�LLNINGAR] V�lkomstmeddelande p� indexsidan:");
define("_MI_SSECTION_INDEXMSGDEF", "");
define("_MI_SSECTION_INDEXMSGDSC", "V�lkomstmeddelande som kommer visas p� modulens indexsida.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY", "Artikel godk�nd");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP", "Meddela mig n�r denna artikel godk�nts.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC", "Ta emot meddelande n�r denna artikel godk�nts.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Artikeln godk�nd");
define("_MI_SSECTION_ITEM_NOTIFY", "Artikel");
define("_MI_SSECTION_ITEM_NOTIFY_DSC", "Meddelandeinst�llningar f�r den nuvarande artikeln.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY", "Artikel avvisad");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP", "Meddela mig om denna artikel avvisas.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC", "Ta emot meddelande n�r denna artikel avvisas.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Artikeln avvisad");
define("_MI_SSECTION_ITEM_TYPE", "Objektstyp:");
define("_MI_SSECTION_ITEM_TYPEDSC", "V�lj vilken typ av objekt denna modul ska hantera.");
define("_MI_SSECTION_ITEMFOOTER", "[INNEH�LLSINST�LLNINGAR] Objektsidfot som kommer visas i varje artikel");
define("_MI_SSECTION_ITEMFOOTER_SEL", "Objektsidfot");
define("_MI_SSECTION_ITEMFOOTERDSC","Sidfot som kommer visas i varje artikel");
define("_MI_SSECTION_ITEMSMENU", "Kategorimenyblock");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "Tr�dblock");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "Lista �ver senaste objekt");
define("_MI_SSECTION_ITEMSPOT", "I rampljuset!");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "Slumpm�ssigt objekt!");
define("_MI_SSECTION_LASTITEM", "[INNEH�LLSINST�LLNINGAR] Visa kolumnen f�r senaste objekt?");
define("_MI_SSECTION_LASTITEMDSC", "V�lj 'Ja' f�r att visa senaste objekt i varje kategori p� index- och kategorisidan.");
define("_MI_SSECTION_LASTITEMS", "[INNEH�LLSINST�LLNINGAR] Visa lista �ver nyligen publicerade artiklar?");
define("_MI_SSECTION_LASTITEMSDSC", "V�lj 'Ja' f�r att visa listan l�ngst ner p� modulens indexsida");
define("_MI_SSECTION_LASTITSIZE", "[FORMATINST�LLNINGAR] Storlek p� titel:");
define("_MI_SSECTION_LASTITSIZEDSC", "V�lj maximal storlek p� titeln i kolumnen f�r senaste objekt.");
define("_MI_SSECTION_LINKPATH", "[FORMATINST�LLNINGAR] Visa l�nkar f�r nuvarande s�kv�g:");
define("_MI_SSECTION_LINKPATHDSC", "Till�ter anv�ndaren att klicka p� element i s�kv�gen som visas h�gst upp p� sidan");
define("_MI_SSECTION_MAX_HEIGHT", "[R�TTIGHETER] Maximal h�jd p� uppladdad bild");
define("_MI_SSECTION_MAX_HEIGHTDSC", "Maximal h�jd p� den bild som ska laddas upp.");
define("_MI_SSECTION_MAX_SIZE", "[R�TTIGHETER] Maximal filstorlek");
define("_MI_SSECTION_MAX_SIZEDSC", "Maximal filstorlek (i bytes) som kan ladas upp.");
define("_MI_SSECTION_MAX_WIDTH", "[R�TTIGHETER] Maximal bredd p� bild");
define("_MI_SSECTION_MAX_WIDTHDSC", "Maximal bredd p� den bild som ska laddas upp.");
define("_MI_SSECTION_MD_DESC", "Sektionshanteringssystem f�r din XOOPS-sida");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define("_MI_SSECTION_MODULE_BUG", "Bugrapportering f�r denna modul");
define("_MI_SSECTION_MODULE_DEMO", "Demosida");
define("_MI_SSECTION_MODULE_DISCLAIMER", "Disclaimer");
define("_MI_SSECTION_MODULE_FEATURE", "Ge f�rslag p� nya funktioner i denna modul");
define("_MI_SSECTION_MODULE_INFO", "Modulutvecklingsdetaljer");
define("_MI_SSECTION_MODULE_RELEASE_DATE", "Releasedatum");
define("_MI_SSECTION_MODULE_STATUS", "Status");
define("_MI_SSECTION_MODULE_SUBMIT_BUG", "Skicka in en bug");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE", "Skicka in en f�rfr�gan om nya funktioner");
define("_MI_SSECTION_MODULE_SUPPORT", "Officiell supportsida");
define("_MI_SSECTION_NO_FOOTERS","Inga");
define("_MI_SSECTION_ORDERBY", "[FORMATINST�LLNINGAR] Sorteringsordning");
define("_MI_SSECTION_ORDERBY_DATE", "Datum FALLANDE");
define("_MI_SSECTION_ORDERBY_TITLE", "Titel STIGANDE");
define("_MI_SSECTION_ORDERBY_WEIGHT", "Vikt STIGANDE");
define("_MI_SSECTION_ORDERBYDSC", "V�lj hur objekten ska sorteras i modulen.");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL", "Alla artiklar");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE", "Inga");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT", "F�reg�ende och n�sta artikel");
define("_MI_SSECTION_OTHERITEMS", "[FORMATINST�LLNINGAR] Visa andra artiklar:");
define("_MI_SSECTION_OTHERITEMSDSC", "V�lj hur du vill att de andra artiklarna ska visas i kategorierna p� artikelsidan.");
define("_MI_SSECTION_PERPAGE", "[FORMATINST�LLNINGAR] Max antal artiklar per sida (Adminsida):");
define("_MI_SSECTION_PERPAGEDSC", "Maximalt antal artiklar som kommer visas samtidigt p� adminsidan.");
define("_MI_SSECTION_PERPAGEINDEX", "[FORMATINST�LLNINGAR] Maximalt antal artiklar per sida (Anv�ndarsidan):");
define("_MI_SSECTION_PERPAGEINDEXDSC", "[UTSKRIFTSINST�LLNINGAR] Maximalt antal artiklar som kommer visas samtidigt p� anv�ndarsidan.");
define("_MI_SSECTION_PRINTLOGOURL","[UTSKRIFTSINST�LLNINGAR] URL:en f�r utskriftslogotypen");
define("_MI_SSECTION_PRINTLOGOURLDSC","URL:en till logotypen som kommer synas �verst p� utskriften");
define("_MI_SSECTION_RECENTITEMS", "Senaste objekt (i detalj)");
define("_MI_SSECTION_SHOW_RSS","[INNEH�LLSINST�LLNINGAR] Visa l�nk f�r str�mmande RSS");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "[INNEH�LLSINST�LLNINGAR] Visa underkategorier");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "Visa alla underkategorier");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "V�lj om du vill visa underkategorierna i kategorilistan p� index- och kategorisidan.");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "Visa inte underkategorier");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "Visa inga tomma underkategorier");
define("_MI_SSECTION_SUB_SMNAME1", "Skicka in en artikel");
define("_MI_SSECTION_SUB_SMNAME2", "Popul�ra artiklar");
define("_MI_SSECTION_SUBMITMSG", "[INNEH�LLSINST�LLNINGAR] Introduktionsmeddelande p� skicka in-sidan:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "Introduktionsmeddelande som kommer synas p� sidan f�r att skicka in artiklar.");
define("_MI_SSECTION_TITLE_SIZE", "[FORMATINST�LLNINGAR] Titelstorlek:");
define("_MI_SSECTION_TITLE_SIZEDSC", "Maximal storlek p� titeln f�r ett enskilt objekt.");
define("_MI_SSECTION_UPLOAD", "[PERMISSIONS] Filuppladdning f�r anv�ndare?");
define("_MI_SSECTION_UPLOADDSC", "Till�t anv�ndare att ladda upp filer f�r att l�nka till artiklar p� sidan?");
define("_MI_SSECTION_USEREALNAME", "[FORMATINST�LLNINGAR] Anv�nd anv�ndarnas riktiga namn");
define("_MI_SSECTION_USEREALNAMEDSC", "Om anv�ndaren har angivit sitt riktiga namn, s� anv�nd ist�llet det riktiga namnet n�r anv�ndarnamnet ska visas.");
define("_MI_SSECTION_VERSION_HISTORY", "Versionshistorik");
define("_MI_SSECTION_WARNING_BETA", "Det f�ljer inte med n�gra som helst garantier till denna modul. Detta �r en BETA-version vilket betyder att den fortfarande �r under testning. Utg�van �r menad f�r <b>testning enbart</b> och vi rekommenderar <b>starkt</b> att du inte anv�nder den i produktionsmilj�.");
define("_MI_SSECTION_WARNING_FINAL", "Det f�ljer inte med n�gra som helst garantier till denna modul. Detta �r inte en beta-version, men �r �nd� under utveckling. Utg�van kan anv�ndas i produktionsmilj� under egen risk, vilket betyder att utvecklarna sv�r sig fria fr�n olyckor orsakade av anv�ndandet av denna modul.");
define("_MI_SSECTION_WARNING_RC", "Det f�ljer inte med n�gra som helst garantier till denna modul. Modulen �r en Release Candidate och b�r inte anv�ndas i produktion. Det p�g�r fortfarande aktivt arbete med modulen och anv�ndandet sker under egen risk, vilket betyder att utgivarna inte kan g�ras ansvariga.");
define("_MI_SSECTION_WELCOME", "[INNEH�LLSINST�LLNINGAR] Visa titel och v�lkomstmeddelande.");
define("_MI_SSECTION_WELCOMEDSC", "V�lj 'Ja' f�r att visa standardv�lkomstmeddelandet f�ljt av meddelandet nedan. Om du v�ljer 'Nej' kommer ingen av dessa rader att visas.");
define("_MI_SSECTION_WHOWHEN", "[INNEH�LLSINST�LLNINGAR] Visa f�rfattare och datum?");
define("_MI_SSECTION_WHOWHENDSC", "V�lj 'Ja' f�r att visa f�rfattarens namn och datum i varje artikel.");
define("_MI_SSECTION_WYSIWYG", "[FORMATINST�LLNINGAR] Editor");
define("_MI_SSECTION_WYSIWYGDSC", "Vilken editor vill du anv�nda? F�r att anv�nda n�gon annan editor �n XOOPS-editorn m�ste den vara installerad p� din sida.");

define("_MI_SSECTION_PV_TEXT", "Begr�nsad l�sning av artikel");
define("_MI_SSECTION_PV_TEXTDSC", "Meddelande f�r artiklar som endast till�ter begr�nsad l�sning.");
define("_MI_SSECTION_PV_TEXT_DEF", "F�r att l�sa hela artikeln m�ste du registrera dig.");

define("_MI_SSECTION_SEOMODNAME", "Modulnamn f�r \"URL Rewriting\"");
define("_MI_SSECTION_SEOMODNAMEDSC", "Om modulen till�ter URL Rewriting �r detta namnet p� den modul som ska anv�ndas. T ex: http://dinsida.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT", "Visa r�knare f�r artiklar");
define("_MI_SSECTION_ARTCOUNTDSC", "V�lj 'Ja' f�r att visa r�knaren f�r artiklar i varje kategori i summeringstabellen. Observera att modulen i nul�get endast r�knar artiklar inom varje kategori utan att r�kna separat f�r underkategorierna.");

define("_MI_SSECTION_LATESTFILES", "Senaste uppladdade filer");

define("_MI_SSECTION_PATHSEARCH", "[FORMAT OPTIONS] Display category path in search results");
define("_MI_SSECTION_PATHSEARCHDSC", "");
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN", "Display sub-categories on index page only");
define("_MI_SSECTION_RATING_ENABLED", "Enable rating system");
define("_MI_SSECTION_RATING_ENABLEDDSC", "This features requires the SmartObject Framework");

define("_MI_SSECTION_DISPBREAD", "Display the breadcrumb");
define("_MI_SSECTION_DISPBREADDSC", "Breadcrumb navigation displays the current page's context within the site structure.");

define('_MI_SSECTION_DATE_TO_DATE', 'Articles from date to date');
?>