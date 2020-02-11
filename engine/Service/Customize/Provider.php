<?php 

namespace Engine\Service\Customize;

use Engine\Service\AbstractProvider;
use Engine\Core\Customize\Customize;

class Provider extends AbstractProvider {
/**
 * Undocumented variable
 *
 * @var string
 */
public $serviceName = 'customize';
/**
 * Undocumented function
 *
 * @return void
 */

public function init() {
    
        $customize = new Customize($this->di);
       
        $this->di->set($this->serviceName, $customize); 

        return $this;
}

}


?>