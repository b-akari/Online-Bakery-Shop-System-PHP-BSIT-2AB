<?php
require_once '../unirest-php/src/Unirest.php';
require_once '../api/auth.php';

$id = $_REQUEST["ID"];
$product = $_REQUEST["product"];
$category = $_REQUEST["category"];
$quantity = $_REQUEST["quantity"];
$base_price = $_REQUEST["base_price"];
$variant = $_REQUEST["variant"];
$final_price = $_REQUEST["final_price"];
$type = $_REQUEST["type"];
$stocks = "-";

// API GET product REQUEST
if ($type == "item") {
  $api_id = $_REQUEST["product_ID"];

  $api_result = Unirest\Request::get("http://localhost:3000/catalog/product/$api_id?api_key=$AUTH_KEY");
  $api_product = $api_result->body;
  $stocks = $api_product->product->stocks;
}


?>

<tr>
  <td><?php echo $product != " " ? $product : "-" ?></td>
  <td><?php echo $category != " " ? $category : "-" ?></td>
  <td><?php echo $variant != " " ? $variant : "-"  ?></td>
  <td>
    <?php echo $base_price != " " ? "₱" : "" ?>
    <?php echo $base_price != " " ? $base_price : "-" ?>
  </td>
  <td><?php echo $quantity ?></td>
  <td><?php echo $stocks ?></td>
  <td>₱ <?php echo $final_price ?></td>
</tr>