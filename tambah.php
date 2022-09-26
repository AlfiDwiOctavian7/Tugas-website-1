<?php
	include("config.php");
	// cek apakah tobol daftar sudah diklik atau belum 
	if (isset($_POST['submit'])) {
	// ambil data dari formulir 
	$nim			= $_POST['nim'];
	$nama_lengkap	= $_POST['nama_lengkap'];
	$email			= $_POST['email'];
	$jurusan		= $_POST['jurusan'];
	$no_hp			= $_POST['no_hp'];
	$alamat			= $_POST['alamat'];
	
	// buat query
	$sql = "INSERT INTO mahasiswa (nim,nama_lengkap,tempat_lahir,tanggal_lahir,alamat,jurusan,no_hp,email)  VALUE ('$nim','$nama_lengkap','','1999-12-12','$alamat', '$jurusan', '', '$email')";
	$query = mysqli_query($koneksi, $sql);
	// apakah query simpan berhasil?
	if( $query ) {
	// kalau berhasil alihkan ke halaman index.php dengan status=sukses
	header('location: index.php?status=sukses');
	} else {
	// kalau gagal alamat ke halaman index.php dengan status=gagal
	header('location index.php?status=gagal');
	}
	} else {
	die ("Akses dilarang....");
	}
?>