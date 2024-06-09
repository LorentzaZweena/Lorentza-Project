<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("config.php");
    ?>
    <?php
        if(isset($_POST['nama'])){
            //mengambil nilai dari form
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            //query untuk memasukkan data
            $sql = "INSERT INTO `tbl_admin` (`nama`, `username`, `password`) VALUES ('".$nama."', '".$username."', '".$password."')";
            
            //menjalankan query
            mysqli_query($db, $sql);

            //mengarahkan user kembali ke halaman data kamar
            header('location:admin_read.php');
        }
        if (!isset($_SESSION['login'])) {
            header('location:login.php');
            exit();
        }
    ?>

    <!-- judul halaman -->
   <h3 class="mt-5 ms-5">Tambah data Admin</h3>

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
            <!-- <a class="btn btn-success mt-2 ms-n3" href="admin_create.php" role="button">Tambah Admin</a> -->
        </div>
        </div>
        </div>
    <hr>

    <form method="POST">
    <div class="mb-3 ms-5 mt-5" style="width: 50%;">
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
  <input type="text" class="form-control ms-5" id="exampleFormControlInput1" name="nama" placeholder="Nama lengkap">
</div>
<div class="mb-3 ms-5 mt-2" style="width: 50%;">
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
  <input type="text" class="form-control ms-5" id="exampleFormControlInput1" name="username" placeholder="Username">
</div>
<div class="mb-3 ms-5" style="width: 50%;">
  <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
  <input type="password" class="form-control ms-5" id="exampleFormControlInput1" name="password" placeholder="Password">
  <button type="submit" class="btn btn-success ms-5 mt-3" value="simpan">Simpan</button>
  <!-- <tr>
    <td colspan="2"><input type="submit" value="simpan"></td>
  </tr> -->
</div>
    </form>
</body>
</html>