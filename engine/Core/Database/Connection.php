<?php declare(strict_types = 1);

namespace Engine\Core\Database;

use \PDO;

use PDOException;
use Engine\Core\Config\Config;
class Connection {
    private $link;
/**
 * Undocumented function
 */
/**
 * Undocumented variable
 *
 * @var [type]
 */
private $isConnected; 
    public function __construct() {
        $this->connect();
    }
    /**
     * 
     */

    private function connect() {
        try {
        $config = Config::group('database');
        
        $this->link = new \PDO ($config['driver'].":host=".$config['host'].";dbname=".$config['db_name'], $config['db_user'], $config['db_password'], [\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.$config['charset']]);
        $this->link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $this->link->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        $this->isConnected = true;
        return $this;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    }

    private function closeConnection() {
        $this->link = null;
    }
    /** */
/**
 * Undocumented function
 *
 * @param [type] $sql
 * @param array $values
 * @return void
 */
    public function execute($sql, $values = []) {
        $sth = $this->link->prepare($sql);
        
        return $sth->execute($values);
    }

    /**
     * Undocumented function
     *
     * @param [type] $sql
     * @param array $values
     * @return void
     */

    public function query($sql, $values = [], $statement = PDO::FETCH_OBJ) {
        $sth = $this->link->prepare($sql);

        $sth->execute($values);

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false) {
            return [];
        }

        return $result;
    }
/**
 * Undocumented function
 *
 * @return void
 */
    public function lastInsertId() {
        return $this->link->lastInsertId();
    }

   
}
    
?>