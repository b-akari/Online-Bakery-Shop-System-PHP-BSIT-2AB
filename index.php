<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Bakery Shop System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
</head>
<body>
	<!-- navigation bar -->
	<?php include 'components/navbar.php' ?>

	<div class="text">
		<br><br><h1>From our oven to you door</h1><br>
		<h2>In Cookie Co., our goods are not simply baked but are crafted to fit your taste. We take pride in creating freshly baked goods that are packed with lots of love! This means that in every bite you take, you are one step closer to satisfying your cravings.</h2>
	</div>

	<!-- featured menu (cake, cookie, pastry) -->
	<div class="menu">
		<div class="cake">
			<h2>CAKE</h2>
			<div class="col-1">
				<img src="images/carrot_cake.png">
			</div>
			<div class="col-1">
				<img src="images/chocofudge_cake.png">
			</div>
			<div class="col-1">
				<img src="images/marble_cake.png">
			</div>
		</div>
		<a href="cake_products.php" class="seemore-btn">See More</a>
	</div>

	<div class="menu">
		<div class="cookie">
			<h2>COOKIE</h2>
			<div class="col-2">
				<img src="images/chocochip_cookie.png">
			</div>
			<div class="col-2">
				<img src="images/chococringles_cookie.png">
			</div>
			<div class="col-2">
				<img src="images/gingerbread_cookie.png">
			</div>
		</div>
		<a href="cookies_products.php" class="seemore-btn">See More</a>
	</div>

	<div class="menu">
		<div class="pastry">
			<h2>PASTRY</h2>
			<div class="col-3">
				<img src="images/eggtart_pastry.png">
			</div>
			<div class="col-3">
				<img src="images/macaron_pastry.png">
			</div>
			<div class="col-3">
				<img src="images/pretzel_pastry.png">
			</div>
		</div>
		<a href="pastry_products.php" class="seemore-btn">See More</a>
	</div>
	<br>

	<!-- testimonies/ feedbacks -->
	<div class="testimonies">
		<div class="feedbacks">
			<div class="row">
				<h2>FEEDBACKS</h2>
				<div class="col-4">
					<i class="fa-solid fa-quote-left"></i>
					<p>The cake was good! Not so sweet, creamy but not so rich. Good value for money. It was delivered in good condition.</p>
					<div class="rating">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</div>
					<img src="images/anj.png">
					<h3>Angela</h3>
				</div>
				<div class="col-4">
					<i class="fa-solid fa-quote-left"></i>
					<p>I received the pastries earlier than expected. It was a Valentine’s gift for my mom, and it really made her happy.</p>
					<div class="rating">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</div>
					<img src="images/glen_.png">
					<h3>Glen</h3>
				</div>
				<div class="col-4">
					<i class="fa-solid fa-quote-left"></i>
					<p>Cake looks so pretty and tastes so good! Was also impressed that even under warm weather the cake still did not melt.</p>
					<div class="rating">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</div>
					<img src="images/emman.png">
					<h3>Emman</h3><br>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php include 'components/footer.php' ?>

	<script src="menu.js"></script>
</body>
</html>
