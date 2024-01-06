<?php
	require 'functions.php';
	
	//ambil data di url
	$id = $_GET["id"];

	//query data mahasiswa berdasarkan id
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah data mahasiswa</title>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?=$mhs["id"]; ?>">
		<ul>
			<li>
				<!-- there's errors in input -->
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
			</li>
			<li>
				<label for="nrp">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah data</button>
			</li>
		</ul>
	</form>
</body>
</html>