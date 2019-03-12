<?php 
	require 'config.php';


	session_start();
	$Nama = $_POST['Nama'];
	$NIM = $_POST['NIM'];
	$TTL = $_POST['TTL'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO post (id, Nama, NIM, TTL) VALUES(null,'$_POST[Nama]','$_POST[NIM]','$_POST[TTL]') ");
	
		if ($tambah>0) {
			echo "data berhasil ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='create.php'>disini</a>";

		}
	

 ?>