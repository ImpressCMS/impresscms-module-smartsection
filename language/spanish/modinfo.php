<?php 
// Traducción de www.riosoft.es | www.rioxoops.es
//Revisión y actualización por debianus
/**
* $Id:
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module

global $xoopsModule;

define("_MI_SSECTION_ADMENU1", "Índice");
define("_MI_SSECTION_ADMENU2", "Categorías");
define("_MI_SSECTION_ADMENU3", "Artículos");
define("_MI_SSECTION_ADMENU4", "Permisos");
define("_MI_SSECTION_ADMENU5", "Bloques y grupos");
define("_MI_SSECTION_ADMENU6", "Tipos de archivo");
define("_MI_SSECTION_ADMENU7", "Ir al módulo");

define("_MI_SSECTION_ADMINHITS", "[OPCIONES DE CONTENIDO] ¿Contar lecturas del administrador?");
define("_MI_SSECTION_ADMINHITSDSC", "Contabilizar las visitas del administrador en las estadísticas?");
define("_MI_SSECTION_ALLOWSUBMIT", "[PERMISOS] ¿Permisos de envío para los usuario?");
define("_MI_SSECTION_ALLOWSUBMITDSC", "¿Permitir a los usuarios enviar artículos al sitio?");
define("_MI_SSECTION_ANONPOST", "[PERMISOS] ¿Permitir envíos anónimos?");
define("_MI_SSECTION_ANONPOSTDSC", "¿Permitir a los usuarios anónimos enviar artículos?");
define("_MI_SSECTION_AUTHOR_INFO", "Desarrolladores");
define("_MI_SSECTION_AUTHOR_WORD", "El autor del texto");
define("_MI_SSECTION_AUTOAPP", "[PERMISOS] ¿Autoaprobar los artículos recibidos?");
define("_MI_SSECTION_AUTOAPPDSC", "¿Autoaprobar los artículos recibidos sin intervención del administrador?");
define("_MI_SSECTION_BCRUMB","[OPCIONES DE IMPRESIÓN] ¿Mostrar el nombre del módulo en la localización?");
define("_MI_SSECTION_BCRUMBDSC","Si elige <em>Sí</em> se la localización mostrará \"Smartsection > nombre categoría > nombre artículo\". <br>De la otra manera sólo mostrará \"nombre categoría > nombre artículo\" ");
define("_MI_SSECTION_BOTH_FOOTERS","Ambos pies de página");
define("_MI_SSECTION_BY", "por");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY", "Elementos de la categoría");
define("_MI_SSECTION_CATEGORY_ITEM_NOTIFY_DSC", "Opciones de notificación aplicadas a la actual categoría.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY", "Nuevo artículo publicado");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_CAP", "Notificarme cuando un nuevo artículo sea publicado en esta categoría.");   
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_DSC", "Recibir notificación de cuando un nuevo artículo sea publicado en esta categoría.");
define("_MI_SSECTION_CATEGORY_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} autonotificar : nuevo artículo publicado en la categoría"); 
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY", "Artículo enviado");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_CAP", "Notificarme cuando un nuevo artículo sea enviado a la categoría actual.");
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_DSC", "Recibir notificación de cuando un nuevo artículo sea enviado a la actual categoría."); 
define("_MI_SSECTION_CATEGORY_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} autonotificar : nuevo artículo enviado a la categoría"); 
define("_MI_SSECTION_CATLIST_IMG_W", "[OPCIONES DE FORMATO] Ancho de la imagen de la categoría"); 
define("_MI_SSECTION_CATLIST_IMG_WDSC", "Indique el ancho de las imágenes de la categoría cuando sean listadas."); 
define("_MI_SSECTION_CATMAINIMG_W", "[OPCIONES DE FORMATO] Ancho de la imagen de la categoría principal"); 
define("_MI_SSECTION_CATMAINIMG_WDSC", "Indique el ancho de la imagen para la categoría principal."); 
define("_MI_SSECTION_CATPERPAGE", "[OPCIONES DE FORMATO] Número máximo de categorías por página (para los visitantes)");
define("_MI_SSECTION_CATPERPAGEDSC", "Máximo número de categorías principales por página para ser mostradas a la vez a los usuarios.");
define("_MI_SSECTION_CLONE", "[PERMISOS] ¿Permitir la duplicación de artículos?");
define("_MI_SSECTION_CLONEDSC", "Elija <em>Sí</em> para permitir a los usuarios con los premisos necesarios duplicar artículos.");
define("_MI_SSECTION_COLLHEAD", "[OPCIONES DE FORMATO] ¿Mostrar la barra recogible?");
define("_MI_SSECTION_COLLHEADDSC", "Si responde <em>Sí</em> el sumario de las categorías será mostrado en un menú desplegable, así como los artículos. Si reponde <em>No</em>, la barra desplegable será omitida.");
define("_MI_SSECTION_COMMENTS", "[PERMISOS] ¿Controlar comentarios a nivel de los artículos?");
define("_MI_SSECTION_COMMENTSDSC", "Si responde <em>Sí</em>, verá los comentarios sólo en aquéllos elementos en que haya marcada la casilla de verificación. <br /><br />Si elije <em>No</em> los comentarios serán administrados a nivel global.");
define("_MI_SSECTION_DATEFORMAT", "[OPCIONES DE FORMATO] Formato de la fecha:");
define("_MI_SSECTION_DATEFORMATDSC", "Utilizar la parte final de language/spanish/global.php para mostrar un estilo. Ejemplo: \"d-M-Y H:i\" se muestra como \"30-Mar-2004 22:35\"");
define("_MI_SSECTION_DEMO_SITE", "Sitio Demo de SmartFactory");
define("_MI_SSECTION_DEVELOPER_CONTRIBUTOR", "Colaborador(es)");
define("_MI_SSECTION_DEVELOPER_CREDITS", "Créditos");
define("_MI_SSECTION_DEVELOPER_EMAIL", "Email");
define("_MI_SSECTION_DEVELOPER_LEAD", "Desarrolladore(s)");
define("_MI_SSECTION_DEVELOPER_WEBSITE", "Sitio Web");
define("_MI_SSECTION_DISCOM", "[OPCIONES DE CONTENIDO] ¿Mostrar contador de comentarios?");
define("_MI_SSECTION_DISCOMDSC", "Elija sí para mostrar el número de comentarios individuales para el artículo");
define("_MI_SSECTION_DISDATECOL", "[OPCIONES DE CONTENIDO] ¿Mostrar la columna <em>Publicado en</em>?");
define("_MI_SSECTION_DISDATECOLDSC", "Cuando el tipo de visualización del <em>Sumario</em> es elegido, seleccione <em>Sí</em> para mostrar una fecha en <em>Publicado el</em> en el índice de la tabla de elementos y página de categoría.");
define("_MI_SSECTION_DCS", "[OPCIONES DE CONTENIDO] ¿Mostrar el sumario de la categoría?");
define("_MI_SSECTION_DCS_DSC", "Elija <em>Sí</em> para tener visualizado un sumario de la categoría en el módulo.");
define("_MI_SSECTION_DISPLAY_CATEGORY", "¿Mostrar el nombre de la categoría?");
define("_MI_SSECTION_DISPLAY_CATEGORY_DSC", "Elija <em>Sí</em> para mostrar el enlace de la categoría en el artículo individual");
define("_MI_SSECTION_DISPLAYTYPE_FULL", "Vista completa");
define("_MI_SSECTION_DISPLAYTYPE_LIST", "Lista");  
define("_MI_SSECTION_DISPLAYTYPE_WFSECTION", "Estilo WFSection");
define("_MI_SSECTION_DISPLAYTYPE_SUMMARY", "Vista de sumario");
define("_MI_SSECTION_DISSBCATDSC", "[OPCIONES DE CONTENIDO] ¿Mostrar descripción de las subcategorías?");
define("_MI_SSECTION_DISSBCATDSCDSC", "Elija <em>Sí</em> para mostrar la descripción de las subcategorías en el índice y la página de la categoría.");
define("_MI_SSECTION_DISTYPE", "[OPCIONES DE FORMATO] ¿Tipo de visualización para los artículos:");
define("_MI_SSECTION_DISTYPEDSC", "Si la <em>Vista de sumario</em> está seleccionada, sólo el título, la fecha y las lecturas de cada artículo serán mostrados en la categoría elegida. Si la <em>Vista completa</em> es la seleccionada, cada artículo será plenamente mostrado en la categoría elegida.");
define("_MI_SSECTION_FILEUPLOADDIR", "Directorio de subida para archivos adjuntos:");
define("_MI_SSECTION_FILEUPLOADDIRDSC", "Directorio en el que serán importados los archivos adjuntos de los artículos.");
define("_MI_SSECTION_FOOTERPRINT","[OPCIONES DE IMPRESIÓN] Imprimir el pie de página");
define("_MI_SSECTION_FOOTERPRINTDSC","El pie de página será imprimido en cada artículo si activa esta opción");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY", "Nueva categoría");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_CAP", "Notificarme cuando una nueva categoría sea creada.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_DSC", "Recibir notificación de cuando una nueva categoría es creada.");
define("_MI_SSECTION_GLOBAL_ITEM_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} autonotificar: nueva categoría");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY", "Artículos globales");
define("_MI_SSECTION_GLOBAL_ITEM_NOTIFY_DSC", "Opciones de notificación que se aplican a todos los artículos.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY", "Nuevo artículo publicado");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_CAP", "Notificarme cuando un nuevo artículo sea publicado.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_DSC", "Recibir notificación de cuando un nuevo artículo sea publicado.");
define("_MI_SSECTION_GLOBAL_ITEM_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} autonotificar: Nuevo artículo publicado");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY", "Artículo enviado");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_CAP", "Notificarme cuando un artículo enviado espere aprobación.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_DSC", "Recibir notificación de cuando algún artículo sea enviado y espere aprobación.");
define("_MI_SSECTION_GLOBAL_ITEM_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} autonotificar: Nuevo artículo enviado");
define("_MI_SSECTION_HEADERPRINT","[OPCIONES DE IMPRESIÓN] Imprimir cabecera de la página");
define("_MI_SSECTION_HEADERPRINTDSC","Cabecera que será imprimida para cada artículo");
define("_MI_SSECTION_HELP_CUSTOM", "Ruta personalizada");
define("_MI_SSECTION_HELP_INSIDE", "Dentro del módulo");
define("_MI_SSECTION_HELP_PATH_CUSTOM", "Ruta personalizada para los archivos de ayuda de SmartSection");
define("_MI_SSECTION_HELP_PATH_CUSTOM_DSC", "Si eligió <em>Ruta personalizada</em> en la opción previa <em>Ruta para la los archivos de ayuda de SmartSection, por favor especifique la URL de dichos archivos, en el siguiente formato : http://www.susitio.com/doc");
define("_MI_SSECTION_HELP_PATH_SELECT", "Ruta para los archivos de ayuda de SmartSection");
define("_MI_SSECTION_HELP_PATH_SELECT_DSC", "Elija desde dónde le gustaría acceder a los archivos de ayuda de Smartsection para almacenarlos en la ruta <em>modules/smartsection/doc/</em> elegida en <em>Dentro del módulo</em>. También podrá elegir <em>Ruta personalizada</em> y especificar usted mismo la ruta a los archivos de ayuda en la siguiente opción de configuración <em>Ruta personalizada para los archivos de ayuda de SartSection</em>");
define("_MI_SSECTION_HITSCOL", "[OPCIONES DE CONTENIDO] ¿Mostrar columna con las lecturas?");
define("_MI_SSECTION_HITSCOLDSC", "Cuando el tipo de visualización elegido es <em>sumario</em>, elija <em>Sí</em> para mostrar la columna de las lecturas en la tabla de artículos del índice y de la página de la categoría.");
define("_MI_SSECTION_HLCOLOR", "[OPCIONES DE FORMATO] Resaltar palabras clave");
define("_MI_SSECTION_HLCOLORDSC", "Color que se empleará a la hora de resaltar las palabras clave en la búsqueda");
define("_MI_SSECTION_IMAGENAV", "[OPCIONES DE FORMATO] Usar la imagen de navegación de la página:");
define("_MI_SSECTION_IMAGENAVDSC", "Si elije \"Sí\", la navegación será indicada con imágenes. En caso contrario, será usada la navegación original.");
define("_MI_SSECTION_INDEXFOOTER","[OPCIONES DE CONTENIDO] Índice del pie de página");
define("_MI_SSECTION_INDEXFOOTER_SEL","Índice del pie de página");
define("_MI_SSECTION_INDEXFOOTERDSC","Pie de página que se mostrará en la página de inicio del módulo");
define("_MI_SSECTION_INDEXMSG", "[OPCIONES DE CONTENIDO] Mensaje de bienvenida para la página de inicio:");
define("_MI_SSECTION_INDEXMSGDEF", ""); 
define("_MI_SSECTION_INDEXMSGDSC", "Mensaje de bienvenida que se mostrará en la página de inicio del módulo.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY", "Artículo aprobado");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_CAP", "Notificarme la aprobación de este artículo.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_DSC", "Recibir notificación de la aprobación de este módulo.");
define("_MI_SSECTION_ITEM_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} autonotificar: artículo aprobado");
define("_MI_SSECTION_ITEM_NOTIFY", "Artículo");
define("_MI_SSECTION_ITEM_NOTIFY_DSC", "Opciones de notificación que se aplicarán al artículo actual.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY", "Artículo rechazado");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_CAP", "Notificarme si el artículo fuese rechazado.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_DSC", "Recibir notificación si el artículo es rechazado.");
define("_MI_SSECTION_ITEM_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} autonotificar: artículo rechazado"); 
define("_MI_SSECTION_ITEM_TYPE", "Tipo de elemento:");
define("_MI_SSECTION_ITEM_TYPEDSC", "Elija la clase de elementos que este módulo va a gestionar.");
define("_MI_SSECTION_ITEMFOOTER", "[OPCIONES DE CONTENIDO] Elemento pie de página");
define("_MI_SSECTION_ITEMFOOTER_SEL", "Elemento del pie de página");
define("_MI_SSECTION_ITEMFOOTERDSC","Pie de página que se aplicará a cada artículo");
define("_MI_SSECTION_ITEMSMENU", "Bloque del menú de categorías");
//bd tree block hack
define("_MI_SSECTION_ITEMSTREE", "Bloque ramificado");
//--/bd
define("_MI_SSECTION_ITEMSNEW", "Lista de elementos recientes");
define("_MI_SSECTION_ITEMSPOT", "Titular");
define("_MI_SSECTION_ITEMSRANDOM_ITEM", "Elemento al azar");
define("_MI_SSECTION_LASTITEM", "[OPCIONES DE CONTENIDO] ¿Mostrar columna del último elemento ?");
define("_MI_SSECTION_LASTITEMDSC", "Elija <em>Sí</em> para mostrar el último elemento en cada una de las categorías en el índice y en la página del módulo.");
define("_MI_SSECTION_LASTITEMS", "[OPCIONES DE CONTENIDO] ¿Mostrar la lista de nuevos artículos publicados?");
define("_MI_SSECTION_LASTITEMSDSC", "Elija <em>Sí</em> para colocar la lista al final de la primera página del módulo");
define("_MI_SSECTION_LASTITSIZE", "[OPCIONES DE FORMATO] Tamaño del último elemento :");
define("_MI_SSECTION_LASTITSIZEDSC", "Especifique el tamaño máximo del artículo en la lista de la columna de últimos elementos.");
define("_MI_SSECTION_LINKPATH", "[OPCIONES DE FORMATO] Habilitar enlaces en la ruta actual:");
define("_MI_SSECTION_LINKPATHDSC", "Esta opción le permite al usuario back-track haciendo clic sobre un elemento de la actual ruta mostrada en la parte superior de la página");
define("_MI_SSECTION_MAX_HEIGHT", "[PERMISOS] Tamaño máximo de la imagen almacenada");
define("_MI_SSECTION_MAX_HEIGHTDSC", "Tamaño máximo de las imágenes que pueden ser almacenadas.");
define("_MI_SSECTION_MAX_SIZE", "[PERMISOS] Tamaño máximo del archivo");
define("_MI_SSECTION_MAX_SIZEDSC", "Tamaño máximo (en bytes) para que los archivos puedan ser almacenados en el servidor.");
define("_MI_SSECTION_MAX_WIDTH", "[PERMISOS] Ancho máximo de la imagen a enviar");
define("_MI_SSECTION_MAX_WIDTHDSC", "Ancho máximo de las imágenes para que sean aceptadas (para almacenarlas).");
define("_MI_SSECTION_MD_DESC", "Sección de administración de su sitio ImpressCMS");
define("_MI_SSECTION_MD_NAME", "SmartSection");
define("_MI_SSECTION_MODULE_BUG", "Reporte un error");
define("_MI_SSECTION_MODULE_DEMO", "Sitio Demo");
define("_MI_SSECTION_MODULE_DISCLAIMER", "Aclaración");
define("_MI_SSECTION_MODULE_FEATURE", "Sugiera una nueva característica para este módulo");
define("_MI_SSECTION_MODULE_INFO", "Detalles del desarrollo del módulo");
define("_MI_SSECTION_MODULE_RELEASE_DATE", "Fecha de publicación");
define("_MI_SSECTION_MODULE_STATUS", "Estado");
define("_MI_SSECTION_MODULE_SUBMIT_BUG", "Enviar un error");
define("_MI_SSECTION_MODULE_SUBMIT_FEATURE", "Enviar petición de nueva característica");
define("_MI_SSECTION_MODULE_SUPPORT", "Sitio oficial de soporte");
define("_MI_SSECTION_NO_FOOTERS","Nada");
define("_MI_SSECTION_ORDERBY", "[OPCIONES DE FORMATO] Orden(importancia)");
define("_MI_SSECTION_ORDERBY_DATE", "Fecha DESC");
define("_MI_SSECTION_ORDERBY_TITLE", "Título ASC");
define("_MI_SSECTION_ORDERBY_WEIGHT", "Posición ASC");
define("_MI_SSECTION_ORDERBYDSC", "Elija el método de ordenación para los elementos contenidos en el módulo.");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_ALL", "Todos los artículos");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_NONE", "Ninguno");
define("_MI_SSECTION_OTHER_ITEMS_TYPE_PREVIOUS_NEXT", "Artículos anterior y siguiente");
define("_MI_SSECTION_OTHERITEMS", "[OPCIONES DE FORMATO] Tipo de visualización para otros artículos");
define("_MI_SSECTION_OTHERITEMSDSC", "Elija cómo le gustaría que se mostrasen los demás artículos de la categoría en la página de artículos.");
define("_MI_SSECTION_PERPAGE", "[OPCIONES DE FORMATO] Artículos máximos por página (en la administración):");
define("_MI_SSECTION_PERPAGEDSC", "Número máximo de artículos por página que se mostrarán a la vez en la administración.");
define("_MI_SSECTION_PERPAGEINDEX", "[OPCIONES DE FORMATO] Artículos máximos por página (para mostrar a los usuarios):");
define("_MI_SSECTION_PERPAGEINDEXDSC", "[OPCIONES DE IMPRESIÓN] Número máximo de artículos por página que se mostrarán a la vez a los visitantes del sitio.");
define("_MI_SSECTION_PRINTLOGOURL","[OPCIONES DE IMPRESIÓN] URL del logo a imprimir");
define("_MI_SSECTION_PRINTLOGOURLDSC","URL del logo que será imprimido al comienzo de la página");
define("_MI_SSECTION_RECENTITEMS", "Elementos recientes (Detalle)");
define("_MI_SSECTION_SHOW_RSS","[OPCIONES DE CONTENIDO] Mostrar enlace para la fuente de RSS");
define("_MI_SSECTION_SHOW_RSSDSC","");
define("_MI_SSECTION_SHOW_SUBCATS", "[OPCIONES DE CONTENIDO] Mostrar subcategorías");
define("_MI_SSECTION_SHOW_SUBCATS_ALL", "Mostrar todas las subcategorías");
define("_MI_SSECTION_SHOW_SUBCATS_DSC", "Decida si desea mostrar las subcategorías en la lista de categorías del índice y de la página de categoría del módulo");
define("_MI_SSECTION_SHOW_SUBCATS_NO", "No mostrar subcategorías");
define("_MI_SSECTION_SHOW_SUBCATS_NOTEMPTY", "Mostrar categorías no vacías");
define("_MI_SSECTION_SUB_SMNAME1", "Enviar un artículo");
define("_MI_SSECTION_SUB_SMNAME2", "Artículos populares");
define("_MI_SSECTION_SUBMITMSG", "[OPCIONES DE CONTENIDO] Mensaje para la página de introducción:");
define("_MI_SSECTION_SUBMITMSGDEF", "");
define("_MI_SSECTION_SUBMITMSGDSC", "Mensaje de entrada que se mostrará en la página de envío del módulo.");
define("_MI_SSECTION_TITLE_SIZE", "[OPCIONES DE FORMATO] Tamaño del título :");
define("_MI_SSECTION_TITLE_SIZEDSC", "Indique el tamaño máximo del artículo en la página.");
define("_MI_SSECTION_UPLOAD", "[PERMISOS] ¿Permitir al usuario enviar archivos?");
define("_MI_SSECTION_UPLOADDSC", "Permitir a los usuarios enviar al servidor y almacenar en él archivos enlazados a los artículos de su sitio?");
define("_MI_SSECTION_USEREALNAME", "[OPCIONES DE FORMATO] Usar el nombre real de los usuarios");
define("_MI_SSECTION_USEREALNAMEDSC", "Cuando se muestra un nombre de usuario, utilizar el nombre real del usuario si dicho usuario eligió mostrar su nombre real.");
define("_MI_SSECTION_VERSION_HISTORY", "Historial de versiones");
define("_MI_SSECTION_WARNING_BETA", "Este módulo se distribuye tal cual es, sin garantías de ningún tipo. Este módulo es BETA, lo que significa que está todavía en activo desarrollo. Este lanzamiento se realiza <b>sólo con intenciones de testeo</b> y le <b>recomendamos</b> que no lo use en sitios web finales o abiertos al público.");
define("_MI_SSECTION_WARNING_FINAL", "Este módulo se distribuye tal cual es. Sin embargo, este módulo no es beta, está aún en activo desarrollo. Esta versión podrá ser usada en sitios finales o abiertos al público pero su uso siempre será bajo su responsabilidad. Ello significa que el autor no es responsable de nada.");
define("_MI_SSECTION_WARNING_RC", "Este módulo se distribuye tal cual es, sin garantías del ningún tipo. Este módulo es una Candidata a Lanzamiento y debería no ser usado en sitios finales o abiertos al público. el módulo está aún en desarrollo y su uso siempre será bajo su responsabilidad. Ello significa que el autor no es responsable de nada.");
define("_MI_SSECTION_WELCOME", "[OPCIONES DE CONTENIDO] Mostrar el título y el mensaje de bienvenida:");
define("_MI_SSECTION_WELCOMEDSC", "Si esta opción está marcada como <em>Sí</em>, la página de inicio del módulo mostrará el título <em>Bienvenido a ...</em>, seguida del mensaje de bienvenida. Si esta opción está marcada como <em>No</em> ninguna de estas líneas será mostrada.");
define("_MI_SSECTION_WHOWHEN", "[OPCIONES DE CONTENIDO] ¿Mostrar autor y fecha?");
define("_MI_SSECTION_WHOWHENDSC", "Indique <em>Sí</em> si desea mostrar el autor y la fecha en la página individual del artículo");
define("_MI_SSECTION_WYSIWYG", "[OPCIONES DE FORMATO] Tipo de editor");
define("_MI_SSECTION_WYSIWYGDSC", "¿Qué clase de editor le gustaría usar? Por favor, considere que si elige cualquier otro que no sea el incluído de forma predeterminada en ImpressCMS es necesario que sea instalado previamente por usted.");
define("_MI_SSECTION_PV_TEXT", "Vista parcial del mensaje");
define("_MI_SSECTION_PV_TEXTDSC", "Mensaje para los artículos que sólo permiten lectura parcial.");
define("_MI_SSECTION_PV_TEXT_DEF", "Para consultar el artículo completo ha de registrarse.");
define("_MI_SSECTION_SEOMODNAME", "Nombre del módulo para el <em>URL Rewriting</em>");
define("_MI_SSECTION_SEOMODNAMEDSC", "Si el <em>URL Rewriting</em> está activado para el módulo, este será el nombre del módulo usado. Por ej:_http://misitio.com/smartection/...");
define("_MI_SSECTION_ARTCOUNT", "Mostrar número de artículos");
define("_MI_SSECTION_ARTCOUNTDSC", "Elija <em>Sí</em> para mostrar el número de artículos de cada categoría en la tabla de sumario. Considere que el módulo actualmente sólo cuenta artículos dentro de cada categoría y no de las subcategorías.");
define("_MI_SSECTION_LATESTFILES", "Últimos archivos almacenados");
//Añadido en 2.13
define("_MI_SSECTION_PATHSEARCH", "[OPCIONES DE FORMATO] Mostrar la ruta de la categoría en los resultados de la búsqueda");
define("_MI_SSECTION_PATHSEARCHDSC", "");
//Añadido en la versión 2.14
define("_MI_SSECTION_SHOW_SUBCATS_NOMAIN", "Mostrar las subcategorías solo en la página índice");
define("_MI_SSECTION_RATING_ENABLED", "Activar el sistema de valoraciones");
define("_MI_SSECTION_RATING_ENABLEDDSC", "Esta característica requiere la instalación de <em>SmartObject Framework</em>");
define("_MI_SSECTION_DISPBREAD", "Mostrar los <em>Breadcrumbs</em>");
define("_MI_SSECTION_DISPBREADDSC", "La navegación <em>Breadcrumb</em> muestra el contexto de la página actual dentro de ĺa estructura del sitio.");
define("_MI_SSECTION_DATE_TO_DATE", "Artículos de fecha a fecha");
?>