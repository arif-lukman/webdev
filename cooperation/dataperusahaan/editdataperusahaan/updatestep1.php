<?php
	$No=$_GET["No"];
	$Company_Name=$_POST["Company_Name"];
	$Company_Type=$_POST["Company_Type"];
	$Company_Qualification=$_POST["Company_Qualification"];
	
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

	$sql = "UPDATE nama_dan_tipe_perusahaan
	SET Company_Name = '$Company_Name', Company_Type = '$Company_Type', Company_Qualification = '$Company_Qualification'
	WHERE No = '$No'";
	
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Update Data Success');
		</script>";
	} else {
	    echo "<script> alert('Update Data Gagal');
		</script>";
	}

	$conn->close();
	header("location='javascript:history.back()';.php");
?>