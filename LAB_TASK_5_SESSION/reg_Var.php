<?php

	session_start();
   

if ( isset ( $_POST [ 'submit' ] ) ) {

	$name = $_POST [ 'name' ];
	$email =$_POST [ 'email' ];
	$user_name =$_POST [ 'uname' ];
	$user_name_length = strlen($user_name);
	$password =$_POST [ 'pass' ];
	$password_length = strlen($password);
	$confirm_password = $_POST [ 'cpass' ];
	if(isset($_POST['gender'])){
			  $gender =  $_POST [ 'gender' ]; 
			}
    $day    =   $_POST [ 'day'] ;
	$month  = $_POST [ 'month'];
	$year   = $_POST [ 'year' ] ;
    $date_of_birth = [ $day , $month , $year ];
    
}

if ( $name != "" && $email != "" && $gender != "" && $user_name != "" && $password != "" && $confirm_password != ""  && !empty($date_of_birth) ){
	if ($password == $confirm_password) {

        if ( $user_name != "" && $password != "" && preg_match("/^[a-zA-Z][a-zA-Z0-9._]/i", $user_name) && preg_match("/[@#$%]/",$password) && $user_name_length >= 2 && 
   		$password_length >= 8 )  {
   			$user = [
   						'name' 		=> $name,
   						'email'		=> $email,
   						'gender' 	=> $gender,
   						'username' 	=> $user_name,
   						'password'  => $password,
   						'dob' 		=> $date_of_birth


   					];
   					$_SESSION['user'] = $user;
				header('location: login.html');
       }
	else{
		echo "Fill All the file with correct value and give atleast 2 word in username and your password Should be at least 8 charecter";
	}
}
else{
	echo "passwprd missmatch";
}
}
else{
	echo "Fill all The fields";
}
?>