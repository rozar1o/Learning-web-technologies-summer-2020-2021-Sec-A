<?php

session_start();


if(isset($_POST['submit']))
{
  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $usernameErr=$passwordErr="";
  $flag=1;


  if (empty($_POST["username"])) {
    $usernameErr= "User Name is required";
    $flag=0;
  }
  else {
   $username = test_input($_POST["username"]);

    if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
       $usernameErr= "Only letters and white space allowed";
       $flag=0;
     }
     else {
       if(strlen($username)<2)
       {
          $usernameErr= "Name must contains at least two character ";
          $flag=0;
       }

     }
  }


 if(empty($_POST["password"]))
 {
   $passwordErr= "Password is required";
   $flag=0;
 }
 else {
   $password=test_input($_POST["password"]);
   if(strlen($password)<8)
   {
     $passwordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
     {
       $passwordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if(!empty($_POST['remember']))
 {
   $cookie_name = "username";
$cookie_value = "Organization";
setcookie($cookie_name, $cookie_value, time() + (864 * 30), "/");
 }


  if($flag==1)
  {



      if($username=="organization")
      {

        if($password=="abcd@#$%")
        {
          $_SESSION['username']=$username;

          header('Location: ../View/dashboardOrganizationView.php');
        }
        else {
          $passwordErr= "Incorrect Password";
          $args = array(
           'usernameErr' => $usernameErr,
           'passwordErr' => $passwordErr,
        );
             header("location:../View/logInOrganizationView.php?" . http_build_query($args));
        }
      }else {
        $usernameErr= "Username not found";
        $args = array(
         'usernameErr' => $usernameErr,
         'passwordErr' => $passwordErr,
      );
           header("location:../View/logInOrganizationView.php?" . http_build_query($args));
      }



  }
  else {
    $args = array(
     'usernameErr' => $usernameErr,
     'passwordErr' => $passwordErr,
  );
       header("location:../View/logInOrganizationView.php?" . http_build_query($args));
  }
}

else {
  echo "You are not allowed to access this page";
}




?>
