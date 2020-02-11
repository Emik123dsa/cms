<?php 

namespace Engine\Core\Customize; 
use Engine\DI\DI; 

class Customize {
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $config; 
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
    private static $_instance = null; 
/**
 * Undocumented function
 *
 * @param DI $di
 * @return void
 */
    private function _construct(DI $di) {
        static::$di = $di; 
        $this->config = new Config();
    }
/**
 * Undocumented function
 *
 * @return void
 */
    protected function __clone() {

    }
/**
 * Undocumented function
 *
 * @return void
 */
    static public function getInstance() {
            if (is_null(self::$_instance)) {
                self::$_instance = new self(static::$di); 
            }
            return self::$_instance;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function importConfig() {

    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getConfig() {
        return $this->config; 
    }

    public function getAdmineMenuItem() {
        return $this->getConfig()->get('dashboard');
    }

   
}


?>