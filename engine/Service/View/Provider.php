<?php 
namespace Engine\Service\View;

use Engine\Service\AbstractProvider;
use Engine\Core\Template\View;

class Provider extends AbstractProvider {
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $serviceName = 'view';
    /**
     * Undocumented function
     *
     * @return void
     */
    public function init() {
        $view = new View($this->di);

        $this->di->set($this->serviceName, $view);
    }
}

?>
