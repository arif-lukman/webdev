<?php
	include "koneksiDB.php";
	
	//ambil param id
	$No = $_GET["No"];

	//delete coy
	$query = "DELETE FROM perusahaan_induk_dan_rekanan WHERE No = '$No'";
	$result = mysql_query($query);

	//balik lagi coy
	header("location:step9.php");
?>