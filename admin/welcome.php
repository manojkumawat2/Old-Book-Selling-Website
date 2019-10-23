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
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="navbar-brand">SOB India</a>
            <button class="navbar-toggler" data-target="#navigation" data-control="navigation" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a href="welcome.php" class="nav-link">Dashbord</a>
                    </li>                   
                    <li class="nav-item">
                        <a href="#" class="nav-link">Feature</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                        <div class="dropdown-menu" aria-lableledby="preview">
                            <a class="dropdown-item" href="profile.php">View</a>
                            <a class="dropdown-item" href="profile_edit.php">Change</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
			
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
				<h4>
					Welcome to SOB
				</h4>
				<p2 class="line"> <i> Here you can sell your old Books.</i></p2><br>
				
			</div>
			<!--Post banner---->
			<a href="edit_post.php" class="post_link"><center><div id="post_info">
				<i class="fa fa-pencil-square-o post_icon" aria-hidden="true"></i><br>
				New Book
			</div></center></a>
			<a href="postedbooks.php" class="post_link"><center><div id="post_info">
				<i class="fa fa-line-chart post_icon" aria-hidden="true"></i><br>
				Posted Books

			</div></center></a>
			<a href="#" class="post_link"><center><div id="post_info">
				<i class="fa fa-pencil-square post_icon" aria-hidden="true"></i><br>
				Update Data
			</div></center></a>
			<a href="profile.php" class="post_link"><center><div id="post_info">
				<i class="fa fa-user-circle-o post_icon" aria-hidden="true"></i> <br>
				View Profile
			</div></center></a>
		
		<footer>
			<p style="padding: 1vh;">All Rights are reserved by &copy; sob india</p>
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