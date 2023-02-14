<?php
include "../koneksi.php";

$NIP 			= $_POST["NIP"];
$Nama_Guru 	= $_POST["Nama_Guru"];
$Tanggal_Lahir 	= $_POST["Tanggal_Lahir"];
$JK 			= $_POST["JK"];
$No_Telp 		= $_POST["No_Telp"];
$Alamat 		= $_POST["Alamat"];
$Nama_Mapel		= $_POST["Nama_Mapel"];

if ($edit = mysqli_query($konek, "UPDATE guru SET Nama_Guru='$Nama_Guru', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', 
	No_Telp='$No_Telp' , Alamat='$Alamat', Nama_Mapel='$Nama_Mapel' WHERE NIP='$NIP'")){
		header("Location: dosen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>