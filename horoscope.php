<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	
	function get_zodiac($input){
		
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
		echo "<br>";

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
			20, //january
			19, //february
			21, //march
			20, //april
			21, //may
			21, //june
			23, //july
			23, //august
			23, //september
			23, //october
			22, //november
			22 //december
		];

		if (($mm == 12 && $dd > 22) || ($mm == 1 && $dd < 19)) {
			return $zodiac[0]; //capricorn
		} elseif (($mm == 1 && $dd > 20) || ($mm == 2 && $dd < 18)) {
			return $zodiac[1]; //aquarius
		} elseif (($mm == 2 && $dd > 19) || ($mm == 3 && $dd < 20)) {
			return $zodiac[2]; //pisces
		} elseif (($mm == 3 && $dd > 21) || ($mm == 4 && $dd < 19)) {
			return $zodiac[3]; //aries
		} elseif (($mm == 4 && $dd > 20) || ($mm == 5 && $dd < 20)) {
			return $zodiac[4]; //taurus
		} elseif (($mm == 5 && $dd > 21) || ($mm == 6 && $dd < 20)) {
			return $zodiac[5]; //gemini
		} elseif (($mm == 6 && $dd > 21) || ($mm == 7 && $dd < 22)) {
			return $zodiac[6]; //cancer
		} elseif (($mm == 7 && $dd > 23) || ($mm == 8 && $dd < 22)) {
			return $zodiac[7]; //leo
		} elseif (($mm == 8 && $dd > 23) || ($mm == 9 && $dd < 22)) {
			return $zodiac[8]; //virgo
		} elseif (($mm == 9 && $dd > 23) || ($mm == 10 && $dd < 22)) {
			return $zodiac[9]; //libra
		} elseif (($mm == 10 && $dd > 23) || ($mm == 11 && $dd < 21)) {
			return $zodiac[10]; //scorpio
		} elseif (($mm == 11 && $dd > 22) || ($mm == 12 && $dd < 21)) {
			return $zodiac[11]; //saggitarius
		}

		return get_zodiac();
	}

	$input = "31/11/2016";

	// echo $input . "<br>";

	echo get_zodiac($input);


?>


<form action="" method="POST">
	<input type="date" name="zodiac">
	<input type="submit" name="submit">
</form>



</body>
</html>