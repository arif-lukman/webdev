<?php
	include "../lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	$doc = $_POST['doc'];
	$exp = $_POST['exp'];

	//echo "$doc";
	//echo "$exp";

	execCud("UPDATE _document_type SET _kadaluarsa='$exp' WHERE _id = '$doc'", $conn, "../admin/cfg_exp.php");
?>