<?php
 include("../Model/head.php");


session_start();


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>


 <form  class="loginbox"  method="POST" action="../Controller/updateVolunteerController.php" enctype="multipart/form-data">
 <br><br><br>
  <label for="name">Name:</label><br><br>
  <input value="<?php if(!empty($_SESSION['name'])) {echo $_SESSION['name']; }?>" type="text" id="name" name="name" ><br><br>
  <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span> <br><br>
  <label for="email">Email:</label><br><br>
  <input value="<?php if(!empty($_SESSION['email'])) {echo $_SESSION['email']; } ?>" type="text" id="email" name="email" ><br><br>
  <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br><br><br>

  <input type="submit" name = "updateStudent" value="Update">
</form>

</body>
</html>

<?php include("../Model/foot.php");

?>
