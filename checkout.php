<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION["username"])) {
  $user_ID = $_SESSION["ID"];
} else {
  $user_ID = "null";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>

  <?php include 'components/libraries.php' ?>

  <script src="js/product-list.js"></script>
  <script src="js/user.js"></script>
</head>

<body>
  <?php include 'components/cart-list.php' ?>
  <?php include 'components/navbar.php' ?>

  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3>Cart Items</h3>
      </div>
      <div class="col s12">
        <table class=" highlight responsive-table">
          <thead>
            <tr>
              <th>Product name</th>
              <th>Category</th>
              <th>Variant</th>
              <th>Base Price </th>
              <th>Quantity</th>
              <th>Total Price</th>
            </tr>
          </thead>

          <tbody id="checkout-data">

          </tbody>
        </table>
      </div>

      <div class="col s12">
        <h3>Checkout Details</h3>
      </div>
      <div class="col s12">
        <form class="row">

          <div class=" col s12 m6">
            <div class="row">

              <div class="col s12">
                <h5>Contact</h5>
              </div>

              <div class="col s12">
                <div class="row">
                  <div class="input-field col s12 m10 l6 offset-m1">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" name="name" type="text" class="validate">
                    <label for="name">Name</label>
                  </div>
                  <div class="input-field col s12 m10 l6 offset-m1">
                    <i class="material-icons prefix">phone</i>
                    <input id="contact-number" name="contact-number" type="tel" class="validate">
                    <label for="contact-number">Contact Number</label>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class=" col s12 m7">
            <div class="row">

              <div class="col s12">
                <h5>Address</h5>
              </div>

              <div class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">location_on</i>
                    <textarea id="icon_prefix2" name="address" class="materialize-textarea"></textarea>
                    <label for="icon_prefix2">Address</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12">
            <div class="row">
              <div class="col s12">
                <h5>Payment Options</h5>
              </div>
              <div class="col s12">
                <p>
                  <label>
                    <input class="with-gap" name="payment-method" type="radio" value="cod" checked />
                    <span>Cash-On-Delivery</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input class="with-gap" name="payment-method" type="radio" value="cc" />
                    <span>Credit Card</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input class="with-gap" name="payment-method" type="radio" value="gcash" />
                    <span>Gcash</span>
                  </label>
                </p>
              </div>

              <div class="col s12 m8 l6" id="credit-card-form">
                <div class="row">
                  <div class="col s12">
                    <h6>Card Details</h6>
                  </div>
                  <div class="input-field col s12 ">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="card-number" name="card-number" type="text" class="validate">
                    <label for="card-number">Card Number</label>
                  </div>
                  <div class="input-field col s8 ">
                    <i class="material-icons prefix">phone</i>
                    <input id="card-expiry-date" name="card-expiry-date" type="tel" class="validate">
                    <label for="card-expiry-date">Expery Date(MM/YY)</label>
                  </div>
                  <div class="input-field col s4 ">
                    <i class="material-icons prefix">phone</i>
                    <input id="card-cvv" name="card-cvv" type="tel" class="validate">
                    <label for="card-cvv">CVV</label>
                  </div>
                </div>
              </div>
              <div class="col s12 m8 l6" id="gcash-form">
                <div class="row">
                  <div class="col s12">
                    <h6>Gcash Details</h6>
                  </div>
                  <div class="input-field col s12 ">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="gcash-name" name="gcash-name" type="text" class="validate">
                    <label for="gcash-name">Gcash Name</label>
                  </div>
                  <div class="input-field col s12 ">
                    <i class="material-icons prefix">phone</i>
                    <input id="gcash-number" name="gcash-number" type="tel" class="validate">
                    <label for="gcash-number">Gcash Number</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col s12">
            <div class="row">
              <div class="col s12">
                <h5>Payment Details</h5>
              </div>
              <div class="col s12">
                <p>
                  Total Merchandise Price: ₱<span id="total-price-payment">400</span>
                </p>
                <p>
                  Shipping Price : ₱50
                </p>
                <p>
                  Total Price : ₱<span id="total-price-payment">400</span>
                </p>
              </div>

            </div>
          </div>
          <div class="col s12">

            <button class="btn waves-effect waves-light" type="submit" name="action">
              Proceed to payment
              <i class="material-icons right">send</i>
            </button>
          </div>
        </form>
      </div>

      <div class="col s12" style="height: 40vh;"></div>
    </div>
  </div>
  <?php include 'components/footer.php' ?>

  <script>
  displayCheckout(<?php echo $user_ID ?>);
  $("#credit-card-form").hide()
  $("#gcash-form").hide()

  $('input[type=radio][name=payment-method]').change(function() {
    if (this.value == "cod") {
      $("#credit-card-form").hide()
      $("#gcash-form").hide()
    } else if (this.value == "cc") {
      $("#credit-card-form").show()
      $("#gcash-form").hide()
    } else if (this.value == "gcash") {
      $("#gcash-form").show()
      $("#credit-card-form").hide()
    }
  });
  $("form").submit((event) => {
    event.preventDefault();
    console.log($("form").serializeArray());

  })
  </script>
</body>

</html>