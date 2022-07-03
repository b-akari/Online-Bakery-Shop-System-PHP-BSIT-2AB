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

  <style>
  .input-disabled {
    color: black !important;
  }
  </style>

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
                    <textarea id="address" name="address" class="materialize-textarea"></textarea>
                    <label for="address">Address</label>
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

          <input type="number" name="total-quantity" id="total-quantity" class="hide">

          <div class="col s12">
            <div class="row">
              <div class="col s12">
                <h5>Payment Details</h5>
              </div>
              <div class="col s12">
                <p>
                  Total Merchandise Price:
                  <span class="input-field inline">
                    <i class="material-icons prefix">currency_ruble</i>
                    <input type="number" name="merchandise-price-payment" class="input-disabled"
                      id="merchandise-price-payment" value="0" readonly="true">
                  </span>
                </p>
                <p>
                  Shipping Fee :
                  <span class="input-field inline">
                    <i class="material-icons prefix">currency_ruble</i>
                    <input type="number" name="shipping-fee" class="input-disabled" id="shipping-fee" value="50"
                      readonly="true">
                  </span>
                </p>
                <p>
                  Total Price :
                  <span class="input-field inline">
                    <i class="material-icons prefix">currency_ruble</i>
                    <input type="number" name="total-price-payment" class="input-disabled" id="total-price-payment"
                      readonly="true">
                  </span>
                </p>
              </div>

            </div>
          </div>
          <div class="col s12">
            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">
              Proceed to payment
              <i class="material-icons right">send</i>
            </a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
              <div class="modal-content">
                <h4>Proceed to pay?</h4>
                <p>Press proceed to if you want to pay the current items.</p>
              </div>
              <div class="modal-footer">
                <button class="btn waves-effect waves-light btn-flat" type="submit" name="action">
                  Proceed
                  <i class="material-icons right">send</i>
                </button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">
                  Cancel
                </a>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="col s12" style="height: 40vh;"></div>
    </div>
  </div>
  <?php include 'components/footer.php' ?>

  <script>
  let currentUserID = <?php echo $user_ID ?>;
  displayCheckout(currentUserID);
  var elems = document.querySelectorAll('.modal');
  var instances = M.Modal.init(elems);
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
    let data_input = $("form").serializeArray();

    // basic input handling
    let basic_inputs = ["name", "contact-number", "address"];
    let inputs = []
    for (let i = 0; i < basic_inputs.length; i++) {
      if ($(`#${basic_inputs[i]}`).val().trim() == "") {
        inputs.push(basic_inputs[i]);
      }
    }
    if (inputs.length) {

      inputs = inputs.map(val => val.replace('-', ' '))
      M.toast({
        html: `Please enter your ${inputs.join(", ")} first!`
      })
      return;
    }

    // payment input handling
    let payment_method = $('input[type=radio][name=payment-method]:checked').val();
    switch (payment_method) {
      case 'cc':
        let card_inputs = ["card-number", "card-expiry-date", "card-cvv"];
        let card_empty_inputs = []
        for (let i = 0; i < card_inputs.length; i++) {
          if ($(`#${card_inputs[i]}`).val().trim() == "") {
            card_empty_inputs.push(card_inputs[i]);
          }
        }
        if (card_empty_inputs.length) {
          card_empty_inputs = card_empty_inputs.map(val => val.replace('card', "").replaceAll('-', ' '))
          M.toast({
            html: `Please enter your ${card_empty_inputs.join(", ")} in "Card Details"!`
          })
          return;
        }
        break;
      case 'gcash':
        let gcash_inputs = ["gcash-name", "gcash-number"];
        let gcash_empty_inputs = []
        for (let i = 0; i < gcash_inputs.length; i++) {
          if ($(`#${gcash_inputs[i]}`).val().trim() == "") {
            gcash_empty_inputs.push(gcash_inputs[i]);
          }
        }
        if (gcash_empty_inputs.length) {
          gcash_empty_inputs = gcash_empty_inputs.map(val => val.replace('gcash', "").replaceAll('-', ' '))
          M.toast({
            html: `Please enter your ${gcash_empty_inputs.join(", ")} in "Gcash Details"!`
          })
          return;
        }
        break;
    }
    // input formatting (trimming whitespaces)
    let data = $("form").serializeArray().map(val =>
      val = {
        ...val,
        value: val.value.trim()
      }
    )

    checkOutItems(data, currentUserID);

  })
  </script>
</body>

</html>