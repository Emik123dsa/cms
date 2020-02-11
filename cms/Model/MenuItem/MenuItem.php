<?php 

namespace Cms\Model\MenuItem; 

use Engine\Core\Database\ActiveRecord;

class MenuItem {
    use ActiveRecord;
/**
 * Undocumented variable
 *
 * @var string
 */
    protected $table = 'menu_item'; 
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
    public $parent;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $position;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $link;   
/**
 * Undocumented function
 *
 * @return void
 */
    public $menu_id; 

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
 * @return void
 */
    public function getParent() {
        return $this->parent; 
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getPosition() {
        return $this->position;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getLink() {
        return $this->link;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getMenuId() {
        return $this->menu_id;
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
 * @param [type] $parent
 * @return void
 */
    public function setParent($parent) {
        $this->parent = $parent;
    }
/**
 * Undocumented function
 *
 * @param [type] $position
 * @return void
 */
    public function setPosition($position) {
        $this->position = $position;
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
/**
 * Undocumented function
 *
 * @param [type] $link
 * @return void
 */
    public function setLink($link) {
        $this->link = $link;
    }

    public function setMenuId($menu_id) {
        $this->menu_id = $menu_id;
    }
}

?>