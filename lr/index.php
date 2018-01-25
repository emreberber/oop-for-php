<?php

require_once 'core/init.php';

// echo Config::get('mysql/host'); 
// echo $GLOBALS['config']['mysql']['host'];   

$user = DB::connect() -> get("users", array("user_username", "=", "alex"));

if($user -> error()) {
    echo "Kayıt bulunamadı";
} else {
    echo "bulundu";
}


// 29