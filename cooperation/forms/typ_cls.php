<?php
	//include library
	include "../lib/library.php";

	//ambil parameter
	//parameter operasi: create/update/delete
	$op = $_GET["op"];

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//cek operasi
	if($op == "update"){
		$id = $_GET["id"];
		echo $id;

		//ambil data dari db
		$result = getResults("SELECT * FROM _class_type WHERE _id = '$id'", $conn);
		$data = $result->fetch_assoc();
		$allowChecking = true;
		$param = $data["_kelas"];
		$param2 = $data["_status"];
	}
	else{
		$data = "";
		$allowChecking = false;
		$param = "";
		$param2 = "";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<<?php
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
				createMenu(setActiveMenu(MENU, "typ_cls.php", 3));
			?>
			<div class="well col-sm-9">
				<h4>Create Tipe Klasifikasi Perusahaan</h4><hr>
				<form action="<?php echo '../controller/typ_cls.php?op=' . $op; if(isset($id)) echo '&id=' . $id;?>" method="post">
					<?php
						//bikin field pada form
						echo createInputField("text", "Kode Tipe Klasifikasi:", "kode", "kode", checkData($data,"_kode"));
						echo createInputField("text", "Judul Tipe Klasifikasi:", "judul", "judul", checkData($data,"_judul"));
						echo createInputField("text", "Order:", "order", "order", checkData($data,"_order"));
						//echo createInputField("text", "Kelas:", "kelas", "kelas", checkData($data,"_kelas"));
						echo createSelectOption("Kelas:", "kelas", "kelas", "---Pilih Kelas---", $conn, "SELECT _id, _nama as _name FROM _class", $conn, $allowChecking, $param);
						echo createSelectOption("Status:", "stat", "stat", "---Pilih Status---", $conn, "SELECT _id, _nama as _name FROM _status ORDER BY _id DESC", $conn, $allowChecking, $param2);
					?>
					<button type="submit" class="btn btn-default"><?php echo setButtonText($op);?></button>
				</form>
			</div>
		</div>
	</body>
</html>