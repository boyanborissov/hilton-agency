<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">    
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Hilton Agency</title>
  <link rel="icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css?<?php echo time();?>">
</head>
<body onload="video()">
    <!--Navbar-->
    <?php include('navigation.php');?>
   <!-- Video--> 
   <div class="hero">
   <div class="video">
        <video class="w-100" autoplay muted loop id="myVideo">
            <source  src="images/intro.mp4" type="video/mp4">
        </video>  
        <div class="button-container">
            <h1 class="text-light" >The Leading International <br> Luxury Real Estate Agency</h1>
            <a href="aboutus.php"><button class="btn" id="abou" href>About us ></button></a>
        </div>
    </div>
   </div>

    <!--about section -->
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="images\imgonline-com-ua-resize-Kfzjz9fG5aY.jpg" alt="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We provide best quality and service ever</h2>
                        <p>Our company is known around the world. We have a high standarts and have a high clientele. With every new client we become more famous and prestigios.In our site we provide the best of the best. What that means:only in our site you can see houses with a long history from world leaders to celebrities.</p>
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
                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <div class="card text-light text-center bg-dark pb-5 h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-house"></i>
                            <h3 class="card-title ">Best Quality</h3>
                            <p class="lead text-justify">The quality we provide is the best not only in America but in the whole world,tha's why we are the best.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-3">
                    <div class="card text-white text-center bg-dark pb-2 h-100">
                        <div class="card-body">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <h3 class="card-title">Sustainability</h3>
                            <p class="lead">We have connections from all around the world to give you the best house for your style.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-3">
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
                <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "hiltonagency";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM home_page";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '
              <div class="col-12 col-md-12 col-lg-4 mb-3">
                <div class=" card text-light text-center bg-white pb-2 h-100">
                    <div class="card-body text-dark">
                        <div class="img-area mb-4">
                            <a href='. $row["property"].' ><img src='. $row["image"].' alt="" class="img-fluid"></a>
                        </div>
                        <h3 class="card-title">'. $row["title"].'</h3>
                        <p class="lead"> '. $row["description"].'</p>
                    </div>
                </div>
            </div>';
            }
          } else {
            echo "0 results";
          }
          $conn->close();
        ?>
    </section>
    <!--footer-->
    <footer class="bg-dark p-1 text-center">
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
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>