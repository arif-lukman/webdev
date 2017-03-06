<?php
	if(isset($_POST["Primary_Person"])){
		$Primary_Person = 1;
	}
	else{
		$Primary_Person = 0;
	}
	$No=$_GET["No"];
	$Management_Type=$_POST["Management_Type"];
	$Position=$_POST["Position"];
	$Name=$_POST["Name"];
	$Civil_ID=$_POST["Civil_ID"];
	$Address=$_POST["Address"];
	$Phone_Number=$_POST["Phone_Number"];
	$Email=$_POST["Email"];
	
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

	$sql = "UPDATE susunan_pengurus
	SET Management_Type = '$Management_Type', Primary_Person = '$Primary_Person', Position = '$Position', Name = '$Name', Civil_ID = '$Civil_ID', Address = '$Address' , Phone_Number = '$Phone_Number', Email = '$Email'
	WHERE No = '$No'";

	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Update Data Success');
				location='step4.php';
				</script>";
	} else {
	    echo "Update Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>