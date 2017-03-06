<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$stat = $_POST["Registration_Status"];
	$note = $_POST["Notes"];

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

	$result = getResults("SELECT MAX(No) as No FROM pengajuan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO pengajuan (Registration_Status, Notes)
	VALUES ('$stat', '$note'); INSERT INTO data_pengajuan VALUES ('$uid', '$did')";
	
	execCudMulti($sql, $conn, "step15.php");

	$conn->close();
?>