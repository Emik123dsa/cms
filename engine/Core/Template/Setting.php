<?php 

namespace Engine\Core\Template;

use Admin\Model\Setting\SettingRepository;
use Engine\DI\DI; 

class Setting {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected static $di;
/**
 * Undocumented variable
 *
 * @var [type]
 */
    protected static $settingRepository;

    public function __construct($di)
    {
        self::$di = $di; 
        self::$settingRepository = new SettingRepository(self::$di);
    }
/**
 * Undocumented function
 *
 * @param [type] $keyField
 * @return void
 */
    public static function get($keyField) {
        return self::$settingRepository->getSettingValue($keyField);
    }
    
}


?>