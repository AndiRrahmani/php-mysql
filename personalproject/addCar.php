<?php	

//Including config.php file for connection with database 
	include_once('config.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if (isset($_POST['submit'])) {
    $car_name = $_POST['car_name'];
    $car_desc = $_POST['car_desc'];
    $car_price = $_POST['car_price'];
    $car_image = $_POST['car_image'];

    $sql = "INSERT INTO cars(car_name, car_desc, car_price, car_image) VALUES (:car_name, :car_desc, :car_price, :car_image)";

    $insertCar = $conn->prepare($sql);

    $insertCar->bindParam(':car_name', $car_name);
    $insertCar->bindParam(':car_desc', $car_desc);
    $insertCar->bindParam(':car_price', $car_price);
    $insertCar->bindParam(':car_image', $car_image);

    $insertCar->execute();

    header("Location: cars.php");
}





?>