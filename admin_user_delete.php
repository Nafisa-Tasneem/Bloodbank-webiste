<?php

		$user_id=$_POST['user_id'];
		
		$connection= mysqli_connect('localhost','root','','blood_bank_final');
	$query= "DELETE FROM `users` WHERE user_id='$user_id'";
	
	
	if (mysqli_query($connection,$query))
	{
		
		echo "<h3>Deleted successfully.</h3>";
		
		header ('Location:admin_users.php');
		
	}
else
{
	mysqli_error();
}

?>