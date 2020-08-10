<?php

 session_start();



	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	$query1= "SELECT * FROM feed";
	
	$result= mysqli_query($connection,$query1);
	
	?>
		
	
	
	<!DOCTYPE html>

<html>
	
	<head>
	
		<title>Feedback</title>
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
					<a href="donors.php">Donors</a>
					<a href="request.php">Request For Blood</a>
					<a href="feedback_donor.php">Feedback</a>
					<a href="post.php"  id="active">Post</a>
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
			
			<?php 
			
			
			while($row=mysqli_fetch_assoc($result))
			{
			
			$name=$row['name'];
			$type=$row['type'];
			$feedback=$row['feedback'];?>
			
	<!-- ----------------------div for each feedback ------------------------------------------------------------------ -->
	<div class="feedback">
	<center>
		<p><?php echo $name; ?></p>
		<p><?php echo $type; ?></p>
		<p><?php echo $feedback; ?></p>
		
		<br>
	</center>
		
		<?php 
		}
		?>
	
	</div>