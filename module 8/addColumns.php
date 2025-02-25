<?php

$host= "localhost";
$db= "db";
$user= "root";
$pass= "";

try{

    $pdo = new PDO("mysql:host=$host;dbname=$db",$user, $pass);

    $sql = "ALTER TABLE user1 ADD email VARCHAR(255)";

    $pdo->exec($sql);
            
            echo "Table created successfully";

}catch (Exception $e) {
    echo "Error creating table:" . $e->getMessage();

}


?>