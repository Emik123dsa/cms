<?php 
namespace Engine\Core\Router; 

class Router {
    /**
     * 
     *
     */
    private $dispatcher;
    private $routes = [];
    private $host;
    /**
     * Undocumented function
     *
     * @param [type] $host
     */
    public function __construct($host) {
        $this->host = $host;
    }
    /**
     * Undocumented function
     *
     * @param [type] $key
     * @param [type] $pattern
     * @param [type] $controller
     * @param string $method
     * @return void
     */
    
    
    public function add($key, $pattern, $controller, $method = 'GET') {
        $this->routes[$key] = [
            'pattern'       => $pattern, 
            'controller'    => $controller,
            'method'        => $method
        ];
    }
/**
 * Undocumented function
 *
 * @param [type] $method
 * @param [type] $uri
 * @return void
 */
 
    public function dispatch($method, $uri) {
        return $this->getDispatcher()->dispatch($method, $uri);
    }
    
    /**
     * 
     */
/**
 * Undocumented function
 *
 * @return void
 */
    public function getDispatcher() {

        if ($this->dispatcher == null) {

            $this->dispatcher = new UrlDispatcher();

            foreach($this->routes as $route) {
                $this->dispatcher->register($route['method'], $route['pattern'], $route['controller']);
            }

        }
            return $this->dispatcher;
    }

    
}
?>