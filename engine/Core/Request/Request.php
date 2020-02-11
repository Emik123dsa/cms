<?php 
namespace Engine\Core\Request; 

class Request {
    /**
     * Undocumented variable
     *
     * @var array
     */
    public $post = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    public $get = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    public $cookie = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    public $files = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    public $request = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    public $server = [];

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->files = $_FILES;
        $this->server = $_SERVER;
        $this->cookie = $_COOKIE;
        $this->request = $_REQUEST;
    }
}

?>