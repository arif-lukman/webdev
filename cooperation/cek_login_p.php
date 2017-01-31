<?php
	include "koneksi_p.php";

	$username = $_POST['username_proc'];
	$password = $_POST['password_proc'];

	$query = mysql_query("select * from user_proc where username_proc='$username' and password_proc='$password'");
	$count = mysql_num_rows($query);
	$row = mysql_fetch_array($query);

	if($count == 1){
		if(!isset($_SESSION)){
			session_start();
			$_SESSION['uid'] = $row['id_proc'];
		}
		header ("location:vendor.php");
	}
	else{
		echo "<script> alert('Username atau Password Salah');
		location='login.php';
		</script>";
	}
?>