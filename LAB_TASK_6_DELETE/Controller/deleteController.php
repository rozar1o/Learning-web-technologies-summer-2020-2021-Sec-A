<?php
	$title = "Delete Page";
	include('../view/header.php');
	$id = $_GET['id'];
	

						
				$status = deleteUser($id);

				if($status){
					echo "Done";
				}else{
					echo "Db error";
				}
	

?>