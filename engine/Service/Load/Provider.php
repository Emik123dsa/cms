<?php 
namespace Engine\Service\Load;

use Engine\Service\AbstractProvider;
use Engine\Load;


class Provider extends AbstractProvider {
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $serviceName = 'load';
    /**
     * Undocumented function
     *
     * @return void
     */
    public function init() {
        $load = new Load($this->di);

        $this->di->set($this->serviceName, $load);
        return $this;
    }
}

?>
