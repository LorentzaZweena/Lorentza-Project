<?php
    session_start();
    if(isset($_SESSION["login"])){
        header(("Location: index3.php"));
        exit;
    }
    include'config.php';
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
        //check username
        if(mysqli_num_rows($result) === 1){
            //check password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                //set $_SESSION
                $_SESSION["login"] = true;
                header("Location: index3.php");
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
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- css -->
    <link rel="stylesheet" href="style2.css">
    <title>Halaman register</title>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="box">
                <div class="header">
                    <header><img src="img/logo.png" alt=""></header>
                    <p>Login to my website</p>
                </div>
                <?php if(isset($error)) : ?>
                    <div class="alert alert-danger" role="alert" style="text-align : center; font-style: italic; font-size: larger; color: crimson;">
                        Username atau password salah
                    </div>
                    <?php endif; ?>
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="input-field" id="username" required>
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="input-field" id="password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <!-- <div class="input-box">
                    <label for="cpassword">Confirm password</label>
                    <input type="password" name="cpassword" class="input-field" id="cpassword" required>
                    <i class='bx bx-key'></i>
                </div> -->
                <div class="input-box">
                    <input type="submit" name="login" class="input-submit" value="Login">
                </div>
                <div class="bottom">
                    <p>Belum punya akun? <span><a href="register.php" style="font-size: larger;">Sign up</a></span></p>
                </div>
            </div>
                <div class="wrapper"></div>
            </div>
    </form>
</body>
</html>