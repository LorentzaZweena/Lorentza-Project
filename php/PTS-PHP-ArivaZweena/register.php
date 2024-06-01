<?php
    include 'config.php';
    include 'functions.php';
    if (isset($_POST["register"])) {
        if (registrasi($_POST) > 0) {
            echo "<script>alert('Register succesful!');</script>";
            header("Location:index.php");
        } else{
            echo mysqli_error($connection);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | PTS</title>
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
        <h1>Welcome</h1>
        <p>Register to continue</p>
         <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Ariva Zweena" required>

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="xyz@gmail.com" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="123456" required>

            <label for="confirmpassword">Confirm password</label>
            <input type="password" name="confirmpassword" placeholder="123456" required>
        
            <a href="index.php"><input type="submit" value="Register" name="register"></a>
            <p class="register">Already have account? <a href="Login.php">Log in</a></p>
        </div>
        </form>
    </div>
    </div>
</body>
</html>