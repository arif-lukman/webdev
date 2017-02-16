<?php
	//include library
	include "lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "controller/koneksi.php";

	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM _document_type WHERE field = '_id' || field = '_kode' || field = '_judul' || field = '_kadaluarsa'", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _id, _kode, _judul, _kadaluarsa FROM _document_type ORDER BY _id ASC", $conn);

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
				createMenu(setActiveMenu(MENU, "cfg_exp.php", 1));
			?>
			<div class="well col-sm-9">
				<h3>Setting Masa Kadaluarsa</h3><hr>
				<form>
					<?php
						//bikin field pada form
						echo createSelectOption("Admin Document:", "admin", "admin", $conn, "SELECT _id, _judul as _name FROM _document_type ORDER BY _order ASC");
						echo createInputField("text", "Masa Kadaluarsa:", "judul", "judul", "");
					?>
					<button type="submit" class="btn btn-default">Save</button>
					<br>
					<?php
						//bikin tabel buat nampilin semua datanya
						generateTable($fieldNames, $fieldValues, $allValues, "typ_doc.php");
					?>
				</form>
			</div>
		</div>
	</body>
</html>