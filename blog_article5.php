<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>The Hilton Agency</title>
    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
	rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
	crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
	crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

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
<!--Article 1-->
<div class="container mt-4">
	<div class="row">
		<div class="col-lg-12">
			<!-- Post content-->
			<article>
				<!-- Post header-->
				<header class="mb-4">
					<!-- Post title-->
					<h1 class="fw-bolder mb-3">Legendary Spelling Manor Estate In Los Angeles Lists For $165 Million</h1>
					<!-- Post meta content-->
					<div class="text-muted fst-italic mb-2">Posted on January 1, 2022 by Start Bootstrap</div>
					<!-- Post categories-->
					<a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
					<a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
				</header>
				<!-- Preview image figure-->
				<figure class="mb-4"><img class="img-fluid rounded" src="images/manor.jpg" alt="..." /></figure>
				<!-- Post content-->
				<section class="mb-5">
					<p class="fs-5 mb-4">The last time the Spelling Manor changed hands was in 2019, when it sold to an undisclosed buyer for $119.75 million—the highest recorded residential sale ever for Los Angeles County at the time.
						Fast-forward three years and the famed estate’s current price of $165 million wouldn’t come close to breaking the new California record set a year ago when venture capitalist Marc Andreessen paid $177 million for a property in Malibu.</p>
					<p class="fs-5 mb-4">Still, the $165-million sticker price ranks as one of the highest in the country for a single-family residence.
						Weighing in at more than 56,000 square feet, the French chateau-inspired estate was originally built for late TV producer Aaron Spelling and his widow, Candy Spelling. Sparing no expense, Candy Spelling customized the sprawling residence with a range of personalized amenity rooms, including a flower-cutting room, a film editing area behind the screen of the home’s movie theater and a wine and cheese room outfitted with Parisian-cafe style tables and chairs.
						</p>
					<p class="fs-5 mb-4">Prior to the record sale in 2019, the home was owned by Formula One heiress Petra Ecclestone, who had paid $85 million for the place in an all-cash deal.
						During her residency, Ecclestone oversaw sweeping renovations, updating interiors to suit modern tastes and adding a beauty salon, an aquarium and a nightclub.</p>
					<h2 class="fw-bolder mb-4 mt-5">About the manor</h2>
					<p class="fs-5 mb-4">Covering well over an acre of livable space, the home features 27 bathrooms and 14 bedrooms, including the 7,500-square-foot primary suite.
						Other points of interest include a French-door solarium, a formal dining room and a grand foyer featuring a 30-foot ceiling, as well as a game room, a bowling alley and a tanning room.
						</p>
					<p class="fs-5 mb-4">In an interview with Forbes last year, Ecclestone’s partner, real estate agent and lifestyle entrepreneur Sam Palmer, revealed that the 123-room, W-shaped mansion requires a staff of 50 people to keep the estate in working order.
						A team of landscapers tends to grounds featuring rose gardens, citrus orchards and acres of lawn. In addition, the home’s many fountains, the statuary, koi ponds, swimming pool and sports courts all require regular maintenance.</p>
				</section>
			</article>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
		  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
		  crossorigin="anonymous"></script>
    </body>
    </html>