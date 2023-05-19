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
  <link rel="stylesheet" href="css/register.css?<?php echo time();?>">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="post" action="registerprocess.php" autocomplete="off">
          <img class="mb-4" src="images/logo.png" alt="logo" width="102" height="87">
          <h1 class="h2 mb-4 fw-normal text-light">The Hilton Agency</h1>
          <h1 class="h3 mb-4 fw-normal text-light">Register</h1>
      
          <!--Input Fields-->
          <div class="form-floating">
            <input class="form-control bg-dark border-0 text-light" type="text" class="form-control bg-darker border-0 text-light" name="username" id="floatingInput" placeholder="username">
            <label for="floatingInput" class="text-light">Username</label>
          </div>
          <div class="form-floating mt-3">
            <input class="form-control bg-dark border-0 text-light" type="email" class="form-control bg-darker border-0 text-light" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" class="text-light">Email address</label>
          </div>
          <div class="form-floating mt-3">
            <input class="form-control bg-dark border-0 text-light" type="password" class="form-control bg-darker border-0 text-light" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" class="text-light">Password</label>
            <span class="eye-icon"><i class="eye fa-solid fa-eye" style="color: white;"></i></span>
          </div>
          <div class="form-floating mt-3 mb-3">
            <input class="form-control bg-dark border-0 text-light" type="password" class="form-control bg-darker border-0 text-light" name="confirmPassword" id="floatingPassword" placeholder="Confirm Password">
            <label for="floatingPassword" class="text-light">Confirm Password</label>
            <span class="eye-icon"><i class="eye fa-solid fa-eye" style="color: white;"></i></span>
          </div>

          <p class="mt-3 mb-2 text-light">Already a member?<a href="login.php" class="mt-5 mb-2 text-light">   Log In Now!</a></p>
      
          <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
          <p class="mt-4 mb-3 text-light">All Right Reserved &copy;THE HILTON AGENCY</p>

          <div class="form-floating mt-3">
            <?php
                if(isset($_SESSION["registerErrors"])) {
                    for($i = 0; $i < count($_SESSION["registerErrors"]); $i++) {
                        $currentError = $_SESSION["registerErrors"][$i];
                        echo "<p style='color: red'>{$currentError}</p>";
                    }
                }

                unset($_SESSION["registerErrors"]);     
            ?>
          </div>
        </form>
        <script>
          // Select all password inputs
          const passwordInputs = document.querySelectorAll('input[type="password"]');

          // Loop through each password input
          passwordInputs.forEach(input => {
            // Select the container element for this input
            const container = input.closest('.form-floating');
            
            // Select the eye icon element for this input
            const eyeIcon = container.querySelector('.eye-icon');

            // Add click event listener to the eye icon for this input
            eyeIcon.addEventListener('click', (event) => {
              const eye = eyeIcon.querySelector('i');
              
              if (input.type === 'password') {
                input.type = 'text';
                eye.classList.remove('fa-eye');
                eye.classList.add('fa-eye-slash');
              } else {
                input.type = 'password';
                eye.classList.remove('fa-eye-slash');
                eye.classList.add('fa-eye');
              }
              
              input.focus();
            });
          });
        </script>
    </main>

    <script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>