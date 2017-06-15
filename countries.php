<?

	

	// if(isset($_POST['submit'])) {
	// 	$country = $_POST['capital'];
	// 	echo "selected country is: " . $country . "<br>";
	// }

	// function create_dropdown

?>

<!DOCTYPE html>
<html>
<head>
	<title>Countries</title>
</head>
<body>

<h1>Capital of Countries</h1>

<form method="POST" action="">
	<h3>Capital</h3>
	<select name='capital'>
		<?php
			// foreach ($SEA as $country => $capital) {
			// 	echo "<option value='$country'>$capital</option>";
			// }
		?>
	</select>
	<input type="submit" name="submit" value="Submit">

</form>


<!-- <select name='capital'>
			<option value="Manila,Philippines">MNL</option>
			<option value="Tokyo, Japan">TKY</option>
			<option value="Abu Dhabi, UAE">AD</option>
			<option value="Oslo, Norway">OSL</option>
			<option value="Yerevan, Armenia">YRV</option>
			<option value="Stockholm, Sweden">STCKH</option>
			<option value="Bangkok, Thailand">BK</option>
			<option value="Mexico City, Mexico">MEX</option>
			<option value="Moscow, Russia">MSCW</option>
			<option value="Singapore, Singapore">SG</option>
			<option value="Washington D.C, USA">WASH</option>
		</select> -->

</body>
</html>