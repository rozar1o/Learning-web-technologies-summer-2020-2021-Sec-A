<?php

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:indexVolunteer.php");

}

else{
	header("location:indexVolunteer.php");
}

 ?>
