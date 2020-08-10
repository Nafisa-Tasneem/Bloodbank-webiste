<?php

	//session_start();
	//for adding profile header
		include('profile_header.php');
	$user_id= $_SESSION['user_id'];
	
	$connection= mysqli_connect('localhost','root','','blood_bank_final');
	$query= "SELECT * FROM users WHERE user_id='$user_id'";
	
	
	$result=mysqli_query($connection,$query);
	
	$row= mysqli_fetch_assoc($result);
	
	
			$name = $row['name'];
			$email=$row['email'];
			$contact=$row['contact'];
			$age=$row['age'];
			$address=$row['address'];
			$gender=$row['gender'];
			$blood_group=$row['blood_group'];
	
	if(isset($_POST['submit']))
	{
		
			$name = $_POST['name'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$age=$_POST['age'];
			$address=$_POST['address'];
			$gender=$_POST['gender'];
			$blood_group=$_POST['blood_group'];
		
		
		
			
			
				$update_query="UPDATE users SET name='$name',email='$email',contact='$contact', age='$age', address='$address',gender='$gender', blood_group='$blood_group' WHERE user_id='$user_id' ";
				mysqli_query($connection,$update_query);
			
			
		
	}
	
	
			?>
			
			
			

						
					
					
					
					
					<h1>Your all information are here.</h1>
					
					
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
