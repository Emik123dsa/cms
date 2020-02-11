<?php 
namespace Engine\Service\Request;

use Engine\Service\AbstractProvider;
use Engine\Core\Request\Request;

class Provider extends AbstractProvider {
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $serviceName = 'request';
    /**
     * Undocumented function
     *
     * @return void
     */
    public function init() {
        $requst = new Request();

        $this->di->set($this->serviceName, $requst);
    }
}

?>
