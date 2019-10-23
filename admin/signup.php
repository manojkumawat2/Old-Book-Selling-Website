<?php 
session_start();
include('includes/connection.php');
if (isset($_POST['submit'])) {
$location = mysqli_real_escape_string($conn, $_POST['location']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mno = mysqli_real_escape_string($conn, $_POST['mno']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$match = "SELECT * FROM signup WHERE email='$email'";
$result = mysqli_query($conn, $match);
$num = mysqli_num_rows($result);
if ($num==1) {
	header('Location: login.php');
}else{
$sql = "INSERT INTO signup(name, email, mno, password, location) VALUES ('$name', '$email', '$mno', '$password', '$location')";
$retval = mysqli_query($conn, $sql);
if(!$retval){
	die("Data is not save.");
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Admin panel of SOB group</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	 <?php include('includes/header.php');
      ?>
      <div id="admin_info">
			<p id="user_name"> <?php echo $name;  ?> </p>

	</div>
</body>
</html>