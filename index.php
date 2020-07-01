<?php
require 'functions.php';
$pic = query("SELECT * FROM manage");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sambros-test-Risalti</title>
</head>

<body>
	<header></header>
	<div class="top-wrapper">
		<div class="container"></div>
<h1>PT. SAMBROS SUKSES ABADI</h1>

<a href="tambah.php">Tambah Data Pic</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Pilih</th>
			<th>Nama</th>
			<th>Email Address</th>
			<th>Phone Number</th>
			<th>Address</th>
		</tr>

		<?php $i=1 ;?>
		<?php foreach ($pic as $row) : ?>

		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="">ubah</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm ('yakin?');">hapus</a>
			</td>
			<td><?= $row["nama"];?></td>
			<td><?= $row["email"];?></td>
			<td><?= $row["phone"];?></td>
			<td><?= $row["address"];?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>

</table>
</div>
</body>
</style>
</html>