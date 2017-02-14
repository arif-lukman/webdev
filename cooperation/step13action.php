<?php
	$Proses_Bangkrut=$_POST["Proses_Bangkrut"];
	$Pengawasan_Keadilan=$_POST["Pengawasan_Keadilan"];
	$Kegiatan_Usaha_Sedang_Dihentikan=$_POST["Kegiatan_Usaha_Sedang_Dihentikan"];
	$Tuntutan=$_POST["Tuntutan"];
	$Sanksi_Hukum=$_POST["Sanksi_Hukum"];
	$Sanksi_K3S=$_POST["Sanksi_K3S"];
	
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

	$sql = "INSERT INTO keadaan_perusahaan (Proses_Bangkrut, Pengawasan_Keadilan, Kegiatan_Usaha_Sedang_Dihentikan, Tuntutan, Sanksi_Hukum, Sanksi_K3S)
	VALUES ('$Proses_Bangkrut', '$Pengawasan_Keadilan', '$Kegiatan_Usaha_Sedang_Dihentikan', '$Tuntutan', '$Sanksi_Hukum', '$Sanksi_K3S')";
	
	if ($conn->query($sql) === TRUE) {
				echo "<script> alert('Saving Data Success');
				location='step13.php';
				</script>";
	} else {
	    echo "Saving Data Failed" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>