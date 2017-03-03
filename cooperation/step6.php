<?php
	include "koneksiDB.php";
	include "lib/library.php";

	session_start();
	$id = $_SESSION["uid"];

	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM dokumen_administrasi WHERE FIELD = 'No' or FIELD = 'Document_Type' or FIELD = 'Document_Number' or FIELD = 'Issued_By' or FIELD = 'Issued_Date' or FIELD = 'Expired_Date' or FIELD = 'Description' or FIELD = 'Attachment'";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT data.No, data.Document_Type, data.Document_Number, data.Issued_By, data.Issued_Date, data.Expired_Date, data.Description, data.Attachment FROM tbl_user as user, dokumen_administrasi as data, data_dokumen_administrasi as conn WHERE user.id = conn.id_user and data.No = conn.id_dokumen_administrasi and user.id = '$id'";

	//eksekusi query conQuery
	$conExec = mysql_query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysql_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}
	$conn1 = createConnection("localhost", "root", "", "_bpms_master");
	$warning = "should not be empty";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step 6</title>
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
		<form class="col-sm-8" action="step6action.php" method="post" enctype="multipart/form-data">
			<h2>Step 6</h2>
			<h3>Dokumen Administrasi (Administration Document)</h3>
			<hr>
			<div class="well well-lg">
				<?php
					echo createSelectOption("Pilih Tipe Dokumen:", "Document_Type", "Document_Type", "---Pilih Tipe Dokumen---", $conn1, "SELECT _id, _judul as _name FROM _document_type ORDER BY _order ASC", false, "", "", true, $warning);
					echo createInputField("text", "Nomor Dokumen:", "Document_Number", "Document_Number", "", "", true, $warning);				
					echo createInputField("text", "Dikeluarkan oleh:", "Issued_By", "Issued_By", "", "", true, $warning);		
					echo createInputField("date", "Tanggal Dikeluarkan:", "Issued_Date", "Issued_Date", "", "col-xs-6", true, $warning);		
					echo createInputField("date", "Tanggal Kadaluarsa:", "Expired_Date", "Expired_Date", "", "col-xs-6", true, $warning);
					echo createInputField("text", "Deskripsi:", "Description", "Description", "", "col-xs-12", true, $warning); 
				?>
			<div class="form-group">
				<input type="file" name="Attachment" id="Attachment">
				<span class="label label-info">Format PDF max. 8Mb*</span><p class="text-warning">should not be empty</p>
				<br>
			</div>
			<button type="submit" class="btn btn-primary">Save</button>
			<button type="button" class="btn btn-primary">Reset</button>
			<hr>
			<ul class="pager">
				<li><a href="step5.php">Previous Step</a></li>
				<li><a href="step7.php">Next Step</a></li>
			</ul>
		</form>
		<div class="well well-sm">Result (Table):</div>
		<table class="table table-bordered">
			<!--nama field-->
			<thead>
				<tr style="font-size:9px">
					<?php
					while ($colNames = mysql_fetch_array($colExec)){
						echo "
						<th>$colNames[Field]</th>
						";
						}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
					while($conNames = mysql_fetch_array($conExec)){
						echo "<tr>";
						foreach($all_prop as $item){
							echo "<td>$conNames[$item]</td>";
						}
						echo "
						<td><a href=\"editstep6.php?No=$conNames[No]\">edit</a></td>
						<td><a href=\"deletestep6.php?No=$conNames[No]\">delete</td>
						";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		</div>
		<hr>
	</body>
</html>