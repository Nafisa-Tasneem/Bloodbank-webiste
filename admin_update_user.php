<?php 
		session_start();
		$connection= mysqli_connect('localhost','root','','blood_bank_final');
			$user_id=$_SESSION['user_id'];
			$name = $_POST['name'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$age=$_POST['age'];
			$address=$_POST['address'];
			$gender=$_POST['gender'];
			$blood_group=$_POST['blood_group'];

			
				$update_query="UPDATE users SET name='$name',email='$email',contact='$contact', age='$age', address='$address',gender='$gender', blood_group='$blood_group' WHERE user_id='$user_id' ";
			
						if (mysqli_query($connection, $update_query)) {
				echo "<h1><center>Record updated successfully</center></h1>";
			} else
				{
				echo "Error: " . $sql . "<br>" . mysqli_error($connection);
				}
		
		
		?>
		
		
		