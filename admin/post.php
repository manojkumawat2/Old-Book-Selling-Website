<?php
session_start();
include('includes/connection.php');
	$user = $_SESSION['email'];
	$query = "SELECT * FROM signup WHERE email='$user' LIMIT 1";
	$res = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($res);
if (isset($_POST['post'])) {
	$title = $_POST['title'];
	$dscript = $_POST['dscript'];
	$price = $_POST['price'];
	$date = date('d/m/y');
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['type'];
	$image_tmp = $_FILES['image']['tmp_name'];
	$name = $row['name'];
	$email = $row['email'];
	$mno = $row['mno'];
	$location = $row['location'];
	if ($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif") {
		move_uploaded_file($image_tmp, "images/$image_name");
	}
	else{
		echo "Please select a correct image format.";
	}

	$sql = "INSERT INTO post(title, dscript, price, image, name, email, mno, date_time, location) VALUES ('$title', '$dscript', '$price', '$image_name', '$name', '$email', '$mno', '$date', '$location')";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		echo "Data store. ";
	}

}
?>