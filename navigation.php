<nav class="navbar fixed-top navbar-expand-xxl navbar-dark">
  <div class="container-fluid">
    <a href="#" class="navbar-brand">
      <img src="images/logo.png" height="50"/>
    </a>
    <a class="navbar-brand fw-bolder" href="home.php">THE HILTON AGENCY</a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
        <a href="home.php" class="nav-item nav-link">Home</a>
        <a href="aboutus.php" class="nav-item nav-link">About us</a>
        <a href="properties.php" class="nav-item nav-link">Properties</a>
        <a href="agents.php" class="nav-item nav-link">Our agents</a>
        <a href="blogpage.php" class="nav-item nav-link">Blog</a>
        <a href="contact_form.php" class="nav-item nav-link">Contact us</a>
        <div id='google_translate_element'>
        <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({

            pageLanguage: 'en,bg',

            includedLanguages:'en,bg', 

            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL

            }, 'google_translate_element');
}
        </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
      </div>
      <?php 
        if(isset($_SESSION["loggedUser"]) && isset($_SESSION["loggedUserRole"])) {
          if ($_SESSION["loggedUserRole"] == "admin") {
            echo '
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
              <ul class="dropdown-menu dropdown-menu-end bg-darker">
                <li><a class="dropdown-item text-light" href="viewprofile.php">View Profile</a></li>
                <li><a class="dropdown-item text-light" href="viewusers.php">View Users</a></li>
                <li><a class="dropdown-item text-light" href="adduser.php">Add User</a></li>
                <li><a class="dropdown-item text-light" href="addproperty.php">Add Property</a></li>
                <li><a class="dropdown-item text-light" href="addblogpost.php">Add Blog Post</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-light" href="logout.php">Log Out</a></li>
              </ul>
            </div>';
          } else {
            echo '
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">'. $_SESSION['loggedUser'] .'</button>
              <ul class="dropdown-menu dropdown-menu-end bg-darker">
                <li><a class="dropdown-item text-light" href="viewProfile.php">View Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-light" href="logout.php">Log Out</a></li>
              </ul>
            </div>';
          }
        } else {
          echo "
          <a href='login.php' class='nav-item nav-link'>Log In</a>
          <a href='register.php' class='nav-item nav-link'>Register</a>";
        }
      ?>
    </div>
  </div>
</nav>