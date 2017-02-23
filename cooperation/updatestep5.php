<?php
	$No=$_GET["No"];
	$Name=$_POST["Name"];
	$Civil_ID=$_POST["Civil_ID"];
	$Address=$_POST["Address"];
	$Phone_Number=$_POST["Phone_Number"];
	$Email=$_POST["Email"];
	$Share=$_POST["Share"];
	$Value=$_POST["Value"];
	
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

	$sql = "UPDATE daftar_pemilik
	SET Name = '$Name', Civil_ID = '$Civil_ID', Address = '$Address', Phone_Number = '$Phone_Number', Email = '$Email', Share = '$Share' , Value = '$Value'
	WHERE No = '$No'";
	
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Update Data Success');
		</script>";
	} else {
	    echo "<script> alert('Update Data Gagal');
		</script>";
	}

	$conn->close();
	header("location:step5.php");
?>