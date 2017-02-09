<?php
	//include library
	include "lib/library.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "controller/koneksi.php";

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
				<form action="controller/groups.php" method="post">
					<table width="100%">
						<?php
							while($data = $result->fetch_assoc()){
								echo "
									<tr class='form-group'>
									<td>$data[_name]</td>
							  		<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "'" . checkBox($data['_view']) . " value='1'>View</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "'" . checkBox($data['_add']) . " value='1'>Add</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "'" . checkBox($data['_edit']) . " value='1'>Edit</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "'" . checkBox($data['_delete']) . " value='" . $data['_delete'] . "'>Delete</label></td>
									<td><label class='checkbox-inline'><input type='checkbox' name='" . $data['_name'] . "'" . checkBox($data['_setting']) . " value='" . $data['_setting'] . "'>Setting</label></td>
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