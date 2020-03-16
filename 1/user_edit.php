<?php

include "../koneksi.php";

$id					= $_POST["id"];
$nama				= addslashes($_POST["nama"]);
$username			= $_POST["username"];
$password			= $_POST["password"];
$Password_Hash		= password_hash($password, PASSWORD_DEFAULT);
$hakakses			= $_POST["akses"];

if($edit = mysqli_query($konek, "UPDATE pengguna SET nama_pengguna='$nama',
username='$username',
password='$Password_Hash',
Id_User_Akses='$hakakses' WHERE id_pengguna='$id'")){
		header("Location: user.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>