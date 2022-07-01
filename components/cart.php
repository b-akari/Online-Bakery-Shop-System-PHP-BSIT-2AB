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
  <li class="collection-item avatar">
    <img src="assets/product-img/cake/carrot.png" alt="" class="circle">

    <span class="title" style="font-weight: bold;">Chocolate fudge cake </span>

    <p>
      <span class="type">8 x 10</span><br>
      <span class="price">$500</span><br>
      <input style="width: 50px;height: 20px;" type="number" value="1">
    </p>
    <a href="#!" class="secondary-content ">
      <i class="material-icons" style="margin-right: -70px; ">delete</i>
    </a>
  </li>

  <li>
    <a class="pink lighten-4 waves-effect btn" style="color:brown;">Buy Now</a>
  </li>
</ul>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('#add-to-cart');
  var instances = M.Sidenav.init(elems, {
    edge: 'right'
  });
});
</script>