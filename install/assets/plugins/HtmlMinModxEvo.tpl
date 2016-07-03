/**
 * HtmlMinModxEvo
 * HtmlMinModxEvo plugin for MODX Evo
 *
 * Порт плагина HtmlInLine https://github.com/MODXim/MODX.plugins/tree/master/HtmlInLine
 * Добавлена более удобная регулярка удаления лишних пробелов, переносов табов.
 * Плюс бонус - удаление комментариев в html коде, но при этом оставляем комментарии для браузера IE
 *
 * @category    plugin 
 * @version 1.0
 * @license     http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL) 
 * @internal    @properties 
 * @internal    @events OnWebPagePrerender 
 * @internal    @modx_category Content 
 * @internal    @legacy_names HtmlInLine
 * @internal    @installset base
 * @author ProjectSoft (projectsoft@ioweb.ru)
*/
//author ProjectSoft (projectsoft@ioweb.ru)

require MODX_BASE_PATH.'assets/plugins/HtmlMinModxEvo/plugin.htmlminmodxevo.php';
