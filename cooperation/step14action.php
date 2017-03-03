<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Supporting_Document_Type=$_POST["Supporting_Document_Type"];
	$Description=$_POST["Description"];
	//$Attachment=$_POST["Attachment"];

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

	$result = getResults("SELECT MAX(No) as No FROM surat_dan_dokumen_pelengkap", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	//ambil id attachment
	$result1 = getResults("SELECT MAX(id) as id FROM attachment_surat_dan_dokumen_pelengkap", $conn)->fetch_assoc();
	$aid = $result1["id"] + 1;

	$sql = "INSERT INTO surat_dan_dokumen_pelengkap (Supporting_Document_Type, Description)
	VALUES ('$Supporting_Document_Type', '$Description'); INSERT INTO data_surat_dan_dokumen_pelengkap VALUES ('$uid', '$did'); INSERT INTO attachment_surat_dan_dokumen_pelengkap(id_user, filename, filesize, data, type) VALUES ('$uid', '$fileName', '$fileSize', '$content', '$fileType')";
	
	execCudMulti($sql, $conn, "step14.php");

	$conn->close();
?>