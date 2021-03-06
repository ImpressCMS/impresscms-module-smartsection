<?php
/*
 * $Id
 * Module: SmartSection
 * Author: Sudhaker Raj <http://xoops.biz>
 * Licence: GNU
 */

// define SMARTSECTION_SEO_ENABLED in mainfile.php, possible values
//   are "rewrite" & "path-info"

/**
 * Create a title for the short_url field of an article
 *
 * @credit psylove
 *
 * @var string $title title of the article
 * @var string $withExt do we add an html extension or not
 * @return string sort_url for the article
 */

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

include_once(XOOPS_ROOT_PATH . '/modules/smartsection/include/functions.php');

function smartsection_seo_title($title='', $withExt=true)
{
    /**
     * if XOOPS ML is present, let's sanitize the title with the current language
     */
     $myts = MyTextSanitizer::getInstance();
     if (method_exists($myts, 'formatForML')) {
     	$title = $myts->formatForML($title);
     }

    // Transformation de la chaine en minuscule
    // Codage de la chaine afin d'�viter les erreurs 500 en cas de caract�res impr�vus
    $title   = rawurlencode(strtolower($title));

    // Transformation des ponctuations
    //                 Tab     Space      !        "        #        %        &        '        (        )        ,        /        :        ;        <        =        >        ?        @        [        \        ]        ^        {        |        }        ~       .
    $pattern = array("/%09/", "/%20/", "/%21/", "/%22/", "/%23/", "/%25/", "/%26/", "/%27/", "/%28/", "/%29/", "/%2C/", "/%2F/", "/%3A/", "/%3B/", "/%3C/", "/%3D/", "/%3E/", "/%3F/", "/%40/", "/%5B/", "/%5C/", "/%5D/", "/%5E/", "/%7B/", "/%7C/", "/%7D/", "/%7E/", "/\./");
    $rep_pat = array(  "-"  ,   "-"  ,   ""   ,   ""   ,   ""   , "-100" ,   ""   ,   "-"  ,   ""   ,   ""   ,   ""   ,   "-"  ,   ""   ,   ""   ,   ""   ,   "-"  ,   ""   ,   ""   , "-at-" ,   ""   ,   "-"   ,  ""   ,   "-"  ,   ""   ,   "-"  ,   ""   ,   "-"  ,  ""  );
    $title   = preg_replace($pattern, $rep_pat, $title);

    // Transformation des caract�res accentu�s
    //                  �        �        �        �        �        �        �        �        �        �        �        �        �        �        �
    $pattern = array("/%B0/", "/%E8/", "/%E9/", "/%EA/", "/%EB/", "/%E7/", "/%E0/", "/%E2/", "/%E4/", "/%EE/", "/%EF/", "/%F9/", "/%FC/", "/%FB/", "/%F4/", "/%F6/");
    $rep_pat = array(  "-", "e"  ,   "e"  ,   "e"  ,   "e"  ,   "c"  ,   "a"  ,   "a"  ,   "a"  ,   "i"  ,   "i"  ,   "u"  ,   "u"  ,   "u"  ,   "o"  ,   "o"  );
    $title   = preg_replace($pattern, $rep_pat, $title);

    if (sizeof($title) > 0)
    {
        if ($withExt) {
            $title .= '.html';
        }
        return $title;
    }
    else
        return '';
}

function smartsection_seo_genUrl($op, $id, $short_url="")
{
    $smartModuleConfig = smartsection_getModuleConfig();
    if (defined('SMARTSECTION_SEO_ENABLED'))
    {
    	if (! empty($short_url)) $short_url = $short_url . '.html';

        if (SMARTSECTION_SEO_ENABLED == 'rewrite')
        {
            // generate SEO url using htaccess
            return XOOPS_URL."/" . $smartModuleConfig['module_seo_modulename'] . ".${op}.${id}/${short_url}";
        }
        else if (SMARTSECTION_SEO_ENABLED == 'path-info')
        {
            // generate SEO url using path-info
            return XOOPS_URL."/modules/smartsection/seo.php/${op}.${id}/${short_url}";
        }
        else
        {
            die('Unknown SEO method.');
        }
    }
    else
    {
       // generate classic url
        switch ($op) {
            case 'category':
               return XOOPS_URL."/modules/smartsection/${op}.php?categoryid=${id}";
            case 'item':
            case 'print':
               return XOOPS_URL."/modules/smartsection/${op}.php?itemid=${id}";
            default:
                die('Unknown SEO operation.');
        }
    }
}
?>