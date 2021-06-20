<?php
session_start();

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		

		if ($email == "") {

			echo "Null Submission";
		}
		else{
			$user = $_SESSION['user'];
			if ($email == $user['email'] ) {
				 echo "Your Current Password is : ";
				print_r($user['password']);
			}
			else{
				echo "Invaid User";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Recover Forget Password</title>
</head>
<body>
	<br/>
	<a href="login.html" style="color: red">LOG IN</a>

</body>
</html>