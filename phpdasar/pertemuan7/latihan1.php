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
 ?>