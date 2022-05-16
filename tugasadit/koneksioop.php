<?php 
/**
 * 
 */
class Koneksi
{
	var $conn;
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$databasename = "mahasiswa";
		$this->conn = mysqli_connect($servername, $username, $password, $databasename);
	}

	// public function select_mahasiswa()
	// {
	// 	$sql = "SELECT * FROM mahasiswa";
	// 	$result = $this->conn->query($sql);
	// 	return $result;
	// }

	public function select_mahasiswa()
	{
		$sql = "SELECT * FROM mahasiswa";
		return $this->conn->query($sql);
	}

	public function insert_mahasiswa()
	{
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$sql = "INSERT INTO `mahasiswa`(`nama`, `nim`, `kelas`) VALUES ('$nama','$nim','$kelas')";
		$this->conn->query($sql);
		header("location: list_mahasiswa.php");
	}

	public function update_mahasiswa()
	{
		$id_mahasiswa = $_POST['id_mahasiswa'];
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$sql = "UPDATE `mahasiswa` SET `nama`='$nama',`nim`='$nim',`kelas`='$kelas' WHERE id_mahasiswa = $id_mahasiswa";
		$this->conn->query($sql);
		header("location: list_mahasiswa.php");
	}

	public function delete_mahasiswa($id_mahasiswa = null)
	{
		$sql = "DELETE FROM `mahasiswa` WHERE id_mahasiswa = $id_mahasiswa";
		
		$this->conn->query($sql);
		header("location: list_mahasiswa.php");
	}

	// public function select_mahasiswa()
	// {
	// 	return $this->conn->query("SELECT * FROM mahasiswa");
	// }

	
}
$koneksi = new Koneksi();

if (isset($_GET['delete_mahasiswa'])) {
	$koneksi->delete_mahasiswa($_GET['delete_mahasiswa']);
}
if (isset($_GET['insert_mahasiswa'])) {
	$koneksi->insert_mahasiswa();
}
if (isset($_GET['update_mahasiswa'])) {
	$koneksi->update_mahasiswa();
}


 ?>