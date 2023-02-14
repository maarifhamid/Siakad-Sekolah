<?php

include "../koneksi.php";

$Kode_Kurikulum	= $_POST["Kode_Kurikulum"];
$Kurikulum		= $_POST["Kurikulum"];

if($add = mysqli_query($konek, "INSERT INTO kurikulum(Kode_Kurikulum, Kurikulum) VALUES ('$Kode_Kurikulum', '$Kurikulum')")){
	header("Location: jenjang.php");
	exit();
}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>
