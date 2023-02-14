<?php
include "../koneksi.php";

$NIS 				= $_POST["NIS"];
$Nama_Siswa			= $_POST["Nama_Siswa"];
$Kelas				= $_POST["Kelas"];
$Tanggal_Lahir 		= $_POST["Tanggal_Lahir"];
$JK 				= $_POST["JK"];
$No_Telp 			= $_POST["No_Telp"];
$Alamat 			= $_POST["Alamat"];
$Nama_Jurusan 		= $_POST["Nama_Jurusan"];

if ($add = mysqli_query ($konek, "INSERT INTO siswa (NIS, Nama_Siswa, Kelas, Tanggal_Lahir, JK, Alamat, No_Telp, Nama_Jurusan) 
	VALUES ('$NIS', '$Nama_Siswa', '$Kelas', '$Tanggal_Lahir', '$JK', '$No_Telp' ,'$Alamat', '$Nama_Jurusan')"))
	{
		header("Location: mahasiswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>