<?php

$noar = false;

if($noar == true){
    return[
        'database' => [
            'name' => 'domcom_facilita',
            'username' => 'domcom_facilita',
            'password' => 'h%u4QrX9960)',
            'connection' => 'mysql:host=localhost',
            'options' => []
        ]
    ];    
}else{
    return[
        'database' => [
            'name' => 'facilita',
            'username' => 'root',
            'password' => '',
            'connection' => 'mysql:host=localhost',
            'options' => []
        ]
    ];   
}

?>