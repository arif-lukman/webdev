<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Supporting_Document_Type=$_POST["Supporting_Document_Type"];
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

	$result = getResults("SELECT MAX(No) as No FROM surat_dan_dokumen_pelengkap", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO surat_dan_dokumen_pelengkap (Supporting_Document_Type, Description)
	VALUES ('$Supporting_Document_Type', '$Description'); INSERT INTO data_surat_dan_dokumen_pelengkap VALUES ('$uid', '$did')";
	
	execCudMulti($sql, $conn, "step14.php");

	$conn->close();
?>