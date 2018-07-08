<?php
session_start();
	include('sql-connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM `signup` WHERE uname ='$username' and password ='$password'"; 

	$sql_entry = mysqli_query($mysqli,$query);

	if(mysqli_num_rows($sql_entry)>0){
		$_SESSION['sessionadmin'] = $username;
		header('location:dashboard.php');
	} 
	else{
		header('location:index.php');
	}
	//echo $username;
