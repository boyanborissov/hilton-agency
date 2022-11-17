<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="icon" type="image/x-icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="get" action="registerprocess.php" autocomplete="off">
          <h1 class="h2 mb-4 fw-normal">THE HILTON AGENCY</h1>
          <h1 class="h3 mb-4 fw-normal">Register</h1>
      
          <!--Input Fields-->
          <div class="form-floating">
            <input type="text" class="form-control" name="username" id="floatingInput" placeholder="username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mt-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mt-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mt-3">
            <input type="password" class="form-control" name="confirmPassword" id="floatingPassword" placeholder="Confirm Password">
            <label for="floatingPassword">Confirm Password</label>
          </div>
          
          <p class="mt-3 mb-2 text-primary">Already a member?<a href="login.php" class="mt-5 mb-2 text-val-red">   Log In Now!</a></p>
      
          <button class="btn" type="submit">Register</button>
          <p class="mt-4 mb-3 text-primary">All Right Reserved &copy;THE HILTON AGENCY</p>

          <div class="form-floating mt-3">
            <?php
                if(isset($_SESSION["registerErrors"])) {
                    for($i = 0; $i < count($_SESSION["registerErrors"]); $i++) {
                        $currentError = $_SESSION["registerErrors"][$i];
                        echo "<p style='color: red'>" . $currentError . "</p>";
                    }
                }

                unset($_SESSION["registerErrors"]);     
            ?>
          </div>
        </form>
    </main>
</body>
</body>
</html>