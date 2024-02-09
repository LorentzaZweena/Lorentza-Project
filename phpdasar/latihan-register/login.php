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
                    <p>Sign in to my website</p>
                </div>
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
                    <input type="submit" name="daftar" class="input-submit" value="Sign in now!">
                </div>
                <div class="bottom">
                    <p>Belum punya akun? <span><a href="" style="font-size: larger;">Sign up</a></span></p>
                </div>
            </div>
                <div class="wrapper"></div>
            </div>
    </form>
</body>
</html>