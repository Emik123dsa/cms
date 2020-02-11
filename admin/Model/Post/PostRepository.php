<?php 

namespace Admin\Model\Post;

use Engine\Model;

class PostRepository extends Model{
    const DATA_AMOUNT_POST = "8";
    const DATA_DELTA_POST = "3";
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getPosts() {

        $sql =$this->queryBuilder->select()
        ->from('post')
        ->orderBy('id', 'DESC')
        ->sql();
        
        return $this->db->query($sql);
    } 

    public function createPosts($params) {
        $post = new Post; 
        $post->setTitle($params['title']);
        $post->setContent($params['content']);
        
        $postId = $post->save();

        return $postId;

    }

    public function getPostData($id) {
        $post = new Post($id);
        
        return $post->findOne();
    }

    public function updatePosts($params) {

        if (isset($params['post_id'])) {
        $post = new Post($params['post_id']); 
        $post->setTitle($params['title']);
        $post->setContent($params['content']);
        $post->save();
        }

    }

    public function getPostNumber($id) {
        $deltaEntropy = ($id - 1) * self::DATA_AMOUNT_POST;
        $delta = self::DATA_AMOUNT_POST;

        $sql = $this->queryBuilder 
        ->select()
        ->from('post') 
        ->orderBy('id', 'DESC')
        ->limit("$deltaEntropy , $delta")
        ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }

    public function getTotalPostAmount() {
        
        $sql = $this->queryBuilder 
            ->select('COUNT(id) as amount')
            ->from('post')
            ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }

    public function getPostCurrentAmount($current, $id) {
        
        $current = ceil($current / self::DATA_AMOUNT_POST);
        $value = $this->getConditionPosts($id, $current);
        $delta = self::DATA_DELTA_POST;
        $sql = $this->queryBuilder 
        ->select('id')
        ->from('post')
        ->where('id', $current, '<=')
        ->limit("$value, $delta")
        ->sql(); 
        
        return $this->db->query($sql, $this->queryBuilder->values);

    }

    public function getConditionPosts($id, $current) {
        if ($id == $current) {
            $value = $id-self::DATA_DELTA_POST; 
           return $value;
        } else if ($id == 1){
            $value = 0;
            return $value; 
        }
                if ($id > 1 && $id < $current) {

                $value = $id - self::DATA_DELTA_POST + 1; 
                return $value;
                } 
                
    }

    public function getPostCheckOut($id, $current) {
        if ($id > 1 ) {
            $id = $id - 2; 
                return $id; 
            } if ($id == $current) {
                $id = $current; 
                return $id;
            } else {
                $id = 0;
                return $id;
            }
    }
    

}
?>