<?php
require 'functions.php';
// cek apakah tombol submit sudah diterima atau belum
if (isset($_POST["submit"])) {
	
	// data berhasil ditambahakanatau tidak
	if (tambah($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href ='index.php';
		</script>
		";
	}else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href ='index.php;
		</script>
		";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PIC</title>
</head>
<body>
<h1>PIC PT. Ambross Sukses Abadi</h1>

<form action="" method="post">
	<ul>
		<li>
			<label for="nama">Nama : </label>
			<input type="text" name="nama" id="nama">
		</li>
	
		<li>
			<label for="email">Email : </label>
			<input type="text" name="email" id="email">
		</li>

		<li>
			<label for="phone">Phone : </label>
			<input type="text" name="phone" id="phone">
		</li>

		<li>
			<label for="address">Alamat : </label>
			<input type="text" name="address" id="address">
		</li>

		<li>
			<button type="submit" name="submit">Tambah Data</button>
		</li>

		</ul>



</form>



</body>
</html>