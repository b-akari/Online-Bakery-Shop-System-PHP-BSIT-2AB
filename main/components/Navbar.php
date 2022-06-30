<nav>
  <div class="nav-wrapper primary-color">
    <a href="#!" class="brand-logo center">
      <img src="../images/logo.png" alt="" style="height: 5vh ;">
    </a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
      <i class="material-icons">menu</i>
    </a>
    <ul class="right ">
      <li>
        <a href="#">
          <i class="material-icons">
            shopping_cart
          </i>

        </a>
      </li>
    </ul>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">All products</a></li>
      <li><a href="#">Best Seller</a></li>
      <!-- Dropdown Trigger -->
      <li>
        <a class="dropdown-trigger" href="#!" data-target="category">
          Category
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
    </ul>

    <ul class="hide-on-med-and-down account-status">
      <li><a href="#">Register</a></li>
      <li><a href="#">Login</a></li>
    </ul>
  </div>
</nav>

<!-- Side Navigator -->
<ul class="sidenav " id="mobile-demo">
  <li><a href="#!" class="brand-logo center">
      <img src="../images/logo.png" alt="" style="width: 100%;">
    </a></li>
  <div class="divider"></div>

  <li><a href="#">Menu</a></li>
  <li><a href="#">Best Seller</a></li>

  <li>
    <ul class="collapsible collapsible-accordion">
      <li>
        <a href="#" class="collapsible-header">Category</a>
        <div class="collapsible-body" style="display: block;">
          <ul>
            <li>
              <a href="#">Cakes</a>
            </li>
            <li>
              <a href="#">Cookies</a>
            </li>
            <li>
              <a href="#">Pastries</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <div class="divider"></div>
  <li><a href="#">Register</a></li>
  <li><a href="#">Login</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="category" class="dropdown-content">
  <li><a href="#!">Cakes</a></li>
  <li><a href="#!">Cookies</a></li>
  <li><a href="#!">Pastries</a></li>
</ul>
<script>
</script>