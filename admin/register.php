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
			<img src="images/h1.jpg" class="h1" height="500vh" width="100%" flaot="left">
		</div>
		<div id="register">
			<p1 id="attention" class="color: red;"></p1><br>
				<h2> Sign Up </h2>
				<form name="register_form" action="signup.php" method="post">
					<p2 id="attention" class="color: red;"></p2>
					<label>Name</label>	<br>
					<input type="text" name="name" placeholder="Enter your name" id="name" class="input" required> <br>	<br>
					<label>Email</label>	<br>
					<input type="text" name="email" placeholder="Enter your email" id="email" class="input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please Enter a valid email." required>	<br> <br>
					<label>Mobile Number</label>	<br>
					<input type="text" name="mno" placeholder="Enter your mobile number" id="mobile_no" class="input" title="Please Enter a valid mobile no." required>	<br><br>
					<label>Create Password</label>	<br>
					<input type="password" name="password" size="8" placeholder="Create a password" id="password" class="input" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="Please include at least 1 uppercase character, 1 lowercase character, and 1 number." required><br>	<br>
					<label>Select city</label><br>
					<select type="select" name="location" required>
						<option>Ajmer</option>
						<option>Jaipur</option>
						<option>Jodhpur</option>
						<option>Kota</option>
						<option>Bikaner</option>
						<option>Udaipur</option>
						<option>Bhilwara</option>
						<option>Alwar</option>
						<option>Sikar</option>
						<option>Shri Ganganagar</option>
						<option>Pali</option>
						<option>Chittorgarh</option>
						<option>Tonk</option>
						<option>Kishangarh</option>
						<option>Hanumangarh</option>
						<option>Dholpur</option>
						<option>Gangapur City</option>
						<option>Sawai Madhopur</option>
						<option>Churu</option>
						<option>Chittorgarh</option>
					</select><br><br>
					<input type="checkbox" name="click" required> <p1> I agree <a href="#">Privacy Policy </a> and <a href="#">Terms and Conditions</a></p1> <br><br>
					<input type="submit" name="submit" value="Sign Up" class="submit">	
				</form>
				<div class="already">
					<p1>Alredy have an account? <a href="login.php" style="text-decoration: none;"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></p1>
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