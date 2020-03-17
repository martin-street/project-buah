<?php

include "../koneksi.php";

$Nama				= addslashes($_POST["nama"]);
$Username			= $_POST["username"];
$Password			= $_POST["password"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);
$Jabatan			= $_POST["jabatan"];


if(empty ($Nama)|| empty ($Username)|| empty ($Password_Hash) || empty ($Jabatan)) {
	echo "<script>window.alert('Kolom tidak boleh ada yang kosong, Data tidak tersimpan')
		window.location='user.php'</script>";
} else {
if($add = mysqli_query($konek, "INSERT INTO admin VALUES ('','$Nama','$Jabatan','$Username', '$Password_Hash')")){
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));
}
?>