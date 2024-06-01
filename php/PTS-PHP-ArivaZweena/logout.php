<?php 
	session_start();
	// $_SESSION[];
	session_unset();
	session_destroy();

	setcookie('id', '', time()-5);
	setcookie('key', '', time()-5);

	header("Location: login.php");
	exit;
 ?>