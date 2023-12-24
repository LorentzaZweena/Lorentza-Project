<?php 
	$mahasiswa = [
		["nama" => "Ariva Zweena", 
		 "NRP" => "9594865", 
		 "Email" => "xyz@gmail.com", 
		 "Jurusan" => "RPL",
		 "Gambar" => "hehe2.jpg"],
		
		["nama" => "Lorentza", 
		 "NRP" => "83853848", 
		 "Email" => "abc@gmail.com", 
		 "Jurusan" => "Teknik Informatika",
		 "Gambar" => "hehe1.jpg"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar mahasiswa</h1>
 	<?php foreach($mahasiswa as $mhs) : ?>
 	<ul>
 		<li><img src="img/<?= $mhs["Gambar"]; ?>"></li>
 		<li>Nama : <?= $mhs["nama"]; ?></li>
 		<li>NRP : <?= $mhs["NRP"]; ?></li>
 		<li>Email : <?= $mhs["Email"]; ?></li>
 		<li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
 	</ul>
 	<?php endforeach; ?>
 </body>
 </html>