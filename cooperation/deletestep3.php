<?php
	include "koneksiDB.php";
	
	//ambil param id
	$No = $_GET["No"];

	//delete coy
	$query = "DELETE FROM alamat_kantor WHERE No = '$No'";
	$result = mysql_query($query);

	//balik lagi coy
	header("location:step3.php");
?>