<?php
    session_start();
    include 'koneksi.php';

    // Konfigurasi
    $jumlahDataPerHalaman = 4;
    $jumlahData = count(query("SELECT * FROM siswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    // Cara cepat if else
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $dataAwal = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    // Pagination
    if (isset($_POST["cari"])) {
        $keyword = $_POST["keyword"];
        $siswa = cari($keyword);
    } else {
        $siswa = query("SELECT * FROM siswa LIMIT $dataAwal, $jumlahDataPerHalaman");
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XI RPL | Database</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="style-index.css">
    <link rel="stylesheet" href="button.css">
    
    <!-- Pagination styling -->
    <style>
        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: black;
            border: 1px solid #ddd;
            margin: 0 4px;
        }

        .pagination a.active {
            background-color: #007bff;
            color: black;
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar bg-body-tertiary bg-dark border-bottom border-body" style="padding-left: 5%;" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-2 mt-2 h1">Ariva Zweena</span>
        </div>
    </nav>

    <div class="element">
        <h1 class="poppins-black">Table of data</h1>
        <div class="col-md-12" style="text-align: end; padding-bottom: 1.5%; padding-right: 1.5%;">
            <a href="tambah.php" id="" class="bn5" role="button">Tambah data</a>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="display table table-striped table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama siswa</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jenis kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead> 
                    <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM siswa");
                        $no = 1;
                        while ($siswa = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?= $no++."."; ?></td>
                            <td><?= $siswa['Nama']; ?></td>
                            <td><?= $siswa['Kelas']?></td>
                            <td><?= $siswa['Jenis_Kelamin']?></td>
                            <td><?= $siswa['Alamat']?></td>
                            <td class="project-actions text-center">
                                <a name="" id="" class="btn btn-primary" href="Edit.php?id=<?= $siswa['id']; ?>" role="button">Edit</a>
                                <a name="" id="" class="btn btn-danger" href="Delete.php?id=<?= $siswa['id']; ?>" onclick="return confirm('Data ini akan dihapus, yakin?')" role="button">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
                <!-- Pagination -->
                <div class="pagination">
                    <?php if ($halamanAktif > 1): ?>
                        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo; Previous</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
                        <?php if ($i == $halamanAktif): ?>
                            <a href="?halaman=<?= $i ?>" class="active"><?= $i ?></a>
                        <?php else: ?>
                            <a href="?halaman=<?= $i ?>"><?= $i ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($halamanAktif < $jumlahHalaman): ?>
                        <a href="?halaman=<?= $halamanAktif + 1 ?>">Next &raquo;</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
