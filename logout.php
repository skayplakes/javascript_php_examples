<?php

session_start();

session_destroy();

echo $_SESSION['username'] . " has logged out successfully";


?>