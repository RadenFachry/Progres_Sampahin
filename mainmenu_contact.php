<?php 
include_once 'koneksi.php';
?>
<?php
$id_user =$_SESSION['username'];
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
            <link rel="shortcut icon" type="image/png" href="images/logo.png">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

        <title>sampahin</title>
        <link rel="stylesheet" href="mainmenu_contact.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="mainmenu_home.php">
                            Resampah
                        </a>
                    </li>
                    <li>
                        <a class="bi bi-house-door-fill mb-2" href="mainmenu_home.php"> Home</a>
                    </li>
                    <li>
                        <a class="bi bi-archive-fill mb-2" href="mainmenu_home_copy.php"> Pengambilan</a>
                    </li>
                    <li>
                        <a class="bi bi-clock-history mb-2" href="mainmenu_history.php"> History</a>
                    </li>
                    <li>
                        <a class="bi bi-person-lines-fill" href="#"> Contact</a>
                    </li>
                </ul>
            </div>
            <nav>
                <ul>
                    <li><a class="bi bi-door-closed-fill" href="koneksi.php?proses_logout">Logout</a>
                </ul>
            </nav>

            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container">
                                <br>
                                <div class="card-body shadow-lg mt-5">
                                    <br>
                                <center>
                                    
                                    <h1 class="bi bi-person-lines-fill" > Contact Us</h1>
                                    <br>
                                    <h4>Masih mengalami masalah dan ingin berbicara dengan kami?<br> Kami di sini untuk membantu.</h6>
                                </center>
                                <body>
                                    <div class="d-flex flex-row bd-highlight mb-3">
                                        <div class="container-fluid mt-3">
                                        <div class="d-flex flex-row bd-highlight mb-3 ">
                                            <div class="p-5 bd-highlight">
                                                <center>
                                                <div class="card" style="width: 18rem;">
                                                    <i class="bi bi-whatsapp" style="font-size: 120px;"></i>
                                                    <div class="card-body">
                                                        <h5 class="card-title">whatsapp</h5>
                                                        <p class="card-text">Chat kami dengan Whatsapp (6701202132)</p>
                                                        <a href="#" class="btn btn-primary">Kontak dengan Whatsapp</a>
                                                    </div>
                                                </div>
                                                </center>
                                            </div>
                                            <div class="p-5 bd-highlight">
                                                <center>
                                                <div class="card" style="width: 18rem;">
                                                    <i class="bi bi-envelope" style="font-size: 120px;"></i>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Email</h5>
                                                        <p class="card-text">Kontak kami dengan Email (Resampah@gamil.com) </p>
                                                        <a href="#" class="btn btn-primary">Kontak dengan Email</a>
                                                    </div>
                                                </div>
                                                </center>
                                            </div>
                                            <div class="p-5 bd-highlight">
                                                <center>
                                                <div class="card" style="width: 18rem;">
                                                    <i class="bi bi-facebook" style="font-size: 120px;"></i>
                                                    <div class="card-body">
                                                        <h5 class="card-title">Facebook</h5>
                                                        <p class="card-text">Kontak Kami dengan Facebook(Resampah Indonesia)</p>
                                                        <a href="#" class="btn btn-primary">Kontak Dengan Facebook</a>
                                                    </div>
                                                </div>
                                                </center>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </body>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    <br><br><br><br><br><br><br><br><br><br>
    <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <center>
                    <h5 class="text-uppercase">location</h5>

                    <p>
                        Di Indonesia
                        <br>
                            6701202132
                        </p>
                    </center>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <center>
                        <h5 class="text-uppercase">About Us</h5>
                        <i onclick="location.href='https://www.instagram.com/raden_fachry/'" class="bi bi-instagram""> instagram</i><br>
                        <i onclick="location.href='https://www.facebook.com'" class="bi bi-facebook"> Facebook</i><br>
                        <i onclick="location.href='https://www.whatsapp.com'"class="bi bi-whatsapp"> whatsapp</i>
                    </center>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div
            class="text-center p-3"
            style="background-image: linear-gradient(to right bottom, #598ddc, #3b95da, #229cd3, #1ba2ca, #2da6c0);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
</html>