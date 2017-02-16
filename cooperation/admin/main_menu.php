<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//data untuk select option negara
	//ambil nama field
	$fieldNames1 = getResults("SHOW columns FROM _document_type WHERE field = '_id' || field = '_kode' || field = '_judul' || field = '_kadaluarsa'", $conn);

	//ambil isi field
	$fieldValues1 = getResults("SELECT _id, _kode, _judul, _kadaluarsa FROM _document_type ORDER BY _id ASC", $conn);

	//push isi field ke array
	$allValues1 = pushArray($fieldValues1);
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
						echo createSelectOption("Negara:", "country", "country", $conn, "SELECT _id, _nama as _name FROM _country");
						echo createSelectOption("Propinsi:", "province", "province", $conn, "SELECT _id, _nama as _name FROM _province");
						echo createInputField("email", "Email:", "email", "email", "");
						echo createInputField("password", "Kata Sandi:", "password", "password", "");
						echo createTextArea(3, "Keterangan:", "desc", "desc", "");
					?>
					<input type="submit" value="Create">
				</form>
			</div>
		</div>
	</body>
</html>