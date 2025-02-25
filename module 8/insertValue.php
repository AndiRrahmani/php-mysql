<?php

$host= "localhost";
$db= "db";
$user= "root";
$pass= "";

try{

    $pdo = new PDO("mysql:host=$host;dbname=$db",$user, $pass);


    $username = "John";
    


    $sql = "INSERT INTO users (name,surname, email) VALUES ('$username', 'Gashi', 'gashi@gmail.com')";

    $pdo->exec($sql);
            
            echo "New row inserted  successfully";

}catch (Exception $e) {
    echo "Error creating table:" . $e->getMessage();

}






?>