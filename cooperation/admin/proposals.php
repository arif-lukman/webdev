<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";
	$conn2 = createConnection("localhost", "root", "", "_bpms_vendor");

	//ambil max user id
	$result1 = getResults("SELECT MAX(id) as id FROM tbl_user", $conn2)->fetch_assoc();
	$maxId = $result1["id"];

	//ambil nilai max data id dari masing2 user id
	$arrMaxIds = array();
	for($i = 0; $i <= $maxId; $i++){
		$result2 = getResults("SELECT MAX(id_pengajuan) as id FROM data_pengajuan WHERE id_user='$i'", $conn2)->fetch_assoc();
		$maxDataId = $result2["id"];
		if($maxDataId != "" || $maxDataId != 0){
			array_push($arrMaxIds, $maxDataId);
		}
	}

	//default sql command
	$sql = "SELECT data.No as _id, data.Date, data.Registration_Status, data.Notes, user.nama_perusahaan FROM tbl_user as user, pengajuan as data, data_pengajuan as conn WHERE user.id = conn.id_user and data.No = conn.id_pengajuan";

	//ambil data terkait nilai data id diatas
	for($i = 0; $i < sizeof($arrMaxIds); $i++){
		//$result3 = getResults("SELECT data.No as _id, data.Date, data.Registration_Status, data.Notes, user.nama_perusahaan FROM tbl_user as user, pengajuan as data, data_pengajuan as conn WHERE user.id = conn.id_user and data.No = conn.id_pengajuan and data.No = '$arrMaxIds[$i]'", $conn2);
		//$allValues = pushArray($fieldValues);
		if($i == 0){
			$addition = " and (data.No = '$arrMaxIds[$i]'";
		}
		else if($i == (sizeof($arrMaxIds)-1)){
			$addition = " or data.No = '$arrMaxIds[$i]')";
		}
		else{
			$addition = " or data.No = '$arrMaxIds[$i]'";	
		}		
		$sql .= $addition;
	}

	//ambil nama field
	$fieldNames = getResults("SELECT column_name FROM `information_schema`.`columns` WHERE `table_schema` = '_bpms_vendor' AND `table_name` IN ('tbl_user', 'pengajuan') AND (column_name = 'No' OR column_name = 'nama_perusahaan' OR column_name = 'Date' OR column_name = 'Registration_Status' OR column_name = 'Notes')", $conn);

	//ambil isi field
	$fieldValues = getResults($sql, $conn2);

	//push isi field ke array
	$allValues = pushArray($fieldValues);
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
						echo createInputField("text", "Kata kunci:", "keyword", "keyword", "", "", false, "");
						echo createSelectOption("Negara:", "country", "country", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _country", false, "", "", false, "");
						echo createSelectOption("Propinsi:", "province", "province", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _province", false, "", "", false, "");
					?>
					<input type="submit" value="Search">
				</form>
				<?php
					echo "
						<table class='table table-bordered'>
							<thead>
								<tr>
						";
								while ($colNames = $fieldNames->fetch_assoc()){
									echo "
									<th>$colNames[column_name]</th>
									";
								}
						echo "
								</tr>
							</thead>
							<tbody>
						";
						while($colValues = $fieldValues->fetch_assoc()){
							echo "<tr>";
							foreach($allValues as $item){
								echo "<td>$colValues[$item]</td>";
							}
							echo "
							<td><a href=\"../forms/proposals.php?No=$colValues[_id]\">respond</a></td>
							";
							echo "</tr>";
						}
						echo "
							</tbody>
						</table>
						";
				?>
			</div>
		</div>
	</body>
</html>