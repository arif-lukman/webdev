<?php
	include "koneksiDB.php";
	
	//ambil param id
	$No = $_GET["No"];

	//delete coy
	$query = "DELETE FROM surat_dan_dokumen_pelengkap WHERE No = '$No'";
	$result = mysql_query($query);

	//balik lagi coy
	header("location:step14.php");
?>