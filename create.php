<?php
   session_start();
   if(!isset($_SESSION['username'])) {
   header('location:index.php'); }
?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body>
	<br><br>
 	<form method="POST" action="actioncreate.php">
 		<input type="hidden" name="waktu">
 		Nama	: 
		<input type="text" name="Nama" placeholder="Nama">
		<br>
		<br>
		NIM:
		<textarea name="NIM" placeholder="Text Artikel"> </textarea>
		<br><br>
		TTL:
		<textarea name="TTL" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>