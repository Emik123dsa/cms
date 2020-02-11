<?php 

namespace Admin\Model\Setting; 

use Engine\Core\Database\ActiveRecord;

class Setting {
    use ActiveRecord; 

    protected $table = 'setting';
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
    public $value;
/**
 * Undocumented variable
 *
 * @var [type]
 */
    public $key_field;
/**
 * Undocumented function
 *
 * @return void
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
 * @return void
 */
    public function getValue() {
        return $this->value;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function getKeyField() {
        return $this->key_field;
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
 * @param [type] $title
 * @return void
 */
    public function setName($name) {
        $this->name = $name;
    }
/**
 * Undocumented function
 *
 * @param [type] $content
 * @return void
 */
    public function setValue($value) {
        $this->value = $value;
    }
    /**
     * Undocumented function
     *
     * @param [type] $key_field
     * @return void
     */
    public function setKeyField($key_field) {
        $this->key_field = $key_field;
    }

}

?>