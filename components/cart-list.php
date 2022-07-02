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

  <li>
    <a class="pink lighten-4 waves-effect btn" style="color:brown;">Buy All Now</a>
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