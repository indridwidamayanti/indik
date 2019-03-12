<?php 
require 'config.php';
  $tampil = query ("SELECT * FROM post");

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title> WEBKUHHHH</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="canvas">
<div id="header">
<p><font color="#FFFFFF"> SINUS A 2018 </font> 
</div>

<div id="menu">
  <ul>
    <li><a href="formlogin.php">Login</a>

  </ul>


</div>

<div id="isi">
	
<center>
  <br>
    <h2>PROFILE MAHASISWA</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>TTL</th>
    <th>Waktu Update</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["Nama"] ?></td>
    <td><?= $x["NIM"] ?></td>
    <td><?= $x["TTL"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
   
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>

</div>
</div>

</body>
</html>