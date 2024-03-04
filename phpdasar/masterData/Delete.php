<?php
    include('koneksi.php');

    //ambil data dari url
    $id = $_GET['id'];

    //buat fungsi hapus
    function hapus($id) {
        global $koneksi;
        mysqli_query($koneksi,"DELETE FROM siswa WHERE id = '$id'");
    }

    $result = mysqli_query($koneksi,"DELETE FROM siswa WHERE id = '$id'");
    if (hapus($id) > 0) {
        echo "<script>alert('Data gagal dihapus!');document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Data berhasil dihapus!');document.location.href = 'index.php';</script>";
    }
?>