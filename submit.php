<?php

require './database.php';

echo '<pre>';
var_dump($_POST);
echo '</pre>';

if($conection) {
    $name = mysqli_real_escape_string($conection, $_POST['name']);
    $email = mysqli_real_escape_string($conection, $_POST['email']);
    $pass = $_POST['password'];
    $passCheck = $_POST['password_check'];

    
    
    if(isset($_POST['checkbox'])) {
        
        if($pass === $passCheck) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            setData($conection, $dbTable, $name, $email, $hash);
            echo "You are subscibed!";
        }       
    }
            
            else {
                echo "Wrong password.";
            }
}   
        else {
            echo "Please read terms of service.";
        }   
        



?>