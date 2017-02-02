<?php
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

	//ambil parameter
	$uname = $_POST["username"];
	$company = $_POST["company"];
	$country = $_POST["country"];
	$province = $_POST["province"];
	$email = $_POST["email"];
	$pasword = $_POST["password"];
	$desc = $_POST["desc"];

	//bikin command sql
	$sql = "INSERT INTO _users (username, company_name, country, province,email, password, information)	VALUES ('$uname', '$company', '$country', '$province', '$email', '$pasword', '$desc')";

	//proses commandnya
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='../main_menu.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	//balik ke page main_menu
	//header("location:../main_menu.php");
?>