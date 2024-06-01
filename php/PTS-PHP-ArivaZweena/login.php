<?php
session_start();
include 'config.php';

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

//🍪
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($connection, "SELECT name FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //check cookie and username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($connection, "SELECT * FROM users WHERE name = '$username'");

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PTS</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <br><br><br><br>
        <div class="login-euy">
            <h1>Welcome back!</h1>
            <p>Log in to continue</p>
            <form action="index.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="User" required>
                
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="*****">
            
                <input type="submit" value="Login" name="login">
                <p class="register">No account? <a href="register.php">Sign in</a></p>
            </form>
        </div>
    </div>
</body>
</html>
