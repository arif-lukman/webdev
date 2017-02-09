<?php
	include "koneksiDB.php";
	
	//ambil param id
	$No = $_GET["No"];

	//delete coy
	$query = "DELETE FROM susunan_pengurus WHERE No = '$No'";
	$result = mysql_query($query);

	//balik lagi coy
	header("location:step4.php");
?>