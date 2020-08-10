<?php
		
		session_start();
		
		$error = 0;
		
		if(isset($_POST['submit']))
		{
		  $email=$_POST['email'];
		  $password=$_POST['password'];
		
		
		$connection= mysqli_connect('localhost','root','','blood_bank_final');
		$query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
		
		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result))
		{
			$row=mysqli_fetch_assoc($result);
			
			$_SESSION['admin_id']=$row['admin_id'];
			
			header("Location:/bloodbank/admin.php"); //for redirecting
		}else {
			
			$error = 1;
		}
		}
		?>



<!DOCTYPE html>

<html>
	<head>
	
		<title>Admin Login</title>
		<link rel="stylesheet" href="css.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
</head>


	
	<body class="admin_body">
	
		
			<header>
				
			<h3> Login For Admin Panel</h3>
			<center><img src="image/admin.png"/></center>
			</header>
		
		
		
		<div class="login_box">
			<h1 class="login_h1">Login here</h1>
			
			<form action="admin_login.php" method="post" name="admin_form"> <!--login form ------------------------------>
				
				<?php
				
					if ($error == 1){
					
						?>
						<div style="color:red;text-align:center">
							Invalid Email or Password 
						</div>
						
						<?php
					}
				
				?>
			
				<p>Email:</p>
				<input type="text" name="email" placeholder="abc@gmail.com" autocomplete="off" id='txtEmail'/><br><br>
				<p>Password:</p>
				<input type="password" name="password" autocomplete="off" placeholder="password "/><br><br>
				<input type="submit" value="Login" name="submit"/><br><br>
				
				
			</form>
		
		</div>
	</body>

</html>