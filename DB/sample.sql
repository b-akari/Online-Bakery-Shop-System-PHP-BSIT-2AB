INSERT INTO checkout_items 
(user_ID, name, address, contact_number, payment_method, total_quantity, total_price, shipping_fee) 
VALUES ('', '', '', '', '', '', '', '');


INSERT INTO credit_card_checkout (number, expiry_date, cvv, checkout_items_ID)
 VALUES ( '', '', '', '')

 INSERT INTO gcash_checkout (name, number, checkout_items_ID) 
 VALUES ('', '', '')

SELECT 
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
ORDER BY  add_to_cart.ID;

INSERT INTO checkout_item (checkout_items_ID, product_ID, quantity, variants_ID, total_price) 
VALUES (?, ?, ?, ?, ?)

DELETE FROM add_to_cart WHERE user_ID = '$user_ID';