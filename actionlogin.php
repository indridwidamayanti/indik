<?php 
	require 'config.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"SELECT * FROM user where username='$username' and password ='$password'");

	$data	= mysqli_fetch_assoc($result);

 	if (mysqli_num_rows($result)>0){
 		//login
 		$_SESSION['login'] = true;
 		$_SESSION['username'] = $username;
 		$_SESSION['id'] = $data['id'];
 		header("location:admin.php");
 	}
 	
 	else {
 		echo "lu ilegal bray!!!";
 		echo "<br>";
 		echo "<a href='formregister.php'>registrasi<a>";
 		echo " dulu aja bray. kali aja cocok ^^";
 		echo "<br>";
 		echo "<br>";
 		echo "<a href='register.php'> login?<a>";
 	}

?>