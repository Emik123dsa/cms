<?php 

namespace Engine\DI;

class DI {

    private $container = [];
    /**
     * Undocumented function
     *
     * @param [type] $key
     * @param [type] $value
     * @return void
     */

    public function set($key, $value) {
        
        $this->container[$key] = $value;

        return $this;
    }

    public function get($key) {

        return $this->has($key);

    }

    /**
     * Undocumented function
     *
     * @param [type] $key
     * @return boolean
     */

    public function has($key) {
        return isset($this->container[$key]) ? $this->container[$key] : null;
        
    }
/**
 * Undocumented function
 *
 * @param [type] $key
 * @param [type] $value
 * @return void
 */
    public function push($key, $element = []) {
        if ($this->has($key) !== null) {
            $this->set($key, []);
        }

        if (!empty($element)) {
        $this->container[$key][$element['key']] = $element['value'];
        }
    }

}

?>