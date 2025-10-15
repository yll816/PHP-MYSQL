<?php
$host = "localhost";
$user = "root";
$password = "";


try{
    $conn = new PDO("mysql:host=$host; , $user , $password");
    $sql = "Create Database";
    $conn ->exec($sql);
    echo "Database created ";
}catch(Exception $e){
    echo "Database Not Created";
}
?>