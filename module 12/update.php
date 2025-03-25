<?php
include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $age = $_POST['age'];


}

    var_dump($name);
    $sql= "UPDATE users SET name=:name, surname=:surname, email=:email, age=:age WHERE id=:id";

    $sqlQuery = $conn->prepare($sql);

    $sqlQuery->bindParam(':name',$name);
    $sqlQuery->bindParam(':surname',$surname);
    $sqlQuery->bindParam(':email',$email);
    $sqlQuery->bindParam(':age',$age);
    $sqlQuery->bindParam(':id',$id);

    $sqlQuery->execute();

?>