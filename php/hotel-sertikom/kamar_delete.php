<?php
    include("config.php");
    $id_kamar = $_GET['id'];

    //delete
    $sql = "DELETE FROM tbl_jenis_kamar WHERE `id_kamar` = '".$id_kamar."'";
    mysqli_query($db, $sql);

    header('location:kamar_read.php');
    if (!isset($_SESSION['login'])) {
        header('location:login.php');
        exit();
    }
?>