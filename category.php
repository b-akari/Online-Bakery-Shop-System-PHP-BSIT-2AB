<?php

$name = $_REQUEST["name"];

$products;
$title = $name;


switch ($name) {
  case 'cookie':
    $products = array("chocochip", "chococringles", "gingerbread");
    break;
  case 'cake':
    $products = array("carrot", "chocofudge", "redvelvet");
    break;
  case 'pastry':
    $products = array("macaron", "pretzel");
    break;
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cookies All Products</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,300&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>
  <!-- navigation bar -->
  <?php include 'components/navbar.php' ?>


  <div class="menu">
    <div>
      <h2><?php echo $title ?></h2>
      <?php
      for ($i = 0; $i < count($products); $i++) {
      ?>
      <div class="col-2">
        <img src=<?php echo "images/$products[$i]_$name.png" ?>>
        <div class="middle">
          <a href=<?php echo "product.php?name=$products[$i]&category=$name" ?> class="text2">Add to Cart</a>
        </div>
      </div>
      <?php } ?>

      <br><br><br><br><br><br><br><br><br><br>

    </div>

    <!-- footer -->
    <?php include 'components/footer.php' ?>

    <script src="menu.js"></script>
</body>

</html>