<?php 
	require 'config.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password')");

	//copy sampe sini btw ini dicopy dari action login




	if ($result) {
		echo "maskhock bray!!!";
		echo("<br>");
		echo "login ";
		echo "<a href='formlogin.php'>disini</a>";
		echo " bray";
	}
	else {
		echo "lu jelek belum mandi makanya gagal regis";
		echo "<a href='formregister.php'>try egen bray</a>";
	}


?>