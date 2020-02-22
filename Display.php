<?php 

	include "php/connect.php"; 
	$title = $_POST['painting'];

	$query = "SELECT * FROM artworks WHERE name = '$title'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_assoc($result);

	$description = $row['description'];
	$pic = $row['picture'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<title>
		<?php
		echo "$title"; 
		?>	
	</title>
</head>
<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class ="navbar-brand" href="index.html">
				<img src="img/Logo.png">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class ="navbar-nav ml-auto">
					<li class="nav-item"> <a class="nav-link" href="index.html">Home</a></li>
					<li class="nav-item"> <a class="nav-link" href="3">About Me</a></li>
					<li class="nav-item"> <a class="nav-link" href="Gallery.php">Gallery</a></li>
					<li class="nav-item"> <a class="nav-link" href="3">Contact Me</a></li>
				</ul>				
			</div>
		</div>
	</nav>

	<!-- Display -->
	<div class= "container-fluid padding">
		<div class= "row welcome text-center">
			<div class="col-12">
				<h1 class="display-4"><?php echo "$title"; ?></h1>
			</div>
			<hr>
		</div>
	</div>

	<div class= "container-fluid padding desctext">
		<div class = 'row padding'>
			<div class = 'col-lg-4 padding' align='center'>
				<div class= "container-fluid extrapadding">
				<p class = 'descr' align ='left'>
					<?php echo "$description"; ?>
				</p>
				</div>
			</div>	
			<div class = 'col-lg-8 padding' align='center'>
				<?php echo "<img src = '$pic' class='img-fluid'>";?>
			</div>
		</div>	
	</div>

	
	<!-- Footer -->
	<footer>
		<div class= "container-fluid padding">
			<div class = "row text-center">
				<div class="col-md-4">
					<hr class="light">
					<img src="img/Mom's_Logo_white.png" height="20px">
					<hr class="light">
					<p class="text-light">777-777-7777</p>
					<p class="text-light">email@email.com</p>
					<p class="text-light">Alicante, Valencia Province</p>
					<p class="text-light">Spain</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5 class="text-light">Social Media</h5>
					<hr class="light">
					<p><a href="https://www.facebook.com/cheryl.bailey.5621" class="text-light">Facebook</a></p>
					<p><a href="https://fineartamerica.com/profiles/soulinspirations?fbclid=IwAR16Px_36wOXssRBl6XD3o1FXkBtMZSt1i3uB8srl_3kjyJ4f4hLAdLuWFU" class="text-light">fine art america</a></p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5 class="text-light">Navigate</h5>
					<hr class="light">
					<p><a href="index.html" class="text-light">Home</a></p>
					<p><a href="About.html" class="text-light">About Me</a></p>
					<p><a href="Gallery.php" class="text-light">Gallery</a></p>
					<p><a href="Contact.html" class="text-light">Contact Me</a></p>
				</div>
				<div class="col-12">
					<hr class="light-100">
					<h5 class="text-light">&copy; cherylbaileyart.com</h5>					
				</div>
			</div>
		</div>

	</footer>

</body>
<?php
	mysqli_close($connection);
	?>
</html>