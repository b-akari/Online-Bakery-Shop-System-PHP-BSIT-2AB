<?php
include 'init.php';
$payment_method =  $_REQUEST["payment_method"];
$user_ID =  $_REQUEST["user_ID"];

// input details
$name = $_REQUEST["name"];
$contact_number = $_REQUEST["contact_number"];
$address = $_REQUEST["address"];
// payment details
$total_quantity = $_REQUEST["total_quantity"];
$shipping_fee = $_REQUEST["shipping_fee"];
$total_price_payment = $_REQUEST["total_price_payment"];
// card details
$card_number = $_REQUEST["card_number"];
$card_expiry_date = $_REQUEST["card_expiry_date"];
$card_cvv = $_REQUEST["card_cvv"];
// gcash details
$gcash_name = $_REQUEST["gcash_name"];
$gcash_number = $_REQUEST["gcash_number"];

// INSERT the datas in the check-out items
$insertNewCheckout = "INSERT INTO checkout_items 
(user_ID, name, address, contact_number, payment_method, total_quantity, total_price, shipping_fee) 
VALUES ('$user_ID', '$name', '$address', '$contact_number', '$payment_method', '$total_quantity', '$total_price_payment', '$shipping_fee');";
if ($conn->query($insertNewCheckout) === TRUE) {
  // GET the check-out items ID
  $checkout_ID = $conn->insert_id;
} else {
  echo "Error inserting checkout: " . $sql . "<br>" . $conn->error;
  $conn->close();
  return;
}

// CHECK the payment_method
switch ($payment_method) {
  case 'cc':
    // INSERT the card details in the credit_card_checkout
    $insertNewCreditCard = "INSERT INTO credit_card_checkout (number, expiry_date, cvv, checkout_items_ID)
    VALUES ( '$card_number', '$card_expiry_date', '$card_cvv', '$checkout_ID')";
    if ($conn->query($insertNewCreditCard) !== TRUE) {
      echo "Error inserting checkout: " . $sql . "<br>" . $conn->error;
      $conn->close();
      return;
    }
    break;
  case 'gcash':
    // INSERT the gcash details in the gcash_checkout
    $insertNewGcash = " INSERT INTO gcash_checkout (name, number, checkout_items_ID) 
    VALUES ('$gcash_name', '$gcash_number', '$checkout_ID')";
    if ($conn->query($insertNewGcash) !== TRUE) {
      echo "Error inserting checkout: " . $sql . "<br>" . $conn->error;
      $conn->close();
      return;
    }
    break;
  default:
    // cod payment, does nothings
    break;
}

// GET all current cart items in user_ID
$getAllCartItems = "SELECT 
                      add_to_cart.product_ID,
                      add_to_cart.variants_ID,
                      add_to_cart.quantity,
                      TRUNCATE(product.price * variants.price_multiplier * add_to_cart.quantity, 2) AS total_price
                    FROM add_to_cart
                    INNER JOIN product
                    ON add_to_cart.product_ID = product.ID 
                    INNER JOIN variants
                    ON add_to_cart.variants_ID = variants.ID
                    WHERE add_to_cart.user_ID = $user_ID
                    ORDER BY  add_to_cart.ID;";

$cartItems = $conn->query($getAllCartItems);
// Prepare statement for multiple insertion
$prepareCheckoutItems = $conn->prepare("INSERT INTO checkout_item (checkout_items_ID, product_ID, quantity, variants_ID, total_price) 
VALUES (?, ?, ?, ?, ?)");
$prepareCheckoutItems->bind_param("iiiid", $checkoutID, $productID, $quantity, $variantsID, $totalPrice);
$checkoutID = $checkout_ID;

if ($cartItems->num_rows > 0) {
  // INSERT all cart items into check-out items
  while ($cartItem = $cartItems->fetch_assoc()) {
    $productID = $cartItem['product_ID'];
    $quantity = $cartItem['quantity'];
    $variantsID = $cartItem['variants_ID'];
    $totalPrice = $cartItem['total_price'];
    $prepareCheckoutItems->execute();
  }
  $prepareCheckoutItems->close();
} else {
  echo "0 cart items";
  $prepareCheckoutItems->close();
  $conn->close();
  return;
}

// DELETE all add-to-cart items from current user
$deleteCartItems = "DELETE FROM add_to_cart WHERE user_ID = $user_ID;";
if ($conn->query($sql) !== TRUE) {
  echo "Error deleting cart items: " . $conn->error;
}

echo "success";
$conn->close();