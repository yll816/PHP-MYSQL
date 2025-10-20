<?php
$host = "localhost";
$db="db";
$pass = "";
$user = "root";
try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user , $pass);
    $sql = "CREATE TABLE users (id INT(6) NOT NULL auto_increment PRIMARY KEY , 
    username VARCHAR(30)NOT NULL , passwrod VARCHAR(50)NOT NULL)";
    $pdo->exec($sql);
    echo "Table Created Successfully";
    }catch(Exception $e){
        echo "Error creating table: ".$e->getMessage();
    }
?>