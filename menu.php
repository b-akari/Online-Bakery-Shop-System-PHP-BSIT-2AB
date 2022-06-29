<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
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


	<!-- featured menu (cake, cookie, pastry) -->
	<div class="menu">
		<div class="cake">
			<h2>CAKE</h2>
			<div class="col-1">
				<img src="images/carrot_cake.png">
    					<div class="middle">
    						<a href="carrot.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-1">
				<img src="images/chocofudge_cake.png">
				<div class="middle">
    						<a href="chocofudge.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-1">
				<img src="images/marble_cake.png">
				<div class="middle">
    						<a href="marble.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-1">
				<img src="images/rvelvet_cake.png">
				<div class="middle">
    						<a href="redvelvet.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-1">
				<img src="images/tiramisu_cake.png">
				<div class="middle">
    						<a href="tiramisu.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-1">
				<img src="images/ube_cake.png">
				<div class="middle">
    						<a href="ube.php" class="text2">Add to Cart</a>
  						</div>
			</div>

		</div>
		
	</div>

	<div class="menu">
		<div class="cookie">
			<h2>COOKIE</h2>
			<div class="col-2">
				<img src="images/chocochip_cookie.png">
				<div class="middle">
    						<a href="chocochip.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-2">
				<img src="images/chococringles_cookie.png">
				<div class="middle">
    						<a href="chococringles.php" class="text2">Add to Cart</a>
  						</div>
			</div>
			<div class="col-2">
				<img src="images/gingerbread_cookie.png">
				<div class="middle">
    						<a href="gingerbread.php" class="text2">Add to Cart</a>
  						</div>
			</div>
		</div>
	
	</div>

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

	</div>
	<br><br><br><br><br><br>


	

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
