<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css?<?php echo time();?>">
    <link rel="stylesheet" href="css/login.css?<?php echo time();?>">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form method="get" action="logprocess.php" autocomplete="off">
      <h1 class="h2 mb-4 fw-normal">The Hilton Agency</h1>
      <h1 class="h3 mb-4 fw-normal">Log In</h1>
      <!--Input Fields-->
      <div class="form-floating">
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mt-3">
        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>    
      <p class="mt-3 mb-2 text-primary">Not a member?<a href="register.php" class="mt-5 mb-2">   Register Now!</a></p>
      <button class="btn" type="submit">Sign in</button>
      <p class="mt-4 mb-3 text-primary">All Right Reserved &copy;THE HILTON AGENCY</p>
      <div class="form-floating mt-3">
        <?php
          if (isset($_SESSION["loginError"])) {
            echo "<p style='color:red'> Invalid input! </p>";
          }   
          unset($_SESSION["loginError"]);      
        ?>
      </div>
    </form>
  </main>
</body>
</html>