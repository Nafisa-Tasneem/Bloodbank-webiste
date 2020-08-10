<?php

	//session_start();
	//for adding profile header
		include('profile_header.php');
		
		
	$user_id= $_SESSION['user_id'];
	
	$connection= mysqli_connect('localhost','root','','blood_bank_final');
	$query= "SELECT * FROM users WHERE user_id='$user_id'";
	
	
	$result=mysqli_query($connection,$query);
	
	$row= mysqli_fetch_assoc($result);
	
	$real_password=$row['password'];
	
	
	if(isset($_POST['submit']))
	{
		$current_password=$_POST['current_password'];
		$new_password=$_POST['new_password'];
		$confirm=$_POST['confirm'];
		
		
		if($current_password==$real_password)
		{
			if($confirm==$new_password)
			{
				$update_query="UPDATE users SET password='$new_password' WHERE user_id='$user_id' ";
				mysqli_query($connection,$update_query);
				
				
			}
			else
			{
				?>
				<p style="color:red"><?php echo "Password did not match"; 
			}
		}
	}
			?>
			
			
			
						
					
					
					<form action="update_password.php" method="post">
						<div class="login_box">
							<p>Enter current password:</p>
							<input type="password" name="current_password" placeholder="current password"><br><br>
							<p>Enter new password:</p>
							<input type="password" name="new_password" placeholder=" New password "><br><br>
							
							<p>Confirm new password:</p>
							<input type="password" name="confirm" placeholder="Confirm password "><br><br>
							
							
							
							<input type="submit" value="Submit" name="submit"><br><br>
						
						</div>
					
					</form>
					
				</body>
				
			</html>
