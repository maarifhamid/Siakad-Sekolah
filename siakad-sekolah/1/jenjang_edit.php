<?php

include "../koneksi.php";

$Kode_Kurikulum	= $_POST["Kode_Kurikulum"];
$Kurikulum		= $_POST["Kurikulum"];

if($edit = mysqli_query($konek, "UPDATE kurikulum SET Kurikulum='$Kurikulum' WHERE Kode_Kurikulum='$Kode_Kurikulum'")){
	header("Location: jenjang.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>