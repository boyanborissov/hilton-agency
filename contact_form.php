<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Hilton Agency</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/contact.css?<?php echo time();?>">
</head>
<body>
	<!--Navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="home.php"><b>THE HILTON AGENCY</b></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
		<li class="nav-item">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="aboutus.php">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php">Properties</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="agents.php">Our Agents</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blogpage.php">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact_form.php">Contact us</a>
					</li>
					<?php
						if(isset($_SESSION['username'])) {
								echo '<li class="nav-item">
												<a class="nav-link" href="#">'. $_SESSION['username'] .'</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="logout.php">Logout</a>
											</li>';
						} else {
								echo '<li class="nav-item">
												<a class="nav-link" href="login.php">Log In</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="register.php">Register</a>
											</li>';
						}
					?>
		</ul>
		</div>
	</div>
	</nav>
	<!--Contact us-->
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="section-title">
						<h2>Contact us</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 mb-5">
					<div class="contact-form bg-dark">
						<form>
							<div class="form-group">
								<input class="form-control bg-dark text-light" placeholder="Your Name Here" type="text"><br>
							</div>
							<div class="form-group">
								<input class="form-control bg-dark text-light" placeholder="Your Email Here" type="email"><br>
							</div>
							<div class="form-group">
								<textarea class="form-control bg-dark text-light" cols="30" placeholder="Your Message" rows="10"></textarea>
							</div>
							<button class="btn" type="submit">Submit</button><br>
						</form>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="map-area">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24184.643351002975!2d-74.0096183033498!3d40.73825594258853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sbg!4v1655641396903!5m2!1sen!2sbg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--footer-->
	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved &copy;THE HILTON AGENCY</p>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>

