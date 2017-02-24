<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Affiliate_Type=$_POST["Affiliate_Type"];
	$Company_Name=$_POST["Company_Name"];
	$Address=$_POST["Address"];
	$Country=$_POST["Country"];
	$City=$_POST["City"];
	$Phone_Number=$_POST["Phone_Number"];
	$Email=$_POST["Email"];
	$Description=$_POST["Description"];
	$Province=$_POST["Province"];
	$ZIP_Code=$_POST["ZIP_Code"];
	$Fax_Number=$_POST["Fax_Number"];
	$Website=$_POST["Website"];
	
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

	$result = getResults("SELECT MAX(No) as No FROM perusahaan_induk_dan_rekanan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO perusahaan_induk_dan_rekanan (Affiliate_Type, Company_Name, Address, Country, City, Phone_Number, Email, Description, Province, ZIP_Code, Fax_Number, Website)
	VALUES ('$Affiliate_Type', '$Company_Name', '$Address', '$Country', '$City', '$Phone_Number', '$Email', '$Description', '$Province', '$ZIP_Code', '$Fax_Number', '$Website'); INSERT INTO data_perusahaan_induk_dan_rekanan VALUES ('$uid', '$did')";
	//ATAS ERROR ! affiliate type dan company name
	
	execCudMulti($sql, $conn, "step9.php");

	$conn->close();
?>