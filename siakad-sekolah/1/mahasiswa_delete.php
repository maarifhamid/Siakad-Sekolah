<?php

include "../koneksi.php";

$NIS = $_GET["NIS"];

if($delete = mysqli_query($konek, "DELETE FROM siswa WHERE NIS='$NIS'")){
	header("Location: mahasiswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>