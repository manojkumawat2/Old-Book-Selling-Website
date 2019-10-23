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
	<link rel="stylesheet" type="text/css" href="style/post.css">
	<link rel="stylesheet" type="text/css" href="style/upload.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<header>
			<a href="index.php"><img src="images/logo.png" id="logo"></a>
			
				<nav>
					<ul>
						<li><a href="welcome.php">Dashboard</a></li>
						<li><a href="Post_upload.php">Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			<div class="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			
		</header>
			
			<div id="welcome">
				
			</div>
			<div id="hello">
					<p2 class="username">Welcome <i class="fa fa-user-circle-o" aria-hidden="true"></i> <b>
					<?php
					include('includes/connection.php');
					$user = $_SESSION['email'];
					$query = "SELECT * FROM signup WHERE email='$user' LIMIT 1";
					$res = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($res);
					echo $row['name'];
					?>
				</b></p2>
			</div>
			<div id="login_img">
			<img src="images/h1.jpg" class="h1" height="600vh" width="100%" flaot="left">
		</div>

				
				<div id="upload_post">
					<div class="top_heading_of">
						Upload Post
					</div>
					<form id="post_form" action="post.php" method="post" enctype="multipart/form-data">
						<label class="p_label">Book Title</label><br>
						<input type="text" name="title" class="i_post" required><br><br>
						<label class="p_label">About Book</label><br>
						<textarea name="dscript" required class="d_post"></textarea><br><br>
						<label class="p_label">Book price</label><br>
						<input type="text" name="price" class="i_post" required><br><br>
						<label class="p_label">Sample Image</label><br>
						<input type="file" name="image" class="img_post" required><br><br>
						<input type="checkbox" name="click">I have accept <a href="#">terms</a>and <a href="#">condition</a> <br><br>
						<input type="submit" name="post" value="Post" class="click">

					</form>
					

				</div>
		
			<!--Footer goes here-->
			<footer>
				<p style="padding: 1vh;">
					Copyright 2019 &copy; SOB INDIA
				</p>
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
