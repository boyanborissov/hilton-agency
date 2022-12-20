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
                    <img src="'. $row['image'] .'" class="d-block w-100" alt="...">
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
              <h2 class="fw-bold text-center">$'. $row["price"] . '</p>
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

	<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>