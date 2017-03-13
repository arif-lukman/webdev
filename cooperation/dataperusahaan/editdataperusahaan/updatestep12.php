<?php
	$No=$_GET["No"];
	$Activities_Section=$_POST["Activities_Section"];
	$Classification=$_POST["Classification"];
	$Sub_Classification=$_POST["Sub_Classification"];
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

	$sql = "UPDATE klasifikasi_perusahaan
	SET Activities_Section = '$Activities_Section', Classification = '$Classification', Sub_Classification = '$Sub_Classification', Description = '$Description', Attachment = '$Attachment'
	WHERE No = '$No'";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Update Data Success');
				location='javascript:history.back()';
				</script>";
	} else {
	    echo "Update Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>