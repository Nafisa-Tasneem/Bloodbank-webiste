<?php

session_start();
	
		
		$user_id=$_SESSION['user_id'];
		$connection=mysqli_connect('localhost','root','','blood_bank_final');
		$query1= "SELECT blood_group FROM users WHERE user_id='$user_id'";
		$result= mysqli_query($connection,$query1);
		
	

		if(mysqli_num_rows($result))
		{

			while($row=mysqli_fetch_assoc($result))
			{
				$blood_group=$row['blood_group'];
			}
			
		}
		
		
		
			if(isset($_POST['submit']))
		{
			
		
			$amount=$_POST['amount'];
			$date=$_POST['date'];
			$receiver=$_POST['receiver'];
			
			$connection= mysqli_connect('localhost','root','','blood_bank_final');
			$query="INSERT INTO donation VALUES ('','$user_id','$blood_group','$amount','$date','$receiver')";
			mysqli_query($connection,$query);
			echo "Donation added.";
				
			}

?>





<html>
	
		<head>
			<title><?php echo $row['name'] ?> </title>
			<link rel="stylesheet" href="css.css" type="text/css" />
		</head>
		
		<body id="profile_body">
			<header class="profile_header">
				
				<nav class="profile_nav"><!-- navigation bar contents---------------->
				
					<a href="index.php">Home</a>
					<a href="profile.php">Profile</a>
					<!--<a href="request.php">Request For Blood</a> -->
					<a href="feedback_donor.php">Feedback</a>
					<a href="donation.php">Add donation</a>
					<a href="update_password.php">Change Password</a>
					<a href="update.php">Update Profile</a>
					<a href="">Show Request</a>
					<a href="logout.php">Logout</a>
				
				</nav>
				
			</header>
			<br><br>
			
			<div class="request_box">
			<h1 class="request_h1">Add Donation</h1>
			
			<form method="POST" action="donation.php"> <!--Donation form ------------------------------>
				<!--<div style="color:green ;text-align:center">
				          </div>
				<p>Blood Group:</p>
				<input type="text" name="blood_group" placeholder="Donated blood Group(in X+ format)"><br> -->
				<p>Amount:</p>
				<input type="text" name="amount" placeholder="Amount of blood"><br>
				<p>Donation Date:</p>
				<input type="date" name="date" placeholder="Request Date"><br>
				<p>Donated to:</p>
				<input type="text" name="receiver" placeholder="Donated to"><br>
				
				
				<input type="submit" value="Add donation" name="submit"><br>
				
				
			</form>
		
		</div>
			
		</body>
		
</html>
			