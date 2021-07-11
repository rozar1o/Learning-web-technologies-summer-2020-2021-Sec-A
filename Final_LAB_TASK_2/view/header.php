<?php
	session_start();
	if(!isset($_SESSION['status'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>