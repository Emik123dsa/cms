<?php 
namespace Engine\Service\Database;

use Engine\Service\AbstractProvider;
use Engine\Core\Database\Connection;

class Provider extends AbstractProvider {
    /**
     * Undocumented variable
     *
     * @var string
     */
    public $serviceName = 'db';
    /**
     * Undocumented function
     *
     * @return void
     */
    public function init() {
        $db = new Connection();

        $this->di->set($this->serviceName, $db);
    }
}

?>
