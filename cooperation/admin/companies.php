<?php
	//include library
	include "../lib/library.php";

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
						echo createSelectOption("Negara:", "country", "country", $conn, "SELECT _id, _nama as _name FROM _country");
						echo createSelectOption("Propinsi:", "province", "province", $conn, "SELECT _id, _nama as _name FROM _province");
						echo createSelectOption("Klasifikasi:", "class", "class", $conn, "SELECT _id, _judul as _name FROM _class_type");
						echo createSelectOption("Kualifikasi:", "qual", "qual", $conn, "SELECT _id, _judul as _name FROM _qual_type");
					?>
					<input type="submit" value="Search">
				</form>
			</div>
		</div>
	</body>
</html>