<?php
    session_start();

    $regName = $_POST["username"];
    $regMail = $_POST["email"];
    $regPass = $_POST["password"];
    $regConfPass = $_POST["confirmPassword"];

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

            $hashed_password = password_hash($regPass, PASSWORD_DEFAULT);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (`username`, `email`, `password`, `role`) VALUES (?,?,?,?)";

            $stmt= $conn->prepare($sql);
            $stmt->execute([$regName, $regMail, $hashed_password, "user"]);
            header("Location: login.php");
            die();
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } 
?>