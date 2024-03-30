<?php
function registrasi($data){
    global $connection;

    //ambil data dari formulir
    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($connection, $data["password"]);
    $confirmpassword = mysqli_real_escape_string($connection, $data["confirmpassword"]);

    //check username sudah pernah ada atau belum
    $result = mysqli_query($connection, "SELECT name FROM users WHERE name = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('Username already exist!');</script>";
        return false;
    }

    //check confirm password
    if($password !== $confirmpassword){
        echo"<script>alert('Confirmation password not match');</script>";
        return false;
    }

    //encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //insert db
    mysqli_query($connection, "INSERT INTO users VALUES('', '$username', '$email', '$password')");
    return mysqli_affected_rows($connection);
}
?>