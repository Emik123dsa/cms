<?php 

namespace Admin\Model\Page;

use Engine\Model;

class PageRepository extends Model{
    const DATA_AMOUNT_PAGE = "8";
    const DATA_DELTA_PAGE = "3";
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getPages() {

        $sql =$this->queryBuilder->select()
        ->from('page')
        ->orderBy('id', 'DESC')
        ->sql();
        
        return $this->db->query($sql);
    } 

    public function createPages($params) {
        $page = new Page; 
        $page->setTitle($params['title']);
        $page->setContent($params['content']);
        
        $pageId = $page->save();

        return $pageId;

    }

    public function getPageData($id) {
        $page = new Page($id);
        
        return $page->findOne();
    }

    public function getPageNumber($id) {
        $deltaEntropy = ($id - 1) * self::DATA_AMOUNT_PAGE;
        $delta = self::DATA_AMOUNT_PAGE;

        $sql = $this->queryBuilder 
        ->select()
        ->from('page') 
        ->orderBy('id', 'DESC')
        ->limit("$deltaEntropy , $delta")
        ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }

    public function getTotalPageAmount() {
        
        $sql = $this->queryBuilder 
            ->select('COUNT(id) as amount')
            ->from('page')
            ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }

    public function getPageCurrentAmount($current, $id) {
        
        $current = ceil($current / self::DATA_AMOUNT_PAGE);
        $value = $this->getConditionPages($id, $current);
        $delta = self::DATA_DELTA_PAGE;
        $sql = $this->queryBuilder 
        ->select('id')
        ->from('page')
        ->where('id', $current, '<=')
        ->limit("$value, $delta")
        ->sql(); 
        
        return $this->db->query($sql, $this->queryBuilder->values);

    }

    public function getConditionPages($id, $current) {
        if ($id == $current) {
            $value = $id-self::DATA_DELTA_PAGE; 
           return $value;
        } else if ($id == 1){
            $value = 0;
            return $value; 
        }
                if ($id > 1 && $id < $current) {

                $value = $id - self::DATA_DELTA_PAGE + 1; 
                return $value;
                } 
                
    }

    public function getPageCheckOut($id, $current) {
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

   
    public function updatePages($params) {

        if (isset($params['page_id'])) {
        $page = new Page($params['page_id']); 
        $page->setTitle($params['title']);
        $page->setContent($params['content']);
        $page->save();

        }

    }
    

}
?>