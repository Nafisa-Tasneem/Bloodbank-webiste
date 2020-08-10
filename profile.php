
		
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
			
			
			
			<h1 class="profile_h1">Hello <?php echo $row['name'] ?>! Welcome to your profile . </h1>
			
			<div class="profile_box">
				<?php 
				
				echo "Name : ".$row['name']."<br>";
				echo "Email is : ".$row['email']."<br>";
				echo "Blood group : ".$row['blood_group']."<br>";
				echo "Contact : ".$row['contact']."<br>";
				
				
				?>
				<br>
				
				
				
				
				
				
			</div>


			


			 
		
		</body>

	</html>
