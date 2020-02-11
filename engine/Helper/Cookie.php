<?php 
namespace Engine\Helper;

class Cookie {
/**
 * Undocumented function
 *
 * @param [type] $key
 * @param [type] $value
 * @return void
 */
public static function set($key, $value, $time = 31536000) {
    setcookie($key, $value, time()+$time, '/');
}
/**
 * Undocumented function
 *
 * @param [type] $key
 * @return void
 */
public static function get($key) {
    if (isset($_COOKIE[$key])) {
        return $_COOKIE[$key];
    }
    return null;

}
/**
 * Undocumented function
 *
 * @param [type] $key
 * @return void
 */
public function delete($key) {
    if(isset($_COOKIE[$key])) {
        self::set($key, '', -3600);
        unset($_COOKIE[$key]);
    }
}



}
?>