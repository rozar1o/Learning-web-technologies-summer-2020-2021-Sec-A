<?php

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:indexAdmin.php");

}

else{
	header("location:indexAdmin.php");
}

 ?>
