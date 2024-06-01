<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $password ='';
    $dbName = 'db_beasiswa';

    $connect = new mysqli($serverName, $userName, $password, $dbName);

    if($connect->connect_error){
        die("Error".$connect->error);
    }
?>
