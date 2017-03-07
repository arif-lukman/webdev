<?php
	//include library
	include "../lib/library.php";

	//include session checker
	include "../controller/check_session.php";

	//set variabel nama db
	$dbname = "_bpms_master";

	//include file koneksi
	include "../controller/koneksi.php";

	//query buat ngambil nama field
	$colQuery = 
	"SHOW columns FROM pengajuan";

	//eksekusi query colQuery
	$colExec = mysql_query($colQuery);

	//query buat ngambil isi field
	$conQuery = "SELECT data.* FROM tbl_user as user, pengajuan as data, data_pengajuan as conn WHERE user.id = conn.id_user and data.No = conn.id_pengajuan and user.id = '$id'";

	//eksekusi query conQuery
	$conExec = mysql_query($conQuery);

	//array buatan
	$all_prop = array();

	//push fieldsnya ke all_prop
	while ($prop = mysql_fetch_field($conExec)){
		array_push($all_prop, $prop->name);
	}
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
			createNavbar(setActiveNav(NAVBAR, "expiry.php"));
		?>
		<div class="container" style="margin-top: 80px">
			<div class="well">
				<h3>Dokumen Kadaluarsa</h3><hr>
				<form action="search_stat.php">
					<?php
						echo createInputField("text", "Kata kunci:", "keyword", "keyword", "", "", false, "");
						echo createSelectOption("Negara:", "country", "country", "---Pilih Negara---", $conn, "SELECT _id, _nama as _name FROM _country", false, "", "", false, "");
						echo createSelectOption("Propinsi:", "province", "province", "---Pilih Propinsi---", $conn, "SELECT _id, _nama as _name FROM _province", false, "", "", false, "");
					?>
					<input type="submit" value="Search">
				</form>
			</div>
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
	</body>
</html>