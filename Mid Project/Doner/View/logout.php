<?php

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:indexDonor.php");

}

else{
	header("location:indexDonor.php");
}

 ?>
