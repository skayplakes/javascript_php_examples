<?php
	if(isset($_POST['submit'])){
		$gender = $_POST['gender'];
		echo "Selected gender is: " . $gender . "<br>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Sample Select Box</h1>
<form method="POST" action="">
	Gender
	<select name='gender'>
		<option value="female">F</option>
		<option value="male">M</option>
		<option value="gay">Bakla</option>
		<option value="lesbian">Tomboy</option>
		<option value="lizard">Butiki</option>
		<option value="pig">Baboy</option>
	</select>

	<input type="submit" name="submit"></form>
</form>

</body>
</html>