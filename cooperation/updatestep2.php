<?php
	$No=$_POST["No"];
	$K3S_Name=$_POST["K3S_Name"];
	$Contact_Name=$_POST["Contact_Name"];
	$Phone_Number=$_POST["Phone_Number"];
	$Fax_Number=$_POST["Fax_Number"];
	$Expired_Date=$_POST["Expired_Date"];
	$Expiration_Days=$_POST["Expiration_Days"];
	$Attachment=$_POST["Attachment"];
	
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

	$sql = "UPDATE partner_k3s
	SET K3S_Name = '$K3S_Name', Contact_Name = '$Contact_Name', Phone_Number = '$Phone_Number', Fax_Number = '$Fax_Number', Expired_Date = '$Expired_Date', Expiration_Days = '$Expiration_Days', Attachment = '$Attachment'
	WHERE No = '$No'";
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step2.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>