<?php 
	require 'config.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password')");

	//copy sampe sini btw ini dicopy dari action login




	if ($result) {
		echo "Silahkan Login";
		echo("<br>");
		echo "login ";
		echo "<a href='formlogin.php'>disini</a>";
	}
	else {
		echo "GAGAl REGIS";
		echo "<a href='formregister.php'>ulang lagi </a>";
	}


?>