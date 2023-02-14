<?php
include "../koneksi.php";

$NIP 			= $_POST["NIP"];
$Nama_Guru 		= $_POST["Nama_Guru"];
$Tanggal_Lahir 	= $_POST["Tanggal_Lahir"];
$JK 			= $_POST["JK"];
$No_Telp 		= $_POST["No_Telp"];
$Alamat 		= $_POST["Alamat"];
$Nama_Mapel		= $_POST["Nama_Mapel"];

if ($add = mysqli_query($konek, "INSERT INTO guru (NIP, Nama_Guru, Tanggal_Lahir, JK,  No_Telp, Alamat, Nama_Mapel) VALUES 
	('$NIP', '$Nama_Guru', '$Tanggal_Lahir', '$JK', '$No_Telp' , '$Alamat', '$Nama_Mapel')")){
		header("Location: dosen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>