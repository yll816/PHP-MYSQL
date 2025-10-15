<?php
$host = "localhost";
$password = "";
$user = "root";
try{
    $conn = new PDO("mysql:host=$host; , $user , $password");
}catch(Exception $e){
    echo "Not Connected";
}
?>