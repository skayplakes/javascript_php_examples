<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="store_layout.css"> 

</head>
<body>
	<div class="masthead">
		
	</div>

    <nav class="navbar navbar-inverse navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HI-FI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">News</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Best Deals</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href=#>More <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Newsletter</a></li>
                <li><a href="#">Amazon listings</a></li>
                <li><a href="#">Forums</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> 

    <!--END NAVBAR -->

    <div class="container button-container">
	    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
	</div>

	<div id="id01" class="modal">
		<form class="modal-content animate" action="store_layout.php" method="POST">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
				<img src="img/man.png">
			</div>

			<div class="container modal-form">
					<label><b>Username</b></label>
					<input type="text" name="username" placeholder="Enter Username" required>

					<label><b>Password</b></label>
					<input type="password" name="password" placeholder="Enter Password" required>

					<button type="submit" name="login">Login</button>
					<input type="checkbox" checked="checked"> Remember me
			</div>

			<div class="container modal-form" style="background-color:#f1f1f1">
				<button type="button" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
				<span class="new" name='register'><a href="#">New user? Register here</a></span>
				
			</div>

		</form>

<?php
	
require_once 'register.php';

?>
	</div>



	<!--END LOGIN BUTTON-->


    <?php

	$items = [
		['img' => '<img src=\'img/sony.jpg\'>',
		 'name' => 'Sony MDRXB50AP',
		 'price' => 'Php 40.00',
		 'description' => 'Enjoy deep bass response with integrated mic and smartphone playback control. The Extra Bass design and 12mm driver units deliver powerful sound while the hybrid silicone ear buds ensure a secure fit.' . "<br>",
		 'category' => 'more than 30.00 php'],

		['img' => '<img src=\'img/mee6.jpg\'>',
		 'name' => 'MEE Audio M6 Pro',
		 'price' => 'Php 50.00',
		 'description' => 'Designed in collaboration with touring musicians, the M6 PRO is an all-in-one in-ear earphone for stage, gym, and street.' . "<br>",
		 'category' => 'more than 30.00 php'],
		 
		['img' => '<img src=\'img/jlab.jpg\'>',
		 'name' => 'JLab Core Hi-Fi',
		 'price' => 'Php 12.00',
		 'description' => 'Looking for your MVP? Core, Custom Fit Earbuds are a game changer, offering the perfect combination of incredible sound and revolutionary comfort. Our proprietary Cush Fin technology combined with four gel tip sizes, creates 500-plus options to get your custom fit. Plus with C3 sound technology, you’ll get the crystal clear clarity you deserve.' . "<br>",
		 'category' => 'less than 30.00 php'],
		 
		['img' => '<img src=\'img/panasonic.jpg\'>',
		 'name' => 'Panasonic ErgoFit RP-HJE120',
		 'price' => 'Php 40.00',
		 'description' => 'Enjoy the ultimate in style, comfort and listening pleasure with the Panasonic RP-HJE120 ErgoFit Earphones. With three included sets of earpads (S/M/L), you’ll get a custom, comfortable fit that won’t slip out.' . "<br>",
		 'category' => 'more than 30.00 php'],
		 
		['img' => '<img src=\'img/sennheiser.jpg\'>',
		 'name' => 'Sennheiser CX 300 II',
		 'price' => 'Php 35.00',
		 'description' => 'Offering a powerful, bass-driven stereo sound with greater clarity and improved dynamics over standard earbuds are the Sennheiser CX 300-II in-ear headphones. The various sizes of ear adapters (S/M/L sizes) provided in the package allow for a customized fit as well as exceptional noise blocking capability. A convenient carrying pouch is also included for easy storage.' . "<br>",
		 'category' => 'less than 30.00 php']
		 
	];

		foreach ($items as $item) {
			if(!isset($_POST['submit']) || $_POST['category'] == $item['category'] || $_POST['category'] == 'All') {
				echo "<div class='container'>";	
					echo "<div class='row'>";
						echo "<div class='col-md-6'>";
							echo $item['img']. "<hr>";
						echo "</div>";
						echo "<div class='col-md-6'>";
							echo "<h3>" . $item['name'] . "</h3>";
							echo "<h4>" . $item['price'] . "</h4>";
							echo $item['description'];
						echo "</div>";
					echo "</div>";
				echo "</div>";
			}
		}

		$category = array_column($items, 'category');
		
		$category = array_unique($category);


		function create_dropdown($name,$category){
			$output = "<select name='$name'>"; 
			$output .= "<option>All</option>";
			foreach ($category as $value) {
				if(isset($_POST[$name]) && $_POST[$name] == $value) {
					$output .= "<option selected value='$value'>$value</option>";
				} else {
					$output .= "<option value='$value'>$value</option>";
				}
			}
			$output .= "</select>";

			return $output;
		}

		echo "<form method='POST' action=''>";
		echo create_dropdown('category', $category); //include in the <form>
		echo "<input type='submit' name='submit' value='Search'></form>";

?>


<footer class="footer">
	<div class="container">
		<span class="text-muted">Made by Justin Gonzales | All rights Reserved </span>
	</div>
</footer>

	<script src="jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
		//modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</body>
</html>