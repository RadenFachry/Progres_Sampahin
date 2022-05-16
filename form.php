<?php
include "koneksi.php";
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
        <link href="style.css" rel="stylesheet">
        <title>PENDAFTARAN!</title>
        <link rel="shortcut icon" type="imagge/png" href="images/logo.png">
    </head>
    <body>
        <br>

        <div class="container">
            <form action="koneksi.php?insert_data" method="post">
                <h2 class="text-center">FORMULIR PENDAFTARAN RESAMPAH</h2><br>
                <div class="form-group ">
                    <label>Username</label>
                    <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Masukkan Username Anda"
                        required="required">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan Email Anda"
                        required="required">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input
                        type="password"
                        name="password1"
                        class="form-control password"
                        placeholder="Masukkan Password Anda"
                        required="required">
                    <small>Password harus terdiri dari angka dan huruf dan minimal 6 karakter</small>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input
                        type="password"
                        name="password2"
                        class="form-control confirmPassword"
                        placeholder="Masukkan Password Anda"
                        required="required">
                    <small>Pastikan Sama Dengan Password</small>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input
                        type="text"
                        name="nomorhp"
                        class="form-control"
                        placeholder="Masukkan Nomor Telepon"
                        required="required">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Tempat Domisili Anda Tinggal</label><br>
                    <small>Resampah Hanya ada Di Domisili Berikut</small>
                    <select class="form-select" aria-label="Default select example" name="id_domisili">
                        <option selected disabled>Pilih Wilayah</option>
                        <?php
                        $domisili = $koneksi ->select_domisili();
                        foreach ($domisili as $row): ?>
                            <option value="<?=$row['id_domisili'] ?>"><?= $row['domisili'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jeniskelamin">
                            <option selected>Open this select menu</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                </div>
                <div class="form-group">
                <label>Pilih Role Anda</label>
                    
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option selected>Open this select menu</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>        
                <div class="button">
                    <input type="Submit" name="btnregister" value="Resister">
                </div>
                <div class="signup_link">
                    Sudah Punya akun ?
                    <a href="index2.php">Masuk</a>
                </div>
            </form>

        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!-- <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script> <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script> -->
    </body>
</html>