//<?php
/**************************************/
/** HtmlMinModxEvo plugin for MODX Evo
*
* @version 1.0
* @author ProjectSoft (projectsoft@ioweb.ru)
*
* @category plugin
* @internal @event OnWebPagePrerender
* @internal @modx_category HTML-code
*
*/
/*************************************/
$e =&$modx->event;
switch ($e->name) {
    case "OnWebPagePrerender":{
        if($modx->documentObject['searchable']==1){
            $modx->documentOutput = preg_replace('|\s+|', ' ', preg_replace('|(\s+)?\n(\s+)?|', '', preg_replace('|<!(--)?(\s+)?(?!\[).*-->|', '', $modx->documentOutput)));
        }
        break;
    }
}
