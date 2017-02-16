<?php
	//include library
	include "../lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM _bank", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _bank._id as _id, _bank._kode, _bank._nama as _nama_bank, _bank._order, _status._nama FROM _bank, _status WHERE _bank._status = _status._id ORDER BY _id ASC", $conn);

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
				createMenu(setActiveMenu(MENU, "bank.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Bank</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "bank.php", true);
				?>
				<br>
				<a href="../forms/bank.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>