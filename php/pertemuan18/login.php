<?php
	session_start();
	require 'functions.php';
	//check cookie
	if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
		$id = $_COOKIE['id'];
		$key = $_COOKIE['key'];

		//ambil username berdasarkan id
		$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
		$row = mysqli_fetch_assoc($result);

		//check cookie and username
		if ($key === hash('sha256', $row['username'])) {
			$_SESSION['login'] = true;
		}
	}
	if (isset($_SESSION["login"])) {
		header("Location: index.php");
		exit;
	}
	
	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
		//check username
		if (mysqli_num_rows($result) == 1) {
			//check password
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])){
				//set session
				$_SESSION["login"] = true;
				//check remember me
				if (isset($_POST['remember'])) {
					// buat cookie
					setcookie('id', $row['id'], time()+60);
					setcookie('key', hash('sha256', $row['username']), time()+60);
				}

				header("Location: index.php");
				exit;
			}
		}
		$error = true;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman login</title>
</head>
<body>
	<h1>Halaman login</h1>
	<?php if(isset($error)) : ?>
		<p style="color: red; font-style: italic;">Username / password salah</p>
	<?php endif; ?>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember me: </label>
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
</body>
</html>