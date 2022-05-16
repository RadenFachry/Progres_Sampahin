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
            <link rel="stylesheet" href="mainmenu5.css">

        <title>Hello, world!</title>
    </head>
    <body>
        <nav>
            <div class="logo" >
                <h4>Resampah</h4>
                <img src="images/logo.png" alt="logo">
            </div>
            <ul>
                <li><a href="mainmenu.php">Home</a></li>
                <li><a href="">Pengambilan</a></li>
                <li><a href="">History</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Logout</a></li>
            </ul>
    
        </nav>
        <div class="container">
            <form action="koneksi.php" method="post">
                <h2 class ="text-center">Pengambilan Sampah</h2><br>
                <div class="form-group ">
                    <label>Nama</label><br>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>

                    <label>Masukkan Berapa Kilo Sampah yang mau dibuang</label><br>
                    <input type="text" name="sampah" class="form-control" placeholder="KG" required>
                    
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap Anda" required>
                    <label>Apakah Anda Sudah Memisahkan Sampah Plastik</label><br>

                    <select class="form-select" aria-label="Default select example" name="plastik">
                        <option selected>Open this select menu</option>
                        <option value="Sudah">Sudah</option>
                        <option value="belum">Belum</option>
                    <div class="button">
                    <input type="Submit" name="btnpengambilan" value="Resister">
                </div>
    
            </form>
        </div>
    
    </body>
    
</html>