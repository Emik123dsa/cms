<?php 
namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider {
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $serviceName = 'router';
    /**
     * Undocumented function
     *
     * @return void
     */
    public function init() {
        $router = new Router('http://localhost:8888/dynweb/cms/');

        $this->di->set($this->serviceName, $router);
    }
}

?>
