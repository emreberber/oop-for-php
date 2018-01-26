<?php

class DB 
{
    private $hostname = '127.0.0.1';
    private $username;
    private $password;

    public function __get($e){
        return $this->$e;
    }

    public function __set($attr, $val){
        return $this->$attr = $val;
    }

    public function __toString(){
        return 'toString method is called';
    }
}

$obj = new DB();
$obj->__set('hostname', 'localhost');
echo $obj->__get('hostname');
echo PHP_EOL;

echo new DB;

echo PHP_EOL;