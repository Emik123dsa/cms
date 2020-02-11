<?php 

namespace Admin\Model\User;

use Engine\Core\Database\ActiveRecord;

class User {
    use ActiveRecord;
/**
 * Undocumented variable
 *
 * @var string
 */
    protected $table = 'user';
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
    public $email;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $password;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $role;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $hash;
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    public $data_reg; 
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
 * @param [type] $id
 * @return void
 */
    public function setId($id) {
        $this->id = $id;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getEmail() {
        return $this->email;
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getRole() {
        return $this->role;
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setRole($role) {
        $this->role = $role;
    }

    public function getHash() {
        return $this->hash;
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setHash($hash) {
        $this->hash = $hash;
    }

    public function getDataReg() {
        return $this->data_reg;
    }
/**
 * Undocumented function
 *
 * @param [type] $id
 * @return void
 */
    public function setDataReg($data_reg) {
        $this->data_reg = $data_reg;
    }
}

?>