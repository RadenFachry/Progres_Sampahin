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

        <title>Resampah</title>
        <link rel="stylesheet" href="mainmenu_history.css">
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
                                
                                <div class="card-body shadow-lg mt-5">
                                <center>
                                    <h1 class="bi bi-clock-history"> History Pengambilan</h1>
                                </center>
                                <br>
                                <body>
                                    <div class="container-fluid mt-5">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Sampah KG</th>
                                                    <th>Alamat</th>
                                                    <th>Memisahkan Sampah Plastik</th>
                                                    <th>Metode Pembayaran</th>
                                                    <th>Kode Pembayaran</th>
                                                    <th>Harga</th>
                                                    <th>Status Pembayaran</th>
                                                    
                                                    
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $data = $koneksi->select_pengambilan($id_user);
                                                $no = 1;
                                                ?>
                                                <?php foreach ($data as $row): ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $row['nama'] ?></td>
                                                    <td><?= $row['sampah'] ?></td>
                                                    <td><?= $row['alamat'] ?></td>
                                                    <td><?= $row['plastik'] ?></td>
                                                    <td><?= $row['pembayaran'] ?></td>
                                                    <td><?= $row['id_pengambilan'] ?></td>
                                                    <td><?= $row['harga'] ?></td>
                                                    <td><?= $row['statuspembayaran'] ?></td>
                                                    
                                                </tr>
                                                <?php endforeach ?>     
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </body>
                            </div>
                            <div class="card-body shadow-lg mt-5">
                                <center>
                                    <h1 class="bi bi-clock-history"> Pembayaran</h1>
                                </center>
                                <form action="koneksi.php?insert_bukti" method="post">
                                    <div class="form-group">
                                    <label>Masukkan Kode Pembayaran</label>
                                        <input type="number" name="kode" class="form-control" placeholder="Kode Pembayaran" required>
                                        <br>
                                        <label class="form-label" for="customFile">Bukti Pembayaran</label>
                                        <input type="file" name="foto" class="form-control" id="customFile" />

                                        
                                    </div>
                                    <center>
                                    <br>
                                    <input class ="btn btn-primary btn-lg btn-block" type="submit" name="btnbukti" value="Bayar">
                                    </center>
                                </form>
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