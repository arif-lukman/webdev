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
	$fieldNames = getResults("SHOW columns FROM _distributor", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _distributor._id as _id, _distributor._nama as _nama_dist, _distributor._order, _status._nama FROM _distributor, _status WHERE _distributor._status = _status._id ORDER BY _id ASC", $conn);

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
				createMenu(setActiveMenu(MENU, "distributor.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Distributor</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "distributor.php", true);
				?>
				<br>
				<a href="../forms/distributor.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>