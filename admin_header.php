<html>
<head>
<title><?php echo $row['name'] ?> </title>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>


<body class="admin_body">



	<header>
		<h3>Hello <?php echo $row['name'] ?> ! Welcome to Admin Panel</h3>
		<center><img src="image/admin.png"/></center>
		<center>
		<nav class="admin_nav">
		
		
			<a href="index.php">Home</a>

			<a href="admin_add_user.php">Add User</a>
			<a href="admin_users.php">Users</a>
			<!-- <a href="">Delete User</a>	-->		
			<a href="">Post</a>
			<a href="add_admin.php">Add Admin</a>
			<a href="">Send Request</a>
			<a href="admin_logout.php">Logout</a>
		
		</nav>
		<center>
		
	</header>