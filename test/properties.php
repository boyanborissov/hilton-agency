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
  
    <!--Properties-->
  <div class="container">
    <div class="title">
      <h1>Our Properties</h1>
    <hr>

    <!-- <input type="text" class="form-control" id="search" placeholder="Search..." aria-describedby="button-addon2"><br> -->

    <!--Search Bar -->
    <div class="input-group mt-4">
      <input type="text" class="form-control" id="search" placeholder="Search..." aria-describedby="button-addon2">
      <!--Filter Button -->
      <button type="button" class="btn bg-primary btn-lg text-light" id="prime" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Filter</button>
      <!--Filter Button -->
    </div>

    <form method='get' action="filter.php" class="pt-4 pb-2 d-flex justify-content-center h4">
      <!--Filter-->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <section class="col-12" id="fs_price_body">
        <div>
          <span class="heading">Price</span>
          <label class="form-label" for="rangePrice"></label>
          <div class="range">
            <input type="range" class="form-range" min="85000000" max="265000000" step="10000000" id="slider"/>
            <p class="text-center"><span id="price"></span> million$</p>
          </div>
            <div>
              <ul>
                <li>85 million$</li>
                <li>265 million$</li>
              </ul>
            </div>
          </div>
          </section>
            <div class="land mt-3">
              <span class="heading">Size</span>
              <div class="dropdown">
              <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Min Size
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">10000</a></li>
                    <li><a class="dropdown-item" href="#">15000</a></li>
                    <li><a class="dropdown-item" href="#">20000</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Max Size
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">30000</a></li>
                    <li><a class="dropdown-item" href="#">50000</a></li>
                    <li><a class="dropdown-item" href="#">110000</a></li>
                  </ul>
                </div>
              </div>
            <span class="heading">Location</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Beverly Hills" name="bevHillsCheckbox" id="Beverly Hills" <?php if(isset($_SESSION["isBevHillsChecked"])) { echo $_SESSION["isBevHillsChecked"]; } unset($_SESSION["isBevHillsChecked"]);?>>
                <label class="form-check-label" for="Beverly Hills">Beverly Hills</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bel Air" name="belAirCheckbox" id="Bel Air" <?php if(isset($_SESSION["isBelAirChecked"])) { echo $_SESSION["isBelAirChecked"]; } unset($_SESSION["isBelAirChecked"]);?>>
                <label class="form-check-label" for="Bel Air">Bel Air</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Hollmbly Hills" name="hollHillsCheckbox" id="Hollmbly Hills" <?php if(isset($_SESSION["isHollHillsChecked"])) { echo $_SESSION["isHollHillsChecked"]; } unset($_SESSION["isHollHillsChecked"]);?>>
                <label class="form-check-label" for="Holmbly Hills">Hollmbly Hills</label>
              </div>
            </div>
            <span class="heading">Beds</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="oneBedCheckbox" id="One" <?php if(isset($_SESSION["isOneBedChecked"])) { echo $_SESSION["isOneBedChecked"]; } unset($_SESSION["isOneBedChecked"]);?>>
                <label class="form-check-label" for="One">1</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" name="twoBedCheckbox" id="Two" <?php if(isset($_SESSION["isTwoBedChecked"])) { echo $_SESSION["isTwoBedChecked"]; } unset($_SESSION["isTwoBedChecked"]);?>>
                <label class="form-check-label" for="Two">2</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" name="threeBedCheckbox" id="Three" <?php if(isset($_SESSION["isThreeBedChecked"])) { echo $_SESSION["isThreeBedChecked"]; } unset($_SESSION["isThreeBedChecked"]);?>>
                <label class="form-check-label" for="Three">3</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" name="fourBedCheckbox" id="Four" <?php if(isset($_SESSION["isFourBedChecked"])) { echo $_SESSION["isFourBedChecked"]; } unset($_SESSION["isFourBedChecked"]);?>>
                <label class="form-check-label" for="Four">4</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="5" name="fiveBedCheckbox" id="Five" <?php if(isset($_SESSION["isFiveBedChecked"])) { echo $_SESSION["isFiveBedChecked"]; } unset($_SESSION["isFiveBedChecked"]);?>>
                <label class="form-check-label" for="Five">5+</label>
              </div>
            </div>

            <span class="heading">Bathrooms</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="oneBathroomCheckbox" id="One" <?php if(isset($_SESSION["isOneBathroomChecked"])) { echo $_SESSION["isOneBathroomChecked"]; } unset($_SESSION["isOneBathroomChecked"]);?>>
                <label class="form-check-label" for="One">1</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" name="twoBathroomCheckbox" id="Two" <?php if(isset($_SESSION["isTwoBathroomChecked"])) { echo $_SESSION["isTwoBathroomChecked"]; } unset($_SESSION["isTwoBathroomChecked"]);?>>
                <label class="form-check-label" for="Two">2</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" name="threeBathroomCheckbox" id="Three" <?php if(isset($_SESSION["isThreeBathroomChecked"])) { echo $_SESSION["isThreeBathroomChecked"]; } unset($_SESSION["isThreeBathroomChecked"]);?>>
                <label class="form-check-label" for="Three">3</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" name="fourBathroomCheckbox" id="Four" <?php if(isset($_SESSION["isFourBathroomChecked"])) { echo $_SESSION["isFourBathroomChecked"]; } unset($_SESSION["isFourBathroomChecked"]);?>>
                <label class="form-check-label" for="Four">4</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="5" name="fiveBathroomCheckbox" id="Five" <?php if(isset($_SESSION["isFiveBathroomChecked"])) { echo $_SESSION["isFiveBathroomChecked"]; } unset($_SESSION["isFiveBathroomChecked"]);?>>
                <label class="form-check-label" for="Five">5+</label>
              </div>
            </div>
            <span class="heading">Others</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Indoor Pool">
                <label class="form-check-label" for="Indoor Pool">Indoor Pool</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Outdoor Pool">
                <label class="form-check-label" for="Outdoor Pool">Outdoor Pool</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Sauna">
                <label class="form-check-label" for="Sauna">Sauna</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Massage room">
                <label class="form-check-label" for="Massage room">Massage room</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Wine cellar">
                <label class="form-check-label" for="Wine cellar">Wine cellar</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Cinema">
                <label class="form-check-label" for="Cinema">Cinema</label>
              </div>
              <div class="form-check">
                <button type="submit" class="btn bg-primary btn-lg text-light">Filter</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    </div>
    <div class="row">
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hiltonagency";
        $sql = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_SESSION["sqlFilter"])) {
          $sql = $_SESSION["sqlFilter"];
          unset($_SESSION["sqlFilter"]);          
        } else {
          $sql = "SELECT * FROM property_description";
        }
// <div class="card-text" style="text-align:justify">
//                     <p>'. $row['description'].'</p>
//                   </div>
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo '
            <div class="col-lg-4 col-md-6 col-sm-12 mb-5" id = "property">
              <div class="card mb-5 shadow-sm h-100">

                <img src="'. $row['main_image'].'" class="img-fluid" />
        
                <div class="card-body">
                  <div class="card-title">
                    <h2 class ="text-center fw-bolder fs-1">'. $row['name'].'</h2>
                  </div>
                  <h4 class="fs-4 mb-1 text-center">'. $row["address"] .' </h4>
                  <p class="text-muted text-center mb-2 ">' . $row["beds"] . ' beds <span>|</span> ' . $row["baths"] . ' baths <span>|</span> ' . $row["size"] . ' sq.ft</p>
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
    <script>
      const searchInput = document.getElementById("search");
      searchInput.addEventListener("input", searchCards);

      function searchCards() {
        const input = searchInput.value.toLowerCase();
        const cards = document.querySelectorAll("#property .card");

        cards.forEach((card) => {
          const name = card.querySelector("h2").textContent.toLowerCase();

          if (name.includes(input)) {
            card.parentElement.className = "col-lg-4 col-md-6 col-sm-12 mb-5";
          } else {
            card.parentElement.className = "d-none";
          }
        });
      }
      searchCards();

      let slider = document.getElementById("slider");
      let price = document.getElementById("price");
      price.innerHTML = slider.value;
      slider.onchange = function(event){
        price.innerHTML = this.value;
      }


const express = require("express");
const mysql = require("mysql");

const app = express();

const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "hiltonagency"
});

db.connect(err => {
  if (err) throw err;
  console.log("Connected to database");
});

function filterContent() {
  const minSizeDropdown = document.getElementById("minSizeDropdown");
  const maxSizeDropdown = document.getElementById("maxSizeDropdown");

  const minSize = parseInt(minSizeDropdown.querySelector(".active").textContent);
  const maxSize = parseInt(maxSizeDropdown.querySelector(".active").textContent);

  // Query the database to retrieve a list of items based on the selected values
  const sql = `SELECT * FROM properties WHERE size BETWEEN ${minSize} AND ${maxSize}`;

  db.query(sql, (err, results) => {
    if (err) throw err;

    else{
      card.parentElement.className = "col-lg-4 col-md-6 col-sm-12 mb-5";

    }
    // Do something with the results, such as displaying them in the #filteredContent element
  });
}

// Add event listeners to the dropdown menus to update the filtered content
const dropdowns = document.querySelectorAll(".dropdown-menu");

dropdowns.forEach(dropdown => {
  dropdown.addEventListener("click", filterContent);
});

app.listen(3000, () => {
  console.log("Server listening on port 3000");
});
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>