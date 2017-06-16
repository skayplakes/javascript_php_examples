<?php

$string = file_get_contents('new.json');
	$users = json_decode($string, true);

	if(isset($_POST['submit'])) {
		$new_user = [];

		$new_user['username'] = $_POST['username'];
		$new_user['password'] = $_POST['password'];

		$users[] = $new_user;

		$fp = fopen('new.json', 'w');
		fwrite($fp, json_encode($users, JSON_PRETTY_PRINT));
		fclose($fp);
	}

		if(isset($_POST['login'])){
			foreach ($users as $user) {
				if($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
					header('location:store_layout.php'); //redirect to main content
				} else {
					header('location:register.php');
				}
			}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<form id="register" action="" method="POST">
	<fieldset style="width: 30%;">
		<legend><h1>Registration form</h1></legend>

			<table border="0">
				<tr>
						<td>Username:</td>
						<td><input type="text" name="username"></td>
				</tr>
				<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
				</tr>
					
			</table>	

			<input type="submit" name="submit">
			
	</fieldset>
</form>	


</body>
</html>

