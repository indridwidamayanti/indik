 <?php 
	
	$conn = mysqli_connect("localhost","root","","indik");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM post WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$Nama = htmlspecialchars($data["Nama"]);
		$NIM = htmlspecialchars($data["NIM"]);
		$TTL = htmlspecialchars($data["TTL"]);

		$query = "UPDATE post SET Nama = '$Nama', NIM = '$NIM', TTL = '$TTL' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$Nama = $data["Nama"];
	// 	$Biodata = $data["Biodata"];

	// 	$query = "INSERT INTO post VALUES ('','$Nama', '$Biodata')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>