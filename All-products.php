<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION["username"])) {
  $user_ID = $_SESSION["ID"];
} else {
  $user_ID = "null";
}
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
  <style>
    .card-btn {
      background-color: black;
    }

    .card-btn:hover,
    .card-btn:focus {
      background-color: white;
      color: black;
    }

    .primary-color {
      background-color: #f59498 !important;
    }
  </style>

  <script src="js/product-list.js"></script>
  <script src="js/user.js"></script>
</head>

<body>
  <?php include 'components/navbar.php' ?>
  <?php include 'components/cart-list.php' ?>


  <div class="row">
    <div class="container">

      <div class="col s12 center">
        <h2 style="font-weight: bold; color: #f59498;">All Products</h2>
      </div>
      <div class="col s12">

        <div class="row" id="product-list">

          <!-- row -->
        </div>



      </div>
    </div>
  </div>

  <?php include 'components/footer.php' ?>

  <script>
    displayAllProducts();

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems);
    });
  </script>
</body>

</html>