 <?php 
	require 'config.php';
   session_start();
   if(!isset($_SESSION['username'])) {
   header('location:index.php'); }
 
	$id = $_GET["id"];

	$ubah = query("SELECT * FROM post WHERE id=$id")[0];

	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			echo "data berhasil diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else{
			echo "data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='ubah.php'>disini</a>";
			echo " bray";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit articel</title>
</head>
<body>
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->

 	<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $ubah["id"]?>">
 		<br>
 		Nama	: 
		<input type="text" name="Nama" placeholder="Nama" value="<?= $ubah["Nama"]?>">
		<br>
		<br>
		NIM	:
		<input name="NIM"  value="<?= $ubah["NIM"]?>">
		<br><br>
		TTL	:
		<input name="TTL"  value="<?= $ubah["TTL"]?>">
		<br><br>
		<input type="submit" name="submit"">
 	</form>
</body>
</html>