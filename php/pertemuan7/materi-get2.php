<!-- biar aman -->
<?php 
	if (!isset($_GET["nama"]) || 
		!isset($_GET["NRP"]) || 
		!isset($_GET["Email"]) ||
		!isset($_GET["Jurusan"]) ||
		!isset($_GET["Gambar"])) {
		header("Location: latihan1.php");
		exit();
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail mahasiswa</title>
	<style>
		img{
			width: 20%;
		}
	</style>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET["Gambar"]; ?>"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["NRP"]; ?></li>
		<li><?= $_GET["Email"]; ?></li>
		<li><?= $_GET["Jurusan"]; ?></li>
	</ul>
	<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>