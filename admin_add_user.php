<?php


	session_start();
	$admin_id=$_SESSION['admin_id'];
	
	if(!$admin_id)
	{
		
		header("Location:admin_login.php");
		echo "Your session has been expired.";
		
	}
	
	
	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	
	$query= "SELECT * FROM admin WHERE admin_id='$admin_id'";
	
	$result=mysqli_query($connection,$query);
	
	$row=mysqli_fetch_assoc($result);
	include 'admin_header.php';
	
	
	/*--------------------- user add portion --------------------- */
	
		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$age=$_POST['age'];
			$address=$_POST['address'];
			$gender=$_POST['gender'];
			$blood_group=$_POST['blood_group'];
			$password=$_POST['password'];
			
			
			$connection= mysqli_connect('localhost','root','','blood_bank_final');
			$query="INSERT INTO users VALUES ('','$name','$email','$contact','$age','$address','$gender','$blood_group','$password')";
			mysqli_query($connection,$query);
			
	/*------------------------- user add portion ends ------------------------- */
			
		
		}
 ?>
		
		
		<!-- add user portion -->
		<div class="registration_box">
				<h1 class="registration_h1">User add form</h1>
				
				<form action="register.php" method="post" name="registration_form""> 
				<!--login form ---------------------------- -->
				
					<p>User Name:</p>
					<input type="text" name="name" placeholder="User name"/><br><br>
					
					<p>Email:</p>
					<input type="text" name="email" placeholder="email"/><br><br>
					
					<p>Contact:</p>
					<input type="text" name="contact" placeholder="Contact"/><br><br>
					
					<p>Age:</p>
					<input type="text" name="age" placeholder="Age"/><br><br>
					
					<p>Address:</p>
					<input type="text" name="address" placeholder="Address"/><br><br>
					
					<p>Gender:</p>
					<input type="radio" name="gender" value="Male"/>Male<br><br>
					<input type="radio" name="gender" value="Female"/>Female<br><br>
					<input type="radio" name="gender" value="Other"/>Other<br><br>
					
					
					<p>Blood Group:</p><br>
					
					<select name="blood_group">
				
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
				
					</select><br><br>
					
					<p>Password:</p>
					<input type="password" name="password" placeholder="password"/><br><br>
					
					<input type="submit" value="Add user" name="submit"/><br><br>
					
					
				</form>
			
			</div>
 
 
 </body>
</html>