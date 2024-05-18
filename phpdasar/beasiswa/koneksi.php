<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_beasiswa");
    if(mysqli_connect_errno()){
        echo "koneksi database gagal: " . mysqli_connect_error();
    }

    return array(
        'host' => "localhost",
        'username' => "root",
        'password' => "",
        'dbname' => "db_beasiswa"
    );
?>