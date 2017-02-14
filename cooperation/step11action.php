<?php
	$Product=$_POST["Product"];
	$Description=$_POST["Description"];
	
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

	$sql = "INSERT INTO perusahaan_pembuat_barang (Product, Description)
	VALUES ('$Product', '$Description')";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step11.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>