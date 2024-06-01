<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include("config.php");
    ?>
    <?php 
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM `tbl_admin` WHERE `username` = '".$username."' AND `password` = '".$password."'";
            $query = mysqli_query($db, $sql);
            $data = mysqli_fetch_array($query);

            if (mysqli_num_rows($query) > 0) {
                session_start();
                $_SESSION['status'] = $data['login'];
                $_SESSION['id_admin'] = $data['id_admin'];
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['username'] = $data['username'];
                header('location:index.php');
            }
        }
    ?>
    <div>
        <h1>Login</h1>
        <form method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="login" style="width:100%"></input></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>