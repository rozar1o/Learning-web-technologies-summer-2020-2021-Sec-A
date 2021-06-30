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

include("../Model/head.php");
     ?>


    <form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="../Controller/logInVolunteerController.php">
        User Name: <input type="text" name="username" value="">
        <span class="error">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
        <br><br>
        Password: <input type="text" name="password" value="">
        <span class="error">*  <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
        <br><br>
        <br>
        <input type="checkbox"  name="remember" value="remember">
         <label for="remember">Remember Me</label>
         <br><br>
         <input type="submit" name="submit" value="Submit">
          <!-- <meta ><a href ="forget password.php">Forget Password? </a></meta> -->
    </form>

    <?php
include("../Model/foot.php");
     ?>
  </body>
</html>
