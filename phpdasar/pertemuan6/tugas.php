<?php 
	$makanan = [
		["Nama" => "Pizza (Original)", 
		 "Topping" => "Pepperoni", 
		 "Nama_Pembeli" => "Fateeh Hendharto", 
		 "Alamat" => "Indonesia, Bogor",
		 "Gambar" => "pizza1.jpg"],
		
		["Nama" => "Pizza (Cheezy)", 
		 "Topping" => "Olives, Keju", 
		 "Nama_Pembeli" => "Ariva Zweena", 
		 "Alamat" => "Indonesia, Jakarta",
		 "Gambar" => "pizza2.jpg"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Makanan</title>
 </head>
 <body>
 	<h1>Daftar Makanan</h1>
 	<table border="1" cellpadding="10" cellspacing="0">
			 <tr>
			 	<td>Nama</td>
			 	<td>Topping</td>
			 	<td>Nama Pembeli</td>
			 	<td>Alamat</td>
			 	<td>Gambar</td>
			</tr>
			<tr>
			 	<td><?= $makanan["0"]["Nama"]; ?></td>
			 	<td><?= $makanan["0"]["Topping"]; ?></td>
			 	<td><?= $makanan["0"]["Nama_Pembeli"]; ?></td>
			 	<td><?= $makanan["0"]["Alamat"]; ?></td>
			 	<td><img src="img/pizza1.jpg"></td>
			</tr>
			<tr>
			 	<td><?= $makanan["1"]["Nama"]; ?></td>
			 	<td><?= $makanan["1"]["Topping"]; ?></td>
			 	<td><?= $makanan["1"]["Nama_Pembeli"]; ?></td>
			 	<td><?= $makanan["1"]["Alamat"]; ?></td>
			 	<td><img src="img/pizza2.jpg"></td>
			</tr>
	</table>
 </body>
 </html>