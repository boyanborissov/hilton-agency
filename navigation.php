<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-red">
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
        <a href="index.php" class="nav-item nav-link">Properties</a>
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
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
      </div>
      <?php
      if (isset($_SESSION['username'])) {
        echo '
        <div class="navbar-nav ms-auto">
          <a class="nav-item nav-link" href="#">'. $_SESSION['username'] .'</a>
          <a class="nav-item nav-link" href="logout.php">Log Out</a>
        </div>';
      } else {
        echo '
        <div class="navbar-nav ms-auto">
          <a class="nav-item nav-link" href="login.php">Log In</a>
          <a class="nav-item nav-link" href="register.php">Register</a>
        </div>';
      }
    ?>
    </div>
  </div>
</nav>