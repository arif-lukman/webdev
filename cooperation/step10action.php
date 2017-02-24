<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Project_Name=$_POST["Project_Name"];
	$Activities_Section=$_POST["Activities_Section"];
	$Classification=$_POST["Classification"];
	$Sub_Classification=$_POST["Sub_Classification"];
	$User_Company=$_POST["User_Company"];
	$Contact_Name=$_POST["Contact_Name"];
	$Address=$_POST["Address"];
	$Phone_Number=$_POST["Phone_Number"];
	$Contact_Date=$_POST["Contact_Date"];
	$Completion_Date=$_POST["Completion_Date"];
	$Value=$_POST["Value"];
	$Sub_Value=$_POST["Sub_Value"];
	$Document_Number=$_POST["Document_Number"];
	$Last_Progress=$_POST["Last_Progress"];
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

	$result = getResults("SELECT MAX(No) as No FROM pengalaman_perusahaan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	$sql = "INSERT INTO pengalaman_perusahaan (Project_Name, Activities_Section, Classification, Sub_Classification, User_Company, Contact_Name, Address, Phone_Number, Contact_Date, Completion_Date, Value, Sub_Value, Document_Number, Last_Progress)
	VALUES ('$Project_Name', '$Activities_Section', '$Classification', '$Sub_Classification', '$User_Company', '$Contact_Name', '$Address', '$Phone_Number', '$Contact_Date', '$Completion_Date', '$Value', '$Sub_Value', '$Document_Number', '$Last_Progress'); INSERT INTO data_pengalaman_perusahaan VALUES ('$uid', '$did')";
	
	execCudMulti($sql, $conn, "step10.php");

	$conn->close();
?>