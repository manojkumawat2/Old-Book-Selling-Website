<?php
session_start();
include('includes/connection.php');
if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$name = null;

	$sql = "SELECT * FROM signup WHERE email='$email' AND password='$password' Limit 1";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)==1){
		$_SESSION['email']=$email;
		header('Location: welcome.php');
	}
	else{
		header('Location: login.php');
	}
}
?>