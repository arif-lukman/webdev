<?php
	$Distributor=$_POST["Distributor"];
	$Document_Number=$_POST["Document_Number"];
	$Issued_By=$_POST["Issued_By"];
	$Issued_Date=$_POST["Issued_Date"];
	$Expired_Date=$_POST["Expired_Date"];
	$Description=$_POST["Description"];
	$Attachment=$_POST["Attachment"];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "labdb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO surat_keagenan (Distributor, Document_Number, Issued_By, Issued_Date, Expired_Date, Description, Attachment)
	VALUES ('$Distributor', '$Document_Number', '$Issued_By', '$Issued_Date', '$Expired_Date', '$Description', '$Attachment')";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step7.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>