<?php
	include "koneksiDB.php";
	
	//ambil param id
	$No = $_GET["No"];

	//delete coy
	$query = "DELETE FROM nama_dan_tipe_perusahaan WHERE No = '$No'";
	$result = mysql_query($query);

	//balik lagi coy
	header("location:dataperusahaan.php");
?>