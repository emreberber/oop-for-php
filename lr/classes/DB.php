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
            echo "ok";

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
}