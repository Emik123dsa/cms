<?php 
namespace Engine\Core\Auth; 

use Engine\Helper\Cookie;

class Auth implements AuthInterface{
    /**
     * Undocumented variable
     *
     * @var boolean
     */
    protected $authorized = false; 
    protected $hash_user;
/**
 * Undocumented function
 *
 * @return void
 */
    public function authorized() {
        return $this->authorized;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function hashUser() {
        return Cookie::get('auth_user');
    }
/**
 * Undocumented function
 *
 * @param [type] $user
 * @return void
 */
    public function authorize($user) {
        Cookie::set('auth_authorized', true);
        Cookie::set('auth_user', $user);

        
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function unAuthorize() {
        Cookie::delete('auth_authorized');
        Cookie::delete('auth_user');

        
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public static function salt() {
        return (string) rand(10000000, 99999999);
    }
/**
 * Undocumented function
 *
 * @param [type] $password
 * @param string $salt
 * @return void
 */
    public function encryptPassword($password, $salt = '') {
        return hash('sha256', $password, $salt);
    }

}


?>