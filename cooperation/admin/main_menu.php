<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	$master = createConnection("localhost", "root", "", "_bpms_master");
	$vendor = createConnection("localhost", "root", "", "_bpms_vendor");

	//data untuk select option negara
	//ambil nama field
	$fieldNames = getResults("SHOW columns FROM tbl_user", $vendor);

	//ambil isi field
	$fieldValues = getResults("SELECT * FROM tbl_user ORDER BY id ASC", $vendor);

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
			createNavbar(setActiveNav(NAVBAR, "main_menu.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Registrasi</h3><hr>
				<form action="controller/register_company.php" method="post">
					<?php
						echo createInputField("text", "Username:", "uname", "uname", "");
						echo createInputField("text", "Nama Perusahaan:", "cpname", "cpname", "");
						echo createSelectOption("Negara:", "country", "country", "---Pilih Negara---", $master, "SELECT _id, _nama as _name FROM _country", false, "");
						echo createSelectOption("Propinsi:", "province", "province", "---Pilih Propinsi---", $master, "SELECT _id, _nama as _name FROM _province", false, "");
						echo createInputField("email", "Email:", "email", "email", "");
						echo createInputField("password", "Kata Sandi:", "password", "password", "");
						echo createTextArea(3, "Keterangan:", "desc", "desc", "");
					?>
					<input type="submit" value="Create">
				</form>
				<?php
					generateTable($fieldNames, $fieldValues, $allValues, "", false);
				?>
			</div>
		</div>
	</body>
</html>