<?php 
namespace Engine\Core\Router;
//use Engine\Core\Router\DispatchedRoute;

class UrlDispatcher {
    /**
     * Undocumented variable
     *
     * @var array
     */
    private $methods = [
    'GET',
    'POST'
    ];
    /**
     * Undocumented variable
     *
     * @var array
     */
    private $routes = [
        'GET' => [],
        'POST' => []
    ];
    /**
     * Undocumented variable
     *
     * @var array
     */
    private $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];
/**
 * Undocumented function
 *
 * @param [type] $key
 * @param [type] $pattern
 * @return void
 */
    public function addPattern($key, $pattern) {
        $this->patterns[$key] = $pattern;
    }
/**
 * 
 */

    private function routes($method) {
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }
/**
 * 
 */
/**
 * Undocumented function
 *
 * @param [type] $method
 * @param [type] $uri
 * @return void
 */
    public function dispatch($method, $uri) {
        $routes = $this->routes(strtoupper($method));

        if (array_key_exists($uri, $routes)) {
            return new DispatchedRoute($routes[$uri]);
        }
            return $this->doDispatch($method, $uri);
        
    }
/**
 * Undocumented function
 *
 * @param [type] $method
 * @param [type] $uri
 * @return void
 * 
 * 
 */
    public function register($method, $pattern, $controller) {
        //print_r($pattern);
        $convert = $this->convertPattern($pattern);
        $this->routes[strtoupper($method)][$convert] = $controller; 
    }
/**
 * Undocumented function
 *
 * @param [type] $pattern
 * @return void
 */
    private function convertPattern($pattern) {
        if (strpos($pattern, '(') === false) {
            return $pattern;
        }
        return preg_replace_callback('#\((\w+):(\w+)\)#', [$this, 'replacePattern'], $pattern);
    }
/**
 * Undocumented function
 *
 * @param [type] $matches
 * @return void
 */
    private function replacePattern($matches) {
        return '(?<'.$matches[1].'>'.strtr($matches[2], $this->patterns).')';
    }
/**
 * Undocumented function
 *
 * @param [type] $parameters
 * @return void
 */
    private function processParam($parameters) {
        foreach($parameters as $key => $value) {
            if (is_int($key)) {
                unset($parameters[$key]);
            }
        }
        return $parameters;
    }

    private function doDispatch($method, $uri) {
        foreach($this->routes($method) as $route => $controller) {
            $pattern = "#".$route. "$#s";

            if (preg_match($pattern, $uri, $parameters)) {
            return new DispatchedRoute($controller, $this->processParam($parameters));
            }
        }
    }
/**
 * Undocumented function
 *
 * @param [type] $method
 * @param [type] $pattern
 * @param [type] $controller
 * @return void
 */
    
}

?>