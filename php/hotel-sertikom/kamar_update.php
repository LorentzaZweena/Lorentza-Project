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
        if (!isset($_SESSION['login'])) {
            header('location:login.php');
            exit();
        }
    ?>

    <?php 
        //mendapatkan id dari url
        $id_kamar = $_GET['id'];
        $sql = "SELECT * FROM tbl_jenis_kamar WHERE id_kamar='".$id_kamar."'";
        //menjalankan query
        $query = mysqli_query($db, $sql);
        //mengambil data kamar sebagai array
        $data = mysqli_fetch_array($query);

        if (isset($_POST['jenis_kamar'])) {
            //if data jenis kamar disubmit melalui form
            //mendapatkan nilai dari form
            $jenis_kamar = $_POST['jenis_kamar'];
            $harga = $_POST['harga'];
            $keterangan = $_POST['keterangan'];

            $sql = "UPDATE `tbl_jenis_kamar` SET `jenis_kamar` = '".$jenis_kamar."', `harga` = '".$harga."', `keterangan` = '".$keterangan."' WHERE `id_kamar` = '".$id_kamar."'";
            mysqli_query($db, $sql);
            header('location:kamar_read.php');
        }
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
        <!-- <a class="btn btn-success mt-2 ms-n3" href="kamar_create.php" role="button">Tambah kmaar</a> -->
    </div>
</div>
</div>

    <!-- form untuk memasukkan data -->
    <form method="POST">
    <div class="mb-3 ms-5 mt-5" style="width: 50%;">
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
  <input type="text" class="form-control ms-5" id="exampleFormControlInput1" name="jenis_kamar" placeholder="Jenis kamar" value="<?=$data['jenis_kamar']?>">
</div>
<div class="mb-3 ms-5 mt-2" style="width: 50%;">
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
  <input type="text" class="form-control ms-5" id="exampleFormControlInput1" name="harga" placeholder="Harga" <input type="text" name="harga" value="<?=$data['harga']?>">
</div>
<div class="mb-3 ms-5" style="width: 50%;">
  <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
  <textarea class="form-control ms-5" id="exampleFormControlTextarea1" rows="3" name="keterangan" placeholder="Keterangan"><?=$data['keterangan']?></textarea>
  <button type="submit" class="btn btn-success ms-5 mt-3" value="simpan">Simpan</button>
  <!-- <tr>
    <td colspan="2"><input type="submit" value="simpan"></td>
  </tr> -->
</div>
    </form>
</body>
</html>