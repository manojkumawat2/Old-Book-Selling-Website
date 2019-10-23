<header>
			<a href="index.php"><img src="images/logo.png" id="logo"></a>
			
				<nav>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Catagories</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</nav>
			<div class="menu-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			
		</header>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.menu-toggle').click(function(){
					$('ul').toggleClass('active')
				})
			})
		</script>