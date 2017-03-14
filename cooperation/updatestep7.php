<?php
	$No=$_GET["No"];
	$Distributor=$_POST["Distributor"];
	$Document_Number=$_POST["Document_Number"];
	$Issued_By=$_POST["Issued_By"];
	$Issued_Date=$_POST["Issued_Date"];
	$Expired_Date=$_POST["Expired_Date"];
	$Description=$_POST["Description"];
	
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

	$sql = "UPDATE surat_keagenan
	SET Distributor = '$Distributor', Document_Number = '$Document_Number', Issued_By = '$Issued_By', Issued_Date = '$Issued_Date', Expired_Date = '$Expired_Date', Description = '$Description'
	WHERE No = '$No'";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Update Data Success');
				location='step7.php';
				</script>";
	} else {
	    echo "Update Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>