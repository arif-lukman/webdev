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
	//echo $op;
	//parameter id
	$id = getParamGet("id");

	//ambil parameter lain
	$kode = getParamPost("kode");
	$nama = getParamPost("nama");
	$order = getParamPost("order");
	$status = getParamPost("stat");
	$negara = getParamPost("negara");

	//sql commands
	//create
	$sqlC = "INSERT INTO _province(_kode, _nama, _order, _status, _id_negara) VALUES ('$kode', '$nama', '$order', '$status', '$negara')";
	//update
	$sqlU = "UPDATE _province SET _kode='$kode', _nama='$nama', _order='$order', _status='$status', _id_negara='$negara' WHERE _id='$id'";
	//delete
	$sqlD = "DELETE FROM _province WHERE _id='$id'";
	
	//cek
	$sql = checkOperation($op, $sqlC, $sqlU, $sqlD);

	//eksekusi
	execCud($sql, $conn, "../admin/province.php");
?>