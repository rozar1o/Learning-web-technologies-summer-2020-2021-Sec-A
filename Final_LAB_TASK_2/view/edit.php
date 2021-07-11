<?php
	
	$title = "Edit Page";
	include('header.php');
	
	$id = $_GET['id'];
	$username = $_GET['username'];
	$email = $_GET['email'];
	$password = $_GET['password'];	
	
	



?>

	<div id="page_title">
		<h1>Edit User Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="user_list.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<form method="post" action="../controller/update.php">
			<fieldset>
				<legend>Edit User</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php print_r($username)?> "></td>
					</tr>
					
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php print_r($email)?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" value="<?php print_r($password) ?>"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value="<?php print_r($id) ?>" ></td>
						<td>
							<input type="submit" name="submit" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

<?php include('footer.php') ?>