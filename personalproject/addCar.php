<?php	

//Including config.php file for connection with database 
	include_once('config.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if(isset($_POST['submit']))
	{

		$movie_name = $_POST['car_name'];
		$movie_desc = $_POST['car_desc'];
		$movie_quality = $_POST['car_price'];
		$movie_image = $_POST['car_image'];
	

		$sql = "INSERT INTO movies(car_name, car_desc, car_price, car_image) VALUES (:car_name, :car_desc, :car_price, :car_image)";

		$insertMovie = $conn->prepare($sql);
			

		$insertMovie->bindParam(':movie_name', $car_name);
		$insertMovie->bindParam(':movie_desc', $car_desc);
		$insertMovie->bindParam(':movie_quality', $car_price);
		$insertMovie->bindParam(':movie_image', $car_image);

		$insertMovie->execute();

		header("Location: cars.php");


	}




?>