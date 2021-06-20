<?php
	session_start();
	$user = $_SESSION['user'];
	$name = $user['name'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form method="" action="">
					<table border="1" width="100%">
						<tr height="100px">
							
						 	<td colspan="2">
						 		<img src="pic.PNG">
								<span style="float: right;"> Logged in as <?php echo $name ?> | <a href="publicHome.html" style="color: blue">Logout</a> </span>
							</td>

						</tr>
						<tr height="200px">
							<td >
								 <b>Account</b> 
								<hr width="80%" align="left">
								<p>
									
									*<a href="">Dashboard</a><br/>
									*<a href="viewProfile.php">View Profile</a><br/>
									*<a href="editProfile.php">Edit Profile</a><br/>
									*<a href="">Change Profile Picture</a><br/>
									*<a href="">Change Password</a><br/>
									*<a href="">Logout</a>
								</p>

							</td>
							<td>
								<h3 align="center"><b>Welcome <?php echo $name ?> </b></h3>
							</td>
							
						</tr>
						<tr>
							<td colspan="2">
								<p align="center">Copyright © 2017</p> 
							</td>
						</tr>

						
					</table>
				
	</form>
	
</body>
</html>