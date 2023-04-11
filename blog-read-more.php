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
  <link rel="stylesheet" href="css/blog_article1.css?<?php echo time();?>">
</head>
<body>
   <!--Navbar-->
  <?php include('navigation.php'); ?>
<!--Article 1-->
  <div class="container mt-4">
    <div class="row">
    <?php
      $blogID = $_GET['id'];
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

      $sql = "SELECT * FROM blog_article WHERE id=$blogID";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="col-lg-12">
                    <article>
                    <header class="mb-4">	
                      <h1 class="fw-bolder mb-3 ">'. $row['title'].'</h1>
                      <div class="text-muted fst-italic mb-2 ">'.$row['date'].'</div>
                    </header>
                    <figure class="mb-4"><img src="'. $row['image'].'" class="img-fluid w-100" /></figure>
                      <section class="mb-5">
                        <p class="fs-5 mb-4">'. $row['description'].'</p>
                      </section>
                    </article>
                  </div>';
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
  <script>
        const nav2 = document.querySelector(".navbar");
        nav2.classList.add('bg-dark');
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>