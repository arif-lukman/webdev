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
			createNavbar(setActiveNav(NAVBAR, "proposals.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Status Pengajuan</h3><hr>
				<form action="search_stat.php">
					<?php
						echo createInputField("text", "Kata kunci:", "keyword", "keyword", "");
						echo createSelectOption("Negara:", "country", "country", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _country", false, "");
						echo createSelectOption("Propinsi:", "province", "province", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _province", false, "");
					?>
					<input type="submit" value="Search">
				</form>
			</div>
		</div>
	</body>
</html>