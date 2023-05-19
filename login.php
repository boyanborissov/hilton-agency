<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/register.css?<?php echo time();?>">
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="post" action="logprocess.php" autocomplete="off">
          <img class="mb-4" src="images/logo.png" alt="logo" width="102" height="87">

          <h1 class="h2 mb-4 fw-normal text-light">The Hilton Agency</h1>

          <h1 class="h3 mb-4 fw-normal text-light">Log In</h1>
      
          <!--Input Fields-->
          <div class="form-floating text-light">
            <input class="form-control bg-dark border-0 text-light" type="email" class="form-control bg-darker border-0 text-light" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" class="text-light">Email address</label>
          </div>
          <div class="form-floating mt-3">
            <input class="form-control bg-dark border-0 text-light" type="password" class="form-control bg-darker border-0 text-light" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" class="text-light">Password</label>
            <!-- <span class="password-toggle-icon"><i class="eye fa-solid fa-eye" style="color: white;"></i></span> -->
          </div>
          
          <p class="mt-3 mb-2 text-light">Not a member?<a href="register.php" class="mt-5 mb-2 text-light">   Register Now!</a></p>
      
          <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Sign in</button>
          <p class="mt-4 mb-3 text-light">All Right Reserved &copy;THE HILTON AGENCY</p>

          <div class="form-floating mt-3">
            <?php
                if (isset($_SESSION["loginError"])) {
                  echo "<p style='color:red'> Invalid input! </p>";
                }   
                unset($_SESSION["loginError"]);      
            ?>
          </div>
        </form>
        <script>
          const passwordInput = document.getElementById('floatingPassword');
          const passwordToggleIcon = document.querySelector('.password-toggle-icon');

          passwordToggleIcon.addEventListener('mousedown', () => {
              passwordInput.type = 'text';
          });

          passwordToggleIcon.addEventListener('mouseup', () => {
              passwordInput.type = 'password';
          });

          passwordToggleIcon.addEventListener('touchstart', () => {
              passwordInput.type = 'text';
          });

          passwordToggleIcon.addEventListener('touchend', () => {
              passwordInput.type = 'password';
          });

        </script>
    </main>
  <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>