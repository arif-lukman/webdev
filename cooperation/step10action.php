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
	$Contract_Date=$_POST["Contract_Date"];
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

	$fileName = $_FILES["Attachment"]["name"];
	$tmpName  = $_FILES["Attachment"]["tmp_name"];
	$fileSize = $_FILES["Attachment"]["size"];
	$fileType = $_FILES["Attachment"]["type"];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);

	if(!get_magic_quotes_gpc()){
	    $fileName = addslashes($fileName);
	}

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$result = getResults("SELECT MAX(No) as No FROM pengalaman_perusahaan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	//ambil id attachment
	$result1 = getResults("SELECT MAX(id) as id FROM attachment_pengalaman_perusahaan", $conn)->fetch_assoc();
	$aid = $result1["id"] + 1;

	$sql = "INSERT INTO pengalaman_perusahaan (Project_Name, Activities_Section, Classification, Sub_Classification, User_Company, Contact_Name, Address, Phone_Number, Contract_Date, Completion_Date, Value, Sub_Value, Document_Number, Last_Progress, Attachment)
	VALUES ('$Project_Name', '$Activities_Section', '$Classification', '$Sub_Classification', '$User_Company', '$Contact_Name', '$Address', '$Phone_Number', '$Contract_Date', '$Completion_Date', '$Value', '$Sub_Value', '$Document_Number', '$Last_Progress', '$aid'); INSERT INTO data_pengalaman_perusahaan VALUES ('$uid', '$did'); INSERT INTO attachment_pengalaman_perusahaan(id_user, filename, filesize, data, type) VALUES ('$uid', '$fileName', '$fileSize', '$content', '$fileType')";
	
	execCudMulti($sql, $conn, "step10.php");

	$conn->close();
?>