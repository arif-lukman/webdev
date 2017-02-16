<?php
	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from _admin where _username='$username' and _password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		if(!isset($_SESSION)){
			session_start();
			$_SESSION['uid'] = $row['_id'];
		}
	    echo "<script> alert('Selamat datang~!');
			location='../admin/main_menu.php';
			</script>";
	} else {
	    echo "0 results";
	}
?>