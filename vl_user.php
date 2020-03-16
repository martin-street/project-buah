<?php
session_start();
include "koneksi.php";

$Username = $_POST["Username"];
$Password = $_POST["Password"];

$query = mysqli_query ($konek, "SELECT * FROM admin WHERE username='$Username' AND password='$Password'");

// Validasi Login
if ($_POST){
	
	$queryuser = mysqli_query ($konek, "SELECT * FROM admin WHERE username='$Username'");
		
	$user = mysqli_fetch_array ($queryuser);
	
	if($user){
			if (password_verify($Password, $user["password"])){
				
				$_SESSION["nama"] 				= $user["nama"];
				$_SESSION["Username"] 			= $user["username"];
				$_SESSION["Password"] 			= $user["password"];
				$_SESSION["id_jabatan"]	 		= $user["id_jabatan"];
				$_SESSION["id_admin"] 			= $user["id_admin"];
				$_SESSION["Login"] 				= true;
				
				if ($_SESSION["id_jabatan"] == 1){
					header ("Location: 1/index.php");
					exit();
				}
				else if($_SESSION["id_jabatan"] == 2){
					header ("Location: 2/index.php");
					exit();
				}
				else if($_SESSION["id_jabatan"] == 3){
					header ("Location: 3/index.php");
					exit();
				}
				else{
					header("Location :pagenotfound.php");
					exit();
				}
			}
			else
			{
				header ("Location: index.php?Err=4");
				exit();
			}
	}
	else if (empty ($Username) && empty ($Password)){
		header ("Location: index.php?Err=1");
		exit();
	}
	else if(empty ($Username)){
		header ("Location: index.php?Err=2");
		exit();
	}
	else if(empty ($Password)){
		header ("Location: index.php?Err=3");
		exit();
	}
	else{
		header ("Location: index.php?Err=5");
		exit();
	}
}
	
?>