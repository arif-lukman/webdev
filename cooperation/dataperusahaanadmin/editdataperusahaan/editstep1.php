<?php
	session_start();
	$id = $_SESSION["uid"];
	
	$No=$_GET["No"];
	
	//include library
	include "lib/library.php";

	//bikin koneksi ke db yang diperlukan
	$conn1 = createConnection("localhost", "root", "", "_bpms_master");
	$conn2 = createConnection("localhost", "root", "", "_bpms_vendor");

	//ambil data dari db
	$sql = "SELECT conn.id_nama_dan_tipe_perusahaan as id, data.Company_Name as name, data.Company_Type as type, data.Company_Qualification as qual FROM tbl_user as user, nama_dan_tipe_perusahaan as data, data_nama_dan_tipe_perusahaan as conn WHERE user.id = conn.id_user and data.No = conn.id_nama_dan_tipe_perusahaan and user.id = '$id'";
	$result = $conn2->query($sql);
	$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step 1</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
		a.home {
			position: fixed;
			top: 0;
			right: 0;
			width: 200px;
			color: white;
		}
		</style>
	</head>

	<body>
		<center><a class="home" href="vendor.php"><img src="../assets/images/icons/iconhome.png"></a> </center>
		<div class="col-sm-2"></div>
		<form class="col-sm-8" action="updatestep1.php" method="post">
			<h2>Step 1</h2>
			<h3>Nama dan Tipe Perusahaan</h3>
			<hr>
			<div class="well well-lg">

			<?php
				echo createInputField("text", "Nama Perusahaan:", "Company_Name", "namaperusahaan", $data["name"], "", false, "");
				echo createSelectOptionByName("Tipe Perusahaan:", "tipeperusahaan", "Company_Type", "---- Pilih Tipe Perusahaan ----", $conn1, "SELECT _id, _judul as _name FROM _company_type ORDER BY _order ASC", true, $data["type"], "", false, "", "");
				echo createSelectOptionByName("Tipe Kualifikasi Perusahaan:", "kualifikasiperusahaan", "Company_Qualification", "---- Pilih Kualifikasi Perusahaan ----", $conn1, "SELECT _id, _judul as _name FROM _qual_type ORDER BY _order ASC", true, $data["qual"], "", false, "", "");
			?>

			<button type="submit" class="btn btn-primary">Save</button>
			<button type="button" class="btn btn-primary">Reset</button>
			<hr>
			<ul class="pager">
				<li><a href="../dataperusahaan.php">Back</a></li>
			</ul>

		</form>
		</div>
	</body>
</html>   
