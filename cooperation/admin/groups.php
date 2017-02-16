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
	$sql = "SELECT * FROM _group_priv";
	$result = $conn->query($sql);
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
			createNavbar(setActiveNav(NAVBAR, "admin.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<?php
				//bikin menunya
				createMenu(setActiveMenu(MENU, "groups.php", 2));
			?>
			<div class="well col-sm-9">
				<h3>Tipe Perusahaan</h3><hr>
				<form action="../controller/groups.php" method="post">
					<table width="100%">
						<?php
							while($data = $result->fetch_assoc()){
								echo "
									<tr class='form-group'>
									<td>$data[_name]</td>
							  		<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "[0]'" . checkBox($data['_view']) . " value='1'>View</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "[1]'" . checkBox($data['_add']) . " value='1'>Add</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "[2]'" . checkBox($data['_edit']) . " value='1'>Edit</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "[3]'" . checkBox($data['_delete']) . " value='1'>Delete</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "[4]'" . checkBox($data['_setting']) . " value='1'>Setting</label></td>
									</tr>
								";
							}
						?>
					</table>
					<button type="submit" class="btn btn-default">Save</button>
				</form>
			</div>
		</div>
	</body>
</html>