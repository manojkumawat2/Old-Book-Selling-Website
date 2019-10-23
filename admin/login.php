<!DOCTYPE html>
<html>
<head>
	<title></title>
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
						<li><a href="#">Home</a></li>
						<li><a href="#">Catagories</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact us</a></li>
						<li><a href="#">Login/SignUp</a></li>
					</ul>
				</nav>
			<div class="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			
		</header>
		<div id="login_img">
			<img src="images/h1.jpg" class="h1" height="600vh" width="100%" flaot="left">
		</div>
		<div id="register">
				<h2> Log in </h2>
				<form action="log.php" method="post">
					<label>Email</label>	<br>
					<input type="text" name="email" placeholder="Enter your email" class="input" required>	<br> <br>
					<label>Password</label>	<br>
					<input type="password" name="password" placeholder="Enter password" class="input" required><br>	<br>
					<input type="submit" name="login" value="Login" class="submit">	
				</form>
				<div class="already">
					<p1>Not a member..? <a href="login.php" style="text-decoration: none;"> <i class="fa fa-sign-in" aria-hidden="true"></i> Register here</a></p1>
				</div>
			</div>
		
		
			<!--Footer goes here-->
			<footer>
					<P style="padding: 1vh;">All Rights are reserved By &copy; SOB Pvt. Ltd. India</p>
		
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