<!DOCTYPE html>
<html>
<head>
	<title>PHP examples</title>
</head>
<body>

<?php

// echo "Input:";

// echo " " . htmlspecialchars($_GET['input1']) . "<br>";
// echo "Hello:" . " ";
// echo $_GET['name']; 


					//use & to seperate two diff variables
					//use (htmlspecialchars) to display html variables e.g <hr>, <br>
					//use (%20) to generate space between text



?>



<p>Please Login:</p>
<form action="session_example.php" method="POST">
	Username:<br>
		<input type="text" name="username"><br>
	Password:<br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="Submit">

</form>

<br>

<form method="POST" action="logout.php">
	<input type="submit" value="Logout" name="logout">
</form>













<!-- <form action="post_example.php" method="POST">
	Input1:<br>
		<input type="text" name="input1"><br>
	Name:<br>
		<input type="text" name="name"><br><br>
		<input type="submit" name="Submit">

</form> -->



</body>
</html>













