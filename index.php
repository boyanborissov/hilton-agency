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
  <link rel="stylesheet" href="css/property_style.css?<?php echo time();?>">
</head>
<body>
  <!--Navbar-->
  <?php include('navigation.php'); ?>
  
    <!--Properties-->
  <div class="container">
    <div class="title">
      <h1>Our Properties</h1>
    <hr>
    </div>
    <div class="row">
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

        $sql = "SELECT * FROM property_info";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo '
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
              <div class="card mb-5 shadow-sm h-100">

                <img src="'. $row['image'].'" class="img-fluid" />
        
                <div class="card-body">
                  <div class="card-title">
                    <h2>'. $row['title'].'</h2>
                  </div>
                  <div class="card-text" style="text-align:justify">
                    <p>'. $row['description'].'</p>
                  </div>
                  <div class="card-footer bg-white border-0 text-center">
                  <form method="get" action="properties-read-more.php" class="mx-auto">
                    <button type="submit" name="id" value="'. $row["id"] .'" class="btn btn-lg btn-outline-primary mt-auto">Read More</button>
                  </form>
                </div>
                </div>
              </div>
            </div>';
          }
        } else {
          echo "0 results";
        }
        $conn->close();
      ?>
    </div>
  </div>
    
  <!--footer-->
  <footer class="bg-dark p-2 text-center">
    <div class="container">
      <p class="text-white">All Right Reserved &copy;THE HILTON AGENCY</p>
    </div>
  </footer>
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