<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <title>experiment malala</title>
</head>

<body>
  <input type="number" name="haiz" id="num haha" min="0" max="10">
  <br>
  <h3>
    input = <span id="input"></span>
  </h3>

  <script>
  $("[type='number']").keypress(function(evt) {
    evt.preventDefault();
  });
  $("#num").change((e) => {
    console.log(e)
    $("#input").html($("#num haha").val());
  })
  </script>
</body>

</html>