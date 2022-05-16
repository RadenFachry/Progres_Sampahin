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
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
            <link rel="shortcut icon" type="image/png" href="images/logo.png">

        <title>Resampah</title>
        <link rel="stylesheet" href="mainmenu_home_copy.css">
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
            
            
            <img class="foto" src="images/test.png" alt="test">
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        
                            <div class="container">
                            <div class="card-body shadow-lg mt-1">
                                <form action="koneksi.php?insert_pengambilan" method="post">
                                    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                                    <h2 class ="text-center bi bi-trash"> Pengambilan Sampah</h2><br>
                                    <div class="form-group ">

                                        <label>Name</label>
                                        <label>nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required ><br>
                    
                                        <label>Masukkan Perkiraan Berapa Kilo Sampah yang mau dibuang</label><br>
                                        <input id="my_input" type="text" name="sampah" class="d-inline p-2" placeholder="KG" required>
                                        <button onclick="myFunction()" class="d-inline p-2 btn btn-info">Cek Harga</button>
                                        <p>Pastikan Untuk Selalu mencek harga sebelum melakukan pengambilan sampah</p>
                                        <h3 id="a"></h3>
                                        <input style = "display:none" type="text" name="harga" id="test" />
                                        

                                        <script type="text/javascript">
                                            function myFunction() {
                                                var letter = document.getElementById("my_input").value;
                                                var text;
                                                if (letter <= "3") {
                                                    text = "Rp.15.000";
                                                } else if (letter <= "6") {
                                                    text = "Rp.25.000";
                                                } else if (letter <= "8") {
                                                    text = "Rp.30.000";
                                                } else  {
                                                    text = "Rp.50.000";
                                                }
                                                document.getElementById("a").innerHTML = text;
                                                document.getElementById("test").value = text;
                                            }

                                        </script>
                                        <br>
                                        <label>Alamat Lengkap</label><br>
                                        <small>Kabupaten/Perumahan/alamat lengkap</small>
                                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap Anda" required><br>
                                        <label>Apakah Anda Sudah Memisahkan Sampah Plastik</label>
                                        <select class="form-select" aria-label="Default select example" name="plastik">
                                            <option selected>Open this select menu</option>
                                            <option value="Sudah">Sudah</option>
                                            <option value="belum">Belum</option><br>
                                        </select>
                                        <br>
                                        <label>Pembayaran Melalui</label>
                                        <select class="form-select" aria-label="Default select example" name="pembayaran">
                                        <option selected disabled>Pilih Metode</option>
                                            <?php
                                            $pembayaran = $koneksi ->select_pembayaran();
                                            foreach ($pembayaran as $row): ?>
                                                <option value="<?=$row['id_pembayaran'] ?>"><?= $row['pembayaran'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                        <select style = "display:none" class="form-select" aria-label="Default select example" name="statuspembayaran">
                                            <option value="Sudah">Sudah</option>
                                            <option value="Belum dibayar" selected>Sedang Menunggu Konfirmasi</option><br>
                                        </select>
                                        <br>
                                        <center>
                                        <p id="p">anda mempunyai waktu 15 detik untuk melakukan pembatalan <br>sesudah klik pesan</p>
                                        <p id="p2" style = "display:none">Klik Tombol Pembatalan jika ingin membatalkan pesanan<br>atau tunggu untuk melanjutkan</p>
                                        <h1 id="count">15</h1>
                                        <input id="x" style = "display:none" class ="btn btn-primary btn-lg btn-block" type="submit" name="btnpengambilan" value="Ambil">
                                        </center>
                                        <a id="y" style = "display:none" class="btn btn-danger" href="mainmenu_home_copy.php" role="button">Pembatalan</a>

                                    </div>
                                    
                        
                                </form>
                                <center> 
                                        
                                        <button id="z" class="btn btn-primary btn-lg btn-block" onclick="ready()">Pesan</button>
                                        
                                            
                                            </center>
                                        <script type="text/javascript">
                                        function ready(){
                                            var counter = 15;

                                            setInterval( function(){
                                                counter--;

                                                if ( counter >= 0){
                                                    id = document.getElementById("count");
                                                    id.innerHTML = counter;
                                                    document.getElementById('y').style.display = 'block'
                                                    document.getElementById('p').style.display = 'none'
                                                    document.getElementById('p2').style.display = 'block'
                                                    document.getElementById('z').style.display = 'none'
                                                }
                                                if ( counter == 0){
                                                    document.getElementById('x').style.display = 'block'
                                                    document.getElementById('y').style.display = 'none'
                                                    document.getElementById('count').style.display = 'none'
                                                    document.getElementById('p2').style.display = 'none'
                                                    
                                                } 


                                            }, 1000);
                                        }
                                        </script>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        <br><br><br><br><br>
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
                        <i onclick="location.href='https://www.instagram.com/raden_fachry/'" class="bi bi-instagram"> instagram</i><br>
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