<?php
	
	session_start();
	
	session_destroy();
	
	header("Location:/bloodbank/admin_login.php");

?>