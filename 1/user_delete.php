<?php

include "../koneksi.php";

$Id_User	= $_GET["id"];

if($delete = mysqli_query($konek, "DELETE FROM pengguna WHERE id_pengguna='$Id_User'")){
	header("Location: user.php");
	exit();
}
die("Terapat Kesalahan :". mysqli_error($konek));

?>