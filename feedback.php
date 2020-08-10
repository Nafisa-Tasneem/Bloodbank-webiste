<?php
	
	session_start();
	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	/*$user_id=$_SESSION['user_id'];
	if(!$user_id)
	{
		
		header("Location:request.php");
		
	}
	//$query1= "SELECT name FROM requests WHERE user_id='$user_id'";
	$result= mysqli_query($connection,$query1);
	

	if(mysqli_num_rows($result))
	{

		while($row=mysqli_fetch_assoc($result))
		{
			$name=$row['name'];
		}
		
	} */
	
	
	if(isset($_POST['submit']))
	{
		$feedback=$_POST['feedback'];
		$name=$_POST['name'];
		$query= "INSERT INTO feed VALUES('','receiver','','$name','$feedback')";
		
		mysqli_query($connection,$query);		
		header("Location:post.php");
	}
	
	
	
	
	
	//$result= mysqli_query($connection,$query1);
	
	
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
					<a href="">Inspirations</a>
					<a href="donors.php">Donors</a>
					<a href="request.php">Request For Blood</a>
					<a href="feedback.php"  id="active">Feedback</a>
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
	 
		
	
	
				<p id="login_headline">Donate blood to save life</p>
		
		<div class="login_box">
			<h1 class="login_h1">Post Feedback Here</h1>
			
			<form action="feedback.php" method="post" name="feedback_form"> <!--login form ------------------------------>
				<!--<p>I am a:</p>
					Donor<input type="radio" name="type" value="donor"><br><br>
					Receiver<input type="radio" name="type" value="receiver"><br><br>
					<p>Name:</p> -->
					
					<input type="text" name="name" placeholder="Enter your name"><br><br>
					<p>Post below:</p><br>
					<textarea name="feedback" placeholder="Share your feelings!"></textarea><br><br>
				
				
				<input type="submit" value="Post" name="submit"><br>
				
			
			</form>
		
		</div>
					
					
	</body>
</html>


					