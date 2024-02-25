<!-- <?php 
	// pengulangan
	
    // for
    for ($i = 0; $i < 5; $i++) { 
		echo "Hello world! <br>";
	}

    // while
    $i = 0;
	while ($i < 7) {
		echo "Helloooo <br>";
		$i++;
	}

    // do while
    $i = 0;
	do{
		echo "Hewo <br>";
	$i++;
	} while ($i < 5);
 ?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<!-- cara 1 -->
        <?php 
			for ($i=1; $i <= 3; $i++) { 
				echo "<tr>";
				for ($j=0; $j <= 5 ; $j++) { 
					echo "<td>$i, $j</td>";
				}
				echo "</tr>";
			}
		 ?>
         <!-- cara 1 -->
         
         <!-- cara 2 -->
         <?php for ($i = 1; $i <= 3 ; $i++) :  ?>
			<tr>
				<?php for ($j=1; $j <=5 ; $j++) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
        <!-- cara 2 -->

        <!-- cara ngubah warna kolom tabel genap -->
        <?php for ($i = 1; $i <= 5 ; $i++) :  ?>
			<?php if ($i % 2 == 0) : ?>
			<tr class="warna-baris">
				<?php else : ?>
				<tr></tr>
			<?php endif; ?>
				<?php for ($j=1; $j <=5 ; $j++) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
        <!-- cara ngubah warna kolom tabel genap -->

       <!-- cara ngubah warna kolom tabel ganjil -->
        <?php for ($i = 1; $i <= 5 ; $i++) :  ?>
			<?php if ($i % 2 == 0) : ?>
			<tr class="warna-baris">
				<?php else : ?>
				<tr></tr>
			<?php endif; ?>
				<?php for ($j=1; $j <=5 ; $j++) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
        <!-- cara ngubah warna kolom tabel ganjil -->
	</table>
</body>
</html>