<?php 

namespace Engine\Core\Database;

class QueryBuilder {

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $sql = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    public $values = [];
/**
 * Undocumented function
 *
 * @param string $fields
 * @return void
 */
    public function select($fields = '*') {
        $this->reset();
        $this->sql['select'] = "SELECT {$fields} ";

        return $this;
    }
    /**
     * Undocumented function
     *
     * @param [type] $table
     * @return void
     */
    public function from($table) {
        $this->sql['from'] = "FROM {$table} ";

        return $this;
    }
/**
 * Undocumented function
 *
 * @param [type] $column
 * @param [type] $value
 * @param string $operator
 * @return void
 */
    public function where($column, $value, $operator = '=') {
        $this->sql['where'][] = "{$column} {$operator} ? ";
        $this->values[] = $value;
        return $this;
    }
/**
 * Undocumented function
 *
 * @param [type] $field
 * @param [type] $order
 * @return void
 */
    public function orderBy ($field, $order) {
        $this->sql['order_by'] = "ORDER BY {$field} {$order} ";
        return $this;
    }
/**
 * Undocumented function
 *
 * @param [type] $number
 * @return void
 */
    public function limit ($number) {
        $this->sql['limit'] = " LIMIT {$number}";
        return $this;
    }
/**
 * Undocumented function
 *
 * @param [type] $table
 * @return void
 */
    public function update ($table) {
    $this->reset();
    $this->sql['update'] = "UPDATE {$table} ";
    return $this;
    }
/**
 * Undocumented function
 *
 * @param array $data
 * @return void
 */
    public function set ($data = []) {
        $this->sql['set'] = "SET ";

        if (!empty($data)) {
            foreach($data as $key => $value) {
                $this->sql['set'] .= "{$key} = ? ";
                if (next($data)) {
                    $this->sql['set'] .= ", ";
                }
                $this->values[] = $value;
            }
        }

        return $this;
    }
    public function insert($table) {
        $this->reset();
        $this->sql['insert'] = "INSERT INTO {$table} ";
        return $this;
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    /**
     * Undocumented function
     *
     * @return void
     */
    public function sql()
    {
        $sql = '';

        if(!empty($this->sql)) {
            foreach ($this->sql as $key => $value) {
                if ($key == 'where') {
                    $sql .= ' WHERE ';
                    foreach ($value as $where) {
                        $sql .= $where;
                        if (count($value) > 1 and next($value)) {
                            $sql .= ' AND ';
                        }
                    }
                } else {
                    $sql .= $value;
                }
            }
        }

        return $sql;
    }
/**
 * Undocumented function
 *
 * @return void
 */

    public function reset() {
    $this->sql =[];
    $this->values = [];
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function delete() {
        $this->reset();
        $this->sql['delete'] = "DELETE "; 
        return $this;
    }

    public function alter($table, $data) {
        $this->reset(); 
        $this->sql['alter'] = "ALTER TABLE {$table} ";  
        if (!empty($data)) {
            foreach($data as $key => $value) {
                $this->sql['alter'] .= "{$key} = ?" ;
                if (next($data)) {
                    $this->sql['alter'] .= " , ";
                }
                $this->values[] = $value;
            }
        }
        return $this;
    }

    public function groupBy($group) {

        $this->sql['group_by'] = " GROUP BY {$group}";

        return $this;
    }
}

?>