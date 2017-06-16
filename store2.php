<!DOCTYPE html>
<html>
<head>
	<title>Store</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<style type="text/css">
		img {
			width: 200px;
			height: 200px;
		}

		h3 {
			text-align: center;
		}
	</style>

</head>
<body>

<?php

	
		// echo "<form method='GET' action=''>";
		// echo create_dropdown('category', $category);
		// echo "<input type='submit' name='submit' value='Search'></form>";
	

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
						echo "<div class='col-md-4'>";
							echo $item['img'] . "<br>" . "<hr>";
						echo "</div>";
						echo "<div class='col-md-6'>";
							echo "<h3>" . $item['name'] . "</h3>";
							echo "<h4>" . $item['price'] . "</h4>" . "<br>";
							echo $item['description'] . "<br>";
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

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>







