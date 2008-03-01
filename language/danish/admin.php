<?php

/**
* $Id: admin.php,v 1.66 2007/02/03 16:23:35 malanciault Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define('_AM_SSECTION_ABOUT', 'Om');
define('_AM_SSECTION_ACTION', 'Handling');
define('_AM_SSECTION_ACTIVEUSERS', 'Aktive brugere: %s');
define('_AM_SSECTION_ADD_OPT', 'Tilf�j %s flere underkategorier');
define('_AM_SSECTION_ADD_OPT_SUBMIT', 'Tilf�j');
define('_AM_SSECTION_ADMIN_CATS', 'V�lg kategorier, som hver gruppe skal kunne �ndre');
define('_AM_SSECTION_ADMINCOLMNGMT', 'Kategori vedligehold');
define('_AM_SSECTION_ALL', 'Alle');
define('_AM_SSECTION_ALL_EXP', '<b>Status</b> : Alle artikler i modulet, uanset deres status');
define('_AM_SSECTION_ALLITEMS', 'Alle artikler i modulet');
define('_AM_SSECTION_ALLITEMSMSG', 'V�lg en status, for at se alle artikler med den valgte status');
define('_AM_SSECTION_ALLOWCOMMENTS', 'Kan artiklen kommeteres?');
define('_AM_SSECTION_APPROVE', 'Godkend');
define('_AM_SSECTION_APPROVED', 'Godkendt');
define('_AM_SSECTION_APPROVED_MODERATE', 'Redig�r denne ');
define('_AM_SSECTION_APPROVESUB', 'Godkend denne');
define('_AM_SSECTION_APPROVING', 'Godkender');
define('_AM_SSECTION_ASC', 'Stigende');
define('_AM_SSECTION_AVAILABLE', '<span style=\'font-weight: bold; color: green;\'>Tilg�ngelig</span>');
define('_AM_SSECTION_AVAILABLE_PAGE_WRAP', 'Tilg�ngelige sider der kan omsluttes');
define('_AM_SSECTION_AVAILABLE_PAGE_WRAP_DSC', 'Her er de tilg�ngelige sider i BODY som kan omsluttes. Tryk p� side(n/rne) du gerne vil omslutte. Det virker med kun med XOOPS editor i �jeblikket. Tilf�j manuelt hvis du anvender en anden editor.');
define('_AM_SSECTION_BACK2IDX', 'Afbrudt. Du vender nu tilbage til hovedsiden');
define('_AM_SSECTION_BLOCKS', 'Blocksstyring');
define('_AM_SSECTION_BLOCKSANDGROUPS', 'Blockke og grupper');
define('_AM_SSECTION_BLOCKSGROUPSADMIN', 'Block og Grouppestyring');
define('_AM_SSECTION_BLOCKSTXT', 'Dette modul har f�lgende blocks som du kan indstille her i system modulet.');
define('_AM_SSECTION_BODY', 'Body');
define('_AM_SSECTION_BODY_DSC', 'Hoveddelen af artiklen<br><b>Input Indstillinger</b><span style=\'font-size: xx-small; font-weight: normal; display: block;\'><p>1-Den normale tekst & billeder med format</p>2- Side omsluttes som f�lgende<p>[pagewrap=filename.html]</p><p>Or</p>[pagewrap=filename_1.html]<br>[pagebreak] <i>Dette sideomslutter</i><br>[pagewrap=filename_2.html]<br>osv ... <p>Or</p><p>[pagewrap=filename_1.html]<br>[pagewrap=filename_2.html]<br><i>dette kombinerer sider</i><p>For at sideomslutte, opload den n�dvendige html-side(r) p� yoursite.com/uploads/smartsection/content, eller simpelthen anvend pagewrap Oploader i bunden af denne side.</p><p>Bem�rk at lige under \'body feltet\' kan du se en liste over de tilg�ngelige sider du kan inds�tte ved at klikke p� den �nskede side.</p></span>');
define('_AM_SSECTION_BODY_REQ', 'Body*');
define('_AM_SSECTION_BODY_SELECTFILE', 'Body : Sideomslut');
define('_AM_SSECTION_BODY_SELECTFILE_DSC', 'V�lg den fil som denne artikel skal anvende som body.');
define('_AM_SSECTION_BUTTON_CANCEL', 'Afbryd');
define('_AM_SSECTION_BUTTON_DELETE', 'Slet');
define('_AM_SSECTION_BUTTON_EDIT', 'Ret');
define('_AM_SSECTION_BUTTON_SEARCH', 'S�g');
define('_AM_SSECTION_BUTTON_SUBMIT', 'Gem');
define('_AM_SSECTION_BUTTON_UPDATE', 'Opdater');
define('_AM_SSECTION_BY', 'efter');
define('_AM_SSECTION_CANCEL', 'Afbryd');
define('_AM_SSECTION_CAT_ITEMS', 'Artikler');
define('_AM_SSECTION_CAT_ITEMS_DSC', 'Artikler i denne kategori');
define('_AM_SSECTION_CATCOLNAME', 'Titel');
define('_AM_SSECTION_CATCREATED', 'Den nye kategori blev skabt og gemt!');
define('_AM_SSECTION_CATEGORIES', 'Kategorier');
define('_AM_SSECTION_CATEGORIES_DSC', 'Her er en liste over alle oprettede kategorier i modulet.');
define('_AM_SSECTION_CATEGORIES_TITLE', 'Oprettede kategorier');
define('_AM_SSECTION_CATEGORY', 'Kategori');
define('_AM_SSECTION_CATEGORY_CREATE', 'Opret kategori');
define('_AM_SSECTION_CATEGORY_CREATE_INFO', 'Udfyld f�lgende form for at skabe en ny kategori. Den nye kategori vil automatisk blive vist p� brugersiden.');
define('_AM_SSECTION_CATEGORY_DSC', 'Artiklens kategori.');
define('_AM_SSECTION_CATEGORY_EDIT_INFO', 'Du kan rette denne kategori. �ndringer vil �jeblikkelig v�re synlig p� brugersiden.');
define('_AM_SSECTION_CATEGORY_HEADER', 'Kategori header');
define('_AM_SSECTION_CATEGORY_HEADER_DSC', '');
define('_AM_SSECTION_CATEGORY_META_DESCRIPTION', 'Meta Beskrivelse');
define('_AM_SSECTION_CATEGORY_META_DESCRIPTION_DSC', 'For at hj�lpe s�gemaskinerne kan du udfylde en meta-beskrivelse i feltet. Hvis du lader det v�re blankt, vil det automatisk blive fyldt med beskrivelsen for den tilh�rende kategori.');
define('_AM_SSECTION_CATEGORY_META_KEYWORDS', 'Meta Stikord');
define('_AM_SSECTION_CATEGORY_META_KEYWORDS_DSC', 'For at hj�lpe s�gemaskinerne, kan du skr�ddersy dine stikord for denne kategori. Hvis du lader feltet v�re blanks, vil det automatisk blive opfyldt med ord fra beskrivelsen af denne kategori.');
define('_AM_SSECTION_CATEGORY_REQ', 'Kategori*');
define('_AM_SSECTION_CATEGORY_SAVE_ERROR', 'Der skete en fejl ved oprettelsen af denne kategori. Her er en liste over fejl(ene) :');
define('_AM_SSECTION_CATEGORY_SHORT_URL', 'Kort URL');
define('_AM_SSECTION_CATEGORY_SHORT_URL_DSC', '"N�r du bruger SEO muligheden i dette modul kan du specificere en kort URL for denne kategori. Dette felt er valgfrit.');
define('_AM_SSECTION_CATHEADER', 'Kategoristyring');
define('_AM_SSECTION_CATID', 'ID');
define('_AM_SSECTION_CLEAR', 'Ryd');
define('_AM_SSECTION_CLONE_ITEM', 'Dupliker artikler');
define('_AM_SSECTION_CLONE_NEW', 'Duplikerer artikel');
define('_AM_SSECTION_COLDESCRIPT', 'Kategori beskrivelse');
define('_AM_SSECTION_COLISDELETED', 'Kategorien %s er slettet');
define('_AM_SSECTION_COLMODIFIED', 'Kategorien blev �ndret!.');
define('_AM_SSECTION_COLPOSIT', 'Kategoriens position');
define('_AM_SSECTION_CREATE', 'Opret');
define('_AM_SSECTION_CREATECATEGORY', 'Opret en ny kategori');
define('_AM_SSECTION_CREATED', 'Oprettet');
define('_AM_SSECTION_CREATEITEM', 'Opret en artikel');
define('_AM_SSECTION_CREATEITEM_PAGEWRAP', 'Opret sideomslutning');
define('_AM_SSECTION_CREATESMARTITEM', 'Opret en ny artikel');
define('_AM_SSECTION_CREATETHEDIR', 'opret mappen');
define('_AM_SSECTION_CREATINGNEW', 'opretter ny');
define('_AM_SSECTION_DATESUB', 'Udgivelsesdato');
define('_AM_SSECTION_DATESUB_DSC', 'v�lg dato for udgivelse');
define('_AM_SSECTION_DB_CHECKTABLES', 'Unders�g tabeller');
define('_AM_SSECTION_DB_CURRENTVER', 'Denne version: <span class=\'currentVer\'>%s</span>');
define('_AM_SSECTION_DB_DBVER', 'Database Version %s');
define('_AM_SSECTION_DB_MSG_ADD_DATA', 'Data tilf�jet i tabel %s');
define('_AM_SSECTION_DB_MSG_ADD_DATA_ERR', 'Fejl ved tilf�relse af data i tabel %s');
define('_AM_SSECTION_DB_MSG_CHGFIELD', '�ndrer feltet %s i tabellen %s');
define('_AM_SSECTION_DB_MSG_CHGFIELD_ERR', 'Fejl ved �ndring af felt %s i tabellen %s');
define('_AM_SSECTION_DB_MSG_CREATE_TABLE', 'Tabel %s oprettet!');
define('_AM_SSECTION_DB_MSG_CREATE_TABLE_ERR', 'fejl ved oprettelse af tabel %s');
define('_AM_SSECTION_DB_MSG_NEWFIELD', 'Feltet %s blev tilf�jet!');
define('_AM_SSECTION_DB_MSG_NEWFIELD_ERR', 'Fejl ved tilf�jelsen af feltet %s');
define('_AM_SSECTION_DB_NEEDUPDATE', 'Din database er for�ldet. Opgrader venligst dine database tabeller!');
define('_AM_SSECTION_DB_NEEDUPDATE_WARNING', 'ADVARSEL : SmartFactory anbefaler st�rkt at du laver backup af alle SmartFactory tabeller f�r du starter dette opgraderings script.');
define('_AM_SSECTION_DB_NOUPDATE', 'Din Database er ajour. Ingen opgraderinger er n�dvendige.');
define('_AM_SSECTION_DB_UPDATE_DB', 'Opdaterer Database');
define('_AM_SSECTION_DB_UPDATE_ERR', 'Fejl ved opdatering til version %s');
define('_AM_SSECTION_DB_UPDATE_NOW', 'Opdater nu!');
define('_AM_SSECTION_DB_UPDATE_OK', 'Database blev opdateret til version %s');
define('_AM_SSECTION_DB_UPDATE_TO', 'Opdaterer til version %s');
define('_AM_SSECTION_DELETE', 'Slet');
define('_AM_SSECTION_DELETE_CAT_CONFIRM', 'V�r opm�rksom p� at ved at slette en kategori, bliver alle underkategorier og artiklen i denne kategori ogs� slettet sammen med alle kommentarer som m�tte v�re tilknyttet artiklerne. Er du sikker p� du vil slette denne kategori ?');
define('_AM_SSECTION_DELETE_CAT_ERROR', 'Der opstod en fejl ved sletningen af denne kategori.');
define('_AM_SSECTION_DELETECOL', 'Slet kategori');
define('_AM_SSECTION_DELETEFILE', 'Slet fil');
define('_AM_SSECTION_DELETEITEM', 'Slet artikel');
define('_AM_SSECTION_DELETETHISFILE', 'Er du sikker p� du vil slette denne fil ?');
define('_AM_SSECTION_DELETETHISITEM', 'Slet denne fil ?');
define('_AM_SSECTION_DESC', 'Faldende');
define('_AM_SSECTION_DESCRIP', 'Kategori beskrivelse');
define('_AM_SSECTION_DESCRIPTION', 'Beskrivelse');
define('_AM_SSECTION_DIRCREATED', 'Mappen blev oprettet ');
define('_AM_SSECTION_DIRNOTCREATED', 'Mappen kunne ikke oprettes ');
define('_AM_SSECTION_EDITCOL', 'Ret kategori');
define('_AM_SSECTION_EDITFILE', 'Ret fil');
define('_AM_SSECTION_EDITING', 'retter');
define('_AM_SSECTION_EDITITEM', 'Ret artiklen');
define('_AM_SSECTION_ERROR', ' En fejl opstod.');
define('_AM_SSECTION_ERROR_ITEM_NOT_SAVED', 'En fejl opstod. Artiklen blev ikke gemt i databasen.');
define('_AM_SSECTION_FDELETED', 'Filen er slettet');
define('_AM_SSECTION_FILE', 'Filer');
define('_AM_SSECTION_FILE_ADD', 'Tilf�j en fil');
define('_AM_SSECTION_FILE_ADDING', 'Tilf�j en ny fil');
define('_AM_SSECTION_FILE_ADDING_DSC', 'Udfyld venligst denne form for at filf�je en fil til denne artikel.');
define('_AM_SSECTION_FILE_DELETE_ERROR', 'En fejl opstod mens filen blev slettet.');
define('_AM_SSECTION_FILE_DESCRIPTION', 'Beskrivelse');
define('_AM_SSECTION_FILE_DESCRIPTION_DSC', 'Beskrivelse af filen der skal oploades.');
define('_AM_SSECTION_FILE_EDITING', 'Ret en fil');
define('_AM_SSECTION_FILE_EDITING_DSC', 'Du kan rette denne fil. �ndringer vil �jeblikkelig ses p� brugersiden.');
define('_AM_SSECTION_FILE_EDITING_ERROR', 'En fejl opstod under opdateringen af filen.');
define('_AM_SSECTION_FILE_EDITING_SUCCESS', 'Filen blev rettet!.');
define('_AM_SSECTION_FILE_INFORMATIONS', 'Files informationer');
define('_AM_SSECTION_FILE_NAME', 'Navn');
define('_AM_SSECTION_FILE_NAME_DSC', 'Navn som anvendes til at identificere filen.');
define('_AM_SSECTION_FILE_STATUS', 'Filen er synlig ?');
define('_AM_SSECTION_FILE_STATUS_DSC', 'hvis du v�lger nej vil filen ikke v�re synlig p� brugersiden.');
define('_AM_SSECTION_FILE_TO_UPLOAD', 'Filen der skal oploades :');
define('_AM_SSECTION_FILE_UPLOAD_ANOTHER', 'Opload igen');
define('_AM_SSECTION_FILEISDELETED', 'Filen blev slettet!');
define('_AM_SSECTION_FILENAME', 'Filens navn');
define('_AM_SSECTION_FILES_LINKED', 'Filer h�ftet til denne artikel');
define('_AM_SSECTION_FILEUPLOAD_ERROR', 'En fejl opstod da filen blev oploaded.');
define('_AM_SSECTION_FILEUPLOAD_SUCCESS', 'Filen blev oploaded!.');
define('_AM_SSECTION_FINDUSERS', 'Find brugere');
define('_AM_SSECTION_GOMOD', 'G� til modulet');
define('_AM_SSECTION_GROUPS', 'Gruppestyring');
define('_AM_SSECTION_GROUPSINFO', 'Indstil modul og blockkes rettigheder for hver gruppe');
define('_AM_SSECTION_HELP', 'Hj�lp');
define('_AM_SSECTION_HITS', 'Hits');
define('_AM_SSECTION_ICO_DELETE', 'Slet');
define('_AM_SSECTION_ICO_EDIT', 'Ret');
define('_AM_SSECTION_ICO_OFFLINE', 'Offline');
define('_AM_SSECTION_ICO_ONLINE', 'Online');
define('_AM_SSECTION_ID', 'Id');
define('_AM_SSECTION_IMAGE', 'Kategori Ikon');
define('_AM_SSECTION_IMAGE_DSC', 'Billede der repr�senterer kategorien');
define('_AM_SSECTION_IMAGE_ITEM', 'Artikel Ikon');
define('_AM_SSECTION_IMAGE_ITEM_DSC', 'Billede der repr�senterer artiklen');
define('_AM_SSECTION_IMAGE_UPLOAD', 'Ikon opload');
define('_AM_SSECTION_IMAGE_UPLOAD_DSC', 'V�lg et billede p� din computer. Billedet vil blive oploaded og sat som ikon for kategorien.');
define('_AM_SSECTION_IMAGE_UPLOAD_ITEM_DSC', 'V�lg et billede p� din computer. <br />Dette billede bliver oploaded til siden <br />og brugt som artiklens ikon.');
define('_AM_SSECTION_IMAGEPATH', 'Kategorien gemmer billedet : ');

define('_AM_SSECTION_IMPORT', 'Importer');
define('_AM_SSECTION_IMPORTED_COMMENT', 'Kommentar \'%s\' importeret.');
define('_AM_SSECTION_IMPORTED_COMMENT_ERROR', 'Fejl under import af kommentar \'%s\'');
define('_AM_SSECTION_IMPORT_COMMENTS', 'Importerer artiklens kommentarer');
define('_AM_SSECTION_IMPORT_ALL_PARTNERS', 'Alle artikler');
define('_AM_SSECTION_IMPORTED_ARTICLE_FILE', 'vedh�ftede fil %s blev importeret');
define('_AM_SSECTION_IMPORT_ARTICLE_ERROR', 'Fejl ved import af artikel <em>%s</em>');
define('_AM_SSECTION_IMPORT_ARTICLE_WRAP', 'Den sideomsluttede fil %s blev kopieret til modulets indholds mappe.');
define('_AM_SSECTION_IMPORT_AUTOAPPROVE', 'Auto-godkend');
define('_AM_SSECTION_IMPORT_BACK', 'Tilbage til importeringssiden');
define('_AM_SSECTION_IMPORT_CATEGORIES', 'Kategorier der skal importeres');
define('_AM_SSECTION_IMPORT_CATEGORIES_DSC', 'Her er kategorierne der vil blive importeret i  SmartSection');
define('_AM_SSECTION_IMPORT_CATEGORY_ERROR', 'Fejl under import af kategorien <em>%s</em>.');
define('_AM_SSECTION_IMPORT_CATEGORY_SUCCESS', 'Kategorien <em>%s</em> blev importeret.');
define('_AM_SSECTION_IMPORT_ERROR', 'En fejl opstod under import af artikel.');
define('_AM_SSECTION_IMPORT_FILE_NOT_FOUND', 'Import file not found at <b>%s</b>');
define('_AM_SSECTION_IMPORT_FROM', 'Importerer fra %s');
define('_AM_SSECTION_IMPORT_GOTOMODULE', 'G� til hovedsiden af SmartSection');
define('_AM_SSECTION_IMPORT_INFO', 'Du kan direkte importerer artikler i SmartSection. V�lg fra hvilken modul du gerne vil importere artikler fra, og tryk p� \'importer\'.<br><b>K�r kunne denne service e�n gang, ellers, f�r du dobbeltg�ngere bland artiklerne</b>');
define('_AM_SSECTION_IMPORT_MODULE_FOUND', '%s modulblev fundet. Der er %s artikler og %s kategorier der kan blive importeret.');
define('_AM_SSECTION_IMPORT_MODULE_FOUND_NO_ITEMS', '%s modulet blev fundet men der er ingen artikler der kan importeres.');
define('_AM_SSECTION_IMPORT_NOCATSELECTED', 'Ingen kategori blev valgt til import.');
define('_AM_SSECTION_IMPORT_NO_MODULE', 'Da der ikke er andre underst�ttede artikel moduler installeret p� dette website, er der ingen artikler tilg�ngelige for import.');
define('_AM_SSECTION_IMPORT_PARENT_CATEGORY', 'Hoved kategori');
define('_AM_SSECTION_IMPORT_PARENT_CATEGORY_DSC', 'Importer alle kategorier i denne hovedkategori.');
define('_AM_SSECTION_IMPORT_PARTNER_ERROR', 'En fejl opstod under import af \'%s\'.');
define('_AM_SSECTION_IMPORT_RESULT', 'Her er resultatet af importen.');
define('_AM_SSECTION_IMPORT_SETTINGS', 'Import indstillinger');
define('_AM_SSECTION_IMPORT_SUCCESS', 'Artiklerne blev importeret med success.');
define('_AM_SSECTION_IMPORT_TITLE', 'Importer artikler');
define('_AM_SSECTION_IMPORTED_ARTICLE', 'Importerede artikler : <em>%s</em>');
define('_AM_SSECTION_IMPORTED_ARTICLES', 'Artikler importeret : <em>%s</em>');
define('_AM_SSECTION_IMPORTED_CATEGORY', 'Importered categori : <em>%s</em>');
define('_AM_SSECTION_IMPORTED_CATEGORIES', 'Kategorier importeret : <em>%s</em>');
define('_AM_SSECTION_IMPORT_SELECTION', 'Importer valgte');
define('_AM_SSECTION_IMPORT_SELECT_FILE', 'Artikler');
define('_AM_SSECTION_IMPORT_SELECT_FILE_DSC', 'V�lg modulet fra hvilket der skal importeres.');

define('_AM_SSECTION_INACTIVEUSERS', 'Inaktive brugere: %s');
define('_AM_SSECTION_INDEX', 'Index');
define('_AM_SSECTION_INVENTORY', 'Modul resume');
define('_AM_SSECTION_ITEM', 'Artikel');
define('_AM_SSECTION_ITEM_CREATING', 'Opretter ny artikel');
define('_AM_SSECTION_ITEM_CREATING_DSC', 'Udfyld venligst formen for at oprette ny artikel.');
define('_AM_SSECTION_ITEM_DELETE_ERROR', 'En fejl opstod under sletningen af denne artikel.');
define('_AM_SSECTION_ITEM_DUPLICATING', 'Duplikerer en artikel');
define('_AM_SSECTION_ITEM_DUPLICATING_DSC', 'Ret i denne form for at lave en ny artikel udfra en anden artikel.');
define('_AM_SSECTION_ITEM_EDIT', 'Ret denne artikel');
define('_AM_SSECTION_ITEM_INFORMATIONS', 'Klassehandlingen passer med informationerne');
define('_AM_SSECTION_ITEM_META_DESCRIPTION', 'Meta Beskrivelse');
define('_AM_SSECTION_ITEM_META_DESCRIPTION_DSC', 'For at hj�lpe s�gemaskinerne kan du udfylde en meta-beskrivelse i feltet. Hvis du lader det v�re blankt, vil det automatisk blive fyldt med resume�t for den tilh�rende artikel.');
define('_AM_SSECTION_ITEM_META_KEYWORDS', 'Meta stikord');
define('_AM_SSECTION_ITEM_META_KEYWORDS_DSC', 'For at hj�lpe s�gemaskiner kan du her n�vne nogle stikord som du gerne vil anvende til artiklen. Hvis du lader det v�re blankt bliver det automatisk fyldt med ord fra resumefeltet i denne artikel.');
define('_AM_SSECTION_ITEM_RECEIVED_NEED_APPROVAL', 'Din artikel er indsendt, og vil blive vist n�r godkendt af en moderator.<br />Mange tak for dit bidrag !');
define('_AM_SSECTION_ITEM_REJECTED', 'Denne artikel er afvist.');
define('_AM_SSECTION_ITEM_SHORT_URL', 'Kort URL');
define('_AM_SSECTION_ITEM_SHORT_URL_DSC', 'N�r du bruger s�geoptimeringen i dette modul, kan du angive en kort URL til denne artikel.
Feltet er valgfrit.');
define('_AM_SSECTION_ITEMCAT', 'Kategori');
define('_AM_SSECTION_ITEMCATEGORYNAME', 'Kategori');
define('_AM_SSECTION_ITEMCOLNAME', 'Titel');
define('_AM_SSECTION_ITEMCREATEDOK', 'Artiklen blev oprettet og udgivet!');
define('_AM_SSECTION_ITEMDESC', 'Beskrivelse');
define('_AM_SSECTION_ITEMID', 'ID');
define('_AM_SSECTION_ITEMISDELETED', 'Artiklen er slettet.');
define('_AM_SSECTION_ITEMMODIFIED', 'Artiklen blev redigeret.');
define('_AM_SSECTION_ITEMNOTCREATED', 'Desv�rre. Det var ikke muligt at oprette denne artikel.');
define('_AM_SSECTION_ITEMNOTUPDATED', 'Desv�rre. Det var ikke muligt at redigere denne artikel.');
define('_AM_SSECTION_ITEMS', 'Artikler');
define('_AM_SSECTION_LIMIT', 'Brugere pr.side');
define('_AM_SSECTION_MESSAGE_ADD_MIME_ERROR', 'FEJL: Filtypen blev ikke tilf�jet.');
define('_AM_SSECTION_MESSAGE_DELETE_MIME_ERROR', 'FEJL: Filtypen blev ikke slettet.');
define('_AM_SSECTION_MESSAGE_EDIT_MIME_ERROR', 'FEJL: Filtypen blive ikke opdateret.');
define('_AM_SSECTION_MESSAGE_NO_ID', 'FEJL: ID blev ikke angivet.');
define('_AM_SSECTION_MESSAGE_NO_VALUE', 'FEJL: Filtypens endelse ikke angivet.');
define('_AM_SSECTION_MIME_ADD_TITLE', 'Tilf�j filtype');
define('_AM_SSECTION_MIME_ADMIN', 'Administration');
define('_AM_SSECTION_MIME_ADMINF', 'Tillad administrator filtyper');
define('_AM_SSECTION_MIME_ADMINFINFO', '<b>Filtyper der er tilladt for administrator uploads</b>');
define('_AM_SSECTION_MIME_CANCEL', 'Fortryd');
define('_AM_SSECTION_MIME_CLEAR', 'Nulstil');
define('_AM_SSECTION_MIME_CREATE', 'Opret');
define('_AM_SSECTION_MIME_CREATED', 'Filtype information oprettet');
define('_AM_SSECTION_MIME_CREATEF', 'Opret filtype');
define('_AM_SSECTION_MIME_DELETE', 'Slet');
define('_AM_SSECTION_MIME_DELETETHIS', 'Slet valgte filtyper?');
define('_AM_SSECTION_MIME_EDIT_TITLE', 'Redig�r filtyper');
define('_AM_SSECTION_MIME_EXT', 'EXT');
define('_AM_SSECTION_MIME_EXTF', 'Fil endelse');
define('_AM_SSECTION_MIME_EXTFIND', 'Search File Extension<div style=\'padding-top: 8px;\'><span style=\'font-weight: normal;\'>Enter file extension you wish to search.</span></div>');
define('_AM_SSECTION_MIME_FINDIT', 'Get Extension!');
define('_AM_SSECTION_MIME_FINDMIMETYPE', 'Find New Mimetype?');
define('_AM_SSECTION_MIME_ID', 'ID');
define('_AM_SSECTION_MIME_INFOTEXT', '<ul><li>New mimetypes can be created, edit or deleted easily via this form.</li> <li>Search for a new mimetypes via an external website.</li> <li>View displayed mimetypes for Admin and User uploads.</li> <li>Change mimetype upload status.</li></ul>');
define('_AM_SSECTION_MIME_MANAGE_TITLE', 'Mimetypes Management');
define('_AM_SSECTION_MIME_MIMEDELETED', 'Mimetype %s has been deleted');
define('_AM_SSECTION_MIME_MODIFIED', 'Mimetype Information Modified');
define('_AM_SSECTION_MIME_MODIFY', 'Modify');
define('_AM_SSECTION_MIME_MODIFYF', 'Modify Mimetype');
define('_AM_SSECTION_MIME_NAME', 'Application Type');
define('_AM_SSECTION_MIME_NAMEF', 'Application Type/Name<div style=\'padding-top: 8px;\'><span style=\'font-weight: normal;\'>Enter application associated with this extension.</span></div>');
define('_AM_SSECTION_MIME_NOMIMEINFO', 'No mimetypes selected.');
define('_AM_SSECTION_MIME_SEARCH', 'Mimetypes Search');
define('_AM_SSECTION_MIME_TYPEF', 'Mimetypes<div style=\'padding-top: 8px;\'><span style=\'font-weight: normal;\'>Enter each mimetype associated with the file extension. Each mimetype must be seperated with a space.</span></div>');
define('_AM_SSECTION_MIME_USER', 'User');
define('_AM_SSECTION_MIME_USERF', 'Allowed User Mimetype');
define('_AM_SSECTION_MIME_USERFINFO', '<b>Mimetypes that are available for User uploads</b>');
define('_AM_SSECTION_MIMETYPES', 'Mimetypes');
define('_AM_SSECTION_MINDEX_ACTION', 'Action');
define('_AM_SSECTION_MINDEX_PAGE', '<b>Page</b> ');
define('_AM_SSECTION_MODADMIN', 'Module Admin :');
define('_AM_SSECTION_MODIFY', 'Modify');
define('_AM_SSECTION_MODIFYCAT', 'Modify category');
define('_AM_SSECTION_MODIFYTHISCAT', 'Modify this category?');
define('_AM_SSECTION_NB_SUBCATS', 'Number of categories to add:<br><br>Enter number then press \'Add\'');
define('_AM_SSECTION_NEED_CATEGORY_ITEM', 'To create an article, you must first create a category.');
define('_AM_SSECTION_NO', 'No');
define('_AM_SSECTION_NOCAT', 'No categories to display');
define('_AM_SSECTION_NOCOLTOEDIT', 'There are no categories to edit!');
define('_AM_SSECTION_NOFILE', 'This article does not have any attached files.');
define('_AM_SSECTION_NOFILESELECTED', 'No file selected.');
define('_AM_SSECTION_NOFOUND', 'No users match the required string.');
define('_AM_SSECTION_NOITEMS', 'There are no published articles.');
define('_AM_SSECTION_NOITEMS_OFFLINE', 'There are no offline articles.');
define('_AM_SSECTION_NOITEMS_REJECTED', 'There are no rejected articles.');
define('_AM_SSECTION_NOITEMS_SUBMITTED', 'There are no submitted article.');
define('_AM_SSECTION_NOITEMSELECTED', 'No article selected !');
define('_AM_SSECTION_NOITEMSSEL', 'Sorry. There are no articles in the selected state.');
define('_AM_SSECTION_NONE', 'None');
define('_AM_SSECTION_NOPERMSSET', 'Permission cannot be set : No categories created yet! Please create a category first.');
define('_AM_SSECTION_NOSUBCAT', 'There is no sub categories created yet');
define('_AM_SSECTION_NOTAVAILABLE', '<span style=\'font-weight: bold; color: red;\'>Not available</span>');
define('_AM_SSECTION_NOTUPDATED', 'There was an error updating the database!');
define('_AM_SSECTION_OFFLINE', 'Offline');
define('_AM_SSECTION_OFFLINE_CREATED_SUCCESS', 'The article has been successfully created and put offline.');
define('_AM_SSECTION_OFFLINE_EXP', '<b>Offline articles</b> : Published articles that have been put offline, temporarily or not. Offline articles are not displayed in the user side.');
define('_AM_SSECTION_OFFLINE_FIELD', 'Offline<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>Select \'No\' to put this article back<br />on line.</span>');
define('_AM_SSECTION_OFFLINE_MOD_SUCCESS', 'The article has been successfully put offline.');
define('_AM_SSECTION_OFFLINEEDITING', 'Editing an offline article');
define('_AM_SSECTION_OFFLINEEDITING_INFO', 'You can edit this offline article. Modifications will be saved for this article. However, if you would like to display this article in the user side, you will need to set the status to <b>Published</b>.');
define('_AM_SSECTION_OPTS', 'Preferences');
define('_AM_SSECTION_PAGEWRAP', 'Page wrap');
define('_AM_SSECTION_PAGEWRAPDSC', 'A page wrap is the ability to link an article with a content file. Doing this, the content of the article is directly taken from that file and you don\'t need to add the content manually. This is usefull when you have already formated HTML or PHP files.');
define('_AM_SSECTION_PARENT_CATEGORY_EXP', 'Parent category<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>Select a parent to make this a sub-category.</span>');
define('_AM_SSECTION_PATH', 'Path');
define('_AM_SSECTION_PATH_CONTENT', 'Page wrap files');
define('_AM_SSECTION_PATH_FILES', 'Attached files');
define('_AM_SSECTION_PATH_IMAGES', 'General images');
define('_AM_SSECTION_PATH_IMAGES_CATEGORY', 'Category images');
define('_AM_SSECTION_PATH_IMAGES_ITEM', 'Articles images');
define('_AM_SSECTION_PATH_ITEM', 'Upload items');
define('_AM_SSECTION_PATHCONFIGURATION', 'Module Path Configuration');
define('_AM_SSECTION_PERMERROR', 'ERROR: cannot access file directory. Please chmod the uploads/smartsection/content directory with value 755 (or 777 depending on your environement)');
define('_AM_SSECTION_PERMISSIONS', 'Permissions');
define('_AM_SSECTION_PERMISSIONS_APPLY_ON_ITEMS', 'Apply read permissions on articles<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>Apply the above Read Permissions on all<br />articles within that category, overriding their<br />current permissions.<br /><b>Please note that this is a one time action only, and not a property</b></span>');
define('_AM_SSECTION_PERMISSIONS_CAT_READ', 'Read permissions<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>Groups that will have permissions to see<br />this Category, as well as any articles<br />inside that category.</span>');
define('_AM_SSECTION_PERMISSIONS_CAT_SUBMIT', 'Articles submission permissions');
define('_AM_SSECTION_PERMISSIONS_CAT_SUBMIT_DSC', 'Groups that will be allowed to submit articles within this category. Preference \'[PERMISSIONS] User submissions\' must be enabled.');
define('_AM_SSECTION_PERMISSIONS_ITEM', 'Rettigheder');
define('_AM_SSECTION_PERMISSIONS_ITEM_DSC', 'Groups that will have permissions to see this item.');
define('_AM_SSECTION_PERMISSIONSADMIN', 'Permissions Management');
define('_AM_SSECTION_PERMISSIONSADMINMAN', 'Permissions to moderate categories');
define('_AM_SSECTION_PERMISSIONSSUBMIT', 'Permissions to submit articles');
define('_AM_SSECTION_PERMISSIONSSUBMIT_DESC', 'For each group, select the categories in which they will be able to submit articles');
define('_AM_SSECTION_PERMISSIONSVIEWMAN', 'Permissions to view categories');
define('_AM_SSECTION_PUBLISH', 'Publish');
define('_AM_SSECTION_PUBLISHED', 'Published');
define('_AM_SSECTION_PUBLISHED_DSC', 'Here is a list of all published articles available in the user side.');
define('_AM_SSECTION_PUBLISHED_EXP', '<b>Published articles</b> : articles that have been approved and are displayed in the user side.');
define('_AM_SSECTION_PUBLISHED_MOD_SUCCESS', 'The article has been successfully modified.');
define('_AM_SSECTION_PUBLISHEDEDITING', 'Editing a published article');
define('_AM_SSECTION_PUBLISHEDEDITING_INFO', 'You can edit this article. Modifications will immediatly take effect in the user side.');
define('_AM_SSECTION_PUBLISHEDITEMS', 'Published articles');
define('_AM_SSECTION_REALNAME', 'Real name');
define('_AM_SSECTION_REJECTED', 'Rejected');
define('_AM_SSECTION_REJECTED_EDIT', 'Edit this rejected article');
define('_AM_SSECTION_REJECTED_ITEM', 'Rejected article');
define('_AM_SSECTION_REJECTED_ITEM_EXP', '<b>Rejected articles</b> : articles that have been submitted by user, but rejected by a moderator. Rejected articles are not displayed in the user side.');
define('_AM_SSECTION_RESULTS', 'Search results');
define('_AM_SSECTION_RUSUREDELF', 'Are you sure you want to delete this file ?');
define('_AM_SSECTION_SCATEGORYNAME', 'Create subcategories<br><br><span style=\'font-size: xx-small; font-weight: normal; display: block;\'>Fill the text box with the names of sub categories to create.<br>Leave blank to not create subcategory. To create more, enter the how much more to create then press \'Add\'</span>');
define('_AM_SSECTION_SEARCH', 'Search');
define('_AM_SSECTION_SEARCH_PW', 'Only HTML, HTM ou XHTML extensions are allowed');
define('_AM_SSECTION_SELECT_SORT', 'Sort order');
define('_AM_SSECTION_SELECT_STATUS', 'Status');
define('_AM_SSECTION_SELECTFILE', 'Select a file');
define('_AM_SSECTION_SETMPERM', 'Set the permission');
define('_AM_SSECTION_SHOWING', 'Showing');
define('_AM_SSECTION_STATUS', 'Status');
define('_AM_SSECTION_STATUS0', 'No status');
define('_AM_SSECTION_STATUS_DSC', 'Select the status of this article');
define('_AM_SSECTION_SUBCAT_CAT', 'Sub categories');
define('_AM_SSECTION_SUBCAT_CAT_DSC', 'Here is the list of the sub categories of this category');
define('_AM_SSECTION_SUBCATEGORY_SAVE_ERROR', 'An error occured while saving the category. Here is a list of error(s):');
define('_AM_SSECTION_SUBDESCRIPT', 'Description');
define('_AM_SSECTION_SUBMISSION_MODERATE', 'Moderate this article');
define('_AM_SSECTION_SUBMISSIONSMNGMT', 'Submitted articles');
define('_AM_SSECTION_SUBMIT', 'Submit');
define('_AM_SSECTION_SUBMITTED', 'Submitted');
define('_AM_SSECTION_SUBMITTED_APPROVE_SUCCESS', 'The submitted article has been published in the user side.');
define('_AM_SSECTION_SUBMITTED_EXP', '<b>Submitted articles</b> : Articles that have been submitted by users. Once approved, they will be displayed in the user side.');
define('_AM_SSECTION_SUBMITTED_INFO', 'This article has been submitted by a member. You can make some modifications if you\'d like. Upon approval, this article will be displayed in the user side of this site.');
define('_AM_SSECTION_SUBMITTED_TITLE', 'Approving a submitted article');
define('_AM_SSECTION_SUMMARY', 'Introduction');
define('_AM_SSECTION_SUMMARY_DSC', 'Article\'s introduction');
define('_AM_SSECTION_TEXT_ASCENDING', 'Ascending');
define('_AM_SSECTION_TEXT_DESCENDING', 'Descending');
define('_AM_SSECTION_TEXT_NO_RECORDS', 'No records found');
define('_AM_SSECTION_TEXT_NUMBER_PER_PAGE', 'Number Per Page:');
define('_AM_SSECTION_TEXT_ORDER_BY', 'Order By:');
define('_AM_SSECTION_TEXT_SEARCH_BY', 'Search By:');
define('_AM_SSECTION_TEXT_SEARCH_MIME', 'Search Mimetypes');
define('_AM_SSECTION_TEXT_SEARCH_TEXT', 'Search Text:');
define('_AM_SSECTION_TEXT_SORT_BY', 'Sort By:');
define('_AM_SSECTION_TITLE', 'Title');
define('_AM_SSECTION_TITLE_REQ', 'Title*');
define('_AM_SSECTION_TOTAL_OFFLINE', 'Offline articles: ');
define('_AM_SSECTION_TOTALCAT', 'Categories :');
define('_AM_SSECTION_TOTALPUBLISHED', 'Published articles: ');
define('_AM_SSECTION_TOTALSUBMITTED', 'Submitted articles: ');
define('_AM_SSECTION_UID', 'Poster name');
define('_AM_SSECTION_UID_DSC', 'Select the name of the poster');
define('_AM_SSECTION_UNAME', 'User name');
define('_AM_SSECTION_UPDATE_MODULE', 'Update module');
define('_AM_SSECTION_UPLOAD', 'Upload');
define('_AM_SSECTION_UPLOAD_FILE', 'Upload a file');
define('_AM_SSECTION_UPLOAD_FILE_NEW', 'Upload a new file');
define('_AM_SSECTION_UPLOADED_DATE', 'Uploaded');
define('_AM_SSECTION_UPLOADPATH', 'Category storing the uploaded files attaches to articles : ');
define('_AM_SSECTION_VIEW_CATS', 'Select categories that each group can view');
define('_AM_SSECTION_WEIGHT', 'Weight');
define('_AM_SSECTION_YES', 'Yes');
define('_MD_SSECTION_CATEGORY_ITEM', 'Categorie<span style=\'font-size: xx-small; font-weight: normal; display: block;\'>Category to which belong category.</span>');

define('_AM_SSECTION_PARTIAL_VIEW', 'Give partial view access to these groups');
define('_AM_SSECTION_PARTIAL_VIEWDSC', 'if a group does not have read permission for this article, you can still give to that group partial view access by checking its checkbox here. Please note that these groups also needs to have module access permission as well as parent category read permission.');

define('_AM_SSECTION_TOOLS', 'Tools');
define('_AM_SSECTION_CONFIGURE_READ_PERMISSIONS', 'Configure read permissions');
define('_AM_SSECTION_CONFIGURE_READ_PERMISSIONS_EXP', 'This tool allows you to quickly configure read permissions for ALL categories and ALL articles at once. ALl permissions will first be deleted and then replaced by the options your will have selected.<br /><br /><b>Please use this tool with care !</b>');
define('_AM_SSECTION_FULLACCESS', 'Categories and articles read permissions');
define('_AM_SSECTION_PERMISSIONS_UPDATED', 'Permissions updated.');

define('_AM_SSECTION_ITEM_TAGS', 'Tags');
define('_AM_SSECTION_ITEM_TAGS_DSC', '');

define('_AM_SSECTION_ITEM_UPLOAD_FILE', 'Link a file to this article');
define('_AM_SSECTION_ITEM_UPLOAD_FILE_DSC', 'Select a file from your computer to attach it to this article. You will be able to add more files once the article has been created. Simply edit the article and scroll at the bottom of the page to see the Add file button.<br /><br /> For example, you could add a Word document or an Excel document. You can even upload a Flash file and it will be directly embeded into your article ! ');

define('_AM_SSECTION_XOOPS_PRO', 'Do you need help with this module ?<br />Do you need new features not yet available ?');

define('_AM_SSECTION_NEW_FEATURE', 'Ny funktion !!!');

?>