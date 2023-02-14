<?php

include "../koneksi.php";

$NIS 				= $_POST["NIS"];
$Nama_Mahasiswa		= $_POST["Nama_Siswa"];
$Tanggal_Lahir		= $_POST["Tanggal_Lahir"];
$JK					= $_POST["JK"];
$No_Telp			= $_POST["No_Telp"];
$Alamat				= $_POST["Alamat"];
$Nama_Jurusan		= $_POST["Nama_Jurusan"];

if($edit = mysqli_query($konek, "UPDATE siswa SET Nama_Siswa='$Nama_Siswa', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', 
	No_Telp='$No_Telp', Alamat='$Alamat', Nama_Jurusan='$Nama_Jurusan' WHERE NIS='$NIS'")){
		header("Location: mahasiswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>