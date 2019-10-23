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
			<center>
			<div id="posted_books">
				<div class="top_heading_of">
				Your posted books
				</div>
				<table class="show_post">
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Image</th>
						<th>Price</th>
						<th>Date</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
						<?php  
							include('includes/connection.php');
							$user = $_SESSION['email'];
							$query = "SELECT * FROM post WHERE email = '$user'";
							$result = mysqli_query($conn, $query);
							while ($row = mysqli_fetch_array($result)) {
								$id = $row['id'];
								$title = $row['title'];
								$img = $row['image'];
								$price = $row['price'];
								$date = $row['date_time'];

							
						?>
					<tr>
						<td>
							<?php echo $id; ?>
						</td>
						<td>
							<?php echo $title; ?>
						</td>
						<td>
							<img src="images/<?php echo $img; ?>" class="book_image">
						</td>
						<td>
							<i class="fa fa-inr" aria-hidden="true"></i><?php echo $price; ?>
						</td>
						<td>
							<?php echo $date; ?>
						</td>
						<td>
							<a href='delete.php?id=<?php echo $id; ?>'>Delete</a>
						</td>
						<td>
							<a href="edit.php/id=<?php echo $id; ?>">Edit</a>
						</td>
					</tr>
						<?php } ?>
					</table>
			
			</div> </center>
			<!--Footer goes here-->
			<footer>
				<p style="padding: 1vh;">All Rights are reserver &copy; by sob india</p>
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
