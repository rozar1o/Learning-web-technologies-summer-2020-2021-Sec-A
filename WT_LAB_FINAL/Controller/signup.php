<?php
require '../Model/db.php';

$employee_name = "";
$company_name = "";
$contact = "";
$password = "";
$username = "";
$nameError = $companyError = $contactError = $usernameError = $passwordError = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $employer_name = test_input($_POST["employer_name"]);
    $company_name = test_input($_POST["company_name"]);
    $contact = test_input($_POST["contact"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



if(isset($_POST['submit'])){
            
    if (empty($_POST["employer_name"])) {
        echo "Name is required";
    }
    elseif(empty($_POST["company_name"])){
        echo "Email is required";
    }
    elseif(empty($_POST["contact"])){
        echo "Phone is required";
    }
    elseif(empty($_POST["username"])){
        echo "Username is required";
    }
    elseif(empty($_POST["password"])){
        echo "Password is required";
    }
    else{
    
               
        if(signup($employee_name, $company_name, $contact, $username, $password)==1){
            echo '<span style="color:#239B56;">PHP Validation : Successful</span>';
            echo "";
          }
          else {
            
            echo '<script>alert("Failed! Please try again.")</script>';
          }
          
    
    

    }
}
    
    
    
    
    


