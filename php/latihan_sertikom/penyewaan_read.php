<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .tambah-data{
            margin-left: 55em;
        }
    </style>
</head>
<body>
    <?php 
        include("config.php");
    ?>

    <!-- judul halaman -->
    <h3 class="mt-5 ms-5">Data penyewaan</h3>

    <!-- navigasi untuk mengakses data kamar dan data lainnya -->
    <div class="d-flex flex-row ms-n2">
  <div class="p-2">
  <div class="dropdown">
  <button class="btn btn-light border border-secondary dropdown-toggle dropdown-toggle-split rounded-0 ms-5 mt-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    All table
  </button>
  <ul class="dropdown-menu mt-2">
    <li><a class="dropdown-item" href="kamar_read.php">Data kamar</a></li>
    <li><a class="dropdown-item" href="admin_read.php">Data admin</a></li>
    <li><a class="dropdown-item" href="index.php">Data hotel</a></li>
  </ul>
</div>
  </div>
  <div class="p-2">
    <a class="btn btn-light border border-black rounded-0 mt-2 ms-n3" href="logout.php" role="button" style="width: 100%;">Logout</a>
</div>
<div class="tambah-data">
    <div class="p-2 ms-5">
        <a class="btn btn-success mt-2 ms-n3" href="penyewaan_create.php" role="button">Tambah penyewaan</a>
    </div>
</div>
</div>
    <br><br>
    <table class="table ms-5" style="width: 90%">
  <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">Nama lengkap</th>
      <th scope="col">No identitas</th>
      <th scope="col">No hp</th>
      <th scope="col">Jenis kamar</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
            $sql = "SELECT tbl_penyewaan.*, tbl_jenis_kamar.*, tbl_admin.nama as nama_admin from tbl_penyewaan join tbl_jenis_kamar on tbl_penyewaan.id_kamar=tbl_jenis_kamar.id_kamar join tbl_admin on tbl_penyewaan.id_admin=tbl_admin.id_admin";
            $query = mysqli_query($db, $sql);
            $no = 1;

            while($data=mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['no_identitas']."</td>";
                echo "<td>".$data['no_hp']."</td>";
                echo "<td>".$data['jenis_kamar']."</td>";
                echo "<td>".$data['jumlah']."</td>";
                echo "<td>".$data['total']."</td>";
                echo "<td>";

                echo "<a href='penyewaan_update.php?id=".$data['id_sewa']."'>Edit</a> |";
                echo "<a href='penyewaan_delete.php?id=".$data['id_sewa']."'> Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>