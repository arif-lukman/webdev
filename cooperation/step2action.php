<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$K3S_Name=$_POST["K3S_Name"];
	$Contact_Name=$_POST["Contact_Name"];
	$Phone_Number=$_POST["Phone_Number"];
	$Fax_Number=$_POST["Fax_Number"];
	$Expired_Date=$_POST["Expired_Date"];
	$Expiration_Days=$_POST["Expiration_Days"];
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

	//ambil id
	$result = getResults("SELECT MAX(No) as No FROM partner_k3s", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO partner_k3s (K3S_Name, Contact_Name, Phone_Number, Fax_Number, Expired_Date, Expiration_Days)
	VALUES ('$K3S_Name', '$Contact_Name', '$Phone_Number', '$Fax_Number', '$Expired_Date', '$Expiration_Days'); INSERT INTO data_partner_k3s VALUES ('$uid', '$did')";

	//eksekusi multi sql command
	execCudMulti($sql, $conn, "step2.php");

	$conn->close();
?>