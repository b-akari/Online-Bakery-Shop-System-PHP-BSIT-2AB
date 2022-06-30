<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>

	<ul id="slide-out" class="sidenav collection ">
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
				<input style="width: 50px;     height: 20px;" type="number" value="1">
			</p>

			<a href="#!" class="secondary-content ">
				<i class="material-icons" style="margin-right: -70px; ">delete</i>
			</a>
		</li>


		<li>
			<a class="pink lighten-4  btn" style="color:brown;">Buy Now</a>
		</li>

	</ul>

	<a href="#" data-target="slide-out" class="sidenav-trigger">
		<i class="material-icons">menu</i>
	</a>
	<script src="jquery-3.6.0.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.sidenav');
			var instances = M.Sidenav.init(elems, {
				edge: 'right'
			});
		});
		instances.open()
	</script>
</body>

</html>