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
define("_MI_SSECTION_ADMENU4", "Rättigheter");
define("_MI_SSECTION_ADMENU5", "Block och Grupper");
define("_MI_SSECTION_ADMENU6", "Filtyper");
define("_MI_SSECTION_ADMENU7", "Gå till modul");

define("_MI_SSECTION_ADMINHITS", "[Innehållsinställningar] Räkna träffar för Admin?");
define("_MI_SSECTION_ADMINHITSDSC", "Tillåt att räknaren innefattar Admins träffar?");
define("_MI_SSECTION_ALLOWSUBMIT", "[Rättigheter] Får användare skicka in artiklar?");
define("_MI_SSECTION_ALLOWSUBMITDSC", "Tillåt användare att skicka in artiklar?");
define("_MI_SSECTION_ANONPOST", "[Rättigheter] Får anonyma användare skicka in artiklar?");
define("_MI_SSECTION_ANONPOSTDSC", "Tillåt anonyma användare att skicka in artiklar?");
define("_MI_SSECTION_AUTHOR_INFO", "Utvecklare");
define("_MI_SSECTION_AUTHOR_WORD", "Författaren har ordet");
define("_MI_SSECTION_AUTOAPP", "[Rättigheter] Godkänn inskickade artiklar automatiskt?");
define("_MI_SSECTION_AUTOAPPDSC", "Godkänn inskickade artiklar automatiskt utan att någon moderator behöver granska dem?");
define("_MI_SSECTION_BCRUMB","[SKRIVARINSTÄLLNIGAR] Visa modulnamnet i utskriften?");
define("_MI_SSECTION_BCRUMBDSC","Om du väljer 'Ja' kommer artikelhuvudet visa: \"namn_på_modul > kategorinamn > artikelnamn\". <br>Annars endast: \"kategorinamn > artikelnamn\".");
define("_MI_SSECTION_BOTH_FOOTERS","Båda sidfötterna");
define("_MI_SSECTION_BY", "av");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY", "Kategoriobjekt");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC", "Meddelandeinställningar som gäller denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY", "Ny artikel publicerad");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP", "Meddela mig när en ny artikel är publicerad i denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC", "Ta emot meddelande när en ny artikel publiceras i denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande : Ny artikel publicerad i");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY", "'Artikel inskickad'");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP", "Meddela mig när en ny artikel är inskickad i denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC", "Ta emot meddelande när en ny artikel skickats in till denna kategori.");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande : Ny artikel inskickad till");
define("_MI_SSECTION_CATLIST_IMG_W", "[FORMATINSTÄLLNINGAR] Bredd på bild i kategorilista");
define("_MI_SSECTION_CATLIST_IMG_WDSC", "Specificera bredd på kategoribild när kategorier listas.");
define("_MI_SSECTION_CATMAINIMG_W", "[FORMATINSTÄLLNINGAR] Bredd på kategoribild");
define("_MI_SSECTION_CATMAINIMG_WDSC", "Specificera bredd på kategoribild.");
define("_MI_SSECTION_CATPERPAGE", "[FORMATINSTÄLLNINGAR] Maximalt antal kategorier per sida (användare)?");
define("_MI_SSECTION_CATPERPAGEDSC", "Maximalt antal huvudkategorier per sida som kommer visas för användarna?");
define("_MI_SSECTION_CLONE", "[RÄTTIGHETER] Tillåt kloning av artiklar?");
define("_MI_SSECTION_CLONEDSC", "Välj 'Ja' för att tillåta vissa användare med rättigheter att klona en artikel.");
define("_MI_SSECTION_COLLHEAD", "[FORMATINSTÄLLNINGAR] Visa +/- knapp?");
define("_MI_SSECTION_COLLHEADDSC", "Välj 'Ja' för att förutom artiklarna även visa kategorisummeringen i +/- knappen. Väljer du 'Nej' kommer ingen +/- knapp att visas");
define("_MI_SSECTION_COMMENTS", "[RÄTTIGHETER] Kontrollera kommentarer på artikelnivå?");
define("_MI_SSECTION_COMMENTSDSC", "Välj 'Ja' för att endast tillgängliggöra kommentarer för de objekt där kommentarer specifikt tillåtits. Välj 'Nej' för att hantera kommentarer på global nivå (se nedan: 'Regler för kommentarer').");
define("_MI_SSECTION_DATEFORMAT", "[FORMATINSTÄLLNINGAR] Datumformat:");
define("_MI_SSECTION_DATEFORMATDSC", " Ex: \"d-M-Y H:i\" blir \"30-Mars-2004 22:35\"");
define("_MI_SSECTION_DEMO_SITE", "SmartFactory Demosida");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR", "Projektdeltagare");
define("_MI_SSECTION_DEVELOPER_CREDITS", "Credits");
define("_MI_SSECTION_DEVELOPER_EMAIL", "Email");
define("_MI_SSECTION_DEVELOPER_LEAD", "Huvudansvarig utvecklare");
define("_MI_SSECTION_DEVELOPER_WEBSITE", "Webbsida");
define("_MI_SSECTION_DISCOM", "[INNEHÅLLSINSTÄLLNINGAR] Visa räknare för kommentarer?");
define("_MI_SSECTION_DISCOMDSC", "Välj 'Ja' för att visa räknare för kommentarer i varje artikel");
define("_MI_SSECTION_DISDATECOL", "[INNEHÅLLSINSTÄLLNINGAR] Visa kolumnen 'Publicerad den'?");
define("_MI_SSECTION_DISDATECOLDSC", "Välj 'Ja' för att visa 'Publicerad den' när visningstyp 'Summering' är vald på index- och kategorisidan.");
define("_MI_SSECTION_DCS", "[INNEHÅLLSINSTÄLLNINGAR] Visa kategorisummering?");
define("_MI_SSECTION_DCS_DSC", "Välj 'Nej' för att inte visa summering på kategorisidorna av de kategorier som inte har underkategorier.");
define("_MI_SSECTION_DISPLAY_CATEGORY", "Visa kategorinamnet?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "Välj 'Ja' för att visa kategorilänken i varje artikel");
define("_MI_SSECTION_DISPLAYTYPE_FULL", "Full vy");
define("_MI_SSECTION_DISPLAYTYPE_LIST", "Punktlista");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "WFSection stil");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY", "Summeringsvy");
define("_MI_SSECTION_DISSBCATDSC", "[INNEHÅLLSINSTÄLLNINGAR] Visa beskrivning av underkategorier?");
define("_MI_SSECTION_DISSBCATDSCDSC", "Välj 'Ja' för att visa en beskrivning av underkategorierna i index- och kategorisidan.");
define("_MI_SSECTION_DISTYPE", "[FORMATINSTÄLLNINGAR] Articles display type:");
define("_MI_SSECTION_DISTYPEDSC", "Om 'Summeringsvy' är vald kommer endast titeln, datumet och antal träffar på varje artikel att visas i vald kategori. I 'Full vy' kommer artikeln visas i sin helhet.");
define("_MI_SSECTION_FILEUPLOADDIR", "Katalog för uppladdning av bifogade filer:");
define("_MI_SSECTION_FILEUPLOADDIRDSC", "Katalog där bifogade filer till artiklarna sparas. Inkludera inte '/' före och efter.");
define("_MI_SSECTION_FOOTERPRINT","[UTSKRIFTSINSTÄLLNINGAR] Skriv ut sidfot");
define("_MI_SSECTION_FOOTERPRINTDSC","Sidfot som kommer inkluderas i varje sida");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY", "Ny kategori");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP", "Meddela mig när en ny kategori skapats.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC", "Ta emot meddelande när en ny kategori skapats.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande : Ny kategori");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY", "Globala artiklar");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC", "Meddelandeinställningar som gäller för samtliga artiklar.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY", "Nya artiklar publicerade");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "Meddela mig när nya artiklar är publicerade.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "Ta emot meddelande när en ny artikel har publicerats.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Ny artikel har publicerats");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY", "Artikel inskickad");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP", "Meddela mig när en ny artikel är inskickad och väntar på att godkännas.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC", "Ta emot meddelande när en ny artikel är inskickad och väntar på att godkännas.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Ny artikel inskickad");
define("_MI_SSECTION_HEADERPRINT","[UTSKRIFTSINSTÄLLNINGAR] Skriv ut sidhuvud");
define("_MI_SSECTION_HEADERPRINTDSC","Sidhuvud som kommer inkluderas i varje sida");
define("_MI_SSECTION_HELP_CUSTOM", "Annan sökväg");
define("_MI_SSECTION_HELP_INSIDE", "I modulen");
define("_MI_SSECTION_HELP_PATH_CUSTOM", "Sökväg till modulens hjälpfiler");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC", "Om du valde 'Annan sökväg' i valet av sökväg till hjälpfilerna så specificera URL:en i formaet: http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT", "Sökväg till modulens hjälpfiler");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC", "Välj vilka hjälpfiler du vill använda. Om du har laddat ner 'SmartSection's Help Package' och kopierat dem till 'modules/smartsection/doc/' så kan du välja  'I modulen'. Det går också att komma åt hjälpfilerna direkt från docs.xoops.org genom att välja det. Alternativt kan du välja 'Annan sökväg' och själv specificera sökvägen i 'Sökväg till modulens hjälpfiler'");
define("_MI_SSECTION_HITSCOL", "[INNEHÅLLSINSTÄLLNINGAR] Visa kolumnen 'Träffar'?");
define("_MI_SSECTION_HITSCOLDSC", "Om du valt 'Summeringvy' så välj 'Ja' för att visa kolumnen 'Träffar' på index- och kategorisidan.");
define("_MI_SSECTION_HLCOLOR", "[FORMATINSTÄLLNINGAR] Markeringsfärg för nyckelord");
define("_MI_SSECTION_HLCOLORDSC", "Färg på nyckelordsmarkeringen i sökfunktionen");
define("_MI_SSECTION_IMAGENAV", "[FORMATINSTÄLLNINGAR] Använd bildnavigering:");
define("_MI_SSECTION_IMAGENAVDSC", "Om du väljer 'Ja' komer sidnavigeringen att visas med bilder. Annars kommer den generella sidnavigeringen att användas.");
define("_MI_SSECTION_INDEXFOOTER","[INNEHÅLLSINSTÄLLNINGAR] Indexsidfot");
define("_MI_SSECTION_INDEXFOOTER_SEL","Indexsidfot");
define("_MI_SSECTION_INDEXFOOTERDSC","Sidfot som kommer visas på modulens indexsida");
define("_MI_SSECTION_INDEXMSG", "[INNEHÅLLSINSTÄLLNINGAR] Välkomstmeddelande på indexsidan:");
define("_MI_SSECTION_INDEXMSGDEF", "");
define("_MI_SSECTION_INDEXMSGDSC", "Välkomstmeddelande som kommer visas på modulens indexsida.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY", "Artikel godkänd");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP", "Meddela mig när denna artikel godkänts.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC", "Ta emot meddelande när denna artikel godkänts.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Artikeln godkänd");
define("_MI_SSECTION_ITEM_NOTIFY", "Artikel");
define("_MI_SSECTION_ITEM_NOTIFY_DSC", "Meddelandeinställningar för den nuvarande artikeln.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY", "Artikel avvisad");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP", "Meddela mig om denna artikel avvisas.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC", "Ta emot meddelande när denna artikel avvisas.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} automeddelande: Artikeln avvisad");
define("_MI_SSECTION_ITEM_TYPE", "Objektstyp:");
define("_MI_SSECTION_ITEM_TYPEDSC", "Välj vilken typ av objekt denna modul ska hantera.");
define("_MI_SSECTION_ITEMFOOTER", "[INNEHÅLLSINSTÄLLNINGAR] Objektsidfot som kommer visas i varje artikel");
define("_MI_SSECTION_ITEMFOOTER_SEL", "Objektsidfot");
define("_MI_SSECTION_ITEMFOOTERDSC","Sidfot som kommer visas i varje artikel");
define("_MI_SSECTION_ITEMSMENU", "Kategorimenyblock");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "Trädblock");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "Lista över senaste objekt");
define("_MI_SSECTION_ITEMSPOT", "I rampljuset!");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "Slumpmässigt objekt!");
define("_MI_SSECTION_LASTITEM", "[INNEHÅLLSINSTÄLLNINGAR] Visa kolumnen för senaste objekt?");
define("_MI_SSECTION_LASTITEMDSC", "Välj 'Ja' för att visa senaste objekt i varje kategori på index- och kategorisidan.");
define("_MI_SSECTION_LASTITEMS", "[INNEHÅLLSINSTÄLLNINGAR] Visa lista över nyligen publicerade artiklar?");
define("_MI_SSECTION_LASTITEMSDSC", "Välj 'Ja' för att visa listan längst ner på modulens indexsida");
define("_MI_SSECTION_LASTITSIZE", "[FORMATINSTÄLLNINGAR] Storlek på titel:");
define("_MI_SSECTION_LASTITSIZEDSC", "Välj maximal storlek på titeln i kolumnen för senaste objekt.");
define("_MI_SSECTION_LINKPATH", "[FORMATINSTÄLLNINGAR] Visa länkar för nuvarande sökväg:");
define("_MI_SSECTION_LINKPATHDSC", "Tillåter användaren att klicka på element i sökvägen som visas högst upp på sidan");
define("_MI_SSECTION_MAX_HEIGHT", "[RÄTTIGHETER] Maximal höjd på uppladdad bild");
define("_MI_SSECTION_MAX_HEIGHTDSC", "Maximal höjd på den bild som ska laddas upp.");
define("_MI_SSECTION_MAX_SIZE", "[RÄTTIGHETER] Maximal filstorlek");
define("_MI_SSECTION_MAX_SIZEDSC", "Maximal filstorlek (i bytes) som kan ladas upp.");
define("_MI_SSECTION_MAX_WIDTH", "[RÄTTIGHETER] Maximal bredd på bild");
define("_MI_SSECTION_MAX_WIDTHDSC", "Maximal bredd på den bild som ska laddas upp.");
define("_MI_SSECTION_MD_DESC", "Sektionshanteringssystem för din XOOPS-sida");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define("_MI_SSECTION_MODULE_BUG", "Bugrapportering för denna modul");
define("_MI_SSECTION_MODULE_DEMO", "Demosida");
define("_MI_SSECTION_MODULE_DISCLAIMER", "Disclaimer");
define("_MI_SSECTION_MODULE_FEATURE", "Ge förslag på nya funktioner i denna modul");
define("_MI_SSECTION_MODULE_INFO", "Modulutvecklingsdetaljer");
define("_MI_SSECTION_MODULE_RELEASE_DATE", "Releasedatum");
define("_MI_SSECTION_MODULE_STATUS", "Status");
define("_MI_SSECTION_MODULE_SUBMIT_BUG", "Skicka in en bug");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE", "Skicka in en förfrågan om nya funktioner");
define("_MI_SSECTION_MODULE_SUPPORT", "Officiell supportsida");
define("_MI_SSECTION_NO_FOOTERS","Inga");
define("_MI_SSECTION_ORDERBY", "[FORMATINSTÄLLNINGAR] Sorteringsordning");
define("_MI_SSECTION_ORDERBY_DATE", "Datum FALLANDE");
define("_MI_SSECTION_ORDERBY_TITLE", "Titel STIGANDE");
define("_MI_SSECTION_ORDERBY_WEIGHT", "Vikt STIGANDE");
define("_MI_SSECTION_ORDERBYDSC", "Välj hur objekten ska sorteras i modulen.");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL", "Alla artiklar");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE", "Inga");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT", "Föregående och nästa artikel");
define("_MI_SSECTION_OTHERITEMS", "[FORMATINSTÄLLNINGAR] Visa andra artiklar:");
define("_MI_SSECTION_OTHERITEMSDSC", "Välj hur du vill att de andra artiklarna ska visas i kategorierna på artikelsidan.");
define("_MI_SSECTION_PERPAGE", "[FORMATINSTÄLLNINGAR] Max antal artiklar per sida (Adminsida):");
define("_MI_SSECTION_PERPAGEDSC", "Maximalt antal artiklar som kommer visas samtidigt på adminsidan.");
define("_MI_SSECTION_PERPAGEINDEX", "[FORMATINSTÄLLNINGAR] Maximalt antal artiklar per sida (Användarsidan):");
define("_MI_SSECTION_PERPAGEINDEXDSC", "[UTSKRIFTSINSTÄLLNINGAR] Maximalt antal artiklar som kommer visas samtidigt på användarsidan.");
define("_MI_SSECTION_PRINTLOGOURL","[UTSKRIFTSINSTÄLLNINGAR] URL:en för utskriftslogotypen");
define("_MI_SSECTION_PRINTLOGOURLDSC","URL:en till logotypen som kommer synas överst på utskriften");
define("_MI_SSECTION_RECENTITEMS", "Senaste objekt (i detalj)");
define("_MI_SSECTION_SHOW_RSS","[INNEHÅLLSINSTÄLLNINGAR] Visa länk för strömmande RSS");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "[INNEHÅLLSINSTÄLLNINGAR] Visa underkategorier");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "Visa alla underkategorier");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "Välj om du vill visa underkategorierna i kategorilistan på index- och kategorisidan.");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "Visa inte underkategorier");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "Visa inga tomma underkategorier");
define("_MI_SSECTION_SUB_SMNAME1", "Skicka in en artikel");
define("_MI_SSECTION_SUB_SMNAME2", "Populära artiklar");
define("_MI_SSECTION_SUBMITMSG", "[INNEHÅLLSINSTÄLLNINGAR] Introduktionsmeddelande på skicka in-sidan:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "Introduktionsmeddelande som kommer synas på sidan för att skicka in artiklar.");
define("_MI_SSECTION_TITLE_SIZE", "[FORMATINSTÄLLNINGAR] Titelstorlek:");
define("_MI_SSECTION_TITLE_SIZEDSC", "Maximal storlek på titeln för ett enskilt objekt.");
define("_MI_SSECTION_UPLOAD", "[PERMISSIONS] Filuppladdning för användare?");
define("_MI_SSECTION_UPLOADDSC", "Tillåt användare att ladda upp filer för att länka till artiklar på sidan?");
define("_MI_SSECTION_USEREALNAME", "[FORMATINSTÄLLNINGAR] Använd användarnas riktiga namn");
define("_MI_SSECTION_USEREALNAMEDSC", "Om användaren har angivit sitt riktiga namn, så använd istället det riktiga namnet när användarnamnet ska visas.");
define("_MI_SSECTION_VERSION_HISTORY", "Versionshistorik");
define("_MI_SSECTION_WARNING_BETA", "Det följer inte med några som helst garantier till denna modul. Detta är en BETA-version vilket betyder att den fortfarande är under testning. Utgåvan är menad för <b>testning enbart</b> och vi rekommenderar <b>starkt</b> att du inte använder den i produktionsmiljö.");
define("_MI_SSECTION_WARNING_FINAL", "Det följer inte med några som helst garantier till denna modul. Detta är inte en beta-version, men är ändå under utveckling. Utgåvan kan användas i produktionsmiljö under egen risk, vilket betyder att utvecklarna svär sig fria från olyckor orsakade av användandet av denna modul.");
define("_MI_SSECTION_WARNING_RC", "Det följer inte med några som helst garantier till denna modul. Modulen är en Release Candidate och bör inte användas i produktion. Det pågår fortfarande aktivt arbete med modulen och användandet sker under egen risk, vilket betyder att utgivarna inte kan göras ansvariga.");
define("_MI_SSECTION_WELCOME", "[INNEHÅLLSINSTÄLLNINGAR] Visa titel och välkomstmeddelande.");
define("_MI_SSECTION_WELCOMEDSC", "Välj 'Ja' för att visa standardvälkomstmeddelandet följt av meddelandet nedan. Om du väljer 'Nej' kommer ingen av dessa rader att visas.");
define("_MI_SSECTION_WHOWHEN", "[INNEHÅLLSINSTÄLLNINGAR] Visa författare och datum?");
define("_MI_SSECTION_WHOWHENDSC", "Välj 'Ja' för att visa författarens namn och datum i varje artikel.");
define("_MI_SSECTION_WYSIWYG", "[FORMATINSTÄLLNINGAR] Editor");
define("_MI_SSECTION_WYSIWYGDSC", "Vilken editor vill du använda? För att använda någon annan editor än XOOPS-editorn måste den vara installerad på din sida.");

define("_MI_SSECTION_PV_TEXT", "Begränsad läsning av artikel");
define("_MI_SSECTION_PV_TEXTDSC", "Meddelande för artiklar som endast tillåter begränsad läsning.");
define("_MI_SSECTION_PV_TEXT_DEF", "För att läsa hela artikeln måste du registrera dig.");

define("_MI_SSECTION_SEOMODNAME", "Modulnamn för \"URL Rewriting\"");
define("_MI_SSECTION_SEOMODNAMEDSC", "Om modulen tillåter URL Rewriting är detta namnet på den modul som ska användas. T ex: http://dinsida.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT", "Visa räknare för artiklar");
define("_MI_SSECTION_ARTCOUNTDSC", "Välj 'Ja' för att visa räknaren för artiklar i varje kategori i summeringstabellen. Observera att modulen i nuläget endast räknar artiklar inom varje kategori utan att räkna separat för underkategorierna.");

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