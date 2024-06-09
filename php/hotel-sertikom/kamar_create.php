<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */

/* .form-control{
    margin-left: 20em;
} */
    </style>
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
        if(isset($_POST['jenis_kamar'])){
            //mengambil nilai dari form
            $jenis_kamar = $_POST['jenis_kamar'];
            $harga = $_POST['harga'];
            $keterangan = $_POST['keterangan'];

            //query untuk memasukkan data
            $sql = "INSERT INTO `tbl_jenis_kamar` (`jenis_kamar`, `harga`, `keterangan`) VALUES ('".$jenis_kamar."', '".$harga."', '".$keterangan."')";
            
            //menjalankan query
            mysqli_query($db, $sql);

            //mengarahkan user kembali ke halaman data kamar
            header('location:kamar_read.php');
        }
    ?>
    
    <h3 class="mt-5 ms-5">Tambah data kamar</h3>
    <div class="d-flex flex-row ms-n2">
  <div class="p-2">
  <div class="dropdown">
  <button class="btn btn-light border border-secondary dropdown-toggle dropdown-toggle-split rounded-0 ms-5 mt-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    All table
  </button>
  <ul class="dropdown-menu mt-2">
    <li><a class="dropdown-item" href="kamar_read.php">Data kamar</a></li>
    <li><a class="dropdown-item" href="admin_read.php">Data admin</a></li>
    <li><a class="dropdown-item" href="penyewaan_read.php">Data penyewaan</a></li>
  </ul>
</div>
  </div>
  <!-- <div class="p-2">
    <nav class="navbar bg-transparent">
  <div class="container-fluid bg-transparent">
    <form class="d-flex bg-transparent rounded-0" role="search">
      <input class="form-control me-2 rounded-0" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success rounded-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div> -->
  <div class="p-2">
    <div class="buat-logout">
    <a class="btn btn-light border border-black rounded-0 mt-2 ms-1" href="logout.php" role="button" style="width: 100%;">Logout</a>
    </div>
</div>
</div>
<hr>


    <!-- <h1>Data kamar</h1>
    <a href="kamar_read.php">Data kamar</a>
    <a href="admin_read.php">Data admin</a>
    <a href="penyewaan_read.php">Data penyewaan</a>
    <a href="logout.php">Logout</a>
    <hr> -->

    <!-- form untuk memasukkan data -->
    <!-- <form method="POST">
    <label for="fname">Tambah jenis kamar</label>
    <input type="text" name="jenis_kamar" placeholder="jenis kamar">

    <label for="lname">Last Name</label>
    <input type="text" name="harga" placeholder="Harga">
    <input type="text" name="keterangan" placeholder="keterangan">
    <input type="submit" value="Submit"> -->
    <!-- </form> -->

    <form method="post">
    <div class="mb-3 ms-5 mt-5" style="width: 50%;">
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
  <input type="text" class="form-control ms-5" id="exampleFormControlInput1" name="jenis_kamar" placeholder="Jenis kamar">
</div>
<div class="mb-3 ms-5 mt-2" style="width: 50%;">
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
  <input type="text" class="form-control ms-5" id="exampleFormControlInput1" name="harga" placeholder="Harga">
</div>
<div class="mb-3 ms-5" style="width: 50%;">
  <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
  <textarea class="form-control ms-5" id="exampleFormControlTextarea1" rows="3" name="keterangan" placeholder="Keterangan"></textarea>
  <button type="submit" class="btn btn-success ms-5 mt-3" value="simpan">Simpan</button>
  <!-- <tr>
    <td colspan="2"><input type="submit" value="simpan"></td>
  </tr> -->
</div>
</form>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>