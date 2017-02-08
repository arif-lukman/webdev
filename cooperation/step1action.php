<?php
	$Company_Name=$_POST["Company_Name"];
	$Company_Type=$_POST["Company_Type"];
	$Company_Qualification=$_POST["Company_Qualification"];
	
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

	$sql = "INSERT INTO nama_dan_tipe_perusahaan (Company_Name, Company_Type, Company_Qualification)
	VALUES ('$Company_Name', '$Company_Type', '$Company_Qualification' 	)";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step1.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>