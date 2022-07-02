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
    <div class="parallax"><img src="assets/web-img/home-background.png"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <div class="col s12 m6 center">
        <img src="assets/web-img/logo.png" alt="" style="width: 80%;">
      </div>
      <div class="col s12 m6">
        <div style="height:5vw;" class="hide-on-med-and-down"></div>

        <div class="" style="height: 10%;"></div>
        <h3 class="header center">From our oven to your door. </h3>
        <p>In Cookie Co., our goods are not simply baked but are crafted to fit your taste. We take pride in creating
          freshly baked goods that are packed with lots of love! This means that in every bite you take, you are one
          step closer to satisfying your cravings. </p>
      </div>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="assets/web-img/home-background.png"></div>
  </div>
  <?php include 'components/footer.php' ?>

  <script src="js/product-list.js"></script>


  <script>
  M.AutoInit()
  </script>
</body>

</html>