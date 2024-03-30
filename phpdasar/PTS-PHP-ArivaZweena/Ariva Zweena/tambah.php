<?php
    session_start();
    include 'koneksi.php';

    //tambah data when di tekan
    if (isset($_POST["submit"])){
        //ambil data
        $Nama = htmlspecialchars($_POST["Nama"]);
        $Kelas = htmlspecialchars($_POST["Kelas"]);
        $Jenis_Kelamin = htmlspecialchars($_POST["Jenis_Kelamin"]);
        $Alamat = htmlspecialchars($_POST["Alamat"]);

        //insert data
        $result = mysqli_query($koneksi, "INSERT INTO siswa VALUES (0, '$Nama', '$Kelas', '$Jenis_Kelamin', '$Alamat')");
        echo "<script>alert('Data Berhasil ditambahkan!')</script>";
        echo "<script>location='index.php';</script>";
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XI RPL | DB</title>
         
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- css -->
        <link rel="stylesheet" href="style-tambah.css">
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar bg-body-tertiary bg-dark border-bottom border-body" style="padding-left: 5%;" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-2 mt-2 h1">Halaman <span>Tambah Data</span></span>
        </nav>

        <div class="card col-md-8" id="formCard">
            <h5 class="card-header bg-primary"></h5>
            <div class="card-body">
                <h5 class="card-title">Tambah data siswa</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="Nama">Nama lengkap :</label>
                        <input type="text" name="Nama" id="Nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <input type="text" name="Kelas" id="Kelas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Nama">Jenis Kelamin : </label>
                        <input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Nama">Alamat : </label>
                        <input type="text" name="Alamat" id="Alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                       <a href="index.php"><button class="btn btn-info col-sm-12" style="color: white;" type="submit" name="submit">Tambah data siswa</button></a>
                    </div>
                 </div>
            </form>
        </div>
    </div>
    </body>
    </html>