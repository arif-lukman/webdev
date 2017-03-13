<?php
	session_start();
	$id = $_SESSION["uid"];

	include "lib/library.php";
	//bikin koneksi ke db
	$conn1 = createConnection("localhost", "root", "", "_bpms_master");
?>
<!doctype html>
<html>
	<head>
		<title>SPR Langgak</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/styleregister.css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="../assets/js/functions.js"></script>
	</head>

	<body>


		<div class="container">

			<div class="col-sm-2"></div>
			<form class="col-sm-8" action="controller/signup.php" method="post">
				<h2>Contact Us</h2>
				<hr>
				<?php
					echo createInputField("text", "Nama:", "nama", "nama", "", "", false, "");
					echo createInputField("text", "Jabatan:", "jabatan", "jabatan", "", "", false, "");
					echo createInputField("text", "Nama Perusahaan:", "nama_perusahaan", "nama_perusahaan", "", "", false, "");
					echo createInputField("text", "Alamat:", "alamat", "alamat", "", "", false, "");
					echo createSelectOptionById("Negara:", "negara", "negara", "---- Pilih Negara ----", $conn1, "SELECT _id, _nama as _name FROM _country ORDER BY _order ASC", false, "", "col-m-6", false, "", "onchange = \"getProvince('negara', 'provinsi', '---- Pilih Provinsi ----', false, '', 'SELECT _province._id as _id, _province._nama as _name FROM _province, _country WHERE _country._id = _province._id_negara and _country._id = ', ' ORDER BY _province._order ASC', '../cooperation/controller/combobox2.php')\"");
					echo createSelectOptionById("Provinsi:", "provinsi", "provinsi", "---- Pilih Negara Terlebih Dahulu ----", $conn1, "", false, "", "col-m-6", false, "", "");
					echo createInputField("email", "Email:", "email", "email", "", "", false, "");
					echo createInputField("number", "NPWP:", "npwp", "npwp", "", "", false, "");
					//nanti bikin captchanya
				?>
				<center><input type="submit"></center>
				<hr>
			</form>
		</div>


	</body>
</html>