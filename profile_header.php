<?php

	session_start();
	$user_id=$_SESSION['user_id'];
	
	if(!$user_id)
	{
		
		header("Location:login.php");
		echo "Your session has been expired.";
		
	}
	
	
	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	
	$query= "SELECT * FROM users WHERE user_id='$user_id'";
	
	$result=mysqli_query($connection,$query);
	
	$row=mysqli_fetch_assoc($result);
	?>
	
	<html>
	
		<head>
			<title><?php echo $row['name'] ?> </title>
			<link rel="stylesheet" href="css.css" type="text/css" />
		</head>
		
		<body id="profile_body">
			<header class="profile_header">
				<center>
				<nav class="profile_nav"><!-- navigation bar contents---------------->
				
					<a href="index.php">Home</a>
					<a href="profile.php">Profile</a>
					<a href="request.php">Request For Blood</a>
					<a href="feedback_donor.php">Feedback</a>
					<a href="donation.php">Add donation</a>
					<a href="update_password.php">Change Password</a>
					<a href="update.php">Update Profile</a>
					<a href="">Show Request</a>
					<a href="logout.php">Logout</a>
					
				
				</nav>
				</center>
				
			</header>