<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

	$query = mysql_query("select * from users where username='$username' and password='$password'");
	$count = mysql_num_rows($query);
	$row = mysql_fetch_array($query);

	if($count == 1)
		{
			header ("location:main_menu.php");
		}
		else
		{
			echo "<script> alert('Username atau Password Salah');
			location='admin.php';
			</script>";
		}
?>