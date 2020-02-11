<?php 
namespace Engine\Core\Config;

class Repository {
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected static $stored = [];
/**
 * Undocumented function
 *
 * @param [type] $group
 * @param [type] $key
 * @param [type] $data
 * @return void
 */
    public static function store($group, $key, $data) {
        if (!isset(static::$stored[$group]) || !is_array(static::$stored[$group])) {
            static::$stored[$group] = [];
        }

        static::$stored[$group][$key] = $data;
    }
/**
 * Undocumented function
 *
 * @param [type] $group
 * @param [type] $key
 * @return void
 */
    public static function retrieve($group, $key) {
        return isset(static::$stored[$group][$key]) ? static::$stored[$group][$key] : false; 
    }
/**
 * Undocumented function
 *
 * @param [type] $group
 * @return void
 */
    public static function retrieveGroup($group) {
        return isset(static::$stored[$group]) ? static::$stored[$group] : false; 
    }
}

?>