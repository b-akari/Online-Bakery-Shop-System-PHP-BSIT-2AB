<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

?>
<nav>
  <div class="nav-wrapper primary-color">
    <a href="index.php" class="brand-logo center">
      <img src="  images/logo.png" alt="" style="height: 5vh ;">
    </a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
      <i class="material-icons">menu</i>
    </a>
    <ul class="right ">
      <li data-target="add-to-cart" class="sidenav-trigger">
        <a href="#">
          <i class="material-icons">
            shopping_cart
          </i>
        </a>
      </li>
    </ul>
    <ul class="right hide-on-med-and-down">
      <li><a href="All-products.php">All products</a></li>
      <!-- <li><a href="#">Best Seller</a></li> -->
      <!-- Dropdown Trigger -->
      <li>
        <a class="dropdown-trigger" href="#!" data-target="category">
          Category
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
    </ul>

    <ul class="hide-on-med-and-down account-status">
      <?php if (!isset($_SESSION["username"])) { ?>
      <li><a href="register.php">Register</a></li>
      <li><a href="login.php">Login</a></li>

      <?php } else { ?>

      <li><a href="login.php"><?php echo $_SESSION["username"] ?></a></li>
      <li><a href="#" id="logout-btn">Logout</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>

<!-- Side Navigator -->
<ul class="sidenav " id="mobile-demo">
  <li>
    <a href="index.php" class="brand-logo center" style="margin: 30px 0;">
      <img src="images/logo.png" alt="" style="width: 100%;">
    </a>
  </li>
  <div class="divider"></div>

  <li><a href="index.php">Home</a></li>
  <li><a href="#">Menu</a></li>
  <!-- <li><a href="#">Best Seller</a></li> -->

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
  <?php if (!isset($_SESSION["username"])) { ?>
  <li><a href="register.php">Register</a></li>
  <li><a href="login.php">Login</a></li>

  <?php } else { ?>

  <li><a href="login.php"><?php echo $_SESSION["username"] ?></a></li>
  <li><a href="#" id="logout-btn">Logout</a></li>
  <?php } ?>
</ul>

<!-- Dropdown Structure -->
<ul id="category" class="dropdown-content">
  <li><a href="category.php?type=cake&title=Cakes">Cakes</a></li>
  <li><a href="category.php?type=cookie&title=Cookies">Cookies</a></li>
  <li><a href="category.php?type=pastry&title=Pastries">Pastries</a></li>
</ul>

<script>
M.AutoInit()
$("#logout-btn").click((event) => {
  $.get("DB/user.php?type=logout")
    .done(res => {
      window.location = "index.php";
      getCart("null");
      M.toast({
        html: res
      });
    })
});
</script>