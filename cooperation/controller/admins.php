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
	$uname = getParamPost("uname");
	$fname = getParamPost("fname");
	$email = getParamPost("email");
	$pswrd = getParamPost("pswrd");
	$grup = getParamPost("grup");
	$stat = getParamPost("stat");
	$desc = getParamPost("desc");

	//sql commands
	//create
	$sqlC = "INSERT INTO _admin(_username, _fullname, _email, _password, _group_id, _status, _desc) VALUES ('$uname', '$fname', '$email', '$pswrd', '$grup', '$stat', '$desc')";
	//update
	$sqlU = "UPDATE _admin SET _username='$uname', _fullname='$fname', _email='$email', _password='$pswrd', _group_id='$grup', _status='$stat', _desc='$desc' WHERE _id='$id'";
	//delete
	$sqlD = "DELETE FROM _admin WHERE _id='$id'";
	
	//cek
	$sql = checkOperation($op, $sqlC, $sqlU, $sqlD);

	//eksekusi
	execCud($sql, $conn, "../admin/admins.php");
	//echo $sql;
?>