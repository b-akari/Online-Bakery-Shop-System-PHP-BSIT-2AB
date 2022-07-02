<?php
$product = $_REQUEST["product"];
$category = $_REQUEST["category"];
$quantity = $_REQUEST["quantity"];
$base_price = $_REQUEST["base_price"];
$variant = $_REQUEST["variant"];
$final_price = $_REQUEST["final_price"];

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
  <td>₱ <?php echo $final_price ?></td>
</tr>