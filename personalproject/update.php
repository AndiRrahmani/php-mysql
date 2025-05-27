<?php 
/*
We will get the changed data from edit.php file and update them into database
*/
	include_once('config.php');
	


	if (isset($_POST['submit1'])) {
		$id = $_POST['id'];
		$movie_name = $_POST['car_name'];
		$movie_desc = $_POST['car_desc'];
		$movie_quality = $_POST['car_price'];
		

		$sql = "UPDATE cars SET id=:id,  car_name=:car_name, car_desc=:car_desc, car_price=:car_price, WHERE id=:id";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':id',$id);
		$prep->bindParam(':car_name',$car_name);
		$prep->bindParam(':car_desc',$car_desc);
		$prep->bindParam(':car_price',$car_price);
		
		$prep->execute();
		header("Location: dashboard.php");
	}
 ?>