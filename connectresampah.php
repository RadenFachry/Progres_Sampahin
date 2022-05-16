<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "resampah";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (isset($_POST['btnregister'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password1']); 
    $password2 = md5($_POST['password2']);
    $nomorhp = $_POST['nomorhp'];
    $tanggallahir = $_POST['tanggallahir'];
    $domisili = $_POST['domisili'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $sql = "INSERT INTO `form`(`username`,`email`,`password`,`password2`,`nomorhp`,`tanggallahir`,`domisili`,`jeniskelamin`) VALUES ('$username','$email','$password','$password2','$nomorhp','$tanggallahir','$domisili','$jeniskelamin')";
    $result = $conn->query($sql);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Username</th>
                <th>email</th>
                <th>password1</th>
                <th>password2</th>
                <th>nomorhp</th>
                <th>tanggallahir</th>
                <th>domisili</th>
                <th>jeniskelamis</th>
            </tr>
        </thead>
        <?php
            $sql="SELECT * FROM `form`";
            $result = $conn->query($sql);
        ?>
        <tbody>
            <?php foreach ($result as $key): ?>
                <tr>
                    <td><?= $key['username'] ?></td>
                    <td><?= $key['email'] ?></td>
                    <td><?= $key['password'] ?></td>
                    <td><?= $key['password2'] ?></td>
                    <td><?= $key['nomorhp'] ?></td>
                    <td><?= $key['tanggallahir'] ?></td>
                    <td><?= $key['domisili'] ?></td>
                    <td><?= $key['jeniskelamin'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>    
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>