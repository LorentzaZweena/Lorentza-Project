<?php 
	echo date("l"); //day
	echo date("d"); //tanggal
    
    echo "<br>"; //garis baru
	echo date("l, d-M-Y"); //hari, tanggal-bulan-tahun

    echo time(); //untuk menampilkan detik yg sudah berlalu dari 1 januari 1970
    echo date("l", time()+172800) // outputnya adalah 2 hari setelah hari ini
    
    echo date("l", time()+60*60*24*100) //kalo mau php nya yg ngitung
	echo date("l", time()-60*60*24*100) //kalo mau 100 hari kebelakang
	echo date("d M Y", time()-60*60*24*100) //kalo mau lengkapnya
    echo date("l", mktime(0,0,0,9,2,2007)); //kalo mau tau hari apa dilahirkan ke dunia

    echo date("l", strtotime("2 sep 2007")) //sama aja, the difference are kalo mktime pake int, sedangkan strtotime pake string
 ?>