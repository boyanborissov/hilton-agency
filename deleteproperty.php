<?php
$userID = $_GET["userID"];

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hiltonagency";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM property_description WHERE id=$userID";
    $sql1 = "DELETE FROM property_article WHERE id=$userID";


    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($sql1);


    header('Location: viewproperties.php');
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

$conn = null;
?>