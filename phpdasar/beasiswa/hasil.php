<?php
    require_once 'connection.php';
    require_once 'header.php';
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Nilai</th>
            <th scope="col">Gambar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            $querySelect = "SELECT tbl_siswa.nama_siswa nama, tbl_kelas.nama_kelas kelas, tbl_siswa.nilai, tbl_siswa.gambar gambar FROM tbl_siswa INNER JOIN tbl_kelas ON kelas = tbl_kelas.id_kelas;";
            $result = $connect->query($querySelect);
            if($result->num_rows > 0) : while ($row = $result->fetch_assoc()) :
        ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['kelas']?></td>
            <td><?=$row['nilai']?></td>
            <td><img src="./image/<?=$row['gambar']?>" class="rounded" style="max-width: 50%;" alt="Berkas"></td>
        </tr>
        <?php
        $no++;
            endwhile;
            endif;
        ?>
    </tbody>
</table>