<?php 
include_once 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TABEL Resampah</title>
  </head>
  <body>
      <div class="container-fluid mt-5">
        <a href="koneksi.php?proses_logout">Log Out</a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resampahmodal">Tambah Data</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>Nomor Telepon</th>
                    <th>Tanggal Lahir</th>
                    <th>Domisili</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $data = $koneksi->select_data();
                $no = 1;
                ?>
                <?php foreach ($data as $row): ?>
                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row['username'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td><?= $row['password'] ?></td>
                      <td><?= $row['password2'] ?></td>
                      <td><?= $row['nomorhp'] ?></td>
                      <td><?= $row['tanggallahir'] ?></td>
                      <td><?= $row['id_domisili'] ?></td>
                      <td><?= $row['jeniskelamin'] ?></td>
                      <td><a href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["id_user"]?>">Edit</a></td>
                      <td><a href="koneksi.php?delete_data=<?= $row["id_user"]?>" class="badge bg-danger">Hapus</a></td>
                  </tr>
                <?php endforeach ?>     
            </tbody>
        </table>
      </div>



      <?php foreach ($data as $row): ?>
        <!-- Modal EDIT -->
        <div class="modal fade" id="exampleModal<?= $row["id_user"]?>" tabindex="-1" aria-labelledby="exampleModalLabel<?= $row["id_user"]?>" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModal<?= $row["id_user"]?>Label">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="koneksi.php?update_data" method="post">
                <input type="hidden" name="id_user" value="<?= $row['id_user']?>">
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="email" class="form-control" value="<?= $row['email'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" name="password1" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label>ConfirmPassword</label>
                      <input type="text" name="password2" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label>NomorHP</label>
                      <input type="text" name="nomorhp" class="form-control" value="<?= $row['nomorhp'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" name="tanggallahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <Label>Domisili</Label><br>
                      <select class="form-select" aria-label="Default select example" name="domisili">
                        <option selected disabled>Pilih Wilayah</option>
                        <?php
                        $domisili = $koneksi ->select_domisili();
                        foreach ($domisili as $item): ?>
                        <?php if ($item['domisili'] == $row['domisili']):?>
                            <option value="<?=$item['id_domisili'] ?>" selected><?= $item['domisili'] ?></option>
                        <?php else: ?>
                            <option value="<?=$item['id_domisili'] ?>" ><?=$item['domisili'] ?></option>
                        <?php endif ?>
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach ?>


      <!-- Modal -->
      <div class="modal fade" id="resampahmodal" tabindex="-1" aria-labelledby="resampahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="resampahModalLabel">Tambah Data Resampah</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="koneksi.php?insert_data" method="post"> 
                <div class="modal-body">
                <div class="form-group ">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password1" class="form-control password" placeholder="Masukkan Password Anda" required>
                    <small>Password harus terdiri dari angka dan huruf dan minimal 6 karakter</small>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password2" class="form-control confirmPassword" placeholder="Masukkan Password Anda" required>
                    <small>Pastikan Sama Dengan Password</small>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="nomorhp" class="form-control" placeholder="Masukkan Nomor Telepon" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggallahir" class="form-control" required>
                </div>
                <div class="form-gorup">
                    <Label>Tempat Domisili Anda Tinggal</Label><br>
                    <small>Resampah Hanya ada Di Domisili Berikut</small>
                    <select class="form-select" aria-label="Default select example" name="id_domisili">
                        <option selected>Open this select menu</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Jakarta">Jakarta</option>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="sumbit" class="btn btn-primary">submit</button>
            </form>
            </div>
          </div>
        </div>
      </div>
      

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>