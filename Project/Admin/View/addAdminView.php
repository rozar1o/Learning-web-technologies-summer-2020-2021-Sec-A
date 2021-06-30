<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php

include("../Model/head.php");
?>


<p><span class="error">* required field</span></p>
<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/addAdminController.php">
  Name: <input type="text" name="name" value="">
  <span class="error">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br><br>
   E-mail: <input type="text" name="email" value="">
  <span class="error">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br><br>
  User Name: <input type="text" name="username" value="">
  <span class="error">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
  <br><br>
  Password: <input type="text" name="password" value="">
  <span class="error">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
  <br><br>

  Comfirm Password: <input type="text" name="confirmpassword" value="">
  <span class="error">* <?php if(!empty($_GET['confirmpasswordErr'])){echo $_GET['confirmpasswordErr'];} ?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];} ?></span>
  <br><br>





  <input type="submit" name="submit" value="Submit">
</form>


<?php
include("../Model/foot.php");
 ?>



</body>
</html>
