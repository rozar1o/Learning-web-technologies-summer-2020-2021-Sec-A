<?php
session_start();
if(isset($_SESSION['username'])){

include("../Model/head.php")

   ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title> Dashboard_for_Donor</title>

	</head>
	<body>



        <a href="updateDonor.php"><li >Update Profile</li></a><br>

        <a href="donationHistory.php"><li >Donation History</li></a><br>

        <a href="totalDonationAmount.php"><li >Total Donation Amount</li></a><br>

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
  header('Location: indexDonor.php');
} ?>
