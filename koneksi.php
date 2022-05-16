<?php 

class Koneksi {
    var $conn;
	function __construct()
	{
        session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$databasename = "resampah";
		$this->conn = mysqli_connect($servername, $username, $password, $databasename);
	}

    public function proses_login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $check = "SELECT * FROM form WHERE username='$username'";
        $result = $this->conn->query($check);
        $user = $result->fetch_assoc() ;

            $_SESSION['email'] = $user['username'];
            $_SESSION['username'] = $user['id_user'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == "admin") {
                header("location: home_admin.php");
            } elseif ($user['role'] == "user") {
                header("location: mainmenu_home.php");
            }
        else {
            echo "<script>alert('username atau password salah');</script>";
            echo "<script> location='index2.php';</script>";
        }
    }

    public function proses_logout()
	{
		session_destroy();
		echo "<script>alert('Anda Berhasil Logout');</script>";
		echo '<script>window.location="index2.php"</script>';
	}

    public function select_data()
    {
        $sql = "SELECT * FROM form JOIN domisili ON form.id_domisili=domisili.id_domisili";
        return $this->conn->query($sql);
    }

    public function select_bukti()
    {
        $sql = "SELECT * FROM bukti";
        return $this->conn->query($sql);
    }

    


    public function select_pengambilan($id_user)
    {
        
        $sql = "SELECT * FROM pengambilan JOIN pembayaran ON pengambilan.id_pembayaran=pembayaran.id_pembayaran WHERE id_user = '$id_user'";
        return $this->conn->query($sql);
    }


    public function select_pengambilan_admin()
    {
        $sql = "SELECT * FROM pengambilan JOIN pembayaran ON pengambilan.id_pembayaran=pembayaran.id_pembayaran";
        return $this->conn->query($sql);
    }
    
    
    public function insert_data()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password1']); 
        $password2 = md5($_POST['password2']);
        $nomorhp = $_POST['nomorhp'];
        $tanggallahir = $_POST['tanggallahir'];
        $id_domisili = $_POST['id_domisili'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $role = $_POST['role'];
        $sql = "INSERT INTO `form`(`username`,`email`,`password`,`password2`,`nomorhp`,`tanggallahir`,`id_domisili`,`jeniskelamin`,`role`) VALUES ('$username','$email','$password','$password2','$nomorhp','$tanggallahir','$id_domisili','$jeniskelamin','$role')";
        $this->conn->query($sql);
		header("location: index2.php");
        //cek username ganda
        $cek_username = "SELECT username FROM form WHERE = username = '$username'";
        $result_username = mysqli_query($this->koneksi, $cek_username);

        if(mysqli_fetch_assoc($result_username)){
            echo "<script>alert('Username yang anda masukkan tidak tersedia!'); </script>";
        }
        
        if ($password !== $password2){
            echo "<script>alert('password tidak sesuai!');</script>";
            return false;
        }
    }

    public function insert_data_pengambilan()
    {
        $nama = $_POST['nama'];
        $id_user = $_POST['id_user'];
        $sampah = $_POST['sampah'];
        $alamat = $_POST['alamat']; 
        $plastik = $_POST['plastik'];
        $id_pembayaran = $_POST['pembayaran'];
        $statuspembayaran= $_POST['statuspembayaran'];
        $harga = $_POST['harga'];
        // $statuspembayaran = $_POST['statuspembayaran'];
        $sql = "INSERT INTO `pengambilan`(`nama`,`id_user`,`sampah`,`alamat`,`plastik`,`id_pembayaran`,`statuspembayaran`,`harga`) VALUES ('$nama','$id_user','$sampah','$alamat','$plastik','$id_pembayaran','$statuspembayaran','$harga')";
        $this->conn->query($sql);
		header("location: home_pengambilan.php");
    }

    public function update_data()
	{
        $id_user = $_POST['id_user'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password1']); 
        $password2 = md5($_POST['password2']);
        $nomorhp = $_POST['nomorhp'];
        $tanggallahir = $_POST['tanggallahir'];
        $id_domisili = $_POST['id_domisili'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $role = $_POST['role'];
		$sql = "UPDATE `form` SET `id_user`='$id_user',`username`='$username',`email`='$email',`password`='$password',`password2`='$password2',`nomorhp`='$nomorhp',`tanggallahir`='$tanggallahir',`id_domisili`='$id_domisili',`jeniskelamin`='$jeniskelamin',`role`='$role' WHERE id_user = $id_user";
		$this->conn->query($sql);
		header("location: home_buttons.php");

	}

    public function update_data_pengambilan()
	{
        $id_pengambilan = $_POST['id_pengambilan'];
        $nama = $_POST['nama'];
        $sampah = $_POST['sampah'];
        $alamat = $_POST['alamat'];
        $plastik = $_POST['plastik'];
        $id_pembayaran = $_POST['pembayaran'];
        $statuspembayaran= $_POST['statuspembayaran'];
		$sql = "UPDATE `pengambilan` SET `id_pengambilan`='$id_pengambilan',`nama`='$nama',`sampah`='$sampah',`alamat`='$alamat',`plastik`='$plastik',`pembayaran`='$id_pembayaran',`statuspembayaran`='$statuspembayaran',`plastik`='$plastik' WHERE id_pengambilan = $id_pengambilan";
		$this->conn->query($sql);
		header("location: home_pengambilan.php");

	}

    public function delete_data($id_user = null)
    {
        
		$sql = "DELETE FROM `form` WHERE id_user = $id_user";

		$this->conn->query($sql);
		header("location: home_buttons.php");
    }

    public function delete_data_pengambilan($id_pengambilan = null)
    {
        
		$sql = "DELETE FROM `pengambilan` WHERE id_pengambilan = $id_pengambilan";

		$this->conn->query($sql);
		header("location: home_pengambilan.php");
    }

    public function select_domisili()
    {
        $sql = "SELECT * FROM domisili";
        return $this->conn->query($sql);
    }
    public function insert_form()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password1']); 
        $password2 = md5($_POST['password2']);
        $nomorhp = $_POST['nomorhp'];
        $tanggallahir = $_POST['tanggallahir'];
        $domisili = $_POST['id_domisili'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $role = $_POST['role'];
        $sql = "INSERT INTO `form`(`username`,`email`,`password`,`password2`,`nomorhp`,`tanggallahir`,`id_domisili`,`jeniskelamin`,`role`) VALUES ('$username','$email','$password','$password2','$nomorhp','$tanggallahir','$domisili','$jeniskelamin','$role'";
        $this->conn->query($sql);
		header("location: index2.php");

        //cek username ganda
        $cek_username = "SELECT username FROM form WHERE = username = '$username'";
        $result_username = mysqli_query($this->koneksi, $cek_username);

        if(mysqli_fetch_assoc($result_username)){
            echo "<script>alert('Username yang anda masukkan tidak tersedia!'); </script>";
        }
        
        if ($password !== $password2){
            echo "<script>alert ('repeat password tidak sesuai'); </script>";
            return false;
        }
    }

    public function insert_pengambilan()
    {
        $nama = $_POST['nama'];
        $id_user = $_POST['id_user'];
        $sampah = $_POST['sampah'];
        $alamat = $_POST['alamat']; 
        $plastik = $_POST['plastik'];
        $id_pembayaran = $_POST['pembayaran'];
        $statuspembayaran= $_POST['statuspembayaran'];
        $harga = $_POST['harga'];
        // $statuspembayaran = $_POST['statuspembayaran'];
        $sql = "INSERT INTO `pengambilan`(`nama`,`id_user`,`sampah`,`alamat`,`plastik`,`id_pembayaran`,`statuspembayaran`,`harga`) VALUES ('$nama','$id_user','$sampah','$alamat','$plastik','$id_pembayaran','$statuspembayaran','$harga')";
        $this->conn->query($sql);
		header("location: mainmenu_history.php");
    }

    public function insert_bukti()
    {
        $kode = $_POST['kode'];
        $foto = $_POST['foto'];
        $sql = "INSERT INTO `bukti`(`kode`,`foto`) VALUES ('$kode','$foto')";
        $this->conn->query($sql);
		header("location: mainmenu_history.php");
    }


    public function insert_pembayaran()
    {
        $pembayaran = $_POST['pembayaran'];
        $sql = "INSERT INTO `pembayaran`(`pembayaran`) VALUES ('$pembayaran')";
        $this->conn->query($sql);
        header("location: mainmenu_pembayaran.php");
        echo "<script>alert ('Pembayaran Sedang Diproses'); </script>";
    }

    public function select_pembayaran()
    {
        $sql = "SELECT * FROM pembayaran";
        return $this->conn->query($sql);
    }

}


$koneksi = new Koneksi();
if (isset($_GET['delete_data'])){
    $koneksi->delete_data($_GET['delete_data']);
}
if (isset($_GET['delete_data_pengambilan'])){
    $koneksi->delete_data_pengambilan($_GET['delete_data_pengambilan']);
}
if (isset($_GET['insert_data'])){
    $koneksi->insert_data();

}
if (isset($_POST['btnregister'])){
    $koneksi->insert_form();
}

if (isset($_SESSION['user'])){
    $id_user=$_SESSION['user'];
}

if (isset($_POST['btnpengambilan'])){
    $koneksi->insert_pengambilan();
}

if (isset($_POST['btnpengambilanadmin'])){
    $koneksi->insert_data_pengambilan();
}

if (isset($_POST['btnbukti'])){
    $koneksi->insert_bukti();
}

if (isset($_POST['btnpembayaran'])){
    $koneksi->insert_pembayaran();
}

if (isset($_POST['btnadminpengambilan'])){
    $koneksi->update_data_pengambilan();
}

if (isset($_GET['update_data'])){
    $koneksi->update_data();
}
if (isset($_GET['proses_login'])){
    $koneksi->proses_login();
}

if (isset($_GET['proses_logout'])){
    $koneksi->proses_logout();
}

if (isset($_GET['select_domisili'])){
    $koneksi->select_domisili();
}

?>