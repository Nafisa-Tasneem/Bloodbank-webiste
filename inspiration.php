<?php 
 session_start();

?>

<!DOCTYPE html>

	<html>
	
	<head>
	
		<title>Inspiration</title>
		<link rel="stylesheet" href="css.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
	</head>
	
	
	<body >
	 
		<!-- Contents of navigation bar ---------------------------------- -->
		
			<header class="nav_header">
				<center>
				<nav class="index_nav">
				
					<a href="index.php">Home</a>
					<a href="inspiration.php" id="active">Inspirations</a>
					<a href="donors.php">Donors</a>
					<a href="request.php">Request For Blood</a>
					<a href="feedback.php">Feedback</a>
					<a href="post.php">Post</a>
				<!--	<a href="">List of Blood Banks</a> -->
					<?php if(isset($_SESSION['user_id']))
					{ ?>
					<a href="profile.php">Profile</a>
					<a href="logout.php">Logout</a>
					
					<?php }
						
						else 
						{ ?>
							<a href="register.php">Register</a>
							<a href="login.php">Login</a>
						<?php
						} ?>
				
				</nav>
				</center>
			
			</header>
			
			
			<!-- div containing elements ------------------- -->
			
			
			<div id="inspiration_box">
			
				<h4>Eligibilities</h4>
				<p>
					<ul>
						<li>Any donor, who is healthy, fit and not suffering from any transmittable diseases can donate blood.</li>
						<li>Donor must be 18 -60 years age and having a minimum weight of 50Kg can donate blood.
 
						</li>
						<li>Donor’s Hemoglobin level is 12.5% minimum.
						</li>
						<li>A donor can again donate blood after 3 months of your last donation of blood.
						</li>
						<li>Pulse rate must be between 50 to 100mm without any irregularities.
						</li>
						<li>BP Diastolic 50 to 100 mm Hg and Systolic 100 to 180 mm Hg.
						</li>
						<li>Body temperature should be normal and oral temperature should not exceed 37.5 degree Celsius.</li>
					
					</ul>
				</p>
				
				<h4>Non-Eligibilities</h4>
				<p>
			

					<ul>
						<li>Donors should not suffer from Cardiac arrest, hypertension, kidney alignments, epilepsy or diabetics.</li>
						<li>Ladies with a bad miscarriage should avoid donating blood for the next 6 months.</li>
						<li>If donor already donated blood or have been treated for malaria within the last three months.</li>
						<li>If donor undergone any immunization within the past one month.</li>
						<li> If donor consumed alcohol within the last 24 hours.</li>
						<li>If you are HIV+.</li>
						<li>If donor had a dental work for next 24 hours and wait for one month if donor had a major dental procedure.</li>
					
					</ul>
				
				</p>
				
 
 


				<h4>Preparation</h4>
				<p>
					<ul>
						<li>Prepare yourself by having enough fruit juice and water in the night and morning before you donate    blood.</li>
						<li>Avoid donating blood in empty stomach. Eat three hours before you donate blood. Avoid fatty foods. Eat    food which is rich in iron such as whole grains, eggs, and beef, and spinach, leafy vegetables, orange and    citrus.</li>
						<li> Don’t consume Alcohol or caffeine beverages before donating blood.</li>
						<li> Avoid donating blood for 6 months if you had any major surgery.</li>
						
					
					</ul>
				
				</p>
			
				
				<h4>Post Donation Care</h4>
				<p>
					<ul>
						<li>Have some rest 5 to 20 minutes after donation. Do not drive after donation of blood.</li>
						<li>Have some snacks and juice with high sugar content which will help to rejuvenate the blood sugar back    up.</li>
						<li>Have a good meal with high protein content such as Chicken, Beef etc,.</li>
						<li>Do not consume Alcohol for 8 hours after donation of blood.</li>
						<li>Avoid going for a heavy body works such as gym, dancing, running etc at least for next one day.</li>
						
					
					</ul>
				</p>

				<h4>How to Relieve</h4>
				<p>				
				While you are being needled to take blood, relax to the maximum, have a deep breath. There will be little pain or no pain. Try to distract yourself from the process by having a chewing gum. Listen to some music or watch some entertaining TV program.
				</p>
				
			
			</div>
			
		
			
	</body>
</html>