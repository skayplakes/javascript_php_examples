<?php

	if(isset($_POST['submit'])) {
		$country = $_POST['capital'];
		echo "selected country is: " . $country . "<br>";
	}

	$SEA = [
			'Philippines' => 'Manila',
			'Japan' => 'Tokyo',
			'UAE' => 'Abu Dhabi',
			'Norway' => 'Oslo',
			'Armenia' => 'Yerevan',
			'Sweden' => 'Stockholm',
			'Thailand' => 'Bangkok',
			'Mexico' => 'Mexico',
			'Russia' => 'Moscow',
			'Singapore' => 'Singapore',
			'USA' => 'Washington D.C',
		];

	function create_dropdown($name,$options){ 
	//need same values inside the function REMEMBER
		echo "<select name='$name'>";
			foreach ($options as $country => $capital) {
				echo "<option value='$country'>$capital</option>";
			}
		echo "</select>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Countries</title>
</head>
<body>

<h1>Capital of Countries</h1>

<form method="POST" action="">
	Capital
	<?php create_dropdown('capital', $SEA); ?>

	<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

