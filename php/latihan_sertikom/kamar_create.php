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

    <h1>Data kamar</h1>
    <a href="kamar_read.php">Data kamar</a>
    <a href="admin_read.php">Data admin</a>
    <a href="penyewaan_read.php">Data penyewaan</a>
    <a href="logout.php">Logout</a>
    <hr>

    <!-- form untuk memasukkan data -->
    <form method="POST">
        <table border="1">
            <tr>
                <td>Jenis kamar</td>
                <td><input type="text" name="jenis_kamar"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>