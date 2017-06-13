<!DOCTYPE html>
<html>
<head>
	<title>12 days of Christmas</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="jquery-3.2.1.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">

	<style type="text/css">
		div {
			display: none;
		}

		#hide_1 {
			display: block;
		}

		body {
			text-align: center;
			font-family: 'Pangolin', cursive;
		}

	</style>


</head>
<body>

<h1>12 Days of Christmas</h1>

<br>

<button data-text-swap="Next" id="start" class="btn-primary">Start</button>


		<?php

		$days = [
		"first" => "A partridge in a pear tree",
		"second" => "Two turtle doves",
		"third" => "Three french hens",
		"fourth" => "Four calling birds",
		"fifth" => "Five golden rings",
		"sixth" => "Six geese a laying",
		"seventh" => "Seven swans a swimming",
		"eighth" => "Eight maids a milking",
		"ninth" => "Nine ladies dancing",
		"tenth" => "Ten lords a leaping",
		"eleventh" => "Eleven pipers piping",
		"twelfth" => "Twelve drummers drumming"
		];

		foreach ($days as $name => $value) {
			if ($name == "first") {

				echo "<div id='hide_1'><h1>On the " . $name . " day of Christmas my true love sent to me: " . $value . "</div>" . "</h1><br>";
			}

			elseif ($name == "second") {
				echo "<div id='hide_2'><h2>On the " . $name . " day of Christmas my true love sent to me: " . $value . " and " . $days["first"] . "</div>" . "</h2><br>";
			}

			elseif ($name == "third") {
				echo "<div id='hide_3'><h3>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h3><br>";
			}

			elseif ($name == "fourth") {
				echo "<div id='hide_4'><h4>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h4><br>";
			}

			elseif ($name == "fifth") {
				echo "<div id='hide_5'><h5>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h5><br>";
			}

			elseif ($name == "sixth") {
				echo "<div id='hide_6'><h6>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["fifth"] . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h6><br>";
			}

			elseif ($name == "seventh") {
				echo "<div id='hide_7'><h6>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["sixth"] . ", " . $days["fifth"] . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h6><br>";
			}

			elseif ($name == "eighth") {
				echo "<div id='hide_8'><h5>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["seventh"] . ", " . $days["sixth"] . ", " . $days["fifth"] . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h5><br>";
			}

			elseif ($name == "ninth") {
				echo "<div id='hide_9'><h4>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["eighth"] . ", " . $days["seventh"] . ", " . $days["sixth"] . ", " . $days["fifth"] . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h4><br>";
			}

			elseif ($name == "tenth") {
				echo "<div id='hide_10'><h3>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["ninth"] . ", " . $days["eighth"] . ", " . $days["seventh"] . ", " . $days["sixth"] . ", " . $days["fifth"] . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h3><br>";
			}

			elseif ($name == "eleventh") {
				echo "<div id='hide_11'><h2>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["tenth"] . ", " . $days["ninth"] . ", " . $days["eighth"] . ", " . $days["seventh"] . ", " . $days["sixth"] . ", " . $days["fifth"] . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</div>" . "</h2><br>";
			}

			elseif ($name == "twelfth") {
				echo "<div id='hide_12'><h1>On the " . $name . " day of Christmas my true love sent to me: " . $value . ", " . $days["eleventh"] . ", " . $days["tenth"] . ", " . $days["ninth"] . ", " . $days["eighth"] . ", " . $days["seventh"] . ", " . $days["sixth"] . ", " . $days["fifth"] . ", " . $days["fourth"] . ", " . $days["third"] . ", " . $days["second"] . " and " . $days["first"] . "</h1></div>";
			}
			
		}

			?>


			

		<!-- JS Files -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<script type="text/javascript">
			$("button").on("click", function(){
				var el = $(this);
				if (el.text() == el.data("text-swap")) {
					el.text(el.data("text-original"));
				} else {
					el.data("text-original", el.text());
					el.text(el.data("text-swap"));
				}
			});

			document.getElementById('start').onclick = function (){
				document.getElementById('hide_2').style.display = "block";
				document.getElementById('hide_1').style.display = "none";

				document.getElementById('start').onclick = function (){
					document.getElementById('hide_3').style.display = "block";
					document.getElementById('hide_2').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_4').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_5').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_6').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";
					document.getElementById('hide_5').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_7').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";
					document.getElementById('hide_5').style.display = "none";
					document.getElementById('hide_6').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_8').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";
					document.getElementById('hide_5').style.display = "none";
					document.getElementById('hide_6').style.display = "none";
					document.getElementById('hide_7').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_9').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";
					document.getElementById('hide_5').style.display = "none";
					document.getElementById('hide_6').style.display = "none";
					document.getElementById('hide_7').style.display = "none";
					document.getElementById('hide_8').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_10').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";
					document.getElementById('hide_5').style.display = "none";
					document.getElementById('hide_6').style.display = "none";
					document.getElementById('hide_7').style.display = "none";
					document.getElementById('hide_8').style.display = "none";
					document.getElementById('hide_9').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_11').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";
					document.getElementById('hide_5').style.display = "none";
					document.getElementById('hide_6').style.display = "none";
					document.getElementById('hide_7').style.display = "none";
					document.getElementById('hide_8').style.display = "none";
					document.getElementById('hide_9').style.display = "none";
					document.getElementById('hide_10').style.display = "none";

					document.getElementById('start').onclick = function (){
					document.getElementById('hide_12').style.display = "block";
					document.getElementById('hide_2').style.display = "none";
					document.getElementById('hide_3').style.display = "none";
					document.getElementById('hide_4').style.display = "none";
					document.getElementById('hide_5').style.display = "none";
					document.getElementById('hide_6').style.display = "none";
					document.getElementById('hide_7').style.display = "none";
					document.getElementById('hide_8').style.display = "none";
					document.getElementById('hide_9').style.display = "none";
					document.getElementById('hide_10').style.display = "none";
					document.getElementById('hide_11').style.display = "none";
				}
				}
				}
				}
				}
				}
				}
				}
				}
				}

			}

	</script>
</body>
</html>