<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>

	<div class="container">

	<?php 

	// $cnt = 1;

	// $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	// do {

	// 	echo $cnt . ") ".$days[$cnt % 7]. "<br>";
	// 	++$cnt;
	// } while ($cnt <= 28);

	// $x = 1;

	// while ($cnt <= 12) {
	// 	echo $cnt . " squared is " . pow($cnt, 2). "<br>";
	// 	++$cnt;
	// }

	// for ($y=1; $y <= 12 ; $y++) { 
	// 	echo $y . " squared is " . pow($y, 2). "<br>";
	// }
	//-----------------------------------------------------
	// $even = 0;
	// $odd = 0;
	// for ($count=0; $count <= 50; $count++) { 
	// 	if ($count%2 == 0) {
	// 		$even += $count;
	// 	}
	// 	else {
	// 		$odd += $count;
	// 	}
	// }
	// echo "even sum is $even <br>";
	// echo "odd sum is $odd";
	//------------------------------------------------------
	// $string = "The quick brown fox.";

	// for ($x=0; $x<strlen($string); $x++) {

	// 	echo "<br>" . $string[$x];
	// }

	// $string = "The quick brown fox.";

	// for ($x=0; $x<strlen($string); $x++) {
	// 	if ($x%2 == 0) {
	// 		echo strtolower($string[$x]);
	// 	}
	// 	else {
	// 		echo strtoupper($string[$x]);
	// 	}
	// }
	//-----------------------------------------------------------
	// $string = "The quick brown fox.";
	// $cnt = 0;
	// for ($x=0; $x<strlen($string); $x++) { 
	// 	$l = $string[$x];
	// 	if ($l=='a' || $l=='e' || $l=='i' || $l=='o' || $l=='u')
	// 	 $cnt++;

			
	// 	}

	// 	echo "number of vowels in string: ". $cnt . "<br>";
	//--------------------------------------------------------------
	// echo "<table border = \"1\" style='border-collapse: collapse; text-align: center;'>";	
	// 	for ($row=1; $row <= 5; $row++) { 
	// 		echo "<tr>";

	// 		for ($col=1; $col <= 5; $col++) {
	// 			$p = $col * $row;
	// 			echo "<td>$p</td>";
	// 			}
	// 			echo "</tr>"; 
	// 		}
	// 		echo "</table>";

	// echo "<hr>";
	// //------------------------------------------------------------
	// $x = 0;
	// $y = 1;

	// echo $y . " ";

	// for ($i=1; $i < 15 ; $i++) { 
	// 	$z = $x + $y;
	// 	$x = $y;
	// 	$y = $z;
	// 	echo $z . " ";
	// }
	//------------------------------------------------------------
	// $colors = ['red', 'orange', 'yellow'];
	// echo $colors[1];
	// foreach ($colors as $color) {
	// 	echo "<li>".$color."</li>";
	// }

	// echo "</ul>"
	
	// $days = array(
	// 	'January' => 31,
	// 	'February' => 28,
	// 	'April' => 30
	// 	);

	// echo "<br>";
	//-----------------------------------------------------------

	// $names = ['Billy', 'PeeJay'];
	// $ages = [26, 23];

	// $records = [
	// 	'Billy' => 26,
	// 	'PeeJay' => 23
	// ];

	// echo $records['PeeJay']['password'] . " " . $records['Billy']['password'];

	// foreach ($records as $names => $age) {
	// 	echo "key: " . $names . ", value:" . $age . "<br>";
	// }

	// $records = [
	// 	'Billy' => ['username'=>'asdf','password'=>'qwer'],
	// 	'PeeJay' => ['username'=>'asdf','password'=>'qwer']
	// ];

	// foreach ($records as $name => $creds) {
	// 	echo $name . ":<br>";
	// 	foreach ($creds as $key => $value) {
	// 		echo $key . ": " . $value . "<br>";
	// 	}
	// }

	//-------------------------------------------------------------





















	// for ($i=0; $i < count($names) ; $i++) { 
	// 	echo $names[$i] . " is " . $ages[$i] . " years old. <br>";
	// }









	// $x = 17;

	// while ($x <= 50){
	// 	if ($x <= 15) {
	// 		echo $x . ") ". $x * 2 . "<br>";
	// 	}

	// 	elseif ($x <= 35) {
	// 		echo (30 - $x) / 2 . "<br>";
	// 	}

	// 	else {
	// 		echo $x + 6 . "<br>";
	// 	}

	// 	++$x;
	// }

	//------------------------------------------------------
	// $factorial = 1;
	// $x = 1;
	// 	// while ($x < 7) {
	// 	// 	//$factorial = $factorial * $x; 
	// 	// 	$factorial *= $x;
	// 	// 	echo "Factorial of $x is $factorial" . "<br>";

	// 	// 	$x++;
	// 	// }

	// 	for ($x=1; $x < 7; $x++) {
	// 		$factorial *= $x;
	// 		echo "Factorial of $x is $factorial" . "<br>";
	// 	}

	if (isset($_POST['submit'])) {
		echo "hello " . $_POST['username'];
	}










	?>
	
</div>
<div class="container">
	<form method="post" action="">
	username: <input type="text" name="username"><br>
	password: <input type="password" name="password"><br>
	<button>Submit</button>
</div>

</body>
</html>

