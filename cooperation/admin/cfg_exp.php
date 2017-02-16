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
				<form action="../controller/expiry_config.php" method="post">
					<?php
						//bikin field pada form
						echo createSelectOption("Admin Document:", "doc", "doc", $conn, "SELECT _id, _judul as _name FROM _document_type ORDER BY _order ASC");
						echo createInputField("text", "Masa Kadaluarsa:", "exp", "exp", "");
					?>
					<button type="submit" class="btn btn-default">Save</button>
					<br>
					<br>
					<?php
						//bikin tabel buat nampilin semua datanya
						generateTable($fieldNames, $fieldValues, $allValues, "typ_doc.php", false);
					?>
				</form>
			</div>
		</div>
	</body>
</html>