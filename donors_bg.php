<?php


 session_start();


	/*
	if(isset($_POST['submit']))
	{
		$connection=mysqli_connect('localhost','root','','blood_bank_final');
		$blood_group= $_POST['blood_group'];
	$query= "SELECT * FROM users WHERE blood_group='$blood_group'";
	
	$result= mysqli_query($connection,$query);
	} */


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
	 
		<h1 class="index_h1">Find Donors of Your Blood Group</h1>
		
		<!-- form for finding donors of specific blood group -->
		
		<div class="search_box">
			<!--<h1 class="login_h1">Find Donors of Your Blood Group</h1> -->
				<form action="donors_bg_process.php" method="POST">
				
				<!--<p>Blood Group:</p><br> -->
					
					<select name="blood_group">
				
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
				
					</select>
					
					<input type="submit" value="Search" name="submit"><br><br>
					
				</form>
				
		</div><br><br>
		
		
		

	
	</body>


</html>