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
<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/addOrganizationController.php">
  Name: <input type="text" name="name" value="">
  <span class="error">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br><br>
   E-mail: <input type="text" name="email" value="">
  <span class="error">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br><br>

  Password: <input type="text" name="password" value="">
  <span class="error">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
  <br><br>

  Comfirm Password: <input type="text" name="confirmpassword" value="">
  <span class="error">* <?php if(!empty($_GET['confirmpasswordErr'])){echo $_GET['confirmpasswordErr'];} ?></span>
  <br><br>







  <input type="submit" name="submit" value="Submit">
</form>


<?php
include("../Model/foot.php");
 ?>



</body>
</html>
