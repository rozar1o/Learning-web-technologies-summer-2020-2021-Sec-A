<?php

	if(isset($_POST['submit'])){

		$email = $_POST['myname'];
		
		if($email == "" ){
			echo "null submission";
		}else{
			echo $email."<br>";

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Submission</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			 <input type="text" name="myname" value=""> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>