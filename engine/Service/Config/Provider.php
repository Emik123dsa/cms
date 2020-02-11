<?php 

namespace Engine\Service\Config;

use Engine\Service\AbstractProvider;
use Engine\Core\Config\Config;

class Provider extends AbstractProvider {
/**
 * Undocumented variable
 *
 * @var string
 */
public $serviceName = 'config';
/**
 * Undocumented function
 *
 * @return void
 */

public function init() {
        $config['main'] = Config::file('main');
        $config['database'] = Config::file('database');
        $this->di->set($this->serviceName, $config);
}

}


?>