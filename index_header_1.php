
<!DOCTYPE html>

<html>
	
	<head>
	
		<title>Blood bank</title>
		<link rel="stylesheet" href="css.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	
	</head>
	
	
	<body id="index_body">
	 
		<!-- Contents of navigation bar ---------------------------------- -->
		
			<header class="nav_header">
			
			
			<!-- <div class="banner">
			
			<img src="image/logo.png"></img>
			
			
			</div> -->
				<center>
				<nav class="index_nav">
				
					<a href="index.php" id="active">Home</a>
					<a href="inspiration.php">Inspirations</a>
					<a href="donors.php">Donors</a>
				<!--	<a href="request.php">Request For Blood</a> -->
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