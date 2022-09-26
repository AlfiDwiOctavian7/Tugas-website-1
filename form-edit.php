<?php
	include('config.php');
// kalau tidak ada id di query string
	if(!isset($_GET['id']) ) {
		header('location: index.php');
	}
// ambil id dari query string
	$mhs = $_GET['id'];
// buat query untuk diambil data dari database
	$sql = "SELECT * FROM mahasiswa WHERE nim=$mhs";
	$query = mysqli_query($koneksi, $sql);
	$mhs = mysqli_fetch_assoc($query);
// jika tidak data yang di-edit tidak ditemukan 
if( mysqli_num_rows($query) < 1 ) { 
	die("data tidak ditemukan ....");
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Formulir Edit Mahasiswa | Poltek GT</title>
</head>
<body>
 <header>
 <h3>Formulir Edit Mahasiswa</h3>
 </header>
 <form action="proses-edit.php" method="POST">
 <fieldset>
 <input type="hidden" name="id" value="<?php echo $mhs['nim'] ?>" />
 <p>
 <label for="nim">Nim: </label>
 <input type="text" name="nim" placeholder="nim" value="<?php
echo $mhs['nim'] ?>" />
 </p>
 <p>
 <label for="nama_lengkap">Nama: </label>
 <input type="text" name="nama_lengkap" placeholder="namalengkap" value="<?php
 echo $mhs['nama_lengkap'] ?>"/>
 </p>
 <p>
 <label for="tempat_lahir">Tempat Lahir: </label>
 <textarea name="tempat_lahir"><?php echo $mhs['tempat_lahir'] ?></textarea>
 </p>
 <p>
  <label for="email">Email: </label>
 <input type="email" name="email" placeholder="email" 
 value="<?php echo $mhs['email'] ?>"/>
 </p>
 <p>
  <label for="jurusan">Jurusan: </label>
 <textarea name="jurusan"><?php echo $mhs['jurusan'] ?></textarea>
 </p>
 <p>
 <label for="no_hp">N0.HP: </label>
 <input type="text" name="no_hp" placeholder="no_hp" value="<?php
 echo $mhs['nama_lengkap'] ?>"/>
 </p>
 <p>
  <label for="alamat">Alamat: </label>
 <textarea name="alamat"><?php echo $mhs['alamat'] ?></textarea>
 </p>
 <p>
 <input type ="submit" value="simpan" name="simpan" />
</p>
 </fieldset> 
</form>
</body>
</html>
