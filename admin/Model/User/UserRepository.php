<?php 

namespace Admin\Model\User;

use Engine\Model;

class UserRepository extends Model{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getUsers() {

        $sql =$this->queryBuilder->select()
        ->from('user')
        ->orderBy('id', 'DESC')
        ->sql();
        
        return $this->db->query($sql);
    } 

}
?>