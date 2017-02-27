<?php
	$No=$_GET["No"];
	$Supporting_Document_Type=$_POST["Supporting_Document_Type"];
	$Description=$_POST["Description"];
	$Attachment=$_POST["Attachment"];
	
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

	$sql = "UPDATE surat_dan_dokumen_pelengkap
	SET Supporting_Document_Type = '$Supporting_Document_Type', Description = '$Description', Attachment = '$Attachment'
	WHERE No = '$No'";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Update Data Success');
				location='step14.php';
				</script>";
	} else {
	    echo "Update Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
 ?>