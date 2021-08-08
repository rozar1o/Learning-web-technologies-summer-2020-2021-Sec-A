<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "job-portal";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

function login ($name,$password){
    global $conn;
    $sql = "Select * from admin where name = '$name' and password='$password'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck>0){
        return 1;
    }
    else{
        return 0;
    }
        
}

function signup ($employee_name, $company_name ,$contact, $username, $password){
    

    try {
        global $conn;
        $sql = "INSERT INTO `employees` (`id`, `employee_name`, `company_name`, `contact`,  `username`, `password`) VALUES (NULL, '$employee_name', '$company_name', '$contact',  '$username', '$password'); ";
        mysqli_query($conn,$sql);
       
        echo '<span style="color:#239B56;">Database : Successful </br></span>';
        return 1;
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    
      }
        
     
}

function addJob ($company_name ,$job_title, $job_location, $salary){
    

    try {
        global $conn;
        $sql = "INSERT INTO `jobs` (`id`, `company_name`, `job_title`,  `job_location`, `salary`) VALUES (NULL, '$company_name', '$job_title',  '$job_location', '$salary'); ";
        mysqli_query($conn,$sql);
       
        echo '<span style="color:#239B56;">Database : Successful </br></span>';
        return 1;
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    
      }
        
     
}

function showJobs(){
    
}




?>
