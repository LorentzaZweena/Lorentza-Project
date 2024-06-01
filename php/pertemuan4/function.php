    <!-- function php nya -->
<?php 
	function salam($waktu, $nama) {
		return "Good $waktu, $nama!";
	}
 ?>
    <!-- function php nya -->
    
   
   <!-- cara biar waktunya sesuai dengan waktu -->
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Latihan function</title>
 </head>
 <body>
 	<h1><?= salam("Morning", "Zweena"); ?></h1>
    <!-- cara biar waktunya sesuai dengan waktu -->
 </body>
 </html>