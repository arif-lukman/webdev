<?php
	include "koneksi_p.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysql_query("select * from user_proc where username_proc='$username' and password_proc='$password'");
	$count = mysql_num_rows($query);
	$row = mysql_fetch_array($query);
	$privilege = $row["privilege"];

	if($count == 1){
		if(!isset($_SESSION)){
			session_start();
			$_SESSION['uid'] = $row['id'];
		}
		if($privilege == "admin"){
			header ("location:main_menu.php");
		}
		else{
			header ("location:vendor.php");
		}
	}
	else{
		echo "<script> alert('Username atau Password Salah');
		location='index.php';
		</script>";
	}
?>