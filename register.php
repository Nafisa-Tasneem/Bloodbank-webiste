


<?php
		
		
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
			
			header("Location:profile.php");
		}

?>

<html>
	<head>
	
		<title>Registration</title>
		<link rel="stylesheet" href="css.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		


	
	</head>
	
	<body id="registration_body">
	
		
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
					<a href="register.php"  id="active">Register</a>
					<a href="login.php">Login</a>
				
				</nav>
				</center>
			
			</header>
		
		
		<p id="registration_headline">Donate blood to save life</p>
		
			<div class="registration_box">
				<h1 class="registration_h1">Registration form</h1>
				
				<form action="register.php" method="post" name="registration_form""> 
				<!--login form ------------------------------>
				
					<p>User Name:</p>
					<input type="text" name="name" placeholder="User name" autocomplete="off" required />
					
					<div id="name-error" class="error error-hide">
					<i>error:</i>
					<span>Invalid username</span>
					</div>

					
					<br><br>
					
					<p>Email:</p>
					<input type="email" name="email" placeholder="email" autocomplete="off" required />
					
					<div id="email-error" class="error error-hide">
					<i>error:</i>
					<span>Invalid Email Address</span>
					</div>

					
					
					<p>Contact:</p>
					<input type="text" name="contact" placeholder="Contact" autocomplete="off" required>
					
					<div id="contact-error" class="error error-hide">
					<i>error:</i>
					<span>Invalid phone number. </span>
					</div>
					<br><br>
					
					<p>Age:</p>
					<input type="number" name="age" placeholder="Age" autocomplete="off" required />
					<div id="contact-error" class="error error-hide">
					<i>error:</i>
					<span>Invalid age. </span>
					</div>
					<br><br>
					
					<p>Address:</p>
					<input type="text" name="address" placeholder="Address" autocomplete="off"/><br><br>
					
					<p>Gender:</p><br>
					<input type="radio" name="gender" value="Male"/>Male<br>
					<input type="radio" name="gender" value="Female"/>Female<br>
					<input type="radio" name="gender" value="Other"/>Other<br>
					
					
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
					<input type="password" name="password" placeholder="password" autocomplete="off" required /><br><br>
					
					<center>
					<button type="submit" value="Register" id="signup-btn" name="submit">Register</button><br><br>
					</center>
					
				</form>
			
			</div>
		
	<!-- ----------------- Regex Validation ------------------- -->
	<script type="text/javascript">
		
		$(function() {

			var regex = {
				name:  /^[a-z ,.'-]+$/i,
				email: /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/,
				age :/^[1-9][0-9]?$|^120$/,
				contact: /^[0-9]{7,15}$/,
			};

			var emailError = 0;
			var nameError = 0;
			var contactError=0;
			var ageError=0;
			


			$.each($('form input:not([type="submit"])'), function() {

				$(this).on('keyup', function(){
					
//-- ----------- If does not match with regex -------------
					if(!regex[$(this).attr('name')].test($(this).val())){
						
						if ($(this).val() != "") {  //------------if not empty -----------------

							if ($(this).attr('name') == "name") {
								$('#name-error').removeClass('error-hide');
								$('#name-error').addClass('error-show');
								nameError = 1;
							} else if ($(this).attr('name') == "email") {
								$('#email-error').removeClass('error-hide');
								$('#email-error').addClass('error-show');
								emailError = 1;
							}
							
							else if ($(this).attr('name') == "contact") {
								$('#contact-error').removeClass('error-hide');
								$('#contact-error').addClass('error-show');
								contactError = 1;
							}
							
							else if ($(this).attr('name') == "age") {
								$('#age-error').removeClass('error-hide');
								$('#age-error').addClass('error-show');
								ageError = 1;
							}

						
						}
						//------------if empty -----------------

						else {
							if ($(this).attr('name') == "name") {
								$('#name-error').addClass('error-hide');
								$('#name-error').removeClass('error-show');
								nameError = 0;
							} else if ($(this).attr('name') == "email") {
								$('#email-error').addClass('error-hide');
								$('#email-error').removeClass('error-show');
								emailError = 0;
							}
							
							
							else if ($(this).attr('name') == "contact") {
								$('#contact-error').addClass('error-hide');
								$('#contact-error').removeClass('error-show');
								contactError = 0;
							}
							
							else if ($(this).attr('name') == "age") {
								$('#age-error').addClass('error-hide');
								$('#age-error').removeClass('error-show');
								ageError = 0;
							}
							
							

						}


// ------------------- Disabling Submit Button to avoid wrong submission ------------------

						if (emailError == 0 && nameError == 0 && contactError == 0 && ageError==0) {
							$('#signup-btn').removeAttr('disabled');
						} else {
							$('#signup-btn').attr('disabled', 'disabled');
						}
// ------------------- Disabling Submit Button to avoid wrong submission ------------------



					} else {
						if ($(this).attr('name') == "name") {
							$('#name-error').addClass('error-hide');
							$('#name-error').removeClass('error-show');
							nameError = 0;


// ------------------- Disabling Submit Button to avoid wrong submission ------------------
							if (emailError == 0 && nameError == 0 && contactError == 0 && ageError == 0) {
								$('#signup-btn').removeAttr('disabled');
							} else {
								$('#signup-btn').attr('disabled', 'disabled');
							}
// ------------------- Disabling Submit Button to avoid wrong submission ------------------							

						} else if ($(this).attr('name') == "email") {
							$('#email-error').addClass('error-hide');
							$('#email-error').removeClass('error-show');
							emailError = 0;
							if (emailError == 0 && nameError == 0 && contactError == 0 && ageError == 0) {
									$('#signup-btn').removeAttr('disabled');
								} else {
									$('#signup-btn').attr('disabled', 'disabled');
								}

						}
						
						else if ($(this).attr('name') == "contact") {
							$('#contact-error').addClass('error-hide');
							$('#contact-error').removeClass('error-show');
							contactError = 0;
							if (emailError == 0 && nameError == 0 && contactError == 0 && ageError == 0) {
									$('#signup-btn').removeAttr('disabled');
								} else {
									$('#signup-btn').attr('disabled', 'disabled');
								}

						}
						
						else if ($(this).attr('name') == "age") {
							$('#age-error').addClass('error-hide');
							$('#age-error').removeClass('error-show');
							ageError = 0;
							if (emailError == 0 && nameError == 0 && contactError == 0 && ageError == 0) {
									$('#signup-btn').removeAttr('disabled');
								} else {
									$('#signup-btn').attr('disabled', 'disabled');
								}

						}
					}

					
									
				});
				
			});
			
			
		
		});

	</script>
	
	</body>

</html>