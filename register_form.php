<?php

	function get_title() {
		echo "register";
	}

	function display_content() {

		$string = file_get_contents('new.json');
			$users = json_decode($string, true);

		if(isset($_POST['login'])){
				foreach ($users as $user) {
					if($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
						header('location:content.php');
						 //redirect to main content
					} else {
						header('location:register.php');
					}
				}
			}
		}



?>