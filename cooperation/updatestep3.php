<?php
	$No=$_GET["No"];
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
	$dbname = "_bpms_vendor";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE alamat_kantor 
	SET Office_Type = '$Office_Type', Primary_Office = '$Primary_Office', Office_Address = '$Office_Address', Country = '$Country', Province = '$Province', City = '$City', ZIP_Code = '$ZIP_Code', Office_Phone_Number = '$Office_Phone_Number', Office_Fax_Number = '$Office_Fax_Number', Office_Email = '$Office_Email', Website = '$Website'
	WHERE No = '$No'";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Update Data Success');
				location='step3.php';
				</script>";
	} else {
	    echo "Update Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>