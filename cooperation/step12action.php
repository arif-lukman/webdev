<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	$Activities_Section=$_POST["Activities_Section"];
	$Classification=$_POST["Classification"];
	$Sub_Classification=$_POST["Sub_Classification"];
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

	$result = getResults("SELECT MAX(No) as No FROM klasifikasi_perusahaan", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	//ambil id attachment
	$result1 = getResults("SELECT MAX(id) as id FROM attachment_klasifikasi_perusahaan", $conn)->fetch_assoc();
	$aid = $result1["id"] + 1;

	$sql = "INSERT INTO klasifikasi_perusahaan (Activities_Section, Classification, Sub_Classification, Description)
	VALUES ('$Activities_Section', '$Classification', '$Sub_Classification', '$Description'); INSERT INTO data_klasifikasi_perusahaan VALUES ('$uid', '$did'); INSERT INTO attachment_klasifikasi_perusahaan(id_user, filename, filesize, data, type) VALUES ('$uid', '$fileName', '$fileSize', '$content', '$fileType')";
	
	execCudMulti($sql, $conn, "step12.php");

	$conn->close();
?>