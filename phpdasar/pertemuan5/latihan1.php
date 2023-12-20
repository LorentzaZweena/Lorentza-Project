<?php 
	//cara 1 menggunakan array
	$pensil_warna = array("merah", "jingga", "kuning");
	//cara 2
	$bulan = ["January", "February", "March"];

	//cara 1 untuk menampilkan array
	var_dump($pensil_warna);
	echo "<br>";
	//cara 2 untuk menampilkan array
	print_r($bulan);

	//untuk menampilkan 1 element aja
    echo "<br>";
	echo $pensil_warna[0];

	echo "<br>";
	echo $bulan[1];

    //untuk update array
    var_dump($pensil_warna);
	$pensil_warna[] = "Hijau";
	$pensil_warna[] = "Biru";
	echo "<br>";
	var_dump($pensil_warna);
 ?> 