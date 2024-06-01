<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("config.php") ?>
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

        <h1>Data Kamar</h1>
        <a href="kamar_read.php">Data Kamar</a>
        <a href="admin_read.php">Data Admin</a>
        <a href="penyewaan_read.php">Data Penyewaan</a>
        <a href="logout.php">Logout</a>
        <hr>

        <div>
            <form action="penyewaan_update.php?id=<?=$id_sewa ?>" method="post">
                <tr>
                    <td>Nama Lengkap</td>
                    <!-- nama lengkap dengan nilai default -->
                    <td><input type="text" name="nama" value="<?=$data['nama'] ?>" /></td>
                    <br><br>
                </tr>
                <tr>
                    <td>No Identitas</td>
                    <!-- no identitas dengan nilai default -->
                    <td><input type="text" name="no_identitas" value="<?=$data['no_identitas'] ?>" /></td>
                    <br><br>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td><input type="text" name="no_hp" value="<?=$data['no_hp'] ?>"></td>
                    <br><br>
                </tr>
                <tr>
                    <td>Jenis Kamar</td>

                    <td>
                        <select name="id_kamar" id="jenis_kamar">
                        <?php 
                        $sql = "SELECT * FROM tbl_jenis_kamar";
                        $query = mysqli_query($db,$sql);
                        $kamar_default = mysqli_fetch_array($query); // ambil data default
                        echo "<option value=".$kamar_default['id_kamar']." data-harga='".$kamar_default['harga']."' selected>".$kamar_default['jenis_kamar']." - Rp ".$kamar_default['harga']." </option>";
                        while($kamar = mysqli_fetch_array($query)){
                            echo "<option value=".$kamar['id_kamar']." data-harga='".$kamar['harga']."'>
                            ".$kamar['jenis_kamar']." - Rp ".$kamar['harga']." </option>";
                        }
                        ?>
                        </select>
                    </td>
                </tr><br><br>
                <tr>
                    <td>Check In</td>
                    <td><input type="date" name="cekin" value="<?=$data['cekin']?>"></td>   
                </tr>
                <tr>
                    <td>Check Out</td>
                    <td><input type="date" name="cekout" value="<?=$data['cekout']?>"></td>
                </tr><br><br>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="number" name="jumlah" id="jumlah_kamar" value="<?=$data['jumlah'] ?>" onchange="hitung()"></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" name="total" id="total_bayar" value="<?=$data['total'] ?>"readonly></td>
                </tr><br><br>
                <tr>
                    <!-- <button type="button" id="btn_hitung" onclick="hitung()">Total Bayar</button> -->
                    <td colspan="2"><Input type="submit" value="Update" style="width:10%"></Input></td>
                </tr>
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