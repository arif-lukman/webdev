<?php
	include "lib/library.php";

	session_start();
	$id = $_SESSION["uid"];

	$Proses_Bangkrut=$_POST["Proses_Bangkrut"];
	$Pengawasan_Keadilan=$_POST["Pengawasan_Keadilan"];
	$Kegiatan_Usaha_Sedang_Dihentikan=$_POST["Kegiatan_Usaha_Sedang_Dihentikan"];
	$Tuntutan=$_POST["Tuntutan"];
	$Sanksi_Hukum=$_POST["Sanksi_Hukum"];
	$Sanksi_K3S=$_POST["Sanksi_K3S"];

	//echo $Proses_Bangkrut . $Pengawasan_Keadilan . $Kegiatan_Usaha_Sedang_Dihentikan . $Tuntutan . $Sanksi_Hukum . $Sanksi_K3S;
	
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

	$result = getResults("SELECT * FROM keadaan_perusahaan WHERE user_id = '$id'", $conn);

	if($result->num_rows == 0){
		$sql = "INSERT INTO keadaan_perusahaan(user_id ,Proses_Bangkrut, Pengawasan_Keadilan, Kegiatan_Usaha_Sedang_Dihentikan, Tuntutan, Sanksi_Hukum, Sanksi_K3S)
		VALUES('$id', '$Proses_Bangkrut', '$Pengawasan_Keadilan', '$Kegiatan_Usaha_Sedang_Dihentikan', '$Tuntutan', '$Sanksi_Hukum', '$Sanksi_K3S')";
	}
	else{
		$sql = "UPDATE keadaan_perusahaan SET Proses_Bangkrut='$Proses_Bangkrut', Pengawasan_Keadilan='$Pengawasan_Keadilan', Kegiatan_Usaha_Sedang_Dihentikan='$Kegiatan_Usaha_Sedang_Dihentikan', Tuntutan='$Tuntutan', Sanksi_Hukum='$Sanksi_Hukum', Sanksi_K3S='$Sanksi_K3S' WHERE user_id = '$id'";
	}
	
	//echo $sql;
	execCud($sql, $conn, "step13.php");

	$conn->close();
?>