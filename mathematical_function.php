<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>Solve for the area of the rectangle</h2>
<form method="POST" action=''>
	Length: <input type="text" name="length">
	Width: <input type="text" name="width">
	<input type="submit" name="submit" value="Solve for the area">
</form>
<br>


<?php

if(isset($_POST['submit'])){

	$length = $_POST['length'];
	$width = $_POST['width'];

	function calculate_area($l,$w){
		return "Area of rectangle with length " . $l . " and width " . $w . " is: " . ($l * $w);
	}

	echo calculate_area($length,$width);
}


?>

</body>
</html>