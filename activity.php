<!DOCTYPE html>
<html>
<head>
	<title>Activity</title>
	<script src="jquery-3.2.1.min.js"></script>

	<style type="text/css">
		table, th, td {
			border: 1px solid red;
			border-collapse: collapse;
			padding: 20px;
		}

		th:hover {
			background-color: red;
		}

		td:hover {
			background-color: gray;
			color: white;
		}
	</style>
</head>
<body>

	<?php
		$names1 = array('Biff', 'Joshua', 'Gaspar', 'Balthasar', 'Joy');
		$names2 = array('John', 'Catch', 'Ahmed', 'Raziel', 'Maggie');
		echo $names2 [0];
	?>

	<ul>
		<li><?php echo $names2 [0]; ?></li>
		<li><?php echo $names2 [1]; ?></li>
		<li><?php echo $names2 [2]; ?></li>
		<li><?php echo $names2 [3]; ?></li>
		<li><?php echo $names2 [4]; ?></li>
	</ul>

	<ul>
		<li><?php echo $names1 [0]; ?></li>
		<li><?php echo $names1 [1]; ?></li>
		<li><?php echo $names1 [2]; ?></li>
		<li><?php echo $names1 [3]; ?></li>
		<li><?php echo $names1 [4]; ?></li>
	</ul>

	<table id="table">
		<tr>
			<th>Names1</th>
			<th>Names2</th>
		</tr>
		<tr>
			<td><?php echo $names1 [0]; ?></td>
			<td><?php echo $names2 [0]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1 [1]; ?></td>
			<td><?php echo $names2 [1]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1 [2]; ?></td>
			<td><?php echo $names2 [2]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1 [3]; ?></td>
			<td><?php echo $names2 [3]; ?></td>
		</tr>
		<tr>
			<td><?php echo $names1 [4]; ?></td>
			<td><?php echo $names2 [4]; ?></td>
		</tr>
	</table>

	<br>

	<button id="hide">Hide</button>
	<button id="show">Show</button>

	<br>
	<br>


	<?php

	// $string = "the lazy brown fox.";

	// $pos = strpos($string, 'brown');
	// echo substr($string, 0, $pos);
	// echo "quick " . substr($string, $pos);

	// echo "<br>";

	// $a = 3;
	// $b = 4;
	// $a_squared = pow($a, 2);
	// $b_squared = pow($b, 2);

	// echo sqrt($a_squared + $b_squared);

	// echo $c = sqrt( pow($a, 2) + pow($b, 2) );.

	// $a = 4;
	// $b = 3;
	// $add = $a + $b;
	// $subtract = $a - $b;
	// $multiply = $a * $b;
	// $divide = number_format($a/$b,2);
	// $remainder = $a % $b;
	// $increment = ++$b;
	// $decrement = --$a;

	// echo "A = ". $a. "<br>";
	// echo "B = ". $b. "<br>";
	// echo "A + B = ". $add. "<br>";
	// echo "A - B = ". $subtract. "<br>";
	// echo "A * B = ". $multiply. "<br>";
	// echo "A / B = ". $divide. "<br>";
	// echo "A % B = ". $remainder. "<br>";
	// echo "++B = ". $increment. "<br>";
	// echo "--A = ". $decrement. "<br>";
//-------------------------------------------------------
	$a = 4;
	$b = 3;

	//swap values
	function swapValues(&$a, &$b) {
		list($b, $a) = array($a, $b);
	}

	swapValues($a, $b);

	echo "A = ". $a;
	echo "<br>";
	echo "B = ".$b;

	$c = $a;
	$a = $b;
	$b = $c; //correct solution for swap values

	echo "<br>";

//--------------------------------------------------
	$input = "13";
	$a = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

		

	// $a[1] = "Monday";
	// $a[2] = "Tuesday";
	// $a[3] = "Wednesday";
	// $a[4] = "Thursday";
	// $a[5] = "Friday";
	// $a[6] = "Saturday";
	// $a[7] = "Sunday";

	// echo $a[1]. "<br>";
	// echo $a[4]. "<br>";
	// echo $a[7];



	





	// $start = strpos($string, 'brown');

	// echo strtoupper($string)."<br>";
	// echo strtolower($string)."<br>";
	// echo ucfirst($string)."<br>";
	// echo ucwords($string)."<br>";

	// echo strpos($string, 'over')."<br>";

	// $word = strtolower("Racecar");
	// $reversed = strrev($word);

		// if ($word == $reversed) {
			// echo "palindrome";
		// }
		// else {
			// echo "not a palindrome";
		// }

	// echo "<br>";



	?>








	<script type="text/javascript">
		$(document).ready(function(){
			$("#hide").click(function(){
				$("#table").hide();
			});
			$("#show").click(function(){
				$("#table").show();
			});
		});
	</script>

</body>
</html>