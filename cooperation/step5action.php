<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Name=$_POST["Name"];
	$Civil_ID=$_POST["Civil_ID"];
	$Address=$_POST["Address"];
	$Phone_Number=$_POST["Phone_Number"];
	$Email=$_POST["Email"];
	$Share=$_POST["Share"];
	$Value=$_POST["Value"];
	
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

	$result = getResults("SELECT MAX(No) as No FROM daftar_pemilik", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO daftar_pemilik (Name, Civil_ID, Address, Phone_Number, Email, Share, Value)
	VALUES ('$Name', '$Civil_ID', '$Address', '$Phone_Number', '$Email', '$Share', '$Value'); INSERT INTO data_daftar_pemilik VALUES ('$uid', '$did')";

	execCudMulti($sql, $conn, "step5.php");

	$conn->close();
?>