<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiltonagency";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $title = $_POST["property_name"];
  $location = $_POST["location"];
  $address = $_POST["address"];
  $bedrooms = $_POST["bedrooms"];
  $bathrooms = $_POST["bathrooms"];
  $size = $_POST["size"];
  $price = $_POST["price"]; 
  $description = $_POST["description"];
  $main_image = uploadFile($_FILES["main_image"]);

  $sql = "INSERT INTO property_description (name,location,address,beds,baths,size,price,description,main_image)
  VALUES ('$title','$location','$address','$bedrooms','$bathrooms','$size','$price','$description','$main_image')";
  if ($conn->query($sql) === TRUE) {
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
 

  $stmt = $conn->prepare("INSERT INTO property_article (image1, image2, image3, image4, image5) VALUES (?, ?, ?, ?, ?)");

  $stmt->bind_param("sssss", $image1, $image2, $image3, $image4, $image5);
  
  $image1 = uploadFile($_FILES["image1"]);
  $image2 = uploadFile($_FILES["image2"]);
  $image3 = uploadFile($_FILES["image3"]);
  $image4 = uploadFile($_FILES["image4"]);
  $image5 = uploadFile($_FILES["image5"]);
  
  $stmt->execute();
  header("Location: addproperty.php");
  $stmt->close();
  $conn->close();
  
  function uploadFile($file) {
    $target_dir = "images/";
    $target_file = $target_dir . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $target_file);
    return $target_file;
  }

?>
