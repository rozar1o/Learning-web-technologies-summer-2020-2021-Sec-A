<?php
session_start();

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "" || $password == "") {

			echo "Null Submission";
		}
		else{
			$user = $_SESSION['user'];
			if ($username == $user['username'] && $password == $user['password']) {
				header('location: dashboard.php');
				
			}
			else{
				echo "Invaid User";
			}
		}
	}

?>