<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
    <?php 
        include("config.php");
        if (!isset($_SESSION['login'])) {
            header('location:login.php');
            exit();
        }    
    ?>
    <?php 
    $id_sewa=$_GET['id'];
    // mengambil data penyewaan melalui id
    $sql = "SELECT * FROM tbl_penyewaan WHERE id_sewa='".$id_sewa."'";
    // menyimpan daya penyewaan kedalam variable $data
    $query = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($query);

    // jika form disubmit
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        $no_identitas = $_POST['no_identitas'];
        $no_hp = $_POST['no_hp'];
        $id_kamar = $_POST['id_kamar'];
        $cekin = $_POST['cekin'];
        $cekout = $_POST['cekout'];
        $jumlah = $_POST['jumlah'];
        $total = $_POST['total'];

        // query melakukan update data
        $sql="UPDATE tbl_penyewaan SET
        `nama` = '".$nama."',
        `no_identitas` = '".$no_identitas."',
        `no_hp` = '".$no_hp."',
        `id_kamar` = '".$id_kamar."',
        `cekin` = '".$cekin."',
        `cekout` = '".$cekout."',
        `jumlah` = '".$jumlah."',
        `total` = '".$total."' WHERE `id_sewa` ='".$id_sewa."'";
        // menjalankan query update
        mysqli_query($db,$sql);
        // redirect ke halaman penyewaan
        header('location:penyewaan_read.php');
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
<!-- <div class="p-2 ms-5">
    <a class="btn btn-success mt-2 ms-n3" href="kamar_create.php" role="button">Tambah data</a>
</div> -->
</div>
</div>

        <div>
            <form action="penyewaan_update.php?id=<?=$id_sewa ?>" method="post">
            <table class="table ms-5" style="width: 90%">
  <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">Nama lengkap</th>
      <th scope="col">No identitas</th>
      <th scope="col">No hp</th>
      <th scope="col">Jenis kamar</th>
      <th scope="col">Check in</th>
      <th scope="col">Check out</th>
      <th scope="col">Jumlah</th>
      <th scope="col" colspan="4">Total</th>
      <th scope="col" colspan="5">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
        <td><input type="text" name="nama" value="<?=$data['nama'] ?>" /></td>
        <td><input type="text" name="no_identitas" value="<?=$data['no_identitas'] ?>" /></td>
        <td><input type="text" name="no_hp" value="<?=$data['no_hp'] ?>"></td>
        <td>
                        <select name="id_kamar" id="jenis_kamar">
                        <?php 
                        $sql = "SELECT * FROM tbl_jenis_kamar";
                        $query = mysqli_query($db,$sql);
                        $kamar_default = mysqli_fetch_array($query); 
                        echo "<option value=".$kamar_default['id_kamar']." data-harga='".$kamar_default['harga']."' selected>".$kamar_default['jenis_kamar']." - Rp ".$kamar_default['harga']." </option>";
                        while($kamar = mysqli_fetch_array($query)){
                            echo "<option value=".$kamar['id_kamar']." data-harga='".$kamar['harga']."'>
                            ".$kamar['jenis_kamar']." - Rp ".$kamar['harga']." </option>";
                        }
                        ?>
                        </select>
                    </td>
                    <td><input type="date" name="cekin" value="<?=$data['cekin']?>"></td>   
                    <td><input type="date" name="cekout" value="<?=$data['cekout']?>"></td>
                    <td><input type="number" name="jumlah" id="jumlah_kamar" value="<?=$data['jumlah'] ?>" onchange="hitung()"></td>
                    <!-- <td><input type="text" name="total" id="total_bayar" value="<?=$data['total'] ?>"readonly></td> -->
            <td>
            <td><input type="text" name="total" id="total_bayar" style="margin-left: -2em;"value="<?=$data['total'] ?>"readonly></td>
            </td>
            <td colspan="2"><Input type="submit" value="Update" style="width:100%"></Input></td>
    </tr>
</table>
            </form>
        </div>
</body>
</html>

<script>
    function hitung(){
        var jk = document.getElementById("jenis_kamar");
        var harga = jk.options[jk.selectedIndex].dataset.harga;
        var jumlah_kamar = document.getElementById("jumlah_kamar");
        document.getElementById("total_bayar").value = harga * jumlah_kamar.value;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>