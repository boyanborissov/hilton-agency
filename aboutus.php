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
  <link rel="stylesheet" href="css/aboutus.css?<?php echo time();?>">
</head>
<body>
   <!--Navbar-->
   <?php include('navigation.php');?>

  <!--About us-->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="images/kj.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Your dream home</h5>
          <p>Find your dream home that fit with your style.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="images/unica.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
        <h5>UNICA</h5>
        <p>Sold!</p>
        <p>&dollar;78,000,000</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="images/weeknd.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
        <h5>WEEKND</h5>
        <p>Sold!</p>
        <p>&dollar;70,000,000</p>
        </div>
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
<!--About us-->
<section id="about">
      <div class="about-1 text-center mt-5">
          <h1>Our Story</h1>
          <hr>
      </div>
      <div id="about-2">
          <div class="content-box-lg">
              <div class="container">
                  <div class="row">
                      <div class="col-md-4">
                          <div class="about-item">
                            
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>
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