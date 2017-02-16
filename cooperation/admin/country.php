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
	$fieldNames = getResults("SHOW columns FROM _country", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _country._id as _id, _country._kode, _country._nama as _nama_negara, _country._order, _status._nama FROM _country, _status WHERE _country._status = _status._id ORDER BY _id ASC", $conn);

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
				createMenu(setActiveMenu(MENU, "country.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Negara</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "country.php", true);
				?>
				<br>
				<a href="../forms/country.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>