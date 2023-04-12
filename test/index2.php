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
  <link rel="stylesheet" href="google.scss?<?php echo time();?>">
</head>

<body>
  <form method="post" action="">
  <div class="range">
            <input type="range" class="form-range" min="85" max="265" step="10" value="175" id="slider"/>
            <p class="text-center"><span id="price"></span> million$</p>
          </div>
            <div>
              <ul>
                <li>85 million$</li>
                <li>265 million$</li>
              </ul>
            </div>
    <button type="submit" name="submit">Search</button>
  </form>

  <?php
  // connect to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hiltonagency";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // check if form submitted
  if (isset($_POST['submit'])) {
    $min_price = 85000000;
    $priceRange = $_GET['slider'];

    // query database
    $sql = "SELECT * FROM properties_description WHERE price BETWEEN $min_price AND $max_price";
    $result = mysqli_query($conn, $sql);

    // display results
  }
  ?>

  <script>
    let slider = document.getElementById("slider");
    let price = document.getElementById("price");
    price.innerHTML = slider.value;
    slider.onchange = function(event){
      price.innerHTML = this.value;
    }

    // var range = document.getElementById("slider");
    // var minValue = range.min;
   

  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>