<?php
    include_once('config.php');


    if(isset($_POST['submit'])) {


        $emri = $_POST['emri'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $tempPass = $_POST['password'];
        $confirmPass = $_POST['confirm_password'];
    }


    if (empty($emri) || empty($username) || empty($email) || empty($tempPass) || empty($confirmPass)){
        echo "Please fill all the fields";
    }


    if($tempPass !== $confirmPass){
        echo "Password do not match";
    }


    $passwordHash = password_hash($tempPass, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (emri, username, email, password, confirm_password, is_admin)
                VALUES (:emri, :username, :email, :password, :confirm_password, :is_admin)";


    $insertSql = $conn->prepare($sql);


    $is_admin = 'true';


    $insertSql->bindParam(':emri', $emri);
    $insertSql->bindParam(':username', $username);
    $insertSql->bindParam(':email', $email);
    $insertSql->bindParam(':password', $passwordHash);
    $insertSql->bindParam(':confirm_password', $passwordHash);
    $insertSql->bindParam(':is_admin', $is_admin);


    $insertSql->execute();


    header("Location: login.php");
?>