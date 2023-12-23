<?php 
	//review materi kemaren

	$hari = array("senin","selasa", "rabu");
	$bulan = ["Januari", "Februari", "Maret"];
	$arr = [100, "teks", true];

	var_dump($hari);
	echo "<br>";
	print_r($bulan);

	echo $arr[0];
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan Array</title>
	<style>
		.kotak{
			width: 30px;
			height: 30px;
			background-color: hotpink;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 0.5s;
		}

		.kotak:hover{
			transform: rotate(360deg);
			border-radius: 50%;
		}

		.clear{
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
		$angka = [[1,2,3],[4,5,6],[7,8,9]];
		$angka2 = [1,2,3,4,5,6,7,8,9];
	 ?>

	 	<!-- buat bikin kotak yg isinya angka variable -->
		<?php foreach($angka2 as $a) : ?>
			<div class="kotak"><?= $a; ?></div>
		<?php endforeach; ?>
		<!-- buat bikin kotak yg isinya angka variable -->

		
		<!-- cara make array didalem array -->
		<?php 
			echo $angka[1][1];
		 ?>
		 <!-- cara make array didalem array -->

		 
		 <!-- buat kotak yg array di dalam array -->
		 <?php foreach($angka as $a) : ?>
	 	  <?php foreach($a as $b) : ?>
			<div class="kotak"><?= $b; ?></div>
		  <?php endforeach; ?>
		  
		  
		  <!-- biar 3 x 3  -->
		  <div class="clear"></div> 
		  <!-- biar 3 x 3  -->

		  
		<?php endforeach; ?>
		<!-- buat kotak yg array di dalam array -->
</body>
</html>