<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION["username"])) {
  $user_ID = $_SESSION["ID"];
} else {
  $user_ID = "-1";
}
$id = $_REQUEST["ID"];
$name = $_REQUEST["product"];
$category = $_REQUEST["category"];
$img_name = $_REQUEST["img_name"];
$price = $_REQUEST["price"];
$variants = $_REQUEST["variants"];
$description = $_REQUEST["description"];

?>


<div class="col s12 center">
  <h1><?php echo "$name $category" ?></h1>
</div>

<div class="col s12">
  <div class="row" id="product-highlight">
    <div class="col s12 m5 l4 offset-l2 center">
      <img src="assets/product-img/<?php echo "$category/$img_name" ?>" class=" z-depth-1 hoverable materialboxed
        responsive-img" alt="">
    </div>
    <div class="col s12 m7 l6 ">
      <h4>Description</h4>
      <p><?php echo $description ?></p>
      <h5>Price: <span><?php echo $price ?></span></h5>
    </div>

    <form class="row col s12 m7 l6">
      <input type="number" name="user_id" value=<?php echo $user_ID ?> class="hide">
      <input type="number" name="product_id" value=<?php echo $id ?> class="hide">
      <div class="input-field col s12 m6">
        <select name="variant_id">
          <option disabled selected>Select Variants</option>
          <?php for ($i = 0; $i < count($variants); $i++) { ?>
          <option value="<?php echo $variants[$i]["ID"] ?>">
            <?php echo $variants[$i]["name"] ?>
          </option>
          <?php } ?>
        </select>
      </div>
      <div class="col s12 m7">
        <button class="btn waves-effect waves-light " type="submit" name="action">
          Add to cart
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</div>

<script>
$("form").submit(function(event) {
  event.preventDefault();
  let data = $("form").serializeArray();
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