<?php

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:indexOrganization.php");

}

else{
	header("location:indexOrganization.php");
}

 ?>
