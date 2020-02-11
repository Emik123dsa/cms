<?php 

namespace Engine;

use Engine\Core\Router\DispatchedRoute;
use Engine\Helper\Common;

class CMS
{
    private $di;

    public $router;

/**
 * Undocumented function
 *
 * @param [type] $di
 */

    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Undocumented function
     *
     * @return void
     */ 

    public function run() {
        try {
        require_once __DIR__. '/../'. mb_strtolower(ENV) .'/Route.php';
            
        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());

        if ($routerDispatch == null) {
            $routerDispatch = new DispatchedRoute('ErrorController:page404');
        } 

        list ($class, $action) = explode(':', $routerDispatch->getController(), 2);
        $controller = '\\'. ENV .'\\Controller\\' . $class;
        $parameter = $routerDispatch->getParameters();
        
        call_user_func_array([new $controller($this->di), $action], $parameter);
    } catch(\Exception $e) {
        echo $e->getMessage();
        exit;
    }
    }
}

?>