<?php

$localhost = 'localhost';
$dbname = 'dealership';
$user = 'root';
$password ='';


try{
    $conn = new PDO("mysql:host=$localhost; dbname=$dbname", $profili, $password);
    echo "Connection Sucssesfull";
} catch(PDOException $e){
    echo "Error" .$e->getMessage() ;
}



?>