<?php
	$No=$_GET["No"];
	$Bank_Name=$_POST["Bank_Name"];
	$Branch=$_POST["Branch"];
	$Country=$_POST["Country"];
	$Acc_Name=$_POST["Acc_Name"];
	$Acc_Number=$_POST["Acc_Number"];
	$Currency=$_POST["Currency"];
	
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

	$sql = "UPDATE daftar_rekening_bank 
	SET Bank_Name = '$Bank_Name', Branch = '$Branch', Country = '$Country', Acc_Name = '$Acc_Name', Acc_Number = '$Acc_Number', Currency = '$Currency'
	WHERE No = '$No'";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='javascript:history.back()';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>