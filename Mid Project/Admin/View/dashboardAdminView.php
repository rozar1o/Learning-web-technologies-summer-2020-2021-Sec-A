<?php
session_start();
if(isset($_SESSION['username'])){

include("../Model/head.php")

   ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title> Dashboard_for_Admin</title>

	</head>
	<body>



        <a href="addAdminView.php"><li >Add Admin</li></a><br>
			  <a href="listOfAdminView.php"><li >List of Admin</li></a><br>
        <a href="addVolunteerView.php"><li >Add Volunteer</li></a><br>
        <a href="listOfVolunteerView.php"><li >List of Volunteer</li></a><br>
        <a href="addOrganizationView.php"><li >Add Organization</li></a><br>   
        <a href="donationAmountView.php"><li >Donation Amount</li></a><br>
        <a href="changePasswordView.php"><li >Change Password</li></a><br>
         <a href="logout.php"><li>Logout</li></a><br>



	</body>
</html>
<?php
include("../Model/foot.php");
 }
else {
  header('Location: indexAdmin.php');
} ?>
