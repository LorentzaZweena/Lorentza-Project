<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .tambah-data{
            margin-left: 55em;
        }
    </style>
</head>
<body>
    <?php 
        // include file konfigurasi untuk koneksi ke database
        include("config.php");    
    ?>

    <!-- judul halaman -->
    <h3 class="mt-5 ms-5">Data kamar</h3>

    <!-- navigasi untuk mengakses data kamar dan data lainnya -->
    <div class="d-flex flex-row ms-n2">
  <div class="p-2">
  <div class="dropdown">
  <button class="btn btn-light border border-secondary dropdown-toggle dropdown-toggle-split rounded-0 ms-5 mt-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    All table
  </button>
  <ul class="dropdown-menu mt-2">
    <li><a class="dropdown-item" href="index.php">Data hotel</a></li>
    <li><a class="dropdown-item" href="admin_read.php">Data admin</a></li>
    <li><a class="dropdown-item" href="penyewaan_read.php">Data penyewaan</a></li>
  </ul>
</div>
  </div>
  <div class="p-2">
    <a class="btn btn-light border border-black rounded-0 mt-2 ms-n3" href="logout.php" role="button" style="width: 100%;">Logout</a>
</div>
<div class="tambah-data">
    <div class="p-2 ms-5">
        <a class="btn btn-success mt-2 ms-n3" href="kamar_create.php" role="button">Tambah data</a>
    </div>
</div>
</div>
    <br><br>
    <table class="table ms-5" style="width: 90%">
  <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">Jenis kamar</th>
      <th scope="col">Harga</th>
      <th scope="col">Keterangan</th>
      <!-- <th scope="col">Total</th> -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $no = 1;
            // query untuk mengambil data
            $sql = "SELECT * FROM tbl_jenis_kamar";

            //menjalankan query
            $query = mysqli_query($db, $sql);

            while($data = mysqli_fetch_array($query)){
                //looping untuk menampilkan data
                echo "<tr>";
                echo "<td>".$no++."</td>";

                //menampilkan jenis kamar
                echo "<td>".$data['jenis_kamar']."</td>";

                //menampilkan harga kamar
                echo "<td>".$data['harga']."</td>";

                //menampilkan keterangan kamar
                echo "<td>".$data['keterangan']."</td>";

                //kolom untuk action
                echo "<td>";

                //edit
                echo "<a href='kamar_update.php?id=".$data['id_kamar']."'>Edit</a> |";

                //delete
                echo "<a href='kamar_delete.php?id=".$data['id_kamar']."'>Delete</a> |";
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