<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//ambil data dari db
	$sql = "SELECT * FROM _general_cfg";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
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
				createMenu(setActiveMenu(MENU, "cfg_gen.php", 1));
			?>
			<div class="well col-sm-9">
				<h3>Konfigurasi Umum</h3><hr>
				<form action="../controller/general_config.php" method="post">
					<?php
						//bikin input fieldnya
						echo createInputField("text", "Nama Aplikasi:", "nama", "nama", $data['_nama_app'], "", false, "");
						echo createTextArea(3, "Deskripsi:", "desc", "desc", $data['_desc'], "", false, "");
						echo createInputField("email", "Kontak Email:", "email", "email", $data['_email_1'], "", false, "");
						echo createInputField("email", "Kontak Email2:", "email2", "email2", $data['_email_2'], "", false, "");
						echo createInputField("email", "Email Procurement", "emailp", "emailp", $data['_email_proc'], "", false, "");
						echo createInputField("text", "Penanda Tangan SKT:", "ttd", "ttd", $data['_ttd_skt'], "", false, "");
						echo createInputField("text", "Teks Footer:", "footer", "footer", $data['_footer_txt'], "", false, "");
						echo createInputField("file", "Favicon:", "image", "image", $data['_img'], "", false, "");
					?>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>