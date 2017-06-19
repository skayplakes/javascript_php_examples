<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form id="register" action="" method="POST">
	<fieldset style="width: 30%;">
		<legend><h1>Change Password</h1></legend>

			<table border="0">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Old Password:</td>
					<td><input type="password" name="old_password"></td>
				</tr>
				<tr>
					<td>New Password:</td>
					<td><input type="password" name="new_password"></td>
				</tr>
				<tr>
					<td>Confirm</td>
					<td><input type="password" name="confirm"></td>
				</tr>
					
			</table>	

			<input type="submit" name="change_pw">
			<button type="submit" name="back">Go Back</button>
			
	</fieldset>
</form>

<?php

	if(isset($_POST['change_pw'])){
		$string = file_get_contents("new.json");
		if($string)
			$array = json_decode($string, true);
		$username = $_POST['username'];
		$old_password = $_POST['old_password'];
		$new_password = $_POST['new_password'];
		$confirm = $_POST['confirm'];

		$index;

		foreach ($array as $key => $value) {
			if($value['username'] == $username 
				&& $value['password'] == $old_password
				&& $new_password == $confirm){
				
				$index = $key;
			}
		}

		$array[$index]['password'] = $new_password;

		$fp = fopen('new.json', 'w');
		fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));
		fclose($fp);
	}

	if(isset($_POST['back'])){
		header('location:content.php');
	}
?>	

</body>
</html>