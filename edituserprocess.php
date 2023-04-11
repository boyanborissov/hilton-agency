<?php 
session_start();

$userID = $_GET["userID"];
$username = $_GET["username"];
$email = $_GET["email"];
$password = $_GET["password"];
$role = $_GET["role"];

$addUserErrors = array();

if (empty($username) || empty($email) || empty($password) || empty($role)){
    $addUserErrors[] = "All fields must be filled!";
}

if (count($addUserErrors) != 0) {
    unset($_SESSION["editUserErrors"]);
    $_SESSION["editUserErrors"] = $addUserErrors;
    header("Location: editUser.php");
    die();
} else {
    unset($_SESSION["editUserSuccess"]);
    $_SESSION["editUserSuccess"] = "User edited successfully!";
    
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "hiltonagency";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $dbUsername, $dbPassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE users SET username='$username', email='$email', password='$password', role='$role' WHERE id=$userID";

        $conn->query($sql);

        $_SESSION['editUserName'] = $username;
        $_SESSION['editEmail'] = $email;
        $_SESSION['editPassword'] = $password;
        $_SESSION['editRole'] = $role;
        
        header("Location: edituser.php");
        die();  
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }    
}  

?>