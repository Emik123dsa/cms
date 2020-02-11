<?php 
namespace Admin\Controller;

use Engine\Controller;
use Engine\DI\DI;
use Engine\Core\Auth\Auth;
use Engine\Core\Database\QueryBuilder;

class LoginController extends Controller {

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    protected $auth;

    public function __construct(DI $di)
    {
        parent::__construct($di);

        $this->auth = new Auth();

        if ($this->auth->hashUser() !== null) {
            header('Location: /dynweb/cms/admin/');
            exit;
        }
        
    }
    /**
     * Undocumented function
     *
     * @return void
     */

    public function form() {
        //print_r($_COOKIE);
       $this->view->render('login');
       
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function authAdmin() {
        $params = $this->request->post;

        $queryBuilder = new QueryBuilder();
        $sql = $queryBuilder
        ->select()
        ->from('user')
        ->where('email', $params['email'])
        ->limit(1)
        ->sql();

        $query = $this->db->query($sql, $queryBuilder->values);
        
        if (!empty($query)) {

        $user = $query[0];

        if (password_verify($params['password'], $user['password'])) {

            if ($user['role'] == 'admin') {
                
                $hash = md5($user['id']. $user['email'] . $user['password'] . $this->auth->salt());

                $sql = $queryBuilder
                ->update('user')
                ->set(['hash' => $hash])
                ->where('id', $user['id'])
                ->sql();

                $this->db->execute($sql, $queryBuilder->values); 
                $this->auth->authorize($hash);
                
               echo true; 
               
               exit; 

            }
        } 
    }    
    echo false;
    
    exit;
}

}


?>