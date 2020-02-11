<?php

namespace Engine\Service;

abstract class AbstractProvider {
    /**
     * Undocumented variable
     *
     * @var [type]
     */

    protected $di; 
/**
 * Undocumented function
 *
 * @param \Engine\DI\DI $di
 */
    public function __construct(\Engine\DI\DI $di)
    {
        $this->di = $di;
    }

    abstract function init();
   
}


?>