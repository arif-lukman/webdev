<?php
	$Office_Type=$_POST["Office_Type"];
	$Primary_Office=$_POST["Primary_Office"];
	$Office_Address=$_POST["Office_Address"];
	$Country=$_POST["Country"];
	$Province=$_POST["Province"];
	$City=$_POST["City"];
	$ZIP_Code=$_POST["ZIP_Code"];
	$Office_Phone_Number=$_POST["Office_Phone_Number"];
	$Office_Fax_Number=$_POST["Office_Fax_Number"];
	$Office_Email=$_POST["Office_Email"];
	$Website=$_POST["Website"];
	
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

	$sql = "INSERT INTO alamat_kantor (Office_Type, Primary_Office, Office_Address, Country, Province, City, ZIP_Code, Office_Phone_Number, Office_Fax_Number, Office_Email, Website)
	VALUES ('$Office_Type', '$Primary_Office', '$Office_Address', '$Country', '$Province', '$City', '$ZIP_Code', '$Office_Phone_Number', '$Office_Fax_Number', '$Office_Email', '$Website')";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step3.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>