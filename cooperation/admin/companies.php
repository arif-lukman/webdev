<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";
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
			createNavbar(setActiveNav(NAVBAR, "companies.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Data Perusahaan</h3><hr>
				<form action="search_comp.php" method="post">
					<?php
						echo createInputField("text", "Kata kunci:", "keyword", "keyword", "");
						echo createSelectOption("Negara:", "country", "country", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _country", false, "");
						echo createSelectOption("Propinsi:", "province", "province", "---Pilih Propinsi---", $conn, "SELECT _id, _nama as _name FROM _province", false, "");
						echo createSelectOption("Klasifikasi:", "class", "class", "---Pilih Klasifikasi Perusahaan---", $conn, "SELECT _id, _judul as _name FROM _class_type", false, "");
						echo createSelectOption("Kualifikasi:", "qual", "qual", "---Pilih Kualifikasi Perusahaan---", $conn, "SELECT _id, _judul as _name FROM _qual_type", false, "");
					?>
					<input type="submit" value="Search">
				</form>
			</div>
		</div>
	</body>
</html>