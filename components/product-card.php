<!-- ID, name, price, category, variants -->
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$id = $_REQUEST["ID"];
$name = $_REQUEST["product"];
$category = $_REQUEST["category"];
$img_name = $_REQUEST["img_name"];
$price = $_REQUEST["price"];
$variants = $_REQUEST["variants"];

if (isset($_SESSION["username"])) {
  $user_ID = $_SESSION["ID"];
  $isLogin = "true";
} else {

  $user_ID = -1;
  $isLogin = "false";
}

?>
<style>
.select-wrapper>ul>li>span {
  color: #f59498;
}
</style>

<div class="col s12 m6 l4">
  <div class="card hoverable" style="background-color: #f59498; border-radius: 20px;">
    <div class="card-content">
      <a class="waves-effect" href="product.php?product_ID=<?php echo $id ?>">
        <img src="assets/product-img/<?php echo $category . "/" . $img_name ?>" style=" width: 100%; border-radius:
        20px;">
      </a>
      <span class="card-title center" style="font-size: 25px; font-weight:bold;">
        <?php echo $name ?>
      </span>
      <span class="card-title center" style="font-size: 20px; font-weight:bold;">
        Price: <span class="price">₱<?php echo $price ?></span>
      </span>

      <div class="row">
        <div class="col s12">

          <form id="<?php echo $id ?>">
            <input type="number" name="user_id" value=<?php echo $user_ID ?> class="hide">
            <input type="number" name="product_id" value=<?php echo $id ?> class="hide">
            <select name="variant_id">
              <option disabled selected>Select Variants</option>

              <?php for ($i = 0; $i < count($variants); $i++) { ?>
              <option style="color: #f59498;" value="<?php echo $variants[$i]["ID"] ?>">
                <?php echo $variants[$i]["name"] ?>
              </option>
              <?php } ?>

            </select>
          </form>

        </div>
      </div>

    </div>

    <div class="card-action" style="border-radius: 20px;">
      <div class="row">
        <div class="col s5 offset-s1">
          <a class="waves-effect waves-light btn-small card-btn" href="product.php?product_ID=<?php echo $id ?>">
            See more details
          </a>
        </div>
        <div class="col s5 offset-s1">
          <button class="waves-effect waves-light btn-small card-btn" type="submit" form="<?php echo $id ?>">
            add to cart
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$("#<?php echo $id ?>").submit(function(event) {
  event.preventDefault();
  let data = $("#<?php echo $id ?>").serializeArray();

  if (data[0].value == -1) {
    M.toast({
      html: "Please log in first!"
    })
    return
  }

  if (data.length != 3) {
    M.toast({
      html: "Please select a variant for the product first!"
    })
    return
  }

  addToCart(<?php echo $user_ID ?>, data[1].value, data[2].value);
});
</script>