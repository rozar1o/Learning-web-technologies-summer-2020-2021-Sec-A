<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<form method="post" action="../controller/loginCheck.php"> 
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Submit">
						<a href="reg.php"> Sign Up</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>