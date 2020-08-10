<?php
	
		//for adding profile header
		include('profile_header.php');

?>



			
			<?php 
			if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$blood_group=$_POST['blood_group'];
			$amount = $_POST['amount'];
			$place=$_POST['place'];
			$contact=$_POST['contact'];
			$date=$_POST['date'];
			$message=$_POST['message'];

			
			//$connection= mysqli_connect('localhost','root','','blood_bank_final');
			$query="INSERT INTO requests VALUES ('','$name','$blood_group','$amount','$place','$contact','$date','$message')";
			mysqli_query($connection,$query);
			
			
			
			echo "<center><h1>Request submitted<h1></center>";
			$select_bg="SELECT * FROM users WHERE blood_group='$blood_group'";
			
			$row=mysqli_)
			
			
			$query1="INSERT INTO message VALUES ('','','','')";
			
			
			
		}
			?>
		
		<p id="registration_headline">Send a blood request.</p>
		
		<div class="registration_box">
			<h1 class="request_h1">Request For Blood</h1>
			
			<form action="request.php" method="post"> <!--login form ------------------------------>
				<p>Name:</p>
				<input type="text" name="name" placeholder="Name"><br>
				<p>Blood Group:</p>
				
					<select name="blood_group">
				
						<option value="A+" selected>A+</option>
						<option value="A-" selected>A-</option>
						<option value="B+" selected>B+</option>
						<option value="B-" selected>B-</option>
						<option value="AB+" selected>AB+</option>
						<option value="AB-" selected>AB-</option>
						<option value="O+" selected>O+</option>
						<option value="O-" selected>O-</option>
				
					</select><br>
				<p>Amount:</p>
				<input type="text" name="amount" placeholder="Amount in bag"><br>
				
				<p>place:</p>
				<input type="text" name="place" placeholder="Location"><br>
				<p>Contact:</p>
				<input type="text" name="contact" placeholder="Contact number"><br>
				<p>Request Date:</p>
				<input type="date" name="date" placeholder="Request Date"><br>
				
				<p>Other message:</p><br>
				<textarea name="message" placeholder="Enter additional message"></textarea><br><br>
				
				<input type="submit" value="Submit Request" name="submit"><br>
				
				<a href="register.php">Don't have an account? Create one. </a>
			</form>
		
		</div>
	</body>

</html>