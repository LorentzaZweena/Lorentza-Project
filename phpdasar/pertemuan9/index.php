<?php 
	//koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	//ambil data dari tabel mahasiswa / query data mahasiswa
	$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
	if (!$result) {
		echo mysqli_error($conn);
	}

	//mysqli_fetch_row untuk mengembalikan array numerik
	$mhs = mysqli_fetch_row($result);
	var_dump($mhs[2])

	//mysqli_fetch_assoc untuk mengembalikan array asosiatif
	$mhs = mysqli_fetch_assoc($result);
	var_dump($mhs["jurusan"])

	//mysqli_fetch_assoc untuk mengembalikan array asosiatif maupun numerik
	//kekurangan nya data nya jadi tampil 2x
	$mhs = mysqli_fetch_array($result);
	var_dump($mhs["3"])

	$mhs = mysqli_fetch_object($result);
	var_dump($mhs->nama);

	//buat nampilin data datanya (tapi masih berantakan)
	while ($mhs = mysqli_fetch_assoc($result) ) {
		var_dump($mhs);
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman admin</title>
	<style>
		img{
			width: 20%;
/*			height: 10%;*/
		}
	</style>
</head>
<body>
	<h1>Daftar mahasiswa</h1>
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
		<?php while ($row = mysqli_fetch_assoc($result) ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>"></td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endwhile; ?>
	</table>
</body>
</html>