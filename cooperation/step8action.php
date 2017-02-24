<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Bank_Name=$_POST["Bank_Name"];
	$Branch=$_POST["Branch"];
	$Country=$_POST["Country"];
	$Acc_Name=$_POST["Acc_Name"];
	$Acc_Number=$_POST["Acc_Number"];
	$Currency=$_POST["Currency"];
	
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

	$result = getResults("SELECT MAX(No) as No FROM daftar_rekening_bank", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO daftar_rekening_bank (Bank_Name, Branch, Country, Acc_Name, Acc_Number, Currency)
	VALUES ('$Bank_Name', '$Branch', '$Country', '$Acc_Name', '$Acc_Number', '$Currency'); INSERT INTO data_daftar_rekening_bank VALUES ('$uid', '$did')";

	execCudMulti($sql, $conn, "step8.php");

	$conn->close();
?>