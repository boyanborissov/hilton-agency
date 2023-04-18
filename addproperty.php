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
  <link rel="stylesheet" href="css/addproperty.css?<?php echo time();?>">
<body>
  <!--Navbar-->
<?php include("navigation.php");?>

<div class="container my-5 pt-4 ">
<form action="addpropertyprocess.php" method="post" enctype='multipart/form-data'>
<div class="form-group">
  <label for="property_name">Property name:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="property_name" name="property_name" placeholder="Property name"><br><br>
  </div>

  <div class="form-group">
  <label for="location">Property neighbourhood:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="location" name="location" placeholder="Property neighbourhood"><br><br>
  </div>

  <div class="form-group">
  <label for="address">Property address:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="address" name="address" placeholder="Property address"><br><br>
  </div>

  <div class="form-group">
  <label for="bedrooms">Property bedrooms:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="number" name="bedrooms" id="bedrooms" placeholder="Property bedrooms"><br><br>
  </div>

  <div class="form-group">
  <label for="bathrooms">Property bathrooms:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="number" name="bathrooms" id="bathrooms" placeholder="Property bathrooms"><br><br>
  </div>

  <div class="form-group">
  <label for="size">Property size:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="size" name="size" placeholder="Property size"><br><br>
  </div>

  <div class="form-group">
  <label for="price">Property price:</label>
  <input class="form-control bg-dark border-0 text-light w-50 text-center" type="text" id="price" name="price" placeholder="Property price"><br><br>
  </div>

  <div class="form-group">
  <label for="description">Description:</label>
  <textarea class="form-control bg-dark border-0 text-light w-50 text-center" id="description" name="description" placeholder="Property description"></textarea><br><br>
  </div>

  <div class="form-group">
  <label for="main_image">Main image:</label>
  <input type="file" id="main_image" name="main_image"><br><br>
  </div>

  <div class="form-group">
  <label for="image1">Image 1:</label>
  <input type="file" id="image1" name="image1"><br><br>
  </div>

  <div class="form-group">
  <label for="image2">Image 2:</label>
  <input type="file" id="image2" name="image2"><br><br>
  </div>

  <div class="form-group">
  <label for="image3">Image 3:</label>
  <input type="file" id="image3" name="image3"><br><br>
  </div>

  <div class="form-group">
  <label for="image4">Image 4:</label>
  <input type="file" id="image4" name="image4"><br><br>
  </div>

  <div class="form-group">
  <label for="image4">Image 5:</label>
  <input type="file" id="image5" name="image5"><br><br>
  </div>

  <button class="btn" type="submit">Submit</button><br>
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