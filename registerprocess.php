<?php
    session_start();

    echo "<pre>";
    var_dump($_GET);
    echo "<pre>";

    $regName = $_GET["username"];
    $regMail = $_GET["email"];
    $regPass = $_GET["password"];
    $regConfPass = $_GET["confirmPassword"];

    $registerErrors = array();

    if (strlen($regName) < 3){
        $registerErrors[] = "Invalid username lenght!";
    }

    if ($regPass != $regConfPass) {
        $registerErrors[] = "Password mismatch!";
    }

    if (strlen($regPass) < 8){
        $registerErrors[] = "Invalid password lenght!";
    }

    if (count($registerErrors) != 0) {
        unset($_SESSION["registerErrors"]);
        $_SESSION["registerErrors"] = $registerErrors;
        header("Location: register.php");
        die();
    } else {
        $servername = "localhost";
        $dbusername = "root";
        $dbPassword = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=hiltonagency", $dbusername, $dbPassword);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $role = "user";
            $sql = "INSERT INTO users (username,email,password,role) VALUES (?,?,?,'$role')";

            $stmt= $conn->prepare($sql);
            $stmt->execute([$regName, $regMail, $regPass]);
            header("Location: login.php");
            die();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } 
?>