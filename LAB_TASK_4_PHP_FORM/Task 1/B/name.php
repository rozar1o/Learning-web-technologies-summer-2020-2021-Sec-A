<?php

	if(isset($_POST['submit'])){

		$name = $_POST['myname'];
		
		if($name == "" ){
			echo "null submission.";
		}else{
			echo $name."<br>";

		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Submission</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="myname" value=""> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>