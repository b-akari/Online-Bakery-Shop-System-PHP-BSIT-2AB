<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Bakery Shop System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>
<<<<<<< Updated upstream
	<!-- navigation bar -->
	<?php include 'components/navbar.php' ?>
=======
  <!-- navigation bar -->
  <!-- <div class="container">
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
  </div> -->
  <?php include 'components/navbar.php' ?>
>>>>>>> Stashed changes


  <div class="text">
    <br><br>
    <h1>From our oven to you door</h1><br>
    <h2>In Cookie Co., our goods are not simply baked but are crafted to fit your taste. We take pride in creating
      freshly baked goods that are packed with lots of love! This means that in every bite you take, you are one step
      closer to satisfying your cravings.</h2>
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
    <a href="category.php?name=cake" class="seemore-btn">See More</a>
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
    <a href="category.php?name=cookie" class="seemore-btn">See More</a>
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
    <a href="category.php?name=pastry" class="seemore-btn">See More</a>
  </div>
  <br>

<<<<<<< Updated upstream
	<!-- footer -->
	<?php include 'components/footer.php' ?>

	<script src="menu.js"></script>
=======
  <!-- testimonies/ feedbacks -->
  <div class="testimonies">
    <div class="feedbacks">
      <div class="row">
        <h2>FEEDBACKS</h2>
        <div class="col-4">
          <i class="fa-solid fa-quote-left"></i>
          <p>The cake was good! Not so sweet, creamy but not so rich. Good value for money. It was delivered in good
            condition.</p>
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
          <p>I received the pastries earlier than expected. It was a Valentine’s gift for my mom, and it really made her
            happy.</p>
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
          <p>Cake looks so pretty and tastes so good! Was also impressed that even under warm weather the cake still did
            not melt.</p>
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
        <a href="feedbacks.php">Customer Feedback</a><br>
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
>>>>>>> Stashed changes
</body>

</html>