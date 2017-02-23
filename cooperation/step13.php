<?php
	include "koneksiDB.php";
	include "lib/library.php";
	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM keadaan_perusahaan";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT * FROM keadaan_perusahaan";

	//eksekusi query conQuery
	$conExec = mysql_query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysql_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step 13</title>
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
		<form class="col-sm-8" action="step13action.php" method="post">
			<h2>Step 13</h2>
			<h3>Keadaan Perusahaan</h3>
			<hr>
			<div class="well well-lg">
				<div class="form-group">
					<tr><td><strong>1. Proses bangkrut (Bancrupty proceeding)</strong></td><td> :
					<br>
					<input type=radio name='Proses_Bangkrut' id='a' value='Yes'>Yes
					<input type=radio name='Proses_Bangkrut' id='a' value='No'>No</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
					<tr><td><strong>2. Pengawasan pengadilan (Court supervision)</strong></td><td> :
					<br>
					<input type=radio name='Pengawasan_Keadilan' id='a' value='Yes'>Yes
					<input type=radio name='Pengawasan_Keadilan' id='a' value='No'>No</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
					<tr><td><strong>3. Kegiatan usaha sedang dihentikan (Suspension of business activities)</strong></td><td> :
					<br>
					<input type=radio name='Kegiatan_Usaha_Sedang_Dihentikan' id='a' value='Yes'>Yes
					<input type=radio name='Kegiatan_Usaha_Sedang_Dihentikan' id='a' value='No'>No</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
					<tr><td><strong>4. Tuntutan atau claim dari pihak ketiga atau pemerintah (Claims or suity with third parties including government agencies)</strong></td><td> :
					<br>
					<input type=radio name='Tuntutan' id='a' value='Yes'>Yes
					<input type=radio name='Tuntutan' id='a' value='No'>No</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
					<tr><td><strong>5. Sedang dikenakan sangsi hukum berdasarkan undang-undang kriminal (Is being sanctioned by criminal law)</strong></td><td> :
					<br>
					<input type=radio name='Sanksi_Hukum' id='a' value='Yes'>Yes
					<input type=radio name='Sanksi_Hukum' id='a' value='No'>No</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<div class="form-group">
					<tr><td><strong>6. Sedang dikenakan sangsi oleh perusahaan K3S atau perusahaan migas lainnya (Is being sanctioned by K3S or other oil company)</strong></td><td> :
					<br>
					<input type=radio name='Sanksi_K3S' id='a' value='Yes'>Yes
					<input type=radio name='Sanksi_K3S' id='a' value='No'>No</td></tr>
					<?php 'mysql_query'; ?>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-primary">Reset</button>
				<hr>
				<ul class="pager">
					<li><a href="step12.php">Previous Step</a></li>
					<li><a href="step14.php">Next Step</a></li>
				</ul>
			</div>
		</form>
	</body>
</html>