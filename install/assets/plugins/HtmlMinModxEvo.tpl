//<?php
/**************************************/
/** HtmlMinModxEvo plugin for MODX Evo
*	Порт плагина HtmlInLine https://github.com/MODXim/MODX.plugins/tree/master/HtmlInLine
*	Добавлена более удобная регулярка удаления лишних пробелов, переносов табов.
*	Плюс бонус - удаление комментариев в html коде, но при этом оставляем комментарии для браузера IE
*
* @version 1.0
* @author ProjectSoft (projectsoft@ioweb.ru)
*
* @category plugin
* @internal @event OnWebPagePrerender
* @internal @modx_category HTML-code
*
*/
/**************************************/

require MODX_BASE_PATH.'assets/plugins/HtmlMinModxEvo/plugin.htmlminmodxevo.php';