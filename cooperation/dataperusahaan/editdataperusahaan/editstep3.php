<?php
	include "koneksiDB.php";
	include "lib/library.php";

	//parameter diambil sini woi
	$No = $_GET["No"];

	//ambil semua detail dengan id diatas
	$query = "SELECT * FROM alamat_kantor WHERE No='$No'";
	$result = mysql_query($query);
	$data = mysql_fetch_array($result);
	//bikin koneksi ke db
	$conn1 = createConnection("localhost", "root", "", "_bpms_master");
	$warning = "should not be empty";
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
	</head>

	<body>

		<center><a class="home" href="vendor.php"><img src="../assets/images/icons/iconhome.png"></a> </center>
		<div class="col-sm-2"></div>
		<form class="col-sm-8" action="updatestep3.php?No=<?php echo $No;?>" method="post">
			<h2>Step 3</h2>
			<h3>Alamat Kantor (Office Address)</h3>
			<hr>
			<div class="well well-lg">
				<?php
					echo createSelectOptionByName("Tipe Kantor:", "tipekantor", "Office_Type", "---- Pilih Tipe Kantor ----", $conn1, "SELECT _id, _judul as _name FROM _office_type ORDER BY _order ASC", true, $data["Office_Type"], "col-xs-4", true, $warning, "");
					echo createSelectOptionByName("Negara:", "negara", "Country", "---- Pilih Negara ----", $conn1, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", true, $data["Country"], "col-xs-4", true, $warning, "onchange = \"getProvince('negara', 'provinsi', '---- Pilih Provinsi ----', false, '', 'SELECT _province._id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara and _country._nama = ', ' ORDER BY _province._order ASC', '../cooperation/controller/combobox.php')\"");
					echo createSelectOptionByName("Provinsi:", "provinsi", "Province", "---- Pilih Provinsi ----", $conn1, "SELECT _id, _nama as _name FROM _province ORDER BY _order ASC", true, $data["Province"], "col-xs-4", true, $warning, "");
				?>
			<br><br><br><br>
			<b>Kantor Utama?</b>
			<div class="checkbox">
			<label><input type="checkbox" value="1" name="Primary_Office" <?php echo checkBox($data['Primary_Office']);?>> Yes (salah satu harus sebagai Pengurus Utama / one address must be set to Primary Person)</label>
			<br><br>
			</div>
				<?php
					echo createTextArea(5, "Alamat Kantor:", "Office_Address", "Office_Address", $data['Office_Address'], "", true, $warning);
					echo createInputField("text", "Kota:", "City", "City", $data['City'], "col-xs-4", true, $warning);
					echo createInputField("text", "Kode Pos:", "ZIP_Code", "ZIP_Code", $data['ZIP_Code'], "col-xs-4", true, $warning);
					echo createInputField("text", "Nomor Telepon Kantor:", "Office_Phone_Number", "Office_Phone_Number", $data['Office_Phone_Number'], "col-xs-4", true, $warning);
					echo createInputField("text", "Nomor Fax Kantor:", "Office_Fax_Number", "Office_Fax_Number", $data['Office_Fax_Number'], "col-xs-4", true, $warning);
					echo createInputField("text", "Email Kantor:", "Office_Email", "Office_Email", $data['Office_Email'], "col-xs-4", true, $warning);
					echo createInputField("text", "Website:", "Website", "Website", $data['Website'], "col-xs-4", true, $warning); 
				?>
			<button type="submit" class="btn btn-primary">Save</button>
			
			<hr>
			<ul class="pager">
				<li><a href="../dp_alamatkantor.php">Back</a></li>
			</ul>
		</form>
		</div>
	</body>
</html>