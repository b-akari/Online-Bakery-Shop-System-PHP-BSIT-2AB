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
<ul id="add-to-cart" class="sidenav collection ">
  <!-- close icon -->
  <li>
    <div class="right-align">
      <a href="#" class="sidenav-close">
        <i class="material-icons ">close</i>
      </a>
    </div>
  </li>
  <!-- Your cart -->
  <li>
    <div class="center">
      <h5 style="font-weight: bold;">Your Cart</h5>
    </div>
  </li>
  <!-- divider -->
  <li>
    <div class="divider"></div>
  </li>
  <!-- add-to-cart itesms -->
  <div id="cart-list">

  </div>
  <li id="display-price">
    <div class="row">
      <div class="col s6 right-align">
        Total Price:
      </div>
      <div class="col s6">
        ₱
        <span id="total-price-cart">
          100
        </span>
      </div>
      <div class="col s6 right-align">
        Total Quantity:
      </div>
      <div class="col s6">
        <span id="total-quantity-cart">
          100
        </span>
        packages
      </div>
    </div>
  </li>
  <li>
    <a id="buy-all-btn" class="pink lighten-4 waves-effect btn" style="color:brown;" href="checkout.php">Buy All Now</a>
  </li>
</ul>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('#add-to-cart');
  var instances = M.Sidenav.init(elems, {
    edge: 'right'
  });
});
getCart("<?php echo $user_ID ?>");
</script>