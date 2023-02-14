<?php

include "../koneksi.php";

$Kode_Mapel_Jadwal		= $_POST["Kode_Mapel_Jadwal"];
$NIP_Jadwal				= $_POST["NIP_Jadwal"];
$Kode_Kelas_Jadwal		= $_POST["Kode_Kelas_Jadwal"];
$Kode_Jurusan_Jadwal	= $_POST["Kode_Jurusan_Jadwal"];
$Hari					= $_POST["Hari"];
$Jam_Mulai				= $_POST["Jam_Mulai"];
$Jam_Selesai			= $_POST["Jam_Selesai"];
$Waktu					= $Jam_Mulai."-".$Jam_Selesai;

if($add = mysqli_query($konek, "INSERT INTO jadwal(Kode_Mapel_Jadwal, NIP_Jadwal, Kode_Kelas_Jadwal, Kode_Jurusan_Jadwal, Hari, Waktu) VALUES ('$Kode_Mapel_Jadwal', '$NIP_Jadwal', '$Kode_Kelas_Jadwal', '$Kode_Jurusan_Jadwal', '$Hari', '$Waktu')")){
	header("Location: jadwal.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>