<?php
    session_start();
    include 'config.php';
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes</title>
    <link rel="stylesheet" href="style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index3.php">Zweena</a>
        </div>
        <nav class="navigation">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Project</a>
            <a href="">Contact</a>
        </nav>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </header>
    <section class="isi">
     <div class="flex">
        <div class="kiri">
            <h3>Hello, there!</h3>
            <h1>I'm Ariva <span>Zweena</span></h1>
            <div class="desc">
                <p>I am a student at SMK Informartika pesat majoring in software engineering.</p>
            </div>
            <div class="lel">
                <div class="btn1">
                    <a href="https://sites.google.com/view/portofolio-ariva-zweena/home">Projects</a>
                </div>
                <div class="btn1">
                    <a href="">Contact</a>
                </div>
            </div>
        </div>
        <div class="kanan">
            <div class="image">
                <img src="img/cat2.jpg">
            </div>
        </div>
    </div>
    </section>
    <section class="skills">
        <div class="flex">
            <div class="image1">
                <img src="img/kotlin.png">
                <img src="img/HTML-CSS-removebg-preview.png" class="image2">
                <!-- <img src="img/c++-removebg-preview.png" class="image3"> -->
            </div>
        </div>
    </section>
</body>
</html>