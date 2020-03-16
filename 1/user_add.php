<?php

include "../koneksi.php";

$Id_User_Akses		= $_POST["akses"];
$nip				= $_POST["nip"];
$id					= $_POST["id"];
$Nama				= addslashes($_POST["nama"]);
$Username			= $_POST["username"];
$Password			= $_POST["password"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);


if(empty ($id) || empty ($Nama)|| empty ($Username)|| 
empty ($Password_Hash) || empty ($Id_User_Akses) ) {
	echo "<script>window.alert('Kolom tidak boleh ada yang kosong, Data tidak tersimpan')
		window.location='user.php'</script>";
} else {
if($add = mysqli_query($konek, "INSERT INTO pengguna VALUES ('$id','$nip','$Nama', '$Username', '$Password_Hash','$Id_User_Akses')")){
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));
}
?>