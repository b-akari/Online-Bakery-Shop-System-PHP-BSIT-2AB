<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Products</title>
  <style>

  </style>
  <?php include 'components/libraries.php' ?>

</head>

<body>
  <?php include 'components/navbar.php' ?>
  <?php include 'components/cart.php' ?>

  <div class="container">
    <div class="row" style="height: 65vh;">
      <div class="s12" style="height: 10vh;">

      </div>
      <form class="col s12" id="login-form">
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3 ">
            <input id="email" type="email" name="login-email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m8 offset-m2 l6 offset-l3">
            <input id="password" type="password" name="login-password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m8 offset-m2 l6 offset-l3">

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m8 offset-m2 l6 offset-l3">
            <a href="register.php">Create an account </a>
          </div>
        </div>
      </form>
    </div>
  </div>


  <?php include 'components/footer.php' ?>
  <script>
  $("form").submit((event) => {
    event.preventDefault();
    let inputs = $("#login-form").serializeArray();
    let [email, password] = [...inputs]

    let data = {
      type: "login",
      email: email.value,
      password: password.value,
    }
    $.post(
        `DB/user.php`, data)
      .done((result) => {
        switch (result) {
          case "email":
            M.toast({
              html: "Email doesn't exist!"
            });
            break;
          case "password":
            M.toast({
              html: "Wrong password!"
            });
            break;
          default:
            let user = JSON.parse(result);
            M.toast({
              html: "Log in successfully!"
            });
            window.location.href = "index.php";
            break;
        }
      })
  });
  </script>
</body>

</html>