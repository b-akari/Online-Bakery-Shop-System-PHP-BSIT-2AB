<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie Co.</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <?php include_once 'components/libraries.php' ?>

  <style>
  .primary-color {
    background-color: #f59498 !important;
  }
  </style>
  <script src="js/user.js"></script>
</head>

<body>
  <?php $home = 1;
  include 'components/navbar.php' ?>
  <?php include 'components/cart-list.php' ?>

  <div class="parallax-container" style="height: 10vh ;">
    <div class="parallax"><img src="assets/web-img/home-background.png">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <div class="col s12 m7 center">
        <img src="assets/web-img/logo.png" alt="" style="width: 80%;">

      </div>
      <div class="col s12 m5">
        <div style="height:5vw;" class="hide-on-med-and-down"></div>

        <div class="" style="height: 10%;"></div>
        <h3 class="header center">From our oven to your door. </h3>
        <p>In Cookie Co., our goods are not simply baked but are crafted to fit your taste. We take pride in creating
          freshly baked goods that are packed with lots of love! This means that in every bite you take, you are one
          step closer to satisfying your cravings. </p>
      </div>

    </div>

  </div>
  <div class="parallax-container" style="height: 20vh ;">
    <div class="parallax"><img src="assets/web-img/home-background.png"></div>
  </div>
  <div class="section white">
    <div class="row">

      <div class="col s12">
        <h3 class="center">Have a look:</h3>
      </div>
      <div class="col s12">
        <div class="carousel">
          <a class="carousel-item hoverable" href="#one!"><img src="assets/product-img/cake/carrot.png"></a>
          <a class="carousel-item hoverable" href="#two!"><img src="assets/product-img/cake/chocofudge.png"></a>
          <a class="carousel-item hoverable" href="#three!"><img src="assets/product-img/cake/carrot.png"></a>
          <a class="carousel-item hoverable" href="#four!"><img src="assets/product-img/cake/carrot.png"></a>
          <a class="carousel-item hoverable" href="#five!"><img src="assets/product-img/cake/carrot.png"></a>
        </div>
      </div>
    </div>
  </div>
  <?php include 'components/footer.php' ?>

  <script src="js/product-list.js"></script>


  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems, {
      padding: 10,
      dist: -70
    });
  });

  M.AutoInit()
  </script>
</body>

</html>