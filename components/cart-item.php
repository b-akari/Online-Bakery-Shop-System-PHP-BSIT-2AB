<?php
$id = $_REQUEST["ID"];
$product_name = $_REQUEST["product"];
$category = $_REQUEST["category"];
$variant = $_REQUEST["variant"];
$final_price = $_REQUEST["final_price"];
$quantity = $_REQUEST["quantity"];
$img_name = $_REQUEST["img_name"];
$user_ID = $_REQUEST["user_ID"];
$variant_name = str_replace(" ", "-", $variant);
?>

<li class="collection-item avatar">
  <img src="assets/product-img/<?php echo "$category/$img_name" ?>" alt="" class="circle">

  <span class="title" style="font-weight: bold;">
    <?php echo $product_name ?></span>
  <br>

  <span class="title" style="font-weight: bold;">
    <?php echo $category ?></span>

  <p>
    variant: <span class="variant"><?php echo $variant ?></span><br>
    price: <span class="price">₱<?php echo $final_price ?></span><br>
    qty:
    <input style="width: 50px;height: 20px;" id="<?php echo "qty-$id" ?>" type="number" value="<?php echo $quantity ?>"
      min="0" max="10"><br>
  </p>
  <a href="#!" class="secondary-content" onclick="deleteFromCart(<?php echo $id ?>, <?php echo $user_ID ?>)">
    <i class="material-icons" style="margin-right: -70px;">delete</i>
  </a>
</li>

<script>
$("[type='number']").keypress(function(evt) {
  evt.preventDefault();
});
$("#<?php echo "qty-$id" ?>").change((e) => {
  let cart_ID = <?php echo $id ?>;
  let newQty = $("#<?php echo "qty-$id" ?>").val();
  let user_ID = <?php echo $user_ID ?>;
  updateQty(cart_ID, newQty, user_ID);
})
</script>