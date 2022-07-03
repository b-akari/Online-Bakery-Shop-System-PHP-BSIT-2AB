<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION["username"])) {
  $user_ID = $_SESSION["ID"];
} else {
  $user_ID = "null";
}

$product_ID = $_REQUEST["product_ID"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>
  <link rel="stylesheet" href="css/theme.css">
  <?php include 'components/libraries.php' ?>

  <script src="js/product-list.js"></script>
  <script src="js/user.js"></script>
</head>

<body>
  <?php include 'components/cart-list.php' ?>
  <?php include 'components/navbar.php' ?>

  <div class="container">
    <div class="row">
      <div class="col s12" style="height: 9vh;"></div>

      <div id="product-highlight">


      </div>

      <div class="col s12" style="height: 9vh;"></div>

    </div>
  </div>

  <?php include 'components/footer.php' ?>

  <script>
    highlightProduct(<?php echo $product_ID ?>)
  </script>
</body>

</html>