<!DOCTYPE html>
<html>
<head>
	<title>12 Days</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

<div class="container">

	<?php 

	echo "<h1>" . "Hello!" . "</h1>";

	$x = 0;

	echo $x + 5 . "<br>";

	// $names = ["Billy", "PJ", "Angeli", "Debbie", "Rigel"];

	// echo "<ul>";
	// foreach ($names as $name) {
	// 	if ($name == "Billy") {
	// 		echo "<li>" . "This is your name" . "</li>";
	// 	}
	// 	else {
	// 		echo "<li>" . $name . "</li>";
	// 	}
	// }
	// echo "</ul>";


	//Associative array
	$names = [
	 "Durant" => 35,
	 "James" => 23,
	 "Curry" => 30,
	 "Irving" => 2,
	 "Davis" => 23
];

echo "<ul class='list-group'>";
foreach ($names as $name => $jersey_num) {
	echo "<li class='list-group-item'>" . $name . " #" . $jersey_num . "</li>";
}
echo "</ul>";



	?>
</div>

	


	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>





