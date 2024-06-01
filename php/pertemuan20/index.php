<?php 
	session_start();
	if (!isset($_SESSION["login"])) {
		header("Location: login.php");
		exit;
	}
	require 'functions.php';
	$mahasiswa = query("SELECT * FROM mahasiswa");

	if (isset($_POST["cari"])) {
		$mahasiswa = cari($_POST["keyword"]);
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman admin</title>
	<style>
		.loader{
			width: 100px;
			position: absolute;
			top: 118px;
			z-index: -1;
			left: 210px;
			display: none;
		}
	</style>
</head>
<body>
	<a href="logout.php">Logout</a>
	<h1>Daftar mahasiswa</h1>
	<a href="tambah.php">Tambah data mahasiswa</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Cari</button>
		<img src="im/loading.gif" class="loader">
	</form>
	<br>
	<div id="container">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach($mahasiswa as $row ): ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>"></td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>
	</div>
	<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>