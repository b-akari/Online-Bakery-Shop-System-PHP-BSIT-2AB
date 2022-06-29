<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pastry All Products</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
	<!-- navigation bar -->
	<?php include 'components/navbar.php' ?>


	<div class="menu">
		<div class="pastry">
			<h2>PASTRY</h2>
			<div class="col-3">
				<img src="images/eggtart_pastry.png">
				<div class="middle">
    						<a href="eggtart.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-3">
				<img src="images/macaron_pastry.png">
				<div class="middle">
    						<a href="macaron.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-3">
				<img src="images/pretzel_pastry.png">
				<div class="middle">
    						<a href="pretzel.php" class="text2">Add to Cart</a>
  						</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br>
	</div>

	<!-- footer -->
	<?php include 'components/footer.php' ?>

	<script src="menu.js"></script>
</body>
</html>