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

		//ambil data dari db
		$result = getResults("SELECT * FROM _admin WHERE _id = '$id'", $conn);
		$data = $result->fetch_assoc();
		$allowChecking = true;
		$param = $data["_group_id"];
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
				createMenu(setActiveMenu(MENU, "admins.php", 2));
			?>
			<div class="well col-sm-9">
				<h4>Create User</h4><hr>
				<form action="<?php echo '../controller/admins.php?op=' . $op; if(isset($id)) echo '&id=' . $id;?>" method="post">
					<?php
						//bikin field pada form
						echo createInputField("text", "Username:", "uname", "uname", checkData($data,"_username"), "", false, "");
						echo createInputField("text", "Nama Lengkap:", "fname", "fname", checkData($data,"_fullname"), "", false, "");
						echo createInputField("text", "Email:", "email", "email", checkData($data,"_email"), "", false, "");
						echo createInputField("text", "Password:", "pswrd", "pswrd", checkData($data,"_password"), "", false, "");
						echo createSelectOptionByName("Group:", "grup", "grup", "---Pilih Hak Akses---", $conn, "SELECT * FROM _group_priv", $allowChecking, $param, "", "", false, "", "");
					?>
					<div class="form-group">
				  		<label for="stat">Status:</label>
					  	<select class="form-control" id="stat" name="stat">
						    <option value="1" <?php if(isset($data['_status'])) echo check($data['_status']);?>>Active</option>
						    <option value="0" <?php if(isset($data['_status'])) echo check(!$data['_status']);?>>Inactive</option>
						</select>
					</div>
					<?php
						//textarea
						echo createTextArea(3, "Keterangan:", "desc", "desc", checkData($data,"_desc"), "", "", false, "");
					?>
					<button type="submit" class="btn btn-default"><?php echo setButtonText($op);?></button>
				</form>
			</div>
		</div>
	</body>
</html>