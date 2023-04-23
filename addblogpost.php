<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Hilton Agency</title>
  <link rel="icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/addblogpost.css?<?php echo time();?>">
<body>
  <!--Navbar-->
<?php include("navigation.php");?>

<div class="container my-5 pt-4">
<form action="addblogpostprocess.php" method="post" enctype='multipart/form-data'>
  <label for="bloger_name">Bloger name:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="bloger_name" name="bloger_name" placeholder="Bloger name"><br><br>

  <label for="title">Blog title:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="title" name="title" placeholder="Blog title"><br><br>
  
  <label for="blog_date">Blog date:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="blog_date" name="blog_date" placeholder="Blog date"><br><br>

  <label for="month" id="mnt">Blog month:</label><br>
  <label for="month">Select a month:</label>
  <select id="month" name="month">
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
  </select><br><br>

  <label for="blog_year">Blog year:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="blog_year" name="blog_year" placeholder="Blog year"><br><br>

<div class="imag">
  <label for="main_image" id="img">Main image:</label>
  <input type="file" id="main_image" name="main_image"><br><br>
</div>
  <label for="description">Description:</label>
  <textarea class="form-control bg-dark border-0 text-light w-50 text-center" id="description" name="description" placeholder="Blog description"></textarea><br><br>
  
  <button class="btn text-light" type="submit">Submit</button><br>

</form>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
  <script>
        const nav2 = document.querySelector(".navbar");

        window.addEventListener("scroll", () => {
            if(window.scrollY >= 50){
                nav2.classList.add('bg-dark');
            }else if(window.scrollY < 50){
                nav2.classList.remove('bg-dark');
            }
        })
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>