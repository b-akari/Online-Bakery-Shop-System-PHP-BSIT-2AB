<?php
$id = $_REQUEST["ID"];
$category = $_REQUEST["category"];
$img_name = $_REQUEST["img_name"];
?>
<a class="carousel-item hoverable" href="product.php?product_ID=<?php echo $id ?>">
  <img src="assets/product-img/<?php echo $category . "/" . $img_name ?>">
</a>
<?php if (isset($_REQUEST["last"])) { ?>
<script>
var elems = document.querySelectorAll('.carousel');
M.Carousel.init(elems, {
  padding: 10,
  dist: -70
});
</script>
<?php } ?>