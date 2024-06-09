<?php
    include("config.php");
    $id_sewa = $_GET['id'];
    $sql = "DELETE FROM tbl_penyewaan WHERE `id_sewa` = '".$id_sewa."'";
    mysqli_query($db, $sql);
    header('location:index.php');
    if (!isset($_SESSION['login'])) {
        header('location:login.php');
        exit();
    }
?>