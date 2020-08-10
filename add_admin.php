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
			$password=$_POST['password'];
			
			
			$connection= mysqli_connect('localhost','root','','blood_bank_final');
			$query="INSERT INTO admin VALUES ('','$name','$email','$contact','$password')";
			mysqli_query($connection,$query);
			
	/*------------------------- user add portion ends ------------------------- */
			
		
		}
	
	?>
	
	<!-- add admin portion -->
		<div class="registration_box">
				<h1 class="registration_h1">Add Admin</h1>
				
				<form action="add_admin.php" method="post"> 
				<!--login form ---------------------------- -->
				
					<p>Name of Admin:</p>
					<input type="text" name="name" placeholder="Admin name"/><br><br>
					
					<p>Email:</p>
					<input type="text" name="email" placeholder="email"/><br><br>
					
					<p>Contact:</p>
					<input type="text" name="contact" placeholder="Contact"/><br><br>
					
					<p>Password:</p>
					<input type="password" name="password" placeholder="password"/><br><br>
					
					<input type="submit" value="Add Admin" name="submit"/><br><br>
					
					
				</form>
			
			</div>
 
 
 </body>
</html>