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
	$nama = getParamPost("nama");
	$order = getParamPost("order");
	$status = getParamPost("stat");

	//sql commands
	//create
	$sqlC = "INSERT INTO _country(_kode, _nama, _order, _status) VALUES ('$kode', '$nama', '$order', '$status')";
	//update
	$sqlU = "UPDATE _country SET _kode='$kode', _nama='$nama', _order='$order', _status='$status' WHERE _id='$id'";
	//delete
	$sqlD = "DELETE FROM _country WHERE _id='$id'";
	
	//cek
	$sql = checkOperation($op, $sqlC, $sqlU, $sqlD);

	//eksekusi
	execCud($sql, $conn, "../admin/country.php");
?>