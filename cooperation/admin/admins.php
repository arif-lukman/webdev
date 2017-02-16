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
	$fieldNames = getResults("SHOW columns FROM _admin", $conn);

	//ambil isi field
	$fieldValues = getResults("SELECT _admin._id as _id, _admin._username, _admin._fullname, _admin._email, _admin._password, _group_priv._name, _status._nama, _admin._desc FROM _admin, _group_priv, _status WHERE _admin._group_id = _group_priv._id and _admin._status = _status._id ORDER BY _id ASC", $conn);

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
				createMenu(setActiveMenu(MENU, "admins.php", 2));
			?>
			<div class="well col-sm-9">
				<h3>Users</h3><hr>
				<?php
					//generate tabelnya
					generateTable($fieldNames, $fieldValues, $allValues, "admins.php", true);
				?>
				<br>
				<a href="../forms/admins.php?op=create" class="btn btn-default" role="button">Create</a>
			</div>
		</div>
	</body>
</html>