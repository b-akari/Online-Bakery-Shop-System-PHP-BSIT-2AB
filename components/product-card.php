<!-- ID, name, price, category, variants -->
<?php
$name = $_REQUEST["product"];
$category = $_REQUEST["category"];
$img_name = $_REQUEST["img_name"];
$price = $_REQUEST["price"];
$variants = $_REQUEST["variants"];


?>
<div class="col s12 m6 l4">
  <div class="card hoverable" style="background-color: #f59498; border-radius: 20px;">
    <div class="card-content">
      <img src="assets/product-img/<?php echo $category . "/" . $img_name ?>" style=" width: 100%; border-radius:
        20px;">
      <span class="card-title center" style="font-size: 25px; font-weight:bold;">
        <?php echo $name . " " . $category ?>
      </span>
      <span class="card-title center" style="font-size: 20px; font-weight:bold;">
        Price: <span class="price"><?php echo $price ?></span>
      </span>
      <div class="row">
        <div class="col s12">
          <select>
            <option disabled selected>Select Variants</option>
            <?php for ($i = 0; $i < count($variants); $i++) { ?>
            <option value="<?php echo $variants[$i]["price_multiplier"] ?>">
              <?php echo $variants[$i]["name"] ?>
            </option>
            <?php } ?>
          </select>
        </div>
      </div>

    </div>

    <div class="card-action" style="border-radius: 20px;">
      <div class="row">
        <div class="col s5 offset-s1">
          <a class="waves-effect waves-light btn-small card-btn" href="#">See more details</a>
        </div>
        <div class="col s5 offset-s1">
          <a class="waves-effect waves-light btn-small card-btn add-to-cart-btn" href="#">add to cart</a>
        </div>
      </div>
    </div>
  </div>
</div>