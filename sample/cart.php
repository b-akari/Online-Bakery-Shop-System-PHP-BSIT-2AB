<ul id="add-to-cart" class="sidenav collection ">
  <li>
    <div class="right-align">
      <a href="#" class="sidenav-close">
        <i class="material-icons ">close</i>
      </a>
    </div>
  </li>
  <li>
    <div class="center">
      <h5 style="font-weight: bold;">Your Cart</h5>
    </div>
  </li>
  <li>
    <div class="divider"></div>
  </li>
  <li class="collection-item avatar ">
    <img src="../images/carrot_cake.png" alt="" class="circle">
    <span class="title" style="font-weight: bold;">Chocolate fudge cake </span>
    <p>$500<br>
      <input style="width: 50px;height: 20px;" type="number" value="1">
    </p>
    <a href="#!" class="secondary-content ">
      <i class="material-icons" style="margin-right: -70px; ">delete</i>
    </a>
  </li>
  <li>
    <a class="pink lighten-4  btn" style="color:brown;">Buy Now</a>
  </li>
</ul>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {
    edge: 'right'
  });
});
instances.open()
</script>