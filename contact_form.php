<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Hilton Agency</title>
	<link rel="icon" href="images/logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/contact.css?<?php echo time();?>">
</head>
<body>
	<!--Navbar-->
	<?php include('navigation.php'); ?>

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
					<div class="contact-form">
						<form  method="post" action="contactprocess.php">
							<div class="form-group">
								<input class="form-control bg-dark border-0 text-light" placeholder="Your Name Here" type="text" name="name"><br>
							</div>
							<div class="form-group">
								<input class="form-control bg-dark border-0 text-light" placeholder="Your Email Here" type="email" name="email"><br>
							</div>
							<div class="form-group">
								<textarea class="form-control bg-dark border-0 text-light" cols="30" placeholder="Your Message" rows="10" name="message"></textarea>
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
	<footer class="m-5 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved &copy;THE HILTON AGENCY</p>
		</div>
	</footer>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
	let mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
	<script>
        const nav2 = document.querySelector(".navbar");

        window.addEventListener("scroll", () => {
            if(window.scrollY >= 50){
                nav2.classList.add('bg-dark');
            }else if(window.scrollY < 50){
                nav2.classList.remove('bg-dark');
            }
        })
    </script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>

