<?php
	include "koneksi.php";
	
	//ambil param id
	$id = $_GET["id"];

	//delete coy
	$query = "DELETE FROM news WHERE id = '$id'";
	$result = mysql_query($query);

	//balik lagi
	header("location:main_menu.php");
?>