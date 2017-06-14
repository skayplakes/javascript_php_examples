
<!DOCTYPE html>
<html>
<head>
	<title>F.L.A.M.E.S</title>
</head>
<body>

<h1>F.L.A.M.E.S</h1>

<form method="POST" action="">
	<input type="text" name="name1">
	<input type="text" name="name2">
	<input type="submit" name="submit" value="Submit">
</form>

<br>

<?php


if(isset($_POST['submit'])){
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];

	require_once 'flames_library.php'; //inserting php file from somewhere else

	echo replace($name1);
	echo replace($name2);


	$final_count = check_flames($name1,$name2) + check_flames($name2,$name1);
	echo "FLAMES = " . $flames[$final_count%6];
		
}

?>


</body>
</html>