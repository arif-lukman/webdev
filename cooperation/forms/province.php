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
		$result = getResults("SELECT * FROM _province WHERE _id = '$id'", $conn);
		$data = $result->fetch_assoc();
		$allowChecking = true;
		$param = $data["_id_negara"];
	}
	else{
		$data = "";
		$allowChecking = false;
		$param = "";
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
				createMenu(setActiveMenu(MENU, "province.php", 3));
			?>
			<div class="well col-sm-9">
				<h4>Create Propinsi</h4><hr>
				<form action="<?php echo '../controller/province.php?op=' . $op; if(isset($id)) echo '&id=' . $id;?>" method="post">
					<?php
						//bikin field pada form
						echo createInputField("text", "Kode Propinsi:", "kode", "kode", checkData($data,"_kode"), "", false, "");
						echo createInputField("text", "Nama Propinsi:", "nama", "nama", checkData($data,"_nama"), "", false, "");
						echo createInputField("text", "Order:", "order", "order", checkData($data,"_order"), "", false, "");
						echo createSelectOptionById("Negara:", "negara", "negara", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _country", $allowChecking, $param, "", "", false, "", "");
					?>
					<div class="form-group">
				  		<label for="stat">Status:</label>
					  	<select class="form-control" id="stat" name="stat">
						    <option value="1" <?php if(isset($data['_status'])) echo check($data['_status']);?>>Active</option>
						    <option value="0" <?php if(isset($data['_status'])) echo check(!$data['_status']);?>>Inactive</option>
						</select>
					</div>
					<button type="submit" class="btn btn-default"><?php echo setButtonText($op);?></button>
				</form>
			</div>
		</div>
	</body>
</html>