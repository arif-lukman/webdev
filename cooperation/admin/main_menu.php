<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//bikin koneksi ke db
	$master = createConnection("localhost", "root", "", "_bpms_master");
	$vendor = createConnection("localhost", "root", "", "_bpms_vendor");

	//include privilege checker
	include "../controller/check_priv.php";	

	//data untuk select option negara
	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM tbl_user", $vendor);

	//ambil isi field
	$fieldValues = getResults("SELECT * FROM tbl_user ORDER BY id ASC", $vendor);

	//push isi field ke array
	$allValues = pushArray($fieldValues);

	$warning = "should not be empty";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			//inisialisasi head
			initHead();
		?>
		<script src="../../assets/js/functions.js"></script>
		<link rel="stylesheet" type="text/css" href="../../assets/css/style2.css">
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav(NAVBAR, "main_menu.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Registrasi</h3><hr>
				<form action="../controller/register_company.php" method="post">
					<?php
						echo createInputFieldB("text", "Username:", "uname", "uname", "", "col-sm-6", false, "");
						echo createInputFieldB("text", "Nama Perusahaan:", "cpname", "cpname", "", "col-sm-6", false, "");
						echo createSelectOptionById("Negara:", "country", "country", "---- Pilih Negara ----", $master, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", false, "", "col-sm-6", false, "", "onchange = \"getProvince('country', 'province', '---- Pilih Provinsi ----', false, '', 'SELECT _province._id as _id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara and _country._id = ', ' ORDER BY _province._order ASC', '../controller/combobox2.php')\"");
						echo createSelectOptionById("Provinsi:", "province", "province", "---- Pilih Negara Terlebih Dahulu ----", $master, "", false, "", "col-sm-6", false, "", "");
						echo createInputFieldB("email", "Email:", "email", "email", "", "col-sm-6", false, "");
						echo createInputFieldB("password", "Kata Sandi:", "password", "password", "", "col-sm-6", false, "");
						echo createTextArea(3, "Keterangan:", "desc", "desc", "", "col-sm-12", false, "");
					?>
					<center><input type="submit" value="Create"></center>
					<br><br>
				</form>
				<?php
					generateTable($fieldNames, $fieldValues, $allValues, "", false);
				?>
			</div>
		</div>
	</body>
</html>