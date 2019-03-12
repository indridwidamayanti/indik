<?php 
require 'config.php';
   session_start();
   if(!isset($_SESSION['username'])) {
   header('location:index.php'); }

$id = $_GET["id"];

if (hapus($id)>0) {
			echo "data berhasil dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
	else
	{
			echo "data gagal dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
	


 ?>

