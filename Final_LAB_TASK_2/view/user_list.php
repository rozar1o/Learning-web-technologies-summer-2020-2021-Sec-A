<?php
	
	$title = "User List Page";
	include('header.php');
	require_once('../model/userModel.php');
	$users = getAllUser();

	//print_r($users);

?>

	<div id="page_title">
		<h1>User List Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
	
		<table border="1">
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			
			<?php for($i=0; $i < count($users); $i++){ ?>
			<tr>
				<td><?=$users[$i]['id']?></td>
				<td><?=$users[$i]['username']?></td>
				<td><?=$users[$i]['email']?></td>
				<td>

					<a href="edit.php?id=<?= $users[$i]['id']?>&username=<?= $users[$i]['username']?>&email=<?= $users[$i]['email']?>&password=<?= $users[$i]['password']?>"> EDIT </a> |
					<a href="deleteConfirmation.php?id=<?= $users[$i]['id']?>"> DELETE </a> 
				</td>
			</tr>

			<?php } ?>
		</table>
			
	</div>

<?php include('footer.php') ?>