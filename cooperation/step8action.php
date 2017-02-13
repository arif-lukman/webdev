<?php
	$Bank_Name=$_POST["Bank_Name"];
	$Branch=$_POST["Branch"];
	$Country=$_POST["Country"];
	$Acc_Name=$_POST["Acc_Name"];
	$Acc_Number=$_POST["Acc_Number"];
	$Currency=$_POST["Currency"];
	
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

	$sql = "INSERT INTO daftar_rekening_bank (Bank_Name, Branch, Country, Acc_Name, Acc_Number, Currency)
	VALUES ('$Bank_Name', '$Branch', '$Country', '$Acc_Name', '$Acc_Number', '$Currency')";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step8.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>