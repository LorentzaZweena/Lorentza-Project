<?php
    session_start();
    include 'config.php';

    // if(!isset($_SESSION["login"])){
    //     header("Location: login.php");
    //     exit;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PTS</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="kiri">
        <a href="logout.php" class="logout">Logout</a>
            <h1>Hello!</h1>
            <h2>I'm <span>Ariva Zweena</span></h2>
            <!-- <p>Software Enginner</p> -->
            <li>I'm a student from pesat vocation high school majoring <br>Software Enginner, I'm currently studying PHP right now</li>
            <div class="buttons">
            <button><a href="https://sites.google.com/view/portofolio-ariva-zweena/home">My project</a></button>
            <button class="database"><a href="../Ariva Zweena/index.php">Table of data</a></button>
            <button class="contact"><a href="https://wa.me/0895337414144">Contact</a></button>
            </div>
        </div>
        <div class="kanan">
            <img src="image1.jpg" alt="">
        </div>
    </div>
</body>
</html>