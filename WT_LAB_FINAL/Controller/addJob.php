<?php
require '../../Model/db.php';


$company_name = "";
$job_title = "";
$job_location = "";
$salary = "";
$companyError = $titleError = $locationError = $salaryError = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $company_name = test_input($_POST["company_name"]);
    $job_title = test_input($_POST["job_title"]);
    $job_location = test_input($_POST["job_location"]);
    $salary = test_input($_POST["salary"]);
    
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



if(isset($_POST['submit'])){
            
    if(empty($_POST["company_name"])){
        echo "Name is required";
    }
    elseif(empty($_POST["job_title"])){
        echo "job_title is required";
    }
    elseif(empty($_POST["job_location"])){
        echo "job_location is required";
    }
    elseif(empty($_POST["salary"])){
        echo "salary is required";
    }
    else{
    
               
        if(addJob($company_name, $job_title, $job_location, $salary)==1){
            echo '<span style="color:#239B56;">PHP Validation : Successful</span>';
            echo "";
          }
          else {
            
            echo '<script>alert("Failed! Please try again.")</script>';
          }
          
    
    

    }
}
    
    
    
    
    


