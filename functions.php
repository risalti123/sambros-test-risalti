<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","pic");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data){
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$phone = htmlspecialchars($data["phone"]);
	$address = htmlspecialchars($data["address"]);


	// query insert data
	$query = "INSERT INTO manage
				VALUES
				('','$nama','$email','$phone','$address')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id){

	global $conn;
	mysqli_query($conn,"DELETE FROM manage WHERE id = $id");

	return mysqli_affected_rows($conn);
}

?>







