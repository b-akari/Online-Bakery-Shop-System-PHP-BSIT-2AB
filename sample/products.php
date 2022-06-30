<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include '../components/libraries.php' ?>
  <title>Document</title>

  <style>
    .card-btn {
      background-color: black;
    }

    .card-btn:hover {
      background-color: white;
      color: black;
    }
  </style>

</head>

<body>
  <?php include '../components/Navbar.php' ?>


  <div class="row">
    <div class="container">

      <div class="col s12 center">
        <h4 style="font-weight: bold;">All Products</h4>
      </div>
      <div class="col s12">

        <div class="row">
          <div class="col s12 m4">
            <!-- Product card -->
            <div class="card" style="background-color: #f59498; border-radius: 20px;">
              <div class="card-content">
                <img src="../images/carrot_cake.png" style="width: 100%; border-radius: 20px;">
                <span class="card-title" style="font-size: 25px; font-weight:bold;">
                  Carrot Cake
                </span>
                <select class="browser-default" style="width: 50%; height: 35px; font-size: 13px; background-color: #f59498;">
                  <option value="" disabled selected>Select Size</option>
                  <option value="1">6 x 8 = 600</option>
                  <option value="2">8 x 10 =* 1.2</option>
                  <option value="3">10 x 12 =* 1.4</option>
                </select>
              </div>
              <div class="card-action" style="border-radius: 20px;">
                <a class="waves-effect waves-light btn-small card-btn" href="#">See more details</a>
                <a class="waves-effect waves-light btn-small card-btn" href="#">add to cart</a>
              </div>
            </div>
          </div>












          <!-- row -->
        </div>



      </div>
    </div>
  </div>

  <?php include '../components/Footer.php' ?>

</body>

</html>