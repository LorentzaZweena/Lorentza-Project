<!-- studi kasus : seorang dosen ingin membuat daftar nama - nama mahasiswa, buatlah list tersebut dengan array php -->

<?php 
	$mahasiswa = [
		["Ariva Zweena", "564676589", "RPL", "xyz@gmail.com"],
		["Lorentza", "83853848", "TKJ", "abc@gmail.com"],
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
 		<li>Nama : <?= $mhs[0]; ?></li>
 		<li>NRP : <?= $mhs[1]; ?></li>
 		<li>Jurusan : <?= $mhs[2]; ?></li>
 		<li>Email : <?= $mhs[3]; ?></li>
 	</ul>
 <?php endforeach; ?>
 </body>
 </html>