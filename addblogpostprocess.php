<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiltonagency";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $blogger = $_POST["bloger_name"];
  $main_image = uploadFile($_FILES["main_image"]);
  $title = $_POST["title"];
  $date = $_POST["blog_date"];  
  $month = $_POST["month"];
  $year = $_POST["blog_year"];
  $description = $_POST["description"];

  $combineddate = "Posted on " . $date . " " . $month . ", " . $year . " by " . $blogger ;

  $sql = "INSERT INTO blog_article (image,title,date,description)
  VALUES ('$main_image','$title','$combineddate','$description')";
  if (mysqli_query($conn, $sql)) {
  } else {
    echo "Error inserting record into table1: " . mysqli_error($conn);
  }
  

  $id = mysqli_insert_id($conn);
  $sql1 = "INSERT INTO blog_card(image, title) VALUES ('$main_image','$title')";

  if (mysqli_query($conn, $sql1)) {
  } else {
    echo "Error inserting record into table2: " . mysqli_error($conn);
  }
  header("Location: addblogpost.php");
  $conn->close();

  function uploadFile($file) {
    $target_dir = "images/";
    $target_file = $target_dir . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $target_file);
    return $target_file;
  }

?>
