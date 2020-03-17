<?php

include "../koneksi.php";

$Id_User	= $_GET["id"];

if($delete = mysqli_query($konek, "DELETE FROM admin WHERE id_admin='$Id_User'")){
	header("Location: user.php");
	exit();
}
die("Terapat Kesalahan :". mysqli_error($konek));

?>