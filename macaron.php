<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Macaron Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
	<!-- navigation bar -->
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" width="200px"></a>
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="menu.php">Menu</a></li>
				<li><a href="#">Best Seller</a></li>
				<li><a href="#">Customize</a></li>
			</ul>
		</nav>
		<a href="#"><img src="images/cart.png" width="25px" height="25px"></a>
		<a href=""><i class="fa-solid fa-user"></i></a>
		<img src="images/menu.png" class="menu_icon" onclick="menutoggle()">
		</div>
	</div>

	

	<!-- single products -->
	<div class="single-product">
		<div class="row">
			<div class="col-2">
				<img src="images\macaron_pastry.png" width="100%">
			</div>
			<div class="col-2">
				<h1>Macarons</h1>
				<p>Evocatively delicate nutty sandwich cookies with a crisp exterior.</p>
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
<br><br><br><br><br><br><br><br><br>


	<!-- footer -->
	<div class="footer-container">
		<div class="footer">
			<div class="footer-1">
				<h1>From our oven to your door.</h1>
				<h3>REACH US</h3>
				<div class="social-media">
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
				</div>
			</div>
			<div class="footer-2">
				<h3>OUR COMMUNITY</h3>
				<a href="#">Registration</a><br>
				<a href="webteam.php">Our Team</a><br>
				<a href="#">Website Feedback</a><br>
			</div>
			<div class="footer-3">
				<h3>SEEK FAQS</h3>
				<a href="about.php">About Cookie Co.</a><br>
				<a href="faqs.php">Most FAQs</a><br>
				<a href="#">Orders</a><br>
				<a href="#">Careers</a><br>
				<a href="#">Delivery</a><br>
			</div>
		</div>
	</div>
	<script src="menu.js"></script>
</body>
</html>
