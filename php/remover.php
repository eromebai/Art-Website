<?php
		include "connect.php";

		$title = $_POST['artnamerem'];
		$pass = $_POST['passrem'];

		$query = "SELECT * FROM password";
		$result = mysqli_query($connection,$query);

		$row = mysqli_fetch_assoc($result);
		if($row['pass'] == $pass){
	 			$query = "DELETE FROM `artworks` WHERE name = '$title';";
	 			mysqli_query($connection,$query);

	 	}
	 	else{}

	 		
	mysqli_close($connection);
	
	 ?>