<?php 
session_start();
$path = basename(__FILE__, '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/adduser.css?<?php echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <main>
    <!--Navbar-->
    <?php include('navigation.php'); ?>
    <!--Navbar-->

    <!--Form-->
    <div class="container my-5 pt-4">
       <h2 class="text-light">New User</h2>
       <form method="get" action="adduserprocess.php">
          <!--Username Input-->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-light">Username</label>
            <div class="col-sm-6">
                <input type="text" class="form-control bg-dark border-0 text-light" name="username">
            </div>
          </div>
          <!--Username Input-->

          <!--Email Input-->
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-light">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control bg-dark border-0 text-light" name="email">
            </div>
          </div>
          <!--Email Input-->

          <!--Password Input-->  
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-light">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control bg-dark border-0 text-light" name="password">
            </div>
          </div>

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
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-light" href="viewUsers.php" role="button">Cancel</a>
            </div>
          </div>
          <!--Buttons-->
       </form>

       <?php 
          if(isset($_SESSION["addUserErrors"])) {
            echo "<div class='alert alert-danger bg-val-red' role='alert'>";
            for($i = 0; $i < count($_SESSION["addUserErrors"]); $i++) {
                $currentError = $_SESSION["addUserErrors"][$i];
                echo $currentError;
            }
            echo "</div>";
          } else if (isset($_SESSION["addUserSuccess"])) {
            echo "<div class='alert alert-success bg-val-red' role='alert'>". $_SESSION["addUserSuccess"] ."</div>";
          }

          unset($_SESSION["addUserErrors"]);          
          unset($_SESSION["addUserSuccess"]);          
       ?>
    </div>
    <!--Form-->

    <!--Footer-->
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
  </main>
</body>
</html>