<?php
require('config.php');

if(isset($_POST['submit'])){
    $name= $_POST["name"];
    $username= $_POST["username"];
    $email= $_POST["email"];
    var_dump($name);
    $sql= "INSERT INTO users (name, username, email) VALUES (:name, :username, :email);";

    $sqlQuery = $connection->prepare($sql);

    $sqlQuery->bindParam(':name',$name);
    $sqlQuery->bindParam(':username',$username);
    $sqlQuery->bindParam(':email',$email);

    $sqlQuery->execute();

}





?>