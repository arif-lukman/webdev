<?php
	include "koneksiDB.php";
	include "lib/library.php";

	//bikin koneksi ke db
	$conn = createConnection("localhost", "root", "", "_bpms_master");

	session_start();
	$id = $_SESSION["uid"];

	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM klasifikasi_perusahaan WHERE FIELD = 'No' or FIELD = 'Classification' or FIELD = 'Description'or FIELD = 'Attachment'";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT data.No, data.Classification, data.Description, data.Attachment FROM tbl_user as user, klasifikasi_perusahaan as data, data_klasifikasi_perusahaan as conn WHERE user.id = conn.id_user and data.No = conn.id_klasifikasi_perusahaan and user.id = '$id'";

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
		<title>Step 12</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="../assets/js/functions.js"></script>
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
		<link rel="stylesheet" type="text/css" href="../assets/css/styleuser.css">
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
		<form class="col-sm-8" action="step12action.php" method="post" enctype="multipart/form-data">
			<div class="col-sm-12 well well-lg">
			<h2>Step 12</h2>
			<h3>Klasifikasi Perusahaan</h3>
			<hr>
			<?php
				echo createSelectOptionByName("Bidang Pekerjaan:", "Activities_Section", "Activities_Section", "---Pilih Bidang Pekerjaan---", $conn1, "SELECT _id, _judul as _name FROM _scope_type ORDER BY _order ASC", false, "", "col-xs-6", true, $warning, "onchange = \"getClassification('Activities_Section', 'Classification', '---- Pilih Klasifikasi Perusahaan ----', false, '', 'SELECT _class_type._id, CONCAT(_class_type._kode, \' - \', _class_type._judul) as _name FROM _class_type, _scope_type WHERE LENGTH(_class_type._kode) <= 3 and _class_type._bidang = _scope_type._id and _scope_type._judul = ', ' ORDER BY _class_type._order ASC', '../cooperation/controller/combobox.php')\"");
				echo createSelectOptionByName("Klasifikasi:", "Classification", "Classification", "---Pilih Bidang Dahulu---", $conn1, "", false, "", "col-xs-6", true, $warning, "onchange = \"getSubClassification('Classification', 'Sub_Classification', '---- Pilih Sub Klasifikasi Perusahaan ----', false, '', '../cooperation/controller/combobox1.php')\"");
				echo createSelectOptionByName("Sub Klasifikasi:", "Sub_Classification", "Sub_Classification", "---Pilih Klasifikasi Dahulu---", $conn1, "", false, "", "col-xs-6", true, $warning, "");
				echo createTextArea(5, "Deskripsi:", "Description", "Address", "", "col-sm-12", true, $warning);
			?>
			<div class="form-group col-sm-12">
				<input type="file" name="Attachment" id="Attachment" required>
				<span class="label label-info">Format PDF max. 2Mb </span><p class="text-warning">should not be empty</p>
				<br>
			</div>
			<div class="col-sm-12">
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="reset" class="btn btn-primary">Reset</button>
				<hr>
				<ul class="pager">
					<li><a href="step11.php">Previous Step</a></li>
					<li><a href="step13.php">Next Step</a></li>
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
							<td><a href=\"editstep12.php?No=$conNames[No]\">edit</a></td>
							<td><a href=\"deletestep12.php?No=$conNames[No]\">delete</td>
							";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
		</div>
	</body>
</html>