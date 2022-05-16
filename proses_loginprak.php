<?php
session_start();

include "koneksiprak.php";

$username = $_POST["username"];
$password = $_POST["password"];


$sql = "select * from user where username='$username' and password='$password' limit 1";
$hasil = mysqli_query ($conn,$sql);
$jumlah = mysqli_num_rows($hasil);


    if ($jumlah>0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["username"]=$row["username"];
        $_SESSION["password"]=$row["password"];

    

        header("Location:tabelsampah.php");
        
    }else {
        echo "Email atau password salah <br><a href='index2.php'>Kembali</a>";
    }
?>
