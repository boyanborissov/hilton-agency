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
          <h5 class="text-center">Your dream home</h5>
          <p class="text-center">Find your dream home that fit with your style.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="images/unica.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
        <h5 class="text-center">UNICA</h5>
        <p class="text-center">Sold!</p>
        <p class="text-center">&dollar;78,000,000</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="images/weeknd.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
        <h5 class="text-center">WEEKND</h5>
        <p class="text-center">Sold!</p>
        <p class="text-center">&dollar;70,000,000</p>
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
                      <div class="col-md-12">
                            <p class="fs-5">Founded in 1993 by owner Rick Hilton, Hilton Agency has remained privately-held, steadfastly independent, and unfettered by investors or outside shareholders for 30 years. With our sole office in New York, we are perhaps the top-producing boutique brokerage in the world.</p>
                            <p class="fs-5">Hilton Agency once again led the luxury residential market in Los Angeles in 2022 with a 31% market share of sales priced $70 million and above, a 23% market share of sales priced $55 million and above, and a 19% market share of sales priced $35 million and above. On top of that, our annual sales volume hit $4 billion with an average price per transaction of $27.39 million.</p>
                      </div>
                      <div class="col-6 mb-5 mt-5">
                        <img src="images/rick-hilton.jpg" alt="image" style="max-width: 100%; height:auto">
                  </div>
                  <div class="col-6 mt-5"> 
                    <h2 class="text-center">About Rick Hilton</h2>
                    <p class="text-center fs-5">Richard Howard Hilton (born August 17, 1955) is an American businessman. 
                      He is the chairman and co-founder of Hilton Agency, a real estate brokerage firm based in Beverly Hills, California, that specializes in homes and estates in Beverly Hills, Holmby Hills, Bel-Air, Brentwood, Pacific Palisades, Malibu, Hollywood Hills, as well as estates from Santa Barbara to San Diego.
                      Hilton was born in Los Angeles, California, the sixth of eight children to Marilyn June (née Hawley) and Barron Hilton, whose father was Hilton Hotel founder Conrad Hilton. In 1978, he graduated from the University of Denver with a degree in hotel and restaurant management.</p>
              </div>
                  <div class="col-md-12">
                      <p class="fs-5">None of this incredible success would be possible without our dedicated associates and award-winning in-house marketing team. Our firm retains knowledge and access to numerous off-market properties, which allow us to keep approximately 27% of our business in-house. While other agencies fixate on expansion and franchising, Hilton & Hyland remains committed to raising the bar for boutique service and providing an in-depth expertise that none can match.</p>
                      <p class="fs-5">Although we are but one office, we are far from alone. Hilton Agency is proud to be a founding affiliate, and exclusive Los Angeles member, of Forbes Global Properties, a Forbes company. We also maintain an exclusive relationship with Luxury Portfolio International, the elite branch of Leading RE, who total $300 billion in annual global sales.
                         This expansive international network combined with our local expertise allows Hilton Agency a unique position as a powerhouse firm with a presence in all major cities of the world.</p>
                      <p class="fs-5">Hilton Agency's goal is to provide unwavering commitment to character, integrity and proficiency. Clients receive personalized service combined with the best of the industry's evolving tools and technology. We thrive in our collaborative environment in which skill sets, spheres of influence, accountability, and open dialogue come together to serve the greater good of the client.</p>
                  </div>
          </div>
      </div>
      </div>
  </section>
  <!--footer-->
  <footer class="bg-dark p-2 text-center">
  <div class="container">
    <p class="text-white text-center">All Right Reserved &copy;THE HILTON AGENCY</p>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>