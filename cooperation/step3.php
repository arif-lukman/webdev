<?php
	session_start();
	$id = $_SESSION["uid"];

	include "koneksiDB.php";
	include "lib/library.php";
	$warning = "should not be empty";

	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM alamat_kantor WHERE FIELD = 'No' or FIELD = 'Office_Type' or FIELD = 'Office_Address' or FIELD = 'Office_Phone_Number' or FIELD = 'Office_Email'";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT data.No, data.Office_Type, data.Office_Address, data.Office_Phone_Number, data.Office_Email FROM tbl_user as user, alamat_kantor as data, data_alamat_kantor as conn WHERE user.id = conn.id_user and data.No = conn.id_alamat_kantor and user.id = '$id'";

	//eksekusi query conQuery
	$conExec = mysql_query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysql_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}

	//bikin koneksi ke db
	$conn1 = createConnection("localhost", "root", "", "_bpms_master");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step 3</title>
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
		<form class="col-sm-8" action="step3action.php" method="post">
			<div class="well well-lg">
			<h2>Step 3</h2>
			<h3>Alamat Kantor (Office Address)</h3>
			<hr>
				<?php
					echo createSelectOptionByName("Tipe Kantor:", "tipekantor", "Office_Type", "---- Pilih Tipe Kantor ----", $conn1, "SELECT _id, _judul as _name FROM _office_type ORDER BY _order ASC", false, "", "col-xs-12", true, $warning, "");
					echo createSelectOptionByName("Negara:", "negara", "Country", "---- Pilih Negara ----", $conn1, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", false, "", "col-xs-6", true, $warning, "onchange = \"getProvince('negara', 'provinsi', '---- Pilih Provinsi ----', false, '', 'SELECT _province._id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara and _country._nama = ', ' ORDER BY _province._order ASC', '../cooperation/controller/combobox.php')\"");
					echo createSelectOptionByName("Provinsi:", "provinsi", "Province", "---- Pilih Negara Terlebih Dahulu ----", $conn1, "", false, "", "col-xs-6", true, $warning, "");
					//SELECT _id, _nama as _name FROM _province ORDER BY _order ASC
				?>
				<br><br><br><br>
				<b>Kantor Utama?</b>
				<div class="checkbox">
					<label><input type="checkbox" value="1" name="Primary_Office"> Yes (salah satu harus sebagai Pengurus Utama / one address must be set to Primary Person)</label>
					<br><br>
				</div>
				<?php
					echo createTextArea(5, "Alamat Kantor:", "Office_Address", "Office_Address", "", "", true, $warning);
					echo createInputField("text", "Kota:", "City", "City", "", "col-xs-4", true, $warning);
					echo createInputField("text", "Kode Pos:", "ZIP_Code", "ZIP_Code", "", "col-xs-4", true, $warning);
					echo createInputField("text", "Nomor Telepon Kantor:", "Office_Phone_Number", "Office_Phone_Number", "", "col-xs-4", true, $warning);
					echo createInputField("text", "Nomor Fax Kantor:", "Office_Fax_Number", "Office_Fax_Number", "", "col-xs-4", true, $warning);
					echo createInputField("text", "Email Kantor:", "Office_Email", "Office_Email", "", "col-xs-4", true, $warning);
					echo createInputField("text", "Website:", "Website", "Website", "", "col-xs-4", true, $warning); 
				?>
				<button type="submit" class="btn btn-primary">Save</button>
				<button type="reset" class="btn btn-primary">Reset</button>
				<hr>
				<ul class="pager">
					<li><a href="step2.php">Previous Step</a></li>
					<li><a href="step4.php">Next Step</a></li>
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
							<td><a href=\"editstep3.php?No=$conNames[No]\">edit</a></td>
							<td><a href=\"deletestep3.php?No=$conNames[No]\">delete</td>
							";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>	
	</body>
</html>		
