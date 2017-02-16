<?php
	//include library
	include "../lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM _qual_type", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _qual_type._id as _id, _qual_type._judul, _qual_type._order, _status._nama FROM _qual_type, _status WHERE _qual_type._status = _status._id ORDER BY _id ASC", $conn);

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
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav(NAVBAR, "admin.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<?php
				//bikin menunya
				createMenu(setActiveMenu(MENU, "typ_qual.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Tipe Kualifikasi Perusahaan</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "typ_qual.php", true);
				?>
				<br>
				<a href="../forms/typ_qual.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>