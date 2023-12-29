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
		<tr>
			<td>1</td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><img src="img/photo1.jpeg"></td>
			<td>549579896</td>
			<td>Ariva Zweena</td>
			<td>abc@gmail.com</td>
			<td>RPL</td>
		</tr>
	</table>
</body>
</html>