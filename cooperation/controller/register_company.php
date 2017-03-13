<?php
	//set variabel nama db
	$dbname = "_bpms_vendor";

	//include file koneksi
	include "koneksi.php";

	//ambil parameter
	$uname = $_POST["uname"];
	$company = $_POST["cpname"];
	$country = $_POST["country"];
	$province = $_POST["province"];
	$email = $_POST["email"];
	$pasword = $_POST["password"];
	$desc = $_POST["desc"];

	//bikin command sql
	$sql = "INSERT INTO tbl_user (username, nama_perusahaan, id_negara, id_propinsi, email, password, description)	VALUES ('$uname', '$company', '$country', '$province', '$email', '$pasword', '$desc')";

	//proses commandnya
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Saving Data Success');
		location='../admin/main_menu.php';
		</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}
?>