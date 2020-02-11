<?php 

namespace Cms\Model\Menu; 

use Engine\Core\Database\ActiveRecord;

class Menu {
    use ActiveRecord;
/**
 * Undocumented variable
 *
 * @var string
 */
    protected $table = 'menu'; 
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $id; 
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $name; 
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public function getId() {
        return $this->id;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getName() {
        return $this->name; 
    }
/**
 * Undocumented function
 *
 * @param [type] $name
 * @return void
 */
    public function setName($name) {
        $this->name = $name;
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setId($id) {
        $this->id = $id;
    }
}

?>