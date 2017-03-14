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
	$sql = "SELECT * FROM _regist_cfg";
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
				createMenu(setActiveMenu(MENU, "cfg_reg.php", 1));
			?>
			<div class="well col-sm-9">
				<h3>Konfigurasi Pendaftaran</h3><hr>
				<form action="../controller/registration_config.php" method="post">
					<?php
						//bikin field pada form
						echo createInputField("text", "Judul:", "judul", "judul", $data['_judul'], "", false, "");
						echo createTextArea(3, "Deskripsi:", "desc", "desc", $data['_desc'], "", false, "");
					?>
					<div class="form-group">
				  		<label for="stat">Status:</label>
					  	<select class="form-control" id="stat" name="stat" value="<?php echo $data['_status'];?>">
						    <option
						    <?php
						    	if($data['_status']){
									echo "selected";
								}
						    ?>>Active</option>
						    <option <?php
						    	if(!$data['_status']){
									echo "selected";
								}
						    ?>>Inactive</option>
						</select>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>