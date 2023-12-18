<?php 
	echo date("l"); //day
	echo date("d"); //tanggal
    
    echo "<br>"; //garis baru
	echo date("l, d-M-Y"); //hari, tanggal-bulan-tahun

    echo time(); //untuk menampilkan detik yg sudah berlalu dari 1 januari 1970
    echo date("l", time()+172800) // outputnya adalah 2 hari setelah hari ini
 ?>