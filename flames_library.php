<?php

$flames = ['Soulmates', 'Friends', 'Lovers', 'Affection', 'Marriage', 'Enemies'];



function check_flames($name1,$name2) {

		$name1_array = str_split(strtolower($name1)); //case insensitive
		$name2_array = str_split(strtolower($name2)); //case insensitive

		$count = 0; //variables to count remaining letters

		for($x=0; $x<count($name1_array); $x++){
			$has_match = 'false';
			for($y=0; $y<count($name2_array); $y++){
				if($name1_array[$x] == $name2_array[$y]){
					$has_match = 'true';
				}
			}
			if($has_match == 'false'){
				$count++;
			}
		}

		return $count;
	}

	function replace($name1) {
		$name1 = preg_replace('/[\x00-\x1F\x7F]/u', '', $name1); //to remove special characters
		$name1 = str_replace(' ', '', $name1); //to remove spaces between text
	}

?>