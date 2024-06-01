<?php
    include("config.php");
    $id_admin = $_GET['id'];

    //delete
    $sql = "DELETE FROM tbl_admin WHERE `id_admin` = '".$id_admin."'";
    mysqli_query($db, $sql);

    header('location:admin_read.php');
?>