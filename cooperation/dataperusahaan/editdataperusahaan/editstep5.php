<?php
	include "koneksiDB.php";
	include "lib/library.php";

	//parameter diambil sini woi
	$No = $_GET["No"];

	//ambil semua detail dengan id diatas
	$query = "SELECT * FROM daftar_pemilik WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
	$conn1 = createConnection("localhost", "root", "", "_bpms_master");
	$warning = "should not be empty";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step 5</title>
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
		<form class="col-sm-8" action="updatestep5.php?No=<?php echo $No;?>" method="post">
			<h2>Step 5</h2>
			<h3>Daftar Pemilik (Shareholders)</h3>
			<hr>
			<div class="well well-lg">
				<?php
					echo createInputField("text", "Nama:", "Name", "Name", $data['Name'], "", true, $warning);
					echo createInputField("text", "No Identitas:", "Civil_ID", "Civil_ID", $data['Civil_ID'], "", true, $warning);
					echo createInputField("text", "Alamat:", "Address", "Address", $data['Address'], "", true, $warning);
					echo createInputField("text", "No Telepon:", "Phone_Number", "Phone_Number", $data['Phone_Number'], "col-xs-6", true, $warning);
					echo createInputField("email", "Email:", "Email", "Email", $data['Email'], "col-xs-6", true, $warning);
					echo createInputField("text", "Share(%):", "Share", "Share", $data['Share'], "col-xs-6", true, $warning);
				?>
				<div class="col-xs-6">
					<label for="TGL">Share Value:</label>
					<input type="text" class="form-control" id="usr" name="Value" value="<?php echo $data['Value']?>" required>
					<span class="label label-info">contoh/example: IDR 15.000.000 / USD 5.000</span>
					<br><br>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				
				<hr>
				<ul class="pager">
					<li><a href="step4.php">Previous Step</a></li>
					<li><a href="step6.php">Next Step</a></li>
				</ul>
			</div>
		</form>
		<hr>
	</body>
</html>		