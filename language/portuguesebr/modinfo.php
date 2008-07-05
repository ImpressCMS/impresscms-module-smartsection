<?php

/**
* $Id$
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1", "Índice");
define("_MI_SSECTION_ADMENU2", "Categorias");
define("_MI_SSECTION_ADMENU3", "Artigos");
define("_MI_SSECTION_ADMENU4", "Permissões");
define("_MI_SSECTION_ADMENU5", "Blocos e Grupos");
define("_MI_SSECTION_ADMENU6", "Formatos");
define("_MI_SSECTION_ADMENU7", "Ir para o módulo");

define("_MI_SSECTION_ADMINHITS", "Contar cliques do admin?");
define("_MI_SSECTION_ADMINHITSDSC", "Permitir cliques de admin para estatísticas?");
define("_MI_SSECTION_ALLOWSUBMIT", "Submissões do usuário:");
define("_MI_SSECTION_ALLOWSUBMITDSC", "Permitir a usuários submeter artigos em seu site?");
define("_MI_SSECTION_ANONPOST", "Permitir posts de visitantes");
define("_MI_SSECTION_ANONPOSTDSC", "Permitir a visitantes a submissão de artigos.");
define("_MI_SSECTION_AUTHOR_INFO", "Desenvolvedores");
define("_MI_SSECTION_AUTHOR_WORD", "A Palavra do Autor");
define("_MI_SSECTION_AUTOAPP", "Auto aprovar artigos submetidos?");
define("_MI_SSECTION_AUTOAPPDSC", "Auto aprovar os artigos submetidos sem intervenção do admin?");
define("_MI_SSECTION_BCRUMB","Mostrar o nome do módulo no breadcrumb?");
define("_MI_SSECTION_BCRUMBDSC","Se você selecionar sim, o breadcrumb irá mostrar \"Smartsection > nome da categoria > nome do artigo\". <br>Se não, somente \"nome da categoria > nome do artigo\" será exibido.");
define("_MI_SSECTION_BOTH_FOOTERS","Ambos os rodapés");
define("_MI_SSECTION_BY", "por");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY", "Itens da Categoria");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC", "Opções de notificação que se aplicam a categoria atual.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY", "Novo artigo publicado");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP", "Avise-me quando um novo artigo for publicado na categoria atual.");   
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC", "Receber notificação quando um novo artigo for publicado na categoria atual.");      
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação : Novo artigo publicado em categoria"); 
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY", "'Artigo submetido");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP", "Avise-me quando um novo artigo for submetido na categoria atual.");   
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC", "Receber notificação quando um novo artigo for submetido na categoria atual.");      
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação : Novo artigo submetido em categoria"); 
define("_MI_SSECTION_CATLIST_IMG_W", "Lista de Imagens da Categoria width");
define("_MI_SSECTION_CATLIST_IMG_WDSC", "Specify the witdh of category images when listing the categories.");
define("_MI_SSECTION_CATMAINIMG_W", "Category main image width");
define("_MI_SSECTION_CATMAINIMG_WDSC", "Specify the width of the category main image.");
define("_MI_SSECTION_CATPERPAGE", "Número máximo de categorias por página (Lado de usuário):");
define("_MI_SSECTION_CATPERPAGEDSC", "Número máximo de categorias principais a serem exibidas, por página, pelo lado do usuário.");
define("_MI_SSECTION_CLONE", "Permitir duplicação de artigo?");
define("_MI_SSECTION_CLONEDSC", "Selecione 'Sim' para permitir que os usuários apropriados dupliquem um artigo.");
define("_MI_SSECTION_COLLHEAD", "Mostrar a barra colapsável?");
define("_MI_SSECTION_COLLHEADDSC", "Se você marcar a opção como 'Sim', os resumos das Categorias vão ser exibidos na barra colapsável, bem como os Artigos. Se você marcar 'Não', a barra colapsável não será exibida.");
define("_MI_SSECTION_COMMENTS", "Controlar comentários à nível de artigo?");
define("_MI_SSECTION_COMMENTSDSC", "Se você marcar a opção 'Sim', você verá comentários apenas nos itens em que seus comentários estiverem devidamente marcados.<br><br/> Selecionando 'Não' você terá os comentários gerenciados de forma global. Olhe abaixo em 'Regras de Comentários'.");
define("_MI_SSECTION_DATEFORMAT", "Formato de Data:");
define("_MI_SSECTION_DATEFORMATDSC", "Use a parte final de language/english/global.php para selecionar um estilo de exibição. Exemplo: ");
define("_MI_SSECTION_DEMO_SITE", "Site de demonstração da SmartFactory");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR", "Colaborador(es)");
define("_MI_SSECTION_DEVELOPER_CREDITS", "Créditos");
define("_MI_SSECTION_DEVELOPER_EMAIL", "E-mail");
define("_MI_SSECTION_DEVELOPER_LEAD", "Desenvolvedor principal(is)");
define("_MI_SSECTION_DEVELOPER_WEBSITE", "Site da web");
define("_MI_SSECTION_DISCOM", "Mostrar contador de comentários?");
define("_MI_SSECTION_DISCOMDSC", "Marque 'Sim' para mostrar o contador de comentários em cada artigo");
define("_MI_SSECTION_DISDATECOL", "Mostar a coluna 'Publicado em'?");
define("_MI_SSECTION_DISDATECOLDSC", "Quando a opção mostrar 'Resumo' estiver selecionada, selecione 'Sim' para mostrar a data do 'Publicado em' na tabela de itens do índice e na página da categoria.");
define("_MI_SSECTION_DCS", "Mostrar o resumo da categoria?");
define("_MI_SSECTION_DCS_DSC", "Escolha 'Não' para não mostrar o sumário da Categoria na página de sub-categorias.");
define("_MI_SSECTION_DISPLAY_CATEGORY", "Mostrar o nome da Categoria?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "Escolha para 'Sim' para mostrar dentro da Categoria o Link para um artigo individual");
define("_MI_SSECTION_DISPLAYTYPE_FULL", "Visualização Completa");
define("_MI_SSECTION_DISPLAYTYPE_LIST", "Lista de itens");
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "Estilo WFSection");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY", "Visualizar Resumo");
define("_MI_SSECTION_DISSBCATDSC", "Mostar descrição das sub-categorias?");
define("_MI_SSECTION_DISSBCATDSCDSC", "Selecionar 'Sim' para mostrar a descrição das sub-categorias no índice e na página da categoria.");
define("_MI_SSECTION_DISTYPE", "Forma de exibição do artigo:");
define("_MI_SSECTION_DISTYPEDSC", "Se a opção 'Resumo' estiver selecionada, apenas o título, a data e os cliques de cada item serão mostrados na categoria selecionada. Se a opção 'Visão Completa' estiver selecionada, cada artigo será mostrado integralmente na categoria selecionada.");
define("_MI_SSECTION_FILEUPLOADDIR", "Arquivos enviados para a pasta de upload:");
define("_MI_SSECTION_FILEUPLOADDIRDSC", "Pasta de destino para os arquivos anexados aos artigos. artigos. Não inclua qualquer tag ou barra.");
define("_MI_SSECTION_FOOTERPRINT","Imprimir rodapé da página");
define("_MI_SSECTION_FOOTERPRINTDSC","Selecionar o rodapé que estará impresso em cada artigo entre aquelas criadas nas opções de preferência/conteúdo");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY", "Nova categoria");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP", "Avise-me quando uma nova categoria for criada.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC", "Receba notificação quando uma nova categoria for criada.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação : Nova categoria");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY", "Artigos em Geral");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC", "Opções de notificação que se aplicam a todos os artigos.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY", "Novo artigo publicado");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "Avise-me quando qualquer novo artigo for publicado.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "Receber notificação quando qualquer novo artigo for publicado.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação : Novo artigo publicado");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY", "Artigo submetido");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP", "Avise-me quando qualquer artigo for submetido e estiver aguardando aprovação.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC", "Receber notificação quando qualquer artigo for submetido e estiver esperando aprovação.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação : Novo artigo submetido");
define("_MI_SSECTION_HEADERPRINT","Imprimir o cabeçalho da página");
define("_MI_SSECTION_HEADERPRINTDSC","Cabeçalho que estará impresso em cada artigo");
define("_MI_SSECTION_HELP_CUSTOM", "Caminho Personalizado");
define("_MI_SSECTION_HELP_INSIDE", "Dentro do módulo");
define("_MI_SSECTION_HELP_PATH_CUSTOM", "Caminho personalizado dos arquivos de ajuda do SmartSection");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC", "Se você selecionar caminho personalizado  na opção prévia de caminho dos arquivos de ajuda do SmartSection, por favor especifique a URL dos arquivos de ajuda do SmartSection, no formato : http://www.yoursite.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT", "Caminho de arquivos de ajuda do SmartSection");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC", "Selecione de onde você gostaria de acessar arquivos de ajuda do SmartSection. Se você fez o download do'Pacote de Ajuda do SmartSection' e fez upload dele em'modules/smartsection/doc/', você pode selecionar'dentro do módulo'. Alternativamente, você pode acessar a ajuda do módulo diretamente de docs.xoops.org escolhendo esta via no seletor. Você também pode selecionar'Caminho de Costume' e especificar você mesmo o caminho dos arquivos de ajuda na próxima opção de configuração'Caminho de Costume para opção de arquivos de ajuda do SmartSection'");
define("_MI_SSECTION_HITSCOL", "Mostrar a coluna de 'Cliques'?");
define("_MI_SSECTION_HITSCOLDSC", "Quando a opção 'Resumo' estiver selecionada, selecione 'Sim' para mostrar a coluna de 'Cliques' na tabela de itens do índice e na página da categoria.");
define("_MI_SSECTION_HLCOLOR", "Cor de destaque para palavras-chave");
define("_MI_SSECTION_HLCOLORDSC", "Mostrar as palavras-chave com cor de destaque quando pesquisar");
define("_MI_SSECTION_IMAGENAV", "Usar a imagem Navegação na Página:");
define("_MI_SSECTION_IMAGENAVDSC", "Se você marcou esta opção como \"Sim\", a Navegação na Página será exibida com imagens, se não, a Navegação na Página original será exibida.");
define("_MI_SSECTION_INDEXFOOTER","Indexar rodapé");
define("_MI_SSECTION_INDEXFOOTER_SEL","Indexar rodapé");
define("_MI_SSECTION_INDEXFOOTERDSC","Rodapé que será exibido na página de índice do módulo");
define("_MI_SSECTION_INDEXMSG", "Mensagem de boas-vindas do Índice");
define("_MI_SSECTION_INDEXMSGDEF", ""); 
define("_MI_SSECTION_INDEXMSGDSC", "Mensagem de boas-vindas será exibida na página-índice do módulo.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY", "Artigo aprovado");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP", "Avise-me quando este artigo for aprovado.");   
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC", "Receber notificação quando este artigo for aprovado.");      
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação : artigo aprovado"); 
define("_MI_SSECTION_ITEM_NOTIFY", "Artigo");
define("_MI_SSECTION_ITEM_NOTIFY_DSC", "Opções de notificação que se aplicam ao artigo atual.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY", "Artigo rejeitado");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP", "Avise-me se este artigo for rejeitado.");   
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC", "Receba notificação se este artigo for rejeitado.");      
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação : artigo rejeitado"); 
define("_MI_SSECTION_ITEM_TYPE", "Tipo de artigo:");
define("_MI_SSECTION_ITEM_TYPEDSC", "Selecione o tipo de artigos este módulo vai administrar.");
define("_MI_SSECTION_ITEMFOOTER", "Rodapé de artigo");
define("_MI_SSECTION_ITEMFOOTER_SEL", "Rodapé de artigo");
define("_MI_SSECTION_ITEMFOOTERDSC","Rodapé que será exibido em cada artigo");
define("_MI_SSECTION_ITEMSMENU", "Menu de navegação");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "Bloco em Árvore");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "Lista de artigos recentes");
define("_MI_SSECTION_ITEMSPOT", "Em destaque!");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "Artigo aleatório !");
define("_MI_SSECTION_LASTITEM", "Mostrar coluna 'último item'?");
define("_MI_SSECTION_LASTITEMDSC", "Marcar 'Sim' para mostrar o último item em cada categoria no índice e na página da categoria.");
define("_MI_SSECTION_LASTITEMS", "Mostrar a lista dos artigos publicados mais recentes?");
define("_MI_SSECTION_LASTITEMSDSC", "Marque 'Sim' para ter a lista embaixo, na primeira página do módulo");
define("_MI_SSECTION_LASTITSIZE", "Tamanho do último item :");
define("_MI_SSECTION_LASTITSIZEDSC", "Defina o tamanho máximo do título na coluna Últimos Itens");
define("_MI_SSECTION_LINKPATH", "Permitir links no caminho atual:");
define("_MI_SSECTION_LINKPATHDSC", "Esta opção permitirá ao usuário retornar, com um clique, ao caminho exibido no topo da página");
define("_MI_SSECTION_MAX_HEIGHT", "Altura máxima da imagem");
define("_MI_SSECTION_MAX_HEIGHTDSC", "Altura máxima do arquivo de imagem que pode ser carregado");
define("_MI_SSECTION_MAX_SIZE", "Tamanho máximo de arquivo");
define("_MI_SSECTION_MAX_SIZEDSC", "Tamanho máximo [em bytes] de um arquivo para ser carregado.");
define("_MI_SSECTION_MAX_WIDTH", "Largura máxima da imagem a ser carregada");
define("_MI_SSECTION_MAX_WIDTHDSC", "Largura máxima permitida para um arquivo ser carregado.");
define("_MI_SSECTION_MD_DESC", "Sistema de Gerenciamento de Seções para seu Portal em XOOPS");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define("_MI_SSECTION_MODULE_BUG", "Reportar um erro neste módulo");
define("_MI_SSECTION_MODULE_DEMO", "Site de demonstração");
define("_MI_SSECTION_MODULE_DISCLAIMER", "Carta de renúncia");
define("_MI_SSECTION_MODULE_FEATURE", "Sugerir uma nova característica para este módulo");
define("_MI_SSECTION_MODULE_INFO", "Informações do desenvolvimento do Módulo");
define("_MI_SSECTION_MODULE_RELEASE_DATE", "Data do release");
define("_MI_SSECTION_MODULE_STATUS", "Status");
define("_MI_SSECTION_MODULE_SUBMIT_BUG", "Submeter um erro");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE", "Submeter um pedido de alteração");
define("_MI_SSECTION_MODULE_SUPPORT", "Site de suporte oficial");
define("_MI_SSECTION_NO_FOOTERS","Nenhum");
define("_MI_SSECTION_ORDERBY", "Ordem de classificação");
define("_MI_SSECTION_ORDERBY_DATE", "Date DESC");
define("_MI_SSECTION_ORDERBY_TITLE", "Título ASC");
define("_MI_SSECTION_ORDERBY_WEIGHT", "Peso ASC");
define("_MI_SSECTION_ORDERBYDSC", "Selecione a ordem de classificação dos itens para todo o módulo.");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL", "Todos os artigos");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE", "Nenhum");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT", "Prévio e próximo artigo");
define("_MI_SSECTION_OTHERITEMS", "Tipo de exibição de outros artigos");
define("_MI_SSECTION_OTHERITEMSDSC", "Selecione como você gostaria de exibir os outros artigos da categoria na página de um artigo.");
define("_MI_SSECTION_PERPAGE", "Máximo de artigos por página (Lado do Admin):");
define("_MI_SSECTION_PERPAGEDSC", "Número de máximo de artigos por página a ser exibido de uma vez no lado do admin.");
define("_MI_SSECTION_PERPAGEINDEX", "Artigos de máximo pela página (Lado de usuário):");
define("_MI_SSECTION_PERPAGEINDEXDSC", "Número de máximo de artigos por página a ser exibido de uma vez no lado de usuário.");
define("_MI_SSECTION_PRINTLOGOURL","Logotipo imprimir URL");
define("_MI_SSECTION_PRINTLOGOURLDSC","URL do logotipo que estará impresso no topo da página");
define("_MI_SSECTION_RECENTITEMS", "Artigos recentes (Detalhe)");
define("_MI_SSECTION_SHOW_RSS","Mostrar link para RSS feed");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "Exibir sub-categorias na página de índice");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "Mostrar todas as sub-categorias");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "Selecione sim para exibir as sub-categorias na lista de categorias da página de índice do módulo");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "Não mostrar sub-categorias");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "Mostrar sub-categorias que não estão vazias");
define("_MI_SSECTION_SUB_SMNAME1", "Submeter um artigo");
define("_MI_SSECTION_SUB_SMNAME2", "Artigos populares");
define("_MI_SSECTION_SUBMITMSG", "Apresentar página de introdução:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "Mensagem de introdução que será exibida quando um artigo for submetido à aprovação.");
define("_MI_SSECTION_TITLE_SIZE", "Tamanho de título :");
define("_MI_SSECTION_TITLE_SIZEDSC", "Determinar o tamanho máximo do título na página de exibição de um único artigo.");
define("_MI_SSECTION_UPLOAD", "Usuário pode fazer upload?");
define("_MI_SSECTION_UPLOADDSC", "Permitir que usuários façam uploads de arquivos vinculados a artigos em seu site?");
define("_MI_SSECTION_USEREALNAME", "Usar o Nome Real dos usuários");
define("_MI_SSECTION_USEREALNAMEDSC", "Quando exibir um nickname, use o nome real do usuário se ele tiver escolhido usar seu nome real.");
define("_MI_SSECTION_VERSION_HISTORY", "Histórico da Versão");
define("_MI_SSECTION_WARNING_BETA", "Este módulo está neste estágio, sem qualquer garantia.");
define("_MI_SSECTION_WARNING_FINAL", "Este módulo está neste estágio, sem qualquer garantia.");
define("_MI_SSECTION_WARNING_RC", "Este módulo está neste estágio, sem qualquer garantia.");
define("_MI_SSECTION_WELCOME", "Mostrar o título e a mensagem de boas-vindas:");
define("_MI_SSECTION_WELCOMEDSC", "Se você marcar 'Sim', a página-índice do módulo irá mostrar o título 'Bem-vindo ao Smartsection de...', seguida da mensagem de boas-vindas definida abaixo. Se você marcar 'Não', nenhuma dessas linhas será exibida.");
define("_MI_SSECTION_WHOWHEN", "Mostrar o anúncio e a data?");
define("_MI_SSECTION_WHOWHENDSC", "Marque 'Sim' para mostrar o anúncio e a informação da data de cada artigo, individualmente.");
define("_MI_SSECTION_WYSIWYG", "Tipo de editor");
define("_MI_SSECTION_WYSIWYGDSC", "Para escolher que tipo de editor você quer usar. Note, no entanto, que se você escolher qualquer editor que não o XoopsEditor, ele deverá estar instalado em seu site.");

define("_MI_SSECTION_PV_TEXT", "Visualização parcial de Mensagem");
define("_MI_SSECTION_PV_TEXTDSC", "Mensagem para artigos de visualização parcial apenas.");
define("_MI_SSECTION_PV_TEXT_DEF", "Para ver o artigo completo, você deve estar registrado no site.");

define("_MI_SSECTION_SEOMODNAME", "URL - Reescrevendo o nome do módulo");
define("_MI_SSECTION_SEOMODNAMEDSC", "Se URL para reescrevendo estiver habilitada para este módulo, este é o nome do módulo que será usado. Por exemplo : http://yoursite.com/smartection/...");

define("_MI_SSECTION_ARTCOUNT", "Mostrar quantidade de artigos");
define("_MI_SSECTION_ARTCOUNTDSC", "Escolher 'Sim' para mostrar a quantidade de artigos na categoria ou dentro do sumário. Atenção, o módulo atualmente conta somente artigos dentro de cada categoria e não o conta dentro dos subcategoies.");

define("_MI_SSECTION_LATESTFILES", "Últimos arquivos enviados");

define("_MI_SSECTION_PATHSEARCH", "Exposição do trajeto da categoria em resultados da busca");
define("_MI_SSECTION_PATHSEARCHDSC", "");
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN", "Mostrar sub-categorias no início da página somente");
define("_MI_SSECTION_RATING_ENABLED", "Habilitar sistema de votação");
define("_MI_SSECTION_RATING_ENABLEDDSC", "Isso exige recursos do FrameWork SmartObject");

define("_MI_SSECTION_DISPBREAD", "Mostrar um breadcrumb");
define("_MI_SSECTION_DISPBREADDSC", "(Breadcrumb) de navegação irá exibir na página atual e dentro do contexto da estrutura do seu site");

define('_MI_SSECTION_DATE_TO_DATE', 'Artigos da data até à data');

?>