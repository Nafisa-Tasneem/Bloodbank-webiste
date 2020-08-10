<?php

	session_start();
	$admin_id=$_SESSION['admin_id'];
	
	if(!$admin_id)
	{
		
		header("Location:admin_login.php");
		echo "Your session has been expired.";
		
	}
	
	
	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	
	$query= "SELECT * FROM admin WHERE admin_id='$admin_id'";
	
	$result=mysqli_query($connection,$query);
	
	$row=mysqli_fetch_assoc($result);
	
	include 'admin_header.php'
	?>
	





</body>
</html>