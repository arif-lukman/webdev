<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	if(isset($_POST["Primary_Person"])){
		$Primary_Person = 1;
	}
	else{
		$Primary_Person = 0;
	}

	$Management_Type=$_POST["Management_Type"];
	$Position=$_POST["Position"];
	$Name=$_POST["Name"];
	$Civil_ID=$_POST["Civil_ID"];
	$Address=$_POST["Address"];
	$Phone_Number=$_POST["Phone_Number"];
	$Email=$_POST["Email"];
	
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

	$result = getResults("SELECT MAX(No) as No FROM susunan_pengurus", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO susunan_pengurus (Management_Type, Primary_Person, Position, Name, Civil_ID, Address, Phone_Number, Email)
	VALUES ('$Management_Type', '$Primary_Person', '$Position', '$Name', '$Civil_ID', '$Address', '$Phone_Number', '$Email'); INSERT INTO data_susunan_pengurus VALUES ('$uid', '$did')";

	execCudMulti($sql, $conn, "step4.php");

	$conn->close();
?>