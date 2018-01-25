<?php

class DB {

    private static $_instance = null;
    private $_pdo,
            $_query,
            $_error = false,
            $_result,
            $_count = 0;

    private function __construct() {
        $host     = Config::get('mysql/host');
        $db       = Config::get('mysql/db');
        $username = Config::get('mysql/username');
        $password = Config::get('mysql/password');
        try {
            $this->_pdo = new PDO('mysql:host='.$host.';dbname='.$db, $username, $password);
            // echo "Connection is OK";

        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }


    public static function connect() {
        if(!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }


    // Düz mantık verilen sorguyu calıstırır
    public function query($sql, $params = array() ) {

        $this -> _error = false;

        if($this -> _query = $this -> _pdo -> prepare($sql)) {
            $temp = 1;
            if(count($params)) {
                foreach ($params as $param) {
                    $this -> _query -> bindValue($temp, $param);
                    $temp++;         
                }
            }
            if($this  -> _query -> execute()) {
                $this -> _result = $this -> _query -> fetchAll(PDO::FETCH_OBJ);
                $this -> _count  = $this -> _query -> rowCount();
            } 
            else {
                $this -> _error = true;
            }
        }
        return $this;
    }


    public function action($action, $table, $where = array() ) {
        if(count($where) === 3) {
            $operators = array('=', ">", "<", "=>", "<=");
            $user      = $where[0];
            $operator  = $where[1];
            $value     = $where[2];

            if(in_array($operator, $operators)) {
                $sql = "{$action} FROM {$table} WHERE {$user} {operator} ?";
                if($this -> query($sql, array($value)) -> error()) {
                    return $this;
                }
            }
        }
        return false;
    }


    public function get($table, $where) {
        return $this -> action('SELECT *', $table, $where);
    }

    public function delete($table, $where) {
        return $this -> action('DELETE', $table, $where);
    }

    public function error() {
        return $this -> _error; 
    }
}