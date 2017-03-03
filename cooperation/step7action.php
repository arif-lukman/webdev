<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Distributor=$_POST["Distributor"];
	$Document_Number=$_POST["Document_Number"];
	$Issued_By=$_POST["Issued_By"];
	$Issued_Date=$_POST["Issued_Date"];
	$Expired_Date=$_POST["Expired_Date"];
	$Description=$_POST["Description"];
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

	$result = getResults("SELECT MAX(No) as No FROM surat_keagenan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	//ambil id attachment
	$result1 = getResults("SELECT MAX(id) as id FROM attachment_surat_keagenan", $conn)->fetch_assoc();
	$aid = $result1["id"] + 1;

	$sql = "INSERT INTO surat_keagenan (Distributor, Document_Number, Issued_By, Issued_Date, Expired_Date, Description)
	VALUES ('$Distributor', '$Document_Number', '$Issued_By', '$Issued_Date', '$Expired_Date', '$Description'); INSERT INTO data_surat_keagenan VALUES ('$uid', '$did'); INSERT INTO attachment_surat_keagenan (id_user, filename, filesize, data, type) VALUES ('$uid', '$fileName', '$fileSize', '$content', '$fileType')";

	execCudMulti($sql, $conn, "step7.php");

	$conn->close();
?>