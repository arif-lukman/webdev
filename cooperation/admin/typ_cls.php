<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM _class_type", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _class_type._id as _id, _class_type._kode, _class_type._judul, _class_type._order, _class._nama as _nama_kelas, _status._nama as _nama_status FROM _class_type, _status, _class WHERE _class_type._status = _status._id and _class_type._kelas = _class._id ORDER BY _id ASC", $conn);

	//push isi field ke array
	$allValues = pushArray($fieldValues);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			//inisialisasi head
			initHead();
		?>
		<link rel="stylesheet" type="text/css" href="../../assets/css/style2.css">
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav(NAVBAR, "cfg_gen.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<?php
				//bikin menunya
				createMenu(setActiveMenu(MENU, "typ_cls.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Tipe Klasifikasi Perusahaan</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "typ_cls.php", true);
				?>
				<br>
				<a href="../forms/typ_cls.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>