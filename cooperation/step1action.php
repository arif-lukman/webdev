<?php
	//include library
	include "lib/library.php";

	//ambil parameter
	$id = $_GET["id"];
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
	$count = getResults("SELECT * FROM nama_dan_tipe_perusahaan", $conn)->num_rows;

	//kalau ada update, kalau ga ada insert
	if($count==0){
		$sql = "INSERT INTO nama_dan_tipe_perusahaan (Company_Name, Company_Type, Company_Qualification)
	VALUES ('$Company_Name', '$Company_Type', '$Company_Qualification')";
	}
	else{
		$sql = "UPDATE nama_dan_tipe_perusahaan SET Company_Name='$Company_Name', Company_Type='$Company_Type', Company_Qualification='$Company_Qualification' WHERE No='$id'";
	}

	execCud($sql, $conn, "step1.php");
	
	$conn->close();
?>