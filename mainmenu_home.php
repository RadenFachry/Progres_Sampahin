<?php 
include_once 'koneksi.php';
?>
<?php
if (!isset($_SESSION['username'])){
    echo "<script> alert ('Anda Belum Login!');</script>";
    echo "<script> location = 'index2.php';</script>";
}
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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Resampah</title>
        <link rel="stylesheet" href="mainmenu_home.css">
    </head>
    
    <body>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    
                    <li class="sidebar-brand">
                        <a href="mainmenu_home.php"?>
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
                        <a class="bi bi-person-lines-fill" href="mainmenu_contact.php"> Contact</a>
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
                            <div class="b-example-divider"></div>

                                <div class="container col-xxl-8 px-4 py-5">
                                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                                    <div class="col-10 col-sm-8 col-lg-6">
                                        <img src="images/logo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                                    </div>
                                    <div class="col-lg-6">
                                        <h1 class="display-5 fw-bold lh-1 mb-3">Resampah</h1>
                                        <?php echo "<h1>Selamat Datang, " . $_SESSION['email'] . "</h1>"; ?>
                                        <p class="lead">Resampah Adalah Aplikasi dan Website yang bertujuan untuk memudahkan mengambilan sampah sampah di rumah kalian dengan berbasis web dengan adanya resampah kami akan membuat wilayah kalian lebih nyaman dan bersih</p>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                        <button onclick="location.href='mainmenu_home_copy.php'" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Ambil Sampah</button>
                                        <button onclick="location.href='mainmenu_history.php'" type="button" class="btn btn-outline-secondary btn-lg px-4">Riwayat</button>
                                        
                                        </div>
                                    </div>
                                    <h1>Bank Sampah Yang Tersedia Di dekat kamu</h1>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13322.46780716811!2d107.70420491847918!3d-6.915290021436459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd3a88525f8d%3A0x3a18da16bc7d382!2sAlun-Alun%20Ujung%20Berung!5e0!3m2!1sen!2sid!4v1639588622032!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
            
            
    
        </div>
        <br><br><br><br><br><br><br>
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
    </body>
    
</html>