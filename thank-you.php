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
  <link rel="stylesheet" href="css/animate-thank-you.css">
  <script src="js/product-list.js"></script>
  <script src="js/user.js"></script>
</head>

<body>
  <?php include 'components/navbar.php' ?>
  <?php include 'components/cart-list.php' ?>

  <div id="body">

    <div class="animate-container">
      <div class="text-animate-container"><span class="text">Thank You
          <div class="icon--animate-container">
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
          </div>
        </span>
        <span class="text">Thank You</span>
        <span class="text">Thank You</span>
        <span class="text">Thank You</span>
        <span class="text">Thank You</span>
        <span class="text">Thank You</span>
        <span class="text">Thank You</span>
      </div>
      <div class="shadow-animate-container">
        <span class="text shadow">Thank You
          <div class="icon--animate-container">
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
            <svg class="icon star">
              <use xlink:href="#star"></use>
            </svg>
          </div>
        </span>
        <span class="text shadow">Thank You</span>
        <span class="text shadow">Thank You</span>
        <span class="text shadow">Thank You</span>
        <span class="text shadow">Thank You</span>
        <span class="text shadow">Thank You</span>
        <span class="text shadow">Thank You</span>
      </div>
    </div>

    <svg class="icons">
      <symbol id="star" viewbox="0 0 296.789 296.789">
        <path
          d="m 128.07699,246.6702 16.62278,44.87778 c 0.62488,1.68958 2.24042,2.81007 4.04647,2.81007 1.80605,0 3.42159,-1.12049 4.04646,-2.81007 l 16.62278,-44.87778 c 13.45522,-36.3312 42.2174,-64.97071 78.70166,-78.36601 l 45.06998,-16.55188 c 1.69428,-0.62221 2.81958,-2.23087 2.81958,-4.02922 0,-1.79835 -1.1253,-3.40699 -2.81958,-4.0292 l -45.07253,-16.5519 C 211.63034,113.74417 182.86815,85.107178 169.41548,48.778514 L 152.7927,3.900743 c -0.62487,-1.6870583 -2.24041,-2.8075483 -4.04646,-2.8075483 -1.80605,0 -3.42159,1.12049 -4.04647,2.8075483 L 128.07699,48.778514 C 114.62179,85.107178 85.862143,113.74417 49.375346,127.14199 l -45.0725171,16.5519 c -1.694284,0.62221 -2.819573,2.23085 -2.819573,4.0292 0,1.79835 1.125289,3.40701 2.819573,4.02922 l 45.0699771,16.55188 c 36.486798,13.3953 65.248984,42.03228 78.704184,78.36601 z">
        </path>
      </symbol>
    </svg>

  </div>

  <?php include 'components/footer.php' ?>

  <script>
  const textArr = document.querySelectorAll('.text')
  const colorArr = ["#fefefe", "#ff9b00", "#ff3434", "#db38f0", "#0096fb", "#00c500", "#ffd200"]
  textArr.forEach((text, index) => {
    text.style.color = colorArr[index]
  })
  M.AutoInit();
  M.toast({
    html: "Payment Checkout Successfully!"
  });
  </script>
</body>

</html>