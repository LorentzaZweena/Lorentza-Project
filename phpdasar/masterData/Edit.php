<?php
    include 'koneksi.php';
    function query( $query ) {
        global $koneksi;
        $result = mysqli_query( $koneksi, $query );
        $rows = [];
        while ( $row = mysqli_fetch_assoc( $result ) ){
            $rows[] = $row;
        }
        return $rows;
    }
    //ambil data dari url
    $id = $_GET['id'];

    //buat query untuk menampilkan data yang akan diedit
    $siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

    //tombol edit di tekan
    if(isset($_POST["submit"])){
        //ambil data dari form
        $data = $_POST;

        $id = ($data['id']);
        $nama = htmlspecialchars($data['Nama']);
        $kelas = htmlspecialchars($data['Kelas']);
        $Jenis_Kelamin = htmlspecialchars($data['Jenis_Kelamin']);
        $Alamat = htmlspecialchars($data['Alamat']);

        //query edit data
        $update = "UPDATE siswa SET nama = '$nama', kelas = '$kelas', Jenis_Kelamin = '$Jenis_Kelamin', Alamat = '$Alamat' WHERE id = $id";
        mysqli_query( $koneksi, $update );

        //alert edit data berhasil
        echo "<script>alert('Data berhasil di edit!');</script>";

        //redirect ke halaman utama
        echo "<script>location='index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XI RPL | Database</title>
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
            <span class="navbar-brand mb-2 mt-2 h1">Halaman <span>Edit data</span></span>
        </div>
    </nav>

    <div class="card col-md-8" id="formCard">
    <h5 class="card-header bg-primary"></h5>
    <div class="card-body">
                <h5 class="card-title">Edit data siswa</h5>
                <form action="" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" class="form-control" required value="<?= $siswa['id']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama lengkap :</label>
                        <input type="text" name="Nama" id="Nama" class="form-control" required value="<?= $siswa['Nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <input type="text" name="Kelas" id="Kelas" class="form-control" required value="<?= $siswa['Kelas']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Jenis Kelamin : </label>
                        <input type="text" name="Jenis_Kelamin" id="Jenis_Kelamin" class="form-control" required value="<?= $siswa['Jenis_Kelamin']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Alamat : </label>
                        <input type="text" name="Alamat" id="Alamat" class="form-control" required value="<?= $siswa['Alamat']; ?>">
                    </div>
                    <div class="form-group">
                       <a href="index.php"><button class="btn btn-dark col-sm-12" style="color: white;" type="submit" name="submit">Edit data siswa</button></a>
                    </div>
                 </div>
            </div>
</body>
</html>