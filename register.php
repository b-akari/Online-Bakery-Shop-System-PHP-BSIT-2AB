<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>
  <link rel="stylesheet" href="css/theme.css">
  <?php include 'components/libraries.php' ?>
  <script src="js/user.js"></script>

</head>

<body>
  <?php include 'components/navbar.php' ?>
  <?php include 'components/cart-list.php' ?>

  <div class="container">
    <div class="row">
      <div class="s12" style="height: 10vh;">

      </div>
      <form class="col s12" autocomplete="off" id="register-form">
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3 ">
            <input id="register-username" type="text" name="register-username" class="validate">
            <label for="register-username">Username</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3 ">
            <input id="register-email" type="email" name="register-email" class="validate">
            <label for="register-email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3">
            <input id="register-password" type="password" name="register-password" class="validate">
            <label for="register-password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3">
            <input id="repassword" type="password" name="repassword" class="validate">
            <label for="repassword">Re-enter Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m8 offset-m2 l6 offset-l3">
            <button class="btn waves-effect waves-light" type="submit" name="action" style="background-color: #f59498;">
              Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m8 offset-m2 l6 offset-l3">
            <a href="login.php">Already have an account? </a>
          </div>
        </div>
      </form>
    </div>
  </div>`


  <?php include 'components/footer.php' ?>

  <script>
    $("form").submit((event) => {
      event.preventDefault();
      let inputs = $("#register-form").serializeArray();
      let [username, email, password, repassword] = [...inputs]

      if (password.value != repassword.value) {
        M.toast({
          html: "Password doesn't match: please try again..."
        })
        return
      }
      let params = $.param({
        type: "registration_validation",
        username: username.value,
        email: email.value
      })
      $.get(
          `DB/user.php?${params}`)
        .done((result) => {
          switch (result) {
            case "email":
              M.toast({
                html: "Email already exist!"
              });
              break;
            case "username":
              M.toast({
                html: "Username already exist!"
              });
              break;
            case "null":
              let data = {
                type: "register",
                username: username.value,
                email: email.value,
                password: password.value,
              }
              $.post(
                "DB/user.php",
                data
              )
              M.toast({
                html: "Successfully registered!"
              });
              window.location.href = "login.php";
              break;
          }
        })
    });
  </script>

</body>

</html>