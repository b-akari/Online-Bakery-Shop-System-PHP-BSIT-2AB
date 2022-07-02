<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<?php
$type = $_REQUEST["type"];
$title = $_REQUEST["title"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>

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
  </style>
  <script src="js/user.js"></script>

</head>

<body>
  <?php include 'components/navbar.php' ?>
  <?php include 'components/cart-list.php' ?>


  <div class="row">
    <div class="container">

      <div class="col s12 center">
        <h1 style="font-weight: bold;"><?php echo $title ?></h1>
      </div>
      <div class="col s12">

        <div class="row" id="category-list">



          <!-- row -->
        </div>



      </div>
    </div>
  </div>

  <?php include 'components/footer.php' ?>
  <script src="js/product-list.js"></script>

  <script>
  displayCategory("<?php echo $type ?>")
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
  $("form").submit(function(event) {

    event.preventDefault();
  });
  </script>
</body>

</html>