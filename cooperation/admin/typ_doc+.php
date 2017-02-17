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
	$fieldNames = getResults("SHOW columns FROM _docplus_type", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _docplus_type._id as _id, _docplus_type._kode, _docplus_type._judul, _docplus_type._order, _status._nama FROM _docplus_type, _status WHERE _docplus_type._status = _status._id ORDER BY _id ASC", $conn);

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
			createNavbar(setActiveNav(NAVBAR, "cfg_gen.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<?php
				//bikin menunya
				createMenu(setActiveMenu(MENU, "typ_doc+.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Tipe Dokumen Tambahan</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "typ_doc+.php", true);
				?>
				<br>
				<a href="../forms/typ_doc+.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>