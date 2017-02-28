<?php
	//include library
	include "lib/library.php";

	//ambil parameter
	session_start();
	$uid = $_SESSION["uid"];
	$Company_Name=$_POST["Company_Name"];
	$Company_Type=$_POST["Company_Type"];
	$Company_Qualification=$_POST["Company_Qualification"];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "_bpms_vendor";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	//bikin koneksi ke db yang diperlukan
	$conn = createConnection("localhost", "root", "", "_bpms_vendor");

	//ambil jumlah barisnya
	$count = getResults("SELECT data.* FROM tbl_user as user, nama_dan_tipe_perusahaan as data, data_nama_dan_tipe_perusahaan as conn WHERE user.id = conn.id_user and data.No = conn.id_nama_dan_tipe_perusahaan and user.id = '$uid'", $conn)->num_rows;

	//kalau ada update, kalau ga ada insert
	if($count==0){
		//ambil id
		$result = getResults("SELECT MAX(No) as No FROM nama_dan_tipe_perusahaan", $conn)->fetch_assoc();
		$did = $result["No"] + 1;

		$sql = "INSERT INTO nama_dan_tipe_perusahaan (Company_Name, Company_Type, Company_Qualification)
	VALUES ('$Company_Name', '$Company_Type', '$Company_Qualification'); INSERT INTO data_nama_dan_tipe_perusahaan VALUES ('$uid', '$did')";
	}
	else{
		$sql = "UPDATE tbl_user as user ,nama_dan_tipe_perusahaan as data, data_nama_dan_tipe_perusahaan as conn SET data.Company_Name='$Company_Name', data.Company_Type='$Company_Type', data.Company_Qualification='$Company_Qualification' WHERE user.id = conn.id_user and data.No = conn.id_nama_dan_tipe_perusahaan and user.id='$uid'";
	}

	execCudMulti($sql, $conn, "step1.php");
	
	$conn->close();
?>