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
    $siswa = query("SELECT * FROM tbl_siswa WHERE id = $id")[0];

    //tombol edit di tekan
    if(isset($_POST["submit"])){
        //ambil data dari form
        $data = $_POST;

        $id = ($data['id']);
        $nama = htmlspecialchars($data['Nama']);
        $kelas = htmlspecialchars($data['Kelas']);
        // $Jenis_Kelamin = htmlspecialchars($data['Jenis_Kelamin']);
        $Nilai = htmlspecialchars($data['Nilai']);
        
        // $Gambar = upload();
        // if(!$Gambar){
        //     return false;       
        // }

        // function upload(){
        //     $namaFile = $_FILES['gambar']['nama'];
        //     $ukuranFile = $_FILES['gambar']['size'];
        //     $error = $_FILES['gambar']['error'];
        //     $tmpName = $_FILES['gambar']['tmp_name'];

        //     if($error === 4){
        //         echo"<script>alert('Pilih gambar terlebih dahulu')</script>";
        //         return false;
        //     }

        //     if($ukuranFile > 1000000){
        //         echo"<script>alert('Ukuran terlalu besar')</script>";
        //         return false;
        //     }

        //     $namaFileBaru = uniqid();
        //     $namaFileBaru .= '.';
        //     $namaFileBaru .= $ekstensiGambar;
        //     move_uploaded_file($tmpName, 'img/' .$namaFileBaru);
        //     return $namaFileBaru;
        // }

        //query edit data
        $update = "UPDATE tbl_siswa SET nama_siswa = '$nama', kelas = '$kelas', Nilai = '$Nilai' WHERE id = $id";
        mysqli_query( $koneksi, $update );

        //alert edit data berhasil
        echo "<script>alert('Data berhasil di edit!');</script>";

        //redirect ke halaman utama
        echo "<script>location='input_nilai.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data beasiswa</title>
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
                        <label for="Nilai">Nilai : </label>
                        <input type="text" name="Nilai" id="Nilai" class="form-control" required value="<?= $siswa['Nilai']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar : </label>
                        <input type="file" name="Gambar" id="Gambar" class="form-control" required value="<?= $siswa['Gambar']; ?>">
                    </div>

                    <div class="form-group">
                       <a href="input_nilai.php"><button class="btn btn-dark col-sm-12" style="color: white;" type="submit" name="submit">Edit data</button></a>
                    </div>
                 </div>
            </div>
</body>
</html>