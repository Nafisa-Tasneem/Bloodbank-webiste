<?php

 session_start();


	
		$connection=mysqli_connect('localhost','root','','blood_bank_final');
		$blood_group= $_POST['blood_group'];
		$query= "SELECT * FROM users WHERE blood_group='$blood_group'";
		
		$result= mysqli_query($connection,$query);


	?>
	
	
	<!DOCTYPE html>

	<html>
	
	<head>
	
		<title>Donors by blood group</title>
		<link rel="stylesheet" href="css.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
	</head>
	
	
	<body>
	 
		<!-- Contents of navigation bar ---------------------------------- -->
		
			<header class="nav_header">
				<center>
				<nav class="index_nav">
				
					<a href="index.php">Home</a>
					<a href="inspiration.php">Inspirations</a>
					<a href="donors.php" id="active">Donors</a>
					<a href="request.php">Request For Blood</a>
					<a href="feedback.php">Feedback</a>
					<a href="post.php">Post</a>
				<!--	<a href="">List of Blood Banks</a> -->
					<?php if(isset($_SESSION['user_id']))
					{ ?>
					<a href="profile.php">Profile</a>
					<a href="logout.php">Logout</a>
					
					<?php }
						
						else 
						{ ?>
							<a href="register.php">Register</a>
							<a href="login.php">Login</a>
						<?php
						} ?>
				
				</nav>
				</center>
			
			</header>
			<br><br>
			<center> 
	<table border="1" cellspacing="0" cellpadding="10px">
			<tr>
				<th style="width:300px">Name</th>
				<th style="width:90px">Blood Group</th>
				<th style="width:400px">Email</th>
				<th style="width:300px">Address</th>
			</tr>
	
	<?php 
	if(mysqli_num_rows($result))
	{
	while($row=mysqli_fetch_assoc($result))
	{
		
	?>
	<tr>
		<td style="width:300px"><?php echo  $row['name'] ;?></td>
		<td style="width:90px"><?php echo $row['blood_group'];?></td>
		<td style="width:400px"><?php echo $row['email'];?></td>
		<td style="width:300px"><?php echo $row['address'];?></td>
	</tr>
	<?php }
	}
	
	else
	{
		echo "No Donor of this blood group found.";
	}
	
	
	
	?>
	
	</table>
	</center> 
	
	</body>

	
	</html>
