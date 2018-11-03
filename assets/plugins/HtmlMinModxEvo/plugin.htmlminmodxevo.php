<?php
/**
 * HtmlMinModxEvo
 * HtmlMinModxEvo plugin for MODX Evo
 *
 * 
 * Порт плагина HtmlInLine https://github.com/MODXim/MODX.plugins/tree/master/HtmlInLine
 * Добавлена более удобная регулярка удаления лишних пробелов, переносов табов.
 * Плюс бонус - удаление комментариев в html коде, но при этом оставляем комментарии для браузера IE
 *
 * @category    plugin 
 * @version 1.2
 * @license     http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL) 
 * @internal    @properties 
 * @internal    @events OnWebPagePrerender 
 * @internal    @modx_category Content 
 * @internal    @legacy_names HtmlMinModxEvo
 * @internal    @installset base
 * @author ProjectSoft (projectsoft2009@yandex.ru)
*/
//author ProjectSoft (projectsoft2009@yandex.ru)
if(!defined('MODX_BASE_PATH')) die('What are you doing? Get out of here!');
global $modx;
if (!function_exists('replace_project_html')) {
	function replace_project_html($matches){
		$res = preg_replace('(\r(?:\n)?)', "\xD6\xD6\xD6\xD6", $matches[2]);
		return $matches[1].'"'.$res.'"';
	}
}
$e =&$modx->event;
switch ($e->name) {
    case "OnWebPagePrerender":{
        if($modx->documentObject['searchable']==1){
			$str = $modx->documentOutput;
			$re = '/((?:content=)|(?:"description":\s+))(?:"|\')([A-я\S\s\d\D\X\W\w]+)(?:"|\')/mUi';
			$str = preg_replace_callback($re,"replace_project_html",$str);
			$str = preg_replace("/(\xD6\xD6\xD6\xD6)/", "\n", preg_replace('/\s+/u', ' ', preg_replace('|(\s+)?\n(\s+)?|', '', preg_replace('|<!(--)?(\s+)?(?!\[).*-->|', '', $str))));
			
           	$modx->documentOutput = $str;
        }
        break;
    }
}
?>
