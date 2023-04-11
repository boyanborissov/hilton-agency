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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/viewusers.css?<?php echo time();?>">
</head>
<body>
<?php include('navigation.php'); ?>
<!--Table-->
<div class="container my5 pt-5">
      <h2 class="pt-4 text-light">User Table</h2>
      <a class="btn btn-primary" href="addUser.php" role="button">New User</a>
      <br>
      <table class="table pt-3">
        <thead class="text-val-red">
            <tr class='border-dark-gray'>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php
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

              $sql = "SELECT * FROM users";
              $result = $conn->query($sql);
              
              if (!$result) {
                die("Invalid query: " . $conn->error);
              }

              while($row = $result -> fetch_assoc()) {
                echo "
                <tr class='border-dark-gray'>
                    <td>$row[id]</td>
                    <td>$row[username]</td>
                    <td>$row[email]</td>
                    <td>$row[password]</td>
                    <td>$row[role]</td>
                    <td>
                      <div class='form-check form-check-inline'>
                        <form method='get' action='editUser.php'>
                          <button type='submit' name='userID' value='$row[id]' class='btn btn-primary btn-sm'>Edit</button>
                        </form>
                      </div>
                      <div class='form-check form-check-inline'>
                        <form method='get' action='delUser.php'>
                          <button type='submit' name='userID' value='$row[id]' class='btn btn-primary btn-sm'>Delete</button>
                        </form>
                      </div>
                    </td>
                </tr> 
                ";
              }
            ?>               
        </tbody>
      </table>
    </div>
    <!--Table-->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8831516dec.js" crossorigin="anonymous"></script>
</body>
</html>