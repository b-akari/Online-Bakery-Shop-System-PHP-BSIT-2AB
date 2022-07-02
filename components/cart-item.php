<?php
$id = $_REQUEST["ID"];
$product_name = $_REQUEST["product"];
$category = $_REQUEST["category"];
$variant = $_REQUEST["variant"];
$final_price = $_REQUEST["final_price"];
$quantity = $_REQUEST["quantity"];
$img_name = $_REQUEST["img_name"];
$user_ID = $_REQUEST["user_ID"];
?>
<li class="collection-item avatar">
  <img src="assets/product-img/<?php echo "$category/$img_name" ?>" alt="" class="circle">

  <span class="title" style="font-weight: bold;">
    <?php echo $product_name ?></span>
  <br>

  <span class="title" style="font-weight: bold;">
    <?php echo $category ?></span>

  <p>
    <span class="variant"><?php echo $variant ?></span><br>
    <span class="price">₱<?php echo $final_price ?></span><br>
    <input style="width: 50px;height: 20px;" type="number" value="<?php echo $quantity ?>">
  </p>
  <a href="#!" class="secondary-content" onclick="deleteFromCart(<?php echo $id ?>, <?php echo $user_ID ?>)">
    <i class="material-icons" style="margin-right: -70px;">delete</i>
  </a>
</li>