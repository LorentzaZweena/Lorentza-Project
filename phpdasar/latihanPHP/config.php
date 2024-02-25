<?php
    //variable = sambungin("namaserver", "username", "password", "namadatabase");
    $koneksi = mysqli_connect("localhost", "root", "", "db_rpl_arivazweena");
    
    //check connection
    if(mysqli_connect_errno()){
        echo "koneksi database gagal: " . mysqli_connect_error();
    }

    //configuration database
    return array(
        'host' => "localhost",
        'username' => "root",
        'password' => "",
        'dbname' => "db_rpl_arivazweena",
        //'port' => "", //sementara menggunakan port bawaan
    );
?>