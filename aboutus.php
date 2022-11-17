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

    <link rel="stylesheet" href="css/aboutus.css">
    
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
    <!--About us-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/house.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Your dream home</h5>
          <p>Find your dream home that fit with your style.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/78 million.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
        <h5>UNICA</h5>
        <p>Sold!</p>
        <p>&dollar;78,000,000</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/la-fin-mansion .jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <!-- <section id="about">
        <div class="about-1">
            <h1>ABOUT US</h1>
        </div>
        <div id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <i class="fa fa-book"></i>
                                <h3>MISSION</h3>
                                <hr>
                                <p>“Delivering measurable results to clients, employees, and vendors.” “Provide the best customer results possible and deliver the WOW factor through our services.” “Our mission is to be the experts in marketing and sales alignment and the masters of the message</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <i class="fa fa-book"></i>
                                <h3>VISSION</h3>
                                <hr>
                                <p>Put simply, your mission statement focuses on today and what you are doing to achieve the promises made. Your agency’s vision focuses on tomorrow and what the goal of the company is.While these are two very different concepts, the line often gets blurred. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <i class="fa fa-book"></i>
                                <h3>ACHIEVMENT</h3>
                                <hr>
                                <p>When an agency lands a prestigious award, a grant or a big investor, it can be a unique marketing opportunity for the company. Regardless of what the honor or accomplishment is, having the business recognized lends credibility. An agency drive both sales leads and loyalty.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--footer-->
<footer class="bg-dark p-2 text-center">
  <div class="container">
      <p class="text-white">All Right Reserved &copy;THE HILTON AGENCY</p>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
		  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
		  crossorigin="anonymous"></script>
</body>
</html>