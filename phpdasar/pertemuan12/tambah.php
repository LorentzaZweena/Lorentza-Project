<?php
	require 'functions.php';
	if (isset($_POST["submit"])) {
		if (tambah($_POST) > 0) {
			echo "<script>alert('data berhasil ditambahkan'); document.location.href = 'index.php'; </script>";
		} else {
			echo "<script>alert('data gagal ditambahkan'); document.location.href = 'index.php'; </script>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nrp">NRP : </label>
				<input type="text" name="nrp" id="nrp" required>
			</li>
			<li>
				<label for="nrp">Nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah data</button>
			</li>
		</ul>
	</form>
</body>
</html>