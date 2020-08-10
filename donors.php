<?php
	
 session_start();



	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	$query= "SELECT * FROM users";
	
	$result= mysqli_query($connection,$query);
	
	?> 

<!DOCTYPE html>

<html>
	
	<head>
	
		<title>Donors</title>
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
		
		<div class="search_box1">
			<!--<h1 class="login_h1">Find Donors of Your Blood Group</h1> -->
				<form action="donors_bg_process.php" method="POST">
				
				<!--<p>Blood Group:</p><br> -->
					<center>
					<select class="search_select" name="blood_group">
				
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
					</center>
				</form>
				
		</div>
	 
		<h1 class="index_h1">All the listed Donors:</h1>
		
		<center>
		<table border="1" cellspacing="0" cellpadding="10px">
			<tr>
				<th style="width:300px">Name</th>
				<th style="width:90px">Blood Group</th>
				<th style="width:400px">Email</th>
				<th style="width:300px">Address</th>
		
			</tr>
		
<?php 

	while($row=mysqli_fetch_assoc($result))
	{
		
	?>
	
	
	
	<tr>
		<td style="width:300px"><?php echo  $row['name'] ;?></td>
		<td style="width:90px"><?php echo $row['blood_group'];?></td>
		<td style="width:400px"><?php echo $row['email'];?></td>
		<td style="width:300px"><?php echo $row['address'];?></td>
	</tr>
	
	<?php }?>
	</table>
	</center>


	
	</body>


</html>