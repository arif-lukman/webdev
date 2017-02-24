<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Product=$_POST["Product"];
	$Description=$_POST["Description"];
	
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

	$result = getResults("SELECT MAX(No) as No FROM perusahaan_pembuat_barang", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO perusahaan_pembuat_barang (Product, Description)
	VALUES ('$Product', '$Description'); INSERT INTO data_perusahaan_pembuat_barang VALUES ('$uid', '$did')";
	
	execCudMulti($sql, $conn, "step11.php");

	$conn->close();
?>