<?php 
require 'config.php';
session_start();
if(!isset($_SESSION['login'])) {
   header('location:index.php'); 
} 
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
    <li><a href="index.php">Logout</a>

  </ul>


</div>

<div id="isi">
  
<center>
  <br>
<button><a href="create.php">Tambah</a></button>
<br><br>
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
   
    <td>
      <center>
        <button><a href="ubah.php?id=<?= $x["id"]?>">Edit</a></button>
      <br><br>
      <button><a href="hapus.php?id=<?= $x["id"]?>" onclick =" return confirm ('yakin bray mau dihapus?');">hapus</a></button></center>
      
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>

</div>
</div>

</body>
</html>