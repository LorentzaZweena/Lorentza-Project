<?php 
	// echo "Ariva Zweena";
	// //ini materi komentar
	
	//dan macam macam output php

	print "Hello World!";
	print_r("PHP dasar");
	var_dump("Lorentza");

	echo 123; //int
	echo true; //boolean
	echo false; //boolean

	//cara buat dan penggunaan variable
	$nama = "Ariva";
	echo "Halo, nama saya $nama";

	//operator matematika
	echo 1+1;
	echo 5-2;
	echo 10/5;

	$x = 6;
	$y = 2;
	echo $x / $y;

	//concat (penggabung string)
	$nama_depan = "Ariva";
	$nama_belakang = "Zweena";
	echo $nama_depan . " ".  $nama_belakang;

	//assignment
	$x = 7;
	$x += 6;
	echo $x;

	$nama = "ariva";
	$nama .= " ";
	$nama .= "zweena";
	echo $nama;

	//perbandingan (comparison)
	var_dump(1 < 5);
	var_dump(5 > 10);
	var_dump(4 == "4");

	//identitas
	var_dump(5 === "5")

	//logika
	$x  = 10;
	var_dump($x < 20 && $x % 2 == 0);
	var_dump($x > 20 || $x % 2 == 0);
 ?>