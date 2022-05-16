<?php
include "koneksi.php";
if(isset($_SESSION['username'])) {
  echo"<script> alert('Anda Sudah Login');</script>";
  echo"<script> location='mainmenu_home.php'; </script>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style2.css" rel="stylesheet">
    <title>L O G I N</title>
    <link rel="shortcut icon" type="image/png" href="images/logo.png">
  </head>
  <body>
      <a href="Halamanawal3.php"><img class="logo" src="images/logo.png" alt="logo" ></a>
      <div class="center">
          <br>
          <h1>Login</h1> 
            <form method="post" action="koneksi.php?proses_login">
                <div class="txt_field">
                    <input placeholder="Username" type="text" name="username" required>
                </div>
                <div class="txt_field">
                    <input placeholder="Password" type="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-info">Login</button><br>
                <dif class="signup_link">
                    Belum Punya Akun ? <a href="form.php">Daftar</a>
                </dif>
                <br>
                
                <dif class="lupapassword">
                </dif>
            </form> 
      </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  
</html>