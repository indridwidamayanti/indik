 <?php 
	session_start();
	if (isset($_SESSION['username'])) {
		header("location : index.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

	<div class="header">
		<center>
		<h2> LOG IN </h2>
	</center>
</div>
 <div class="row">
  <div class="col-md-6 col-md-offset-3">
 	<form method="POST" action="actionlogin.php">
 		username	: 
		<input type="text" name="username" placeholder="username">
		<br>
		<br>
		password	:
		<input type="password" name="password" placeholder="password">
		<br><br>
		<input type="submit" name="masuk">

		<br><br> <h3>belum punya akun?</h3> <button><a href="formregister.php"> Registrasi </a></button>
 	</form>
 </div>
</div>
</body>
</html>