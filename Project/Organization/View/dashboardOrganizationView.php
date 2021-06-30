<?php
session_start();
if(isset($_SESSION['username'])){

include("../Model/head.php")

   ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title> Dashboard_for_Organization</title>

	</head>
	<body>



        <a href="updateOrganization.php"><li >Update Profile</li></a><br>

        <a href="donationRequestList.php"><li >Donation Request List</li></a><br>

        <a href="totalRequestAmount.php"><li >Total Request Amount</li></a><br>

        <a href="employeeInformation.php"><li >Employee Information</li></a><br>
          <a href="changePictureView.php"><li >Change Profile Picture</li></a><br>

        <a href="changePasswordView.php"><li >Change Password</li></a><br>

         <a href="logout.php"><li>Logout</li></a><br>



	</body>
</html>
<?php
include("../Model/foot.php");
 }
else {
  header('Location: indexOrganization.php');
} ?>
