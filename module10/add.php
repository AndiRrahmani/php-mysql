<?php
require('config.php');

if(isset($_POST['submit'])){
    $name= $_POST["username"];
    $username= $_POST["surname"];
    $email= $_POST["email"];
    var_dump($name);
    $sql= "INSERT INTO users (username, surname, email) VALUES (:username, :surname, :email);";

    $sqlQuery = $connection->prepare($sql);

    $sqlQuery->bindParam(':username',$name);
    $sqlQuery->bindParam(':surname',$username);
    $sqlQuery->bindParam(':email',$email);

    $sqlQuery->execute();

}





?>