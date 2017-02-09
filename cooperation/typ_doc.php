<?php
	//include library
	include "lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "controller/koneksi.php";

	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM _document_type", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _document_type._id as _id, _document_type._kode, _document_type._judul, _document_type._order, _status._nama FROM _document_type, _status WHERE _document_type._status = _status._id ORDER BY _id ASC", $conn);

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
				createMenu(setActiveMenu(MENU, "typ_doc.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Tipe Dokumen</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "typ_doc.php");
				?>
				<br>
				<a href="forms/typ_cpy.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>