<?php

include_once ('config.php');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $emri = $_POST['movie_name'];
    $username = $_POST['movie_desc'];
    $email = $_POST['movie_quality'];

    $sql = "UPDATE movies0 SET emri=:emri, movie_name=:movie_name, movie_desc=:movie_desc movie_quality=:movie_quality WHERE id=:id";
    $prep=$conn->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->bindParam(':movie_name', $movie_name);
    $prep->bindParam(':movie_desc', $movie_desc);
    $prep->bindParam(':movie_quality', $movie_quality);
    

    header('Location:dashboard.php');
}
?>
