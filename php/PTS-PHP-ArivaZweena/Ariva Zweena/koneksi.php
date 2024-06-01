<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_siswa_xirpl");
    //check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : ". mysqli_connect_error();
    }

    //configurasi database
    return array(
        'host' => "localhost",
        'username' => "root",
        'password' => "",
        "dbname" => "db_siswa_xirpl"
    );
?>