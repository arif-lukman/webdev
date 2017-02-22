<?php
	include "koneksiDB.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = mysql_query("select * from tbl_user where username='$username' and password='$password'");
	$count = mysql_num_rows($query);
	$row = mysql_fetch_array($query);

	if($count == 1){
		if(!isset($_SESSION)){
			session_start();
			$_SESSION['uid'] = $row['id'];
		}
		header ("location:vendor.php");
	}
	else{
		echo "<script> alert('Username atau Password Salah');
		location='index.php';
		</script>";
	}
?>