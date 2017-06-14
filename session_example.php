<?php

	session_start();

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	if(authenticate($username,$password)){
	//to provide confirmation and to use $_SESSION if the user credentials is correct
		echo "User is valid";

		$_SESSION['username'] = $username; 
		//username will be recognized in other pages
	} 
	else {
		echo "Incorrect login details.";
	}

	

	function authenticate($username,$password){ 
	//values in function can be anything

	//to authenticate if username password is correct
		if($username == 'admin' && $password == 'secret'){
			return true;
		}
		else {
			return false;
		}
	}

?>