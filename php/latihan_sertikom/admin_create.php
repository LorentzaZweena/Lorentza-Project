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
    ?>

    <h1>Data admin</h1>
    <a href="kamar_read.php">Data kamar</a>
    <a href="admin_read.php">Data admin</a>
    <a href="penyewaan_read.php">Data penyewaan</a>
    <a href="logout.php">Logout</a>
    <hr>

    <form method="POST">
        <table border="1">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>