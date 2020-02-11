<?php 
namespace Engine\Core\Template;

use Engine\Core\Config\Config;
class Theme {
    
    const RULES_NAME_FILE = [
        'header' => 'header-%s',
        'footer' => 'footer-%s',
        'sidebar' => 'sidebar-%s'
    ];

    const URL_THEME_MASK = '%s/content/themes/%s';
/**
 * Undocumented variable
 *
 * @var string
 */
    protected static $url = '';
/**
 * Undocumented variable
 *
 * @var array
 */
    protected static $data = [];
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $asset;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $theme;
/**
 * Undocumented function
 *
 * @return void
 */
    public static function getData() {
        return static::$data;
    }
/**
 * Undocumented function
 *
 * @param [type] $data
 * @return void
 */
    public static function setData($data) {
        static::$data = $data;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    //public $asset;
/**
 * Undocumented variable
 *
 * @var [type]
 */
    

    public function __construct()
    {
        $this->asset = new Asset();
        $this->theme = $this;
        
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public static function getUrl() {
        $currentTheme = Config::item('defaultTheme', 'main'); 
        $baseUrl = Config::item('baseUrl', 'main');
        return sprintf(self::URL_THEME_MASK,$baseUrl, $currentTheme);
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public static function getThemePath() {
        return ROOT_DIR . '/content/themes/default';
    }

    public static function title() {
        $nameSite = Setting::get('nameSite');
        $description = Setting::get('descriptionSite');

        echo $nameSite . ' | ' .$description;
    }

/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
    public static function header($name = null) {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);
        Component::load($file);
    }
/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
    public static function footer($name = null) {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);
        Component::load($file);
    }
/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
    public static function sidebar($name = null) {
        $name = (string) $name;
        $file = self::detectNameFile($name, __FUNCTION__);
        Component::load($file);

    }
/**
 * Undocumented function
 *
 * @param string $name
 * @param array $data
 * @return void
 */
    public static function block($name = '', $data = []) {
        $name = (string) $name;
        if($name !== '') {
            Component::load($name, $data);
        } 
    } 
/**
 * Undocumented function
 *
 * @param [type] $nameFile
 * @param array $data
 * @return void
 */
    private static function detectNameFile($name, $function) {
        return empty(trim($name)) ? $function :sprintf(self::RULES_NAME_FILE[$function], $name);
    }
    
}
?>