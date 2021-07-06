<?php 
	$id = $_GET['id'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Confirmation</title>
</head>
<body>
	<h1 align="center">
		Are you sure you want to Delete this User?	
	</h1>
	<h2 align="center"><a href="../controller/delete.php?id=<?= $id?>" style="color: red" >Yes</a> /
		<a href="user_list.php" style="color: green">No</a>
	</h2>
</body>
</html>