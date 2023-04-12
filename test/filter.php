<?php 
session_start();

$query = "SELECT * FROM property_description";
$conditions = array();

if (isset($_GET['bevHillsCheckbox'])) {
$conditions[] = "location='".$_GET['bevHillsCheckbox']."'";
$_SESSION['isBevHillsChecked'] = "checked";
}

if (isset($_GET['belAirCheckbox'])) {
$conditions[] = "location='".$_GET['belAirCheckbox']."'";
$_SESSION['isBelAirChecked'] = "checked";
}

if (isset($_GET['hollHillsCheckbox'])) {
$conditions[] = "location='".$_GET['hollHillsCheckbox']."'";
$_SESSION['isHollHillsChecked'] = "checked";
}

if (isset($_POST['submit'])) {
    $min_price = 85000000;
    $priceRange = $_GET['slider'];

    // query database
    $sql = "SELECT * FROM properties_description WHERE price BETWEEN $min_price AND $max_price";
    $result = mysqli_query($conn, $sql);

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
  }

$sql = $query;
if (count($conditions) > 0) {
$sql .= " WHERE " . implode(' OR ', $conditions);
}

$_SESSION["sqlFilter"] = $sql . " ORDER BY location";
echo $_SESSION["sqlFilter"];

header('Location: properties.php');
?>