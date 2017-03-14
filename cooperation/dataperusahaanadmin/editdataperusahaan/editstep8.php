<?php
	include "koneksiDB.php";
	include "lib/library.php";

	//parameter diambil sini woi
	$No = $_GET["No"];

	//ambil semua detail dengan id diatas
	$query = "SELECT * FROM daftar_rekening_bank WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
	$conn1 = createConnection("localhost", "root", "", "_bpms_master");
	$warning = "should not be empty";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step 8</title>
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
		<form class="col-sm-8" action="updatestep8.php?No=<?php echo $No;?>" method="post">
			<h2>Step 8</h2>
			<h3>Partner K3S</h3>
			<hr>
			<div class="col-sm-12 well well-lg">
				<?php
					echo createSelectOptionByName("Nama Bank:", "Bank_Name", "Bank_Name", "---Pilih Bank---", $conn1, "SELECT _id, _nama as _name FROM _bank ORDER BY _order ASC", true, $data["Bank_Name"], "col-xs-6", true, $warning, "");
					echo createInputField("text", "Cabang:", "Branch", "Branch", $data['Branch'], "col-xs-6", true, $warning, "");
					echo createSelectOptionByName("Negara:", "Country", "Country", "---Pilih Negara---", $conn1, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", true, $data["Country"], "col-xs-6", true, $warning, "");
					echo createInputField("text", "Pemilik Rekening:", "Acc_Name", "Acc_Name", $data['Acc_Name'], "col-sm-12", true, $warning);
					echo createInputField("text", "Nomor Rekening:", "Acc_Number", "Acc_Number", $data['Acc_Number'], "col-sm-12", true, $warning);
					echo createSelectOptionByName("Mata Uang:", "Currency", "Currency", "---Pilih Mata Uang---", $conn1, "SELECT _id, _nama as _name FROM _currency ORDER BY _order ASC", true, $data["Currency"], "col-xs-6", true, $warning, "");
				?>
				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary">Save</button>
					
					<hr>
					<ul class="pager">
						<li><a href="step7.php">Previous Step</a></li>
						<li><a href="step9.php">Next Step</a></li>
					</ul>
				</div>
			</div>
		</form>
	</body>
</html>