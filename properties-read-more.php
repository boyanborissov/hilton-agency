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
  <link rel="stylesheet" href="css/property_article1.css?<?php echo time();?>">
</head>
<body>
  <!--Navbar-->
  <?php include('navigation.php'); ?>

  <!--About the property-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <?php
      $propertyID = $_GET['id'];
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

      $sql = "SELECT * FROM property_article WHERE id=$propertyID";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="carousel-item active">
                    <img src="'. $row['image1'] .'" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="'. $row['image2'] .'" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="'. $row['image3'] .'" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="'. $row['image4'] .'" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="'. $row['image5'] .'" class="d-block w-100" alt="...">
                  </div>';
        }
      } else {
        echo "0 results";
      }
      $conn->close();
    ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <hr>
  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-12">

    <!-- Post content-->
    <article>
      <!-- Post header-->
      <header class="mb-4">
        <!--Post title -->
        <?php
          $propertyID = $_GET['id'];
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

          $sql = "SELECT * FROM property_description WHERE id=$propertyID";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<h1 class="fw-bolder mb-3 text-center">'. $row["name"] .'</h1>
              <h4 class="mb-3 text-center">'. $row["address"] .' </h4>
              <p class="fs-3 mb-4 text-center">' . $row["beds"] . ' beds <span>|</span> ' . $row["baths"] . ' baths <span>|</span> ' . $row["size"] . ' sq.ft</p>
              <h2 class="fw-bold text-center">$' . number_format(round($row["price"]), 0, ',') .'</p>
              </header>
              <section class="mb-5">
              '.$row["description"].'
              </section>';
            }
          } else {
            echo "0 results";
          }
          $conn->close();
        ?>
  </article>

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

        const number = document.getElementsByTagName('h2').value;
        console.log(number);
    </script>
	<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>