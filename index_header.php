
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Donors Point - A volunteery blood donation site.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css.css" type="text/css" />
  
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
		
		.navbar{
			margin-bottom:0;
			border-radius:0;
			
			
			font-size:1.2em;
			padding:1% 0;
			border:0;
			
		}
		
		
		.navbar-brand{
			
			floar:left;
			min-height:55px;
			padding:0 15px 5px;
		}
		.navbar-inverse .navbar-nav .active a,.navbar-inverse .navbar-nav .active a:focus,.navbar-inverse .navbar-nav .active a:hover{
		
			color: #fff;
			background-color: #5e4485;
		}
		
		.navbar-inverse .navbar-nav li a{
				
				color:#fff;
				background-color:#8f0100;
				border:none;
				
		}
		 
  
		
		
		
		.btn{
		
			font-size:18px;
			color:#fff;
			padding:12px 22px;
			background:#5e4485;
			border: 2px solid #fff;
		}
		
		@media(max-width:900px){	
			.fa{
				font-size:20px;
				padding:10px;
			}
		}
			

			@media(max-width:600px){	
			
			
			
			#icon{
				max-width:150px;
			}
			h2{
				font-size:1.7em;
			}
		}
		
		#icon{
			
			max-width:200px;
			margin:1% auto;
		}
		
		.container{
			margin:4% auto;
		}
		
		
		
  </style>
</head>

<body id="index_body">
	
	
	
	<nav class="navbar navbar-inverse nav_header"> <!--these are inherent classes of bootstrap -->
	
	
		<div class="container-fluid"> <!-- for creating row-->
			
			<div class="navbar.header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar"> <!--mobile version er jonno toggle option, collapse= for open & close   -->
						 
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					
					</button>
					
					<a class="navbar-brand" href="#"> <img class="header_image" src="image/logo.png"></a>
					<a class="navbar-brand" href="#"> <img class="header_text_logo" src="image/text.png"></a>
					
			</div>
			
			<div class="collapse navbar-collapse" id="MyNavbar">
			
					<ul class="nav navbar-nav navbar-right index_nav">
						
						<li> <a href="index.php" class="active" id="active">Home</a></li>
							<li><a href="inspiration.php">Inspirations</a></li>
							<li><a href="donors.php">Donors</a></li>
							
							<!--<li><a href="feedback.php">Feedback</a></li>
							<li><a href="post.php">Post</a></li>
							<a href="">List of Blood Banks</a> 
						<li><a href="request.php">Request For Blood</a></li> -->
							
							
							
							
							<?php if(isset($_SESSION['user_id']))
							{ ?>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="logout.php">Logout</a></li>
							
							<?php }
								
								else 
								{ ?>
									<li><a href="register.php">Register</a></li>
									<li><a href="login.php">Login</a></li>
								<?php
								} ?>
					
					</ul>
				
			</div>
		</div>
	</nav>



	
	</body>
</html>