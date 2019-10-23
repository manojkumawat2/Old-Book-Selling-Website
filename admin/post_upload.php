<?php
	session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	<header>
			<a href="index.php"><img src="images/logo.png" id="logo"></a>
			
				<nav>
					<ul>
						<li><a href="#">Dashbord</a></li>
						<li><a href="Post_upload.php">Profile</a></li>
						<li><a href="#">Logout</a></li>
					</ul>
				</nav>
			<div class="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			
		</header>
			
			<div id="welcome">
				<p2>Welcome <b><?php echo  $_SESSION['email']; echo "". $_SESSION['name']. "";?></b></p2>
			</div>
			<div id="user_post">
				<h3>Upload a books</h3>
			</div>

			<!--Footer goes here-->
			<footer>
				<p>All rights are reserved by &copy; sob india</p>
			</footer>
			


		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.menu-toggle').click(function(){
					$('ul').toggleClass('active')
				})
			})
		</script>

</body>
</html>