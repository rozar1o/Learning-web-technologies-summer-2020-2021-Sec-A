<?php
session_start();


if (isset($_POST['updateStudent']) && isset($_SESSION['username'])) {

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth=$details="";
  $birthErr =$emailErr  = $nameErr =$error= "";
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

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $nameErr= "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<1)
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
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr= "Invalid email format";
      $flag=0;
    }
  }




if($flag==1)
{
  $_SESSION['name']=$name;
  $_SESSION['email']=$email;


header("location:../View/dashboardVolunteerView.php?");

}
else {
  $args = array(
   'nameErr' => $nameErr,
   'emailErr' => $emailErr,
   'birthErr' => $birthErr

);
     header("location:../View/updateVolunteer.php?" . http_build_query($args));
}


} else {
	echo 'You are not allowed to access this page.';
}


?>
