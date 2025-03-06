<?php
$host = 'localhost';
$user = 'root';
$dbname = 'db';
$password = '';


try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);
    echo "Connection Sucssesfull";

} catch(Exception $e){
    echo "Something went wrong";
}

?>