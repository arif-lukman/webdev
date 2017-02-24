<?php
	$No=$_GET["No"];
	$Affiliate_Type=$_POST["Affiliate_Type"];
	$Company_Name=$_POST["Company_Name"];
	$Address=$_POST["Address"];
	$Country=$_POST["Country"];
	$City=$_POST["City"];
	$Phone_Number=$_POST["Phone_Number"];
	$Email=$_POST["Email"];
	$Description=$_POST["Description"];
	$Province=$_POST["Province"];
	$ZIP_Code=$_POST["ZIP_Code"];
	$Fax_Number=$_POST["Fax_Number"];
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

	$sql = "UPDATE perusahaan_induk_dan_rekanan
	SET Affiliate_Type = '$Affiliate_Type', Company_Name = 'Company_Name', Address = 'Address', Country = '$Country', City = '$City', Phone_Number = '$Phone_Number', Email = '$Email', Description = '$Description', Province = '$Province', ZIP_Code = '$ZIP_Code', Fax_Number = '$Fax_Number', Website = '$Website'
	WHERE No = '$No'";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step9.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>