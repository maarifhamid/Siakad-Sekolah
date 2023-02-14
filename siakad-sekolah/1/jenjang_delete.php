<?php

include "../koneksi.php";

$Kode_Kurikulum	= $_GET["Kode_Kurikulum"];

if($delete = mysqli_query($konek, "DELETE FROM kurikulum WHERE Kode_Kurikulum='$Kode_Kurikulum'")){
	header("Location: jenjang.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>