<?php
include 'init.php';
$type =  $_REQUEST["type"];

switch ($type) {
  case 'add':
    $user_ID = $_REQUEST["user_ID"];
    $product_ID = $_REQUEST["product_ID"];
    $variants_ID = $_REQUEST["variants_ID"];

    $sql = "SELECT * FROM add_to_cart WHERE user_ID = '$user_ID' AND product_ID = '$product_ID' AND variants_ID = '$variants_ID';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "This item is already in your cart!";
    } else {
      $sql = "INSERT INTO add_to_cart (user_ID, product_ID, quantity, variants_ID) VALUES ('$user_ID', '$product_ID', 1, '$variants_ID');";
      if ($conn->query($sql) === TRUE) {
        echo "Added to cart!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }

    break;
  case 'get':
    $user_ID = $_REQUEST["user_ID"];
    $sql = "SELECT 
              add_to_cart.ID,
              add_to_cart.user_ID,
              product.name AS product,
              category.name AS category,
              product.price,
              add_to_cart.quantity,
              variants.name AS variant,
              variants.price_multiplier,
              product.price * variants.price_multiplier AS final_price,
              product.img_name
          FROM add_to_cart
          INNER JOIN product
            ON add_to_cart.product_ID = product.ID 
          INNER JOIN variants
            ON add_to_cart.variants_ID = variants.ID
          INNER JOIN category
            ON product.category_ID = category.ID
          WHERE add_to_cart.user_ID = $user_ID
          ORDER BY  add_to_cart.ID";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $data["result"] = $result->fetch_all(MYSQLI_ASSOC);
      $data["total"] = $result->num_rows;
      echo json_encode($data);
    } else {
      echo "null";
    }

    break;
  case 'delete':
    $addToCart_ID = $_REQUEST["addToCart_ID"];
    $sql = "DELETE FROM add_to_cart
    WHERE add_to_cart.ID = $addToCart_ID;";

    if ($conn->query($sql) === TRUE) {
      echo "Item removed!";
    } else {
      echo "Error removing: " . $conn->error;
    }
    break;
  case 'quantity':
    $user_ID = $_REQUEST["user_ID"];
    $product_ID = $_REQUEST["product_ID"];
    $variants_ID = $_REQUEST["variants_ID"];
    $quantity = $_REQUEST["quantity"];
    break;
}

$conn->close();