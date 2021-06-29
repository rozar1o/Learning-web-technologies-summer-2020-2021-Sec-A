<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
include('../Model/head.php');
 ?>
    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/changePasswordController.php">

    <br>
      <h2>Change Password</h2>
      <br><br /><br><br />
      Current Password: <input type="text" name="cpassword" id="cpassword" onkeyup="checkCurrentpassword()" onblur="checkCurrentpassword()"><br><br>

      <span class="error" id="currentPasswordErr">* <?php if(!empty($_GET['currentPasswordErr'])){echo $_GET['currentPasswordErr'];} ?></span>
      <br><br>
      <span >New Password:</span>
      <input type="text" name="npassword" id="npassword" onkeyup="checkNewpassword()" onblur="checkNewpassword()" ><br><br>
      <span class="error" id="newPasswordErr">* <?php if(!empty($_GET['newPasswordErr'])){echo $_GET['newPasswordErr'];} ?></span>

      <br><br>
      <span >Retype New Password:</span>
      <input type="text" name="rnpassword" id="rnpassword" onkeyup="checkRetypepassword()" onblur="checkRetypepassword()"><br><br>
      <span class="error" id="retypePasswordErr">* <?php if(!empty($_GET['retypePasswordErr'])){echo $_GET['retypePasswordErr'];} ?></span>

      <br><br><br><br>
      <input type="submit" name="submit" value="Submit">
      <br><br>






    </form>

    <?php
    include('../Model/foot.php');
     ?>
  </body>
</html>
