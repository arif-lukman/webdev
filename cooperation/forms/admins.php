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
		$result = getResults("SELECT * FROM _admin", $conn);
		$data = $result->fetch_assoc();
	}
	else{
		$data = "";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<<?php
			//inisialisasi head
			initHead();
		?>

		<!-- CSS Overriding -->
		<style type="text/css">
			.dis{
				text-decoration: underline;
			}
		</style>
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
						echo createInputField("text", "Username:", "uname", "uname", checkData($data,"_username"));
						echo createInputField("text", "Nama Lengkap:", "fname", "fname", checkData($data,"_fullname"));
						echo createInputField("text", "Email:", "email", "email", checkData($data,"_email"));
						echo createInputField("text", "Password:", "pwd", "pwd", checkData($data,"_password"));
						echo createSelectOption("Group:", "grup", "grup", $conn, "SELECT * FROM _group_priv", $conn);
					?>
					<div class="form-group">
				  		<label for="grup">Group:</label>
					  	<select class="form-control" id="grup" name="grup">
							<?php
								//ambil list group
								$result1 = getResults("SELECT * FROM _group_priv", $conn);

								while($data1 = $result1->fetch_assoc()){
									echo "<option value='$data1[_id]'>" . $data1["_name"] . "</option>";
								}
							?>
						</select>
					</div>
					<div class="form-group">
				  		<label for="stat">Status:</label>
					  	<select class="form-control" id="stat" name="stat">
						    <option value="1" <?php if(isset($data['_status'])) echo check($data['_status']);?>>Active</option>
						    <option value="0" <?php if(isset($data['_status'])) echo check(!$data['_status']);?>>Inactive</option>
						</select>
					</div>
					<?php
						//textarea
						echo createTextArea(3, "Keterangan:", "desc", "desc", checkData($data,"_desc"));
					?>
					<button type="submit" class="btn btn-default"><?php echo setButtonText($op);?></button>
				</form>
			</div>
		</div>
	</body>
</html>