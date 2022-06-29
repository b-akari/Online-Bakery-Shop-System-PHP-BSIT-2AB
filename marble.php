<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Marble Cake Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
	<!-- navigation bar -->
	<?php include 'components/navbar.php' ?>

	<!-- single products -->
	<div class="single-product nav-component">
		<div class="row">
			<div class="col-2">
				<img src="images\marble_cake.png" width="100%">
			</div>
			<div class="col-2">
				<h1>Marble Cake</h1>
				<p>Layers of vanilla and chocolate mixed in buttery bread.</p>
				<select>
					<option>Select Size</option>
					<option>6*8</option>
					<option>8*10</option>
					<option>10*12</option>
				</select>
				<input type="number" value="1">
				<a href="" class="seemore-btn">Add to Cart</a>
				
			</div>
		</div>
	</div>
	<br><br><br><br>

	<!-- footer -->
	<?php include 'components/footer.php' ?>

	<script src="menu.js"></script>
</body>
</html>
