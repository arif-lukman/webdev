<?php
	$Document_Type=$_POST["Document_Type"];
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

	$sql = "INSERT INTO dokumen_administrasi (Document_Type, Document_Number, Issued_By, Issued_Date, Expired_Date, Description, Attachment)
	VALUES ('$Document_Type', '$Document_Number', '$Issued_By', '$Issued_Date', '$Expired_Date', '$Description', '$Attachment')";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step6.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>