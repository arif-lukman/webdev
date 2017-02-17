<?php
	//include library
	include "../lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	//ambil parameter
	//parameter operasi: create/update/delete
	$op = $_GET["op"];
	echo $op;
	//parameter id
	$id = getParamGet("id");

	//ambil parameter lain
	$kode = getParamPost("kode");
	$judul = getParamPost("judul");
	$order = getParamPost("order");
	$kelas = getParamPost("kelas");
	$status = getParamPost("stat");

	//sql commands
	//create
	$sqlC = "INSERT INTO _class_type(_kode, _judul, _order, _status, _kelas) VALUES ('$kode', '$judul', '$order', '$status', '$kelas')";
	//update
	$sqlU = "UPDATE _class_type SET _kode='$kode', _judul='$judul', _order='$order', _status='$status', _kelas='$kelas' WHERE _id='$id'";
	//delete
	$sqlD = "DELETE FROM _class_type WHERE _id='$id'";
	
	//cek
	$sql = checkOperation($op, $sqlC, $sqlU, $sqlD);

	//eksekusi
	execCud($sql, $conn, "../admin/typ_cls.php");
?>