<?php
    include 'config.php';
    function registrasi($data){
        global $koneksi;

        //ambil data dari formulir
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi, $data["password"]);
        $cpassword = mysqli_real_escape_string($koneksi, $data["cpassword"]);

        //check username sudah pernah ada atau belum
        $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>alert('Username sudah ada!');</script>";
            return false;
        }

        //check confirm password
        if($password !== $cpassword){
            echo"<script>alert('konfirmasi password tidak sesuai');</script>";
            return false;
        }

        //encrypt password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //insert db
        mysqli_query($koneksi, "INSERT INTO users VALUES('', '$username', '$password')");
        return mysqli_affected_rows($koneksi);
    }
?>