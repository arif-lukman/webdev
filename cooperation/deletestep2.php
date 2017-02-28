<?php
	include "koneksiDB.php";
	
	//ambil param id
	$No = $_GET["No"];

	//delete coy
	$query = "DELETE FROM partner_k3s WHERE No = '$No'";
	$result = mysql_query($query);

	//balik lagi coy
	header("location:step2.php");
?>