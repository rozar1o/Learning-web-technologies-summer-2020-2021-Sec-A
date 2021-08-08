<?php
 include_once '../Model/db.php';
 ?>
 
<?php
 $name="";
 $password = ""; 
 
 $nameErr = $passwordErr = "";
 
 
 if($_SERVER["REQUEST_METHOD"] == "POST"){
 
 $name = test_input($_POST["name"]); 
 $password = test_input($_POST["password"]); 
 }
 
 function test_input($data){
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 }
 ?> 
 
<?php
 
 if(isset($_POST['submit'])){
 
 if (empty($_POST["name"])) {
 echo "Name is required";
 }
 elseif(empty($_POST["password"])){
 echo "Password is required";
 }
 else{ 
 $name = $_POST["name"];
 $password = $_POST["password"];
 
 
 if (login($name,$password)==1)
 {
 
 echo "Login successful";
 session_start();
 $_SESSION['name']= htmlentities( $_POST['name']);
 $_SESSION['password']= htmlentities( $_POST['password']);
 if(!empty($_POST['remember'])){
 
 
 }
 
 header('Location: ../View/home.php');
 }
 else{
 echo "login failed <br> "; 
 
 }
 }
 
 }
 ?>