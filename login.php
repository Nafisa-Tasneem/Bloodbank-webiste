<?php
		
		session_start();
		
		$error = 0;
		
		if(isset($_POST['submit']))
		{
		  $email=$_POST['email'];
		  $password=$_POST['password'];
		
		
		$connection= mysqli_connect('localhost','root','','blood_bank_final');
		$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
		
		$result=mysqli_query($connection,$query);
		
		if(mysqli_num_rows($result))
		{
			$row=mysqli_fetch_assoc($result);
			
			$_SESSION['user_id']=$row['user_id'];
			
			header("Location:/bloodbank/profile.php"); //for redirecting
		}else {
			
			$error = 1;
		}
		}
		?>



<!DOCTYPE html>

<html>
	<head>
	
		<title>Login</title>
		<link rel="stylesheet" href="css.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script type="text/javascript">
		
		

		function validateForm()
		{
		var x=document.forms["login_form"]["email"].value;
		if (x==null || x=="")
		{
		alert("name must be filled out");
		return false;
		}
		}



function checkEmail() { 
var email = document.forms["login_form"]["email"].value;
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
if (!filter.test(email.value))
 { alert('Please provide a valid email address'); 
email.focus; 
return false; 
} 
}

</script>
</head>


	
	<body id="login_body">
	
		
			<header class="nav_header">
				<center>
				<nav class="index_nav"><!-- navigation bar contents---------------->
				
					<a href="index.php">Home</a>
					<a href="inspiration.php">Inspirations</a>
					<a href="donors.php">Donors</a>
					<a href="request.php">Request For Blood</a>
					<a href="feedback.php">Feedback</a>
					<a href="post.php">Post</a>
					<!--	<a href="">List of Blood Banks</a> -->
					<a href="register.php">Register</a>
					<a href="login.php"  id="active">Login</a>
				
				</nav>
				</center>
			
			</header>
		
		<p id="login_headline">Donate blood to save life</p>
		
		<div class="login_box">
			<h1 class="login_h1">Login here</h1>
			
			<form action="login.php" method="post" name="login_form"> <!--login form ------------------------------>
				
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
				<input type="text" name="email" placeholder="abc@gmail.com" autocomplete="off" id='txtEmail'><br><br>
				<p>Password:</p>
				<input type="password" name="password" autocomplete="off" placeholder="password "><br><br>
				<input type="submit" value="Login" name="submit"><br><br>
				
				<a href="register.php">Don't have an account? Create one. </a>
			</form>
		
		</div>
	</body>

</html>