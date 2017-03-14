<?php
	//include lib
	include "../lib/library.php";

	//bikin koneksi
	$vendor = createConnection("localhost", "root", "", "_bpms_vendor");

	//ambil param
	$id = $_GET["id"];
	$tn = $_GET["tn"];

	downloadFile($tn, $id, $vendor);
?>