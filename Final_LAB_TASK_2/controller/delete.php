<?php
	$title = "Delete Page";
	include('../view/header.php');
	require_once('../model/userModel.php');
	$id = $_GET['id'];
	

						
				$status = deleteUser($id);

				if($status){
					header('location: ../view/login.php');
				}else{
					echo "Db error";
				}
	

?>