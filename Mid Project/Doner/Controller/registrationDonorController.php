<?php

session_start();

if (isset($_POST['submit'])) {

  $birthErr = $nameErr = $emailErr = $genderErr = $websiteErr =$error= "";

  $usernameErr=$passwordErr="";

 $confirmpasswordErr="";

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth="";
  $username=$password="";
 $confirmpassword="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    $nameErr= "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);
       $_SESSION['name']=$name;

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $nameErr= "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<0)
          {
          $nameErr= "Name must contains at least two words ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    $emailErr= "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    $_SESSION['email']=$email;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr= "Invalid email format";
      $flag=0;
    }
  }



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
          $passwordErr= "Password must contain these special characters (@, #, $,%)";
          $flag=0;
        }
      }
    }

    if(empty($_POST["confirmpassword"]))
    {
      $confirmpasswordErr= "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
        $confirmpasswordErr= "Password is required";
        $flag=0;
      }
      else {
        $confirmpassword=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$confirmpassword))
        {
          $confirmpasswordErr= "Password and confirm password have to be same";
          $flag=0;
        }
      }
    }
    if (empty($_POST["gender"])) {
      $genderErr= "Gender is required";
      $flag=0;
    } else {
      $gender = test_input($_POST["gender"]);
      $_SESSION['gender']=$gender;
    }

if($flag==1)
{
  $myfile = fopen("newfile.txt", "w");
  fwrite($myfile, $name." ,");
  fwrite($myfile, $email." ,");
  fwrite($myfile, $username." ,");
  fwrite($myfile, $password." ,");
  fwrite($myfile, $gender." ,");
  fclose($myfile);


    header('location:../View/logInDonorView.php');

}
else {
  $args = array(
   'nameErr' => $nameErr,
   'emailErr' => $emailErr,
   'usernameErr' => $usernameErr,
   'passwordErr' => $passwordErr,
   'confirmpasswordErr' => $confirmpasswordErr,
   'genderErr' => $genderErr,
   'birthErr' => $birthErr
);
     header("location:../View/registrationDonorView.php?" . http_build_query($args));
  }




}else {
  echo "You can not access this page!!";
}






?>
