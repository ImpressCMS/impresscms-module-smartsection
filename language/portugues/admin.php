<?php

/**
* $Id: admin.php 3462 2008-07-05 15:25:59Z gibaphp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

define("_AM_SSECTION_ABOUT", "Sobre");
define("_AM_SSECTION_ACTION", "A��o");
define("_AM_SSECTION_ACTIVEUSERS", "Usu�rios ativos: %s");
define("_AM_SSECTION_ADD_OPT","Criar %s  mais sub-categorias");
define("_AM_SSECTION_ADD_OPT_SUBMIT","Criar");
define("_AM_SSECTION_ADMIN_CATS", "Selecione as categorias que cada grupo pode moderar");
define("_AM_SSECTION_ADMINCOLMNGMT", "Administra��o das categorias");
define("_AM_SSECTION_ALL", "Tudo");
define("_AM_SSECTION_ALL_EXP", "<b>Todos os status</b> : Todos os artigos do m�dulo, qualquer que seja seu status.");
define("_AM_SSECTION_ALLITEMS", "Todos os artigos no m�dulo");
define("_AM_SSECTION_ALLITEMSMSG", "Selecione um status para ver todos os artigos nele dispon�veis.");
define("_AM_SSECTION_ALLOWCOMMENTS", "O artigo pode ser comentado?");
define("_AM_SSECTION_APPROVE", "Aprovar");
define("_AM_SSECTION_APPROVED", "Aprovado");
define("_AM_SSECTION_APPROVED_MODERATE", "Moderar esta submiss�o");
define("_AM_SSECTION_APPROVESUB", "Aprovar a submiss�o");
define("_AM_SSECTION_APPROVING", "Aprovando");
define("_AM_SSECTION_ASC", "Crescente");
define("_AM_SSECTION_AVAILABLE", "<span style='font-weight: bold; color: green;'>Dispon�vel</span>");
define("_AM_SSECTION_AVAILABLE_PAGE_WRAP", "P�ginas dispon�veis para vincular");
define("_AM_SSECTION_AVAILABLE_PAGE_WRAP_DSC", "Aqui est�o as p�ginas dispon�veis para vincular neste artigo. Clique na p�gina que voc� quer vincular. No momento funciona apenas com XOOPS Editor. Adicione manualmente se voc� estiver usando outro editor.");
define("_AM_SSECTION_BACK2IDX", "Cancelado. Voltando para o �ndice.");
define("_AM_SSECTION_BLOCKS", "Administra��o dos blocos");
define("_AM_SSECTION_BLOCKSANDGROUPS", "Blocos e grupos");
define("_AM_SSECTION_BLOCKSGROUPSADMIN", "Administra��o de blocos e grupost");
define("_AM_SSECTION_BLOCKSTXT", "Este m�dulo possui os seguintes m�dulos, que voce pode configurar aqui ou no m�dulo de sistema.");
define("_AM_SSECTION_BODY", "Corpo");
define("_AM_SSECTION_BODY_DSC", "Corpo Principal do Artigo<br><b>Op��es de Entrada</b><span style='font-size: xx-small; font-weight: normal; display: block;'><p>1-Texto Usual & imagens com formata��o</p>2- Pagewrap as follows<p>[pagewrap=filename.html]</p><p>Or</p>[pagewrap=filename_1.html]<br>[pagebreak] <i>Esta � pagina��o</i><br>[pagewrap=filename_2.html]<br>etc ... <p>Or</p><p>[pagewrap=filename_1.html]<br>[pagewrap=filename_2.html]<br><i>Est� com p�ginas combinadas</i><p>Na ordem para Pagewrap, upload a p�gina html se necess�rio(s) em seu yoursite.com/uploads/smartsection/content, ou simplesmente use o form de upload form na sua pagewrap tab.</p></span><br /><a href=\"javascript:openWithSelfMain('%s', 'lookup',400, 300);\" title=\"Find User\">Procurar Usu�rio</a>");
define("_AM_SSECTION_BODY_REQ", "Corpo*");
define("_AM_SSECTION_BODY_SELECTFILE", "Corpo: pagewrap");
define("_AM_SSECTION_BODY_SELECTFILE_DSC", "Selecionar o arquivo que este arquivo vai usar como corpo.");
define("_AM_SSECTION_BUTTON_CANCEL", "Cancelar");
define("_AM_SSECTION_BUTTON_DELETE", "Cancelar");
define("_AM_SSECTION_BUTTON_EDIT", "Editar");
define("_AM_SSECTION_BUTTON_SEARCH", "Editar");
define("_AM_SSECTION_BUTTON_SUBMIT", "Submeter");
define("_AM_SSECTION_BUTTON_UPDATE", "Atualizar");
define("_AM_SSECTION_BY", "Enviado por");
define("_AM_SSECTION_CANCEL", "Cancelar");
define("_AM_SSECTION_CAT_ITEMS", "Artigos");
define("_AM_SSECTION_CAT_ITEMS_DSC", "Artigos nessa categoria");
define("_AM_SSECTION_CATCOLNAME","T�tulo");
define("_AM_SSECTION_CATCREATED", "Uma nova categoria foi criada e salva!");
define("_AM_SSECTION_CATEGORIES", "Categorias");
define("_AM_SSECTION_CATEGORIES_DSC", "Aqui est� uma lista de todas as categorias criadas neste m�dulo.");
define("_AM_SSECTION_CATEGORIES_TITLE", "Categorias criadas");
define("_AM_SSECTION_CATEGORY", "Categoria");
define("_AM_SSECTION_CATEGORY_CREATE", "Criar uma categoria");
define("_AM_SSECTION_CATEGORY_CREATE_INFO", "Preencha o seguinte formul�rio para criar uma nova categoria. A categoria resc�m-criada aparecer� automaticamente no espa�o do usu�rio.");
define("_AM_SSECTION_CATEGORY_DSC", "Categoria � qual pertence o presente artigo.");
define("_AM_SSECTION_CATEGORY_EDIT_INFO", "Voce pode editar esta categoria. As modifica��es ser�o implementadas imediatamente no espa�o do usu�rio.");
define("_AM_SSECTION_CATEGORY_HEADER", "Cabe�alho da Categoria");
define("_AM_SSECTION_CATEGORY_HEADER_DSC", "Descri��o do Cabe�alho");
define("_AM_SSECTION_CATEGORY_META_DESCRIPTION", "Descri��o Meta Tags");
define("_AM_SSECTION_CATEGORY_META_DESCRIPTION_DSC", "Na ordem para Ajuda dos Pesquisadores, voc� poder� customizar a meta descri��o, voc� would like para use nesta categoria. If you leave this field empty when creating a category, it will automatically be populated with the Description field of this category.");
define("_AM_SSECTION_CATEGORY_META_KEYWORDS", "Meta Keywords");
define("_AM_SSECTION_CATEGORY_META_KEYWORDS_DSC", "Na ordem para Ajudar os Pesquisadores, you can customize the keywords you would like to use for this category. If you leave this field empty when creating a category, it will automatically be populated with words from the Description field of this category.");
define("_AM_SSECTION_CATEGORY_REQ", "Categoria*");
define("_AM_SSECTION_CATEGORY_SAVE_ERROR", "Ocorram erros ao salvar esta categoria. Heis uma lista dos erro(s) :");
define("_AM_SSECTION_CATEGORY_SHORT_URL", "Short URL");
define("_AM_SSECTION_CATEGORY_SHORT_URL_DSC", "Quando estiver usando a caracteristica SEO neste m�dulo, voc� poder� especificar uma URL curta para esta categoria. Este Campo � Opcional.");
define("_AM_SSECTION_CATHEADER", "Gerenciamento das categorias");
define("_AM_SSECTION_CATID","ID");
define("_AM_SSECTION_CLEAR", "Limpar");
define("_AM_SSECTION_CLONE_ITEM", "Duplicar artigo");
define("_AM_SSECTION_CLONE_NEW", "Novo artigo duplicado");
define("_AM_SSECTION_COLDESCRIPT", "Descri��o da categoria");
define("_AM_SSECTION_COLISDELETED", "A categora %s foi apagada");
define("_AM_SSECTION_COLMODIFIED", "A categoria foi modificada com sucesso.");
define("_AM_SSECTION_COLPOSIT", "Posi��o da categoria");
define("_AM_SSECTION_CREATE", "Criar");
define("_AM_SSECTION_CREATECATEGORY", "Criar uma categoria nova");
define("_AM_SSECTION_CREATED", "Criada");
define("_AM_SSECTION_CREATEITEM", "Criar artigo");
define("_AM_SSECTION_CREATEITEM_PAGEWRAP", "Criar artigo vinculado");
define("_AM_SSECTION_CREATESMARTITEM", "Criar um novo artigo");
define("_AM_SSECTION_CREATETHEDIR", "Criar a pasta");
define("_AM_SSECTION_CREATINGNEW", "Criar novo");
define("_AM_SSECTION_DATESUB", "Data da publica��o");
define("_AM_SSECTION_DATESUB_DSC", "Selecione a data da publica��o");
define("_AM_SSECTION_DB_CHECKTABLES", "Verificar tabelas");
define("_AM_SSECTION_DB_CURRENTVER", "Vers�o atual: <span class='currentVer'>%s</span>");
define("_AM_SSECTION_DB_DBVER", "Vers�o do banco de dados %s");
define("_AM_SSECTION_DB_MSG_ADD_DATA", "Dados inclu�dos na tabela %s");
define("_AM_SSECTION_DB_MSG_ADD_DATA_ERR", "Erro na inclus�o de dados na tabela %s");
define("_AM_SSECTION_DB_MSG_CHGFIELD", "Mudar campo %s na tabela %s");
define("_AM_SSECTION_DB_MSG_CHGFIELD_ERR", "Erro na modifica��o do campo %s na tabela %s");
define("_AM_SSECTION_DB_MSG_CREATE_TABLE", "Tabela %s criada");
define("_AM_SSECTION_DB_MSG_CREATE_TABLE_ERR", "Erro ao criar a tabela %s");
define("_AM_SSECTION_DB_MSG_NEWFIELD", "Adicionando campo %s com sucesso");
define("_AM_SSECTION_DB_MSG_NEWFIELD_ERR", "Successfully added field %s");
define("_AM_SSECTION_DB_NEEDUPDATE", "Seu bando de dados est� desatualizado. Por favor, atualize suas tabelas do banco de dados!<br><div style='font-weight: bold; line-height: 20px; padding-top: 10px; padding-bottom: 10px; font-size: 16px;'>Nota : O SmartFactory recomenda fortemente que voc� faca uma copia de seguranca de todas as tabelas da SmartSection antes de rodar o scritp de atualiza��o.</div>");
define("_AM_SSECTION_DB_NEEDUPDATE_WARNING", "CUIDADO : O SmartFactory strongly recomenda voc� fazer um backup completo de todas as tabelas do SmartSection antes de rodar este Script de Atualiza��o.");
define("_AM_SSECTION_DB_NOUPDATE", "Seu banco de dados est� atualizado. N�o � preciso atualizar.");
define("_AM_SSECTION_DB_UPDATE_DB", "Atualizar banco de dados");
define("_AM_SSECTION_DB_UPDATE_ERR", "Erros durante a atualiza��o para a vers�o %s");
define("_AM_SSECTION_DB_UPDATE_NOW", "Atualizar agora!");
define("_AM_SSECTION_DB_UPDATE_OK", "Atualizado com sucesso para a vers�o %s");
define("_AM_SSECTION_DB_UPDATE_TO", "Atualizar para a vers�o %s");
define("_AM_SSECTION_DELETE", "Apagar");
define("_AM_SSECTION_DELETE_CAT_CONFIRM", "Por favor, observe que, ao apagar a categoria, todas as sub-categorias e artigos a ela vinculados ser�o apagados, bem como quaisquer coment�rios enviados sobre este conjunto de artigos. Voce tem certeza que deseja apagar essa categoria?");
define("_AM_SSECTION_DELETE_CAT_ERROR", "Ocorreram erros ao apagar a categoria.");
define("_AM_SSECTION_DELETECOL", "Apagar categoria");
define("_AM_SSECTION_DELETEFILE","Apagar arquivo");
define("_AM_SSECTION_DELETEITEM", "Apagar artigo");
define("_AM_SSECTION_DELETETHISFILE","Tem certeza que deseja apagar este arquivo??");
define("_AM_SSECTION_DELETETHISITEM", "Apagar este arquivo??");
define("_AM_SSECTION_DESC", "Descrescente");
define("_AM_SSECTION_DESCRIP", "Descri��o da categoria");
define("_AM_SSECTION_DESCRIPTION", "Descri��o");
define("_AM_SSECTION_DIRCREATED", "Pasta criada com sucesso");
define("_AM_SSECTION_DIRNOTCREATED", "A pasta n�o pode ser criada");
define("_AM_SSECTION_EDITCOL", "Editar categoria");
define("_AM_SSECTION_EDITFILE","Editar arquivo");
define("_AM_SSECTION_EDITING", "Editando");
define("_AM_SSECTION_EDITITEM", "Editar o artigo");
define("_AM_SSECTION_ERROR", " Ocorreu um erro.");
define("_AM_SSECTION_ERROR_ITEM_NOT_SAVED", "Ocorreu um erro. O artigo n�o foi salvo no banco de dados.");
define("_AM_SSECTION_FDELETED", "Arquivo apagado");
define("_AM_SSECTION_FILE", "Arquivos");
define("_AM_SSECTION_FILE_ADD", "Incluindo arquivo");
define("_AM_SSECTION_FILE_ADDING", "Incluindo um arquivo novo");
define("_AM_SSECTION_FILE_ADDING_DSC", "Por favor preencha o seguinte formul�rio para anexar um novo arquivo a este artigo.");
define("_AM_SSECTION_FILE_DELETE_ERROR","Ocorreu um erro ao apagar o arquivo.");
define("_AM_SSECTION_FILE_DESCRIPTION", "Descri��o");
define("_AM_SSECTION_FILE_DESCRIPTION_DSC", "Descri��o do arquivo a ser carregado.");
define("_AM_SSECTION_FILE_EDITING", "Editar um arquivo");
define("_AM_SSECTION_FILE_EDITING_DSC", "Voce pode editar este arquivo. As modifica��es ser�o imediatamente implementadas no espa�o do usu�rio.");
define("_AM_SSECTION_FILE_EDITING_ERROR", "Ocorreu um erro durante a atualiza��o do arquivo.");
define("_AM_SSECTION_FILE_EDITING_SUCCESS", "O arquivo foi modificado com sucesso.");
define("_AM_SSECTION_FILE_INFORMATIONS", "Informa��es do arquivo");
define("_AM_SSECTION_FILE_NAME", "Nome");
define("_AM_SSECTION_FILE_NAME_DSC", "Nome a ser usado para identificar o arquivo.");
define("_AM_SSECTION_FILE_STATUS", "Arquivo vis�vel?");
define("_AM_SSECTION_FILE_STATUS_DSC", "Se voc� selecionar n�o, o arquivo nao ser� vis�vel pelo lado do usu�rio.");
define("_AM_SSECTION_FILE_TO_UPLOAD", "Arquivo para carregar :");
define("_AM_SSECTION_FILE_UPLOAD_ANOTHER", "Carregar novamente");
define("_AM_SSECTION_FILEISDELETED","O arquivo foi apagado com sucesso") ;
define("_AM_SSECTION_FILENAME", "Nome do arquivo");
define("_AM_SSECTION_FILES_LINKED", "Arquivos vinculados a este artigo");
define("_AM_SSECTION_FILEUPLOAD_ERROR", "Ocorreu um erro enquanto o arquivo estava sendo carregado.");
define("_AM_SSECTION_FILEUPLOAD_SUCCESS", "O arquivo foi carregado com sucesso.");
define("_AM_SSECTION_FINDUSERS", "Encontrar usu�rios");
define("_AM_SSECTION_GOMOD", "Ir para o M�dulo");
define("_AM_SSECTION_GROUPS", "Gerenciamento de Grupos");
define("_AM_SSECTION_GROUPSINFO", "Configurar permiss�es de m�dulo e blocos para cada grupo");
define("_AM_SSECTION_HELP", "Ajuda");
define("_AM_SSECTION_HITS", "Cliques");
define("_AM_SSECTION_ICO_DELETE", "Apagar");
define("_AM_SSECTION_ICO_EDIT", "Editar");
define("_AM_SSECTION_ICO_OFFLINE", "Offline");
define("_AM_SSECTION_ICO_ONLINE", "Online");
define("_AM_SSECTION_ID", "ID");
define("_AM_SSECTION_IMAGE", "Imagem da Categoria");
define("_AM_SSECTION_IMAGE_DSC", "Imagem que representa a categoria");
define("_AM_SSECTION_IMAGE_ITEM", "Imagem do artigo");
define("_AM_SSECTION_IMAGE_ITEM_DSC", "Imagem que representa o artigo");
define("_AM_SSECTION_IMAGE_UPLOAD", "Carregar imagem");
define("_AM_SSECTION_IMAGE_UPLOAD_DSC", "Selecione uma imagem em seu computador. Esta imagem ser� carregada para a p�gina e marcada como imagem da categoria.");
define("_AM_SSECTION_IMAGE_UPLOAD_ITEM_DSC", "Selecione uma imagem em seu computador. Esta imagem ser� carregada para a p�gina e marcada como imagem do artigo.");
define("_AM_SSECTION_IMAGEPATH", "Caminho para a imagem da categoria : ");

define("_AM_SSECTION_IMPORT", "Importar");
define("_AM_SSECTION_IMPORTED_COMMENT", "Coment�rio '%s' importados.");
define("_AM_SSECTION_IMPORTED_COMMENT_ERROR", "Erro na importa��o de coment�rios '%s'");
define("_AM_SSECTION_IMPORT_COMMENTS", "Importar coment�rios do m�dul0");
define("_AM_SSECTION_IMPORT_ALL_PARTNERS", "Todos os artigos");
define("_AM_SSECTION_IMPORTED_ARTICLE_FILE", "Arquivo  %s vinculado %s foram importados");
define("_AM_SSECTION_IMPORT_ARTICLE_ERROR", "Erro enquanto importava o Artigo <em>%s</em>");
define("_AM_SSECTION_IMPORT_ARTICLE_WRAP", "O arquivo %s vinculado foi copiado na pasta de conte�do do m�dulo.");
define("_AM_SSECTION_IMPORT_AUTOAPPROVE", "Auto-aprovar");
define("_AM_SSECTION_IMPORT_BACK", "Voltar para a p�gina de importa��o");
define("_AM_SSECTION_IMPORT_CATEGORIES", "Categorias a serem importadas");
define("_AM_SSECTION_IMPORT_CATEGORIES_DSC", "Aqui est�o as categorias que ser�o importadas no SmartSection");
define("_AM_SSECTION_IMPORT_CATEGORY_ERROR", "Erro enquanto importava categoria <em>%s</em>.");
define("_AM_SSECTION_IMPORT_CATEGORY_SUCCESS", "Categoria <em>%s</em> importada com sucesso.");
define("_AM_SSECTION_IMPORT_ERROR", "Ocorreu um erro na importa��o do artigo.");
define("_AM_SSECTION_IMPORT_FILE_NOT_FOUND", "Arquivo a importar n�o encontrado em <b>%s</b>");
define("_AM_SSECTION_IMPORT_FROM", "Importar de %s");
define("_AM_SSECTION_IMPORT_GOTOMODULE", "Ir para a p�gina de �ndice do SmartSection");
define("_AM_SSECTION_IMPORT_INFO", "Voc� pode importar artigos diretamente no Smartsection. Simplesmente selecione o de que m�dulo voc� gostaria de importar os artigos e pressione o bot�o 'Importar' .<br><b>Execute esta opera��o apenas uma vez, sen�o os artigos ser�o duplicados</b>");
define("_AM_SSECTION_IMPORT_MODULE_FOUND", "%s modulo foi encontrado. Existem %s artigos e %s categorias que podem ser importadas.");
define("_AM_SSECTION_IMPORT_MODULE_FOUND_NO_ITEMS", "%s m�dulo foi encontrado, mas n�o h� artigos a importar.");
define("_AM_SSECTION_IMPORT_NOCATSELECTED", "Nenhuma categoria foi selecionado para importar.");
define("_AM_SSECTION_IMPORT_NO_MODULE", "Como n�o h� outro m�dulo compat�vel de artigos instalado no site, nenhum artigo pode ser importado.");
define("_AM_SSECTION_IMPORT_PARENT_CATEGORY", "Categoria Principal");
define("_AM_SSECTION_IMPORT_PARENT_CATEGORY_DSC", "Importar categorias selecionadas da categoria principal.");
define("_AM_SSECTION_IMPORT_PARTNER_ERROR", "Ocorreu um erro na importa��o '%s'.");
define("_AM_SSECTION_IMPORT_RESULT", "Aqui est� o resultado da importa��o.");
define("_AM_SSECTION_IMPORT_SETTINGS", "Prefer�ncias da importa��o");
define("_AM_SSECTION_IMPORT_SUCCESS", "Os artigos foram importados com sucesso no m�dulo.");
define("_AM_SSECTION_IMPORT_TITLE", "Importar artigos");
define("_AM_SSECTION_IMPORTED_ARTICLE", "Artigo importado : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_ARTICLES", "Artigos importados : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_CATEGORY", "Categoria importada : <em>%s</em>");
define("_AM_SSECTION_IMPORTED_CATEGORIES", "Categorias importadas : <em>%s</em>");
define("_AM_SSECTION_IMPORT_SELECTION", "Sele��o de importa��o");
define("_AM_SSECTION_IMPORT_SELECT_FILE", "Artigos");
define("_AM_SSECTION_IMPORT_SELECT_FILE_DSC", "Escolha o m�dulo do qual voc� vai importar os artigos.");

define("_AM_SSECTION_INACTIVEUSERS", "Usu�rios inativos: %s");
define("_AM_SSECTION_INDEX", "�ndice");
define("_AM_SSECTION_INVENTORY", "Resumo do m�dulo");
define("_AM_SSECTION_ITEM", "Artigo");
define("_AM_SSECTION_ITEM_CREATING", "Criar um novo artigo");
define("_AM_SSECTION_ITEM_CREATING_DSC", "pro favor preencha o seguinte formul�rio a fim de criar um novo artigo.");
define("_AM_SSECTION_ITEM_DELETE_ERROR", "Ocorreram erros ao apagar o arquivo.");
define("_AM_SSECTION_ITEM_DUPLICATING", "Duplicando um artigo");
define("_AM_SSECTION_ITEM_DUPLICATING_DSC", "Editar este formul�rio de forma a criar um novo artigo baseado no artigo original.");
define("_AM_SSECTION_ITEM_EDIT", "Editar este artigo");
define("_AM_SSECTION_ITEM_INFORMATIONS", "Class action suit informations");
define("_AM_SSECTION_ITEM_META_DESCRIPTION", "Meta Descri��es");
define("_AM_SSECTION_ITEM_META_DESCRIPTION_DSC", "Na ordem para Ajudar os Pesquisadores, voc� poder� customizar a descri��o meta,  you would like para usar este artigo. Se voc� deixar este campo em branco quando criar uma categoria, este item ser� automaticamente preenchido com o campo do Sum�rio deste arquigo.");
define("_AM_SSECTION_ITEM_META_KEYWORDS", "Meta Keywords");
define("_AM_SSECTION_ITEM_META_KEYWORDS_DSC", "Na ordem para Ajudar os Pesquisadores, voc� poder� customizar os keywords para compor os seus artigos. Se voc� deixar este campo vazio quando criar uma artigo, ele ser� preenchido autom�ticamente com o campo do Sum�rio neste artigo.");
define("_AM_SSECTION_ITEM_RECEIVED_NEED_APPROVAL", "Seu artigo foi encaminhado e ser� publicado logo que avaliado por um moderador. Obrigado pela sua contribui��o!");
define("_AM_SSECTION_ITEM_REJECTED", "Este artigo foi rejeitado.");
define("_AM_SSECTION_ITEM_SHORT_URL", "URL Curta");
define("_AM_SSECTION_ITEM_SHORT_URL_DSC", "Quando voc� estiver usando as caracteristicas do SEO deste m�dulo, voc� poder� especificar uma URL Curtapara este artigo. Este campo � Opcional.");
define("_AM_SSECTION_ITEMCAT", "Categoria");
define("_AM_SSECTION_ITEMCATEGORYNAME", "Categoria");
define("_AM_SSECTION_ITEMCOLNAME", "T�tulo");
define("_AM_SSECTION_ITEMCREATEDOK", "O artigo foicriado e publicado com sucesso !");
define("_AM_SSECTION_ITEMDESC", "Descri��o");
define("_AM_SSECTION_ITEMID", "ID");
define("_AM_SSECTION_ITEMISDELETED", "O artigo foi apagado.");
define("_AM_SSECTION_ITEMMODIFIED", "O artigo foi modificado com sucesso!");
define("_AM_SSECTION_ITEMNOTCREATED", "Infelizmente n�o foi poss�vel criar esse artigo!");
define("_AM_SSECTION_ITEMNOTUPDATED", "Infelizmente ocorreu um erro durante a atualiza��o deste artigo!");
define("_AM_SSECTION_ITEMS", "Artigos");
define("_AM_SSECTION_LIMIT", "Usu�rios por p�gina");
define("_AM_SSECTION_MESSAGE_ADD_MIME_ERROR", "Erro: este formato n�o foi adicionado.");
define("_AM_SSECTION_MESSAGE_DELETE_MIME_ERROR", "Erro: este formato n�o foi adicionado.");
define("_AM_SSECTION_MESSAGE_EDIT_MIME_ERROR", "Erro: este formato n�o foi adicionado.");
define("_AM_SSECTION_MESSAGE_NO_ID", "Erro: ID n�o especificado");
define("_AM_SSECTION_MESSAGE_NO_VALUE", "Erro: o valor do formato n�o est� especificado.");
define("_AM_SSECTION_MIME_ADD_TITLE", "Adicionar um formato");
define("_AM_SSECTION_MIME_ADMIN", "Admin");
define("_AM_SSECTION_MIME_ADMINF", "Permitir formato para admin");
define("_AM_SSECTION_MIME_ADMINFINFO", "<b> Formatos dispon�veis para upload pelo Admin</b>");
define("_AM_SSECTION_MIME_CANCEL", "Cancelar");
define("_AM_SSECTION_MIME_CLEAR", "Reiniciar");
define("_AM_SSECTION_MIME_CREATE", "Criar");
define("_AM_SSECTION_MIME_CREATED", "Informa��o de formato criada");
define("_AM_SSECTION_MIME_CREATEF", "Criar formato");
define("_AM_SSECTION_MIME_DELETE", "Apagar");
define("_AM_SSECTION_MIME_DELETETHIS", "Apagar formato selecionado");
define("_AM_SSECTION_MIME_EDIT_TITLE", "Editar formato");
define("_AM_SSECTION_MIME_EXT", "EXT");
define("_AM_SSECTION_MIME_EXTF", "Extens�o de arquivo");
define("_AM_SSECTION_MIME_EXTFIND", "Pesquisar extens�o de arquivo<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escreva a extens�o de arquivo que voc� deseja pesquisar.</span></div>");
define("_AM_SSECTION_MIME_FINDIT", "Coloque a extens�o!");
define("_AM_SSECTION_MIME_FINDMIMETYPE", "Procurar novo formato?");
define("_AM_SSECTION_MIME_ID", "ID");
define("_AM_SSECTION_MIME_INFOTEXT", "<ul><li>Novos formatos podem ser criados, editados ou apagados facilmente por este formul�rio.</li> <li>Procure um novo formato atrav�s de um website externo.</li> <li>Os formatos podem ser vistos pelo  Admin ou pelos Usu�rios.</li> <li>Altere o status de um formato.</li></ul>");
define("_AM_SSECTION_MIME_MANAGE_TITLE", "Gerenciamento de Formatos");
define("_AM_SSECTION_MIME_MIMEDELETED", "O formato %s foi apagado");
define("_AM_SSECTION_MIME_MODIFIED", "Informa��o de formato modificado");
define("_AM_SSECTION_MIME_MODIFY", "Modificar");
define("_AM_SSECTION_MIME_MODIFYF", "Modificar formato");
define("_AM_SSECTION_MIME_NAME", "Tipo de aplicativo");
define("_AM_SSECTION_MIME_NAMEF", "Nome/Tipo de aplicativo<div style='padding-top: 8px;'><span style='font-weight: normal;'>Escreva o aplicativo associado com essa extens�o.</span></div>");
define("_AM_SSECTION_MIME_NOMIMEINFO", "N�o h� formatos selecionados");
define("_AM_SSECTION_MIME_SEARCH", "Pesquisar formatos");
define("_AM_SSECTION_MIME_TYPEF", "Formatos<div style='padding-top: 8px;'><span style='font-weight: normal;'>Descreva cada formato associado com a extens�o do arquivo. Cada formato deve ser separado por um espa�o.</span></div>");
define("_AM_SSECTION_MIME_USER", "Usu�rio");
define("_AM_SSECTION_MIME_USERF", "Formatos permitidos aos usu�rios");
define("_AM_SSECTION_MIME_USERFINFO", "<b>Formatos dispon�veis para uploads pelos usu�rios</b>");
define("_AM_SSECTION_MIMETYPES", "Formatos");
define("_AM_SSECTION_MINDEX_ACTION", "A��o");
define("_AM_SSECTION_MINDEX_PAGE", "<b>P�gina</b> ");
define("_AM_SSECTION_MODADMIN", "Administra��o do m�dulo :");
define("_AM_SSECTION_MODIFY", "Modificar");
define("_AM_SSECTION_MODIFYCAT", "Modificar a categoria");
define("_AM_SSECTION_MODIFYTHISCAT", "Modificar esta categoria?");
define("_AM_SSECTION_NB_SUBCATS","N�mero de categorias a incluir:<br><br>Entre o n�mero e pressione 'Incluir'");
define("_AM_SSECTION_NEED_CATEGORY_ITEM", "Para criar um artigo, voce precisa primeiro criar uma categoria.");
define("_AM_SSECTION_NO", "N�o");
define("_AM_SSECTION_NOCAT", "Sem categorias para exibir");
define("_AM_SSECTION_NOCOLTOEDIT", "N�o h� categorias para editar!");
define("_AM_SSECTION_NOFILE", "Este artigo n�o cont�m nenhum arquivo anexado.");
define("_AM_SSECTION_NOFILESELECTED", "Selecione um arquivo.");
define("_AM_SSECTION_NOFOUND", "Nenhum usu�rio combina com o texto solicitado.");
define("_AM_SSECTION_NOITEMS", "N�o h� artigos publicados no momento.");
define("_AM_SSECTION_NOITEMS_OFFLINE", "N�o h�, no momento, artigos offline.");
define("_AM_SSECTION_NOITEMS_REJECTED", "N�o h�, no momento, artigos rejeitados.");
define("_AM_SSECTION_NOITEMS_SUBMITTED", "N�o h�, no momento, novos artigos submetidos.");
define("_AM_SSECTION_NOITEMSELECTED", "Selecione um artigo !");
define("_AM_SSECTION_NOITEMSSEL", "N�o h� artigos com o status selecionado.");
define("_AM_SSECTION_NONE", "Nenhum");
define("_AM_SSECTION_NOPERMSSET", "A permiss�o n�o pode ser configurada : Nenhuma categoria foi ainda criada! Por favor, crie uma categoria primeiro.");
define("_AM_SSECTION_NOSUBCAT","Ainda n�o foram criadas sub-categorias");
define("_AM_SSECTION_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Indispon�vel</span>");
define("_AM_SSECTION_NOTUPDATED", "Ocorreu um erro durante a atualiza��o do banco de dados!");
define("_AM_SSECTION_OFFLINE", "Offline");
define("_AM_SSECTION_OFFLINE_CREATED_SUCCESS", "O artigo foi criado com sucesso e est� offline.");
define("_AM_SSECTION_OFFLINE_EXP", "<b>Artigos offline</b> : Artigos publicados e retirados, temporariamente ou n�o. Artigos offline n�o s�o exibidos no espa�o do usu�rio.");
define("_AM_SSECTION_OFFLINE_FIELD", "Offline<span style='font-size: xx-small; font-weight: normal; display: block;'>Selecione 'N�o' para recolocar este artigo <br />on line.</span>");
define("_AM_SSECTION_OFFLINE_MOD_SUCCESS", "O artigo foi retirado com sucesso.");
define("_AM_SSECTION_OFFLINEEDITING", "Editar um artigo offline");
define("_AM_SSECTION_OFFLINEEDITING_INFO", "Voce pode editar este artigo offline. As modifica��es ser�o salvas para este artigo. No entanto, se voce quiser exibir este artigo no espa�o do usu�rio, voce dever� mudar seu status para <b>Publicado</b>.");
define("_AM_SSECTION_OPTS", "Prefer�ncias");
define("_AM_SSECTION_PAGEWRAP","Page wrap");
define("_AM_SSECTION_PAGEWRAPDSC", "O <b>page wrap</b> � a possibilidade de vincular um artigo com o conte�do de um arquivo. Fazendo isto, o conte�do do artigo � diretamente capturado do arquivo, e voc� n�o precisa adicion�-lo manualmente. Isto � �til quando voc� j� formatou o arquivo em HTML OU PHP.");
define("_AM_SSECTION_PARENT_CATEGORY_EXP", "Categoria correlata<span style='font-size: xx-small; font-weight: normal; display: block;'>Selecione a categoria � qual voce deseja que a presente categoria perten�a.</span>");
define("_AM_SSECTION_PATH", "Caminho");
define("_AM_SSECTION_PATH_CONTENT", "Page wrap files");
define("_AM_SSECTION_PATH_FILES", "Arquivos anexados");
define("_AM_SSECTION_PATH_IMAGES", "Imagens gerais");
define("_AM_SSECTION_PATH_IMAGES_CATEGORY", "Imagens de categoria");
define("_AM_SSECTION_PATH_IMAGES_ITEM", "Imagens de artigo");
define("_AM_SSECTION_PATH_ITEM", "Artigos carregados");
define("_AM_SSECTION_PATHCONFIGURATION", "Configura��o do caminho do m�dulo");
define("_AM_SSECTION_PERMERROR", "ERRO: n�o � poss�vel acessar o arquivo na pasta. Por favor atualize o chmod do conte�do da pasta uploads / smartsection para 777!");
define("_AM_SSECTION_PERMISSIONS", "Permiss�es");
define("_AM_SSECTION_PERMISSIONS_APPLY_ON_ITEMS", "Aplicar permiss�es de leitura nos artigos<span style='font-size: xx-small; font-weight: normal; display: block;'>Aplicar as permiss�es de leitura acima a todos<br /> artigos desta categoria, sobrepondo-as �s <br />permiss�es atuais</span>");
define("_AM_SSECTION_PERMISSIONS_CAT_READ", "Permiss�es de leitura<span style='font-size: xx-small; font-weight: normal; display: block;'>Grupos que ter�o permiss�o para ver<br />esta categoria, bem como qualquer de seus<br />seus artigos.</span>");
define("_AM_SSECTION_PERMISSIONS_CAT_SUBMIT", "Permiss�es para submeter artigos");
define("_AM_SSECTION_PERMISSIONS_CAT_SUBMIT_DSC", "Grupos que ter�o permiss�o para submeter artigos nesta categoria. Preferencialmente '[PERMISSIONS] User submissions' deve estar com permiss�o.");
define("_AM_SSECTION_PERMISSIONS_ITEM", "Permiss�es");
define("_AM_SSECTION_PERMISSIONS_ITEM_DSC", "Grupos que ter�o permiss�o para ver este �tem.");
define("_AM_SSECTION_PERMISSIONSADMIN", "Gerenciamento de permiss�es");
define("_AM_SSECTION_PERMISSIONSADMINMAN", "permiss�es para moderar categorias");
define("_AM_SSECTION_PERMISSIONSSUBMIT", "Permiss�o para submeter artigos");
define("_AM_SSECTION_PERMISSIONSSUBMIT_DESC", "Para cada grupo, selecione as categorias para as quais eles poder�o submeter artigos");
define("_AM_SSECTION_PERMISSIONSVIEWMAN", "Permiss�es para ver categorias");
define("_AM_SSECTION_PUBLISH", "Publicar");
define("_AM_SSECTION_PUBLISHED", "Publicado");
define("_AM_SSECTION_PUBLISHED_DSC", "Aqui est� uma lista de todos os artigos dispon�veis no espa�o do usu�rio.");
define("_AM_SSECTION_PUBLISHED_EXP", "<b>Artigos publicados</b> : artigos aprovados e que est�o sendo exibidos no espa�o do usu�rio.");
define("_AM_SSECTION_PUBLISHED_MOD_SUCCESS", "O artigo foi modificado com sucesso.");
define("_AM_SSECTION_PUBLISHEDEDITING", "Editar um artigo publicado");
define("_AM_SSECTION_PUBLISHEDEDITING_INFO", "Voce pode editar este artigo. As modifica��es ser�o imediatamente aplicadas ao espa�o do usu�rio.");
define("_AM_SSECTION_PUBLISHEDITEMS", "Artigos publicados");
define("_AM_SSECTION_REALNAME", "Nome real");
define("_AM_SSECTION_REJECTED", "Rejeitado");
define("_AM_SSECTION_REJECTED_EDIT", "Editar este artigo rejeitado");
define("_AM_SSECTION_REJECTED_ITEM", "Artigo rejeitado");
define("_AM_SSECTION_REJECTED_ITEM_EXP", "<b>Artigos rejeitados</b> : artigos submetidos pelo usu�rio, mas rejeitados por um moderador. Artigos rejeitados n�o s�o exibidos no espa�o do usu�rio.");
define("_AM_SSECTION_RESULTS", "Resultados da busca");
define("_AM_SSECTION_RUSUREDELF", "Voc� tem certeza que deseja apagar este arquivo?");
define("_AM_SSECTION_SCATEGORYNAME","Criar sub-categorias<br><br><span style='font-size: xx-small; font-weight: normal; display: block;'>Preencha a caixa de texto com o nome da sub-categoria a ser criada.<br>Deixe em branco para n�o criar sub-categorias. Para criar mais, insira quantas quiser e pressione 'Incluir'</span>");
define("_AM_SSECTION_SEARCH","Pesquisar");
define("_AM_SSECTION_SEARCH_PW","Somente extens�es HTML, HTM ou XHTML s�o permitidas");
define("_AM_SSECTION_SELECT_SORT", "Escolher ordem");
define("_AM_SSECTION_SELECT_STATUS", "Status");
define("_AM_SSECTION_SELECTFILE","Selecionar um arquivo");
define("_AM_SSECTION_SETMPERM", "Escolher a permiss�o");
define("_AM_SSECTION_SHOWING", "Exibir");
define("_AM_SSECTION_STATUS", "Status");
define("_AM_SSECTION_STATUS0", "No status");
define("_AM_SSECTION_STATUS_DSC", "Selecione o status deste artigo");
define("_AM_SSECTION_SUBCAT_CAT","Sub-categorias");
define("_AM_SSECTION_SUBCAT_CAT_DSC","Aqui est� uma lista das sub-categorias desta categoria");
define("_AM_SSECTION_SUBCATEGORY_SAVE_ERROR","A tentativa de salvar a categoria foi frustrada. Heis uma lista do(s) erro(s):");
define("_AM_SSECTION_SUBDESCRIPT","Descri��o");
define("_AM_SSECTION_SUBMISSION_MODERATE", "Moderar este artigo");
define("_AM_SSECTION_SUBMISSIONSMNGMT", "Artigo submetidos");
define("_AM_SSECTION_SUBMIT", "Submeter");
define("_AM_SSECTION_SUBMITTED", "Submetido");
define("_AM_SSECTION_SUBMITTED_APPROVE_SUCCESS", "O artigo submetido foi publicado na �rea do usu�rio.");
define("_AM_SSECTION_SUBMITTED_EXP", "<b>Artigos submetidos</b> : Artigos que foram submetidos por usu�rios. Uma vez aprovados, eles ser�o exibidos no espa�o do usu�rio.");
define("_AM_SSECTION_SUBMITTED_INFO", "Este artigo foi submetido por um membro. Se quiser, voce pode fazer algumas altera��es. Caso aprovado, este artigo ser� exibido no espa�o do usu�rio.");
define("_AM_SSECTION_SUBMITTED_TITLE", "Aprovar um artigo submetido");
define("_AM_SSECTION_SUMMARY", "Introdu��o");
define("_AM_SSECTION_SUMMARY_DSC", "Introdu��o do artigo");
define("_AM_SSECTION_TEXT_ASCENDING", "Ascendente");
define("_AM_SSECTION_TEXT_DESCENDING", "Descendente");
define("_AM_SSECTION_TEXT_NO_RECORDS", "N�o encontrou Registros");
define("_AM_SSECTION_TEXT_NUMBER_PER_PAGE", "N�mero por p�gina");
define("_AM_SSECTION_TEXT_ORDER_BY", "Ordenado por:");
define("_AM_SSECTION_TEXT_SEARCH_BY", "Pesquisar por:");
define("_AM_SSECTION_TEXT_SEARCH_MIME", "Procurar formatos");
define("_AM_SSECTION_TEXT_SEARCH_TEXT", "Pesquisar texto:");
define("_AM_SSECTION_TEXT_SORT_BY", "Classificado por:");
define("_AM_SSECTION_TITLE", "T�tulo");
define("_AM_SSECTION_TITLE_REQ", "T�tulo*");
define("_AM_SSECTION_TOTAL_OFFLINE", "Artigos offline: ");
define("_AM_SSECTION_TOTALCAT", "Categorias :");
define("_AM_SSECTION_TOTALPUBLISHED", "Artigos publicados: ");
define("_AM_SSECTION_TOTALSUBMITTED", "Artigos submetidos: ");
define("_AM_SSECTION_UID", "Nome do autor");
define("_AM_SSECTION_UID_DSC", "Selecione o nome do autor");
define("_AM_SSECTION_UNAME", "Nome de usu�rio");
define("_AM_SSECTION_UPDATE_MODULE", "Atualizar m�dulo");
define("_AM_SSECTION_UPLOAD", "Carregar");
define("_AM_SSECTION_UPLOAD_FILE", "Carregar um arquivo");
define("_AM_SSECTION_UPLOAD_FILE_NEW", "Carregar um novo arquivo");
define("_AM_SSECTION_UPLOADED_DATE", "Carregar");
define("_AM_SSECTION_UPLOADPATH", "Categoria que armazena os arquivos anexados aos artigos : ");
define("_AM_SSECTION_VIEW_CATS", "Selecionar categorias que cada grupo pode visualizar");
define("_AM_SSECTION_WEIGHT", "Peso");
define("_AM_SSECTION_YES", "Sim");
define("_MD_SSECTION_CATEGORY_ITEM", "Categoria<span style='font-size: xx-small; font-weight: normal; display: block;'>Categoria � qual ela pertence.</span>");

define("_AM_SSECTION_PARTIAL_VIEW", "Permitir acesso parcial a estes grupos para visualiza��o");
define("_AM_SSECTION_PARTIAL_VIEWDSC", "Se um grupo n�o tiver a permiss�o para este artigo, voc� pode ainda poder� dar a esse um acesso parcial utilizando a opini�o de grupo clicando no checkbox aqui. Note que estas necessidades dos grupos e suas permiss�es de acesso estar�o sendo regidas pela categoria pai onde todo o controle de permiss�o ir� residir.");

define("_AM_SSECTION_TOOLS", "Ferramentas");
define("_AM_SSECTION_CONFIGURE_READ_PERMISSIONS", "Cofigurar permiss�o de leitura");
define("_AM_SSECTION_CONFIGURE_READ_PERMISSIONS_EXP", "Esta ferramenta permite que voc� configure rapidamente permiss�es lidas para TODAS as categorias e TODOS os artigos de uma vez. Todas permiss�es ser�o primeiramente apagas e ent�o substitu�das pelas op��es de sua vontade de acordo com a sele��o.<br/><br/><b>Por este motivo, tome cuidado com esta ferramenta!</b>");
define("_AM_SSECTION_FULLACCESS", "Permiss�es de leitura nas categorias e nos artigos");
define("_AM_SSECTION_PERMISSIONS_UPDATED", "Permiss�es atualizadas.");

define("_AM_SSECTION_ITEM_TAGS", "Tags");
define("_AM_SSECTION_ITEM_TAGS_DSC", "");

define("_AM_SSECTION_ITEM_UPLOAD_FILE", "Ligar um arquivo a este artigo");
define("_AM_SSECTION_ITEM_UPLOAD_FILE_DSC", "Selecione um arquivo de seu computador para uni-lo a este artigo. Voc� poder� adicionar mais de um arquivo, depois que o artigo foi criado. Editar simplesmente o artigo e ir at� o final da p�gina para ver o bot�o do arquivo.<br/><br/> No processo de inclus�o por exemplo, voc� poderia adicionar um arquivo do Word ou do Excel. Voc� tamb�m poder� fazer um upload de um arquivo Flash e poder� estar ligado diretamente ao seu artigo! ");

define("_AM_SSECTION_XOOPS_PRO", "Voc� necessita de ajuda com este m�dulo? <br/>As caracter�sticas novas ainda n�o dispon�veis?");

define("_AM_SSECTION_NEW_FEATURE", "Nova caracter�stica  !!!");

?>