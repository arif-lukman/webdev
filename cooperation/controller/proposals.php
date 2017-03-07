<?php
	//include library
	include "../lib/library.php";

	$No = $_GET["No"];
	$stat = $_POST["Registration_Status"];
	$note = $_POST["Notes"];
	$date = $_POST["date"];

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

	$result2 = getResults("SELECT user.id as uid FROM tbl_user as user, pengajuan as data, data_pengajuan as conn WHERE user.id = conn.id_user and data.No = conn.id_pengajuan and data.No = '$No'", $conn)->fetch_assoc();
	$uid = $result2["uid"];

	$sql = "INSERT INTO pengajuan (Date, Registration_Status, Notes)
	VALUES ('$date', '$stat', '$note'); INSERT INTO data_pengajuan VALUES ('$uid', '$did')";
	
	execCudMulti($sql, $conn, "../admin/proposals.php");

	$conn->close();
?>