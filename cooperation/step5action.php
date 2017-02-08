<?php
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
	$dbname = "labdb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO daftar_pemilik (Name, Civil_ID, Address, Phone_Number, Email, Share, Value)
	VALUES ('$Name', '$Civil_ID', '$Address', '$Phone_Number', '$Email', '$Share', '$Value')";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step5.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>