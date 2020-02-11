<?php 

namespace Engine\Core\Template;

class Asset {
    const EXT_JS = '.js';
    const EXT_CSS = '.css';
    const EXT_LESS = '.less';
    //const EXT_SASS = '.sass';

    const JS_SCRIPT_MASK = '<script type="text/javascript" src="%s"> </script>';
    const CSS_LINK_MASK = '<link href="%s" rel="stylesheet" type="text/css">';
/**
 * Undocumented variable
 *
 * @var array
 */
    public static $container = [];
/**
 * Undocumented function
 *
 * @param [type] $link
 * @return void
 */
    public static function css($link) {
        $file = Theme::getThemePath() . DS . $link . self::EXT_CSS;
       
        if (is_file($file)) {
            self::$container['css'][] = [
                'file' => Theme::getUrl() . '/' . $link . self::EXT_CSS
            ];
            
        } 
             
    }
    /**
     * Undocumented function
     *
     * @param [type] $link
     * @return void
     */
    public static function js($link) {
        $file = Theme::getThemePath() . DS . $link . self::EXT_JS;
        if (is_file($file)) {
            self::$container['js'][] = [
                'file' => Theme::getUrl() . '/' . $link . self::EXT_JS
            ];
        }
    }
/**
 * Undocumented function
 *
 * @param [type] $extension
 * @return void
 */
    public static function render($extension) {
        $listAssets = isset(self::$container[$extension]) ? self::$container[$extension] : false;
        if ($listAssets) {
            $renderMethod  = 'render' . ucfirst($extension);
            //echo $renderMethod;
            self::$renderMethod($listAssets);
        }
    }
/**
 * Undocumented function
 *
 * @param [type] $list
 * @return void
 */
    public static function renderJs($list) {
        foreach($list as $item) {
            echo 
            sprintf(self::JS_SCRIPT_MASK, $item['file']);
        }
    }

    public static function renderCss($list) {
        foreach($list as $item) {
            echo 
            sprintf(self::CSS_LINK_MASK, $item['file']);
        }
    }
}

?>