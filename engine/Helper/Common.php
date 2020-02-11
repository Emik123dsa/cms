<?php 
namespace Engine\Helper;

class Common {
    /**
     * Undocumented function
     *
     * @return boolean
     */
    static function isPost() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true; 
        } else {
            return false;
        }
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    static function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }
/**
 * Undocumented function
 *
 * @return void
 */
    static function getPathUrl() {
        $pathUrl = $_SERVER['REQUEST_URI'];
        if($position = strpos($pathUrl, '?')) {
            $pathUrl = substr($pathUrl, '0', $position);
        }
        return $pathUrl;
    }
}

?>