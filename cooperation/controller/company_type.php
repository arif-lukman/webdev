<?php
	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	//ambil parameter
	$kode = $_POST["kode"];
	$judul = $_POST["judul"];
	$order = $_POST["order"];
	if($_POST["stat"] == "Active"){
		$stat = 1;
	}
	else{
		$stat = 0;
	}

	//bikin command sql
	$sql = "INSERT INTO _company_type (_kode, _judul, _order, _status) VALUES ('$kode', '$judul', '$order', '$stat')";

	//proses commandnya
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='../main_menu.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	//balik ke page main_menu
	//header("location:../main_menu.php");
?>