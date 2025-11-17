<?php


    include_once('config.php'); 



    if(isset($_POST['submit']))
    {
       
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $sql = "insert into users (email, password) values (:email, :password)";
        $sqlQuery = $conn->prepare($sql);
    
        

        $sqlQuery->bindParam(':email', $email);
        $sqlQuery->bindParam(':password', $password); 

        $sqlQuery->execute();


        echo "Data saved successfully ...";
    }
?>


<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <a href="dashboard.php">Dashboard</a>
        <form action="add.php" method="POST">
            <input type="email" name="email" placeholder="Email"></br>
            <input type="password" name="password" placeholder="password"></br>
            <button type="submit" name="submit">Add</button>
        </form>


    </body>
</html>
