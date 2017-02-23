<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Distributor=$_POST["Distributor"];
	$Document_Number=$_POST["Document_Number"];
	$Issued_By=$_POST["Issued_By"];
	$Issued_Date=$_POST["Issued_Date"];
	$Expired_Date=$_POST["Expired_Date"];
	$Description=$_POST["Description"];
	//$Attachment=$_POST["Attachment"];
	
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

	$result = getResults("SELECT MAX(No) as No FROM surat_keagenan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO surat_keagenan (Distributor, Document_Number, Issued_By, Issued_Date, Expired_Date, Description)
	VALUES ('$Distributor', '$Document_Number', '$Issued_By', '$Issued_Date', '$Expired_Date', '$Description'); INSERT INTO data_surat_keagenan VALUES ('$uid', '$did')";

	execCudMulti($sql, $conn, "step7.php");

	$conn->close();
?>