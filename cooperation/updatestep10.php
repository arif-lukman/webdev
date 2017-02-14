<?php
	$No=$_GET["No"];
	$Project_Name=$_POST["Project_Name"];
	$Activities_Section=$_POST["Activities_Section"];
	$Classification=$_POST["Classification"];
	$Sub_Classification=$_POST["Sub_Classification"];
	$User_Company=$_POST["User_Company"];
	$Contact_Name=$_POST["Contact_Name"];
	$Address=$_POST["Address"];
	$Phone_Number=$_POST["Phone_Number"];
	$Contact_Date=$_POST["Contact_Date"];
	$Completion_Date=$_POST["Completion_Date"];
	$Value=$_POST["Value"];
	$Sub_Value=$_POST["Sub_Value"];
	$Document_Number=$_POST["Document_Number"];
	$Last_Progress=$_POST["Last_Progress"];
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

	$sql = "UPDATE pengalaman_perusahaan 
	SET Project_Name = '$Project_Name', Activities_Section = '$Activities_Section', Classification = '$Classification', Sub_Classification = '$Sub_Classification', User_Company = '$User_Company', Contact_Name = '$Contact_Name', Address = '$Address', Phone_Number = '$Phone_Number', Contact_Date = '$Contact_Date', Completion_Date = '$Completion_Date', Value = '$Value', Sub_Value = '$Sub_Value', Document_Number = '$Document_Number', Last_Progress = '$Last_Progress', Attachment = '$Attachment'
	WHERE No = '$No'";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step10.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>