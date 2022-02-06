<?php

$serverName = 'localhost';
$userName = 'root';
$password = '';
$dbname = 'first_schema';
$dbTable = 'customers';
$pass = $_POST['password'];


//Create conection
$conection = mysqli_connect($serverName, $userName, $password, $dbname);

//Check conection
if (!$conection) {
    die ("Conection failed: " . mysqli_connect_error());
}

//Get data from database

function getData($conection, $dbTable) {
    
    $sql = "SELECT * FROM $dbTable";
    return mysqli_query($conection, $sql);
}

//Update database

function setData($conection, $dbTable, $name, $email, $hash) {
    $sql = "INSERT INTO $dbTable (name, email, password)VALUES ('$name', '$email', '$hash')";
    return(mysqli_query($conection, $sql)); 
}    

//Get data from database

function getloginData($conection, $dbTable, $name, $email) {
    $sql = "SELECT * FROM $dbTable WHERE name='$name' OR email='$email'";
    return(mysqli_query($conection, $sql)); 
}

function getHash($conection, $dbTable, $name, $email, $pass) {
    $sql = "SELECT * FROM $dbTable WHERE name='$name' OR email='$email'";
    $data = mysqli_query($conection, $sql);
    
        if(mysqli_num_rows($data) > 0) {    
            while ($pwd = mysqli_fetch_assoc($data)){
                    if(password_verify($pass, $pwd['password']) === true){  
                        echo "You are loged in!";  
                    }
                    else {
                        echo "Check username or password."; }
            }
        }
}
