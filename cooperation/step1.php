<?php
	session_start();
	$id = $_SESSION["uid"];

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
		<div class="dropdown">
			<button class="step btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Go to step
			<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="step1.php">Step 1 : Nama dan Tipe Perusahaan</a></li>
				<li><a href="step2.php">Step 2 : Partner K3S</a></li>
				<li><a href="step3.php">Step 3 : Alamat Kantor / Office Address</a></li>
				<li><a href="step4.php">Step 4 : Susunan pengurus / Struktur organisasi</a></li>
				<li><a href="step5.php">Step 5 : Daftar Pemilik / Shareholders</a></li>
				<li><a href="step6.php">Step 6 : Dokumen Administrasi / Administration Document</a></li>
				<li><a href="step7.php">Step 7 : Surat Keagenan / Dealer / Distributor</a></li>
				<li><a href="step8.php">Step 8 : Daftar Rekening Bank Perusahaan / Office Bank Accounts</a></li>
				<li><a href="step9.php">Step 9 : Perusahaan Induk, Grup Perusahaan, Rekanan, Konsorsium, Afiliasi dan Aliansi</a></li>
				<li><a href="step10.php">Step 10 : Pengalaman Perusahaan / Company Experience</a></li>
				<li><a href="step11.php">Step 11 : Perusahaan Pembuat Barang / Good Manufacturer</a></li>
				<li><a href="step12.php">Step 12 : Klasifikasi Perusahaan / Company Classification</a></li>
				<li><a href="step13.php">Step 13 : Keadaan Perusahaan / Company Subject</a></li>
				<li><a href="step14.php">Step 14 : Surat dan Dokumen Pelengkap / Supporting Documents</a></li>
				<li><a href="step15.php">Step 15 : Pengajuan / Submission</a></li>
			</ul>
		</div>
		<center><a class="home" href="vendor.php"><img src="../assets/images/icons/iconhome.png"></a> </center>
		<div class="col-sm-2"></div>
		<form class="col-sm-8" action="step1action.php" method="post">
			<h2>Step 1</h2>
			<h3>Nama dan Tipe Perusahaan</h3>
			<hr>
			<div class="well well-lg">

			<?php
				echo createInputField("text", "Nama Perusahaan:", "Company_Name", "namaperusahaan", $data["name"], "", false, "");
				echo createSelectOption("Tipe Perusahaan:", "tipeperusahaan", "Company_Type", "---- Pilih Tipe Perusahaan ----", $conn1, "SELECT _id, _judul as _name FROM _company_type ORDER BY _order ASC", true, $data["type"], "", false, "");
				echo createSelectOption("Tipe Kualifikasi Perusahaan:", "kualifikasiperusahaan", "Company_Qualification", "---- Pilih Kualifikasi Perusahaan ----", $conn1, "SELECT _id, _judul as _name FROM _qual_type ORDER BY _order ASC", true, $data["qual"], "", false, "");
			?>

			<button type="submit" class="btn btn-primary">Save</button>
			<button type="button" class="btn btn-primary">Reset</button>
			<hr>
			<ul class="pager">
				<li><a href="vendor.php">Home</a></li>
				<li><a href="step2.php">Next Step</a></li>
			</ul>

		</form>
		</div>
	</body>
</html>   
