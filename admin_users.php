<?php


	session_start();
	$admin_id=$_SESSION['admin_id'];
	
	if(!$admin_id)
	{
		
		header("Location:admin_login.php");
		echo "Your session has been expired.";
		
	}
	
	
	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	
	$query= "SELECT * FROM admin WHERE admin_id='$admin_id'";
	
	$result=mysqli_query($connection,$query);
	
	$row=mysqli_fetch_assoc($result);
	include 'admin_header.php';
	
	
	/*----------------------------- user info part -------------------------- */
	
	
	$connection=mysqli_connect('localhost','root','','blood_bank_final');
	$query1= "SELECT * FROM users";
	
	$result= mysqli_query($connection,$query1);
 ?>

 

 
		<center>
		<form name="user_id_form" method="POST" action="admin_user_process.php"><!-- for entering user id -->
		
			<label>Input user id to update:</label>
			<input name="user_id" placeholder="user_id" type="text" />
			<input type="submit" value="UPDATE" name="update_user" />
			
		
		</form>
		
		<form name="user_id_form" method="POST" action="admin_user_delete.php"><!-- for entering user id -->
		
			<label>Input user id to delete:</label>
			<input name="user_id" placeholder="user_id" type="text" />
			
			<input type="submit" value="DELETE" name="delete_user" />
		
		</form>
		
		</center>
		

		
		<h1 class="index_h1">All the listed Donors:</h1>
		
		<center>
		<table border="1" cellspacing="0" cellpadding="5px">
			<tr>
				<th style="width:30px">User Id</th>
				<th style="width:250px">Name</th>
				<th style="width:200px">Email</th>
				<th style="width:30px">Contact</th>
				<th style="width:30px">Gender</th>
				<th style="width:30px">Age</th>
				<th style="width:30px">Blood Group</th>				
				<th style="width:200px">Address</th>
		
			</tr>
			
			<?php 

	while($row=mysqli_fetch_assoc($result))
	{
		
	?>
	
	
	
	<tr>
		<td style="width:30px"><?php echo  $row['user_id'] ;?></td>
		<td style="width:250px"><?php echo  $row['name'] ;?></td>
		<td style="width:200px"><?php echo  $row['email'] ;?></td>
		<td style="width:30px"><?php echo  $row['contact'] ;?></td>
		<td style="width:30px"><?php echo  $row['gender'] ;?></td>
		<td style="width:30px"><?php echo $row['age'];?></td>
		<td style="width:30px"><?php echo $row['blood_group'];?></td>
		
		<td style="width:200px"><?php echo $row['address'];?></td>
	</tr>
	
	<?php }?>
	</table>
	</center>

		
		 </body>
 
 </html>