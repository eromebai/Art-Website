<?php
		include "connect.php";

		$title = $_POST['artname'];
		$desc = $_POST['artdesc'];
		$link = $_POST['artlink'];
		$dw = $_POST['dw'];
		$pass = $_POST['pass'];

		$query = "SELECT * FROM password";
		$result = mysqli_query($connection,$query);

		$row = mysqli_fetch_assoc($result);
		if($row['pass'] == $pass){
	 			$query = "INSERT INTO artworks(name, description, picture, driftwood) VALUES ('$title', '$desc', '$link', '$dw')";
	 			mysqli_query($connection,$query);

	 			header("Location: ../Add.php");
	 	}
	 	else{}
	 
	mysqli_close($connection);
	
	 ?>