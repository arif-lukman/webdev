<?php
	$Management_Type=$_POST["Management_Type"];
	$Primary_Person=$_POST["Primary_Person"];
	$Position=$_POST["Position"];
	$Name=$_POST["Name"];
	$Civil_ID=$_POST["Civil_ID"];
	$Address=$_POST["Address"];
	$Phone_Number=$_POST["Phone_Number"];
	$Email=$_POST["Email"];
	
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

	$sql = "INSERT INTO susunan_pengurus (Management_Type, Primary_Person, Position, Name, Civil_ID, Address, Phone_Number, Email)
	VALUES ('$Management_Type', '$Primary_Person', '$Position', '$Name', '$Civil_ID', '$Address', '$Phone_Number', '$Email')";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step4.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>