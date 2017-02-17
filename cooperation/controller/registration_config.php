<?php
	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "koneksi.php";

	//ambil parameter
	$judul = $_POST["judul"];
	$desc = $_POST["desc"];
	if($_POST["stat"] == "Active"){
		$stat = 1;
	}
	else{
		$stat = 0;
	}

	//cek tabel, kalo kosong create, kalau berisi update
	$cek = "SELECT * FROM _regist_cfg";
	$result = $conn->query($cek);
	$count = $result->num_rows;
	if($count==0){
		$sql = "INSERT INTO _regist_cfg (_judul, _desc, _status) VALUES('$judul', '$desc', '$stat')";
	}
	else{
		$sql = "UPDATE _regist_cfg SET _judul='$judul', _desc='$desc', _status='$stat' WHERE _id=1";
	}
	
	//proses commandnya
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='../admin/cfg_reg.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}
?>