<?php 
 /*Creating a session  based on a session identifier, passed via a GET or POST request.
  We will include config.php for connection with database.
  */

	session_start();

	include_once('config.php');

	//Getting values 'id' and 'movie_id' using $_SESSION
	$user_id = $_SESSION['id'];
    $car_id = $_SESSION['car_id'];

	//Getting some of data from details.php form
	$date = $_POST['date'];
	$time = $_POST['time'];
	//Inserting the new data into database
	$sql = "INSERT INTO purchases(user_id, car_id,  date, time) VALUES (:user_id, :movie_id, :date, :time)";

	$insertPurchases = $conn->prepare($sql);

	$insertPurchases->bindParam(":user_id", $user_id);
	$insertPurchases->bindParam(":car_id", $movie_id);
	$insertPurchases->bindParam(":date", $date);
	$insertPurchases->bindParam(":time", $time);

	$insertPurchases->execute();

	header("Location: home.php");

	
	











 ?>