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
	
	
	/*----------------------------- user info update part -------------------------- */
	$user_id=$_SESSION['user_id'];
 ?>

 

 
		<center>
		<form name="user_id_form" method="POST" action="admin_user_process.php"><!-- for entering user id -->
		
			<label>Input user id:</label>
			<input name="user_id" placeholder="user_id" type="text" />
			<input type="submit" value="UPDATE" name="submit_user_id" />
			<input type="submit" value="DELETE" name="submit_delete_user" />
		
		</form>
		
		</center>
		

		
		<div class="registration_box">
					
					<h3>Change information </h3>
					<form action="update.php" method="post">
						<div>
						
				
					<p>User Name:</p>
					<input type="text" name="name" value="<?php echo $name ;?>"><br><br>
					
					<p>Email:</p>
					<input type="text" name="email" value="<?php echo $email ; ?>"><br><br>
					
					<p>Contact:</p>
					<input type="text" name="contact" value="<?php echo $contact ;?>"><br><br>
					
					<p>Age:</p>
					<input type="text" name="age" value="<?php echo $age ; ?>"><br><br>
					
					<p>Address:</p>
					<input type="text" name="address" value="<?php echo $address ; ?>"><br><br>
					
					<p>Gender:</p>
					Male<input type="radio" name="gender" value="Male"><br><br>
					Female<input type="radio" name="gender" value="Female"><br><br>
					Other<input type="radio" name="gender" value="Other"><br><br>
					
					
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
							
							
							
							<input type="submit" value="Update" name="submit"><br><br>
						
						</div>
					
					</form>
					
					</div>
		
		 </body>
 
 </html>