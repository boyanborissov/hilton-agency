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

    <link rel="stylesheet" href="css/home.css?<?php echo time();?>">
    
    </head>
<body onload="video()">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container" id="myDiv">
          <a class="navbar-brand fw-bolder" href="home.php">THE HILTON AGENCY</a>
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
              <div id='google_translate_element'>

      <script>
     
      function googleTranslateElementInit() {
     
      new google.translate.TranslateElement({
     
      pageLanguage: 'en,bg',
     
      includedLanguages:'en,bg', 
     
      layout: google.translate.TranslateElement.InlineLayout.VERTICAL
     
      }, 'google_translate_element');
     
      }
     
      </script>

      <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
              </div>
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
<!--Video-->
<div class="video">
    <video id="video" autoplay muted loop width="100%">
        <source  src="images/intro.mp4" type="video/mp4">
    </video>  
</div>

<!-- Fixed Video Height-->
<script>
    function video() {
        let height = window.innerHeight;
        var clientHeight = document.getElementById('myDiv').clientHeight;

        var vh = height - clientHeight + 70;
        document.getElementById("video").style.height = "" + vh + "px";
    }
    
</script>
<!-- <div class="content">
    <h2>Leading number 1 international agency</h2>
    <a href="aboutus.php">Learn more</a>
</div> -->


<!--about section -->

<section id="about" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="images/imgonline-com-ua-resize-Kfzjz9fG5aY.jpg" alt="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2>We provide best quality. Service ever</h2>
                    <p>Our company is known around the world. We have a high standarts and have a high clientele.
                      With every new client we become more famous and prestigios.In our site we provide the best of the best. What that means:only in our site you can see houses with a long history from world leaders to celebrities.</p>
                        </div>
            </div>
        </div>
    </div>
</section>  
<!--service section-->
<section class="services section-padding" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Our Services</h2>
                    <p>The services we provide are on the highest level, so nobody can beet us in our game.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-dark pb-2 h-100">
                    <div class="card-body ">
                        <i class="fa-solid fa-house"></i>
                        <h3 class="card-title ">Best Quality</h3>
                        <p class="lead text-justify">The quality we provide is the best not only in America but in the whole world,tha's why we are the best.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2 h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <h3 class="card-title">Sustainability</h3>
                        <p class="lead">We have connections from all around the world to give you the best house for your style.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2 h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-chart-line"></i>
                        <h3 class="card-title">Investment</h3>
                        <p class="lead">When you buy from the price of the property always gonna get higher and higher,so that's a good investment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Portfolio section-->
<section id="portfolio" class="portfolio section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Exclusive Properties</h2>
                    <p>Our best properties for your style.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class=" card text-light text-center bg-white pb-2 h-100">
<div class="card-body text-dark">
    <div class="img-area mb-4">
        <img src="images/la-fin-mansion .jpg" alt="" class="img-fluid">
    </div>
    <h3 class="card-title">La fin</h3>
    <p class="lead"> La Fin takes it to the next level. Located at 1200 Bel Air Road in the tony Bel-Air neighborhood, the mega-mansion is now on the market for $139 million.</p>

                </div>
            </div>
        </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class=" card text-light text-center bg-white pb-2 h-100">
<div class="card-body text-dark">
    <div class="img-area mb-4">
        <img src="images/hadid-1.jpg" alt="" class="img-fluid">
    </div>
    <h3 class="card-title">Le Belvedere</h3>
    <p class="lead">The Hadids are on the move. The Bel Air mansion developed by Mohamed Hadid, father to Gigi and Bella Hadid and friend to Real Housewife Lisa Vanderpump. </p>
                </div>
            </div>
        </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class=" card text-light text-center bg-white pb-2 h-100">
<div class="card-body text-dark">
    <div class="img-area mb-4">
        <img src="images/manor.jpg" alt="" class="img-fluid">
    </div>
    <h3 class="card-title">Spelling manor</h3>
    <p class="lead">"The Manor" An unparalleled offering, an unrivaled setting, a showplace of the highest caliber. The Manor is undoubtedly one of the finest estates in the World.</p>
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
        if(window.scrollY >= 700){
            nav2.classList.add('bg-dark');
        }else if(window.scrollY < 700){
            nav2.classList.remove('bg-dark');
        }
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
        crossorigin="anonymous"></script>

</body>
</html>