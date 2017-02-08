<?php
	//include library
	include "lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "controller/koneksi.php";

	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM _company_type", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _company_type._id as _id, _company_type._kode, _company_type._judul, _company_type._order, _status._nama FROM _company_type, _status WHERE _company_type._status = _status._id ORDER BY _id ASC", $conn);

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
		<!-- CSS Overriding -->
		<style type="text/css">
			.dis{
				text-decoration: underline;
			}
		</style>
	</head>

	<body>
		<?php
			//bikin navbarnya
			createNavbar(setActiveNav(NAVBAR, "admin.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<?php
				//bikin menunya
				createMenu(setActiveMenu(MENU, "typ_cpy.php", 3));
			?>
			<div class="well col-sm-9">
				<h3>Users</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "typ_cpy.php");
				?>
				<br>
				<a href="forms/typ_cpy.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>