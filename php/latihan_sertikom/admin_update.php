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
        $id_admin = $_GET['id'];
        $sql = "SELECT * FROM tbl_admin WHERE id_admin='".$id_admin."'";
        //menjalankan query
        $query = mysqli_query($db, $sql);
        //mengambil data kamar sebagai array
        $data = mysqli_fetch_array($query);

        if (isset($_POST['nama'])) {
            //if data jenis kamar disubmit melalui form
            //mendapatkan nilai dari form
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "UPDATE `tbl_admin` SET `nama` = '".$nama."', `username` = '".$username."', `password` = '".$password."' WHERE `id_admin` = '".$id_admin."'";
            mysqli_query($db, $sql);
            header('location:admin_read.php');
        }
    ?>
    <h1>Data admin</h1>
    <a href="kamar_read.php">Data kamar</a>
    <a href="admin_read.php">Data admin</a>
    <a href="penyewaan_read.php">Data penyewaan</a>
    <a href="logout.php">Logout</a>
    <hr>

    <!-- form untuk memasukkan data -->
    <form method="POST">
        <table border="1">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?=$data['nama']?>"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="<?=$data['username']?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input name="password" rows="4" value="<?=$data['password']?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>