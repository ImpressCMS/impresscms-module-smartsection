<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/*global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
If (isset($xoopsModuleConfig) && isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartsection') {
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

define("_MB_SSECTION_ALLCAT", "Todas as categorias");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Exibir o(s) �ltimo(s) item(ns) automaticamente?");
define("_MB_SSECTION_CATEGORY", "Categoria");
define("_MB_SSECTION_CHARS", "Comprimento do t�tulo");
define("_MB_SSECTION_COMMENTS", "Coment�rio(s)");
define("_MB_SSECTION_DATE", "Data da publica��o");
define("_MB_SSECTION_DISP", "Exibi��o");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Exibir o nome de categoria?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Exibir contador de coment�rio?");
define("_MB_SSECTION_DISPLAY_TYPE", "Exibir tipo :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Cada artigo � um bloco");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Cada artigo � um item");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Exibir o autor e a data?");
define("_MB_SSECTION_FULLITEM", "Leia o artigo completo");
define("_MB_SSECTION_HITS", "N�mero de cliques");
define("_MB_SSECTION_ITEMS", "Artigos");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "Se positivo, quantos artigos para exibir?");
define("_MB_SSECTION_LENGTH", " caracteres");
define("_MB_SSECTION_ORDER", "Ordem de exibi��o");
define("_MB_SSECTION_POSTEDBY", "Publicado por");
define("_MB_SSECTION_READMORE", "Leia mais...");
define("_MB_SSECTION_READS", "Leituras");
define("_MB_SSECTION_SELECT_ITEMS", "Se n�o, selecione os artigos para serem exibidos :");
define("_MB_SSECTION_SELECTCAT", "Exibir os artigos  :");
define("_MB_SSECTION_VISITITEM", "Visite o");
define("_MB_SSECTION_WEIGHT", "Listar por peso");
define("_MB_SSECTION_WHO_WHEN", "Publicado por %s em %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "N�veis");
define("_MB_SSECTION_CURRENTCATEGORY", "Categoria Atual");
define("_MB_SSECTION_ASC", "ASC");
define("_MB_SSECTION_DESC", "DESC");
define("_MB_SSECTION_SHOWITEMS", "Mostrar Items");
//--/bd

define("_MB_SSECTION_FILES", "arquivos");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Link direto para download do arquivo em vez de uma link para o artigo?");
define("_MB_SSECTION_FROM", "Select articles <br />from ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT", "Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Articles published between %s and %s");
?>