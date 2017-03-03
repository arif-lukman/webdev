<?php
	//include library
	include "lib/library.php";

	session_start();
	$uid = $_SESSION["uid"];

	//ambil parameter
	$K3S_Name=$_POST["K3S_Name"];
	$Contact_Name=$_POST["Contact_Name"];
	$Phone_Number=$_POST["Phone_Number"];
	$Fax_Number=$_POST["Fax_Number"];
	$Expired_Date=$_POST["Expired_Date"];
	$Expiration_Days=$_POST["Expiration_Days"];
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

	//ambil id
	$result = getResults("SELECT MAX(No) as No FROM partner_k3s", $conn)->fetch_assoc();
	$did = $result["No"] + 1;

	//ambil id attachment
	$result1 = getResults("SELECT MAX(id) as id FROM attachment_k3s", $conn)->fetch_assoc();
	$aid = $result1["id"] + 1;

	$sql = "INSERT INTO partner_k3s (K3S_Name, Contact_Name, Phone_Number, Fax_Number, Expired_Date, Expiration_Days, Attachment)
	VALUES ('$K3S_Name', '$Contact_Name', '$Phone_Number', '$Fax_Number', '$Expired_Date', '$Expiration_Days', '$aid'); INSERT INTO data_partner_k3s VALUES ('$uid', '$did'); INSERT INTO attachment_k3s (id_user, filename, filesize, data, type) VALUES ('$uid', '$fileName', '$fileSize', '$content', '$fileType')";

	//eksekusi multi sql command
	execCudMulti($sql, $conn, "step2.php");

	$conn->close();
?>