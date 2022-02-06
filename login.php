<?php
require './database.php';

// echo '<pre>';
// var_dump($hash);
// echo '</pre>';

if($conection) {
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['name'];

    // echo '<pre>';
    // var_dump($pass);
    // echo '</pre>';

    getHash($conection, $dbTable, $name, $email, $pass); 
        
}
    
    