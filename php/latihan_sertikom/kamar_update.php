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
                <td><input type="text" name="jenis_kamar" value="<?=$data['jenis_kamar']?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?=$data['harga']?>"></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan" rows="4" cols="50"><?=$data['keterangan']?></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>