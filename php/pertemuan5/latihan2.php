<?php 
	$angka = [89, 12, 45, 78, 23, 56, 70];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan 2</title>
 	<style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}

 		.clear { clear: both; }
 	</style>
 </head>
 <body>
    
 <!-- cara 1 -->
 	<?php for ($i = 0; $i < count($angka); $i++) { ?>
 	<div class="kotak"><?php echo $angka[$i]; ?></div>
 <?php } ?>
    <!-- cara 1 -->

    <!-- cara 2 -->
    <div class="clear"></div>
 <?php foreach ($angka as $a) { ?>
 	<div class="kotak"><?= $a ?></div>
 <?php } ?>
    <!-- cara 2 -->

    <!-- cara 3, sama aja tapi pembuka dan penutup nya aja yg beda -->
 <div class="clear"></div>
 <?php foreach($angka as $a) :  ?>
 	<div class="kotak"><?= $a ?></div>
 <?php endforeach; ?>
    <!-- cara 3 -->
 </body>
 </html>