<?php

$localhost = 'localhost';
$dbname = 'db';
$user = 'root';
$password ='';


try{
    $conn = new PDO("mysql:host=$localhost; dbname=$dbname", $user, $password);
    echo "Connection Sucssesfull";
} catch(PDOException $e){
    echo "Error" .$e->getMessage() ;
}



?>