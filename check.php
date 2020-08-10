<?php

	$connection= mysqli_connect('localhost','root','','blood_bank_final');
	
	
		//$blood_group= $_POST['blood_group'];
	$query= "SELECT * FROM users WHERE blood_group='AB+'";
	
	$result= mysqli_query($connection,$query);

 if(mysqli_num_rows($result))
	{
	while($row=mysqli_fetch_assoc($result))
	{echo  $row['name'] ;
	}
	}
	
	else
	{
		echo "No Donor of this blood group found.";
	}
	
	?>