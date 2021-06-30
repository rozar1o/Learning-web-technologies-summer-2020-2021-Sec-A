

<?php


session_start();


if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  $cpassword=$npassword=$rnpassword="";
  $currentPasswordErr=$newPasswordErr=$retypePasswordErr="";

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["cpassword"])) {
       $currentPasswordErr= "Current Password is required";
       $flag=0;
     }
     else {
      $cpassword = test_input($_POST["cpassword"]);


        }


 if(empty($_POST["npassword"]))
 {
   $newPasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $npassword=test_input($_POST["npassword"]);
   if(strlen($npassword)<8)
   {
     $newPasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($npassword,"@")<1 || substr_count($npassword,"#")<1 || substr_count($npassword,"%")<1 || substr_count($npassword,"$")<1)
     {
       $newPasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if(empty($_POST["rnpassword"]))
 {
   $retypePasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $rnpassword=test_input($_POST["rnpassword"]);
   if(strlen($rnpassword)<8)
   {
     $retypePasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($rnpassword,"@")<1 || substr_count($rnpassword,"#")<1 || substr_count($rnpassword,"%")<1 || substr_count($rnpassword,"$")<1)
     {
       $retypePasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }



  if($flag==1)
  {


  }
  if($flag==0) {
    $args = array(
     'currentPasswordErr' => $currentPasswordErr,
     'newPasswordErr' => $newPasswordErr,
     'retypePasswordErr' => $retypePasswordErr
  );
       header("location:../View/changePasswordView.php?" . http_build_query($args));
  }
}

else {
  echo "You are not allowed to access this page";
}




?>
