<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$input = "22/03/2016";  // dd/mm/yyyy format
	//february 3, 2016
	
	$months = [
		'January',
		'February',
		'March',
		'April',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December'
	];

	$input = explode("/", $input);
	$dd = $input[0]/1;
	$mm = $input[1]/1;
	$yyyy = $input[2];

	echo $months[$mm-1] . ' ' . $dd . ', ' . $yyyy;



	$zodiac = [
		"Capricorn",
		"Aquarius",
		"Pisces",
		"Aries",
		"Taurus",
		"Gemini",
		"Cancer",
		"Leo",
		"Virgo",
		"Libra",
		"Scorpio",
		"Saggitarius",
	];

	$zodiac_border_days = [
		20,
		19,
		21,
		20,
		21,
		21,
		23,
		23,
		23,
		23,
		22,
		22
	];

	echo "<br> Zodiac is " . $zodiac[$mm];






?>

</body>
</html>