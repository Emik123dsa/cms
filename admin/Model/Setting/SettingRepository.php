<?php 

namespace Admin\Model\Setting;

use Engine\Model;

class SettingRepository extends Model{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function getSettings() {

        $sql =$this->queryBuilder->select()
        ->from('setting')
        ->orderBy('id', 'ASC')
        ->sql();
        
        return $this->db->query($sql);
    } 

    public function update(array $params) {
        if (!empty($params)) {
           foreach($params as $key => $value) {
            $sql = $this->queryBuilder
            ->update('setting')
            ->set(['value' => $value])
            ->where('key_field', $key)
            ->sql(); 
            $this->db->execute($sql, $this->queryBuilder->values);
           }
           
    }
    }
    /**
     * Undocumented function
     *
     * @param [type] $keyField
     * @return void
     */
    public function getSettingValue($keyField) {

        $sql = $this->queryBuilder
        ->select('value')
        ->from('setting')
        ->where('key_field', $keyField)
        ->sql();
        $query = $this->db->query($sql, $this->queryBuilder->values);
        return isset($query[0]) ? $query[0]['value'] : null;
    }
}
?>