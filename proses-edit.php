<?php
	include("config.php");
	// cek apakah tobol daftar sudah diklik atau belum 
	if (isset($_POST['submit'])) {
	// ambil data dari formulir 
	$nim			= $_POST['nim'];
	$nama_lengkap	= $_POST['nama_lengkap'];
	$email			= $_POST['email'];
	$jurusan		= $_POST['jurusan'];
	$alamat			= $_POST['alamat'];
	
	// buat query update
	$sql = "UPDATE mahasiswa (nim = '$nim', nama_lengkap = '$nama_lengkap', ,email ='$email', jurusan = '$jurusan', alamat = '$alamat,
	tanggal_lahir = '$tanggal_lahhir', no_hp ='$no_hp')  WHERE 	nim='$nim';
	$query = mysqli_query($koneksi, $sql);
	// apakah query update berhasil?
	if( $query ) {
	// kalau berhasil alihkan ke halaman list-siswa.php
	header('location: form-edit.php?status=sukses');
	} else {
	// kalau gagal tampilan pesan 
	  die('gagal menyimpan....');
	}
	} else {
	die ("Akses dilarang....");
	}
?>