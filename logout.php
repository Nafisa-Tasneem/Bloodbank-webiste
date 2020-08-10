<?php
	
	session_start();
	
	session_destroy();
	
	header("Location:/bloodbank/login.php");

?>