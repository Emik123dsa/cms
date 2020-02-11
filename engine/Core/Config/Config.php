<?php
namespace Engine\Core\Config;

use Exception;

class Config {
    /**
     * Undocumented function
     *
     * @param [type] $key
     * @param string $group
     * @return void
     */
    public static function item($key, $group = 'main') {
        if (!Repository::retrieve($group, $key)) {
        self::file($group);
        }
        
        return Repository::retrieve($group, $key);

    }
/**
 * Undocumented function
 *
 * @param [type] $group
 * @return void
 */
    public static function group($group) {
        if(!Repository::retrieveGroup($group)) {
            self::file($group);
        }

        return Repository::retrieveGroup($group);

    }
/**
 * Undocumented function
 *
 * @param [type] $group
 * @return void
 */
    public static function file($group = 'main') {
        $path = path('config') . DS . $group . '.php';

        if(file_exists($path)) {

            $items = include $path;

            if(is_array($items)) {
                foreach($items as $key => $value) {
                    Repository::store($group, $key, $value);
                }
            return true;
            } else {
                throw new \Exception(sprintf('File %s is not being an array ', $path));
            }

        } else {
            throw new \Exception(sprintf('Can"t receive this is file from <strong>%s</strong> library', $path));
           
        }

        return false;

    }
}


?>