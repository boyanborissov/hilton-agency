<?php 
session_start();

$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];
$role = $_GET["role"];

$addUserErrors = array();

if (empty($username) || empty($email) || empty($password) || empty($role)){
    $addUserErrors[] = "All fields must be filled!";
}

if (count($addUserErrors) != 0) {
    unset($_SESSION["addUserErrors"]);
    $_SESSION["addUserErrors"] = $addUserErrors;
    header("Location: adduser.php");
    die();
} else {
    unset($_SESSION["addUserSuccess"]);
    $_SESSION["addUserSuccess"] = "User added successfully!";
    
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "hiltonagency";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO users (`username`,`email`,`password`,`role`) VALUES (?,?,?,?)";

        $stmt= $conn->prepare($sql);
        $stmt->execute([$username, $email, $password, $role]);

        header("Location: adduser.php");
        die();  
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }    
}  

?>