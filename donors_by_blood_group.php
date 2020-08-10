<?php

	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	
	if(isset($_POST['submit']))
	{
		$blood_group=$_POST['blood_group'];
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
					<a href="">Inspirations</a>
					<a href="donors.php" id="active">Donors</a>
					<a href="request.php">Request For Blood</a>
					<a href="feedback.php">Feedback</a>
					<a href="post.php">Post</a>
				<!--	<a href="">List of Blood Banks</a> -->
					<a href="register.php">Register</a>
					<a href="login.php">Login</a>
				
				</nav>
				</center>
			
			</header>
	 
		<h1 class="index_h1">All Donors of <?php echo $blood_group ; ?> Blood Group:</h1>
		
		<!-- form for finding donors of specific blood group -->
		
		<div class="registration_box">
			<h1 class="login_h1">Find Donors of Your Blood Group</h1>
				<form action="donors_by_blood_group.php" method="POST">
				
				<p>Blood Group:</p><br>
					
					<select name="blood_group">
				
						<option value="A+" selected>A+</option>
						<option value="A-" selected>A-</option>
						<option value="B+" selected>B+</option>
						<option value="B-" selected>B-</option>
						<option value="AB+" selected>AB+</option>
						<option value="AB-" selected>AB-</option>
						<option value="O+" selected>O+</option>
						<option value="O-" selected>O-</option>
				
					</select><br><br>
					
					<input type="submit" value="Find" name="submit"><br><br>
				</form>
		</div>
		
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
	
	<?php 
			}
		}
	?>
	</table>
	</center>


	
	</body>


</html>