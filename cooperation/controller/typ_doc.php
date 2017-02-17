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
	$status = getParamPost("stat");

	//sql commands
	//create
	$sqlC = "INSERT INTO _document_type(_kode, _judul, _order, _status) VALUES ('$kode', '$judul', '$order', '$status')";
	//update
	$sqlU = "UPDATE _document_type SET _kode='$kode', _judul='$judul', _order='$order', _status='$status' WHERE _id='$id'";
	//delete
	$sqlD = "DELETE FROM _document_type WHERE _id='$id'";
	
	//cek
	$sql = checkOperation($op, $sqlC, $sqlU, $sqlD);

	//eksekusi
	execCud($sql, $conn, "../admin/typ_doc.php");
?>