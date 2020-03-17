<?php

include "../koneksi.php";

$id					= $_POST["id"];
$nama				= addslashes($_POST["nama"]);
$username			= $_POST["username"];
$password			= $_POST["password"];
$Password_Hash		= password_hash($password, PASSWORD_DEFAULT);
$jabatan			= $_POST["jabatan"];

if (empty($password)){
	$edit = mysqli_query($konek, "UPDATE admin SET nama='$nama',
	username='$username', id_jabatan='$jabatan' WHERE id_admin='$id'");
} else {
	$edit = mysqli_query($konek, "UPDATE admin SET nama='$nama',
	username='$username', password='$Password_Hash', id_jabatan='$jabatan' WHERE id_admin='$id'");
	}
	header("Location: user.php");
	exit();
	
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>