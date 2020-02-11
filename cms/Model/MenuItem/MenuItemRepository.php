<?php 

namespace Cms\Model\MenuItem;

use Engine\Model;

class MenuItemRepository extends Model 
{
    const NEW_MENU_ITEM_NAME = "New Item";

    public function add($params = []) {
        if(empty($params)) {
            return 0;
        }

        $menuItem = new MenuItem; 
        $menuItem->setMenuId($params['menu_id']); 
        $menuItem->setName(self::NEW_MENU_ITEM_NAME); 
        $menuItemId = $menuItem->save(); 

        return $menuItemId;
    }
    public function sort($params = []) {
        $items = isset($params["data"]) ? json_decode($params["data"]) : []; 
        foreach ($items->{"data"} as $position => $item) {
            $this->db->execute(
                $this->queryBuilder
                ->update('menu_item')
                ->set(['position' => $position]) 
                ->where('id', $item->id) 
                ->sql(), 
                $this->queryBuilder->values
            ); 
        }
    }

    public function delete($params = []) {
        if (empty($params)) {
            return 0;
        }
        $id = $params['id']; 

        $this->db->execute(
        $this->queryBuilder
        ->delete()
        ->from('menu_item')
        ->where('id', $id)
        ->sql(), $this->queryBuilder->values);

    } 

    public function changeItemName($params = []) {
        if (empty($params)) {
            return 0;
        }

        $menuItem = new MenuItem($params['id']); 

        

        $menuItem->setName($params['name']);

        $menuItemName = $menuItem->save();

        return $menuItemName;
    }

    public function changeItemLink ($params = []) {
        if (empty($params)) {
            return 0;
        }

        $menuItem = new MenuItem($params['id']);

        $menuItem->setLink($params['link']);
        
        $menuItemLink = $menuItem->save();

        return $menuItemLink;
    }

    
    public function getAllItems($menuId, $params = []) {
        
        $sql =$this->queryBuilder
        ->select()
        ->from('menu_item')
        ->where('menu_id', $menuId)
        ->sql(); 

        return $this->db->query($sql, $this->queryBuilder->values);  
    }

    public function getItems($menuId, $params = []) {
        $sql = $this->queryBuilder
        ->select()
        ->from('menu_item')
        ->where('menu_id', $menuId) 
        ->orderBy('position', 'ASC')
        ->sql(); 
        
        return $this->db->query($sql, $this->queryBuilder->values);
    }  
    
    
}

?>