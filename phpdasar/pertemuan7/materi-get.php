<?php 
	$x = 10;

	function tampilX(){
		//buat nyari variable di luar function / diluar mana pun
        global $x;
		echo $x;
	}

    //buat nampilin fungsi nya
	tampilX();

    //untuk mengetahui apa aja yg udah ada di server
    echo $_SERVER["SERVER_NAME"];

	//cara penggunaan $_GET
	$_GET["nama"] = "Ariva Zweena";
	$_GET["NIS"] = "1234567";
	var_dump($_GET);

	//cara kedua penggunaan $_GET
	//di akhir url atau link servernya tambahin :
	// ?nama=Ariva Zweena&NIS=1234567
?>

<!-- cara buat daftar mahasiswa yg jika di klik isinya akan sesuai dengan array nya -->
<!-- materi $_GET -->
<?php 
	$mahasiswa = [
		["nama" => "Ariva Zweena", 
		 "NRP" => "9594865", 
		 "Email" => "xyz@gmail.com", 
		 "Jurusan" => "RPL",
		 "Gambar" => "photo1.jpeg"],
		
		["nama" => "Lorentza", 
		 "NRP" => "83853848", 
		 "Email" => "abc@gmail.com", 
		 "Jurusan" => "Teknik Informatika",
		 "Gambar" => "photo2.jpeg"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>GET</title>
 </head>
 <body>
 	<h1>Daftar mahasiswa</h1>
 	<ul>
 	<?php foreach($mahasiswa as $mhs) : ?>
 		<li>
 			<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
 			&NRP=<?= $mhs["NRP"]; ?>
 			&Email=<?= $mhs["Email"] ?>
 			&Jurusan=<?= $mhs["Jurusan"] ?>
 			&Gambar=<?= $mhs["Gambar"] ?>"><?= $mhs["nama"]; ?></a>
 		</li>
 	<?php endforeach; ?>
 	</ul>
 </body>
 </html>