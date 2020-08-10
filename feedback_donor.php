<?php
	
	//session_start();
	
	//for adding profile header
		include('profile_header.php');
	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	$user_id=$_SESSION['user_id'];
	if(!$user_id)
	{
		
		header("Location:login.php");
		
	}
	$query1= "SELECT name FROM users WHERE user_id='$user_id'";
	$result= mysqli_query($connection,$query1);
	

	if(mysqli_num_rows($result))
	{

		while($row=mysqli_fetch_assoc($result))
		{
			$name=$row['name'];
		}
		
	}
	
	
	if(isset($_POST['submit']))
	{
		$feedback=$_POST['feedback'];
		$query= "INSERT INTO feed VALUES('','donor','$user_id','$name','$feedback')";
		
		mysqli_query($connection,$query);		
		
	}
	
	
	
	$result= mysqli_query($connection,$query1);
	
	
 ?>


			<br><br>
			<p id="registration_headline">Share your Experience with others!! Send a feedback about this page or about donation.</p>
			
			
			<div class="request_box">
			<h1 class="request_h1">Feedback</h1>
			
			<form action="feedback_donor.php" method="POST"> <!--feedback form ------------------------------>
					
				
				<p>Post below:</p><br>
					<textarea name="feedback" placeholder="Share your feelings!"></textarea><br><br>
				
				
				<input type="submit" value="Post" name="submit"><br>
				
				
			</form>
		
		</div>
			
		</body>
		
</html>
			