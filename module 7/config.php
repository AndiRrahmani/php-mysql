<?php
$host = 'localhost';
$user = 'root';
$password = '';


try{
    $conn = new PDO("mysql:host=$host"; $user, $password);
    $sql = "CREATE DATABASE projekti1";
    $conn ->exec($sql);

    echo "Connection succsessful";

}

catch(Expetion $e){
    echo "Error;".$e;
}
?>