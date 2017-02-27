<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Activities_Section=$_POST["Activities_Section"];
	$Classification=$_POST["Classification"];
	$Sub_Classification=$_POST["Sub_Classification"];
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

	$result = getResults("SELECT MAX(No) as No FROM klasifikasi_perusahaan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO klasifikasi_perusahaan (Activities_Section, Classification, Sub_Classification, Description)
	VALUES ('$Activities_Section', '$Classification', '$Sub_Classification', '$Description'); INSERT INTO data_klasifikasi_perusahaan VALUES ('$uid', '$did')";
	
	execCudMulti($sql, $conn, "step12.php");

	$conn->close();
?>