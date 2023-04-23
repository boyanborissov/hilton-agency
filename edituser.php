<?php 
session_start();
$path = basename(__FILE__, '.php');
$userID = $_GET['userID'];
$_SESSION['editUserID'] = $userID;
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hiltonagency";
              
//Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE id='$userID'";
$result = $conn->query($sql);

if (!$result) {
  die("Invalid query: " . $conn->error);
}

while($row = $result -> fetch_assoc()) {
  $_SESSION['editUserName'] = $row['username'];
  $_SESSION['editEmail'] = $row['email'];
  $_SESSION['editPassword'] = $row['password'];
  $_SESSION['editRole'] = $row['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/edituser.css?<?php echo time();?>">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
  <main>
    <!--Navbar-->
    <?php include('navigation.php'); ?>
    <!--Navbar-->

    <!--Form-->
    <div class="container my-5 pt-4">
       <h2 class="text-light">Edit User</h2>
       <form method="get" action="editUserProcess.php">
          <input type="hidden" name='userID' value="<?php echo $_SESSION["editUserID"]?>">
          <!--Username Input-->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-light">Username</label>
            <div class="col-sm-6"> 
                <input type="text" class="form-control bg-dark border-0 text-light" name="username" value="<?php echo $_SESSION["editUserName"]?>">
            </div>
          </div>
          <!--Username Input-->

          <!--Email Input-->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-light">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control bg-dark border-0 text-light" name="email" value="<?php echo $_SESSION["editEmail"]?>">
            </div>
          </div>
          <!--Email Input-->

          <!--Password Input-->  
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-light">Password</label>
            <div class="col-sm-6">
                <input type="text" class="form-control bg-dark border-0 text-light" name="password" value="<?php echo $_SESSION["editPassword"]?>">
            </div>
          </div>
          <!--Password Input-->

          <!--Role Input-->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-light">Role</label>
            <div class="col-sm-6">
              <select class="form-control bg-dark border-0 text-light" aria-label="Select role" name="role">
                <option selected>Select role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
              </select>
            </div>
          </div>
          <!--Role Input-->

          <!--Buttons-->
          <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="viewUsers.php" role="button">Cancel</a>
            </div>
          </div>
          <!--Buttons-->
       </form>

       <?php 
          if(isset($_SESSION["editUserErrors"])) {
            echo "<div class='alert alert-danger bg-val-red' role='alert'>";
            for($i = 0; $i < count($_SESSION["editUserErrors"]); $i++) {
                $currentError = $_SESSION["editUserErrors"][$i];
                echo $currentError;
            }
            echo "</div>";
          } else if (isset($_SESSION["editUserSuccess"])) {
            echo "<div class='alert alert-success bg-val-red' role='alert'>". $_SESSION["editUserSuccess"] ."</div>";
          }

          unset($_SESSION["editUserErrors"]);          
          unset($_SESSION["editUserSuccess"]);          
       ?>
    </div>
    <!--Form-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </main>
</body>
</html>